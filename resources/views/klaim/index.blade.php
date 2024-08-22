@extends('master')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>

@endif

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Klaim Data</b></div>
		</div>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col col-md-4 py-2">
				<form method="post" action="{{ route('klaim.integrasi') }}">
				@csrf
				@method('POST')
					<a href="{{ route('klaim.create') }}" class="btn btn-primary btn-sm">Add</a>
					<a href="{{ route('klaim.lampiran') }}" class="btn btn-success btn-sm">Tampilkan Data</a>
					<input type="submit" class="btn btn-warning btn-sm" value="Integrasi" />
				</form>
			</div>
		</div>

		<table class="table table-bordered">
			<tr>
				<th>Lob</th>
				<th>Penyebab Klaim</th>
				<th>Jumlah Nasabah</th>
				<th>Beban Klaim</th>
				<th>Action</th>
			</tr>
			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>
						<td>{{ $row->lob }}</td>
						<td>{{ $row->penyebab_klaim }}</td>
						<td>{{ $row->jumlah_nasabah }}</td>
						<td>{{ $row->beban_klaim }}</td>
						<td>
							<form method="post" action="{{ route('klaim.destroy', $row->id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('klaim.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
								<input type="submit" class="btn btn-danger btn-sm" value="Delete" />
							</form>
							
						</td>
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