<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wunderinonline.com/gallery.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Sep 2019 15:45:20 GMT -->
<head>
<title>{{isset($title) ? $title->title : ''}}</title>
<meta charset="utf-8">
<link rel="stylesheet" href="/css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="/css/prettyPhoto.css" type="text/css" media="all">
<link rel="stylesheet" href="/css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="/css/style.css" type="text/css" media="all">
<script type="text/javascript" src="/js/jquery-1.5.2.js" ></script>
<script type="text/javascript" src="/js/cufon-yui.js"></script>
<script type="text/javascript" src="/js/cufon-replace.js"></script> 
<script type="text/javascript" src="/js/Terminal_Dosis_300.font.js"></script>
<script type="text/javascript" src="/js/atooltip.jquery.js"></script>
<script src="/js/roundabout.js" type="text/javascript"></script>
<script src="/js/roundabout_shapes.js" type="text/javascript"></script>
<script src="/js/jquery.easing.1.2.js" type="text/javascript"></script>
<script type="text/javascript" src="/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="/js/hover-image.js"></script>
<script type="text/javascript" src="/js/tabs.js"></script>
<script type="text/javascript" src="/js/script.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5.js"></script>
	<style type="text/css">
		.bg {behavior:url(js/PIE.htc)}
	</style>
<![endif]-->
<!--[if lt IE 7]>
	<div style='clear:both;text-align:center;position:relative'>
		<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" alt="" /></a>
	</div>
<![endif]-->
</head>
<body id="page3">
<div class="body1">
	<div class="body2">
		<div class="body3">
			<div class="main">
<!-- header -->
				<header>
					<div class="wrapper">
                        <h1><a href="/" style="background:url({{ isset($logo) ? $logo->image : '' }}) 0 0 no-repeat;" id="logo" title="{{isset($title) ? $title->title : ''}}"></a></h1>
						<form id="search" method="post">
							<div>
								<input type="submit" class="submit" value="">
								<input class="input" type="text" value="Site Search" onblur="if(this.value=='') this.value='Site Search'" onfocus="if(this.value =='Site Search' ) this.value=''">
							</div>
						</form>
						@include("partials.header")
					</div>
					<div class="relative">
						<div id="gallery">
                        @include("partials.slider")
						</div>
					</div>
				</header><div class="ic">{{isset($title) ? $title->title : ''}}</div>	
<!-- / header-->
<!-- content -->
				<section id="content">
					<div class="line1 wrapper">
						<div class="wrapper tabs">
                        <article class="col1">
                            <h2>Blick</h2>
                            <div class="pad">
                                <ul class="nav">
                                    @foreach($categories as $category)
                                    <li class="tablinks" onclick="openImage(event, 'imageName{{$category->id}}')"><a>{{$category->title}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </article>
                        @foreach($categories as $category)
                        <article class="col2 pad_left1 tab-content" id="imageName{{$category->id}}">
                            <h2>{{$category->title}}</h2>
                            <ul class="gallery">
                                @foreach($category->galleries as $gallery)
                                <li>
                                    <a href="{{$gallery->large_image}}" class="lightbox-image" rel="prettyPhoto[group{{$category->id}}]" >
                                        <img src="{{$gallery->image}}" alt="">
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </article>
                        @endforeach
							
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</div>
<div class="body4">
	<div class="main">
		<section id="content2">
		</section>
	</div>
</div>
<!-- / content -->
<div class="main">
<!-- footer -->
	<footer>
        <div class="wrapper">
            <span class="left">			 	
                2019 &copy; <a href="/">{{isset($title) ? $title->title : ''}}</a> All Right Reserved <br>
            </span>		
	    </div>
<!-- {%FOOTER_LINK} -->
	</footer>
<!-- / footer -->
</div>
<script type="text/javascript"> 
Cufon.now(); 


function openImage(evt, imageName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tab-content");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(imageName).style.display = "block";
  evt.currentTarget.className += " active";
}

</script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#myRoundabout').roundabout({
			 shape: 'square',
			 minScale: 0.93, // tiny!
			 maxScale: 1, // tiny!
			 easing:'easeOutExpo',
			 clickToFocus:'true',
			 focusBearing:'0',
			 duration:800,
			 reflect:true
		});
		tabs.init();
		// for lightbox
		if ($("a[rel^='prettyPhoto']").length) {
			$(document).ready(function() {
				// prettyPhoto
				$("a[rel^='prettyPhoto']").prettyPhoto({theme:'light_square'});
			});
		} 
	});
</script>
</body>

<!-- Mirrored from wunderinonline.com/gallery.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Sep 2019 15:47:47 GMT -->
</html>