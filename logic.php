
<?php
if (isset($_POST['countwords'])) 
    {
		$countwords = $_POST['countwords'];
		
		if (!is_numeric($countwords)) 
		{
			 echo "Please enter Number in 'Number of words' <br>!";
		}
	} 
	else 
	{
    $countwords = 1;
	}

if (isset($_POST['lengthpassword'])) 
    {
		$lengthpassword = $_POST['lengthpassword'];
		
		if (!is_numeric($lengthpassword)) 
		{
			 echo "Please enter Number in 'Length of password'  !";
			 
		}
	} 
	else 
	{
    $lengthpassword = 6;
	}

if (isset($_POST['uppercase'])) 
	{
    $uppercase=true;
	} 
	else 
	{
    $uppercase=false;
	}

if (isset($_POST['symbol'])) 
	{
    $symbol=true;
	} 
	else 
	{
    $symbol=false;
	}

if (isset($_POST['number'])) 
	{
    $number=true;
	} 
	else 
	{
    $number=false;
	}

if ($words = file('words.txt')) 
	{
		$selected_words = [];      
		$symbols = ['!', '@', '#'];
		$numbers = [0,1,2,3,4,5,6,7,8,9];
				
		for($i=0;$i<$countwords; $i++)
		{
		$randomsymbol = rand(0, count($symbols)-1);
		$randomnumber = rand(0, count($numbers)-1);		
		$max = count($words)-1;    
		$rand = rand(0, $max);
		$word  = $words[$rand];
		array_push($selected_words, $word);
		}
	
		if ($uppercase)
		{
			foreach ($selected_words as $index => $word)
			{    
			$selected_words[$index] = ucfirst($word);
			$selected_words[$index] = substr($selected_words[$index],0, $lengthpassword); 
			$selected_words[$index]  = $selected_words[$index].'<br>';
			}
		}
		
		if ($symbol) 
		{
			foreach ($selected_words as $index => $word) 
			{		
			$selected_words[$index]  = $symbols[$randomsymbol].$word.'<br>';
			$selected_words[$index] = substr($selected_words[$index],0, $lengthpassword); 
			$selected_words[$index]  = $selected_words[$index].'<br>';
			}
		}
		
		if ($number) 
		{
			foreach ($selected_words as $index => $word) 
			{		
			$selected_words[$index]  = $numbers[$randomnumber].$word.'<br>';
			$selected_words[$index] = substr($selected_words[$index],0, $lengthpassword); 
			$selected_words[$index]  = $selected_words[$index].'<br>';		
			}
		}

		$password = implode("", $selected_words);

       /* # works only with number of words = 1 
	      $password = str_shuffle($password);	
    	*/
	}
	
