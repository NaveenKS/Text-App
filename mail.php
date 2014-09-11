<html>
<head>
<meta name="txtweb-appkey" content="fe63e15a-9559-4232-a234-a4349ee0a7df"/>  
</head>
<body background="red">
<?php
$ram=1;
$sita=1;

$mess=$_GET['txtweb-message'];
//$mess="naveenksid@gmail.com|naveenksid@gmail.com|test|lol";
$car=explode("|",$mess);
$to =strtolower($car[1]);
$subject =$car[2];
$message =$car[3];
$from = strtolower($car[0]);
$headers = "From:" . $from;
$pos1=strpos($to,"@");
$pos2=strrpos($to,".");
if ($pos1<1 || $pos2<$pos1+2 || $pos2+2>=strlen($to))
  {
  $ram=0;
  }

$pos1=strpos($from,"@");
$pos2=strrpos($from,".");
if ($pos1<1 || $pos2<$pos1+2 || $pos2+2>=strlen($from))
  {
  $sita=0;
  }
if($ram==1 && $sita==1)
{

if(isset($from) && isset($to) && isset($subject) && isset($message))
{
mail($to,$subject,$message,$headers);
echo "Mail successfully Sent.";
}
else
{
echo "ERROR : Inputs missing in the mail.";
}
}
else
{
echo "ERROR : To address or From address is not proper(not valid).";
}

?>
</body>
</html>