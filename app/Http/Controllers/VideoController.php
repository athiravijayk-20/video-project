<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessVideo;
use App\Models\Video;

use FFMpeg\FFMpeg;
use FFMpeg\FFProbe;
use FFMpeg\Format\Video\X264;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Pion\Laravel\ChunkUpload\Handler\HandlerFactory;
use Pion\Laravel\ChunkUpload\Receiver\FileReceiver;

$ffmpeg = FFMpeg::create();
$ffprobe = FFProbe::create();


class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();

        return view('index', compact('videos'));



    }
    public function home()
    {
        $videos = Video::all();
        $video_num = Video::find(request('id'));

        return view('home2', compact('videos','video_num'));



    }
    public function getVideoByid()
    {
        $video = Video::find(request('id'));
        if ($video) {
            // Return a JSON response with the video data
            return response()->json([
                'success' => true,
                'video' => $video
            ]);
        } else {
            // Return a JSON response indicating failure
            return response()->json([
                'success' => false,
                'message' => 'Video not found'
            ], 404);
        }


    }
    public function upload_view(Request $request)
    {

        return view("video");


    }


    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',

        ]);

        // Store thumbnail
        $thumbnailPath = $request->file('thumbnail')->store('public/thumbnails');
        $thumbnailName = basename($thumbnailPath);

        $videoPath = request()->input('video_names');


        foreach ($videoPath as $array_video) {

            // Save video details to the database
            $video = Video::create([
                'title' => $validatedData['title'],
                'thumbnail' => $thumbnailName,
                'video' => $array_video
            ]);

            $localVideoPath = public_path('storage/videos/' . $array_video);
           // $this->processVideo($localVideoPath, $video->id);
        ProcessVideo::dispatch($localVideoPath, $video->id);

        }

        return redirect('/');
    }
    public function uploadLargeFiles(Request $request)
    {
        // Create a FileReceiver instance to handle the file upload process
        $receiver = new FileReceiver('file', $request, HandlerFactory::classFromRequest($request));

        // Check if the upload was successful
        if (!$receiver->isUploaded()) {
            return response()->json([
                'status' => false,
                'message' => 'File not uploaded.'
            ], 400);
        }

        // Receive the file
        $fileReceived = $receiver->receive();

        // Check if the file upload is complete
        if ($fileReceived->isFinished()) {
            $file = $fileReceived->getFile(); // Get the uploaded file
          $extension = $file->getClientOriginalExtension();
           // Get the file extension
            $fileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME); // Get the file name without extension
            $uniqueFileName = $fileName . '_' . uniqid() . '.' . $extension;
            // Get the default disk (configured in filesystems.php)
            $disk = Storage::disk(config('filesystems.default'));

            // Store the file on the disk
            $path = $disk->putFileAs('public/videos/', $file,  $uniqueFileName);

            // Delete the temporary chunked file
            unlink($file->getPathname());
           /// $this->cleanChunkDir($file->getPath());


            return response()->json([
                env('APP_URL') . 'storage/' . 'videos/' .$uniqueFileName,
                'path' => env('APP_URL') . 'storage/' . 'videos/' . $uniqueFileName,
                'filename' => $uniqueFileName,
                'status' => true
            ], 200);
        }

        // If the file upload is not complete, return the upload progress
        $handler = $fileReceived->handler();
        return response()->json([
            'done' => $handler->getPercentageDone(),

            'status' => true
        ], 200);
    }
    protected function processVideo($filepath, $id)
    {
       $inputFile = $filepath;

        $outputDir = public_path('storage/videos/video' . $id.'/video');

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
    protected function getResolution($filepath)
    {
        $ffprobe = FFProbe::create();
        $resoltuion = $ffprobe->stream($filepath)->videos()->first()->get('width') . 'x' . $ffprobe->stream($filepath)->videos()->first()->get('height');
        dd($resoltuion);



    }


}
