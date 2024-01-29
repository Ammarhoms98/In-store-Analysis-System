<?php

require("insertcamear.php");

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../not/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>ADD CAMERA</title>
</head>
<body>
  
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>ADD CAMERA  
                            <a href="viewcam.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                                <form  method="post">
                                    <input type="hidden" name="ww" value="">

                                    <div class="mb-3">
                                        <label>CAMERA Name</label>
                                        <input type="text" name="camname" value="AA" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>DEPARTMENT ID</label>
                                        <input type="text" name="depid" value="111" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>DEPARTMENT NAME</label>
                                        <input type="text" name="depname" value="ENTAR.." class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>CAMERA PATH</label>
                                        <input type="text" name="campath" value="VIDEO/PATH" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="valider" class="btn btn-primary">
                                            ADD
                                        </button>
                                    </div>

                                </form>
                           
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>




    <?php

if(isset($_POST['valider']))
{
  if(isset($_POST['camname']) AND isset($_POST['depid']) AND isset($_POST['depname']) AND isset($_POST['campath']))
  {
  if(!empty($_POST['camname']) AND !empty($_POST['depid']) AND !empty($_POST['depname']) AND !empty($_POST['campath']))
      {
          $name = htmlspecialchars(strip_tags($_POST['camname']));
          $depid = intval($_POST['depid']);
          //$email = htmlspecialchars(strip_tags($_POST['depid']));
          $depname= htmlspecialchars(strip_tags($_POST['depname']));
          $campath= htmlspecialchars(strip_tags($_POST['campath']));
        
        try 
        {
            insertcamera($name, $depid, $depname,$campath);
        } 
        catch (Exception $e) 
        {
            $e->getMessage();
        }

      }
  }
}

?>
</body>
</html>