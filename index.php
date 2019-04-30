<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="script.js"></script>

    <title>Employees Ajax</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>
                    <a href="index.php">Employees</a>
                </h1>
                <!-- FORM -->
                <form action="" method="post" class="testForm">
                    <div class="return"></div>
                   
                    <label for="id">ID:
                        <input type="text" placeholder=" id" class="id" value=<?php echo isset($_POST[ 'id']) ? $_POST[ 'id'] : "";?>>
                    </label>

                    <label for="name">Name:
                        <input type="text" placeholder=" Name" class="name" value=<?php echo isset($_POST[ 'name']) ? $_POST[ 'name'] : "";?>>
                    </label>
                    <p>


                        <button type="submit" value="get-employee">Get Employee</button>
                        <button type="submit" value="add-new">Add New</button>
                        <button type="submit" value="update-employee">Update Employee</button>
                        <button type="submit" value="delete-employee">Delete Employee</button>
                        <button type="submit" value="get-all-employees">Get All Employees</button>
                    </p>
                </form>
                <!-- END OF FORM -->
                <hr>
            </div> <!--END OF COL -->
        </div> <!--END OF ROW -->

        <div class="row">
        <div class="col-md-12  display">


        some text here
        </div>
        </div>
     </div> <!--END OF CONTAINER -->









</body>

</html>