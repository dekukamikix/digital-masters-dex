@extends('index')

@section('judul', 'Shards Calculations')
@section('content')

<div class="content">
	<div class="container" style="padding-top: 10px">
		<div class="form-group">
			<div class="row">
				<div class="col-sm-4">
					<label for="devolution">Pilih Digimon awal :</label>
					<select name="devolution" id="devolution" class="form-control">
						<option selected>Digimon awal</option>
						@foreach($evo_digi as $devo)
						<option value="{{$devo->f1}}" id="f1">{{$devo->f1}}</option>
						<option value="{{$devo->f2}}" id="f2">{{$devo->f2}}</option>
						<option value="{{$devo->f3}}">{{$devo->f3}}</option>
						
						@endforeach
					</select>
					<br>
					<label for="evolution">Pilih Digimon yang diinginkan :</label>
					<select name="evolution" id="evolution" class="form-control">
						<option selected>Pilih digimon awal dahulu...</option>
					</select>
					<br><br>
					<label for="calculated">Shard yang dibutuhkan :</label>
					<input id="calculated" readonly class="form-control">
				</div>
			</div>
		</div>
	</div>
</div>

@endsection