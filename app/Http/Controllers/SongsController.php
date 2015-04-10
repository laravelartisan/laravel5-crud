<?php namespace App\Http\Controllers;

        use App\Http\Requests;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Song;
        use Illuminate\Support\Facades\Redirect;
        use App\Http\Requests\CreateSongRequest ;

    class SongsController extends Controller {


        private $song;

        public function __construct(Song $song)
        {

            $this->song = $song;


        }

        /**
         * Display a listing of the resource.
         *
         * @return Response
         */

        public function index()
        {
            //

            $songs = $this->song->get();
           // $songs = Song::all();
    //        dd($songs);

            return view('songs.index',compact('songs'));
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return Response
         */
        public function create()
        {
            //
            return view('songs.create');
        }

        /**
         * Store a newly created resource in storage.
         *
         * @return Response
         */
        public function store(CreateSongRequest $request,Song $song )
        {
            //
            $song->create($request->all());
            return redirect()->route('song_list');
        }

        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return Response
         */
        public function show(Song $song)
        {
            //
//            dd($song);
            return view('songs.show',compact('song'));
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return Response
         */
        public function edit(Song $song)
        {
            //
            return view('songs.edit',compact('song'));
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  int  $id
         * @return Response
         */
        public function update(Request $request,Song $song )
        {

    //        dd($song);
    //        dd($request);
            $this->validate($request, [
                'title' => 'required|max:255',
                'slug' => "required|unique:songs,slug,$song->id|max:10", //slug field is unique for all songs except the song(here mentioned
            // through $song->id  ) being edited
            ]);

              $song->fill($request->all())->save();
    //        dd($song);

                return redirect()->route('song_list');



        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return Response
         */
        public function destroy(Song $song)
        {
            //
            $song->delete();
            return redirect()->route('song_list');
        }

    }
