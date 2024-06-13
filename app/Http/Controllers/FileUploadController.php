<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload(Request $request)
    {
        return view("file-upload");
        //if ($request->hasFile('berkas')) {
        //    echo "path(): " . $request->berkas->path();
        //    echo "<br>";
        //    echo "extension(): " . $request->berkas->extension();
        //    echo "<br>";
        //    echo "getClientOriginalExtension(): " . $request->berkas->getClientOriginalExtension();
        //    echo "<br>";
        //    echo "getMimeType(): " . $request->berkas->getMimeType();
        //    echo "<br>";
        //    echo "getClientOriginalName(): " . $request->berkas->getClientOriginalName();
        //    echo "<br>";
        //    echo "getSize(): " . $request->berkas->getSize();
        //} else {
        //    echo "Tidak ada berkas yang diupload";
    }
    public function prosesFileUpload(Request $request){
        // dump($request->berkas);
        // dump($request->file('file'))'
        // return "Pemrosesan file upload di sini";
        $request->validate([
            'berkas'=>'required|file|image|max:500',]);
            $path = $request->berkas->store('uploads');
            echo "proses upload berhasil, file berada di: $path";
            //echo $request->berkas->getClientOriginalName()."lolos validasi";
    }
}
