<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Fileentry;
use Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;

class FileEntryController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $entries = Fileentry::all();

        return view('fileentries.index', compact('entries'));
    }

    public function add(Fileentry $entry) {

        $file = Request::file('filefield');
//        dd($file);

        $extension = $file->getClientOriginalExtension();
//        dd($extension);
//           dd(File::get($file));
//        dd($file->getFilename());

//               dd(File::get($file));
//        dd(File::get($file->getFilename().'.'.$extension));    //not valid here
      $store =  Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
       /* dd(File::get($file->getFilename().'.'.$extension));
        dd(Storage::get($file->getFilename().'.'.$extension));*/

//        dd(Storage::height($file->getFilename().'.'.$extension));
//        dd($store);
//        $entry = new Fileentry();
        $entry->mime = $file->getClientMimeType();
//        dd( $entry->mime);
        $entry->original_filename = $file->getClientOriginalName();
//        dd($entry->original_filename);
        $entry->filename = $file->getFilename().'.'.$extension;
//        dd($file->getFilename());
//            dd($entry->filename);
        $entry->save();

        return redirect('fileentry');
    }
    public function get($filename){
        $entry = Fileentry::where('filename', '=', $filename)->firstOrFail();
        $file = Storage::disk('local')->get($entry->filename);
//        dd($file);

        return $file;
        return (new Response($file, 200))
            ->header('Content-Type', $entry->mime);
    }

}