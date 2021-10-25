<?php include 'updateData.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<form action="updateData.php" method="post">
            
		   <h4 class="display-4 text-center">Update</h4><hr><br>
		   
		   <div class="form-group">
		     <label">Name</label>
		     <input type="name" class="form-control" name="name_student">
		   </div>

           <div class="form-group">
		     <label>NIS</label>
		     <input type="name" class="form-control" name="nis">
		   </div>

           <div class="form-group">
		     <label>Student ID</label>
		     <input type="name" class="form-control" name="id_student">
		   </div>

           <div class="form-group">
                    <label>Gender</label>
                        <select class="form-control" name="gender">
                            <option selected>Choose Gender</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
            </div>

           <div class="form-group">
		     <label">Address</label>
		     <input type="name" class="form-control" name="address">
		   </div>

           <div class="form-group">
		     <label>Major ID</label>
		     <input type="name" class="form-control" name="id_major">
		   </div>

		   <button type="submit" class="btn btn-primary" name="update">Update</button>
		   <a href="read.php" class="link-primary">View</a>
	    </form>
	</div>
</body>
</html>