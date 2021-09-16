<?php
date_default_timezone_set('Asia/Jakarta');

function hariIndo ($hariInggris) {
  switch ($hariInggris) {
    case 'Sunday':
      return 'Minggu';
    case 'Monday':
      return 'Senin';
    case 'Tuesday':
      return 'Selasa';
    case 'Wednesday':
      return 'Rabu';
    case 'Thursday':
      return 'Kamis';
    case 'Friday':
      return 'Jumat';
    case 'Saturday':
      return 'Sabtu';
    default:
      return 'hari tidak valid';
  }
}

$hariBahasaInggris = date('l');
$hariBahasaIndonesia = hariIndo($hariBahasaInggris);

	echo "<center>Website pribadi Hugo</center>";
	echo "Hari ini  {$hariBahasaIndonesia} <br>";
	echo "Tanggal ". date('F j, Y'); echo "<br>"; 
	echo "Jam ". date('H:i:s'); echo "<br>";
	echo "Saya sedang belajar Docker dan DevOps bersama teman-teman DJKN v2";
	echo "Indonesia Jaya Merdeka";
	echo "Garuda di dadaku";
