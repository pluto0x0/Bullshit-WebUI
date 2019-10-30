<html>
	<head>
		<title>Py deal</title>
		<style>
		textarea{width:80%;height:100%;position:absolute;left:10%;}
		div{margin:auto; position:absolute; top:0; left:0; right:0; bottom:0;}
		</style>
	</head>
	<body>
		<?php if (!isset($_GET['content'])):?>
		<div>
		<form action="" method="GET">
			标题：
			<input type="text" name="content"/>
			<input type="submit" value="Submit"/>
		</form>
		</div>
		<?php else:?>
		<textarea>
		<?php
		system('python BullShit.py '.trim($_GET['content']), $content);
		// exec('ls', $content, $temp);
		//var_dump($content);
		//echo $content;
		?>
		</textarea>
		<?php endif;?>
	</body>
</html>