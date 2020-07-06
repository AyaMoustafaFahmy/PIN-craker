<!Doctype>
<html>
<head>
  <title>Aya Moustafa PIN Maker</title>
</head>
<body>
<h1>MD5 PIN Maker</h1>

<?php
$goodtext="";
if(isset($_GET["encode"])){
  //if( $_GET["encode"]>999 || $_GET["encode"]==0000){
  $PIN=$_GET["encode"];
  if(strlen($_GET["encode"])==4 && is_int($_GET["encode"])){
  $md5=hash('md5',$PIN);
  $goodtext="MD5 value: ".$md5;
}else{
  $goodtext="Input must be exactly four Numbers";
}
}
?>
<p style="color:red;"><?= htmlentities($goodtext);?> </p>
<form>
<input type="text" name="encode" size="20">
<input type="submit" value="compute MD5 for Pin">
</form>
<ul style="font-size:19px;">
  <li><a href="makePIN.php">Reset</a></li>
  <li><a href="index.php">Back to Cracking</a></li>
</ul>
</body>
</html>
