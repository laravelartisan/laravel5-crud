





        <div class="row">
            <div class="col-md-5">
                     Hello Mr Mr {{ Auth::user()->name }} {!! '<br>' !!} you are logged in..{!! '<br>' !!}
            your articles are............. {!! '<br><br>' !!}
{{--            {{$usersArticles}}--}}

                       @foreach($usersArticles as $articles)

                                  {{ $articles->title }} {!! '<br><br>' !!}

                                  {{ $articles->body }}{!! '<br><br><br>' !!}



                       @endforeach
{{--            your id is {{ Auth::user()->id }}--}}

            </div>

        </div>