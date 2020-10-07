<?php
  include 'db.php';
 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/app.css">
   </head>
   <body  class="color-first">
     <header>
       <div class="container-full color-second">
        <div class="container-half">
          <div class="menu">
            <img src="" alt="SPOTIFY">

          </div>
        </div>
       </div>
     </header>
     <main>
      <div class="container-half">
        <div class="square-container">
          <?php foreach ($database as $disk) {?>

            <div class="square color-inside">

              <img src="<?php echo $disk["poster"]  ?>" alt="">

              <h4>
                <?php echo $disk["title"] ?>
              </h4>
              <p>
                <?php echo $disk["author"] ?>
              </p>
              <p><small><?php echo $disk["year"] ?></small> </p>


            </div>
          <?php}  ?>

        </div>
      </div>
     </main>


     <footer>


     </footer>
   </body>
 </html>
