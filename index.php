<?
	error_reporting(-1);
	
	//URL of targeted site  
	$url = urldecode($_GET["u"]);  
	$ch = curl_init();  

	// set URL and other appropriate options  
	curl_setopt($ch, CURLOPT_URL, $url);  
	curl_setopt($ch, CURLOPT_HEADER, 0);  
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  

	// grab URL and pass it to the browser  

	$output = curl_exec($ch);
 
	preg_match('!<title>(.*?)</title>!i', $ouput, $title)
	
	preg_match('\$\d+(\.\d+)?',
	    $output, $price);

?>
<?echo $url?>|<?echo $title[0]?>|<?echo $price[0]?>