<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function showFileUploadForm()
    {
        return view('assignment');
    }

    public function handleFileUpload(Request $request)
    {
        $request->validate([
            'file_name' => 'required|string',
            'file' => 'required|file|image|max:500',
        ]);

        $extension = $request->file->getClientOriginalExtension();
        $completeFileName = $request->file_name . '.' . $extension;

        $storedPath = $request->file->move('images', $completeFileName);
        $storedPath = str_replace("\\", "//", $storedPath);

        $publicPath = url('images/' . $completeFileName);
        return "
            Image successfully uploaded to <a href='$publicPath'>$completeFileName</a>
            <br>
            <img src='$publicPath' alt='$completeFileName' style='max-width: 500px; height: auto;'>
        ";
    }
}

    // public function fileUpload()
    // {
    //     return view('file-upload');
    // }
    // public function prosesFileUpload(Request $request){

        //dump($request->berkas);
        //dump($request->file('berkas'));
        //return "Pemrosesan file upload di sini";
        
        // if ($request->hasFile('berkas')) {
        //     echo "path(): " . $request->berkas->path();
        //     echo "<br>";
        //     echo "extension(): " . $request->berkas->extension();
        //     echo "<br>";
        //     echo "getClientOriginalExtension(): " . $request->berkas->getClientOriginalExtension();
        //     echo "<br>";
        //     echo "getMimeType(): " . $request->berkas->getMimeType();
        //     echo "<br>";
        //     echo "getClientOriginalName(): " . $request->berkas->getClientOriginalName();
        //     echo "<br>";
        //     echo "getSize(): " . $request->berkas->getSize();
        // } else {
        //     echo "Tidak ada berkas yang diupload";
        // }

        // // Validate the file upload
        // $request->validate([
        // //     'berkas'=>'required|file|image|max:500',
        // // ]);
        // 'berkas'=>'required|file|image|max:500',]);
        // // echo $request->berkas->getClientOriginalName()."lolos validasi";
        // $textFile = $request->berkas->getClientOriginalName();
        // $namaFile ='web'.time().".".$textFile;
        // // $path = $request->berkas->storeAs('uploads', $namaFile);
        // // echo "proses upload berhasil, data disimpan pada: $path";
        // //$path = $request->berkas->storeAs('public', $namaFile);

        // //$pathBaru=asset('storage/'.$namaFile);
        // $path = $request->berkas->move('gambar', $namaFile);
        // $path = str_replace("\\","//", $path);
        // echo "variable path berisi:$path <br>";

        // $pathBaru=asset('gambar/'.$namaFile);

        // echo "proses upload berhasil, data disimpan pada:$path";
        // echo "<br>";
        // echo "Tampilkan link: <a href='$pathBaru'>$pathBaru</a>";
    