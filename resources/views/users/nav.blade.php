 <nav class="navbar navbar-default " >
      <div class="container">


        <div id="navbar">

          <ul class="nav navbar-nav">

            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>

          </ul>
           <ul class="nav navbar-nav navbar-right">
               					@if (Auth::guest())
               						 @include('users.login')
               					@else
               						@include('users.guest')
               					@endif
               				</ul>

        </div><!--/.nav-collapse -->


      </div>
    </nav>

