<!Doctype Html>
    <body>
    <a href="welcome.php"><img src="home.png" alt="Dashboard" width="40" height="30"></a>
    <div class="center" >
    <form>
        <a href="welcome.php"><img src="sidehustle.png" alt="sidehustle" title="" class="center2"></a>
        <h4><b>Register for Cohort 3.0</b></h4>
        <label for="username">Username</label><br>
        <input name="username" id="username" type="text" placeholder="Username" required><br>
        <label for="email">Email Address</label><br>
        <input name="email" id="email" type="email" placeholder="Emmail Address" required><br>
        <label for="phone">Phone</label><br>
        <input name="phone" id="phone" type="tel" placeholder="Phone number" maxlength="11" required><br>
        <label for="password">Pasword</label><br>
        <input name="password" id="password" type="password" placeholder="Password" required><br>
        <label for="password">Confirm Pasword</label><br>
        <input name="password" id="confirm_password" type="password" placeholder="Confirm Password" required><br>
        <label for="role">Role</label><br>
        <input name="intern" id="intern" type="radio" value="Intern">
        <label for="intern">Intern</label><br>
        <input name="ambassador" id="ambassador" type="radio" value="ambassador">
        <label for="ambassador">Ambassador</label><br>
        <label for="category">Select your category</label><br>
        <input name="category" id="category" type="list" list="Select your category" placeholder="Select your category---"><br>
        <datalist id="Select your category">
            <option value="Select your category---">
            <option value="Content Creation">
            <option value="Customer Care Service">
            <option value="Digital Marketing">
            <option value="Graphics Design">
            <option value="Microsoft Office Suite">
            <option value="Mobile Application Development">
            <option value="Product Management">
            <option value="UI/UX">
            <option value="Video Animation">
            <option value="Web Design (Back end)">
            <option value="Web Desin (Front end)">
            <option value="Web Design (WordPress)">
        </datalist>
        <button type="submit" name="create account" class="submitbtn">Create Account</button><br>
        <input type="checkbox" <p>i accept <a href="">Terms and Conditions</a></p><br>
        <a href="login.php"><h5 align-text="center">Already have an account</h5></a>
    </form>
    </div>
    </body>

<style >

.center {
  margin: auto;
  width: 25%;
  border: none;
  padding: 10px 10px;
}
.center2 {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
h4 {text-align: center;}

    * {box-sizing: border-box}
    {border-style: solid;
    border-width: 0.5px;
    }

/* Add padding to containers */
.container {
  padding: 5px;
}

/* Full-width input fields */
input[type=text], input[type=password], input[type=email], input[type=tel], input[type=date], input[type="list"] {
  width: 100%;
  padding: 5px;
  margin: 5px 0 5px 0;
  border-radius: 3px;
  border-color: rgb(230, 231,232);
  
}

input[type=text]:focus, input[type=password]:focus, nput[type=email]:focus, input[type=tel]:focus, 
input[type=date]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/register button */
.submitbtn {
  background-color: #4CAF50;
  color: white;
  padding: 5px 5px;
  margin: 8px 0;
  border-radius: 3px;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.submitbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

.body {
    font-family: sans-serif;
}

div {box-shadow: -1px 1px 3px 2px rgb(230, 231,232);}

img 
</style>

<?php
if (isset($_POST['submit'])){
($_POST["password"] === $_POST["confirm_password"]);
   // success!
}
else {
   // failed :(
}

?>
</Html>