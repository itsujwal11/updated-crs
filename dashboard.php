<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRS Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="dashboard.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome for icons -->
    
    <style>
        /* Custom styles for dashboard */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .wrapper {
            display: flex;
            width: 100%;
            align-items: stretch;
        }
        #sidebar {
            min-width: 250px;
            max-width: 250px;
            background: #343a40;
            color: #fff;
            transition: all 0.3s;
        }
        #sidebar.active {
            margin-left: -250px;
        }
        #content {
            width: 100%;
            padding: 20px;
        }
        .sidebar-header {
            padding: 20px;
            background: #212529;
        }
        .sidebar-header h3 {
            color: #fff;
            margin-top: 0;
        }
        .list-unstyled li a {
            padding: 10px;
            font-size: 1.1em;
            color: #fff;
            display: block;
            text-decoration: none;
        }
        .list-unstyled li a:hover {
            background: #454d55;
        }
        #sidebarCollapse {
            background-color: #343a40;
            border: none;
            color: #fff;
            cursor: pointer;
        }
        #sidebarCollapse:hover {
            background-color: #212529;
        }
        .dashboard-overview {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .dashboard-overview h2 {
            margin-top: 0;
            margin-bottom: 20px;
        }
        .quick-actions {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .quick-actions h2 {
            margin-top: 0;
            margin-bottom: 20px;
        }
        .quick-actions button {
            margin-right: 10px;
        }
        .case-management {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .case-management h2 {
            margin-top: 0;
            margin-bottom: 20px;
        }
        .case-management .case-list,
        .case-management .case-actions {
            margin-bottom: 20px;
        }
        .case-management .case-list h3 {
            margin-top: 0;
            margin-bottom: 10px;
        }
        .case-management .case-actions h3 {
            margin-top: 0;
            margin-bottom: 10px;
        }
        .case-management button {
            margin-right: 10px;
        }
        .communication-platform {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .communication-platform h2 {
            margin-top: 0;
            margin-bottom: 20px;
        }
        .feedback {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .feedback h2 {
            margin-top: 0;
            margin-bottom: 20px;
        }
        .feedback form {
            margin-bottom: 20px;
        }
        .feedback form input[type="text"],
        .feedback form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: none;
        }
        .feedback form input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .feedback form input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>

<script>
    // Initialize user and admin objects
    let currentUser = null;
    let isAdmin = false;

    // Function to toggle the user and admin panels
    function togglePanels() {
        const userPanel = document.getElementById("user-panel");
        const adminPanel = document.getElementById("admin-panel");
        if (isAdmin) {
            userPanel.style.display = "none";
            adminPanel.style.display = "block";
        } else {
            userPanel.style.display = "block";
            adminPanel.style.display = "none";
        }
    }

    // Function to set the current user and toggle the panels
    function setUser(user) {
        currentUser = user;
        isAdmin = user && user.role === "admin";
        togglePanels();
    }

    // Example user object
    const user = {
        name: "John Doe",
        address: "123 Main St",
        phoneNumber: "555-555-5555",
        role: "user"
    };

    // Example admin object
    const admin = {
        name: "Jane Doe",
        address: "456 Elm St",
        phoneNumber: "555-555-5556",
        role: "admin"
    };

    // Set the initial user
    setUser(user);
</script>
</head>
<body>

<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Crime Reporting System (CRS)</h3>
        </div>
        <ul class="list-unstyled components">
            <li class="active">
                <a href="report_form.php">Report Crime</a>
            </li>
            <li>
                <a href="view_status.php">View Status</a>
            </li>
            <li>
                <a href="anon.html">Anonymous Report</a>
            </li>
            <li>
                <a href="">Communication Platform</a>
            </li>
            <li>
                <a href="contact.php">Contact</a>
            </li>
            <li>
                <a href="home.html">Logout</a>
            </li>
        </ul>
        
    </nav>
    

    <div id="content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span>Toggle </span>
                </button>
            </div>
        </nav>

        <!-- Dashboard Overview -->
        <div class="dashboard-overview">
            <h2>Dashboard Overview</h2>
            <p>Total Cases Reported: <span>100</span></p>
            <p>Cases Resolved: <span>80</span></p>
            <p>Pending Cases: <span>20</span></p>
        </div>

        <!-- Quick Actions -->
        <div class="quick-actions">
            <h2>Quick Actions</h2>
            <button class="btn btn-primary">Report New Crime</button>
            <button class="btn btn-secondary">View Recent Updates</button>
        </div>

        <!-- Case Management -->
     <!-- Case Management -->

     
<div class="case-management">
    <h2>Case Management</h2>
    <div class="case-list">
        <!-- Display a list of pending and solved cases -->
        <h3>Pending Cases</h3>
        <ul id="pending-cases">
            <!-- Dynamically populate this list with pending cases -->
            <li>Case #001 - Robbery reported on 2024-01-01</li>
            <li>Case #002 - Assault reported on 2024-01-02</li>
            <!-- Add more pending cases as needed -->
        </ul>
        <h3>Solved Cases</h3>
        <ul id="solved-cases">
            <!-- Dynamically populate this list with solved cases -->
            <li>Case #003 - Theft reported on 2024-01-03</li>
            <li>Case #004 - Vandalism reported on 2024-01-04</li>
            <!-- Add more solved cases as needed -->
        </ul>
    </div>
    <div class="case-actions">
        <!-- Actions for managing cases -->
        <h3>Case Actions</h3>
        <button class="btn btn-primary" onclick="reportCase()">Report New Case</button>
        <button class="btn btn-success" onclick="markAsSolved()">Mark as Solved</button>
        <!-- Add more case management actions as needed -->
    </div>
</div>

<script>
    // Dummy data representing pending and solved cases
    const pendingCases = [
        "Case #001 - Robbery reported on 2024-01-01",
        "Case #002 - Assault reported on 2024-01-02"
        // Add more pending cases as needed
    ];

    const solvedCases = [
        "Case #003 - Theft reported on 2024-01-03",
        "Case #004 - Vandalism reported on 2024-01-04"
        // Add more solved cases as needed
    ];

    // Function to display pending and solved cases
    function displayCases() {
        const pendingList = document.getElementById("pending-cases");
        const solvedList = document.getElementById("solved-cases");
        pendingList.innerHTML = "";
        solvedList.innerHTML = "";
        pendingCases.forEach(caseItem => {
            const listItem = document.createElement("li");
            listItem.textContent = caseItem;
            pendingList.appendChild(listItem);
        });
        solvedCases.forEach(caseItem => {
            const listItem = document.createElement("li");
            listItem.textContent = caseItem;
            solvedList.appendChild(listItem);
        });
    }

    // Function to report a new case
    function reportCase() {
        const newCase = prompt("Enter details of the new case:");
        if (newCase) {
            pendingCases.push(newCase);
            displayCases();
            alert("Case reported successfully!");
        }
    }

    // Function to mark a case as solved
    function markAsSolved() {
        const index = prompt("Enter the index of the case to mark as solved:");
        if (index && !isNaN(index) && index >= 0 && index < pendingCases.length) {
            const solvedCase = pendingCases.splice(index, 1)[0];
            solvedCases.push(solvedCase);
            displayCases();
            alert(`Case "${solvedCase}" marked as solved!`);
        } else {
            alert("Invalid index! Please enter a valid index.");
        }
    }

    window.addEventListener("DOMContentLoaded", displayCases);
</script>

        <!-- Communication Platform Integration -->
        <div class="communication-platform">
            <h2>Communication Platform</h2>
            <p>Integrate communication platform features here.</p>
            <p>Display messages, notifications, or chat functionality.</p>
        </div>

        <!-- Feedback Mechanism -->
        <div class="feedback">
            <h2>Feedback</h2>
            <form>
                <input type="text" placeholder="Name">
                <input type="text" placeholder="Email">
                <textarea placeholder="Message"></textarea>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>

</body>
</html>
