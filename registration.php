


<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
    

<head>
    <title>Registration Form // Index</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    
</head>
<style>
    .button{
        color:rgba(90,56,45,0.8);
        align-items:centre;
        margin:10px;
        margin-left:38%;
        box-shadow: 1px 2px 3px rgba(0,214, 51,0.5);
        border:none;
    }
    .button:hover{
        transform:scale(0.8);
        color:#c0c0c0;
    }
    .row.col-md-6.col-md-offset-3{
        margin:auto;
        
    }
   
</style>
<body>


    <div class="blockquote text-center">
        <h3>Dayalbagh Educational Institute</h3>
        <h4>(Deemed To Be University)</h4>
        <h4>Dayalbagh, Agra</h4>
        <h5>Assessment Criteria and Methodology Proforma for Promotion under CAS </h5>

    </div>
    <hr style="border-top: 1mm solid black ;">
    <div class="container" style="position:container;">
        <div class="row col-md-6 col-md-offset-3 ">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>Registration Form</h1>
                </div>
                <div class="panel-body">
                   
                    <form action="registeruser.php" class="form-group" method="post">

                        <label for="#"> First Name</label>
                        <input type=" text" class="form-control" name="fname" id="firstname">


                        <label for="#"> Last Name</label>
                        <input type=" text" class="form-control" name="lname" id="laststname">


<!-- 
                        <label for="#"> Gender</label>
                        <label for="male" class="radio-inline"> <input type="radio" name="gender" id="male"> Male
                        </label>
                        <label for="female" class="radio-inline"> <input type="radio" name="gender" id="female"> Female
                        </label>
                        <label for="others" class="radio-inline"> <input type="radio" name="gender" id="others"> Others
                        </label> -->
                           <br>
                        <label for="#">Phone Number</label>
                        <input type="" class="form-control" id="number" name='phone' required placeholder="">


                        <label for="#"> Email</label>
                        <input type="email" class="form-control" id="email" name='email' required placeholder="abc@gamil.com">



                        <label for="#"> Password</label>
                        <input type="password" class="form-control" id="password" name='password' required>


                        <label for="#"> Confirm Password</label>
                        <input type="password" class="form-control" id="cpwd" name='cpwd' required>
                        <div id='invalid'></div>

                        <div class="input_field">
                            <input type="submit" value="Register" name="register" class="button" id="register">
                        </div>




                    </form>
                </div>
                <div class="panel-footer">
                    <small>&copy; The First Registration Form </small>
                </div>
            </div>
        </div>
    </div>
   
<script>

document.querySelector('.input_field').addEventListener('click', (e)=>{
    console.log(pwd.value);
    e.preventDefault();
    if((pwd.value)===(Cpwd.value)){
        e.preventDefault();
        document.querySelector('.alert').style.display ='block';
   
    }
    else
   {  document.querySelector('#invalid').innerHTML+=`<p>Invalid Credentials!</p>`;
     }
     
 });
 document.querySelector('button').addEventListener('click', (e)=>{
    e.preventDefault();
    document.querySelector('.alert').style.display ='none';
 });

</script>

   
   
  
</body>

</html>

