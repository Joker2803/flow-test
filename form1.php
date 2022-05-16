<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">  
        Select File:  
        <input type="file" name="fileToUpload"/>  
        <input type="submit" value="Upload Image" name="submit"/>  
    </form>  
/*
	$filename = "f.txt";
	$f = fopen($filename, "r");
	$content = fread($f, filesize($filename));
	echo $content . "<br>";
	$strArr = explode(" ", $content);
	$numConsequense = "";
	foreach($strArr as $element){
		if((int)$element > 0){
			$numConsequense .= $element . " ";
		}

	}
	echo $numConsequense."<br/>";

	$gOpen = fopen("g.txt", "w+");
	$reault = fwrite($gOpen, $numConsequense);
	fclose($gOpen);
	fclose($f);
*/