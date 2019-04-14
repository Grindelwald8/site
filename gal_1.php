<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css"> 
<link rel="stylesheet" type="text/css" href="lightbox.min.css">
<script src="lightbox-plus-jquery.min.js"></script>
<title>Abc</title>
<script type="text/javascript" src="jquery.js"></script>
<style type="text/css">
@import url(css.css);
</style>
<script type="text/javascript" src="js.js"></script>
</head>
<body>

<div id="wrap">

<div id="head">

</div>
<div id="Lsidebar">
<div id="mmenu">
<ul>
<li><a href="http://ivan07pz.beget.tech">HOME </a></li>
<li><a href="p1.php">LUNCH </a></li>
</ul>
</div>
</div>
<div id="Rsidebar"></div>

<div id="content">

<div class="gallery" align="center">

<?
for( $i=4;$i<14;$i++){
	echo "<a href="."\"photo/f (".$i.").jpg\";". " data-lightbox="."\"mygallery\""."> <img src="."\"photo/f (".$i.").jpg\""." width="." \"40%\";" ." height="." \"40%\""."></a>";
}
?>

</div>

</div>

<div id="footer">

</div>


</div><!-- СТРАНИЦА -->
</body>
</html>