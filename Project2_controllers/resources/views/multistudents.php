<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
   foreach($students2 as $student){
    echo "<div>";
      echo "<li> $student[name] $student[cgpa] $student[address]";
    echo "</div>";
   }
  ?>
</body>
</html>