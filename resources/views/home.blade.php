@extends("layouts.master")

@section("content")
<div class="line1">
	<div class="line2 wrapper">
		<div class="wrapper">
			@if(isset($homeItems) && count($homeItems) == 3)
			<article class="col1">
				<h2>{{$homeItems[0]->title}}</h2>
				<figure><img src="{{$homeItems[0]->image}}" alt="" class="pad_bot1"></figure>
				<div class="pad">
					@php echo isset($homeItems[0]->description) ? $homeItems[0]->description : ""; @endphp
				</div>
			</article>
			<article class="col2 pad_left1">
				<h2>{{$homeItems[1]->title}}</h2>
				<div class="pad">
					@php echo isset($homeItems[1]->description) ? $homeItems[1]->description : ""; @endphp
				</div>
			</article>
			<article class="col3 pad_left1">
				<h2>{{$homeItems[2]->title}}</h2>
				<div class="pad">
					@php echo isset($homeItems[2]->description) ? $homeItems[2]->description : ""; @endphp
					<div class="wrapper">						
					</div>
				</div>
			</article>
			@endif
		</div>
		<div class="wrapper buttons">
			<article class="col1">
				<a href="/clubs/1" class="button">mehr lesen</a>
			</article>
			<article class="col2 pad_left1">
				<a href="/clubs" class="button">mehr lesen</a>
			</article>
			<article class="col3 pad_left1">
				<a href="/gallery" class="button">Fotos</a>
			</article>
		</div>
	</div>
</div>			
@endsection("content")	