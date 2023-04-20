<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign In</title>
    <link rel="stylesheet" href="SignIn.css" />
  </head>

  <body>
    <header>
      <img src="images/logo.png" alt="Docplus" /><span class="ocplus"
        >ocplus</span
      >
    </header>

    <main class="main">
      <aside>
        <img src="./images/login-img.svg" alt="" srcset="" />
      </aside>
      <div class="container">
        <div class="form">
          <form action="">
            <div class="title">Sign In</div>
            <div class="content">
              <div class="input">
                <span>Username</span>
                <input
                  type="text"
                  placeholder="Username"
                  id="name"
                  name="name"
                  required
                />
              </div>
              <div class="input">
                <span>Password</span>
                <input
                  type="password"
                  placeholder="Password"
                  id="password"
                  name="password"
                  required
                />
              </div>
              <div class="input submit">
                <input type="submit" value="Sign In" name="" />
              </div>
              <div class="signUp input">
                <p>New User? <a href="./SignUp.php">Sign up</a></p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </main>
  </body>
</html>
