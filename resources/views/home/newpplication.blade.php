@extends('layout')

@section('content')


        <div id="container" class="container">
      @include('partials._sidenav') 
      <aside class="menu" id="menu">      
  
            
      <div class="content-scroller">
        <div class="content-wrapper">
          
          <section class="content home" id="section1">
            
            <div class="align-center">
            <div class="form">
      
   <button id="addChild" style="background: #1ab188 ;color: #ffffff ;border-radius: 5px;padding: 5px;height: 40px;">
     <ul class="tab-group1">    
       <li class="tab active">Add Child</li>
    
     </ul></button>
      
     
         
          
          <form id="childForm"  method="POST" action="{{ URL::to('/submitchild') }}" >
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
                 <input type="hidden" name="user_id" value="{{  $user->id }}">
                       @include('partials._childfield',array('user'=> $user))
                  <div id="childField">
                 
                  </div>
                <button id="cid" type="submit" class="button button-block" >   submit </button> 
           </form>
    
          
          
          <button class="button button-block" >  <ul class="nav"> <li><a id="nextChild" href="#section2" class="nav nav_home" data-token="{{ csrf_token() }}">Next</a></li></ul></button>
          
         

       
      


</div>
            
          </div>
          </section>
          
          <section class="content news" id="section2">
            <div class="inner">
            <div class="align-center">
            <div class="form">
      
     <button id="addAdult" style="background: #1ab188 ;color: #ffffff ;border-radius: 5px;padding: 5px;height: 40px;">
     <ul class="tab-group1">    
       <li class="tab active">Add Adult</li>
    
     </ul></button>
   <!--     <button id="addAdult" class="button button-block" onclick="">Add Adult</button>-->
      <div class="tab-content">
        <div style="display: block;" id="signup">   
  
          
          <form  id="adultForm"  method="POST" action="{{ URL::to('/submitadult') }}">
             <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <input type="hidden" name="user_id" value="{{  $user->id }}">
                       @include('partials._adultfield')
                  <div id="adultField">
                 
                  </div>
             <button id="aid" type="submit" class="button button-block" >   submit </button> 
         
          </form>
               <button class="button button-block" >  <ul class="nav"> <li><a href="#section3" id="nextAdult" class="nav nav_home">Next</a></li></ul></button>
      

        </div>
        <!-- sign in ends here -->
      </div><!-- tab-content -->
      


</div>
            
          </div>
            </div>
          </section>
          
          <section class="content shows" id="section3">
            <div class="inner">
            
                          <div class="align-center">
            <div class="form">
      
      
      
      <div class="tab-content">
        <div style="display: block;" >   
         
         <!-- --> 
             <form  id="addressForm"  method="POST" action="{{ URL::to('/submitaddress') }}">
             <input type="hidden" name="_token" value="{{ csrf_token() }}">
             <input type="hidden" name="user_id" value="{{  $user->id }}">
                       @include('partials._addressfield',array('user'=> $user))
               

           <!--    <button id="addid" type="submit" class="button button-block" >  submit </button> -->
         
          </form>
                <button class="button button-block" >  <ul class="nav"> <li><a id="saveAddress" href="#" class="nav nav_home">Done</a></li></ul></button>
       
        </div>
        <!-- sign in ends here -->
      </div><!-- tab-content -->
      


</div>
            
          </div>
            </div>              
              
            
          </section>
                
          
        </div>
      </div>
        </div>
  
         <!-- The JavaScript -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>    
      <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="js/index.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript">
//$(document).ready(function(){
/* submit form child info*/
   $("#cid").click(function(){
          $( "#childForm" ).submit();
    });
   /* submit form adult info*/
     $("#aid").click(function(){
          $( "#adultForm" ).submit();
    });
     
        /* submit form address info*/
     $("#addid").click(function(){
          $( "#addressForm" ).submit();
    });
  /* Adds another child field*/
               $("#addChild").click(function(){
 
                      $.get('childfield', function(template) {
            
                        $('#childField').append(template);
                      },"text");
              });

  /* Adds another child field*/
               $("#addAdult").click(function(){
                 
                      $.get('adultfield', function(template) {
            
                        $('#adultField').append(template);
                      },"text");
              });



 // });/*end of  document ready*/

            $(function() {
                $('ul.nav a').bind('click',function(event){
                    var $anchor = $(this);

                    if( $anchor.attr("id") === "nextChild")
                    {
                 
                    var r =    checkChild();
                                  if(r){
                             //          alert("if: " + r);

                                       
                                    }else{
                                //         alert("else: " + r);

                                       event.preventDefault(event);
                                        return;
                                    }
                        
                    }

                    if( $anchor.attr("id") === "nextAdult")
                    {
                 
                    var r =    checkAdult();
                                  if(r){
                             //          alert("if: " + r);

                                       
                                    }else{
                                //         alert("else: " + r);

                                       event.preventDefault(event);
                                        return;
                                    }
                        
                    }
                       if( $anchor.attr("id") === "saveAddress")
                    {
                         //   alert("saveAddress" );
                    var r =    saveAddress();
                                  if(r){
                                  

                                       
                                    }else{
                                    //   alert("else: " + r);

                                       event.preventDefault(event);
                                        return;
                                    }
                      }
                        
                    


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


function checkChild() {

     var result ;
   $.ajax({
            url:'/submitchild',
            type: 'POST',
           async: false,

            data:   $("#childForm").serialize(),
   //    contentType: "application/json;charset=utf-8", //'json',// 
            success: function (returnData) {
       
            result = true;

            },
            error: function () {
               result = false;

                alert('Some error occured');
             
            }
        });
   return result;
  }
  function checkAdult() {

     var result ;
   $.ajax({
            url:'/submitadult',
            type: 'POST',
           async: false,

            data:   $("#adultForm").serialize(),
   //    contentType: "application/json;charset=utf-8", //'json',// 
            success: function (returnData) {
       
            result = true;

            },
            error: function () {
               result = false;

                alert('Some error occured');
             
            }
        });
   return result;
  }
  function saveAddress() {

     var result ;
   $.ajax({
            url:'/submitaddress',
            type: 'POST',
           async: false,

            data:   $("#addressForm").serialize(),
   //    contentType: "application/json;charset=utf-8", //'json',// 
            success: function (returnData) {
       
            result = true;

            },
            error: function () {
               result = false;

                alert('Some error occured');
             
            }
        });
   return result;
  }


        </script>

         <script src="js/jquery-1.10.2.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
      $( "#datepicker" ).datepicker("setDate", new Date());

  });
  </script>
  @stop
 <!--   </body>
</html> -->