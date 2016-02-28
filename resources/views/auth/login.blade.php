




<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>E.A.T</title>
    <link href='css.css' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="{{ asset('css/auth-css/normalize.css') }}">

    
        <link rel="stylesheet" href="{{ asset('css/auth-css/style.css') }}">

    
    
    
  </head>

  <body style="background:url(../images/bg.png);">

    <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Sign In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up</h1>


          <form method="POST" action="/auth/register">
           {!! csrf_field() !!}
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" name="first_name" value="{{ old('first_name') }}" required autocomplete="off" />
                 <span class="help-block">{{ $errors->first('first_name', ':message') }}</span>
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input  type="text" name="last_name" value="{{ old('last_name') }}" required autocomplete="off"/>
                 <span class="help-block">{{ $errors->first('last_name', ':message') }}</span>
            </div>
            
            
          </div>
        
          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email"   required autocomplete="off"/>
               <span class="help-block">{{ $errors->first('email', ':message') }}</span>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="password"  required autocomplete="off"/>
               <span class="help-block">{{ $errors->first('password', ':message') }}</span>
          </div>

           <div class="field-wrap">
            <label>
              Confirm Password<span class="req">*</span>
            </label>
            <input type="password" name="password_confirmation"  required autocomplete="off"/>
                <span class="help-block">{{ $errors->first('password_confirmation', ':message') }}</span>
          </div>
          
          <button type="submit" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
        <!-- sign  ends here -->
        <!-- sign in starts here -->
        <div id="login">   
          <h1>Welcome Back!</h1>
   
   
          <form method="POST" action="/auth/login">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
          {!! csrf_field() !!}
            <div class="field-wrap">
              
           <label>
              Email Address<span class="req">*</span>
              
            </label>
            <input name="email" value="{{ old('email') }}" type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password" id="password"  required autocomplete="off"/>
          </div>
                        

          
          <p class="forgot"><a href="/password/email">Forgot Password?</a></p>
          
          <button type="submit" class="button button-block"/>Sign In</button>
          
          </form>

        </div>
        <!-- sign in ends here -->
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    <script src="{{ asset('js/auth-js/jquery.min.js') }}"></script>

        <script src="{{ asset('js/auth-js/index.js') }}"></script>

    
    
    
  </body>
</html>
