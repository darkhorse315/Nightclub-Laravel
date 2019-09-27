@extends("layouts.master")

@section("content")
<div class="wrapper">
    <h2>Kontakt {{$title->title}}</h2>
    <form id="ContactForm">
        <div>
            <div class="wrapper">
                <span>Ihr Name :</span><input type="text" class="input" required>
            </div>
            <div class="wrapper">
                <span>Ihre E-Mail :</span><input type="email" class="input" required>								
            </div>
            <div class="textarea_box">
                <span>Ihre Nachricht :</span><textarea name="textarea" cols="1" rows="1" required></textarea>								
            </div>
            <span>&nbsp;</span>
            <input type="submit" class="button" onclick="myFuntion();" value="Send"/>
        </div>
    </form>
    
<script type="text/javascript">
function myFunction(){
    alert("danke Ihre Nachricht erhalten.");
}
</script>    
    
</div>
@endsection