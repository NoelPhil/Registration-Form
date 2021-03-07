<!Doctype Html>
    <body>
    <a href="welcome.php"><img src="home.png" alt="Dashboard" width="40" height="30"></a>
    <div class="center">
    <form>
        <a href="welcome.php"><img src="sidehustle.png" alt="sidehustle" title="" class="center2"></a>
        <h3><b>Sign in to continue to SideHustle</b></h3>
        <h3><b>Internship Portal</b></h3>
        <label for="email">Email Address</label><br>
        <input name="email" id="email" type="email" placeholder="Emmail Address" required><br>
        <label for="password">Pasword</label><br>
        <input name="password" id="password" type="password" placeholder="Password" required><br>
        <button type="submit" name="login" class="submitbtn">Log In</button><br>
        <a href="">forgot your password?</a>  <a href="register.php">Create an account</a>
    </form>
    </div>
    </body>

<style>
    .center {
  margin: auto;
  width: 20%;
  border: none;
  padding: 10px 10px;
}
.center2 {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
h3 {text-align: center;}
div {
display: flex;
justify-content: center;
}

input[type=password], input[type=email]{
  width: 95%;
  padding: 5px;
  margin: 5px 0 5px 0;
  border-radius: 3px;
  border-color: rgb(230, 231,232);
  
}

div {box-shadow: -1px 1px 5px 3px rgb(230, 231,232);}
.submitbtn {
  background-color: #4CAF50;
  color: white;
  padding: 5px 5px;
  margin: 8px 0;
  border-radius: 3px;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;}

</style>





</Html>