
<?php
function insertcamera($name, $depid, $depname,$campath)
{
   if(require('cone.php'))
   {
     try {
         $req = $access->prepare('INSERT INTO cameras (name,department_id,department_name) VALUES(?, ?,?)');
         $req1=$access->prepare('INSERT INTO videos (video_path,name_vid) VALUES(?, ?)');
         $req->bindparam(1,$name,PDO::PARAM_STR);
         $req->bindparam(2,$depid,PDO::PARAM_INT);
         $req->bindparam(3,$depname,PDO::PARAM_STR);

         $req1->bindparam(1,$campath,PDO::PARAM_STR);
         $req1->bindparam(2,$depname,PDO::PARAM_STR);

         $req->execute();
         $req1->execute();
         $req->closeCursor();
         $req1->closeCursor();
         //echo 'true';
         header("location: viewcam.php");
     } catch (PDOException $e) {
         echo "Error: " . $e->getMessage();
     }
   }
}


function insertdepart($namedep, $camid)
{
   if(require('cone.php'))
   {
     try {
         $req = $access->prepare('INSERT INTO department (department_name,camera_id) VALUES(?, ?)');
         $req->bindparam(1,$namedep,PDO::PARAM_STR);
         $req->bindparam(2,$camid,PDO::PARAM_INT);
         $req->execute();
         $req->closeCursor();
         //echo 'true';
         header("location: viewdepart.php");
     } catch (PDOException $e) {
         echo "Error: " . $e->getMessage();
     }
   }
}


?>
