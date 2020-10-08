<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="shortcut icon" href="#">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="dist/app.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js" charset="utf-8"></script>
  </head>
  <body  class="color-first">
    <header>
      <div class="container-full fixed color-second">
       <div class="container-half">
         <div class="menu">
           <img src="" alt="SPOTIFY">
         </div>
       </div>
      </div>
    </header>

    <main>
      <div class="container-half">
        <ul class="albums-list square-container">
        </ul>
      </div>
    </main>


      <script id="album-template" type="text/x-handlebars-template">
        <li class="albums-list-item square color-inside">
          <img src="{{poster}}" alt="">
          <h4>{{title}}</h4>
            <p>{{author}}</p>
            <p>{{year}}</p>
          </div>
        </li>
      </script>
        <script src="dist/app.js" charset="utf-8"></script>


</body>
</html>
