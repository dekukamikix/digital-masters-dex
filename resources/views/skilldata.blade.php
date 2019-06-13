@extends('index')

@section('judul', 'Skill Data')
@section('content')
	<div class="content" id="main">
		<div class="container" style="padding-top: 10px">
			<h4>Skill data for {{ $skilldata->digimon }} :</h4>
			<div class="row">
				<div class="col">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">{{ $skilldata->s1 }}</h5>
							<h6 class="card-subtitle mb-2 text-muted">Skill 1</h6>
							<p class="card-text">{{ $skilldata->s1_info }}</p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">{{ $skilldata->s2 }}</h5>
							<h6 class="card-subtitle mb-2 text-muted">Skill 2</h6>
							<p class="card-text">{{ $skilldata->s2_info }}</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">{{ $skilldata->s3 }}</h5>
							<h6 class="card-subtitle mb-2 text-muted">Skill 31</h6>
							<p class="card-text">{{ $skilldata->s3_info }}</p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">{{ $skilldata->s4 }}</h5>
							<h6 class="card-subtitle mb-2 text-muted">Skill 4</h6>
							<p class="card-text">{{ $skilldata->s4_info }}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection