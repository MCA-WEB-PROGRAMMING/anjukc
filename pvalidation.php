<html>
<head>
<title>form</title>
<body bgcolor="green">
    <center><br>
    <h1>FORM VALIDATION</h1>
    </center> 
    <form method="POST" action="" name="form">
    
    <table cellspacing="40" align="center" style="background-color:beige;" >
    <tr>
    <td align="left">
    <label>Name:</label>
    </td>
    <td align="left"><input type="text" name="name" size=18 autofocus="required"  placeholder="enter your name "></td>
    <tr>
    <td align="left">
    <label>Age:</label>
    </td>
    <td align="left"><input type="text"  name="age" autofocus="required"  placeholder="enter your age"></td>
    </tr>
    <tr>
    <tr>
        <td align="left" >
        <label >Phone</label></td><br>
        <td>
        <input type="tel" name="phn" placeholder=" 10 digits" autofocus="required" ></td>
    </tr>
    <tr>
    <td align="left">
    <label>Gender:</label>
    </td>
    <td align="left"><input type="radio" name="gender" value="female" checked="true">Female
    <input type="radio" name="gender" value="male" checked="true">Male</td>
    </tr>
    <tr>
    <td align="left">
    <label>Email Id:</label>
    </td>
    <td align="left"><input type="email"  name="email"  placeholder="email"></td>
    </tr>
    
    <tr>
        <td align="left">
        <label>Username:</label>
        </td>
        <td>
            <input type="text" name="user" placeholder="username"  autofocus="required" > 
            </td>
            </tr>
    <tr>
    <td>
    <label>Password:</label>
    </td>
    <td>
    <input type="password" name="password"  autofocus="required" placeholder="password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
    </td>
    </tr>
    <tr>
    <td><input type="reset" name="clear" value="clear"></td>
    <td><input type="submit" name="submit" value="submit"></td>
    </tr>
    </tr>
    </form>
    </body>
    </html>
    <?php
    if(isset($_POST["submit"]))
    {
    $name=$_POST['name'];
    $phn=$_POST['phn'];
    $email=$_POST['email'];
    $user=$_POST['user'];
    $pass=$_POST['password'];
    $upper=preg_match('@[A-Z]@',$pass);
    $lower=preg_match('@[a-z]@',$pass);
    $spcl=preg_match('@[#$%^&*!]@',$pass);
    $dig=preg_match('@[0-9]@',$pass);
        if($name=="")
        {
            echo"enter your name";
        }
        elseif($phn==""||strlen($phn)<10)
        {
            echo" enter phone number";
        }
        elseif($email=="")
        {
            echo"enter your email";
        }
        elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            echo"enter valid email";
        }
        elseif($user=="")
        {
            echo"enter your user name";
        }
        elseif($pass==""||strlen($pass)<8)
        {
            echo"password must have 8 characters";
        }
        elseif(!$upper||!$lower||!$spcl||!$dig)
        {
            echo"password is note strong";
        }
        else{
            echo"WELCOME";
        }

    }
    ?>
