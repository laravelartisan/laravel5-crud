    @extends('master')

        @section('content')


<div class="container">
  <table width="60%" cellspacing="0" cellpadding="4" border="0" class="data">
    @foreach($songs as $song)
    <tr>
      <td>{!! link_to_route('song_details',$song->title,[$song->slug])  !!} </td>

    </tr>
    @endforeach
  </table>
  <div class="pagination"> {!!  $songs->render() !!}  </div>
</div>


           {{-- @foreach($songs as $song)

                    <ul>

                        <li>{!! link_to_route('song_details',$song->title,[$song->slug])  !!}</li>
                        --}}{{--<li>
                        <a href="{!! route('song_path',[$song->slug]) !!}">{{ $song->title }}</a>
                        </li>--}}{{--

                    </ul>


            @endforeach--}}




        @stop