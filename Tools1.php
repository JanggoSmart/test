<?php
$shell = "site.com/shell.php";
$cek_header = get_headers($shell);

	if(preg_match('/200/', $cek_header[0])) {
	
		echo "Shell Ketemu Mhamank";
		
		} else {
		
		echo "Shell Gaketemu :(";
		
		}
?>
