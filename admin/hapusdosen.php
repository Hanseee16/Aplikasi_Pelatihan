<?php
include("../db.php");

if (isset($_GET['kd_dosen'])) (new db())->hapusDosen($_GET['kd_dosen']);
header("Location: dosen.php");
exit;
