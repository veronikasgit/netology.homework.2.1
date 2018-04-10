<?php

$json = file_get_contents(__DIR__ . '/content.json');
$data = json_decode($json, true);

?>

<html>

  <head>
    <title>Установка и настройка веб-сервера</title>
  </head>

  <body>

    <table>

      <tread>
        <tr>
          <td>Имя</td>
          <td>Фамилия</td>
          <td>Адрес</td>
          <td>Телефон</td>
        </tr>
      </tread>

      <tbody>
      <?php foreach ($data as $item) { ?>
        <tr>
          <td><?php echo $item['firstName'] ?></td>
          <td><?php echo $item['lastName'] ?></td>
          <td><?php echo $item['address'] ?></td>
          <td><?php echo $item['phoneNumber'] ?></td>
        </tr>
      <?php } ?>
      <tbody>

    </table>

  </body>

</html>