
    <!-- Fixed navbar -->

    @extends('users')

      @section('content')
        @if (Auth::guest())
             <div class="container" >

                          @include('users.container')

                     </div> <!-- /container -->
        @else
        <div class="container-fluid">
            @include('users.authenticated')
        </div>

        @endif

      @stop

