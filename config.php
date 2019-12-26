<?php

define('DB_SERVER', 'ec2-54-197-238-238.compute-1.amazonaws.com');
define('DB_USERNAME', 'zdlhzwjxhfbluf');
define('DB_PASSWORD', 'c3e58d09fba17090c66d3d772880960c0e5ae0668d5892e770e64de7964c6b59');
define('DB_NAME', 'd951ml2gounjpq');
 
/* Attempt to connect to PostgreSQL database */
$link = pg_connect("host=".DB_SERVER." dbname=". DB_NAME ." user=" . DB_USERNAME . " password=" .DB_PASSWORD. "")
		or die('Could not connect1: ' . pg_last_error());
?>
