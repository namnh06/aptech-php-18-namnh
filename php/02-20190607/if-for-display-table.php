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
    ['iphone', 2000],
    ['samsung', 500],
    ['huawei', 100],
    ['htc', 1000]
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
      for ($i = 0; $i < count($products); $i++) {
        if ($products[$i][1] > 500) {
          $price = $products[$i][1] + ($products[$i][1] / 10);
        } else {
          $price = $products[$i][1] + ($products[$i][1] / 20);
        }
        ?>
      <tr>
        <th><?php echo $i + 1 ?></th>
        <td><?php echo $products[$i][0] ?></td>
        <td><?php echo "$" . $price ?></td>
      </tr>
      <?php
        $total = $total + $price;
      } ?>
      <tr>
        <th>Total</th>
        <th colspan="2" style="text-align: right;"><?php echo $total ?></th>
      </tr>
    </tbody>
  </table>
</body>

</html>