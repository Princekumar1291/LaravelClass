<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>    
  <?php
    foreach($students as $student){
      echo "<li>$student</li>";
    }
    if($name && in_array($name,$students)){
      echo "$name is present in the list";
    }
    else if($name){
      echo "$name is not in the list";
    }
  ?>
</body>
</html>