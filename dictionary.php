<html>
<head>
<meta name="txtweb-appkey" content="1a09834f-7a12-4e1d-b1d1-0965bcffe832"/>
</head>
<body>
<?php

$prin=0;
$mess=$_GET['txtweb-message'];
//$mess="catastrophe";
$html = file_get_contents('http://dictionary.cambridge.org/dictionary/british/'.$mess.'_1?q=careful');
preg_match_all("/(<([\w]+)[^>]*>)(.*?)(<\/\\2>)/", $html, $matches, PREG_SET_ORDER);
$i=0;
$j=0;
$see=array("<","d","i","v"," ","c","l","a","s","s","=","1","g","w","b","l","o","c","k","_","b");
$end=array("<","d","i","v"," ","c","l","a","s","s","=","1","d","e","f","i","n","i","t","i","o","n","-","s","r","c");
$flag=1;
echo "welcome to the land of dictionary<br><br>";
for($k=0;$k<200;$k++)
{
if($k>10)
{
$s=$matches[$k][0];
$flag=1;
for($i=0;$i<20;$i++)
{
if($i!=11)
{
if($see[$i]!=$s[$i])
{
$flag=0;
break;
}
}
}

if($flag!=0)
{
$m=1;
for($j=$k;$j<200;$j++)
{
$s=$matches[$j][0];
$flag=1;
for($i=0;$i<20;$i++)
{
if($i!=11)
{
if($end[$i]!=$s[$i])
{
$flag=0;
break;
}
}
}

if($flag==1)
{
return;
}
echo $m." - ".$matches[$j][0]."<br><br>";
$prin=1;
$m++;
}
}
}
}


//echo 

if($prin==0)
{
$html = file_get_contents('http://dictionary.cambridge.org/dictionary/british/'.$mess.'?q=careful');
preg_match_all("/(<([\w]+)[^>]*>)(.*?)(<\/\\2>)/", $html, $matches, PREG_SET_ORDER);
for($k=0;$k<200;$k++)
{
if($k>10)
{
$s=$matches[$k][0];
$flag=1;
for($i=0;$i<20;$i++)
{
if($i!=11)
{
if($see[$i]!=$s[$i])
{
$flag=0;
break;
}
}
}

if($flag!=0)
{
$m=1;
for($j=$k;$j<200;$j++)
{
$s=$matches[$j][0];
$flag=1;
for($i=0;$i<20;$i++)
{
if($i!=11)
{
if($end[$i]!=$s[$i])
{
$flag=0;
break;
}
}
}

if($flag==1)
{
return;
}
echo $m." - ".$matches[$j][0]."<br><br>";

$m++;
}
}
}
}
}
?>



</body>
</html>