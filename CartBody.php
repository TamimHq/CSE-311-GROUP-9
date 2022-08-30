<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Service CART</title>
    <style type="text/css">
      .product-detail {
        padding:5px;
        margin-bottom: 10px;
        background-color: #FFA500;
      }
      .other-detail {
        text-align: center-left;

      }

      .price {
        font-weight: 600;
        font-size: 20px;
        color:#0000FF;
      }


      .price-style {
         background-color: #ADD8E6;
      }

      .btn-style {
        margin-bottom: 15px;
      }
      h1{
        color:#0000FF;
      }
h3{
  color:#0000FF;
}

h5{
  color:#990000;
}


    </style>
  </head>
  <body>
    <h1 class="text-center">TELE COMMUNICATION SERVICE CART</h1>

   <div class="cer">
     <div class="row">
        <div class="col-md-6">
          <div class="row">
            <?php
            $cn = mysqli_connect('localhost','root','','telecommunication_and_management_system');
            $slr = "SELECT * FROM products";
            $query = mysqli_query($cn,$slr);
            while($row = mysqli_fetch_assoc($query))
            {
              ?>
            <div class="col-md-6">
               <div class="product-detail">

                <div class="other-detail">
                    <h3><?=$row['products']?></h4>
                    <div class="price-style">
                    <p class="price"> ৳ <?=$row['Price']?></p>
                    <a href="Cartaction.php?action_type=add_item&ID=<?=$row['ID']?>&products=<?=$row['products']?>&quantity=1&Price=<?=$row['Price']?>" class="btn btn-warning btn-style">Add to Cart</a>
                    </div>
                  </div>
               </div>
            </div>
            <?php } ?>
          </div>
        </div>
        <div class="col-md-5">
          <h5 class="text-center">SERVICES</h5>
          <?php
          $Total=0;
          if(isset($_SESSION['cart'])) { ?>
          <table class="table table-bordered">
              <thead>
                 <th>Serial Number</th>
                 <th>Pack Name</th>
                 <th>Quantity</th>
                 <th>COST</th>
              </thead>
              <tbody>
                <?php
                $index =0;
                $i=1;
                foreach($_SESSION['cart'] as $key => $val) {
                  $totalPrice = $val['quantity'] * $val['Price'];
                  $Total = $Total + $totalPrice;
                  ?>
                <tr>
                   <td><?=$i++?></td>
                   <td><?=$val['products']?></td>
                   <td><?=$val['quantity']?></td>
                   <td><?=$totalPrice?></td>
                   <td><a href="Cartaction.php?action_type=remove_item&index=<?=$key?>">Remove </a></td>
                </tr>
              <?php $index++; } ?>
              <tr>
                <td></td>
                <td></td>
                <td><b>Total</b></td>
                <td><?=$Total?></td>
                <td></td>
              </tr>
              </tbody>

          </table>
        <?php } ?>
        </div>
     </div>
   </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
