    @extends('master')

        @section('content')



            Title: <h5>{{ $song->title }}</h5>


            <br/><br/>

          {{--Lyric: <br/><br/> {{ $song->lyrics }}--}}
            {!! Form::model($song,['route'=>['song_update',$song->slug],'method'=>'PATCH']) !!}
              {{--songs.update()=song_update in routes.php --}}

                @include('songs.form')

                <div class="form-group">
                    {!! Form::submit('Update Song',['class'=>'btn btn-primary']) !!}
                </div>


            {!! Form::close() !!}


            {{--{!! Form::open(['method'=>'DELETE','route'=>['song_destroy',$song->slug]]) !!}
            --}}{{--songs.destroy=song_destroy in routes.php --}}{{--


                <div class="form-group">
                     {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
                </div>


            {!! Form::close() !!}--}}
          {!!  delete_form(['song_destroy',$song->slug]) !!}

        @stop