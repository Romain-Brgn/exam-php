<?php

foreach($questionTable as $question){

echo $question;

}

$questionTable = [
    // question 1
    ["question"=>"Comment déclare t'on une variable en PHP ?",
    "reponses"=>
            [
            // reponse 1
            '$maVariable =',
            // reponse 2
            '$_maVariable =',
            // reponse 3
            'let maVariable =',
            // reponse 4
            '@maVariable ='
            ]
            
            ],
            // question 2
    ["question"=>"PHP est un language :",
    "reponses"=>
            [
            // reponse 1
            "Front-end",
            // reponse 2
            "Algorithmique",
            // reponse 3
            "Back-end",
            // reponse 4
            "Autre"
            ]
            
            ],
            // question 3
        ["question"=>"Combien de % du web est codé en PHP ?",
    "reponses"=>
            [
            // reponse 1
            "20%",
            // reponse 2
            "50%",
            // reponse 3
            "80%",
            // reponse 4
            "100%"
            ]
            
            ]
];