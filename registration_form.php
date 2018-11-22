<!doctype html>
<html>
<head>
	<title>Register User</title>
	<style>
		.error {color: #FF0000;}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="ajaxCode.js"></script>
	
	<script type="text/javascript">
			/*
			function fun()
			{
			    $("#submit").click(function ()
                {
			        var data = $("#form1 : input").serializeArray();
			        $.get($("#form1").attr("action"), data, function (infoPrint)
                    {
                        $("#result").html(infoPrint);
                    });
                });
			    $("$form1").submit(function ()
                {
                    return false;
                });
			}
			*/
			/*
			$(document).ready(function()
			{
				$("button").click(function()
				{
					$.get("insert.php", function(data, status)
					{
						alert("Data: " + data + "\nStatus: " + status);
					});
				});
			});
			*/
			
	</script>
</head>
<body>	
	<!-- <form method='get' id="form1" name="form1" action="insert.php" class="form1"> -->
	<?php //require_once('regValidation.php'); ?>
		<div>
		<table align="center" cellpadding='5px' cellspacing='5px'>
			<tr>
			<td colspan="3" align="center" bgcolor="yellow">Register User </td>
			</tr>
			<tr>
			<td>Name</td>
			<td><input type="text" placeholder="Name" name="name" id="name" pattern='[A-Za-z]{3,20}' required='required' /></td>
			
			</tr>
			<tr>
			<td>Create Password</td>
			<td><input type="password" title='Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters'
			placeholder="Password" name="password" required='required' id="password" pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}'/></td>
		
			</tr>
			<tr>
			<td> Email-ID </td>
			<td><input type="email" title='characters@characters.domain ' placeholder="email" name="email" id="email" required='required' pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$' /> </td>
			
			</tr>

			<tr>
			<td> Contact </td>
			<td><input type="tel" placeholder="Contact" name="contact" id="contact" required='required' pattern="[0-9]{10}"/></td>
			</tr>

			<tr>
			<td> City</td>
			<td><input type="text" name="city" placeholder="City" id="city" required='required'  pattern='[A-Za-z]{3,20}' /></td>
		
			</tr>

			<tr>
			<td> Company </td>
			<td><input type="text" placeholder="Company" name="company" id="company" required='required'  pattern='[A-Za-z]{3,20}' /></td>
			
			</tr>

			<tr>
				<td align='center'>
					<!-- <input type='submit' name='submit' id='submit' onclick="return fun();" value='Register' /> -->
					<button>Register</button>
				</td>
				<td align='center'>
					<input type='reset' name='reset' value='Reset' />
				</td>
			</tr>
			<tr>
				<td colspan='2' align='center'>
					<p id='result' name='result'>The message need to be printed here...</p>
				</td>
			</tr>
		</div>
	<!-- </form>	-->
</body>
</html>

