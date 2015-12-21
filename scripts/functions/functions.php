<?php
	//	Y 	M  D
	//2010-05-12 date format
	//2010-05-12 13:57:01 datetime format

	function shorten_description($str, $offset) {
		if(strlen($str) > $offset) {
            $str = substr($str, 0, $offset);
            $str = $str.'...';
        } 
        return $str;
	}

	function change_url($str) {
		$str = str_replace(' ', '', $str);
		return $str;
	}

	function unixdatetime($datetime="") {
		return strtotime($datetime);
	}

	function datetime_to_text ($datetime="") {
		$unixdatetime = unixdatetime($datetime);
		return strftime("%B %d, %Y at %I:%M %p", $unixdatetime);
	}

	function date_to_month($datetime="") {
		$unixdate = unixdatetime($datetime); 
		$month = date("m", $unixdate);
		return get_month($month);
	}

	function date_to_day($datetime="") {
		$unixdate = unixdatetime($datetime); 
		$day = date("d", $unixdate);
		return $day;
	}

	function date_to_year($datetime="") {
		$unixdate = unixdatetime($datetime); 
		$year = date("y", $unixdate);
		return $year;
	}

	function get_month($month) {
		switch($month) {
			case 1: return "JAN";
					break;
			case 2: return "FEB";
					break;
			case 3: return "MAR";
					break;
			case 4: return "APR";
					break;
			case 5: return "MAY";
					break;
			case 6: return "JUN";
					break;
			case 7: return "JUL";	
					break;
			case 8: return "AUG";
					break;
			case 9: return "SEP";
					break;
			case 10: return "OCT";
					break;
			case 11: return "NOV";
					break;
			case 12: return "DEC";
					break;
		}
	}

	function base62($num) {
		$index = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$res = '';
		while($num) {
			$res = $index[$num%62].$res;
			$num = intval($num/62);
		}
		return $res;

	}
?>