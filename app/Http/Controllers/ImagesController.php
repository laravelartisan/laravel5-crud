<?php namespace App\Http\Controllers;

//use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Image;

//use Illuminate\Http\Request;
use Request;
use Illuminate\Support\Facades\Input;
//use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;

class ImagesController extends Controller {

    public  function index(){

     return   view('photo');
//        $img = Image::make('foo.jpg')->resize(300, 200);
//        $img = Image::make(Input::file('photo'))->resize(300, 200)->save('foo.jpg');

//        return $img->response('jpg');

    }

    public  function  createImage(){
        $file = Request::file('photo');
//        dd($file);
//        dd($image);
//        $img = Image::make(Request::file('photo'))->resize(300, 200)->save('foo.jpg');
//        dd(Image::make($image));
//        $extension = $file->getClientOriginalExtension();
        $imageOriginalName = $file->getClientOriginalName();

     /*   $height = $_POST['height'];
        $width  = $_POST['width'];
        $option = $_POST['option'];*/
//        $img  = $_FILES['photo']['name'];
//        dd($img);
//        $image = $_FILES['photo']['tmp_name'];
//        $store =  Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
//        var_dump($img);
        echo '<br>';
//        var_dump($image);die();

        // *** 1) Initialise / load image
        $resizeObj = new Image($imageOriginalName,$file);

        // *** 2) Resize image (options: exact, portrait, landscape, auto, crop)
        $resizeObj -> resizeImage(100, 100, 'exact');

        // *** 3) Save image
        $resizeObj -> saveImage('image/new.jpg', 100);

        }
	//

}
