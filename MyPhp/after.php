<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>
<?php
$nickname=$_POST['nickname'];
if($nickname==''){
	print 'テキストボックスをシカトするとはいい度胸じゃねえか！';
	}
else{
	print'でっでたあああああああ ';
	print $nickname;
	print' があらわれたぞおおおおおお';
}
	
?>
</title>
</head>
<body>
<?php

if($nickname==''){
	print '入力しろや！　ちなみにタイトルも変化してるんだぜ！';
}else
{
	print 'よくきたな　';
	print $_POST['nickname'];
	print '　やらないか？';
}
?>
<br />
<img src="sample.jpg">
<br />
<a href="http://www.compken.com/blog/">コンピ研ブログはこちら！</a>

<br />
<form method="post" action="check.php">
<input type="submit" value="戻る">
</form>

</body>
</html>
