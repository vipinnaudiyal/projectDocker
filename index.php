<html>
    <head>
        <h1>My First Docker project</h1>
    </head>
    <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="name"><h2>Enter your name:</h2></label>
        <input type="text" id="name" name="name"><br>
        <label for="name"><h2>Hobbies:</h2></label>
        <input type="text" id="hobby" name="hobby"><br><br>
        <input type="submit" value="Submit">
</form>
    </body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the name from the POST data
    $name = htmlspecialchars($_POST['name']);
    $hobby = htmlspecialchars($_POST['hobby']);
    if (!empty($name)) {
        echo "<h3>Hello, " . $name . "! Welcome to my website, "."Wow you love ".$hobby.", that's really exciting!!</h3>";
    } else {
        echo "<h4>Please enter your name.</h4>";
    }
}
?>

