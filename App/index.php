<?php
if(!empty($_POST["submit"])) {
	$fullname = $_POST["fullname"];
	$email = $_POST["email"];
	$user_message = $_POST["user_message"];

	$conn = mysqli_connect("localhost","root","");
	mysqli_select_db($conn,"contact");
	mysqli_query($conn,"INSERT INTO tbl_contact (fullname, email, user_message) VALUES ('" . $fullname. "', '" . $email. "','" . $user_message. "')");
	$insert_id = mysqli_insert_id($conn);
	if(!empty($insert_id)) {
	$message = "Successfully Added.";
	}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>40 DAYS</title>
<!--      google fonts -->
      <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<!--      CSS-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
<!--      Bootstrap-->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--      react link-->
      <div id="like_button_container"></div>



    <link rel="icon" href="40.jpg">

  </head>

  <body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand"  href="#">
          <img src="40.png" alt="">
        </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#us">US  <span class="sr-only">(current)</span></a>
      </li>
        <li class="nav-item active">
        <a class="nav-link" href="#contact">Contact  <span class="sr-only">(current)</span></a>
      </li>

        <li class="nav-item">
        <a class="nav-link" href="CV.html">Upload CV</a>
      </li>



    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    <main>


      <div class="container-fluid">
        <img class="photo" src="main.jpg" alt="photo">

      </div>

      <article>


        <section class="about">
          <h2 class="heading"><a id="about">About</a></h2>
          <p>
FORTY DAYS Is summer training that allows you to expand your knowledge 
and achive more success by understanding your professional skills with helpful 
supervisors , Here we are k team 

</p>

        </section>


        <section class="us container-fluid uswidth">
          <h2 class="heading"><a id="us">US</a></h2>
          <div class="row">
            <div class="col-lg-4">
              <a href="https://github.com"> <img class="icon" src="user.png" alt=""></a>
              <p class="icon-text">Mariam</p>
            </div>
            <div class="col-lg-4">
              <a href="https://github.com"><img class="icon" src="user.png" alt=""></a>
              <p class="icon-text">Abdullah</p>
            </div>

           <div class="col-lg-4">
              <a href="https://github.com"><img class="icon" src="user.png" alt=""></a>
              <p class="icon-text">Gaida</p>

          </div>


          </div>
        </section>



        <section class="contact">
      <section class="contact">
          <h2 class="heading"><a id="contact">Contact</a></h2>
          	<form name="frmContact" method="post" action="">
            <label foar="fname">First Name</label>
            <input type="text" class="text_input" autofocus="autofocus" name="fullname">
            <label for="lname">Email</label>
            <input type="text" class="text_input" autofocus="autofocus" name="email">
            <label for="message">Message</label>
            <textarea name="user_message" class="text_input" autofocus="autofocus" cols="60" rows="6"></textarea>
          <input type="submit" class="btn_submit" name="submit" value="Submit">
          </form>
					<!-- <form name="frmContact" method="post" action="">

<div class="aler_message"><?php if(isset($message)) { echo $message; } ?></div>

<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<tr class="tableheader">
<td colspan="2">Contact Form</td>
</tr>
<tr class="tablerow">
<l>Full Name<br/>  <input type="text" class="text_input" autofocus="autofocus" name="fullname"></td>
<td>Email<br/> <input type="text" class="text_input" autofocus="autofocus" name="email"></td>
</tr>
<tr class="tablerow">
<td colspan="2">Message<br/><textarea name="user_message" class="text_input" autofocus="autofocus" cols="60" rows="6"></textarea></td>
</tr>
<tr class="tableheader">
<td colspan="2"><input type="submit" class="btn_submit" name="submit" value="Submit"></td>
</tr>
</table>

</form> -->
        </section>

        </section>

      </article>

    </main>

    <!--Footer-->
    <footer>

    </footer>

  </body>

</html>
