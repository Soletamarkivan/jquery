<!DOCTYPE html>
<html>
	<head>

    <link rel = "https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" stylesheet = "js/css">
		<meta charset="utf-8">
		<title>Register</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	</head>
	<body>
       
		<div class="register">
			<h1>Register</h1>

			<form action="dataTable.php" method="post" autocomplete="off">


            <div class ="form-group">
				<label for="lettersonly"><i class="fas fa-user"></i></label>
				<input type="text" name="fname" placeholder="First name" id="fname" class="lettersonly" >
            </div>

            <div class ="form-group">
				<label for="lettersonly"><i class="fas fa-user"></i></label>
				<input type="text" name="mname" placeholder="Middle name" id="mname" class="lettersonly" >
            </div> 
            
            <div class ="form-group">
				<label for="lettersonly"><i class="fas fa-user"></i></label>
				<input type="text" name="lname" placeholder="Last name" id="lname" class="lettersonly" >
            </div>

            <div class ="form-group">
				<label for="lettersonly"><i class="fas fa-user"></i></label>
				<input type="date" name="bday" placeholder="Birth Day" id="bday" class="numberonly">
            </div>

            <div class ="form-group">
				<label for="numberonly"><i class="fas fa-user"></i></label>
				<input type="text" name="age" placeholder="Age" id="age" class="numberonly" >
            </div>  

            <div class ="form-group">
				<label for="lettersonly"><i class="fas fa-user"></i></label>
				<input type="text" name="uname" placeholder="User Name" id="uname" class="lettersonly" >
            </div>  

            <div class ="form-group">
				<label for="numberonly"><i class="fas fa-user"></i></label>
				<input type="Password" name="pass" placeholder="Password" id="pass" class="numberonly" >
            </div>  
            <p class="error"></p>
				
				<!-- <input type="email" name="email" placeholder="Email" id="email" required> -->
				<input type="submit" value="Register">
			</form>
		</div>
	</body>
</html>

<!-- <script>
    $(document).ready(function(){
        $(".lettersonly").keypress(function(event){
            var inputValue = event.which;
            // allow letters and whitespaces only.
            if(!(inputValue >= 65 && inputValue <= 123) && (inputValue != 32 && inputValue != 0)) { 
                event.preventDefault(); 
            }
            console.log(inputValue);
        });
        
        $('.numberonly').keypress(function (e) {    
    
    var charCode = (e.which) ? e.which : event.keyCode    

    if (String.fromCharCode(charCode).match(/[^0-9]/g))    

        return false;                        

}); 

    $(document).ready(function (){
        var age = "";
        $('dob').datepicker({
            onSelect: function (value, ui){
                var today = mew Date();
                age = today.getFullYear() - ui.selectedYear;
                $('#age').val(age);

            },
            changeMonth: true;
            changeYear: true;
        });

        })
    });

</script> -->


<script>

$(document).ready(function(){
    $(".lettersonly").keydown(function(event){
        var inputValue = event.which;
        // allow letters and whitespaces only.
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)) { 
            event.preventDefault(); 
        }
    });
});

   
            
    // .[letter]
        $(document).ready (function (){
           
            // $('.lettersonly').on('keypress', function(event) {
            //     var charCode = event.which || event.keyCode;
            //     var charStr = String.fromCharCode(charCode);

            //     // Regular expression to match letters (A-Z and a-z)
            //     var letterRegex = /^[A-Za-z]+$/;

            //     // Check if the entered character matches the letter regex
            //     if (!letterRegex.test(charStr)) {
            //         // If the character doesn't match, prevent it from being entered
            //         event.preventDefault();
            //     }
            // });
// $('form').validate({
//     rules: {
//         .
//             lettersonly: {
//             required: true,
//             alpha: true
//             },
//         email: {
//             required: true,
//             email: true
//         }
//     }
// });

// $.validator.addMethod("alpha", function(value, element){
//     return this.optional(element) || value == value.match(/^[a-zA-Z\s]+$/);

// }, "Alphabetic characters only");

});
    </script>