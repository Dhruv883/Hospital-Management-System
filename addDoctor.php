<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="addDoctor.css" />
    <title>Add Doctor</title>
  </head>
  <body>
    <main>
      <header>
        <a href="index.html"
          ><img src="images/logo.png" alt="Docplus" /><span class="ocplus"
            >ocplus</span
          ></a
        >
      </header>
      <form action="">
        <div class="mainContent">
          <div class="content-1">
            <div class="content">
              <div class="input">
                <span>First name</span>
                <input
                  type="text"
                  placeholder="First name"
                  id="fname"
                  name="fname"
                  required
                />
              </div>
              <div class="input">
                <span>Last name</span>
                <input
                  type="text"
                  placeholder="Last name"
                  id="lname"
                  name="lname"
                  required
                />
              </div>
              <div class="input">
                <span>Speciality </span>
                <input
                  type="text"
                  placeholder="Speciality"
                  id="speciality"
                  name="speciality"
                  required
                />
              </div>
              <div class="input">
                <span>Age</span>
                <input
                  type="number"
                  placeholder="Age"
                  id="age"
                  name="age"
                  required
                />
              </div>
              <div class="input">
                <span>Email ID</span>
                <input
                  type="email"
                  placeholder="Email-Id"
                  id="email"
                  name="email"
                  required
                />
              </div>
            </div>
          </div>
          <div class="content-2">
            <div class="title">Add Doctor</div>
            <div class="content">
              <div class="input">
                <span>Username</span>
                <input
                  type="text"
                  placeholder="Username"
                  id="username"
                  name="username"
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
              <div class="input">
                <span>Confirm Password</span>
                <input
                  type="password"
                  placeholder="Password"
                  id="cpassword"
                  name="cpassword"
                  required
                />
              </div>
              <div class="input submit">
                <input type="submit" value="Add Doctor" name="" />
              </div>
              <div class="signUp input"></div>
            </div>
          </div>
        </div>
      </form>
    </main>
  </body>
</html>