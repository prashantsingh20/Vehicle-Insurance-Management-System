
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="mystyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Vehicle Insurance Management System</title>
    </head>

    <body>
            <div class="header">
                    <div class="inner-head">
                        <div class="logo">
                            <a href="index.html">Vehicle Insurance Management System</a>
                        </div>
                         <div class="header-link">
                            <a href="#">Buy Insurance</a>
                        </div>
                         <div class="header-link">
                            <a href="login.html">Login</a>
                        </div>
                    </div>
    </div> 
    <br><br><br><br>
    <div class="outer">
        <div class="inner">
            <form action="dr.php" method="POST">

                    First Name <br><br>
                    <input name="fname" type="text" style="width:30%" required />
                       <br><br><br>

                    Middle Name <br><br>
                    <input name="mname" type="text" style="width:30%"  />
                    <br><br><br>   


                    Last Name <br><br>
                    <input name="lname" type="text" style="width:30%" required />
                       <br><br><br>
                    
                    Date of Birth<br><br>
                    <input name="dob" type="date" style="width:35%" required/>
                    <br><br><br>

                    Email <br><br>
                    <input name="email" type="email" style="width:35%" required/>
                    <br><br><br>

                    Mobile Number<br><br>
                    <input name="mob" type="tel" style="width:35%" required/>
                    <br><br><br>

                    Gender<br><br>
            <select name="gender" style="width:30%">
            <option value="M">Male</option>
            <option value="F">Female</option>
            </select>


                    Lincense Issue Date<br><br>
                    <input name="lidate" type="date" style="width:35%" required/>
                    <br><br><br>
                    
                    
                    Lincense Issue State<br><br>
                    <input name="lstate" type="text" style="width:35%" required/>
                    <br><br><br>

                    Lincense Number<br><br>
                    <input name="lnum" type="text" style="width:35%" required/>
                    <br><br><br>

                    House Number<br><br>
                    <input name="hnum" type="text" style="width:35%" required/>
                    <br><br><br>

                    Street Number<br><br>
                    <input name="snum" type="text" style="width:35%" required/>
                    <br><br><br>

                    City<br><br>
                    <input name="city" type="text" style="width:35%" required/>
                    <br><br><br>

                    State<br><br>
                    <input name="state" type="text" style="width:35%" required/>
                    <br><br><br>

                    Pincode<br><br>
                    <input name="pin" type="text" style="width:35%" required/>
                    <br><br><br>





                     <input type="submit" name="submit">
       
       <input type="reset">

                





            </form>

        </div>
    </div>

    
<br><b><br><hr>
   



    </body>
</html>