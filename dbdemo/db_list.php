<?php
    require('db_conn.php');
    if ($_SESSION['isadmin'] == 1){
        
        
            
                
                if (isset($_GET['del'])){
                    deletePage($_GET['del']);
                }
                if (isset($_POST['Title'])){
                    editPage($_POST['HTML'], $_POST['Keywords'], $_POST['Description'], $_POST['Title'], $_POST['Nav_Name'], $_POST['pid']);
                }
            
           
    } else {
        header('Location: login.php');
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DB Demos</title>
    <link rel="stylesheet" href="css/foundation.min.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
  <?php require('modules/nav.php'); ?>
  
  <div class="row">
    <div class="large-12 columns">
    <h1>Pages to Edit</h1>
    <?php
        $sql = "SELECT ContentID, Nav_Name FROM content";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<a href='db_edit.php?pid=".$row['ContentID']."'>".$row['Nav_Name']."</a> | <a style='color:red;' href='?del=".$row['ContentID']."'>(del)</a><br>";
            }
        } else {
            echo "Failed to load content.";
        }
    ?>
    <br>
    <a href="db_insert.php" class="button">Add a Page</a>
    <a href="login.php?logout" class="button alert">Logout</a>
    
    </div>
</div>
   
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>   
</body>
</html>
<?php $conn->close(); ?>