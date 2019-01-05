@if(Session::has('completed'))
		<div class="alert alert-success alert-dismissible fade in center">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<p><strong>{{Session::get('completed')}}</strong></p>
		</div>
@endif