<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  </head>
  <body>
    <h1>Form</h1>

	<div class="container">
 <fieldset>
	<form class="well form-horizontal" method="post" action="process.php">
      <div class="form-group">
        <label class="col-md-4 control-label">Name</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			<input type="text" name="name" class="form form-control" placeholder="Enter your Name">
          </div>
        </div>
      </div>
 
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">E-Mail</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
			<input type="email" name="email" class="form-control" placeholder="Enter your E-Mail">
          </div>
        </div>
      </div>
 
 <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">Password</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
			<input type="password" name="password" class="form-control">
          </div>
        </div>
      </div>
     
        <!-- radio checks -->
      <div class="form-group">
        <label class="col-md-4 control-label">Gender</label>
        <div class="col-md-4">
          <div class="radio">
			<input type="radio" name="gender" value="male">
			<label class="control-label">Male</label>
          </div>
          <div class="radio">
        <input type="radio" name="gender" value="female">
		<label class="control-label">Female</label>
          </div>
        </div>
      </div>
 
 
      <div class="form-group">
        <label class="col-md-4 control-label">Address</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
			<textarea name="address" rows="5" cols="40"></textarea>
          </div>
        </div>
      </div>
 
  
      <div class="form-group">
        <label class="col-md-4 control-label">Country</label>
        <div class="col-md-4 selectContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
			<select class="form-select">
			<option selected>Open this select menu</option>
			<option value="1">Bangladesh</option>
			<option value="2">India</option>
			<option value="3">Pakistan</option>
			</select>
          </div>
        </div>
      </div>
 
      
       
      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4">
         <input type="submit" name="submit" value="Submit" class="btn btn-warning">
		 <input type="reset" name="reset" value="reset" class="btn btn-success">
        </div>
        </div>
      </div>
    <form>
    </fieldset>
  
</div>
</div>
<!-- /.container -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>