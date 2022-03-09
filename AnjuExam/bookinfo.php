<html>
    <head>
        <title>bookinfo</title>
</head>
<style>


    </style>
<body>
    <center>
        <form name="POST"action=""name="form">
            <table align="center"padding="20px" bgcolor="beige">
                <tr><td><b>Accession Number</b></td>
                  <td><input type="text"name="acessno"></td></tr>
                <tr><td><b>Title</b></td>
                <td><input type="text"name="title"></td></tr>
                <tr><td><b>author</b></td>
                <td><input type="text"name="author"></td></tr>
                <tr><td><b>Publisher</b></td>
                <td><input type="text"name="publisher"></td>
             </tr>
             <tr><td><input type="submit"name="submit" value="submit"></tr></td>
             <tr><td><input type="text"name="search"></td><td><input type="button"value="Search"></td>

</table>
</form>
</center>
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
    $accessno==$_POST['accessno'];
    $title==$_POST['title'];
    $author==$_POST['author'];
    $publisher==$_POST['publisher'];
   $conn=mysqli_connect("localhost","root","","bookbank");
   if($conn)
   {
       echo("connected successfull");
       echo"<br>";
   }
   else{
       echo("error");
       echo"<br>";
   }
    $query="INSERT INTO bookinfo(accessno,title,author,publisher)VALUES('{accessno}','{title}','{author}','{publisher}')";
    if(mysqli_query($conn,$query))
{
    echo("insertion completed");
    echo'<br>';
}
else{
    echo("error");
    echo'<br>';
}
$search="SELECT * FROM bookinfo";
$data=mysqli_query($conn,$search);
echo '<table border="1"><tr><th>$accessno</th><th>$title</th><th>$author</th><th>$publisher</th></tr>';
while($res=mysqli_fetch_access($data))
{
echo'<table>';
 echo'<tr>';
 echo'<td>';
echo $res['$accessno'];
echo'</td>';
echo'<td>';
echo $res['$title'];
echo'</td>';
echo'<td>';
echo $res['$author'];
echo'</td>';
echo'<td>';
echo $res['$publication'];
echo'</td>';
echo'<tr>';
}
}
?>

