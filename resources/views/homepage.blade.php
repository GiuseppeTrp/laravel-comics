@extends('layouts/app')

@section('content')

<main>
    
    <section class=" py-0 px-2">

        <div class="container px-1 pt-5 ">

            <div class="current-series d-inline-block text-uppercase fw-bold py-2 px-4 fs-4">
                current-series
            </div>

            <div class=" d-flex flex-wrap gap-2 pb-4">

                @foreach($comics as $comic)

                <div class="cards">

                    <div class="position mb-1">
            
                        <img src="{{$comic['thumb']}}">
            
                        <div class="description container-fluid text-light text-uppercase">
                
                            <h4>
                                <span>{{$comic['type']}}</span>
                            </h4>
                    
                            <h4>
                                <span>{{$comic['series']}}</span>
                            </h4>
                            <h4>
                                <span>{{$comic['price']}}</span>
                            </h4>
                        </div>
                    </div>
            
                    <h3>
                        {{$comic['title']}}
                    </h3>
            
                </div>
                @endforeach

            </div>

            
            <div class="more  m-auto text-uppercase d-flex justify-content-center">
                <div class="button py-2 px-4 m-2">
                    load more
                </div>
            </div>

        </div>
        
    </section>

    <section class="icon-bar ">

        <div class="container d-flex flex-column pt-4 pb-2 px-3  gap-4 ">
    
            <div class="menu d-flex justify-content-between p-3 gap-2 ">

                @foreach($blueLinks as $currentIcon)
                <div class="icon-menu d-flex align-items-center gap-2  mx-2 text-white fs-6 text-uppercase">
                    <img src="{{Vite::asset("resources/views/images/{$currentIcon['image']}")}}">
                    <div class="text">
                        {{$currentIcon['title']}}
                    </div>
                </div>
                @endforeach

            </div>
    
        </div>

    </section>
</main>

@endsection