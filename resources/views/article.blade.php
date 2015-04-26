

    @foreach($articles as $article)

           {{ $article->title }}
           {!! '<br>' !!}

           {{$article->body}}

           {!! '<br>'!!}


    @endforeach

