@extends('index')
@section('judul', 'List Digimon')
@section('content')
<div class="content" id="main">
	<form style="padding-top: 10px;">
		<div class="container">
			<div class="card">
				<div class="card-body">
					<h5>Skill 1 :</h5>
					<div class="form-group">
						<label for="nama_s1">Nama Skill :</label>
						<input type="text" id="nama_s1" class="form-control" placeholder="Misal : Salamander Break">
					</div>
					<div class="form-group">
						<label for="info_s1">Detail Skill :</label>
						<textarea class="form-control" id="info_s1" rows="3"></textarea>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					<h5>Skill 2 :</h5>
					<div class="form-group">
						<label for="nama_s1">Nama Skill :</label>
						<input type="text" id="nama_s1" class="form-control" placeholder="Misal : Salamander Break">
					</div>
					<div class="form-group">
						<label for="info_s1">Detail Skill :</label>
						<textarea class="form-control" id="info_s1" rows="3"></textarea>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					<h5>Skill 3 :</h5>
					<div class="form-group">
						<label for="nama_s1">Nama Skill :</label>
						<input type="text" id="nama_s1" class="form-control" placeholder="Misal : Salamander Break">
					</div>
					<div class="form-group">
						<label for="info_s1">Detail Skill :</label>
						<textarea class="form-control" id="info_s1" rows="3"></textarea>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					<h5>Skill 4 :</h5>
					<div class="form-group">
						<label for="nama_s1">Nama Skill :</label>
						<input type="text" id="nama_s1" class="form-control" placeholder="Misal : Salamander Break">
					</div>
					<div class="form-group">
						<label for="info_s1">Detail Skill :</label>
						<textarea class="form-control" id="info_s1" rows="3"></textarea>
					</div>
				</div>
			</div><br>
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</form>
</div>



@endsection