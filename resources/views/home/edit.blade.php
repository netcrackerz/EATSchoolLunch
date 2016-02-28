@extends('layout')

@section('content')
		
<!--		<script type="text/javascript" src="js/jquery.min.js"></script>
			   

		<noscript>
			<style>
				@media screen and (max-width: 715px) {
					.content-scroller {
						overflow:visible;
					}
				}
			</style>
		</noscript>
		
<style>
.dropdown {
    position: relative;
    display: inline-block;
	background: rgba(160, 179, 176, 0.25);
	padding:5px;
	border-radius: 5px;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    margin-left: -100px;
	border-radius: 10px;
	
}

.dropdown:hover .dropdown-content {
    display: block;
	
}
</style>
    </head>

	
    <body> -->
        <div id="container" class="container">
		
			<aside class="menu" id="menu">			
			
				<div class="headline">
					
						<img src="images/build.png" alt="">
				</div>
				
				
			</aside>			
			<div class="content-scroller">
				<div class="content-wrapper">
					
					<section class="content home" id="section1">
						
						<div class="align-center">
						<div class="form">
      
	  <button style="background: #1ab188;color: #ffffff;border-radius: 5px;padding: 5px;height: 40px;">
      <ul class="tab-group1">	
        <li class="tab active">Add Child</li>
     
      </ul></button>
      
      <div class="tab-content">
        <div style="display: block;" >   
         
          
          <form  action="#section2" method="post" >
          
          <div class="top-row">
           <div class="email_healing_container full_width" style="width:18%;">
		<label class="email full_width" ><br>
			Child's First Name<br>
			<div class="email_healing_container full_width">
				<input type="text" class="email_field small" name="email_address" placeholder="Jhon" data-email-healing="true">
				<div class="email_healing_overlay small hidden"></div>
			</div>
		</label>
		<p class="error_msg input_note hidden moscow_red no_bottom_margin"></p>
	</div>
        
            <div class="field-wrap" style="width:5%;">
            <div class="col span_1_of_2">
		<div class="col span_1_of_2 mobile_col small_right_padding">
			<label class="full_width">
				<br>  <label style="padding: 0 0 0 8px;">MI</label><br>
				<input type="text" name="first_name" placeholder="M" class="small small_right_margin no_bottom_margin full_width" maxlength="200">
			</label>
		</div>
		
	</div>
	

            </div>
	<div class="col span_1_of_2 mobile_col float_right" style="width:18%;">
			<label class="full_width">
				<br> 			Child's Last Name<br>
				<input type="text" name="last_name" placeholder="James" class="small no_bottom_margin full_width" maxlength="200">
			</label>
		</div>			
	
			
<div class="field-wrap" style="width:507px"> <label>
               <BR>    <div style="float:left; padding-left: 15px;" > Student ? </div>
										<div style="float:left; padding-left: 40px;">Foster Child  </div>
										<div style="float:left; padding-left: 12px;">Homeless </div>
										<div style="float:left; padding-left: 12px;">Migrant </div>
										<div style="float:left; padding-left: 12px;">Runaway</div>
              </label>
			<div class="example">
   <div  style="float: left;" ><form>
        <input id="radio1" type="radio" name="radio" value="1" ><label for="radio1"><span><span></span></span>Yes</label>
      
        <input id="radio2" type="radio" name="radio" value="2"><label for="radio2"><span><span></span></span>No</label>
		
     </form></div> 
	 <div style="float: left; padding: 0 0 0 70px;">
			  <input id="1" type="checkbox" name="radio" value="3"><label for="1" ><span><span></span></span></label>
			  <input id="2" type="checkbox" name="radio1" value="3"><label for="2" style="padding: 0 0 0 60px;"><span><span></span></span></label> </div>
	 <div style=" padding: 0 0 0 70px;">
	 <input id="3" type="checkbox" name="radio1" value="3"><label for="3" style="padding: 0 0 0 60px;" ><span><span></span></span></label>
	</div>
	 <div style="float:right;  padding: 0 30px 0 0;margin-top: -31px;">		  
	 <input id="4" type="checkbox" name="radio1" value="3"><label for="4" style="padding: 0 0 0 40px;"><span><span></span></span></label>
	 </div>
    </div>
		  
	            </div>
				
				
		    </div>
		
          
         
          

        </div>
		
		  
        <!-- sign in ends here -->
      </div><!-- tab-content -->
      
	 
  <ul class="tab-group1"> <li><a href="#section2" class="nav nav_home">Save</a></li><li><a href="#section2" class="nav nav_home">Cancel</a></li></ul>


</div>
						
					</div>
					</section>
					


</div>
						
					</div>
						</div>							
							
						
					</section>
								
					
				</div>
			</div>
        </div>
	
@stop