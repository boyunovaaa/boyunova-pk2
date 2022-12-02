<?php
include "dbconnect.php";

$sql = mysqli_query($conn, 'SELECT * FROM `magazin`');
  while ($result = mysqli_fetch_array($sql)) {
    echo '<li>'.'<a class="product-card" href="product.php?product_id='.$result['id'].'">'.'<h3>'.$result['name'].'</h3>'.'<span class="price">'.$result['price'].'</span>'.'<img src="'.$result['img'].'" width="156" height="180">'.'</a>'.'</li>';
  }
?>