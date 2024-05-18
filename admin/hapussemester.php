<?php
include("../db.php");

if (isset($_GET['kd_semester'])) (new db())->hapusSemester($_GET['kd_semester']);
header("Location: semester.php");
exit;
