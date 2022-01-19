<html>
    <head>
        <title>Cricket</title>
</head>
<body>
    <?php
    $a=array("Sachin Tendulkar","Virat Kohli","MS Dhoni","Rohit Sharma","Suresh Raina");
    echo "<table border='1'cellpadding ='20' bgcolor='green'><tr><th></th><th>Indian Cricket Players</th></tr>";
    foreach($a as $s=>$v)
    {
        echo "<tr><td>$s</td><td>$v</td></tr>";
    }
    echo "</table>";    
    ?>
</body>
</html>