<?php
include("../db.php");

if (isset($_GET['nim'])) (new db())->hapusMahasiswa($_GET['nim']);
header("Location: mahasiswa.php");
exit;
