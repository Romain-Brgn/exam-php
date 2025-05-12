<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="global.css">
    <title>Quiz Exam</title>
</head>
<body>
    <h1>Test technique PHP</h1>
    
       <div id="container"> 
        <fieldset id="fieldContainer"><legend> Question y/x </legend>
            <h2>Comment déclare t'on une variable en PHP ?</h2>
            <article class="listAnswer">
                <input type="radio" id="azzaer" name="question1" value="true">
                <label  for="azzaer">"$maVariable = "</label><br>
            </article>
            <article class="listAnswer">
                <input type="radio" id="azerz" name="question1" value="false">
                <label for="azerz">"$_maVariable = "</label><br>
                </article>
            <article class="listAnswer">
                <input type="radio" id="zerret" name="question1" value="false">
                <label for="zerret">"let maVariable = "</label><br>
            </article>  
            <article class="listAnswer">
                <input type="radio" id="zea" name="question1" value="false">
                <label  for="zea">"@maVariable = "</label><br>
            </article>
        </fieldset>
        </div>
        <div id="scoreContainer">
            <button method="post" id="validationButton">Validez</button>
        </div>
        
        
    
    
</body>
</html> 