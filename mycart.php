<?php 
include("header.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART</h1>
            </div>

            <div class="col-lg-9">
              <table class="table">
                <thead class="text-center">
                  <tr>
                   <th scope="col">Serial No.</th>
                   <th scope="col">Item Name</th>
                   <th scope="col">Item Price</th>
                   <th scope="col">Quantity</th>
                   <th scope="col">Total</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                      $count=0;
                      if(isset($_SESSION['cart']))
                      {
                        foreach($_SESSION['cart'] as $key => $value)
                       {
                         $count=$count+1;//onchange is a javascript event that calls a function when the input field changes
                        echo"
                          <tr>
                            <td>$count</td>
                            <td>$value[item_name]</td> 
                            <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                            <td><input class='text-center iquantity' onchange='subTotal()' type='number' value='$value[Quantity]' min='1' max='10'></td>
                            <td class='itotal'></td>
                            <td>
                             <form action='manage_cart.php' method='POST'>
                              <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                              <input type='hidden' name='item_name' value='$value[item_name]'>
                             </form>
                            </td>
                          </tr>
                        ";
                       }
                      }
                    ?>
                </tbody>
              </table>
            </div>

            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                <h4>Grand Total:</h4>
                <h5 class="text-right" id="gtotal"></h5>
                <br>
                <form>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                       Cash On Delivery
                    </label>
                  </div>
                  <br>
                  <button class="btn btn-primary btn-block">Make Purchase</button>
                </form>
                </div>
            </div>
        </div>
    </div>

<script>

    var gt=0;//when quantity of each item is increased or new item is added to the cart, this variable is used to store the current grand total
    var iprice=document.getElementsByClassName('iprice');
    var iquantity=document.getElementsByClassName('iquantity');
    var itotal=document.getElementsByClassName('itotal');
    var gtotal=document.getElementById('gtotal');

    function subTotal()
    {
        gt=0;
        for(i=0;i<iprice.length;i++)
        {
            itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
            gt=gt+(iprice[i].value)*(iquantity[i].value);

            /*  example explanation: price 650 quantity 1 gt=0+(650*1)
             
                price 750 quantity 2 gt=650+(750*2) === gt=2150

                price 850 quantity 1 gt=2150+(850*1) === gt=3000
            */
        }
        gtotal.innerText=gt;
    }

    subTotal();
</script>
</body>
</html>