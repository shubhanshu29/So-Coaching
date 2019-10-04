<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="styleIndex.css">


    <!-- Title -->
    <title>So Coaching</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">


</head>

<body> 
        
        <div class="loginbox">
            <img src="img/bg-img/user.png" class="user">
            <h1 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Student Login portal</h1>
            <form onsubmit="return checkform(this);" class="formmargin">             
                <p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Enrollment No.</p>
                <input type="text" name="" placeholder="Enter Enrollment No.">
                <p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Password/Pin</p>
                <input type="Password" name="" placeholder="Enter password/pin">
                <!-- START CAPTCHA -->
<br>
<div class="capbox">

<div id="CaptchaDiv"></div>

<div class="capbox-inner">
Type the above number:<br>

<input type="hidden" id="txtCaptcha">
<input type="text" name="CaptchaInput" id="CaptchaInput" size="15"><br>

</div>
</div>
<br><br>
<!-- END CAPTCHA -->

                <input type="submit" name="" value="Login"><h1><br>OR<br></h1>
                <center><a href="parentLogin.php"><button type="button" style="background-color : #f44336; font-size: 30px; border-radius: 12px">Login as parent</button></a>
                <br><br><a href="teacherLogin.php"><button type="button" style="background-color : #f44336; font-size: 30px; border-radius: 12px">Login as teacher</button></a>
                </center> 
        </form>
<script type="text/javascript">

// Captcha Script

    function checkform(theform){
    var why = "";

    if(theform.CaptchaInput.value == ""){
    why += "- Please Enter CAPTCHA Code.\n";
    }
    if(theform.CaptchaInput.value != ""){
        if(ValidCaptcha(theform.CaptchaInput.value) == false){
                why += "- The CAPTCHA Code Does Not Match.\n";
    }   
    }
    if(why != ""){
        alert(why);
        return false;
        }
    }

    var a = Math.ceil(Math.random() * 9)+ '';
    var b = Math.ceil(Math.random() * 9)+ '';
    var c = Math.ceil(Math.random() * 9)+ '';
    var d = Math.ceil(Math.random() * 9)+ '';
    var e = Math.ceil(Math.random() * 9)+ '';

    var code = a + b + c + d + e;
    document.getElementById("txtCaptcha").value = code;
    document.getElementById("CaptchaDiv").innerHTML = code;

// Validate input against the generated number
    function ValidCaptcha(){
    var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
    var str2 = removeSpaces(document.getElementById('CaptchaInput').value);
    if (str1 == str2){
    return true;
    }
    else{
    return false;
    }
    }

// Remove the spaces from the entered and generated code
    function removeSpaces(string){
    return string.split(' ').join('');
}
</script>
            
        
        </div>
        

    </body>
</html>