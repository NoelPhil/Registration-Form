<!DOCTYPE html>

<html>
    <form action="form.php" method="POST">
    <div class="container">
        <label for="fname">Name:</label><br>
        <input name="name" id="fname" type="text" placeholder="Enter your Name"required ><br>
        <label for="femail">Email:</label><br>
        <input name="email" id="femail" type="email" placeholder="Enter your Email" required ><br>
        <label for="faddress">Address:</label><br>
        <input name="address" id="faddress" type="text" placeholder="Address"required ><br>
        <label for="fphone">Phone Number:</label><br>
        <input name="phone" id="fphone" type="tel" maxlength="11" placeholder="Phone Number"required ><br>
        <label for="fgender">Gender:</label><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br>
        <label for="birthday">Date of Birth:</label><br>
        <input type="date" id="birthday" name="birthday" value="birthday"><br>
        <label for="fpassword">Password (must be 8 characters):</label><br>
        <input name="password" id="fpassword" type="password" maxlength="8" placeholder="Enter your Password" required ><br>
        <button type="submit" name="submit" class="submitbtn">Submit</button>
    </div>

    </form>
    <fieldset >
    <legend align="center">REGISTRATION</legend>
    <?php 
if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $birthday = $_POST['birthday'];
    $phone = $_POST['phone'];

    function hide_password($password) {
        return substr($password,0, -8) . "********";
    }
    
    echo "<div style=\"text-align:center\">";
    echo "<h4>Welcome ", $name ,"</h4>";
    echo "<h4>Email: ", $email ,"</h4>";
    echo "<h4>Address: ", $address ,"</h4>";
    echo "<h4>Phone Number: ", $phone ,"</h4>";
    echo "<h4>Gender: ", $gender ,"</h4>";
    echo "<h4>Date Of Birth: ", $birthday ,"</h4>";
    echo "<h4>Password: ", hide_password($password) ,"</h4>";
    echo "</div>";
}
?>
  </fieldset>

<style >
    * {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 5px;
}

/* Full-width input fields */
input[type=text], input[type=password], input[type=email], input[type=tel], input[type=date] {
  width: 20%;
  padding: 5px;
  margin: 5px 0 5px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
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
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
}

.submitbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

</style>
</html>




