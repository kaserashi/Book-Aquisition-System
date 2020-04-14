 <html>
        <head>
                <title>userlogin</title>
            
                <!--link rel="stylesheet" type="text/css" href="login.css"-->
                <link rel="stylesheet" type="text/css" href="searchpage.css">
              </head>
            <body>
                    
                    </head>
<body>

    <div class="navigation-bar">
  
  
      <div id="navigation-container">
  
        <img src="logobook.jpg.jpeg">
  
        <ul>
          <li><a href="pagewithnav.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="services.html">Services</a></li>
          <li id = "help"><a href="contactus.html">Contact Us</a></li>
          <li><a href = "help.html">Help</a></li>
          <li><a href="userlogin.php">Login</a></li>
          <li><a href="register.html">Signup</a></li>


        </ul>

    </div>
</div>  
                    <div style="border-radius: 5px;display: block;margin-left: auto;margin-top:100px;margin-right: auto;width: 30%;padding: 20px;";align="cenetr">
        <form onsubmit="return validate(this)" method="POST" action="">
                 <input type="text"  name="fname" placeholder="Your first name.."  required>
                 <input type="email"  name="email" placeholder="Your Email.." required>
                 <input type="text"  name="reg"placeholder="Your registration number.." required>
                 <input type="password" name="pwd"  placeholder="Enter password.." >
                 <input type="password" name="repwd"  placeholder="Re-enter password.." >
                 <input type="submit" name="submit">
                 <a style="color:white;" href="userlogin.php"><p>Already a user? Login</p></a>
                </form>
        </div>
        <div class="footer">
    <div class="navigation-bar">
      <div id="navigation-container">
  <ul>
  <li>
  <img src="logobook.jpg.jpeg">
  </li>
  <li>
    Address:
    VIT Vellore,
    Katpadi Road,
    Vellore,
    Tamil Nadu 632014
  </li>
  <li>
    Contact Us:
    Email:vitbarnbooks@gmail.com
    Mobile No: +918178197468
  </li>
  </ul>
    </div>
</div> 
</div>
              <script>
                      function validate(myform)
                      {
                              let flag = false;
                    if(myform.name.value=="")
                              {
                                      alert("Please fill the name");
                                     flag = true;
                                      
                              }
                              var em=  /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                              if(em.test(myform.email.value)==false)
                              {
                                      alert("enter the correct email");
                        
                                      flag = true;
                                      
                              }
                             
                              var re=/^[0-9]{2}[A-Z]{3}[0-9]{4}$/;
                             
                              if(re.test(myform.reg.value)==false)
                              {
                                alert("enter the correct registration number");
                                     flag = true;
                                myform.reg.focus();
                                     
                              }
                              var pass= /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,14}$/;
                              if(pass.test(myform.pwd.value)==false)
                              {
                                      alert("password must contain contain at least one numeric digit, one uppercase and one lowercase letter and length should be between 6 to 14");
                                      myform.pwd.focus();
                                     flag = true;
                                      
                               }
                              var repass= /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,14}$/;
                              
                                        if(myform.pwd.value !=myform.repwd.value)
                                        {
                                         alert("Passwords do not match");
                                        myform.repwd.focus();
                                     flag = true;
                                      
                                }
                                
                        return !flag;
                      }
              
              </script>
              </body>
              </html>

<?php

	$connection = mysqli_connect("localhost", "root", "","iwp"); 
    $name =$_POST['fname'];
    $reg=$_POST['reg'];
    $email =$_POST['email'];
    $pwd=$_POST['pwd'];
    $sq = "INSERT INTO registertable(FNAME,EMAIL,REG_NO,PASS) VALUES('$name','$email','$reg','$pwd')";
    $upd = $connection->query($sq);
    if ($upd){
	echo "<br/><br/><span>Data Inserted successfully...!!</span>";
	header("Location:avl.php");
	}
	else{
    echo"Registration unsucccessfull";
	}
	mysqli_close($connection);
?>
