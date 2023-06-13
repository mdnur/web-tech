<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Enter your name" id="name">
        <button>Submit</button>
    </form>


    <h1>You name is 
    <?php 
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        echo "The name parameter is: " . $name;
    } else {
        echo "The name parameter is not provided.";
    }
    
    ?>
    </h1>
</body>

</html>