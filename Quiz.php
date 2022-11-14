<?php 
//access the global array called $_POST to get the values from the text fields 
 
$ans1 = $_POST["ans1"];
$ans2 = $_POST["ans2"]; 
$ans3 = $_POST["ans3"]; 
$ans4 = $_POST["ans4"]; 
$ans5 = $_POST["ans5"];

$quizScore = 0;  


 
echo "Question1: What's 9+10?"."<br>";
echo "You answered:". $ans1 . "<br>";
echo "Correct answer: 19"."<br>"."<br>";
if ($ans1 == "19" && $ans1 != "")
{
    $quizScore++;
}

echo "Question2: What's the capital of Thailand?"."<br>";
echo "You answered:". $ans2 . "<br>";
echo "Correct answer: Bangkok"."<br>"."<br>";

if ($ans2 == "Bangkok" && $ans2 != "")
{
    $quizScore++;
}

echo "Question3: What's my favorite color?"."<br>";
echo "You answered:". $ans3 . "<br>";
echo "Correct answer: Black"."<br>"."<br>";

if ($ans3 == "Black" && $ans3 != "")
{
    $quizScore++;
}

echo "Question4: What's the GDP of the United States of America?"."<br>";
echo "You answered:". $ans4 . "<br>";
echo "Correct answer: $23 trillion"."<br>"."<br>";

if ($ans4 == "$23 trillion" && $ans4 != "")
{
    $quizScore++;
}

echo "Question5: What's in my pocket?"."<br>";
echo "You answered:". $ans5 . "<br>";
echo "Correct answer: My precious"."<br>"."<br>";

if ($ans5 == "My precious" && $ans5 != "")
{
    $quizScore++;
}

echo "Your score for this Quiz is: " . ($quizScore/5)*100 . "%"."<br>";


 
?>