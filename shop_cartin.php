<?php
session_start();
session_regenerate_id(true);

if(isset($_SESSION['member_login'])==false)
{
	print 'ようこそゲスト様　';
	print '<a href="member_login.html">会員ログイン</a><br>';
	print '<br>';
}
else
{
	print $_SESSION['staff_name'];
	print 'さんログイン中<br>';
	print '<br>';
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>えみぞ商店</title>
</head>

<body>

<?php

try
{

$pro_code=$_GET['procode'];

$cart=$_SESSION['cart'];
$cart[]=$pro_code;
$_SESSION['cart']=$cart;

foreach($cart as $key=>$val)
{
	print $val;
	print '<br>';
}

}
catch(Exception $e)
{
	print 'ただいま障害により大変ご迷惑をおかけしております。';
	exit();
}

?>

カートに追加しました。<br>
<br>
<a href="shop_list.php">商品一覧に戻る</a>

</body>
</html>
