<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paniek Resultaat</title>
</head>
<body>
    <?php
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       
        $Vraag1 = $_POST['Vraag1'];
        $Vraag2 = $_POST['Vraag2'];
        $Vraag3 = $_POST['Vraag3'];
        $Vraag4 = $_POST['Vraag4'];
        $Vraag5 = $_POST['Vraag5'];
        $Vraag6 = $_POST['Vraag6'];
        $Vraag7 = $_POST['Vraag7'];
        $Vraag8 = $_POST['Vraag8'];

     
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