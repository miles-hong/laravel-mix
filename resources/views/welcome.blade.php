<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Laravel</title>
		<link href="{{ asset('css/app.css')}}" rel="stylesheet" type="text/css">
	</head>
	<body>
<div class="container-fluid">
	<div class="flexslider">
		<ul class="slides">
			<li><img src="http://placehold.it/1920x500/ff0000" /></li>
			<li><img src="http://placehold.it/1920x500/00ff00" /></li>
			<li><img src="http://placehold.it/1920x500/0000ff" /></li>
		</ul>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
			<h1>Laravel</h1>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos illum neque quam quae aspernatur, a possimus saepe, soluta earum ad sequi, consectetur pariatur sunt distinctio amet ipsa! Esse, ex autem.</p>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos illum neque quam quae aspernatur, a possimus saepe, soluta earum ad sequi, consectetur pariatur sunt distinctio amet ipsa! Esse, ex autem.</p>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos illum neque quam quae aspernatur, a possimus saepe, soluta earum ad sequi, consectetur pariatur sunt distinctio amet ipsa! Esse, ex autem.</p>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos illum neque quam quae aspernatur, a possimus saepe, soluta earum ad sequi, consectetur pariatur sunt distinctio amet ipsa! Esse, ex autem.</p>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos illum neque quam quae aspernatur, a possimus saepe, soluta earum ad sequi, consectetur pariatur sunt distinctio amet ipsa! Esse, ex autem.</p>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos illum neque quam quae aspernatur, a possimus saepe, soluta earum ad sequi, consectetur pariatur sunt distinctio amet ipsa! Esse, ex autem.</p>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos illum neque quam quae aspernatur, a possimus saepe, soluta earum ad sequi, consectetur pariatur sunt distinctio amet ipsa! Esse, ex autem.</p>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos illum neque quam quae aspernatur, a possimus saepe, soluta earum ad sequi, consectetur pariatur sunt distinctio amet ipsa! Esse, ex autem.</p>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos illum neque quam quae aspernatur, a possimus saepe, soluta earum ad sequi, consectetur pariatur sunt distinctio amet ipsa! Esse, ex autem.</p>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos illum neque quam quae aspernatur, a possimus saepe, soluta earum ad sequi, consectetur pariatur sunt distinctio amet ipsa! Esse, ex autem.</p>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos illum neque quam quae aspernatur, a possimus saepe, soluta earum ad sequi, consectetur pariatur sunt distinctio amet ipsa! Esse, ex autem.</p>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos illum neque quam quae aspernatur, a possimus saepe, soluta earum ad sequi, consectetur pariatur sunt distinctio amet ipsa! Esse, ex autem.</p>

		</div>
	</div>
</div>            
		

		<script src="{{ asset('js/app.js')}}"></script>
		<script>
				$('.flexslider').flexslider({
					animation: "slide",
					slideshowSpeed: 5000,
        			start: function(slider){
          				$('body').removeClass('loading');}
				});
		</script>
	</body>
</html>
