<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimentional array</title>
</head>
<body>
    <center>
<?php
$student =[
    ["Anand",20,"BCA"],
    ["Abhay",19,"BCA"],
    ["Sandeep",20,"BCA"],
];
// echo $student[0][0]."<br>";
// echo $student[0][1]."<br>";
// echo $student[0][2]."<br>";

    //=====OR====
    foreach($student as $key){
        echo "Name:$key[0] <br>Age:$key[1] <br>Course:$key[2]<br>";
    }
    $c=count($student);
    echo "<h2>number of student Data</h2>"."<h2>=> $c</h2>";
    
?>
</center>
</body>
</html>
