<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Pion\Laravel\ChunkUpload\Handler\HandlerFactory;
use Pion\Laravel\ChunkUpload\Receiver\FileReceiver;

class VideoController extends Controller
{
    public function index()
    {
        return view("video");


    }

    public function store(Request $request)
    {
             // Validate the form data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',

        ]);

        // Store thumbnail
        $thumbnailPath = $request->file('thumbnail')->store('public/thumbnails');
        $videoPath = request()->input('video_names');
        $number=array_unique($videoPath);

         foreach($number as $array_video)
         {

        // Save video details to the database
        Video::create([
            'title' => $validatedData['title'],
            'thumbnail' => $thumbnailPath,
            'video' =>$array_video
        ]);
    }

        return redirect()->back()->with('success', 'Data uploaded successfully!');
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
            $extension = $file->getClientOriginalExtension(); // Get the file extension
            $fileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME); // Get the file name without extension
            $fileName .= '_' . md5(time()) . '.' . $extension; // Generate a unique file name

            // Get the default disk (configured in filesystems.php)
            $disk = Storage::disk(config('filesystems.default'));

            // Store the file on the disk
            $path = $disk->putFileAs('public/videos/', $file, $fileName);

            // Delete the temporary chunked file
            unlink($file->getPathname());


            return response()->json([
                'path' => env('APP_URL') . 'storage/' . 'videos/' . $fileName,
                'filename' => $fileName,
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
}
