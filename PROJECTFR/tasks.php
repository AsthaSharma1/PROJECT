 <?php
require 'db.php'; 
$fname = $_GET['fname'];
$lname = $_GET['lname'];
echo "Welcome ".$fname. " ". $lname;
?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>What To Do?</title> 

  
  
      <link rel="stylesheet" href="sign.css">
    
</head>

	<body>
	<div id="boxForm">
      <h2 id="title" style="font-size: 50px"> To Do List: </h2> 
      <div class="container">
      <form class="form-signin" method="POST" action="task.php">
        <br>
        <input class="text" type="text" class="form-control" placeholder="Task:" name="task" required />
        <br>
		      <input class="date" type="date" class="form-control" placeholder="Due Date:" name="date" required />
          <br>
		      <input class="time" type="time" class="form-control" placeholder="Time Due:" name="time" required />
          <br>
		      <input class="checkbox" class="form-control" placeholder="Done?:" name="comp" required>
          <br>
      
         <input class='button' type='submit' value='Sign Up'>
      </form>

    </div> 

  </body>
</html>