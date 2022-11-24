<?php
// sambung ke pangkalan data
include "config.php";

?>
<!--HTML Bermula -->

<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>MEGAH HOLDING</title>
       <link rel="stylesheet" href="table.css">
</head>

<body>
      <center><h2>Tambah Pekerja</h2></center>
</body>
</html>


<!-- Papar jadual -->
<table width="800" border="1" align="center">
 
<!-- Papar menu -->
  
   <th width="30"><b>Id</b></th>
   <th width="400"><b>nama_pelajar</b></th>
   <th width="150"><b>no_kp</b></th>
   <th width="150"><b>no_hp</b></th>
   <th width="150"><b>Jantina</b></th>
   <th width="150"><b>Tindakan</b></th>
 </tr>
<?php
//Papar senarai guru penasihat yang disusun mengikut susunan menaik
$dataD = mysqli_query($samb, "SELECT * FROM info_pekerja ORDER BY nama_pekerja ASC");
$no=1; //pemula bagi pembilang
       while($infoD=mysqli_fetch_array($dataD))
              {
              ?>
</tr>    
<!-- panggil semula rekod ke dalam baris -->
    <td><?php echo $no; ?></td>
    <td><?php echo $infoD['nama_pekerja']; ?></td>
    <td><?php echo $infoD['no_kp']; ?></td>
    <td><?php echo $infoD['no_hp']; ?></td>
   
        <td><?php echo $infoD['no_kp']; ?></td>
        <td>
        <!-- tambah untuk kemaskini & hapus -->
        <a href="kemaskinipekerja.php?kemaskinipekerja=<?php echo $infoD['id']; ?>" 
        onclick="return confirm('Anda Pasti?')">Kemaskini</a>
        <a href="padampekerja.php?padampekerja=<?php echo $infoD['id']; ?>" 
        onclick="return confirm('Anda Pasti?')">Hapus</a>
        </td>
 </tr> 
 <?php
 $no++;  //increment
 }
 ?>
</body>
</html>