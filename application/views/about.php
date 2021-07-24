<!DOCTYPE html>
<html>
<head>
 <title>Perpustakaan - Data Buku</title>
</head>
<body>
 <h1>Perpustakaan</h1>
 <hr>
 <h4>Data Buku</h4>
 <ol>
  <?php 
   foreach ($data_buku as $buku) {
  ?>
  <li><?=$buku?></li>
  <?php
   }
  ?>
 </ol>
</body>
</html>