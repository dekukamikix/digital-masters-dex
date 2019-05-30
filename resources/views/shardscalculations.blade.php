@extends('index')

@section('judul', 'Shards Calculations')
@section('content')

<div class="content">
	<p>Pilih Digimon awal :</p>
	<select name="devolution" id="devolution">
		<option value="">Digimon awal</option>
		@foreach($evo_digi as $devo)
		<option value="{{$devo->f1}}" id="f1">{{$devo->f1}}</option>
		<option value="{{$devo->f2}}" id="f2">{{$devo->f2}}</option>
		<option value="{{$devo->f3}}">{{$devo->f3}}</option>
		
		@endforeach
	</select>
	<br><br>
	<p>Pilih Digimon yang diinginkan :</p>
	<select name="evolution" id="evolution">
	</select>
	<br><br>
	<input id="calculated">
</div>

@endsection