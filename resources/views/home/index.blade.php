@extends('layout')

@section('content')

 <div id="container" class="container">
		
			@include('partials._sidenav')			
			
			
			<div class="content-scroller">
				<div class="content-wrapper">
					<section >
						<div class="inner" style="padding-left:300px;">
	 
	 <div>

	<ul class="tab-group1" >
        <li style="background-color:white; border:1px solid;text-align:center; 
    border-radius: 5px;
    height: 35px; width:500px; margin-left:270px" >Household Dashboard</li>
    
      </ul>	
	 </div>
<ul class="tab-group1" >
        <li class="tab active" ><a href="/newapplication">Begin Application</a></li>
    
      </ul>	
	   <ul class="tab-group1" >
        <li style="background-color:white; border:1px solid;text-align:center; 
    border-radius: 5px;height: 35px; width:450px; float:left;" >submitted by {{ \Auth::user()->first_name}} {{ \Auth::user()->last_name}} 12:30pm EST 2/25/2016</li>
      <li class="tab active" > <a style="    width: 90px;" href="#">view/print</a></li>
      </ul>
	  
	  </div>
	 
					
						
					</div>
					</section >
					
				
					
					
				</div>
			</div>
        </div>
		
		

			
@stop