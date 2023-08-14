
<?php
    require_once('header.php');
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
<table id="tblUser">
    <thead>
        <tr>
            <th>No.</th>
            <th>ID</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Birth Date</th>
            <th>Age</th>
        </tr>
    </thead>
</table>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
<!-- <script>
jQuery(document).ready(function($) {
    $('#tblUser').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "server_processing.php"
    } );
} );
</script> -->

<script>
   $(document).ready(function(){

        $("#tblUser").DataTable({
            order: [
                [0, 'asc']
            ],
            "ajax": {
                "url": "json.php",
                "dataSrc": ""
            },
            "columns": [
                {
                    "data": "no"
                },

                {
                    "data": "id"
                },
                {
                    "data": "fname"
                },
                {
                    "data": "mname"
                },
                {
                    "data": "lname"
                },
                {
                    "data": "bday"
                },
                {
                    "data": "age"
                }

            ]
        });                      
        
    });


</script>
</body>
</html>


