<?php
    function collectionService($answer)
    {
        return $_POST[$answer];
    }
    function keyCheck($answer, $key) 
    {
        global $numCorrect;
        if ($answer == $key) 
        {
            $numCorrect++;
        }
    }
    $numCorrect = 0;
    echo "Q1: Where is the capital of America? <br>";
    echo "You answered: ". collectionService("America") . "<br>";
    keyCheck(collectionService("America"), "A: Washington");
    echo "Correct answer: A: Washington <br> <br>";

    echo "Q2: Where is the capital of China? <br>";
    echo "You answered: ". collectionService("China") . "<br>";
    keyCheck(collectionService("China"), "B: Beijing");
    echo "Correct answer: B: Beijing <br> <br>";

    echo "Q3: Where is the capital of Russia? <br>";
    echo "You answered: ". collectionService("Russia") . "<br>";
    keyCheck(collectionService("Russia"), "C: Moscow");
    echo "Correct answer: C: Moscow <br> <br>";

    echo "Q4: Where is the capital of France? <br>";
    echo "You answered: ". collectionService("France") . "<br>";
    keyCheck(collectionService("France"), "D: Paris");
    echo "Correct answer: D: Paris <br> <br>";

    echo "Q5: Where is the capital of Britain? <br>";
    echo "You answered: ". collectionService("Britain") . "<br>";
    keyCheck(collectionService("Britain"), "E: London");
    echo "Correct answer: E: London <br> <br> <br>";



    echo "You have correctly answered: <b>" . $numCorrect . "</b> Question(s)! <br>";
    echo "<b>You received a score of: " . ($numCorrect / 5 * 100) . "% <br>";

?>