<?php
	if(isset($_POST['submit'])) {
		$msg = 'Namn: ' .$_POST['name'] ."\n"
			.'Email: ' .$POST['email'] ."\n"
			.'Mobil nummer: ' .$POST['phone'] ."\n"
			.'Medelande: ' .$POST['message'];
		mail('abelgetachew64@yahoo.com'), 'Medelande från kunder,' $msg);
	} else {
		header ('location: index.html');
		exit(0);
	}
?>