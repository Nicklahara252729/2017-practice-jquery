<?php
include "../../../config/koneksi.php";

$module=$_GET[module];
$act=$_GET[act];

// Hapus Kata Jelek
if ($module=='katajelek' AND $act=='hapus'){
  mysql_query("DELETE FROM katajelek WHERE id_jelek='$_GET[id]'");
  header('location:../../media.php?module='.$module);
}

// Input kata jelek
elseif ($module=='katajelek' AND $act=='input'){
  mysql_query("INSERT INTO katajelek(kata,ganti) VALUES('$_POST[kata]','$_POST[ganti]')");
  header('location:../../media.php?module='.$module);
}

// Update kata jelek
elseif ($module=='katajelek' AND $act=='update'){
  mysql_query("UPDATE katajelek SET kata = '$_POST[kata]', ganti='$_POST[ganti]' WHERE id_jelek = '$_POST[id]'");
  header('location:../../media.php?module='.$module);
}
?>
