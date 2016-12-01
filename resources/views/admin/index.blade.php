
@extends('layouts.app')

@section('content')

<script href="{{ URL::asset('css/index.css') }}"></script>


<div class="span7">   
<div class="widget stacked widget-table action-table">
    				
				<div class="widget-header">
					<i class="icon-th-list"></i>
					<h3>Liste des demandes</h3>
				</div> <!-- /widget-header -->
				
				<div class="widget-content">
					
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Id</th>
								<th>Nom</th>
								<th>Demandes</th>
								<th class="td-actions"></th>
								@foreach($helpasks as $helpask)
								<tr>
									<td>{{ $helpask->id }}</td>
									<td>{{ $helpask->name }}</td>
									<td>{{ $helpask->ask }}</td>
									<td class="td-actions">
									<a href="javascript:;" class="btn btn-small btn-primary">Affecter &agrave
										<i class="btn-icon-only icon-ok"></i>										
									</a>
									
									<a href="javascript:;" class="btn btn-small">
										<i class="btn-icon-only icon-remove"></i>										
									</a>
								</td>
									</td>
								</tr>
							@endforeach
							</tr>
						</thead>
					</table>
					
				</div> 
			
			</div> 
            </div>
@endsection