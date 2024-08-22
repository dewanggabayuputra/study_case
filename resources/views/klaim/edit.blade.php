@extends('master')

@section('content')

<div class="card">
	<div class="card-header">Edit Klaim</div>
	<div class="card-body">
		<form method="post" action="{{ route('klaim.update', $klaim->id) }}" enctype="multipart/form-data">
			@csrf
            @method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Lob</label>
				<div class="col-sm-10">
					<select name="lob" class="form-control">
						@foreach ($lob_list as $value)
							<option value="{{ $value }}" {{ ($value == $klaim->lob) ? 'selected' : '' }}>{{ $value }}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Penyebab Klaim</label>
				<div class="col-sm-10">
					<select name="penyebab_klaim" class="form-control">
						@foreach ($penyebab_klaim_list as $value)
							<option value="{{ $value }}" {{ ($value == $klaim->penyebab_klaim) ? 'selected' : '' }}>{{ $value }}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Jumlah Nasabah</label>
				<div class="col-sm-10">
					<input type="number" name="jumlah_nasabah" class="form-control" value="{{ $klaim->jumlah_nasabah }}" />
				</div>
			</div>
            <div class="row mb-4">
				<label class="col-sm-2 col-label-form">Beban Klaim</label>
				<div class="col-sm-10">
					<input type="number" name="beban_klaim" class="form-control" value="{{ $klaim->beban_klaim }}" />
				</div>
			</div>
			<div class="text-left">
                <input type="hidden" name="id" value="{{ $klaim->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')