<!DOCTYPE html>
<html>
<head>
    <title>Advanced Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 50%;
            margin: 0 auto;
        }
        form {
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 10px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"],
        input[type="email"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Advanced Form</h2>
    <form action="details.php" method="post" target="_blank" onsubmit="return validateForm()">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address" required><br><br>
        
        <label for="job">Job:</label><br>
        <input type="text" id="job" name="job" required><br><br>
        
        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="gender">Gender:</label><br>
        <select id="gender" name="gender" required>
            <option value="">Select</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select><br><br>
        
        <label for="dob">Date of Birth:</label><br>
        <input type="date" id="dob" name="dob" required><br><br>
        
        <input type="submit" value="Submit">
    </form>

    <script>
        function validateForm() {
            var age = document.getElementById("age").value;
            if (age <= 0) {
                alert("Please enter a valid age.");
                return false;
            }
            return true;
        }
    </script>
</div>

</body>
</html>
