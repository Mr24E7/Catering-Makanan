@extends('FrontEnd.master')

@section('title')
    Contact Information
@endsection

@section('content')


<!-- breadcrumb -->
	<div class="container">
		<ol class="breadcrumb w3l-crumbs">
			<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
			<li class="active">Contact Us</li>
		</ol>
	</div>
	<!-- //breadcrumb -->
	<!-- contact -->
	<div id="contact" class="contact cd-section">
		<div class="container">
			<h3 class="w3ls-title">Contact us</h3>
			<p class="w3lsorder-text">For any queries or to request a quotation or proposal, please get in touch with us !!!! </p>
			<div class="contact-row agileits-w3layouts">
				<div class="col-xs-6 col-sm-6 contact-w3lsleft">
					<div class="contact-grid agileits">
						<h4>Hi! Please help us to serve you better by letting us know some basic details about your event. These are information that you will need to tell us eventually but informing them to us in advance helps us prepare and serve you better !!!</h4><br><br>

                            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
                        <form action="{{ route('contact_show') }}" method="post">
                            @csrf
							<input type="text" name="name" placeholder="Name" required="">
							<input type="email" name="email" placeholder="Email" required="">
							<input type="text" name="phone_number" placeholder="Phone Number" required="">
							<textarea name="message" placeholder="message..." required=""></textarea>
							<input type="submit" value="Submit" >
						</form>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 contact-w3lsright">
					<h6><span>O F C S M S </span>You can also contact us the following ways: </h6>
					<div class="address-row">
						<div class="col-xs-2 address-left">
							<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
						</div>
						<div class="col-xs-10 address-right">
							<h5>Visit Us</h5>
							<p>Banjarmasin, South Borneo, Indonesia </p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="address-row w3-agileits">
						<div class="col-xs-2 address-left">
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						</div>
						<div class="col-xs-10 address-right">
							<h5>Mail Us</h5>
							<p><a href="mailto:info@example.com"> ofcsms.2010817210024@mhs.ulm.ac.id</a></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="address-row">
						<div class="col-xs-2 address-left">
							<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
						</div>
						<div class="col-xs-10 address-right">
							<h5>Call Us</h5>
							<p>+62 898-134-612</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- map -->
		<div class="map agileits">
           <iframe src="https://www.google.com/search?q=banjarmasin+google+map&rlz=1C1ONGR_enID1001ID1001&oq=banjarmasin+g&aqs=chrome.3.69i57j0i512l3j46i512j0i15i22i30j0i22i30l4.10950j0j7&sourceid=chrome&ie=UTF-8#" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

			{{-- <iframe src="https://www.google.com/search?q=banjarmasin+google+map&rlz=1C1ONGR_enID1001ID1001&oq=banjarmasin+g&aqs=chrome.3.69i57j0i512l3j46i512j0i15i22i30j0i22i30l4.10950j0j7&sourceid=chrome&ie=UTF-8#"></iframe> --}}

            {{-- <iframe width="300" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/search?q=banjarmasin+google+map&rlz=1C1ONGR_enID1001ID1001&oq=banjarmasin+g&aqs=chrome.3.69i57j0i512l3j46i512j0i15i22i30j0i22i30l4.10950j0j7&sourceid=chrome&ie=UTF-8#" style="border:1px solid #000;"></iframe><a href="https://www.google.com/search?q=banjarmasin+google+map&rlz=1C1ONGR_enID1001ID1001&oq=banjarmasin+g&aqs=chrome.3.69i57j0i512l3j46i512j0i15i22i30j0i22i30l4.10950j0j7&sourceid=chrome&ie=UTF-8#" title="google satellite map of Banjarmasin">Banjarmasin google map</a> --}}
		</div>
		<!-- //map -->
	</div>
	<!-- //contact -->


    @endsection
