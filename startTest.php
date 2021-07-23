<?php 
  //INCLUDE HEADER AND DB CONNECT
  include 'assets/header.php';
  include 'assets/dbConnect.php';
  //GetNames
	$name = $_POST['name'];
	$surname = $_POST['surname'];
  //SELECT ALL questions FROM DB AND DISPLAY THEM WITH UNIQ "SELECT" ID
  $sql = "SELECT   *  FROM questions ";
  $result = $conn->query($sql);
  if($result !== false && $result->num_rows > 0) {
    ?> 
    <div class='wrapper'>
      <form action="result.php" method="POST">
        <!-- names to display for users -->
        <div class="participantName"> <?php echo  $name . " " . $surname ?> </div>
         <!--hidden names for future use in result page  -->
        <input type="hidden" name="name" value="<?php echo $name ?>">
        <input type="hidden" name="surname" value="<?php echo $surname ?>">
        <?php
        $i = 0;
        //count  how many rows in table
        $count = mysqli_num_rows($result);
        while($row = $result->fetch_assoc()){
          $i++; 
          ?>
          <div class="qestionClass">
            <h1> Question No <?php  echo $i ?> / <?php echo $count ?></h1>
            <p> <?php echo $row['Question'] ?> </p>
            <div class="answerOptions">
              <!-- UNIQ "SELECT" ID -->
              <select name="<?php echo 'selectNo'. $i ?>">>
                <option> <?php echo $row['CorrectAnswer'] ?> </option>
                <option> <?php echo $row['WrongAnswer'] ?> </option>
              </select>
              <?php 
              //  DISPLAY BTN DEPENDING ON HOW MANY question LEFT- how many rows in table
              //  (if less then table rows - prevents form from default use and use JS)
              if($i < $count) {
                //BTN FOR NEXT question
                echo ' <input class="submitBtn btn btn-info" type="submit" value="Next qestion" onclick="nextQestion(event,' . $i .')">';
              } else {
                //BTN FOR LAST question
                echo ' <input class="submitBtn btn btn-success" type="submit" value="Finish Test">';
              }
              ?>
            </div>
          </div>
        <?php
        }
        ?>
      </form>
    </div>
    <?php
  } else {
      echo "0 result";
  }
//Close connection
mysqli_close($conn);
?>
</body>
</html>