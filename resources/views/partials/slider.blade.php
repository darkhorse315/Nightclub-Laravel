<div id="gallery">
    <ul id="myRoundabout">
        @if(isset($banners))
            @foreach($banners as $banner)
            <li><img src="{{$banner->image}}" alt=""></li>
            @endforeach
        @endif
    </ul>
</div>