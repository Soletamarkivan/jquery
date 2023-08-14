<?php
    include "conn.php";

    $json = array();
    
    $sql = "SELECT * FROM sample""
    
    $list = $con->query($sql);

    $no = 0;
    
    while($data = $list->fetch_assoc()){


        $no++;

        $id = $data['emp_id'];
        
        $employeeNo = $data['emp_no'];
        $firstname  = $data['firstName'];
        $lastname   = $data['lastName'];
        $fullname   = $firstname." ".$lastname;
        $department = $data['department'];
        $position   = $data['position'];
        $birthday   = $data['birthday'];
        $status     = $data['status'];
        $userId = $data['user_id'];
        $email   = $data['email'];
        $password   = $data['password'];


          // $action = "<button> edit</button>";

        $json[] = array(
            "employeeNo" => $employeeNo,
            "fullname"   => $fullname,
            "department" => $department,
            "position"   => $position,
            "birthday"   => $birthday,
            "status"   => $status,
            "action"     => $action
        );
    }

    echo json_encode($json);
?>


// Data table
$("#table").DataTable({
    order: [
        [0, 'asc']
    ],
    "ajax": {
        "url": "components/tableData.php",
        "dataSrc": ""
    },
    "columns": [{
            "data": "employeeNo"
        },
        {
            "data": "fullname"
        },
        {
            "data": "department"
        },
        {
            "data": "position"
        },
        {
            "data": "birthday"
        },
        {
            "data": "status"
        },
        {
            "data": "action"
        }

    ]
});