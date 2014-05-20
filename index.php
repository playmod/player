<?php
/**
 * cool
 */
//  ini_set('date.timezone','Asia/Shanghai');
error_reporting(E_ALL^E_NOTICE);
date_default_timezone_set('Asia/Shanghai');
header("Content-Type: text/html; charset=UTF-8");

	echo "date:   ".date('Y-m-d H:i:s').'&nbsp;&nbsp;&nbsp;&nbsp;';
	echo 'time:   '.time();
	
	$json_decode = stripslashes($_POST['json_decode']);
	if($json_decode){
		$array_decode = json_decode($json_decode,true);
	}

	$time = $_POST['time'];
	if($time){
		$time_to = strtotime($time);
	}
	
	$time2 = $_POST['time2'];
	if($time2){
		$time_to2 = strtotime($time2);
	}
	
	$timestamp = $_POST['timestamp'];
	if($timestamp){
		$timestamp_to = date('Y-m-d H:i:s',$timestamp);
	}
	
	$timestamp2 = $_POST['timestamp2'];
	if($timestamp2){
		$timestamp_to2 = date('Y-m-d H:i:s',$timestamp2);
	}
	/*
	$timestamp3 = $_POST['timestamp3'];
	if($timestamp3){
	    $timestamp_to3 = date('Y-m-d H:i:s',$timestamp3);
	}
	
	$timestamp4 = $_POST['timestamp4'];
	if($timestamp4){
	    $timestamp_to4 = date('Y-m-d H:i:s',$timestamp4);
	}*/
	
	$urldecode = $_POST['urldecode'];
	if ($urldecode){
		$urldecode_to = urldecode($urldecode);
	}
	
	$urlencode = $_POST['urlencode'];
	if ($urlencode){
		$urlencode_to = urlencode($urlencode);
	}
	
	$utf8decode = $_POST['utf8decode'];
	$utf8json = '{"foo":"' . $utf8decode . '"}';
	$utf8_tmp = json_decode($utf8json, true);
	$utf8decode_to = $utf8_tmp['foo']; 
?>
<html>
<title>转换工具</title>
<form name="form1" method="post" action="">
<br>
<textarea name="json_decode" cols="80" rows="6" id="json_decode"><?php echo $json_decode;?></textarea>json_decode<input type="submit" value="提交" />
<?php
echo "<pre>";
if ($array_decode)	var_export($array_decode);;
echo "</pre>";
?>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
time：
<input type="text" size="30" name="time" value="<?php echo $time;?>"><?php if ($time_to)var_export($time_to);?><br />
time：
<input type="text" size="30" name="time2" value="<?php echo $time2;?>"><?php if ($time_to2)var_export($time_to2);?><br />
timestamp：
<input type="text" size="25" name="timestamp" value="<?php echo $timestamp;?>"><?php if ($timestamp_to)	var_export($timestamp_to);?><br />
timestamp：
<input type="text" size="25" name="timestamp2" value="<?php echo $timestamp2;?>"><?php if ($timestamp_to2)	var_export($timestamp_to2);?><br />
<input type="submit" value="提交" /><br />
<br />
urldecode — 解码已编码的 URL 字符串<br />
<input type="text" size="180" name="urldecode" value="<?php echo $urldecode;?>"><br />
<?php if ($urldecode_to)	var_export($urldecode_to);?><br />

urlencode — 编码 URL 字符串<br />
<input type="text" size="180" name="urlencode" value="<?php echo $urlencode;?>"><br>
<?php if ($urlencode_to)	var_export($urlencode_to);?><br />

unicode字符串解码为中文， 如“\u59d3\u540d” 解码为“姓名”<br />
<input type="text" size="180" name="utf8decode" value="<?php echo $utf8decode;?>">
<?php if ($utf8decode_to)	var_export($utf8decode_to);?>

<input type="submit" value="提交" /><br />
</form>
</html>


