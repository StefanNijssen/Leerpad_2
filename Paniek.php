<!doctype html>
<html lang="en">
<header>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulier</title>
    <nav>
        <a href="Onkunde.php"><button class="NavButton">Onkunde</button></a>
        <a href="Paniek.php"><button class="NavButton">Er heerst paniek!</button></a>
    </nav> 
    
</head>
<body>
    <?php
 $Vraag1_error = $Vraag2_error = $Vraag3_error = $Vraag4_error = $Vraag5_error = $Vraag6_error = $Vraag7_error = $Vraag8_error = "";
 $Vraag1 = $Vraag2 = $Vraag3 = $Vraag4 = $Vraag5 = $Vraag6 = $Vraag7 = $Vraag8 = "";

 if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    if (empty($_POST["Vraag1"])) {
        $Vraag1_error = "Moet ingevuld worden";
    } else {
        $Vraag1 = test_input($_POST["Vraag1"]);
    }

    if (empty($_POST["Vraag2"])) {
        $Vraag2_error = "Moet ingevuld worden";
    } else {
        $Vraag2 = test_input($_POST["Vraag2"]);
    }

    if (empty($_POST["Vraag3"])) {
        $Vraag3_error = "Moet ingevuld worden";
    } else {
        $Vraag3 = test_input($_POST["Vraag3"]);
    }

    if (empty($_POST["Vraag4"])) {
        $Vraag4_error = "Moet ingevuld worden";
    } else {
        $Vraag4 = test_input($_POST["Vraag4"]);
    }

    if (empty($_POST["Vraag5"])) {
        $Vraag5_error = "Moet ingevuld worden";
    } else {
        $Vraag5 = test_input($_POST["Vraag5"]);
    }

    if (empty($_POST["Vraag6"])) {
        $Vraag6_error = "Moet ingevuld worden";
    } else {
        $Vraag6 = test_input($_POST["Vraag6"]);
    }

    if (empty($_POST["Vraag7"])) {
        $Vraag7_error = "Moet ingevuld worden";
    } else {
        $Vraag7 = test_input($_POST["Vraag7"]);
    }

    if (empty($_POST["Vraag8"])) {
        $Vraag8_error = "Moet ingevuld worden";
    } else {
        $Vraag8 = test_input($_POST["Vraag8"]);
    }
 
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    
        <h1>Er heerst paniek!</h1>
        <!-- Formuliervelden hier -->
      
    <h5>Welk dier zou je nooit als huisdier willen hebben? <input type="text" name="Vraag1"">
    <span>*<?php echo $Vraag1_error;?></span><br>
    <h5>Wie is de belagnrijkste persoon in je leven? <input type="text" name="Vraag2">
    <span>*<?php echo $Vraag2_error;?></span><br>
    <h5>In welk land zou je graag willen wonen? <input type="text" name="Vraag3">
    <span>*<?php echo $Vraag3_error;?></span><br>
    <h5>Wat doe je als je je verveelt? <input type="text" name="Vraag4">
    <span>*<?php echo $Vraag4_error;?></span><br>
    <h5>Met welk speelgoed speelde je als kind het meest? <input type="text" name="Vraag5">
    <span>*<?php echo $Vraag5_error;?></span><br>
    <h5>Bij welke docent spijbel je het liefst <input type="text" name="Vraag6">
    <span>*<?php echo $Vraag6_error;?></span><br>
    <h5>Als je €100.000,- had, wat zou je dan kopen? <input type="text" name="Vraag7">
    <span>*<?php echo $Vraag7_error;?></span><br>
    <h5>Wat is je favoriete bezigheid? <input type="text" name="Vraag8">
    <span>*<?php echo $Vraag8_error;?></span><br>
    <input type="submit" name="submit" value="Submit">  
    </form>
<?php
    
    if ($Vraag1 && $Vraag2 && $Vraag3 && $Vraag4 && $Vraag5 && $Vraag6 && $Vraag7 && $Vraag8 != ""){
        ob_clean();
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