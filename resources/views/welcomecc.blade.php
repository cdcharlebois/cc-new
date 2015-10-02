<!DOCTYPE html>
<html>
    <head>
        <title>Conner</title>
        <link rel="stylesheet" type="text/css" href="/materialize/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script type="text/javascript" src="/materialize/js/materialize.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    </head>
    <body>
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper grey">
                    <a class="brand-logo center" href="/">
                        <!-- logo here... -->
                    </a>
                    <a href="#" data-activates="sidebar" class="button-collapse">
                        <i class="material-icons">menu</i>
                    </a>
                    <!--
                    <ul class="right hide-on-med-and-down">
                        <li><a href="/work">Work</a></li>
                        <li><a href="/consulting">Consulting</a></li>
                        <li><a href="/golf">Golf</a></li>
                        <li><a href="/league">The League</a></li>
                    </ul>
                    <ul class="side-nav" id="sidebar">
                        <li><a href="/work">Work</a></li>
                        <li><a href="/consulting">Consulting</a></li>
                        <li><a href="/golf">Golf</a></li>
                        <li><a href="/league">The League</a></li>
                    </ul>
                    -->
                </div>
            </nav>
        </div>
        <div class="container">
            <br>
            <br>
            <div class="row valign-wrapper">
              <div class="col s3 offset-s1 valign">
                <p class="center">
                  <img class="center responsive-img circle z-depth-3" src="images/from-work.png"/>
                </p>      
              </div>
              <div class="col s7 valign">
                  <h1 style="font-weight:300">Conner Charlebois</h1>
              </div>
            </div>
          </div>
          
          <div class="container">
            <div class="row">
              <div class="col m10 s12 offset-m1">
                <p class="flow-text">
                        Born and raised in a small town just outside of Toronto, 
                        ON, I attended (and graduated from) 
                        <a href="http://www.bentley.edu">Bentley University</a> in 
                        Waltham, MA. I work as an implementation consultant for the Adobe 
                        Marketing Cloud and I help change the way marketers work. 
                        When I'm not working, I'm a competitive golfer, restaurant explorer,
                        Netflix enthusiast and coffee connoisseur.
                </p>
                <!-- <p>
                        Lorem ipsum dolor sit amet, consectetur adip<span style="color:red">*</span>isicing elit, sed do eiusmod <span style="color:red">*</span>tempor incididunt ut labore et dolore magna aliqua.
                </p> -->
              </div>
            </div>
          </div>
    </body>
    <script type="text/javascript">
      $ ( document ).ready(function(){
        $(".button-collapse").sideNav();
      });
    </script>
</html>
