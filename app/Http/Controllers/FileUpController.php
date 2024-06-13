<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUpController extends Controller
{
    public function fileUpload()
    {
        return view('file-upload');
    }
    public function prosesFileUpload(Request $request)
    {
        return "Pemrosesan file upload di sini";
    }
}