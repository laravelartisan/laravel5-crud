    @extends('master')

        @section('content')



        Title: <h5>{{ $song->title }}</h5>


            <br/><br/>

          Lyric: <br/><br/> {!! nl2br($song->lyrics)  !!}



        @stop