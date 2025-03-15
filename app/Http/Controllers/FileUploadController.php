<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpg,png,pdf,docx|max:2048',
        ]);

        if($request->file('file')) {
            $file = $request->file('file');
            // Stores in storage/app/public/uploads
            $path = $file->store('uploads', 'public'); 

            // return back()->with('success', 'File uploaded successfully.')->with('path', $path);
            return response()->json(['message' => 'File uploaded successfully', 'path' => $path], 200);
        }

        // return back()->with('error', 'File not uploaded.');
        return response()->json(['message' => 'File not uploaded'], 400);
    }
}
