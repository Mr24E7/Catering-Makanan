@extends('FrontEnd.master')

@section('title')
   About Information
@endsection

@section('content')


<!-- breadcrumb -->
	<div class="container">
		<ol class="breadcrumb w3l-crumbs">
			<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
			<li class="active">About Us</li>
		</ol>
	</div>
	<!-- //breadcrumb -->
	<!--  about-page -->
	<div class="about">
		<div class="container ">
			<h3 class="w3ls-title w3ls-title1">About Us</h3>
			<div class="about-text">
Tutorial run this project on your computer
1. Clone this repo (https://github.com/Mr24E7/Catering-Makanan.git) or Download ZIP (don't forget to extract)
2. Go to your localhost/phpmyadmin/ and make database name bookutu
3. Open Visual Studio Code and XAMPP (Start Apache and MySQL)
4. Open the folder on VSC
5. Run terminal
6. Type "php artisan migrate"
7. Go to your localhost/phpmyadmin/
8. Delete table book in database bookutu
9. Select import in phpmyadmin
10. Choose file: books.sql
11. Then click go
12. Back to visual studio code and run the terminal
13. Type "php artisan server"
14. Go to browser and type 127.0.0.1
15. First, make account and login.
16. End

Website ini dibuat menggunakan
1. Web Framework: Laravel
2. Javascript Framework: OWL Carousel dan jQuery
3. UI Framework: Bootstrap

Tugas ini dibuat oleh:
1. Zhia Amirul Mukminin dan 
2. Muhammad Ridha
					Untuk menjadi mitra bagi klien kami dengan integritas tertinggi, perhatian terhadap detail, praktik, dan standar, dengan tujuan akhir melebihi harapan klien kami dan tamu mereka</p>
				<div class="ftr-toprow">
					<div class="col-md-4 ftr-top-grids">
						<div class="ftr-top-left">
							<i class="fa fa-truck" aria-hidden="true"></i>
						</div>
						<div class="ftr-top-right">
							<h4>Procurement from Reputed Brands</h4>
							<p></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 ftr-top-grids">
						<div class="ftr-top-left">
							<i class="fa fa-user" aria-hidden="true"></i>
						</div>
						<div class="ftr-top-right">
							<h4>The STAT Mission</h4>
							<p>We’re on a mission to solve the STAT problem.<br>
S: Service. Bring professionalism to this sector.<br>
T: Taste. Food has to taste outstanding every time.<br>
A: Accuracy. No item can be missed or mixed.<br>
T: Timeliness. Being late cannot be an excuse. </p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 ftr-top-grids">
						<div class="ftr-top-left">
							<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
						</div>
						<div class="ftr-top-right">
							<h4>Consistently Outstanding Taste</h4>
							<p></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="history">
				<h3 class="w3ls-title">Welcome to O F C S M S in Banjarmasin</h3>
				<p>Apakah Anda mencari Layanan Katering Makanan profesional untuk acara perusahaan / makan siang kantor, pesta ulang tahun atau acara lainnya di Banjarmasin?
					O F C S M S adalah solusi terbaik untuk Anda</p>
				<h3 class="w3ls-title">Experience and Location</h3>
				<p>Untuk keberhasilan acara Anda, kami memastikan makanan berkualitas terbaik, layanan cepat saji, dan pengaturan prasmanan yang canggih, memungkinkan Anda untuk fokus pada aspek lain dari acara tersebut.</p>
			</div>
		</div>
	</div>
	<!-- //about-page -->



 @endsection
