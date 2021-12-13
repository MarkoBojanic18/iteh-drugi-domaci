@extends('master')
@section("content")





<div class="cover">
    <h1>Find your own place and win the world!</h1>
</div>
<div class="brends">
    <img src="/images-videos/samsung.png" class="superdry" alt="">
    <img src="/images-videos/apple.png" class="theNorthFace" alt="">
    <img src="/images-videos/lenovo.png" class="underArmour" alt="">
    <img src="/images-videos/sony.png" class="adidas" alt="">
    <img src="/images-videos/nokia.png" class="champion" alt="">
    <img src="/images-videos/huawei.png" class="nike" alt="">
    <img src="/images-videos/bosch.png" class="lacosta" alt="">
    <img src="/images-videos/benq.png" class="puma" alt="">

</div>





<div class="discount">
    <div class="video">
        <img src="/images-videos/specialOffer.jpg" type="video/mp4" alt="">
    </div>
    <div class="rightSide">
        <div class="tajmer">
            <h1>Special Offer ends in:</h1>
            <div class="countdown">
                <div id="day"></div>
                <div id="hour"></div>
                <div id="minute"></div>
                <div id="second"></div>

            </div>
        </div>
        <div class="text">
            <p>Lorem ipsum dolor sit amet consectetur,
                adipisicing elit. Voluptates veniam,
                reiciendis temporibus officia minus
                ipsam maxime repellendus,
                cupiditate tenetur numquam nobis
                illo! Alias nihil id ipsum. In
                eveniet molestias vitae!</p>
            <a href="#">Take a tour</a>
        </div>
    </div>
</div>




<h1 class="heading1">Trending now</h1>
<div class="trendingNow">
    <div class="picture1">
        <img src="/images-videos/trendingNow1.jpg" class="singleImg" alt="">
        <p>Going with a new flow</p>
        <div class="buttons">
            <ul>
                <li><a href="">Explore</a></li>
                <li><a href="">Shop</a></li>
            </ul>
        </div>
    </div>
    <div class="picture2">
        <img src="/images-videos/trendingNow2.jpg" class="singleImg" alt="">
        <p>Heat up the holidays</p>
        <div class="buttons">
            <ul>
                <li><a href="">Explore</a></li>
                <li><a href="">Shop</a></li>
            </ul>
        </div>
    </div>

    <div class="picture3">
        <img src="/images-videos/trendingNow3.jpg" class="singleImg" alt="">
        <p>Find leggings for you</p>
        <div class="buttons">
            <ul>
                <li><a href="">Explore</a></li>
                <li><a href="">Shop</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="uefaBall">

    <img src="/images-videos/championLeague.png" alt="">

</div>









<div class="custom-product">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            @foreach($products as $item)
            <div class="item {{$item['id']==1?'active':''}}">
                <a href="detail/{{$item['id']}}">
                    <img class="slider-img" src="{{$item['gallery']}}">
                    <div class="carousel-caption slider-text ">
                        <h3>{{$item['name']}}</h3>
                        <p>{{$item['description']}}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="trending-wrapper">
        <h3>Tredning Products</h3>
        @foreach($products as $item)
        <div class="trending-item">
            <a href="detail/{{$item['id']}}">
                <img class="trending-image" src="{{$item['gallery']}}">
                <div class="">
                    <h3>{{$item['name']}}</h3>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
</div>

<div class="clothing1">
    <div class="prvaSlika">
        <img src="/images-videos/gamingChairs.jpg" alt="">
        <p>Gaming chairs</p>
        <a href="">Read more</a>
    </div>
    <div class="drugaSlika">
        <img src="/images-videos/laptop.jpg" alt="">
        <p>Laptops</p>
        <a href="">Read more</a>
    </div>
</div>

<div class="clothing2">
    <div class="prvaSlika">
        <img src="/images-videos/fridge.jpg" alt="">
        <p>Fridge</p>
        <a href="">Read more</a>
    </div>
    <div class="drugaSlika">
        <img src="/images-videos/headphones.jpg" alt="">
        <p>Headphones</p>
        <a href="">Read more</a>
    </div>
    <div class="trecaSlika">
        <img src="/images-videos/tv.jpg" alt="">
        <p>TV</p>
        <a href="">Read more</a>
    </div>
</div>
@endsection