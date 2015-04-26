
    <!-- Fixed navbar -->

    @extends('users')

      @section('content')
        @if (Auth::guest())
             <div class="container" >
             @if(Session::has('message'))
                 <div class="alert alert-info">
                   {{Session::get('message')}}
                 </div>
             @endif

                          @include('users.container')

                     </div> <!-- /container -->
        @else
        <div class="container-fluid">
            @include('users.authenticated')
        </div>

        @endif

      @stop

