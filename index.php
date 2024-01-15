<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Validation Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input {
            padding: 8px;
            margin-bottom: 16px;
            width: 100%;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        p {
            margin-top: 20px;
            color: #4CAF50;
        }

        p.error {
            color: #D32F2F;
        }
    </style>
</head>
<body>
    <h2>Email Validation Form</h2>

    <?php
    // Include the validation class
    require __DIR__ . '/vendor/autoload.php';

    // Initialize variables
    $email = '';
    $validationResult = '';

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Capture the email from the form
        $email = $_POST["email"];

        // Use the Validate class for email validation
        $validationResult = App\Validate::email($email) ? 'Valid email address' : 'Invalid email address';
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
        <button type="submit">Validate</button>
    </form>

    <?php
    // Display the validation result
    if ($validationResult !== '') {
        echo '<p class="' . (App\Validate::email($email) ? 'success' : 'error') . '">' . htmlspecialchars($validationResult) . '</p>';
    }
    ?>
</body>
</html>
