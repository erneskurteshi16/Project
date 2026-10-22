<!DOCTYPE html>
 <html lang="sq">
     <head>
         <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
          <title>Register - MovieZone</title> 
          <link rel="stylesheet" href="style.css"> 
        </head> 
        <body> 
            <header> 

                <h2>MovieZone</h2> 
        <nav> <a href="index.php">Home</a>
         <a href="register.php">Register</a>
          <a href="login.php">Sign In</a> 
        </nav>
     </header> 

     <div class="form-container">

         <h1>Create Account</h1> 
         <p>Regjistrohu në MovieZone.</p>

          <?php if ($message ==""): ?> 
 
            <?= htmlspecialchars($message) ?> 
        </p>
             <?php endif; ?>

              <form method="POST" action="register_logic.php">

                <label>Emri i plotë</label> 
                <input 
                type="text"
                name="name"
                 required
                  >

                  <label>Email</label> 
                  <input 
                  type="email" 
                  name="email" 
                  required 
                  > 

                  <label>Fjalekalimi</label>
                  <input
                  type="password"
                  name="password"
                  minlength="8"
                  required
                  >

                  <button type="submit">Register</button>

              </form>

              <p>Ke llogari? <a href="login.php">Sign In</a></p>

     </div>

        </body>
 </html>