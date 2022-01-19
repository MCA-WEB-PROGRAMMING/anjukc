<html>
    <head>
</head>
<body>
<?php
$s=array("Sreejith","Nandana","Anju","Dwany","Raichel","Ansiya","Nisha");
asort($s);
echo "<b> Array sorted using asort function:<br></b>";
print_r($s);
echo"<br>";
arsort($s);
echo " <b>Array sorted using arsort function:<br></b>";
print_r($s);
?>
</body>
</html>