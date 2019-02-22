<?php
	 include 'server.php';
	 $ws = new WebSocket("192.168.61.130", "9000");
	 $this->broadcast('123');
?>