@extends('master')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
	</ul>
</div>

@endif

<div class="card">
	<div class="card-header">Add Klaim</div>
	<div class="card-body">
		<form method="post" action="{{ route('klaim.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Lob</label>
				<div class="col-sm-10">
					<select name="lob" class="form-control">
						@foreach ($lob_list as $value)
							<option value="{{ $value }}">{{ $value }}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Penyebab Klaim</label>
				<div class="col-sm-10">
					<select name="penyebab_klaim" class="form-control">
						@foreach ($penyebab_klaim_list as $value)
							<option value="{{ $value }}">{{ $value }}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Jumlah Nasabah</label>
				<div class="col-sm-10">
					<input type="number" name="jumlah_nasabah" class="form-control" />
				</div>
			</div>
            <div class="row mb-4">
				<label class="col-sm-2 col-label-form">Beban Klaim</label>
				<div class="col-sm-10">
					<input type="number" name="beban_klaim" class="form-control" />
				</div>
			</div>
			<div class="text-left">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')