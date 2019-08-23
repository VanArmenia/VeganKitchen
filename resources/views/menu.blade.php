@extends('layouts.app')

@section('title', ' - Creating memories, one experience at a time')

@section('content')

    <img src="/images/patio.jpg" class="home">
    <div class="menu-categories">
        @foreach ($categories as $cat)
            <article>
                <a href="/menu#{{Str::slug($cat->name)}}"><img src="/images/{{$cat->image}}"></a>
                <h2><a href="/menu#{{Str::slug($cat->name)}}">{{$cat->name}}</a></h2>
            </article>
        @endforeach
    </div>

    {{--Menu Items--}}
    <div style="text-align: center">
        <hr>
        <h2 id="starters">Starters</h2>

        <div class="row menuitems">
            @foreach ($starters as $starter)
             <div class="col">
                <article>

                    <a href="/menu#{{Str::slug($starter->name)}}"><img src="/storage/images/{{$starter->image}}"></a>
                    <h2><a href="/menu#{{Str::slug($starter->name)}}">{{$starter->name}}</a></h2>
                </article>
             </div>
            @endforeach
        </div>

    </div>

    <div style="text-align: center">
        <hr>
        <h2 id="salads">Salads</h2>

        <div class="row menuitems">
            @foreach ($salads as $salad)
                <div class="col">
                    <article>

                        <a href="/menu#{{Str::slug($salad->name)}}"><img src="/storage/images/{{$salad->image}}"></a>
                        <h2><a href="/menu#{{Str::slug($salad->name)}}">{{$salad->name}}</a></h2>
                    </article>
                </div>
            @endforeach
        </div>
    </div>

    <div style="text-align: center">
        <hr>
        <h2 id="dishes">Dishes</h2>
        <div class="row menuitems">
            @foreach ($entrees as $entree)
                <div class="col">
                    <article>

                        <a href="/menu#{{Str::slug($entree->name)}}"><img src="/storage/images/{{$entree->image}}"></a>
                        <h2><a href="/menu#{{Str::slug($entree->name)}}">{{$entree->name}}</a></h2>
                    </article>
                </div>
            @endforeach
        </div>
    </div>

    <div style="text-align: center">
        <hr>
        <h2 id="desserts">Desserts</h2>
        <div class="row menuitems">
            @foreach ($desserts as $dessert)
                <div class="col">
                    <article>

                        <a href="/menu#{{Str::slug($dessert->name)}}"><img src="/storage/images/{{$dessert->image}}"></a>
                        <h2><a href="/menu#{{Str::slug($dessert->name)}}">{{$dessert->name}}</a></h2>
                    </article>
                </div>
            @endforeach
        </div>
    </div>

    <div class="social">
        <div>
            <h4>What our customers say</h4>
            <p>
                This place has, without a doubt, some of the best pizza I have ever had!
                The owners are hands on and made sure we had everything we needed.
                They are an eclectic eatery, with a large variety of meals to choose from,
                but everything I’ve tried from their menu has been great.
                It’s definitely a place you have to give a few tries to get a feel for everything they have to offer.
                Oh, and their crème brulee is amazing!<br>
                <br>
                Shad Cayden
            </p>
        </div>
        <div class="networks">
            <a href="#"><img src="/images/twitter.png"></a>
            <a href="#"><img src="/images/fb.png"></a>
            <a href="#"><img src="/images/ig.png"></a>
        </div>
    </div>
@endsection
