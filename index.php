<!DOCTYPE html>
<html>
<head>
    <title>Create</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <form action="createData.php" method="post" entype="multipart/formdata">

            <h4 class="display-4 text-center">Add Student Data</h4><hr><br>

            <div class="form-row">

                <div class="form-group col-md-6">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name_student" placeholder="Name">
                </div>

                <div class="form-group col-md-6">
                    <label>NIS</label>
                    <input type="text" class="form-control" name="nis" placeholder="NIS">
                </div>

            </div>

            <div class="form-row">

                <div class="form-group col-md-6">
                    <label>Student ID</label>
                    <input type="text" class="form-control" name="id_student" placeholder="Student ID">
                </div>

                <div class="form-group col-md-6">
                    <label>Gender</label>
                        <select class="form-control" name="gender">
                            <option selected>Choose Gender</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                </div>

            </div>

            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="address" placeholder="Address">
            </div>

            <div class="form-row">

                <div class="form-group col-md-6">
                    <label>Major</label>
                    <input type="text" class="form-control" name="major" placeholder="Major">
                </div>

                <div class="form-group col-md-6">
                    <label>Major ID</label>
                    <input type="text" class="form-control" name="id_major" placeholder="Major ID">
                </div>

            </div>

            <button type="submit" class="btn btn-primary" name="add">Add</button>
            <a href="read.php" class="link-primary">View</a>

        </form>

        <?php
            if(isset($_SESSION["message"])){
                echo $_SESSION["messsage"];
                unset ($_SESSION["message"]);
            }
        ?>

    </div>
</body>
</html>