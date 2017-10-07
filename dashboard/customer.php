<!DOCTYPE html>
<html>
<head>
	<title>Customer Registration</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<body>
	<!-- from here -->
	<div class="window_container">
		<div class="header">
			<span><u>New Customer</u></span>						
		</div>		

		<form method="post" action="controller/customer.php">
			<table  class="form_table ">
				<tr class="form_table_row">
					<td class="form_table_row_description">National Identity Card Number</td>
					<td><input type="text" name="nic" placeholder="nic" size="40" class="form_table_row_input"></td>
				</tr>

				<tr class="form_table_row">
					<td class="form_table_row_description">First Name</td>
					<td><input type="text" name="fname" placeholder="first name" size="40" class="form_table_row_input"></td>
				</tr>

				<tr class="form_table_row">
					<td class="form_table_row_description">Middle Name</td>
					<td><input type="text" name="mname" placeholder="middle name"  size="40" class="form_table_row_input"></td>
				</tr>

				<tr class="form_table_row">
					<td class="form_table_row_description">Last Name</td>
					<td><input type="text" name="lname" placeholder="last name"  size="40"class="form_table_row_input"></td>
				</tr>

				<tr class="form_table_row">
					<td class="form_table_row_description">Gender</td>
					<td>
						<input type="radio" name="gender" class="form_table_row_input_radio" value="1">Male
					    <input type="radio" name="gender" class="form_table_row_input_radio" value="0">Female
					</td>
				</tr>

				<tr class="form_table_row">
					<td class="form_table_row_description">Contact Address</td>
					<td><input type="text" name="address_one" placeholder="address line one" size="40" class="form_table_row_input"></td>
				</tr>

				<tr class="form_table_row">
					<td class="form_table_row_description"></td>
					<td><input type="text" name="address_two" placeholder="address line two" size="40" class="form_table_row_input"></td>
				</tr>

				<tr class="form_table_row">
					<td class="form_table_row_description"></td>
					<td><input type="text" name="address_three" placeholder="address line three" size="40" class="form_table_row_input"></td>
				</tr>

				<tr class="form_table_row">
					<td class="form_table_row_description">Contact no.</td>
					<td>
						<input type="text" name="telephone" placeholder="telephone" size="15" class="form_table_row_input">
						<input type="text" name="mobile" placeholder="mobile" size="15" class="form_table_row_input">
					</td>
				</tr>

				<tr class="form_table_row">
					<td class="form_table_row_description">Email</td>
					<td><input type="text" name="email" placeholder="email" size="40" class="form_table_row_input"></td>
				</tr>

				<tr class="form_table_row">
					<td class="form_table_row_description">Usename</td>
					<td><input type="text" name="username" placeholder="username" size="40" class="form_table_row_input"></td>
				</tr>

				<tr class="form_table_row">
					<td class="form_table_row_description">Password</td>
					<td>
						<input type="password" name="password" placeholder="password" size="15" class="form_table_row_input">
						<input type="password" name="cpassword" placeholder="confirm" size="15" class="form_table_row_input">
					</td>
				</tr>

				<tr class="form_table_row">
					<td class="form_table_row_description"></td>
					<td>
						<button type="submit" name="register" class="button button1" style="margin-left: 10px;">Register</button>						
					</td>
				</tr>							
			</table>
		</form>		
	</div>
</body>
</html>