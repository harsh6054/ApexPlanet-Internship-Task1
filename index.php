<?php
$name = "Harshvardhan Patil";
$role = "Web Development Intern";
$date = "10-1-2026";
?>

<html>
<head>
    <title>Index Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            text-align: center;
            padding-top: 80px;
        }
        .card {
            background: #ffffff;
            width: 400px;
            margin: auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
        }
        p {
            font-size: 16px;
            color: #555;
        }
    </style>
</head>
<body>

<div class="card">
    <h1>Internship Task</h1>
    <p><strong>Name:</strong> <?php echo $name; ?></p>
    <p><strong>Role:</strong> <?php echo $role; ?></p>
    <p><strong>Joining Date:</strong> <?php echo $date; ?></p>
    <p>This is a simple PHP index file created for internship task submission.</p>
</div>

</body>
</html>
