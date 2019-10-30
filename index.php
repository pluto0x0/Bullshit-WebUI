<html>
	<head>
		<title>自动狗屁不通文章生成器</title>
		<style>
		textarea{width:80%;height:99%;position:absolute;left:10%;}
		.ass{position: absolute;top: 20%;left: 50%;transform:translateX(-50%);}
		</style>
	</head>
	<body>
		<?php if (!isset($_GET['content'])):?>
		<div class="ass">
		<h2>自动狗屁不通文章生成器</h2>
		<form action="" method="GET">
			标题：
			<input type="text" name="content"/>
			<input type="submit" value="Submit"/>
		</form>
		<center><a href="https://github.com/menzi11/BullshitGenerator">Github</a></center>
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