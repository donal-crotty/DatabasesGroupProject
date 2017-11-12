@extends('layouts.app') @extends('includes.header') @section('content')
<!-- Half Page Image Background Carousel Header -->

<!-- Page Content -->
<section>
	<div class="container">
		<div class="row">
            <div class="col-md-8">
                <div>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d38040.47224532392!2d-7.966524379235525!3d53.42323992866226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x485c49013e648c9f%3A0xdaf91a8d46bde380!2sAthlone%2C+Co.+Westmeath!5e0!3m2!1sen!2sie!4v1510335670661" width="600" height="450" frameborder="0" style="border:0" ></iframe>
                </div>
            </div>
			<div class="col-md-4">
				<div class="form-area">
					<form role="form">
						{{--  <br style="clear:both">  --}}
						{{--  <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>  --}}
						<div class="form-group">
							<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
						</div>
						<div class="form-group">
							<textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
							<span class="help-block">
								<p id="characterLeft" class="help-block ">You have reached the limit</p>
							</span>
						</div>

						<button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Submit Form</button>
					</form>
				</div>
			</div>
		</div>
	</div>


	</div>
	</div>
</section>
@endsection