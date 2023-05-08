<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paniek Resultaat</title>
</head>
<body>
    <?php
    
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		// Define an array to store errors
		$errors = array();
		
		// Validate the input for each question
		if (empty($_POST['Vraag1'])) {
		  $errors['Vraag1'] = "Je moet deze vraag beantwoorden.";
		}
		
		if (empty($_POST['Vraag2'])) {
		  $errors['Vraag2'] = "Je moet deze vraag beantwoorden.";
		}
		
		if (empty($_POST['Vraag3'])) {
		  $errors['Vraag3'] = "Je moet deze vraag beantwoorden.";
		}
		
		if (empty($_POST['Vraag4'])) {
		  $errors['Vraag4'] = "Je moet deze vraag beantwoorden.";
		}
		
		if (empty($_POST['Vraag5'])) {
		  $errors['Vraag5'] = "Je moet deze vraag beantwoorden.";
		}
		
		if (empty($_POST['Vraag6'])) {
		  $errors['Vraag6'] = "Je moet deze vraag beantwoorden.";
		}
		
		if (empty($_POST['Vraag7'])) {
		  $errors['Vraag7'] = "Je moet deze vraag beantwoorden.";
		}
		
		if (empty($_POST['Vraag8'])) {
		  $errors['Vraag8'] = "Je moet deze vraag beantwoorden.";
		}
		
		// If there are no errors, redirect to the success page
		if (empty($errors)) {
		  header('Location: PaniekResultaat.php');
		  exit();
		}
		

     
        echo "Er heerst paniek in het koninkrijk $Vraag3. Koning $Vraag6 is ten einde raad en als koning $Vraag6 ten einde raad is, dan roept hij zijn ten-einde-raadsheer Spinoza.<br>";
        echo "$Vraag2! Het is een ramp! Het is een schande!<br>";
		echo "Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?<br>";
        echo"Mijn $Vraag1 is verdwenen! Zo maar, zonder waarschuwing. En ik had net Lego voor hem
		gekocht!<br>";
        echo "Majesteit, uw $Vraag1 komt vast vanzelf weer terug?<br>";
        echo "Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd $Vraag8 leren?<br>";
        echo "Maar Sire, daar kunt u toch uw $Vraag7 voor gebruiken.<br>";
        echo "$Vraag2, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had.<br>";
        echo "$Vraag4, Sire.<br>";
    } 
    ?>
</body>
</html>