<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
</head>
<body>

  </head>
  <body>
    <!-- Start Top Bar -->
    <div class="top-bar">
      <div class="top-bar-left">
        <ul class="menu">
          <li class="menu-text">Blog</li>
          <li><a href="/Home">Home </a></li>
          <li><a href="/Articles">Articles</a></li>
          <li><a href="/Contacts">Contact</a></li>
        </ul>
      </div>
    </div>
    <!-- End Top Bar -->
    <div class="callout large primary">
      <div class="row column text-center">
        <h1>Mon merveilleux blog</h1>
        <h2 class="subheader">♥Bienvenu Sur mon premier Blog♥ </h2>
      </div>
    </div>
    <!-- We can now combine rows and columns when there's only one column in that row -->
   
      <!--ajouter par moi -->
      <div class= "row medium-8 large-7 columns"> 
       @yield('content')
      </div>   
      <!--<div class="blog-post"> supprimer par moi-meme-->
      


    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>



