@extends('layout')

@section('content')
        <div id="container" class="container">
		
			<aside class="menu" id="menu">			
			
				<div class="headline">
					
				</div>
				
				<nav>
							 <ul class="nav">
							</ul>
		
				</nav>
				
			</aside>			
			
			
			<div class="content-scroller">
				<div class="content-wrapper" style="overflow: visible;">

					<section >
						<div class="inner" style="padding-left:430px;">
	 
	 <div style="padding-left:350px;">
	 <h2 style="color:black;">Application Review</h1>
	 </div>
	 <div class="ss">
<!-- start--><ul class="tab-group1" style=" width:1000px; height: 100px;">
      
	 
	  <li ><a href="#" class="nav nav_home">edit</a></li>

	   <hr>
	   <br><br>

	   {{ count($application->household->children())}}
	   @foreach( $application->household->children as $child)
      <div class="tab-content">
        <div style="display: block;" >   
         
          
          <div  action="#section2" method="post" >
          
          <div class="top-row">
           <div class="email_healing_container full_width" style="width:18%;">
		<label class="email full_width" ><br>
			Child's First Name<br>
			<div class="email_healing_container full_width">
<!--text came here --> <p> {{ $child->first_name}}</p>
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
			<!--text came here --> <p>  {{ $child->middle_init}}</p>	</label>
		</div>
		
	</div>
	

            </div>
	<div class="col span_1_of_2 mobile_col float_right" style="width:18%;">
			<label class="full_width">
				<br> 			Child's Last Name<br>
				<!--text came here --> <p>  {{ $child->last_name}}</p>	</label>
		</div>			
	
			
<div class="field-wrap" style="width:507px"> <label>
               <BR>    <div style="float:left; padding-left: 15px;" > Student ? </div>
										<div style="float:left; padding-left: 40px;">Foster Child  </div>
										<div style="float:left; padding-left: 12px;">Homeless </div>
										<div style="float:left; padding-left: 12px;">Migrant </div>
										<div style="float:left; padding-left: 12px;">Runaway</div>
              </label>
			<div class="example">
   <div  style="float: left;  padding: 0 0 0 40px;">
   <p>Yes</p>
   
   </div> 
	 <div style="float: left; padding: 0 0 0 95px;">        <p>Yes</p></div>
	<div style="float: left; padding: 0 0 0 80px;">			 <p>Yes</p></div>
	<div style="float: left; padding: 0 0 0 50px;">			 <p>Yes</p></label></div>
	<div style="float: left; padding: 0 0 0 40px;">			 <p>Yes</p></label></div>
    </div>
		  
	            </div>
				
				
		    </div>
		
          
         
          

        </div>
		
		  
        <!-- sign in ends here -->
      </div><!-- tab-content -->
	  
	 @endforeach
	  </ul>	
	 
	  
<!-- start--><ul class="tab-group1" style=" width:1000px; height: 100px;">
 <br>
	  <li><a href="#" class="nav nav_home">edit</a></li>
  
	   <hr>
	   
	 
	 
	  </ul>	
	  
	  
<!-- start--><ul class="tab-group1" style=" width:1000px; height: 100px;">
    <br>	    
	  <li><a href="#" class="nav nav_home">edit</a></li>

	   <hr>
<br>	    
		<br>	    
	
	   
	   
      <div class="tab-content">
        <div style="display: block;" id="signup">   
  
          
          <div  action="#section2" method="post" >
          
          <div class="top-row">
            <div class="field-wrap" style="width: 150px; padding-right:50px ">
             <br><br> <label>
                Adult fisrt 
              </label>
             <p>Yes</p>
            </div> <div class="field-wrap" style="width: 150px;padding-right:50px">
             <br><br> <label>
                Adult last
              </label>
            <p>Yes</p>
            </div>
        <div Style="width: 565px;">
         
		 <div class="field-wrap" style="float: left;width: 180px;">
              <label>
               Earnings<br> from <br>work<br>
              </label>
            
			 <!-- box --><div> 
			   <p style="float: left;width: 50px;">Yes</p> 
           
<div class="dropdown">
  <span>Weekly</span>
 
</div></div><!--box end-->
<div>

</div> </div>
			
			
 <div class="field-wrap" style="float: left;width: 180px;">
              <label>
               Public Assistance/<br>
			   Child Support/<br>
			   Alimony<br>
              </label>
             <p style="float: left;width: 50px;">Yes</p> 
           
			<div class="dropdown">
  <span>Weekly</span>
  
             </div>
			</div>
			
			      		 <div class="field-wrap" style="float:right;width: 180px; padding-right:10px">
              <label>
              Pensions/<br>
			  Retirement/<br>
			  All other income
              </label>
             <p style="float: left;width: 50px;">Yes</p> 
           
			<div class="dropdown" >
  <span>Weekly</span>
  </div>
			</div>
			
			</div>
		    </div>
		
          
      
          </div>

        </div>
        <!-- sign in ends here -->
      </div><!-- tab-content -->
	  </ul>	
	  
<!-- start--><ul class="tab-group1" style=" width:1000px; height: 100px;">
 <br><br>	    
	<br>	    
	
	  <li><a href="#" class="nav nav_home">edit</a></li> 
	
	   <hr>
	   <br><br>
	   
      <div class="tab-content">
        <div style="display: block;" >   
         
          
          <div  action="" method="post" >
          
          <div class="top-row" style="text-align:center;">
            <div class="field-wrap">
              <label>
                Street address
              </label>
        <p>Yes</p>
            </div>
        
            
			
            <div class="field-wrap"style="width:9%;">
              <label>
                City
              </label>
                <p>Yes</p>  </div>

				<div class="field-wrap" style="width:5%;">
              <label>
           State
              </label>
                <p>Yes</p> </div>
				
					<div class="field-wrap" style="width:7%;">
              <label>
          Zip
              </label>
              <p>Yes</p>  </div>
			
<div class="field-wrap" >
              <label>
             phone
              </label>
                <p>Yes</p> </div>
	<div class="field-wrap" >
              <label>
             email
              </label>
                <p>Yes</p> </div>

	<div class="field-wrap" style="width:260px;">
              <label>
              Printed name 
              </label>
               <p>Yes</p>  </div>

	<div class="field-wrap" style="width:260px;">
              <label>
             Signature name 
              </label>
    <p>Yes</p></div>

	<div class="field-wrap" >
              <label>
             Todays date
              </label>
              <p>Yes</p>   </div>

			
		    </div>
		
          
          </div>

        </div>
        <!-- sign in ends here -->
      </div><!-- tab-content -->
	  </ul>	
<!-- start-->	  <ul class="tab-group1" style=" width:1000px; height: 10px;">
    <br>    <br>   <br>  
	<br>   <br>   <br>  <br> 
	   <hr>
	  </ul>	
	   <div class="tab-group1" style=" width:1000px; height: 10px;">
   
<!-- start-->	  <ul class="tab-group1" >
 <br>  <br>   <br>   
 <br>   <br>   <br> 	 
 <li><a href="#" class="nav nav_home" >Save</a></li>
	  <li><a href="#" class="nav nav_home">Cancel</a></li> </ul>

	

	 </div>	 
	  
	  </div>
					
						
					</div>
					</section >
					
				
					
					
				</div>
			</div>
        </div>
		
@stop