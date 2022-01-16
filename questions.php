<?php

$questions = [];
$results = file_exists('questions.json') ? json_decode(file_get_contents('questions.json'), true) : [];
$minScore = 888888888;

foreach(scandir(__DIR__) as $file)
{
    if (in_array($file, ['.', '..', 'questions.php', 'answer.php', 'questions.json', '.git', 'assets']))
        continue;
    $fileContent = file_get_contents($file);

    preg_match("/## Questions(.*)$/s", ($fileContent), $matches);
    $questionSection = $matches[0];
    $foundQuestions = preg_match_all("/- *([a-zA-Z\/\\ ?,()]+)[\r\n]{1,2} *- *([A-Z-a-z\/\" .,0-9:'%();]+)/", $questionSection, $matches);
    
    for ($i = 0; $i < sizeof($matches[1]); $i++) {

        $score = array_key_exists($matches[1][$i], $results) ? ($results[$matches[1][$i]]['correct'] - $results[$matches[1][$i]]['incorrect']) : 0;
        
        $questions[$matches[1][$i]] = 
        [
            'answer' => $matches[2][$i],
            'topic' => $file,
            'score' => $score
        ];

        if ($score < $minScore)
            $minScore = $score;
    }
}

$questionPool = array_filter($questions, fn($question) => $minScore <= $question['score'] && $question['score'] < $minScore + 2);

$question = array_rand($questionPool);
$answer = $questions[$question]['answer'];
$topic = $questions[$question]['topic'];

?>

<html>
    <head>
    </head>
    <body style="display:flex;flex-direction:column;justify-items:center;align-items:center">
        <span><?= $topic ?></span>    
        <p style="font-size:30px"><?= $question ?></p>
        <button onclick="document.getElementById('answer').style.display = 'block';this.style.display = 'none';document.getElementById('next').style.display = 'block'">Reveal Answer</button>
    
        <div id="answer" style="display:none">
            <p><?= $answer ?></p>
        </div>
        <div id="next" style="display:none">
            <p>Did you get it right?</p>
            <div style="display:flex;justify-content:center">
                <form method="post" action="answer.php">
                    <input type="hidden" name="question" value="<?= $question ?>">
                    <input type="hidden" name="correct" value="yes">
                    <button>Yes</button>
                </form>
                <form method="post" action="answer.php">
                    <input type="hidden" name="question" value="<?= $question ?>">
                    <input type="hidden" name="correct" value="no">
                    <button>No</button>
                </form>
            </div>
        </div>
    </body>
<html>