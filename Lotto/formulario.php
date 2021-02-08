<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lotto Augsburg</title>
    <link href="https://fonts.googleapis.com/css2?family=Mansalva&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="lottocss.css">
</head>
<body>
    <div id="mainbox">
    <h1 id="lottoh1">Lotto Augsburg</h1>
    <form class="lottoform" action="lottologic.php"method="POST"  >
    
        <label for="Jahre">Anzahl Jahre</label>
        <br>
        <input type="number" name="Jahre" pattern="[0-9]{0,1} " required="required"><br><br>
        <label for="Woche">Anzahl Lottoscheine pro Woche</label>
        <br>
        <input type="number" name="Woche" required="required"><br><br>
        <label for="Preis">Preis Lottoschein </label><br>
        <input type="number" name="Preis" required="required"><br><br>
        <input id="submit" type="submit" name="submit" required=""value="Wahrscheinlichkeit ermitteln"><br><br>
    
        <h2>Wahrscheinlichkeit</h2>




        
        
    </form>


    </div>

   
</body>
    


</html>

