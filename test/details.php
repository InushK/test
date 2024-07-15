<!DOCTYPE html>
<html>
<head>
    <title>Form Submission Details</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            width: 60%;
            max-width: 800px;
            padding: 20px;
            box-sizing: border-box;
            text-align: center;
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        .details {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            text-align: left;
        }
        .details p {
            margin: 10px 0;
            line-height: 1.6;
        }
        .details span {
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $address = htmlspecialchars($_POST['address']);
        $job = htmlspecialchars($_POST['job']);
        $age = htmlspecialchars($_POST['age']);
        $email = htmlspecialchars($_POST['email']);
        $gender = htmlspecialchars($_POST['gender']);
        $dob = htmlspecialchars($_POST['dob']);

        $file = fopen("submissions.txt", "a") or die("Unable to open file!");
        $data = "Name: $name\nAddress: $address\nJob: $job\nAge: $age\nEmail: $email\nGender: $gender\nDate of Birth: $dob\n\n";
        fwrite($file, $data);
        fclose($file);

        echo "<h2>Form Submission Details</h2>";
        echo "<div class='details'>";
        echo "<p><span>Name:</span> " . $name . "</p>";
        echo "<p><span>Address:</span> " . $address . "</p>";
        echo "<p><span>Job:</span> " . $job . "</p>";
        echo "<p><span>Age:</span> " . $age . "</p>";
        echo "<p><span>Email:</span> " . $email . "</p>";
        echo "<p><span>Gender:</span> " . $gender . "</p>";
        echo "<p><span>Date of Birth:</span> " . $dob . "</p>";
        echo "</div>";
    } else {
        echo "<h2>No form data submitted.</h2>";
    }
    ?>
</div>

</body>
</html>
