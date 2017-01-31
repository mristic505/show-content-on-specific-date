<?php 
date_default_timezone_set('America/New_York');
$d = date("Ymd"); 
// echo $d;
if ( is_user_logged_in() ) {
	the_content();
}
else {
	if($d >= '20170101') the_content(); 
	else echo '<h1 style="height: 500px;text-align: center;">COMING SOON</h1>';
}

?>