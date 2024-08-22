@extends('master')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Log Aktivitas</b></div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Action</th>
				<th>Tanggal</th>
				<th>Deskripsi</th>
			</tr>
			@if(count($data) > 0)
				@foreach($data as $row)
					<tr>
						<td>{{ $row->action }}</td>
						<td>{{ $row->created_at }}</td>
						<td>{{ $row->description }}</td>
					</tr>
				@endforeach

			@else
				<tr>
					<td colspan="5" class="text-center">No Data Found</td>
				</tr>
			@endif
		</table>
	</div>
</div>

@endsection