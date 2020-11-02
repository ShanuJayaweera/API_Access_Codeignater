<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fetch Data Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h4>Product Table</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Cost Price</th>
        <th>Sale Price</th>
      </tr>
    </thead>
    <tbody>

    <?php
    foreach($obj as $ser)
    {
     ?>
     <tr>
          <td><?php echo $ser['Id']; ?></td>
          <td><?php echo $ser['Name']; ?></td>
          <td><?php echo $ser['CostPrice']; ?></td>
          <td><?php echo $ser['SalePrice']; ?></td>
     </tr>
      
     <?php
    }
    ?>
     
    </tbody>
  </table>
</div>

</body>
</html>
