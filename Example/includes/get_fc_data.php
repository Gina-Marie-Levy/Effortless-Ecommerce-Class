<?php   
    $moodArr=array('Happy','Sad','Adventurous','Lonely','Lost');

    $xmlURL = "http://www.fortunecookiemessage.com/feeds.xml";
    $xmlData = simplexml_load_file($xmlURL);
    $xmlData->asXML("data/fortunes.xml");
    
    $jsonStr="{";
    //foreach loop to create JSON
    $max=count($moodArr);
    for($i=0; $i<$max; $i++){
        $fortuneText =$xmlData->channel->item[$i]->description;
        $fortuneText= substr($fortuneText, 4, strlen($fortuneText));
        $trimmedText=rtrim($fortuneText,"</p>");
        $jsonStr.="\"".$moodArr[$i]."\":";
        $jsonStr.="\"".$trimmedText;
        $jsonStr.="\",";
    }
    $jsonStr=rtrim($jsonStr, ",");
    $jsonStr.="}";
    $trimmed= trim($jsonStr, " ");
     
   
    $file = 'data/fortunes.txt';
    if (file_exists($file)) {
        $message = file_get_contents($file);
        $message=$trimmed;
        file_put_contents($file, $message);
    }


?>
     