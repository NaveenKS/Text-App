<html>
<head>
<meta name="txtweb-appkey" content="a5a4e236-cc7f-4db7-8b08-ae4161fe13b3"/>
</head>
<body>
<?php
//echo "naveen";
$message=$_GET['txtweb-message'];
$car=explode(" ",$message);
$doc = new DOMDocument();
if($car[0]=="news")
{
$doc->load('http://news.google.com/news?ned=in&topic=h&output=rss#title');
echo "GENERAL NEWS<br>";
}
else if($car[0]=="tech")
{
$doc->load('http://news.google.com/news?ned=in&topic=t&output=rss#title');
echo "TECH NEWS<br>";
}
else if($car[0]=="health")
{
$doc->load('http://news.google.com/news?ned=in&topic=m&output=rss#title');
echo "HEALTH NEWS<br>";
}
else if($car[0]=="business")
{
$doc->load('http://news.google.com/news?ned=in&topic=b&output=rss#title');
echo "BUSINESS NEWS<br>";
}
else if($car[0]=="entertainment")
{
$doc->load('http://news.google.com/news?ned=in&topic=e&output=rss#title');
echo "ENTERTAINMENT NEWS<br>";
}
else if($car[0]=="sports")
{
$doc->load('http://news.google.com/news?ned=in&topic=s&output=rss#title');
echo "SPORTS NEWS<br>";
}
else if($car[0]=="world")
{
$doc->load('http://news.google.com/news?ned=in&topic=t&output=rss#title');
echo "WORLD NEWS<br>";
}
else if($car[0]=="kannada")
{
$doc->load('http://feeds.feedburner.com/oneindia-all-thatskannada');
echo "KANNADA NEWS<br>";
}
else
{
echo "everything should be in lowercase and spell it properly";
}
$arrFeeds = array();
foreach($doc->getElementsByTagName('item') as $node)
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
if($count==$car[1])
{
if($key=='title')
{
echo "TITLE - ".$value."<br>";
}
if($key=='desc')
{
echo "DESCRIPTION - ".$value;
return;
}

}
}
$count++;
}

?>
</body>
</html>