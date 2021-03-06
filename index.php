<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<!--<script type='text/javascript' language='javascript' src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
    <!--<script type='text/javascript' language='javascript' src="<?php echo base_url();?>js/jquery/jquery1.12.4.min.js"></script>-->
    <!--<script type="text/javascript" language="javascript" src="<?php echo base_url() ;?>js/jquery-1.4.2.min.js" ></script>  -->
    <!--<script type='text/javascript' language='javascript' src='<?php echo base_url();?>js/ajaxfileupload.js'></script>-->
    <!--<script type='text/javascript' language='javascript' src='<?php echo base_url();?>js/jquery.form.js'></script>
	<script type='text/javascript' language='javascript' src='<?php echo base_url() ;?>js/jquery/jalert/jquery1.4.2.alerts.js'></script>
	<script type='text/javascript' language='javascript' src='<?php echo base_url() ;?>js/frontend/fn-function.js'></script>
	-->
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter! testfdffee</h1>
	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>
		<?php phpinfo(); ?>

	</div>
</div>

</body>
</html>