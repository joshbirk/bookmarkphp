<?
	//URL of targeted site  
	$url = urldecode($_GET["u"]);  
	$ch = curl_init();  

	// set URL and other appropriate options  
	curl_setopt($ch, CURLOPT_URL, $url);  
	curl_setopt($ch, CURLOPT_HEADER, 0);  
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  

	// grab URL and pass it to the browser  

	$output = curl_exec($ch);
 
	$DOM = new DOMDocument;
    $DOM->loadHTML($output);

    //get the title
	$items = $DOM->getElementsByTagName('title');

	//display all H1 text
	$title = $items[0];
	
	preg_match('\$\d+(\.\d+)?',
	    $output, $matches);

?>
<?echo $url?>|<?echo $title?>|<?echo $matches[0]?>