<!-- Confirmation Modal -->
<div class="modal fight fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModal" aria-hidden="true">
	<div class="modal-dialog modal-side modal-top-left" role="document">
		<div class="modal-content">
			<div class="modal-body text-center p-5">
				<img src="{{ asset('svg/received-icon.png') }}" class="d-block mx-auto">
				<h3>Awesome!</h3>
				<p class="card-text">
					I have received your message. Thank you for your time. I will response within 24 hours.
				</p>
				<button type="button" class="btn btn-warning btn-sm d-block w-100" data-dismiss="modal">Ok</button>
			</div>
		</div>
	</div>
</div>

<div class="d-none d-lg-none d-block">
	@if(count($errors) > 0)

	<input type="hidden" name="errorcontact" id="error-confirmation" value="1">
	<!-- Contact Modal -->
	<div class="modal fight fade" id="error-contact-modal" tabindex="-1" role="dialog" aria-labelledby="error-contact-modal" aria-hidden="true">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header red">
					<h5 class="modal-title white-text"><i class="fas fa-exclamation-triangle"></i> Error</h5>
					<button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					@foreach($errors->all() as $error)

					<p class="text-danger small">{{$error}}</p>

					@endforeach
				</div>
			</div>
		</div>
	</div>

	@endif
</div>


<div class="modal fight fade" id="contact-form-modal" tabindex="-1" role="dialog" aria-labelledby="contact-form-modal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<form  action="{{ route('messages.store') }}" method="POST">
					@csrf
					<h2 class="text-center">Let's talk!</h2>
					<div class="form-group">
						<input type="text" name="name" class="form-control" placeholder="Name">
					</div>
					<div class="form-group">
						<input type="text" name="contact" class="form-control" placeholder="Phone or email address">
					</div>
					<div class="form-group">
						<textarea  name="message" class="form-control" placeholder="Message"></textarea>
					</div>
					<button class="btn btn-submit w-100 btn-sm">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>