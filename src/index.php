<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stay-at-Home-Vesta</title>
  <style>
    * {
      text-align: center;
      font-family: sans-serif;
    }
  </style>
</head>
<body>
  <h1>Stay at Home Vesta</h1>
  <p>Stay at Home Vesta has been installed correctly!</p>
  <p>Modify the files in the src/ folder and see your changes here.</p>
  <p style='color: red;'>Note: CSS changes may cache, always use CTRL+F5 while testing.</p>
  <p>
    Use: 'vesta_database' instead of 'localhost' or '127.0.0.1' while connecting to your database, for example:
    <br/>
    <b>mysqli_connect('vesta_database', 'username', 'password', 'database')</b>
    <br/>
    Don't forget to change this back to localhost before uploading to the real Vesta.
  </p>
  <p>For more information, <a href="https://github.com/nevexo/stay-at-home-vesta">visit the GitHub Page</a><p>
  <p><a href="/phpmyadmin">Open PHPMyAdmin</a></p>
  <?php phpinfo(); ?>
</body>
</html>