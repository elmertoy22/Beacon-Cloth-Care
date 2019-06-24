<?php

    include('database/database_connection.php');

    session_start();
    
    $form_data = json_decode(file_get_contents("php://input"));

    $query = "
         SELECT * FROM accounts 
         WHERE username = :username
         ";
         $statement = $connect->prepare($query);
         if($statement->execute($data))
         {
          $result = $statement->fetchAll();
          if($statement->rowCount() > 0)
          {
           foreach($result as $row)
           {
            if(password_verify($form_data->password, $row["password"]))
            {
             $_SESSION["username"] = $row["username"];
            }
            else
            {
             $validation_error = 'Wrong Password';
            }
           }
          }
         }
    $output = array(
     
    );

echo json_encode($output);

?>
