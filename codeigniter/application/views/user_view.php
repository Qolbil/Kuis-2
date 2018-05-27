<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Pagination</title>
  
    <style type="text/css">
    a {
     padding-left: 5px;
     padding-right: 5px;
     margin-left: 5px;
     margin-right: 5px;
    }
    </style>
  </head>
  <body>

   <!-- Search form (start) -->
   <form method='post' action="<?= base_url() ?>index.php/Mahasiswa/loadRecord" >
     <input type='text' name='search' value='<?= $search ?>'><input type='submit' name='submit' value='Submit'>
   </form>
   <br/>

   <!-- Posts List -->
   <table border='1' width='100%' style='border-collapse: collapse;'>
    <tr>
      <th>S.no</th>
      <th>id</th>
      <th>Nama</th>
      <th>kelas</th>
    </tr>
    <?php 
    $sno = $row+1;
    foreach($result as $data){

      echo "<tr>";
      echo "<td>".$sno."</td>";
      echo "<td>".$data['id']."</td>";
      echo "<td>".$data['nama_mhs']."</td>";
      echo "<td>".$data['kelas']."</td>";
      echo "<td>".$data['kd_ukm']."</td>";
      echo "<td>".$data['nama_ukm']."</td>";
      echo "</tr>";
      $sno++;

    }
    if(count($result) == 0){
      echo "<tr>";
      echo "<td colspan='3'>No record found.</td>";
      echo "</tr>";
    }
    ?>
   </table>

   <!-- Paginate -->
   <div style='margin-top: 10px;'>
   <?= $pagination; ?>
   </div>

 </body>
</html>