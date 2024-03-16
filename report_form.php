<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Report Crime</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="report_form.css"> <!-- Assuming this is your dashboard CSS file -->
</head>
<body>

<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Crime Reporting System (CRS)</h3>
        </div>

        <ul class="list-unstyled components">
            <li>
                <a href="dashboard.php">Dashboard</a>
            </li>
            <li class="active">
                <a href="report_form.php">Report Crime</a>
            </li>
            <li>
                <a href="view_status.php">View Status</a>
            </li>
            <li>
                <a href="#">Anonymous Report</a>
            </li>
            <li>
                <a href="#">Communication Platform</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
            <li>
            <a href="home.html">Logout</a>
        </li>
        </ul>

        <footer>
            <p> Copyright © Crime Reporting System (CRS) 2024</p>
        </footer>
    </nav>

    <!-- Page Content -->
    <div id="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h2 class="mt-5">Report Crime</h2>
                    <form action="process_report.php" method="POST">
                        <div class="form-group">
                            <label for="reportType">Report Type:</label>
                            <select class="form-control" id="reportType" name="reportType">
                                <option value="Theft">Theft</option>
                                <option value="Assault">Assault</option>
                                <option value="Vandalism">Vandalism</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number:</label>
                            <input type="text" class="form-control" id="phone" name="phone" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="./dashboard.js"></script>
<script>
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>

</body>
</html>
