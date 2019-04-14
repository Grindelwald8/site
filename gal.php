<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css"> 
<link rel="stylesheet" type="text/css" href="lightbox.min.css">
<script src="lightbox-plus-jquery.min.js"></script>
<title>Abc</title>
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

<div class="gallery" align="center" >

<?
for( $i=4;$i<85;$i++){
	echo "<a href="."\"photo/f (".$i.").jpg\";". " data-lightbox="."\"mygallery\""."> <img src="."\"photo/f (".$i.").jpg\""." width="." \"10%\";" ." height="." \"10%\""."></a>";
}
?>

</div>

</div>

<div id="footer">

</div>


</div><!-- СТРАНИЦА -->
</body>
</html>