<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students Marks</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <script src="../bootstrap/js/jquery-3.4.0.js"></script>
    <script src="../bootstrap/js/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="../bootstrap/css/styles.css">
    <script type="text/javascript" src="../bootstrap/js/custom.js"></script>
</head>
<body onload=display_ct(); class="vMarksBody">
<div class="navigation">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="../classteacher.php">Home</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="viewStuentsMarks.php">View Student Marks</a>
                </li>

                <li class="nav-item">
                    <a  class="nav-link" href="../logout.php">Logout</a>
                </li>
                <!--Clock-->
                <li class="nav-item">
                    <a id="ct" class="nav-link"></a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div class="row tchattl">
    <h3 class="title">Students Marks</h3>
</div>

    <table class="table table-hover table-dark">
        <tr>
            <th class="th">First Name</th>
            <th class="th">Second Name</th>
            <th class="th">Last Name</th>
            <th class="th">Admission Number</th>
            <th class="th">Mathematics</th>
            <th class="th">English</th>
            <th class="th">Kiswahili</th>
            <th class="th">Social Studies</th>
            <th class="th">C.R.E</th>
            <th class="th">Science</th>
            <th class="th">Total Marks</th>
            <th class="th">Mean Marks</th>
            <th class="th">Grade</th>
            <th class="th">Delete</th>
            <th class="th">Update</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost","root","","userregistration");
        if (!$conn){
            echo "Connection failed";
        }else{
            $selectQuery = "SELECT * FROM student_marks";
            $selecting = mysqli_query($conn,$selectQuery);
            while ($row = mysqli_fetch_assoc($selecting)){
                extract($row);
                echo "
                    <tr>
                        <td>$fname</td>
                        <td>$sname</td>
                        <td>$lname</td>
                        <td>$adm_number</td>
                        <td>$maths</td>
                        <td>$english</td>
                        <td>$kiswahili</td>
                        <td>$sst</td>
                        <td>$cre</td>
                        <td>$science</td>
                        <td>$totota_marks</td>
                        <td>$mean_marks</td>
                        <td>$grade</td>
                        <td><a href='#' class='btn btn-danger'>Remove</a></td>
                        <td><a href='#' class='btn btn-primary'>Update</a></td>            
                    </tr>";
            }
        }

        ?>
    </table>



</body>
</html>