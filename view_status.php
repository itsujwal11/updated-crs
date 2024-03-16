<?php
 
    function getReportStatuses() {
     
        return array(
            array('complaint_id' => 1, 'status' => 'Received'),
            array('complaint_id' => 2, 'status' => 'In Progress'),
            array('complaint_id' => 3, 'status' => 'Closed'),
        );
    }

 
    $reportStatuses = getReportStatuses();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Status</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="view_status.css">
</head>
<body>

<div class="wrapper">
  
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Crime Reporting System (CRS)</h3>
        </div>

        <ul class="list-unstyled components">
            <li>
                <a href="report_form.php">Report Crime</a>
            </li>
            <li class="active">
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
            <p>Copyright © Crime Reporting System (CRS) 2024</p>
        </footer>
    </nav>


    <div id="content">
        <h2>Report Status</h2>
      
        <div class="container">
            <?php foreach ($reportStatuses as $status): ?>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Complaint ID: <?php echo $status['complaint_id']; ?></h5>
                        <p class="card-text">Status: <?php echo $status['status']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
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
