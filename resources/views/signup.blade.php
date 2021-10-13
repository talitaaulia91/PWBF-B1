<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TPQ Al-Mubaroq || Signup</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body class="form-v10">
	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="/signin" method="get" id="myform">
				<div class="form-left">
					<h2>General Infomation</h2>
					<div class="form-row">
						<select name="role">
						    <option class="option" value="role" disabled selected hidden >Role</option>
						    <option class="option" value="businessman">Santri</option>
						    <option class="option" value="reporter">Pengajar</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="first_name" id="first_name" class="input-text" placeholder="First Name" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="last_name" id="last_name" class="input-text" placeholder="Last Name" required>
						</div>
					</div>
					<div class="form-row">

					</div>
					<div class="form-row">
						<input type="text" name="kota_lahir" class="company" id="kota_lahir" placeholder="Kota lahir" required>
					</div>
					<div class="form-group">
						<div class="form-row form-row-3">
							{{-- <input type="text" name="tanggal_lahir" class="business" id="tanggal_lahir" placeholder="Tanggal lahir" required> --}}
							<input type="text" class="form-control" placeholder="Tanggal lahir" value="" onfocus="(this.type='date')" required />
						</div>
						<div class="form-row form-row-4">
							<select name="gender">
							    <option value="gender" disabled selected hidden>Gender</option>
							    <option value="m">Male</option>
							    <option value="f">Female</option>
							</select>
							<span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
                           </span>
						</div>
					</div>
					<!-- <div class="form-row">
						<input type="text" name="email" class="company" id="email" placeholder="Email" required>
					</div>
					<div class="form-row">
						<input type="text" name="no_hp" class="company" id="no_hp" placeholder="Phone number" required>
					</div> -->
				</div>
				<div class="form-right">
					<h2>Detail Information</h2>
					<div class="form-row">
						<input type="text" name="ortu" class="street" id="ortu" placeholder="Nama Orang tua" required>
					</div>
					<div class="form-row">
						<input type="text" name="alamat_ortul" class="additional" id="alamat_ortu" placeholder="Alamat orang tua" required>
					</div>
					
					<div class="form-row">
						<input type="text" name="email" class="company" id="email" placeholder="Email" required>
					</div>
					<div class="form-row">
						<input type="text" name="no_hp" class="company" id="no_hp" placeholder="Phone number" required>
					</div>

					<!-- <div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="code" class="code" id="code" placeholder="Code +" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="phone" class="phone" id="phone" placeholder="Phone Number" required>
						</div>
					</div> -->
					<div class="form-row">
						<input type="text" name="password" id="password" class="input-text"  placeholder="Create password">
					</div>
					<div class="form-checkbox">
						<label class="container"><p>I do accept the <a href="#" class="text">Terms and Conditions</a> of your site.</p>
						  	<input type="checkbox" name="checkbox">
						  	<span class="checkmark"></span>
						</label>
					</div>
					<div class="form-row-last">
						<input type="submit" name="register" class="register" value="Register">
					</div>
				</div>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>