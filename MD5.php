<!Doctype html>
<html>
<head>
  <title>Aya Moustafa md5 Maker</title>
</head>
<body>
<h1>MD5 Maker</h1>
<p>
<?php
if (isset($_GET["code"])){
  $md5=hash('md5',$_GET["code"]);
  echo "MD5:".$md5."\n";
}
 ?>
</p>
<form>
  <input type="text" name="code" size="20">
  <input type="submit" value="Compute MD5">
</form>
<ul style="font-size:19px;">
  <li><a href="md5.php">Reset</a></li>
  <li><a href="index.php">Back to Cracking</a></li>
</ul>
</body>
</html>
