 <?php
require 'db.php';
$fname = $_GET['fname'];
$lname = $_GET['lname'];
echo "Welcome ".$fname. " ". $lname;
$errors = ""; 
/* Add a task */ 
if (isset($_POST['submit'])) {
	$task = $_POST['task'];
	if (empty($task)) {
		$errors = "Fill in task";
	}else{
		$sql = "insert into todos (message) Values ('$task')";
		$results = runQuery($sql);
		header('Location: task.php');
	}	
}
if (isset($_POST['submit'])) {
	$date = $_POST['date'];
	if (empty($date)) {
		$errors = "Fill in date";
	}else{
		$sqlllll = "insert into todos (message) Values ('$date')";
		$results = runQuery($sqlllll);
		header('Location: task.php');
	}	
}

if (isset($_POST['submit'])) {
	$time = $_POST['time'];
	if (empty($time)) {
		$errors = "Fill in time";
	}else{
		$sqllllll = "insert into todos (message) Values ('$time')";
		$results = runQuery($sqllllll);
		header('Location: task.php');
	}	
}
/* Delete a task */ 
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	$sqlll = "delete from todos where id='$id'";
	$result = runQuery($sqlll);
	header('Location: task.php');
}

if (isset($_GET['comp'])) {
	$id = $_GET['comp'];
	$s = "update from todos where id='$comp'";
	$result = runQuery($s);
	header('Location: task.php');
}
/* Edit a task */ 
if (isset($_POST['update'])) {
	$edit = $_POST['edit'];
	$sq = "update todos set message = '$edit' where id='$id'";
	$result = runQuery($sq);
	header('Location: task.php');
} 
$sqll = "select id, message, isdone from todos"; 
$tasks = runQuery($sqll);

?> 


<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>What To Do?</title> 

  
  
      <link rel="stylesheet" href="todo.css">
    
</head>

	<body>
	<div id="boxForm">
      <h2 id="title" style="font-size: 50px"> To Do List: </h2>
     <form method="POST" action="task.php">
	<?php if (isset($errors)) { ?>
		<p><?php echo $errors; ?></p>
	<?php } ?>	
		<input type="text" name="task" class="task_input"> 
		<input type="date" name="date" class="date_input"> 
		<input type="time" name="time" class="time_input"> 
		<center> <input class='button' type='submit' value='Submit'></a></center>
	</form>	


<style>
table {
    font-family: "Indie Flower", cursive;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 3px solid black;
    text-align: left;
    padding: 8px;
    font-weight: bold; 
    font-size: 20px; 
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
	<table> 
		<thead>
			<tr>
				<text><th>#</th></text>
				<th> Tasks </th>
				<th> Delete </th> 
				<th> Edit </th>
				<th> Done </th> 
			</tr>
		</thead>

		<tbody>
			<?php $i = 1; foreach($tasks as $thing) { ?> 
				<tr>
					<td><?php echo $i; ?></td>
					<td class="Task"><?php echo $thing['message']; ?><?php echo$date['message']; ?><?php echo $time['message']; ?> </td> 
					<td class="delete">
					<a href="task.php?del=<?php echo $thing['id']; ?>">X</a>
					</td> 
			
					<td class="edit"><?php echo $edit['message']; ?>
						<input type="text" name="edit" class="edit_input">
						<center><input class='button' style="float:bottom"; type='submit' class="edit_btn" name="submit" value='Edit'><center> </td> 

					<td class="comp"><?php echo $comp['comp'];?>
					<input type="checkbox" name="vehicle" value="comp"></td>
  

						
					</td>
				</tr>
			<?php $i++; } ?>

		</tbody>

	<center><a href=login.html> <input class='button' type='submit' value='Log Out'></a></center>
</table> 
</div> 

</body>	
</html>