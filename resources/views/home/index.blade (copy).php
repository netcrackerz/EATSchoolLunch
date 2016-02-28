@extends('layout')

@section('content')


<p>Our Team</p>


 <div id="container" class="container">
		
			<aside class="menu" id="menu">			
			
				<div class="headline">
					<a href="index.html">
					</a>
				</div>
				
				<nav>
							 <ul class="nav">
							</ul>
		
				</nav>
				
			</aside>			
			
			
			<div class="content-scroller">
				<div class="content-wrapper">
					
					<section >
						
						<div class="inner">
	 
	  						<ul class="tab-group1" style="margin:20px">
	        					<li class="tab active" ><a href="index.html">Begun</a></li>
	    
	      					</ul>
	  					</div>
	  				
	  				<img src="{{ asset('images/casual.png') }}"  alt="" style="width:600px; margin:50px 400px;">
					
						
					
					</section >
					
				
					
					
				</div>
			</div>
        </div>
		
		     <!-- The JavaScript -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>		
        <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"  ></script>
        <script type="text/javascript">
            $(function() {
                $('ul.nav a').bind('click',function(event){
                    var $anchor = $(this);
                    /*
                    if you want to use one of the easing effects:
                    $('html, body').stop().animate({
                        scrollLeft: $($anchor.attr('href')).offset().left
                    }, 1500,'easeInOutExpo');
                     */
                    $('html, body').stop().animate({
                        scrollLeft: $($anchor.attr('href')).offset().left
                    }, 1000);
                    event.preventDefault();
                });
            });
        </script>
@stop