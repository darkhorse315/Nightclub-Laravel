@extends("layouts.master")

@section("content")
<div class="line1">
    <div class="line2 wrapper">
        <div class="wrapper">
            @foreach($clubs as $club)
            <article class="col1">
                <h3><a href="/clubs/{{$club->id}}">{{$club->title}}</a></h3>
                <a href="/clubs/{{$club->id}}"><img src="{{$club->image}}" width="225" height="215"></a>
                <div class="pad">
                </div>
            </article>
            @endforeach
        </div>       
    </div>
</div>
@endsection("content")