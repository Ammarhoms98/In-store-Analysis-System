<?php
//include('cone.php');


function insertuser($name, $email, $pass,$depid, $depname)
{
   if(require('cone.php'))
   {
     try {
        $getemp = "SELECT MAX(emp_id) + 1 AS new_emp_id FROM employs";
        $result = $access->query($getemp);
        $new_emp_id = $result->fetch(PDO::FETCH_ASSOC)['new_emp_id'];
         $req = $access->prepare('INSERT INTO users1 (name,username,password,employee_id) VALUES(?, ?,?,?)');
         $req1 = $access->prepare('INSERT INTO employs (emp_name,department_id,department_name) VALUES(?, ?,?)');
         $req->bindparam(1,$name,PDO::PARAM_STR);
         $req->bindparam(2,$email,PDO::PARAM_STR);
         $req->bindparam(3,$pass,PDO::PARAM_STR);
         $req->bindparam(4,$new_emp_id,PDO::PARAM_INT);
         $req1->bindparam(1,$name,PDO::PARAM_STR);
         $req1->bindparam(2,$depid,PDO::PARAM_INT);
         $req1->bindparam(3,$depname,PDO::PARAM_STR);

         $req1->execute();
         $req->execute();
         $req1->closeCursor();
         $req->closeCursor();
         //header("location:viewemp.php");
     } catch (PDOException $e) {
         echo "Error: " . $e->getMessage();
     }
   }
}

/*function insertemp($name, $depid, $depname)
{
   if(require('cone.php'))
   {
     try {
         $req1 = $access->prepare('INSERT INTO employs (emp_name,depart_id,department_name) VALUES(?, ?,?)');
         $req1->bindparam(1,$name,PDO::PARAM_STR);
         $req1->bindparam(2,$depid,PDO::PARAM_INT);
         $req1->bindparam(3,$depname,PDO::PARAM_STR);
         $req1->execute();
         $req1->closeCursor();
         
     } catch (PDOException $e) {
         echo "Error: " . $e->getMessage();
     }
   }
}*/