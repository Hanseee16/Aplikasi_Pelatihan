<?php
include("../db.php");

if (isset($_GET['id_jadwal'])) (new db())->hapusJadwal($_GET['id_jadwal']);
header("Location: jadwal.php");
exit;
