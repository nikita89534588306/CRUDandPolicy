<x-main-layout>
    <header>
        @include('templates.header')
    </header>
    <main>
        <div class='container'>
            <div class='news-list row flex-column align-items-center'>
                <h1 class='news-list-header m-3 text-center'>Последние новости</h1>
                @foreach($posts as $singlePost)
                    <div class="card col-6 mb-4">
                        <div class="card-body ">
                            <h5 class="card-title">{{ $singlePost->title}}</h5>
                            <p class="card-text">
                                {{  (strlen($singlePost->content) > 150) ? mb_strimwidth($singlePost->content, 0, 150, "...") : $singlePost->content ;  }}
                            </p>
                            <a href="#" class="btn btn-primary">Читать статью</a> 
                        </div>
                    </div>       
                @endforeach
            </div>       
        </div>  
    <main>
</x-main-layout>