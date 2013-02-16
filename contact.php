<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Pizza Planet</title>
    <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/colors.css" />

 </head>
 <body>

  <div id="wrapper">

            <div id="header">
      <a href="index.php"><img src="images/banner.gif"/></a>
      </div>
   

      <div id="container">
          <div id="nav">
          <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="menu.php">Menu</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="career.php">Join Our Team</a></li>
          </ul>
          </div>
          <div id="main">
           <div id="window">
             <h2>Have a question? Drop us line.</h2>

             <form method="post" action="thanks.php">

                  <fieldset>
                  <label for="name">Name:</label>
                  <input type="text" name="name" id="name" value="" size="25" maxlength="128" />
                  </fieldset>

                  <fieldset>
                  <label for="from">Email:</label>
                  <input type="text" name="from" id="from" value="" size="25" maxlength="128" />
                  </fieldset>

                  <fieldset>
                  <label for="subject">Subject:</label>
                  <input type="text" name="subject" id="subject" value="" size="25" maxlength="128" />
                  </fieldset>

                  <fieldset>
                  <label for="message">Message:</label>
                  <textarea name="message" id="message" cols="49" rows="5"></textarea>
                  </fieldset>

                  <fieldset>
                  <input name="submit" id="submit" value="Send Message" type="submit" />
                  </fieldset>

             </form>
          </div>
          </div>
   
   </div>
  
   
   


   <div id=footer>
    <p>&copy; 2013 Pizza Planet | Harrison Couch </p>
   </div>

   </div>
 </body>
</html>