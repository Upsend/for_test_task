<?php require 'mechanism.php'; ?>
<?php $data = mysqli_query($db, "SELECT * FROM users") ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">

</head>
<body>
	
	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Email</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
<?php 	while($row = mysqli_fetch_assoc($data)){ ?>
    <tr>
      <th scope="row"><?php echo $row['user_id']; ?></th>
      <td><?php echo $row['first_name']; ?></td>
      <td><?php echo $row['last_name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><button type="button" id="del" class=" del btn btn-danger">X</button></td>
    </tr>
<?php } ?>
  </tbody>
</table>

<div class="form-view">
	<form method="POST">
	  <div class="form-group">
	    <label for="fname">First name</label>
	    <input type="text" class="form-control" name="fname" id="fname" aria-describedby="fnameHelp" value="">
	  </div>
	 <div class="form-group">
	    <label for="lname">Last name</label>
	    <input type="text" class="form-control" name="lname" id="lname" aria-describedby="lnameHelp">
	  </div>
	 <div class="form-group">
	    <label for="InputEmail">Email</label>
	    <input type="email" class="form-control" name="InputEmail" id="InputEmail" aria-describedby="emailHelp" >
	  </div>
	  <button type="submit" name="add_post" class="btn btn-primary">Add</button>
	  <button type="submit" name="remove_post" class="btn btn-danger">Remove</button>
	</form>
</div>






	
</body>
	<script src="js.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>