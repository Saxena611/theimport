<?php include "db.php" ?>
<?php include "functions.php" ?>
<html>
    <body>
    <?php
        if(isset($_POST['check'])){

            $query = "SELECT * FROM DATA";
            $select = mysqli_query($connection,$query);
            while($row = mysqli_fetch_assoc($select)){

                $id  = $row['id'];
                $url = $_row['link'];
                $head = @get_headers($url);
                if(!$head || $head[0] == 'HTTP/1.1 404 NOT FOUND' || $head[0] = 'HTTP/1.1 401'){
                    $exit = false;
                    $update = "UPDATE data SET link = 'enter new link here' WHERE id == {$id}";
                    $execute = mysqli_query($connection, $query);
                    confirm($execute);
                }else{
                    $exit = true;
                }
            }

        }

    ?>      
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
    <form action="" method = "post">
    
        <button type="button" class="btn btn-primary btn-lg" name = "check">Check Database</button>
    
    </form>
   
    <a href="export.php">Display and Export</a>






    </body>
</html>