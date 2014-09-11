<html>
<head>
<meta name="txtweb-appkey" content="ae75c403-6738-4a00-8024-65c521e27535"/>  
</head>
<body>
<?php
$doc = new DOMDocument();
$mes=$_GET['txtweb-message'];
$split=explode("|",$mes);
echo "welcome to search engine<br>";
if($split[1]==1)
{
$doc->load('http://www.bing.com/search?q='.$split[0].'&go=&qs=bs&filt=all&first=1&FORM=PERE&format=rss');
}
else
{
$s=$split[1]-1;
//echo $s;
$doc->load('http://www.bing.com/search?q='.$split[0].'&go=&qs=bs&filt=all&first='.$s.'1&FORM=PERE'.$s.'&format=rss');
//http://www.bing.com/search?q=car&go=&qs=bs&filt=all&first=31&FORM=PERE
}

$arrFeeds = array();
foreach ($doc->getElementsByTagName('item') as $node)
{
$itemRSS=array (
'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
'desc' =>  $node->getElementsByTagName('description')->item(0)->nodeValue
);
array_push($arrFeeds,$itemRSS);
}
$count=1;
foreach($arrFeeds as $feeds)
{
foreach($feeds as $key => $value)
{

if($key=='title')
{
echo $count."-".$value."<br>";
}
if($key=='desc')
{
echo "desc -".$value."<br>";
}
}
$count++;
}

?>
</body>
</html>