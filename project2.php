<html>
<body>
<div>
<form action="welcome2.php" method="post">
<div class="container">
<h1>resistration form</h1>
<p>Fill up the form</p> 
<label for="name"><b>Enter name</b></label><br>
<input type="text" name="name" placeholder="Name" required><br>

<label for="dob"><b>date of birth</b></label><br>
<input type="text" name="dob" placeholder="dd/mm/yyyy" required><br>

<label for="phone"><b>Enter phone no</b></label><br>
<input type="text" name="phone" placeholder="123-45-678" required><br>

<label for="email"><b>Enter user name</b></label><br>
<input type="email" name="email" placeholder="username@email.com" required><br>

<label for="pass"><b>Enter password</b></label><br>
<input type="password" name="pass" placeholder="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br>

<label for="cpassword"><b>comfirm password</b></label><br>
<input type="password" name="cpassword" placeholder="confirm password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br>


<input type="radio" name="gender" value="male" />Male
<input type="radio" name="gender" value="female" />Female
<input type="radio" name="gender" value="other" />other<br>
<input type="submit" name="s" value="sign up">
</div>
</form>
</div>
</body>

