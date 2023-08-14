<?php
    include "conn.php";

    $json = array();
    
    $sql = "SELECT * FROM login";
    
    $list = $db->query($sql);

    $no = 0;
    
    while($data = $list->fetch_assoc()){


        $no++;

        $id = $data['id'];
        
        $fname          = $data['fname'];
        $mname          = $data['mname'];
        $lname          = $data['lname'];
        // $fullname    = $firstname." ".$lastname;
        $bday           = $data['bday'];
        $age            = $data['age'];
        // $userId      = $data['user_id'];
        // $email       = $data['email'];
        // $password    = $data['password'];


          $action = "<button> edit</button>";

        $json[] = array(
            "no"        => $no,
            "id"        => $id,
            "fname"     => $fname,
            "mname"     => $mname,
            "lname"     => $lname,
            "bday"      => $bday,
            "age"       => $age,
            "action"    => $action
        );
    }

    echo json_encode($json);
?>