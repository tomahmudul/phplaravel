<?php
session_start();
if(!isset($_SESSION["username"]) && !$_SESSION["username"]){
    header("Location:login.php");
}else if(isset($_SESSION["role"]) && $_SESSION["role"] != "admin"){
  header( 'Location: login.php' );
}

//read users
$usersFile = './db.json';
$users = file_exists( $usersFile ) ? json_decode( file_get_contents( $usersFile ), true ) : [];
//print_r($users);

//exit;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Role management page</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="./style.css">
<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
	var actions = $("table td:last-child").html();
	// Append table with add row form on add new button click
    $(".add-new").click(function(){
		$(this).attr("disabled", "disabled");
		var index = $("table tbody tr:last-child").index();
        var row = '<tr>' +
            '<td>&nbsp;</td>' +
            '<td>&nbsp;</td>' +
            '<td><input type="text" class="form-control" name="newRole" id="newRole"></td>' +
			'<td><a class="add" title="" data-toggle="tooltip" data-original-title="Add" "><i class="material-icons"></i></a></td>' +
        '</tr>';
    	$("table").append(row);		
		$("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
        $('[data-toggle="tooltip"]').tooltip();   

    });
	// Add row on add button click
	$(document).on("click", ".add", function(){
		var empty = false;
		var input = $(this).parents("tr").find('input[type="text"]');
        input.each(function(){
			if(!$(this).val()){
				$(this).addClass("error");
				empty = true;
			} else{

                $.ajax({ 
                    url: 'action.php', 
                    data: "operation=addRole&roleName="+$(this).val(),
                    type: 'POST', 
                    success: function (result) { 
                        if(result == "saved"){
                            location.reload();
                        }else{
                            alert("There is an error, please try again later.")
                        }
                    } 
                }); 

                $(this).removeClass("error");
            }
		});
		$(this).parents("tr").find(".error").first().focus();
		if(!empty){
			input.each(function(){
				$(this).parent("td").html($(this).val());
			});			
			$(this).parents("tr").find(".add, .edit").toggle();
			$(".add-new").removeAttr("disabled");
		}		
    });
	// Edit row on edit button click
	$(document).on("click", ".edit", function(){		
        $(this).parents("tr").find("td:not(:last-child)").each(function(){
			$(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
		});		
		$(this).parents("tr").find(".add, .edit").toggle();
		$(".add-new").attr("disabled", "disabled");
    });
	// Delete row on delete button click
	$(document).on("click", ".delete", function(){
        $(this).parents("tr").remove();
		$(".add-new").removeAttr("disabled");
        var userEmail = $(this).attr('data-id');
        //alert(userEmail);return false;
        $.ajax({ 
            url: 'action.php', 
            data: "operation=deleteUser&user_email="+userEmail,
            type: 'POST', 
            success: function (result) { 
                // Do something with the result 
                //alert(result);
                if(result == "saved"){
                    alert("Deleted success.")
                }else{
                    alert("There is an error, please try again later.")
                }
            } 
        }); 
        
    });
});
</script>
</head>
<body>
<div class="container-lg">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2><b>Role management page</b></h2>
                
                     
                    <div class="mt10">Welcome <?=ucfirst($_SESSION["username"]) ?? ""; ?>.</div>    
                    <p><a href="logout.php">Logout</a></p>    
                    </div>
              
                    
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New Role</button>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach ($users as $key=>$user):                        
                    ?>
                    <tr>
                        <td><?=$key;?></td>
                        <td><?=$user["username"];?></td>
                        <td><?=$user["role"];?></td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"  data-id="<?=$key;?>"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>                    
                         
                </tbody>
            </table>
        </div>
    </div>
</div>     
</body>
</html>