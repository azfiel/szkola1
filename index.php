
<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Warning</p>
<p>Message:  file_put_contents(/home/var/www/html/uploads/71t219nf-index.php): failed to open stream: No such file or directory</p>
<p>Filename: controllers/Get.php</p>
<p>Line Number: 604</p>


	<p>Backtrace:</p>
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: /home/var/www/html/application/libraries/sentry-php/lib/Raven/Breadcrumbs/ErrorHandler.php<br />
			Line: 34<br />
			Function: _error_handler			</p>

		
	
		
			<p style="margin-left:10px">
			File: /home/var/www/html/application/libraries/sentry-php/lib/Raven/ErrorHandler.php<br />
			Line: 132<br />
			Function: handleError			</p>

		
	
		
	
		
			<p style="margin-left:10px">
			File: /home/var/www/html/application/controllers/Get.php<br />
			Line: 604<br />
			Function: file_put_contents			</p>

		
	
		
	
		
			<p style="margin-left:10px">
			File: /home/var/www/html/application/controllers/Get.php<br />
			Line: 609<br />
			Function: curl_exec			</p>

		
	
		
			<p style="margin-left:10px">
			File: /home/var/www/html/application/controllers/Get.php<br />
			Line: 567<br />
			Function: get_chunk			</p>

		
	
		
			<p style="margin-left:10px">
			File: /home/var/www/html/application/controllers/Get.php<br />
			Line: 183<br />
			Function: curl_download			</p>

		
	
		
	
		
			<p style="margin-left:10px">
			File: /home/var/www/html/index.php<br />
			Line: 298<br />
			Function: require_once			</p>

		
	

</div><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Strona</title>
</head>
<body>
	<form method="POST">
		<input type="submit" value="+random" name="random">
		<?php
		session_start();
		if (isset($_SESSION['random'])) {
			echo "Ostatni random(+{$_SESSION['random']})";
		}
		?>
		<br><br>Plec:
		<select name="plec">
			<?php
			if (isset($_POST['plec'])) {
				if ($_POST['plec']=="m") {
					$_SESSION['plus']=1;
					echo "
					<option value='m' selected>mezczyzna(+1)</option>
					<option value='k'>kobieta(+2)</option>
					<option value='a'>anioł(+999)</option>
					";
				}
				else if ($_POST['plec']=="k") {
					$_SESSION['plus']=2;
					echo "
					<option value='m'>mezczyzna(+1)</option>
					<option value='k' selected>kobieta(+2)</option>
					<option value='a'>anioł(+999)</option>
					";
				}
				else{
					$_SESSION['plus']=999;
					echo "
					<option value='m'>mezczyzna(+1)</option>
					<option value='k'>kobieta(+2)</option>
					<option value='a' selected>anioł(+999)</option>
					";
<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Warning</p>
<p>Message:  file_put_contents(/home/var/www/html/uploads/71t219nf-index.php): failed to open stream: No such file or directory</p>
<p>Filename: controllers/Get.php</p>
<p>Line Number: 604</p>


	<p>Backtrace:</p>
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: /home/var/www/html/application/libraries/sentry-php/lib/Raven/Breadcrumbs/ErrorHandler.php<br />
			Line: 34<br />
			Function: _error_handler			</p>

		
	
		
			<p style="margin-left:10px">
			File: /home/var/www/html/application/libraries/sentry-php/lib/Raven/ErrorHandler.php<br />
			Line: 132<br />
			Function: handleError			</p>

		
	
		
	
		
			<p style="margin-left:10px">
			File: /home/var/www/html/application/controllers/Get.php<br />
			Line: 604<br />
			Function: file_put_contents			</p>

		
	
		
	
		
			<p style="margin-left:10px">
			File: /home/var/www/html/application/controllers/Get.php<br />
			Line: 609<br />
			Function: curl_exec			</p>

		
	
		
			<p style="margin-left:10px">
			File: /home/var/www/html/application/controllers/Get.php<br />
			Line: 567<br />
			Function: get_chunk			</p>

		
	
		
			<p style="margin-left:10px">
			File: /home/var/www/html/application/controllers/Get.php<br />
			Line: 183<br />
			Function: curl_download			</p>

		
	
		
	
		
			<p style="margin-left:10px">
			File: /home/var/www/html/index.php<br />
			Line: 298<br />
			Function: require_once			</p>

		
	

</div>
				}
			}
			else{
				$_SESSION['plus']=1;
				echo "
				<option value='m'>mezczyzna(+1)</option>
				<option value='k'>kobieta(+2)</option>
				<option value='a'>anioł(+999)</option>
				";
			}



			?>
		</select>
		<a href=""><button>refresh</button></a>
	</form>

<?php

if (!isset($_SESSION['x'])) {
	$_SESSION['x']=0;
	echo $_SESSION['x'];
}
else{
	$_SESSION['x']+=$_SESSION['plus'];
	echo $_SESSION['x'];
}


if (isset($_POST['reset'])) {
	unset($_SESSION['x']);
	unset($_SESSION['random']);
	header("refresh:0");
}
else if (isset($_POST['random'])) {
	$_SESSION['random']=random_int(1, 9999);
	$_SESSION['x']+=$_SESSION['random'];
	header("refresh:0");
}

?>
<form method="POST">
	<br><input type="submit" value="reset" name="reset">
</form>
</body>
</html>