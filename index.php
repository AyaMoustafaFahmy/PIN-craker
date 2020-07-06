<!Doctype html>
<html>
<head>
  <title> Aya Moustafa md5 craker</title>
  <meta = charset="utf-8">
  <meta= lang="en">
</head>
<body>
<h1>MD5 craker</h1>
<p>This application takes an MD5 hash
  of a four digit pin and check all 10,000
  possible four digit PINs to determin the PIN</p>
<pre>
Debug output:
<?php

$goodtext="Not Found";
//if there is no parameter this code willbe skipped ftp_all
if (isset($_GET["md5"])){
  $time_pre=microtime(True);
  $md5=$_GET["md5"];
  //this is all the numbers
  $num="0123456789";
  $show=15;
  $sum=0;

  //outer loop go through the numbers
  for($i=0;$i<strlen($num);$i++){
    $num1=$num[$i];
    for($j=0;$j<strlen($num);$j++){
      $num2=$num[$j];
      for($k=0;$k<strlen($num);$k++){
        $num3=$num[$k];
        for($l=0;$l<strlen($num);$l++){
          $num4=$num[$l];
          $try=$num1.$num2.$num3.$num4;
          $sum=$sum+1;
          $check=hash('md5',$try);
          if( $check == $md5){
            $goodtext=$try;
            break;
          }
          if ( $show > 0 ) {
            print "$check $try\n";
            $show = $show - 1;
            }
        }
      }
    }
  }
  $time_post = microtime(true);
  print"Total Checks:";
  echo $sum."\n";
  print "Elapsed time: ";
  print $time_post-$time_pre;
  print "\n";
}?>
</pre>
<p>PIN: <?= htmlentities($goodtext); ?></p>
</pre>
<form>
  <input type="text" name="md5" size="60">
  <input type="submit" value="crack md5">
</form>
<ul style="font-size:19px;">
  <li><a href="index.php">Reset this page</a></li>
  <li><a href="makePIN.php">Make an MD5 PIN</a></li>
  <li><a href="md5.php">md5 encoder</a></li>
  <li><a href="">source code for ths application</a></li>
</ul>
</body>
</html>
