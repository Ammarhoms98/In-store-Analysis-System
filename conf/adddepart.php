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

    <title>ADD DEPARTMENT</title>
</head>
<body>
  
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>ADD DEPARTMENT 
                            <a href="viewdepart.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                                <form  method="post">
                                    <input type="hidden" name="ww" value="">

                                    <div class="mb-3">
                                        <label>DEPARTMENT Name</label>
                                        <input type="text" name="depname" value="AA" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>CAMEAR ID</label>
                                        <input type="text" name="camid" value="111" class="form-control">
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
  if(isset($_POST['depname']) AND isset($_POST['camid']))
  {
  if(!empty($_POST['depname']) AND !empty($_POST['camid']))
      {
          //$email = htmlspecialchars(strip_tags($_POST['depid']));
          $namedep= htmlspecialchars(strip_tags($_POST['depname']));
          $camid= intval($_POST['camid']);
        
        try 
        {
            insertdepart($namedep, $camid);
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