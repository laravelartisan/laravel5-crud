    @extends('master')

        @section('content')



            @foreach($songs as $song)

                    <ul>

                        <li>{!! link_to_route('song_details',$song->title,[$song->slug])  !!}</li>
                        {{--<li>
                        <a href="{!! route('song_path',[$song->slug]) !!}">{{ $song->title }}</a>
                        </li>--}}

                    </ul>


            @endforeach




        @stop