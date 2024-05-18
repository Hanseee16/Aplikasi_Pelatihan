<?php
include("../db.php");

if (isset($_GET['id_krs'])) (new db())->hapusKrs($_GET['id_krs']);
header("Location: krs.php");
exit;
