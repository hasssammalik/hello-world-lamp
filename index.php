<?php $link = mysql_connect('localhost', 'root'); ?>
<html>
<head>
	<title>Hello world!</title>
	<style>
	body {
		background-color: white;
		text-align: center;
		padding: 50px;
		font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
	}

	#logo {
		margin-bottom: 40px;
	}
	</style>
</head>
<body>
	<img id="logo" src="https://asmex.digital/wp-content/uploads/2015/09/asmex.digital_logo-web_2_360-300x57.png" />
	<h1><?php echo "Hello Docker!"; ?></h1>
	<?php // if(!$link) { ?>
                <h2>Can't connect to local MySQL Server!</h2> !>
	<?php //} else { ?>
		<h2>MySQL Server version: <?php echo mysql_get_server_info(); ?></h2>
	<?php// } ?>
</body>
</html>
