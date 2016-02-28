<!DOCTYPE html>

<html lang="en">
    <head>
      <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
        

   <!--   <meta name="csrf_token" content="{{ csrf_token() }}" />-->
    <link rel="stylesheet" href="css/css1/style-form.css">
        <link rel="stylesheet" href="css/css1/normalize.css">
         <link rel="stylesheet" href="css/css/bili.css">
        <link rel="stylesheet" href="css/css/style.css">
         <link rel="stylesheet" href="css/css1/style.css">
    <link rel="stylesheet" href="css/css/css.css">
        <link rel="stylesheet" href="css/css/stylesheet-pure-css.css">
          <script type="text/javascript" src="js/jquery.min.js"></script>
         <script src="js/config.js"></script>
              
<style>

div.ui-datepicker{
 font-size:14px;
}
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
.ss{
  float:left;
  }
</style>




    <noscript>
      <style>
        @media screen and (max-width: 715px) {
          .content-scroller {
            overflow:visible;
          }
        }
      </style>
    </noscript>
    </head>
  
    <body style="background:url(images/bg.png);">
       <div id="container" class="container">
   @yield('content')
</div>
    </body>
</html>