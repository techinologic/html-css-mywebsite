<?php
/* Database connection settings */
$host = 'localhost';
$user = 'blacksch_csu_designRecipe_user';
$pass = 'how2program';
$db = 'blacksch_csu_designRecipe';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
