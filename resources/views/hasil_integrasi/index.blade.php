@extends('master')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Hasil Integrasi</b></div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Lob</th>
				<th>Penyebab Klaim</th>
				<th>Periode</th>
				<th>Nilai Beban Klaim</th>
			</tr>
			@if(count($data) > 0)

				@foreach($data as $row)
					<tr>
						<td>{{ $row->lob }}</td>
						<td>{{ $row->penyebab_klaim }}</td>
						<td>{{ date('M-Y', strtotime($row->periode)); }}</td>
						<td>{{ $row->nilai_beban }}</td>
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