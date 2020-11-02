<!DOCTYPE html>
<html lang="en">
<head>
  <title>Insert Table Name</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h4>Insert Table Name</h2>
  

<form action="<?php echo base_url();?>SetTable/form_validation" method="post">
  <div class="form-group">
    <label for="Table_Name">Table Name</label>
    <input type="text" class="form-control" name="tbl_name">
    <span class="text-danger"><?php echo form_error("tbl_name"); ?></span>  
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</body>
</html>
