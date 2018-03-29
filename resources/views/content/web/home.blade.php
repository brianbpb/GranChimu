@extends('layout.web.master');
@section('content');

<!-- banner -->
		<div class="banner">
			<div class="container">
				<!--- img-slider --->
				<div class="img-slider">
					
					<!----//End-slider-script---->
					<!-- Slideshow 4 -->
					    <div  id="top" class="callbacks_container">
					      <ul class="rslides" id="slider4">
					        <li>
					          <img class="img-responsive" src="images/slide1.jpg" alt="">
					          <div class="slider-caption">
					          	<h1>Beautiful & durable</h1>
					          	<p>Classically simple and beautifully elegant Hard wearing leather shoes and hand-made with heart </p>
					          </div>
					        </li>
					        <li>
					          <img src="images/slide1.jpg" alt="">
					           <div class="slider-caption">
					          	<h1>Beautiful & durable</h1>
					          		<p>Classically simple and beautifully elegant Hard wearing leather shoes and hand-made with heart </p>
					          </div>
					        </li>
					        <li>
					          <img src="images/slide1.jpg" alt="">
					           <div class="slider-caption">
					           	<h1>Beautiful & durable</h1>
					           	<p>Classically simple and beautifully elegant Hard wearing leather shoes and hand-made with heart </p>
					          </div>
					        </li>
					      </ul>
					    </div>
					    <div class="clearfix"> </div>
					</div>
						<!-- slider -->
			</div>
		</div>
		<!-- banner -->

		<!--- top-nav -->
		<div class="top-nav">
			<div class="container">
				<span class="menu"> </span>
				<ul>
					<li class="active"><a href="index.html">Home<span> </span></a></li>
					<li><a href="collections.html">Collections<span> </span></a></li>
					<li><a href="404.html">New Arrivals<span> </span></a></li>
					<li><a href="404.html">Sale<span> </span></a></li>
					<li><a href="404.html">Accessories<span> </span></a></li>
					<li><a href="about.html">About Us<span> </span></a></li>
					<li><a href="contact.html">Contact Us<span> </span></a></li>
					<div class="clearfix"> </div>
				</ul>
			</div>
		</div>
		<!--- top-nav -->
		<!-- script-for-nav -->
		<script>
			$(document).ready(function(){
				$("span.menu").click(function(){
					$(".top-nav ul").slideToggle(500);
				});
			});
		</script>
			
		<!-- /script-for-nav -->
		
		<!-- top-grids -->
		<div class="top-grids">
			<div class="container">
				<div class="col-md-4 top-grid text-center">
					<div class="top-grid-pic">
						<img src="images/pic01.png" title="Boots" />
						<span>Boots</span>
					</div>
					<div class="top-grid-pic-info">
						<a href="single-page.html">Seeall</a>
					</div>
				</div>
				<div class="col-md-4 top-grid text-center">
					<div class="top-grid-pic">
						<img src="images/pic02.png" title="Boots" />
						<span>Casual</span>
					</div>
					<div class="top-grid-pic-info">
						<a href="single-page.html">Seeall</a>
					</div>
				</div>
				<div class="col-md-4 top-grid text-center">
					<div class="top-grid-pic">
						<img src="images/pic03.png" title="Boots" />
						<span>Formal</span>
					</div>
					<div class="top-grid-pic-info">
						<a href="single-page.html">Seeall</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- top-grids -->

@endsection('content');