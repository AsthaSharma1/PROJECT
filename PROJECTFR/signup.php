<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Signup Page</title>
    
    <link href="sign.css" rel="stylesheet">

  </head>

  <body>
  <div id="boxForm"> 

    <div class="container">
      <form class="form-signin" method="POST" action="index.php">
        <h2 id="title">Enter Information:</h2>
        <br>
        <input class="text" type="text" class="form-control" placeholder="Email:" name="email" required />
        <br>
		      <input class="text" type="text" class="form-control" placeholder="First Name:" name="fname" required />
          <br>
		      <input class="text" type="text" class="form-control" placeholder="Last Name:" name="lname" required />
          <br>
		      <input class="text" type="number" class="form-control" placeholder="Phone Number:" name="phone" required>
          <br>
          <input class="text" type="text" class="form-control" placeholder="Gender:" name="gender" required>
          <div>
          <h2 id="title" style="font-size:13px"> Must be 13 years or older to join:</h2> 
		      <input type="date" class="form-control" style="font-size:20px" placeholder="Enter Birthday:" name="birthday" max="2004-12-31" required />
          <p> 




          </p> 
          </div>
          <div>
          <input type="password" class="form-control" placeholder="Enter Password" name="password" style="font-size:15px"  required />
          <input type="hidden" class="form-control" name="action" value="register">
		      </div>
         <input class='button' type='submit' value='Sign Up'>
      </form>

    </div> 

  </body>
</html>