<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
  table,
  th,
  td {
    border: 1px solid black;
    border-collapse: collapse;
  }
  </style>
</head>

<body>
  <?php
  $products = [
    ['iphone', 1999],
    ['samsung', 899],
    ['huawei', 30]
  ];
  ?>

  <table style="width:100%;">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>price</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $total = 0;
      for ($i = 0; $i < count($products); $i++) { ?>
      <tr>
        <th><?php echo $i + 1 ?></th>
        <td><?php echo $products[$i][0] ?></td>
        <td><?php echo "$" . $products[$i][1] ?></td>
      </tr>
      <?php
        $total = $total + $products[$i][1];
      } ?>
      <tr>
        <th>Total</th>
        <th colspan="2" style="text-align: right;"><?php echo $total ?></th>
      </tr>
    </tbody>
  </table>
</body>

</html>