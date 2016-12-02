 @extends('layouts.app') @section('content')

<link href="{{ URL::asset('css/edit.css') }}" rel="stylesheet">

<div class="span3">
	<h2>Demande &agrave affecter</h2>
	<form method="POST"  action="{{ route('admin.update',[$helpask->id])}}">
		<input type="hidden" name="_method" value="put"/> 
		 {{ csrf_field() }}
		<label>Id :</label><input
			type="text" disabled class="span3" value={{$helpask->id}}><br /> <br />
		<label>Nom :</label><input type="text" disabled class="span3"
			value={{$helpask->name}}><br /> <br /> <label>Adresse email :</label><input
			type="email" disabled class="span3" value={{$helpask->email}}><br />
		<br /> <label>Telephone :</label><input type="text" disabled
			class="span3" value={{$helpask->tel}}><br /> <br /> <label>Demande</label><input
			type="password" disabled class="span3" value={{$helpask->ask}}><br />
		<br />

		<fieldset>
			<br /> <br />
			<div class="form-group">
				<label>Select Basic</label>
				<div class="col-md-4">
					<select id="selectbasic" name="user_id" class="form-control">
						@foreach($users as $user)
							<option value="{{$user->id}}">{{$user->name}}</option> 
						@endforeach
					</select>
				</div>
			</div>

		</fieldset>
		
		<br/>
		<button class="btn btn-primary" type="submit" value="Submit">Valider l'affectation</button>
	</form>
</div>
@endsection
