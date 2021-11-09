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
			<form class="form-detail" action="/signup" method="post" role="form" id="myform">
				@csrf
				<div class="form-left">
					<h2>General Infomation</h2>
					<div class="form-row">
					</div>
					


					<div class="form-row">
						<input type="text" name="name" class="company" id="kota_lahir" placeholder="Nama" value="{{ old('nama_santri') }}"required>
						@error('name')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
					</div>

					<div class="form-row">
						<input type="text" name="kota_lhr" class="company" id="kota_lahir" placeholder="Kota lahir" value="{{ old('kota_lhr') }}" required>
						@error('kota_lhr')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
					</div>
					<div class="form-group">
						<div class="form-row form-row-3">
							{{-- <input type="text" name="tanggal_lahir" class="business" id="tanggal_lahir" placeholder="Tanggal lahir" required> --}}
							<input type="text" name="tgl_lhr" class="form-control" placeholder="Tanggal lahir" onfocus="(this.type='date')" required />
							@error('tgl_lhr')
							<div class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
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
				
				</div>
				<div class="form-right">
					<h2>Detail Information</h2>
					<div class="form-row">
						<input type="text" name="nama_ortu" class="street" id="ortu" placeholder="Nama Orang tua" value="{{ old('nama_ortu') }}"required>
						@error('nama_ortu')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
					</div>
					<div class="form-row">
						<input type="text" name="alamat_ortu" class="additional" id="alamat_ortu" placeholder="Alamat orang tua" value="{{ old('alamat_ortu') }}" required>
						@error('alamat_ortu')
						<div class="invalid-feedback">
						{{ $message }}
					</div>
					@enderror
					</div>
					
					<div class="form-row">
						<input type="text" name="email" class="company" id="email" placeholder="Email" value="{{ old('email') }}"required>
						@error('email')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
					</div>
					<div class="form-row">
						<input type="text" name="hp" class="company" id="no_hp" placeholder="Phone number" value="{{ old('hp') }}" required>
						@error('hp')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
					</div>

				
					<div class="form-row">
						<input type="password" name="password" id="password" class="input-text"  placeholder="Create password">
						@error('password')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
					</div>
					<div class="form-checkbox">
						<label class="container"><p>I do accept the <a href="#" class="text">Terms and Conditions</a> of your site.</p>
						  	<input type="checkbox" name="checkbox">
						  	<span class="checkmark"></span>
						</label>
					</div>
					<div class="form-row-last">
						{{-- <input type="submit" name="register" class="register" value="Register"> --}}
						<button type="submit" class="register" > Register</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>