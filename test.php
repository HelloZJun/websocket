<?php
	 $ws = new WebSocket("192.168.61.130", "9000");
	 $msg = {'content': 'im ws', 'type': 'user'};
	 $ws->send("$msg");
?>