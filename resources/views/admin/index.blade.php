 @extends('layouts.app') @section('content')

<link href="{{ URL::asset('css/index.css') }}" rel="stylesheet">

<div class="span7">
	<div class="widget stacked widget-table action-table">

		<div class="widget-header">
			<i class="icon-th-list"></i>
			<h3>Liste des demandes</h3>
		</div>
		<!-- /widget-header -->

		<div class="widget-content">

			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nom</th>
						<th>Demandes</th>
						<th class="td-actions"></th> @foreach($helpasks as $helpask)
					
					
					<tr>
						<td>{{ $helpask->id }}</td>
						<td>{{ $helpask->name }}</td>
						<td><strong>{{ $helpask->ask }}</strong></td>
						@if($helpask->user_id==NULL)
						<td class="td-actions"><a
							href="{{ route('admin.edit',[$helpask->id] )}}"
							class="btn btn-small btn-primary" style="background-color:#b90000" style="color:white">Affecter &agrave un responsable <i
								class="btn-icon-only icon-ok" ></i>
						</a> <a href="javascript:;" class="btn btn-small"> <i
								class="btn-icon-only icon-remove"></i>
						</a></td>
						</td> @else
						<td class="td-actions"><a disabled
							class="btn btn-small btn-primary" style="background-color:#1717ff" style="color:white">Trait&eacute par {{ $helpask->user->name}} <i
								class="btn-icon-only icon-ok"></i>
						</a> <a href="javascript:;" class="btn btn-small"> <i
								class="btn-icon-only icon-remove"></i>
						</a></td>
						</td> @endif
					</tr>
					@endforeach
					</tr>
				</thead>
			</table>

		</div>

	</div>
</div>
@endsection
