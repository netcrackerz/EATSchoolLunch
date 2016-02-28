<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Forgot  Form</title>
    <link href='css.css' rel='stylesheet' type='text/css'>
    
       <link rel="stylesheet" href="{{ asset('css/auth-css/normalize.css') }}">

    
        <link rel="stylesheet" href="{{ asset('css/auth-css/style.css') }}">

    
    
    
  </head>

  <body>

    <div class="form"  style="align:center">
      <div >
      <ul class="tab-group" style="margin-left:170px;">
        <li class="tab active"><a href="#signup">Password Recovery</a></li>
      </ul>
      </div>
      <div class="tab-content">
        <div id="signup">   
          <p>To reset your password, enter the email address you use to sign in</p>
          
          <form action="/password/email" method="post">
           {!! csrf_field() !!}
         
		
          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input name="email" type="email"required autocomplete="off"/>
          </div>
          
        
          
          <button type="submit" class="button button-block"/>Reset my password</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          


        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
     <script src="{{ asset('js/auth-js/jquery.min.js') }}"></script>

        <script src="{{ asset('js/auth-js/index.js') }}"></script>


    
    
    
  </body>
</html>
