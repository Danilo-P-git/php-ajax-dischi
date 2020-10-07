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
     <?php }  ?>

   </div>
 </div>
</main>
