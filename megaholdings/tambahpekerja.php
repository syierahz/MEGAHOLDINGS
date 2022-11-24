<?php
// sambung ke pangkalan data
include "config.php";
// sambung fail header
//include "header.php";
//memastikan pengguna login terlebih dahulu

$id=$_SESSION['id'];
?>
<!--HTML Bermula -->
<html>
<head>
       <center><h2>Tambah Pekerja</h2></center>
</head>
<body>

<!-- Papar jadual -->
<table width="800" border="1" align="center">
 
<!-- Papar menu -->
  
   <td width="30"><b>Id.</b></td>
   <td width="400"><b>Nama_Pekerja</b></td>
   <td width="150"><b>no_kp</b></td>
   <td width="150"><b>no_hp</b></td>
   <td width="150"><b>Jantina</b></td>
   <td width="150"><b>Tindakan</b></td>
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
    <td><?php echo $infoD['namaguru']; ?></td>
    <td><?php echo $infoD['idguru']; ?></td>
    <td><?php echo $infoD['katalaluan']; ?></td>
        <td><?php echo $infoD['level']; ?></td>
        <td>
        <!-- tambah untuk kemaskini & hapus -->
        <a href="kemaskinipekerja.php?kemaskini_id=<?php echo $infoD['id']; ?>" 
        onclick="return confirm('Anda Pasti?')">Kemaskini</a>
        <a href="padampekerja.php?hapus_id=<?php echo $infoD['id']; ?>" 
        onclick="return confirm('Anda Pasti?')">Hapus</a>
        </td>
 </tr> 
 <?php
 $no++;  //increment
 }
 ?>
</body>
</html>