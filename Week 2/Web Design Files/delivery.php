<!-- This script was typed by Adrianto Hartono  -->

<!DOCTYPE html>
<html>
<body>

<body style='background-color:pink'>
<span style="font-size: x-large;">

Thank you for filling the form <br>
Your first name is : <?php echo $_POST["fName"]; ?> <br>
Your last name is: <?php echo $_POST["lName"]; ?> <br>
Your email address is: <?php echo $_POST["email"]; ?> <br>
Your phone number is: <?php echo $_POST["phone"]; ?> <br>
Your home address is: <?php echo $_POST["address"]; ?> <br>

<br>

Additional information that you want is: <?php echo $_POST["interest"]; ?> <br>

<br>

You found us from : <?php echo $_POST["reference"]; ?> <br>

<br>

Your questions is/are: <?php echo $_POST["questions"]; ?> 

</body>
</html>