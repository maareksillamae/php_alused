<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My great web site</title>
    <meta name="description" contents="Just a test website for learning html, css and php">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<header>
    <nav id="main-navigation">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="page2.php">Page 2</a></li>
            <li><a href="page3.php">Page 3</a></li>
        </ul>
    </nav>
</header>
<div id="main-contents">
    This is page 1, the home page.
</div>
<footer>
    Contact us at webmaster@mywebsite.com
</footer>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    if(isset($_POST['answer']) && $_POST['answer'] == 4){

        echo "The number is correct.";
#Right answer was given continue with submitting form
    }else{

        echo "Sorry, try again.";
#The wrong answer was given give an error message.
    }
}
?>

<form action="" method="post">
    <input type="text" name="answer" id="answer"  placeholder="2+2=?">
    <input type="submit" name="submit" value="Submit" />
</form>

<?php echo file_get_contents("html/header.html"); ?>
This is page 1, the home page.
<?php echo file_get_contents("html/footer.html"); ?>