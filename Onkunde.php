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
    
    <form method="post" action="OnkundeResultaat.php">
    
        <h1>Er heerst paniek!</h1>
        <!-- Formuliervelden hier -->
      
    <h5>Welk dier zou je nooit als huisdier willen hebben? <input type="text" name="Vraag1"><h5>
    <h5>Wie is de belagnrijkste persoon in je leven? <input type="text" name="Vraag2"><h5>
    <h5>In welk land zou je graag willen wonen? <input type="text" name="Vraag3"><h5>
    <h5>Wat doe je als je je verveelt? <input type="text" name="Vraag4"><h5>
    <h5>Met welk speelgoed speelde je als kind het meest? <input type="text" name="Vraag5"><h5>
    <h5>Bij welke docent spijbel je het liefst <input type="text" name="Vraag6"><h5>
    <h5>Als je €100.000,- had, wat zou je dan kopen? <input type="text" name="Vraag7"><h5>
    <h5>Wat is je favoriete bezigheid? <input type="text" name="Vraag8"><h5>
    <h5><input type="submit" value="Verzend">
    </form>
</body>
</html>