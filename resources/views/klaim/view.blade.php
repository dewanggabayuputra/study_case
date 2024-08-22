@extends('master')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>View Klaim Data</b></div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Lob</th>
				<th>Penyebab Klaim</th>
				<th>Jumlah Nasabah</th>
				<th>Beban Klaim</th>
			</tr>
			@if(count($data) > 0)
                @php
                $id = 0;
                $total_nasabah = 0;
                $total_beban_klaim = 0;
                @endphp
                @for ($i = 0; $i < count($data); $i++)
                    @if($i+1 != count($data))
                        @if($data[$i+1]->lob == $data[$i]->lob)
                            <tr>
                                <td>{{ $data[$i]->lob }}</td>
                                <td>{{ $data[$i]->penyebab_klaim }}</td>
                                <td>{{ $data[$i]->total_nasabah }}</td>
                                <td>{{ $data[$i]->total_beban_klaim }}</td>
                                
                            </tr>
                        @else
                            <tr>
                                <td>{{ $data[$i]->lob }}</td>
                                <td>{{ $data[$i]->penyebab_klaim }}</td>
                                <td>{{ $data[$i]->total_nasabah }}</td>
                                <td>{{ $data[$i]->total_beban_klaim }}</td>
                                
                            </tr>
                            <tr style="background-color: #0e86d4;">
                                <td colspan='2'>Subtotal {{ $data[$i]->lob }}</td>
                                <td>{{ $sum[$id]->total_nasabah }}</td>
                                <td>{{ $sum[$id]->total_beban_klaim }}</td>
                            </tr>
                            @php
                            $total_nasabah = $total_nasabah + $sum[$id]->total_nasabah;
                            $total_beban_klaim = $total_beban_klaim + $sum[$id]->total_beban_klaim;
                            $id++;
                            @endphp
                        @endif
                    @endif           
                @endfor
                <tr style="background-color: #808080;">
					<td colspan="2">Total</td>
					<td>{{ $total_nasabah }}</td>
					<td>{{ $total_beban_klaim }}</td>
				</tr>
			@else
				<tr>
					<td colspan="5" class="text-center">No Data Found</td>
				</tr>
			@endif
		</table>
	</div>
</div>

@endsection