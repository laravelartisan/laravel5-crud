    @extends('master')

        @section('content')



            Title: <h5>Add New Song</h5>


            <br/><br/>

          {{--Lyric: <br/><br/> {{ $song->lyrics }}--}}
            {!! Form::open(['route'=>'songs.store']) !!}

                @include('songs.form')

            <div class="form-group">
            {!! Form::submit('Add New Song',['class'=>'btn btn-primary']) !!}
            </div>


            {!! Form::close() !!}


        @stop