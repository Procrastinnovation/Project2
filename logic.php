<?php  
$AddNum = $AddNum2 = $AddSym = $AddSym2 = 0;
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$NumWord = $_POST['number_of_words'];
	$AddNum2 = isset($_POST['add_number']);
	$AddSym2 = isset($_POST['add_symbol']);
	if ($AddNum2)
		$AddNum = 'Checked=Checked';
	else
		$AddNum = 'No';
	
	if ($AddSym2)
		$AddSym = 'Checked=Checked';
	else
		$AddSym = 'No';
}

 if($fh = fopen("word_list.txt","r"))
 {
      while (!feof($fh)){
         $F1[] = fgets($fh,9999);
      }
      fclose($fh);
  } 
  
  //show results: for Debug
//print_r($F1);

  $Split = '-';
  $text1 = '';


    if ($NumWord == "" OR $NumWord == 0) 
    {
      $text1 = "Please enter a number between 1 - 9!";
    }
    else 
    {

			$SpeNum = mt_rand(1,10);
			$SpeChar = array(
								1  => "!",
								2  => "@",
								3  => "#",
								4  => "$",
								5  => "%",
								6  => "^",
								7  => "&",
								8  => "*",
								9  => "(",
								10  => ")",
							);
							
          for ($i = 1; $i <= $NumWord; $i++) 
		  {
              $m = mt_rand(0,count($F1)-1);
             // echo "$m $F1[$m]";
   
          $text = $F1[$m];

          $text1.= $text;
          $text1 = trim($text1);
		  if ($AddNum2)
			{
			  $text1.=$m;
			}

			if ($AddSym2)
			{
				$text1.=$SpeChar[$SpeNum];
			}

			if($i!=$NumWord)
			{
					$text1.=$Split;	
			}
     }
}