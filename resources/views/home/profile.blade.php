<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href="css/css/css.css" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" href="css/auth-css/normalize.css">

    
        <link rel="stylesheet" href="css/auth-css/style.css">

    
    
    
  </head>

   <body style="background:url(../images/bg.png);">

    <div class="form">
      
    
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Set Up Profile</h1>
          <p>Welcome {{ $user->first_name}} {{ $user->last_name}}</p>
          <form action="/profileset" method="post">
              {!! csrf_field() !!}
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="top-row">
            <div class="field-wrap" style="width:500px">
              <label>
                Street address<span class="req"></span>
              </label>
              <input name="street_address" type="text" required autocomplete="off" />
        

            </div>
        
            <div class="field-wrap" style=" 
    margin-right: 16px;   float: left;width:240px;">
              <label>
                City<span class="req"></span>
              </label>
              <input name="city" type="text"required autocomplete="off"/>
            </div>
      
            <div class="field-wrap" style=" 
    margin-right: 16px;   float: left;width:240px;">
              <label>
                State<span class="req"></span>
              </label>
              <input name="state" type="text"required autocomplete="off"/>
            </div>
      
      
          </div>
    <br>
    <div style="float: left;"><div class="field-wrap" style=" 
    margin-right: 16px;   float: left;width:240px;">
            <label>
            Zip<span class="req"></span>
            </label>
            <input name="zip" type="text"required autocomplete="off"/>
          </div>
          
          
          <div class="field-wrap" style="    float: left;width:240px;">
            <label>
              phone<span class="req"></span>
            </label>
            <input name="phone" type="text"required autocomplete="off"/>
          </div>
      <!--    <div class="field-wrap" style=" 
    margin-right: 16px;    float: left;width:500px;">
            <label>
            email<span class="req"></span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>-->
          
      </div>
          <button type="submit" class="button button-block"/>Set up Profile</button>
          
          </form>

        </div>
    <!-- sign  ends here -->
        <!-- sign in starts here -->
        <div id="login">   
         
          
          <form action="/" method="post">
          
            <div class="field-wrap">
<p class="speech">type email address here!</p>           
       <label>
              Email Address<span class="req"></span>
        
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req"></span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="forgot.html">Forgot Password?</a></p>
          
          <button class="button button-block"/>Sign In</button>
          
          </form>

        </div>
        <!-- sign in ends here -->
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    <script src='js/auth-js/jquery.min.js'></script>

        <script src="js/auth-js/index.js"></script>

    
    
    
  </body>
</html>
