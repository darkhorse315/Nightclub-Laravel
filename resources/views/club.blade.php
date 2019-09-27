
@extends("layouts.master")

@section("content")
<div class="line1">
    <div class="line2 wrapper">
        <div class="wrapper">
        @php echo isset($club) ? $club->description : "" @endphp  
        </div>
    </div>
</div>
@endsection