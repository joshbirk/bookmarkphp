<?
	error_reporting(-1);
	ini_set('error_reporting', E_ALL);
	
	//URL of targeted site  
	$url = urldecode($_GET["u"]);  
	$ch = curl_init();  

	// set URL and other appropriate options  
	curl_setopt($ch, CURLOPT_URL, $url);  
	curl_setopt($ch, CURLOPT_HEADER, 0);  
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  

	// grab URL and pass it to the browser  
	$output = curl_exec($ch);
 
	preg_match("/<title>(.+)<\/title>/i", $output, $title);
/*	
	if (preg_match('/(\$[0-9,]+(\.[0-9]{2})?)/', $output, $matches))
	{
	    echo 'found';
		echo $matches[0];
	}
	else
	{
	    echo 'not found';
	}
	preg_match("/(\$[0-9,]+(\.[0-9]{2})?)/", $output, $price);
	*/
	
?>
<?echo $url?>|||<?echo $title[1]?>