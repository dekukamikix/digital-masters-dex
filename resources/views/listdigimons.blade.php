@extends('index')

@section('judul', 'List Digimon')
@section('content')
	<div class="content">
		<table style="border-collapse: collapse; width: 50%">
			<tr>
				<th>Nama Digimon</th>
				<th>Bintang</th>
				<th>Kepingan</th>
				<th>Form</th>
				<th>Potensial</th>
			</tr>
			@foreach($digimons as $digi)
			<tr>
				<td>{{ $digi->nama_digimon }}</td>
				<td>{{ $digi->star }}</td>
				<td>{{ $digi->shard }}</td>
				<td>{{ $digi->form_digimon }}</td>
				<td>{{ $digi->potential }}</td> 
			</tr>
			@endforeach
		</table>
	</div>
@endsection

