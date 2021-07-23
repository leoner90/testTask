<?php
// GET DB CONNECT
include 'assets/dbConnect.php';
//GETTING ALL RESULTS FROM SELECT AND ASSIGN EACH RESULT TO ARRAY CELL
for($i= 1; $i <= 15; $i++){
  $selectOption[$i] = $_POST['selectNo'.$i];
}
//GET NAME AND SURNAME FROM HIDDEN INPUT
  $name = $_POST['name'];
  $surname = $_POST['surname'];

//GET CORRECT ANSWERS FROM DB AND COMPARE WITH USER ANSWER , SCORE USER FOR CORRECT ANSWERS
$sql = "SELECT q.CorrectAnswer FROM questions q ";
  $result = $conn->query($sql);
  $i = 1;
  $score = 0;
  if($result !== false && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
       if ($row['CorrectAnswer'] === $selectOption[$i]){
         $score = $score +  10 / 15 ;
       }
       $i++;
    }
  }
//SAVE RESULTS TO DB AND REDIRECT BACK TO MAIN PAGE ,AND PROVIDE RESULT BY MESSAGE(GET)
$sql = "INSERT INTO results VALUES (DEFAULT,'$name' , '$surname' , round($score))";
if($conn->query($sql) === TRUE) {
     echo "Your Score is " .round($score);
     header("Location: http://localhost/JS2021/task/?message=".round($score));
} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
}