<!doctype html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="index.css">
        <meta charset="utf-8">
        <title>Allergy One</title>
    </head>
    <body>
       <div class="wrapper">
          <?php
            require('modules/header.php');
            ?>
            <?php 
            require('modules/nav.php');
            ?>
            <div class="transbox_1">
                <p>Allergy One <br>
                7375 N. Fresno Street #101 <br>
                Fresno, CA 93720 <br>
                Tel: 559.432.1900 <br>
                Toll Free 800.989.0111 <br>
                Fax: 559.432.1910 <br>
                Email: sales@allergyone.com</p></div>
            <div class="transbox_2">
            <form action="contact.php" method="get">
                <label for="name">Name</label><br>
                <input type="text" name="name"><br>
                <label for="email">Email</label><br>
                <input type="email" name="email"><br>
                        <br></div>
                    <div>
                        <label for="text">Comment</label><br>
                        <textarea name="text" id="" cols="31" rows="10"></textarea><br>
            <input type="submit"> <br>
                        <input type="reset"> <br></form>    
            </div>               
    
       </div>
    </body>
</html>