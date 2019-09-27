@extends("layouts.master")

@section("content")
<div class="line1">
    <div class="line2 wrapper">
        <div class="wrapper">
        @php echo isset($help) ? $help->content : "" @endphp
        </div>
    </div>
</div>
@endsection