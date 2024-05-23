<?php

namespace App\Jobs;

use FFMpeg\FFMpeg;
use FFMpeg\Format\Video\X264;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessVideo implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $filepath;
    protected $id;

    /**
     * Create a new job instance.
     */
    public function __construct($filepath, $id)
    {
        $this->filepath = $filepath;
        $this->id = $id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {

        $inputFile = $this->filepath;
        echo "". $inputFile . PHP_EOL;


        $outputDir = public_path('storage/videos/video' . $this->id.'/video');

       // $ffprobe1 = FFProbe::create();
      //  $resoltuion = $ffprobe1->streams($filepath)->videos()->first()->get('width') . 'x' . $ffprobe1->streams($filepath)->videos()->first()->get('height');


        // Create output directories if they don't exist
        $resolutions = ['360px' => '640x360', '480px' => '854x480', '720p' => '1280x720', '1080p' => '1920x1080'];
        $ffmpeg = FFMpeg::create();
        foreach ($resolutions as $folder => $resolution) {
            if (!file_exists($outputDir . $folder)) {
                mkdir($outputDir . $folder, 0777, true);
            }
        }


        // Open the video file
        $video = $ffmpeg->open($inputFile);

        // Compress and save the video in different resolutions
        foreach ($resolutions as $folder => $resolution) {
            $outputFile = $outputDir . $folder . '/' . basename($inputFile);

            // Create video format
            $format = new X264();
            $format->setKiloBitrate(1000); // Set bitrate

            // Resize the video
            list($width, $height) = explode('x', $resolution);
            $video
                ->filters()
                ->resize(new \FFMpeg\Coordinate\Dimension($width, $height))
                ->synchronize();

            // Save the video
            $video->save($format, $outputFile);

            echo "Video saved to: " . $outputFile . PHP_EOL;







        }
    }
}
