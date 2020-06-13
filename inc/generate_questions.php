<?php
// Generate random questions
$questions = [];
// Loop for required number of questions
for ($i = 0; $i < 10; $i++){
    $questions[$i] = [];
    $questions[$i]["leftAdder"] = rand(1,99);
    $questions[$i]["rightAdder"] = rand(1,99);
    $questions[$i]["correctAnswer"] = $questions[$i]["leftAdder"] + $questions[$i]["rightAdder"];
    do {
        $questions[$i]["firstIncorrectAnswer"] = rand(($questions[$i]["correctAnswer"] - 10), ($questions[$i]["correctAnswer"] + 10));
    } while ($questions[$i]["firstIncorrectAnswer"] == $questions[$i]["correctAnswer"]);
    do {
        $questions[$i]["secondIncorrectAnswer"] = rand(($questions[$i]["correctAnswer"] - 10), ($questions[$i]["correctAnswer"] + 10));
    } while ($questions[$i]["secondIncorrectAnswer"] == $questions[$i]["correctAnswer"] || $questions[$i]["secondIncorrectAnswer"] == $questions[$i]["firstIncorrectAnswer"]);
}
// Get random numbers to add

// Calculate correct answer

// Get incorrect answers within 10 numbers either way of correct answer
// Make sure it is a unique answer

// Add question and answer to questions array


// [
//     "leftAdder" => 3,
//     "rightAdder" => 4,
//     "correctAnswer" => 7,
//     "firstIncorrectAnswer" => 8,
//     "secondIncorrectAnswer" => 10,
// ];