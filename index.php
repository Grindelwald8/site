<!DOCTYPE html>
<?php
//session_start(); 
include 'config.php';

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<script type="text/javascript" src="jquery.js"></script>
<style type="text/css">
@import url(css.css);
</style> 
<link rel="stylesheet" type="text/css" href="style.css"> 
<link rel="stylesheet" type="text/css" href="media-query.css"> 
<link rel="stylesheet" type="text/css" href="lightbox.min.css">
<script src="lightbox-plus-jquery.min.js"></script>
<script type="text/javascript" src="js.js"></script>
<title>Abc</title>
</head>
<body vlink="#cecece" alink="#ff0000">

<div id="wrap">

<div id="head">
<div id="hh">
<h1><a href="https://oauth.yandex.ru/authorize?response_type=code&client_id=<?=ID?>" target="_blank">Войти через Яндекс</a>
</h1>
</div>
</div>
<div id="Lsidebar">
<h1><a href="https://oauth.yandex.ru/authorize?response_type=code&client_id=<?=ID?>" target="_blank">Войти через Яндекс</a>
</h1>
<?php

if(!empty($_SESSION['user'])){
echo $_SESSION['user'];
}
?>
</div>
<div id="Rsidebar"></div>

<div id="nad_content">
  <ul id="nav" align="center">
        <li><a href="index.php">СТАРТОВАЯ</a></li>
        <li><a href="gal_1.php">0-10</a></li>
        <li><a href="gal_2.php">0-20</a></li>
        <li><a href="gal_5.php">0-50</a></li>
        <li><a href="gal.php">ВСЕ ФОТО</a></li>
    </ul>
</div>
<div id="content">

</div>

<div id="footer">

</div>


</div><!-- СТРАНИЦА -->
</body>
</html>



