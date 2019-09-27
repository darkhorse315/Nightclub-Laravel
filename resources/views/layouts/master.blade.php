<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wunderinonline.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Sep 2019 15:43:46 GMT -->
<head>
<title>{{isset($title) ? $title->title : ''}}</title>
<meta charset="utf-8">
<link rel="stylesheet" href="/css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="/css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="/css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="/css/style.css" type="text/css" media="all">
<script type="text/javascript" src="/js/jquery-1.5.2.js" ></script>
<script type="text/javascript" src="/js/cufon-yui.js"></script>
<script type="text/javascript" src="/js/cufon-replace.js"></script> 
<script type="text/javascript" src="/js/Terminal_Dosis_300.font.js"></script>
<script type="text/javascript" src="/js/atooltip.jquery.js"></script>
<script type="text/javascript" src="/js/roundabout.js"></script>
<script type="text/javascript" src="/js/roundabout_shapes.js"></script>
<script type="text/javascript" src="/js/jquery.easing.1.2.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/hover-image.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>
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
<body id="page1">
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
                        @include("partials.slider")
					</div>
				</header><div class="ic">{{isset($title) ? $title->title : ''}}</div>	
<!-- / header-->
<!-- content -->
				<section id="content">
					@yield("content")
				</section>
			</div>
		</div>
	</div>
</div>
<div class="body4">
	<div class="main">
		@include("partials.footer")
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
<script type="text/javascript"> Cufon.now(); </script>
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
	});
</script>
</body>

<!-- Mirrored from wunderinonline.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Sep 2019 15:44:53 GMT -->
</html>