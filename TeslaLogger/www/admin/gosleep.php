<?PHP

	unlink("/etc/teslalogger/wakeupteslalogger.txt");

	$filename = "/etc/teslalogger/cmd_gosleep.txt";
	
	$ret =	file_put_contents ($filename,".");
	chmod ($filename, 0666);
	
	$logfile = "/etc/teslalogger/nohup.out";
	$time = date("d.m.Y H:i:s", time());
	$ret2 =	file_put_contents($logfile, $time . " : Go-Sleep file created!\r\n", FILE_APPEND);
		
	echo "ok " . $ret . " / " . $ret2. " / " . $time;
?>