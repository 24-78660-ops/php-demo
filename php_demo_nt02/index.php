<?php include "purephp.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Demo</title>
</head>
<body>
    <a href="akin.php">click to next</a>
    <h1>
        Hello World
        <label>User Name: </label>
        <br>
        <?php echo $username; ?>
        <br>
        <br>
        <label>User ID: </label>
        <br>
        <?php echo $user_id; ?>
        <br>
        <label>Student Name: </label>
        <?php echo $student_name; ?>

    </h1>
    <button type="button" onclick="greetUser()">Greet Uset</button>


    <script>
    const user_name = "<?php echo $username; ?>";
    const user_ID = "<?php echo $user_id; ?>" ;
    const studentname = "<?php echo $student_name; ?>";
    
    function greetUser(){
        alert('Hello' + user_name + "!" + " Your ID" + user_ID + " Name:" + studentname)
    }

    </script>
</body>
</html>