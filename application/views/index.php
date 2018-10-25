<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
  <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.3.1.min.js';?>">
  </script>

</head>
<body>
	<div class="container">
		<form method="post" action="<?php echo base_url('index.php/crud/action_page')?>">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="uemail">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="upass">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  	<?php echo validation_errors();?>

	</div>

</body>
</html>