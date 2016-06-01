<?php
require_once("functions.php");
// run cron to import data from csv to database
$page = $_POST['page'];
echo fetchResults($page);