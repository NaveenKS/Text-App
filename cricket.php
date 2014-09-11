<html>
<head>           
<meta name="txtweb-appkey" content="e02eac42-94ca-46f5-b998-adbe7a17b462">
</head>
<body>
<?php
//$message="India";     
$message=$_GET['txtweb-message'];
$doc = new DOMDocument();   
$doc->load('http://static.espncricinfo.com/rss/livescores.xml');     
$arrFeeds = array();   
foreach ($doc->getElementsByTagName('item') as $node) 
{   

$itemRSS = array (      
'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,     
'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,    
'link' => $node->getElementsByTagName('link')->item(0)->nodeValue  
);    
 //populating the array arrFeeds with itemRSS array   
array_push($arrFeeds, $itemRSS);   
}
if($message=="all")
{  
foreach ($arrFeeds as $feeds)     
{     
foreach ($feeds as $key => $value)         
{
if($key == "desc")
{     
echo $value."<br>";        
}
}
}
return;
}
else
{
foreach ($arrFeeds as $feeds)     
{     
foreach ($feeds as $key => $value)         
{     
if ($key == "desc" && stristr($value,$message))             
{               
echo $value."<br/>";       
return;             
}
}
}

}

  
echo "Currently $message is not playing any cricket match";   
?>
</body>
</html>      
 