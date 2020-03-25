<?php 


if(!function_exists('date_time'))
{
	function date_time()
	{
		return date('Y-m-d H:i:s');
	}
}


if(!function_exists('get_days'))
{
	function get_days($date)
	{
		$now = strtotime(date('Y-m-d H:i:s'));
		$mydate = strtotime($date);
		$r = $now - $mydate;
		return round($r/86400);
	}
}
 ?>
