<?php 
include("header.php"); //includes all the code from header.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>



   <div class="container mt-5">
    <div class="row">
        <div class="col-lg-3">
         <form action="manage_cart.php" method="post">
           <div class="card"> 
              <img src="pics/f1.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                 <h5 class="card-title">T-Shirt1</h5>
                 <p class="card-text">Price=450</p>
                 <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                 <input type="hidden" name="item_name" value="T-Shirt1"></input>
                 <input type="hidden" name="Price" value="450"></input>
              </div>
           </div>
         </form>
        </div>

        <div class="col-lg-3">
         <form action="manage_cart.php" method="post">
           <div class="card"> 
              <img src="pics/f2.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                 <h5 class="card-title">T-Shirt2</h5>
                 <p class="card-text">Price=650</p>
                 <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                 <input type="hidden" name="item_name" value="T-Shirt2"></input>
                 <input type="hidden" name="Price" value="650"></input>
              </div>
           </div>
         </form>
        </div>

        <div class="col-lg-3">
         <form action="manage_cart.php" method="post">
           <div class="card"> 
              <img src="pics/f3.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                 <h5 class="card-title">T-Shirt3</h5>
                 <p class="card-text">Price=850</p>
                 <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                 <input type="hidden" name="item_name" value="T-Shirt3"></input>
                 <input type="hidden" name="Price" value="850"></input>
              </div>
           </div>
         </form>
        </div>

        <div class="col-lg-3">
         <form action="manage_cart.php" method="post">
           <div class="card"> 
              <img src="pics/f4.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                 <h5 class="card-title">T-Shirt4</h5>
                 <p class="card-text">Price=1050</p>
                 <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                 <input type="hidden" name="item_name" value="T-Shirt4"></input>
                 <input type="hidden" name="Price" value="1050"></input>
              </div>
           </div>
         </form>
        </div>
    </div>
   </div> 
</body>
</html>