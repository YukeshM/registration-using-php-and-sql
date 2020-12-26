<!DOCTYPE html>
  <html>
  <head>
  <meta charset="utf-8">
  <title>registration</title>
  </head>
  <body>
    <div class ="container">
      <div class="header">
        <h2>register<h2>
        </div>
      <form action="registration.php" method="post">

        <div>
          <label for="username">username:</label>
          <input type="text" name="username">
        </div>

        <div>
          <label for="email">email:</label>
          <input type="email" name="email">
        </div>

        <div>
          <label for="password">password:</label>
          <input type="text" name="password_1">
        </div>

        <div>
          <label for="username">confirm password</label>
          <input type="text" name="password_2">
        </div>

          <button type="submit">submit</button>

          <p>already a user?<a href="login.php"><b>log in</b></a></p>
        
        </form>


</div>
  </body>
  </html>
