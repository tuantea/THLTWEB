<html>
<body>
<?php
// define variables and set to empty values
$name =$gender= $class = $school= $hobby = "";  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $class = test_input($_POST["class"]);
  $school = test_input($_POST["school"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
Hello, 
<?php echo $name; ?>
<?php echo "<br>"; ?>
Sex: 
<?php echo $gender; ?>
<?php echo "<br>"; ?>
You are studying at
<?php echo $class; ?>, 
<?php echo $school; ?>
<?php echo "<br>"; ?>
Your hobby is
<?php echo "<br>"; ?>
<?php
$k = 1;
for ($x = 1; $x <= 4; $x++) {
    
    if($x==1) 
    {
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $hobby = test_input($_POST["hobby1"]);
        }
        if(!empty($hobby))
        {
            echo "$k." ; 
            echo $hobby;
            $k = $k+1;
            echo "<br>";
           
        }
    }
    if($x==2) 
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $hobby = test_input($_POST["hobby2"]);
        }
        if(!empty($hobby))
        {
            echo "$k." ; 
            echo $hobby;
            echo "<br>";
            $k++;
        }
    }
    if($x==3) 
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $hobby = test_input($_POST["hobby3"]);
        }
        if(!empty($hobby))
        {
            echo "$k." ; 
            echo $hobby;
            echo "<br>";
            $k++;
        }
    }
    if($x==4) 
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $hobby = test_input($_POST["hobby4"]);
        }
        if(!empty($hobby))
        {
            echo "$k." ; 
            echo $hobby;
            echo "<br>";
            $k++;
        }
    }
  }
?>
<?php echo "<br>"; ?>
</body>
</html>