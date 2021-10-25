<?php include 'readData.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<div class="box">
			<h4 class="display-4 text-center">Read</h4><br>
			<table class="table table-striped">

			  <thead>
			    <tr>
                  <th scope="col">#</th>
			      <th scope="col">Name</th>
			      <th scope="col">NIS</th>
			      <th scope="col">Student ID</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Address</th>
                  <th scope="col">Major ID</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>

			  <tbody>

			  	<?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
			  	 ?>

			    <tr>
			      <th scope="row"><?=$i?></th>
			      <td><?=$rows['name_student']?></td>
			      <td><?php echo $rows['nis']; ?></td>
                  <td><?php echo $rows['id_student']; ?></td>
                  <td><?php echo $rows['gender']; ?></td>
                  <td><?php echo $rows['address']; ?></td>
                  <td><?php echo $rows['id_major']; ?></td>

			      <td><a href="update.php" class="btn btn-success">Update</a>
                      <a href="deleteData.php" class="btn btn-danger">Delete</a>
			      </td>
			    </tr>

			    <?php } ?>
			  </tbody>

			</table>

			<?php ?>
			<div class="link-right">
				<a href="index.php" class="link-primary">Create</a>
			</div>

		</div>
	</div>
</body>
</html>