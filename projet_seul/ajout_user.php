<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="python_php.php" method="get">
    <table>
        <th>username</th>
        <th>password</th>
        <th>email</th>
        <th>name</th>
      <tr>
        <td><input type="text" name="username" id="username" required></td>
        <td><input type="text" name="passwd" id="passwd" required></td>
        <td><input type="email" name="email" id="email" required></td>
        <td><input type="text" name="name" id="name" required></td>
      </tr>
    </table>
    <button type="submit">SUBMIT</button>
  </form>
</body>
</html>
<?php
