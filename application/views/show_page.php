<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">

</head>
<body>
	<div class="container">

		<?php

			// echo "<pre>";
			// print_r($xyz);
			// echo "</pre>";


		?>

		<table class="table table-bordered">
    <thead>
      <tr>
        <th>id</th>
        <th>username</th>
        <th>password</th>
      </tr>
    </thead>
    <tbody>
      <?php
      	 foreach($xyz as $val):
      ?>
      <tr>
      		<td><?php echo $val['uid'];?></td>
      		<td><?php echo $val['uemail'];?></td>
      		<td><?php echo $val['upass'];?></td>
          <td><a href="<?php echo base_url('index.php/crud/deleteData/'.$val['uid']);?>">delete</a></td>
          <td><a href="<?php echo base_url('index.php/crud/editData/'.$val['uid']);?>">edit</a></td>

      </tr>
      <?php

      		endforeach;
      ?>
    </tbody>
  </table>
	</div>

</body>
</html>