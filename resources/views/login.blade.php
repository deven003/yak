@extends('layouts.app')
@section('content')

<section class="hero is-fullheigh">
	<div class="hero-body">
		<div class="container">
			<div class="columns is-vcentered">
				<div class="column is-4 is-offset-4">
					<h1 class="title">
						Login
					</h1>
					<div class="box">
					
					<form name="frmLogin" action="{{ url('dashboard') }}">

						<div class="field">
						  	<label class="label">Username</label>
						  	<p class="control">
						    	<input class="input" name="username" type="text" placeholder="Username">
						  	</p>
						</div>

						<div class="field">
						  	<label class="label">Password</label>						  
						  	<p class="control">
						  		<input class="input" name="username" type="text" placeholder="Username">
						  	</p>
						</div>						
				
						<div class="field is-grouped">
							<p class="control">
							    <button class="button is-primary">Submit</button>
							</p>
						</div>
					
					</form>

					</div>
					
				</div>
			</div>
		</div>
	</div>

</section>



@endsection