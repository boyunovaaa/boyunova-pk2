<?php
include "dbconnect.php";

$sql = mysqli_query($conn, 'SELECT * FROM magazin');
  while ($result = mysqli_fetch_array($sql)) {
    echo '<tr>'.'<td>'.'<a href="product.php?product_id='.$result['id'].'">'.'<img src="'.$result['img'].'" width="156" height="180" class = "pic" href="product.php?product_id='.$result['id'].'">'.'</a>'.'<td class = "bookname"><a href="product.php?product_id='.$result['id'].'">'.$result['name'].'</a></td>'.'<td>'. $result['price'].'</a></td>'.'<td class = "desc">'. $result['text'].'</td>'.'</tr>';
  }
?>