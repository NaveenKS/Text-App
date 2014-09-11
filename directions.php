<html>
<head>
<meta name="txtweb-appkey" content="dbeab9d9-fe62-4a32-90c0-97acf136bfd2"/>
</head>
<body>

<?php
$mess=$_GET['txtweb-message'];
$car=explode(",",$mess);
//$car=array("navrang","shivajinagar");
//echo $car[0]."<br>";
$html = file_get_contents('http://www.latlong.in/'.$car[0].'/'.$car[1].'+to+'.$car[2].'/');
preg_match_all("/(<([\w]+)[^>]*>)(.*?)(<\/\\2>)/", $html, $matches, PREG_SET_ORDER);
$i=0;
$j=0;
$see=array("<","h","3",">");
$flag=1;


for($k=0;$k<100;$k++)
{
if($k>10)
{
$s=$matches[$k][0];
$flag=1;
for($i=0;$i<4;$i++)
{
if($see[$i]!=$s[$i])
{
$flag=0;
break;
}
}

if($flag!=0)
{
for($j=$k;$j<100;$j++)
{
echo $matches[$j][0]."<br><br>";
}
return;
}



}

}


?>

</body>
</html>