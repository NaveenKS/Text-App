<html>
<head>
<meta name="txtweb-appkey" content="d45d1a23-9b46-4ba7-9620-5febe38297dd"/>
</head>
<body>
<?php
//echo "naveen";
$message=$_GET['txtweb-message'];
$doc=new DOMDocument();
if($message=="leo")
{
$doc->load('http://feeds.feedburner.com/AstroSageLeo#body');
}

else if($message=="gemini")
{
$doc->load('http://feeds.feedburner.com/AstroSageGemini#body');
}

else if($message=="cancer")
{
$doc->load('http://feeds.feedburner.com/AstroSageCancer#body');
}

else if($message=="taurus")
{
$doc->load('http://feeds.feedburner.com/AstroSageTaurus#body');
}


else if($message=="aquarius")
{
$doc->load('http://feeds.feedburner.com/AstroSageAquarius#body');
}


else if($message=="libra")
{
$doc->load('http://feeds.feedburner.com/AstroSageLibra#body');
}

else if($message=="pisces")
{
$doc->load('http://feeds.feedburner.com/AstroSagePisces#body');
}

else if($message=="scorpio")
{
$doc->load('http://feeds.feedburner.com/AstroSageScorpio#body');
}


else if($message=="virgo")
{
$doc->load('http://feeds.feedburner.com/AstroSageVirgo#body');
}

else if($message=="sagittarius")
{
$doc->load('http://feeds.feedburner.com/AstroSageSagittarius#body');
}

else if($message=="capricorn")
{
$doc->load('http://feeds.feedburner.com/AstroSageCapricorn#body');
}

else
{
echo "everything shd be in lowercase and spell it properly";
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
if($count<=2)
{
echo $value."<br>";
}
}
$count++;
}

?>
</body>
</html>