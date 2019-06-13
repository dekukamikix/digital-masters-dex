@extends('index')

@section('judul', 'List Digimon')
@section('content')
	<div class="content" id="main">
		<div class="container" style="padding-top: 10px;">
		<table id="table" class="table table-hover" style="cursor: pointer; border-collapse: collapse; width: 50%">
			<tr>
				<th>Nama Digimon</th>
				<th>Bintang</th>
				<th>Kepingan</th>
				<th>Form</th>
				<th>Potensial</th>
			</tr>
			@foreach($digimons as $digi)
			<tr class="clickable-row" data-href="/digital-masters-dex/skilldata/{{ $digi->id_digimon }}">
				<td>{{ $digi->nama_digimon }}</td>
				<td>{{ $digi->star }}</td>
				<td>{{ $digi->shard }}</td>
				<td>{{ $digi->form_digimon }}</td>
				<td>{{ $digi->potential }}</td> 
			</tr>
			@endforeach
		</table>
		</div>
	</div>
@endsection

