<?php
$komentar = $_GET['Komentar'];
if (isset($_GET['nama']) AND isset($_GET['email']  )){
$nim = $_GET['nim'];
$nama=$_GET['nama'];
$email=$_GET['email'];
$nama=htmlspecialchars($nama);
$email=strip_tags($email);

}
else
{
   header("Location:form.php?error=variabel_belum_diset");
} 
if(empty($nama))
{
   header("Location:form.php?error=nama_kosong");
}else{
if (is_numeric($nama))
{
      header("Location:form.php?error=nama_harus_huruf");
}
else
{
echo "Nim : $nim <br> Nama: $nama <br> Email: $email<br>";
}
}
if (count(explode(" ", $komentar)) < 5 ) {
?>
<script>
	alert("komentar terlalu pendek");
	Location = form.php;
</script>	
<?php 
echo "$komentar";
}
 ?>

 