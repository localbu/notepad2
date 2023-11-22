<?php
include'config.php';
$query= "SELECT *FROM tb_note";
$sql= mysqli_query($conn,$query);
//    
// var_dump($result);
// die();
$no=0;


?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Pad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h3 class="text-info">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-journal-bookmark" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 8V1h1v6.117L8.743 6.07a.5.5 0 0 1 .514 0L11 7.117V1h1v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8z"/>
                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
              </svg>
              My Note 
        </h3>
        <div class="card shadow bg-tertiary rounded mb-4 ">
            <div class="card-body">
                <form class="d-flex" action="insert.php" method="post">
                    <input type="text" class="form-control me-2" name="title_note" placeholder="Title....">
                    <input type="text" class="form-control me-2" name="note_note" placeholder="Click....">
                    <button type="submit" class=" btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                      </svg></button>
                </form>
            </div>
        </div>
        <div class="container text-center">
  <div class="row">
            <?php while($result= mysqli_fetch_assoc($sql)){
                
                ?>
               
                  <div class="card ms-5 me-1 col-lg-3 col-md-3 col-sm-12">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo ++$no ?></h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $result['title_note'] ?></h6>
                    <p class="card-text"><?php echo $result['note_note'] ?></p>
                    <a href="update.php?edit=<?php echo $result['id_note']; ?>" class="btn btn-primary">Edit</a>
                    <a href="delete.php?delete=<?php echo $result['id_note']; ?>" class="btn btn-danger">delete</a>
                  </div>
                </div>
              <?php }?>
              
            </div>
        </div>

              









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>