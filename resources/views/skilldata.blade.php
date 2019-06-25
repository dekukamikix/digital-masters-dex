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
							<h6 class="card-subtitle mb-2 text-muted"><small>Skill 1</small></h6>
							<p class="card-text"><small>{{ $skilldata->s1_info }}</small></p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">{{ $skilldata->s2 }}</h5>
							<h6 class="card-subtitle mb-2 text-muted"><small>Skill 2</small></h6>
							<p class="card-text"><small>{{ $skilldata->s2_info }}</small></p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">{{ $skilldata->s3 }}</h5>
							<h6 class="card-subtitle mb-2 text-muted"><small>Skill 3</small></h6>
							<p class="card-text"><small>{{ $skilldata->s3_info }}</small></p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">{{ $skilldata->s4 }}</h5>
							<h6 class="card-subtitle mb-2 text-muted"><small>Skill 4</small></h6>
							<p class="card-text"><small>{{ $skilldata->s4_info }}</small></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<div class="container" style="padding-top: 10px">
			<h4>Soul data for {{ $skilldata->digimon }} :</h4>
			<div class="row">
				<div class="col">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">{{ $soulData->soul1 }}</h5>
							<h6 class="card-subtitle mb-2 text-muted"><small>Soul 1</small></h6>
							<p class="card-text"><small>{{ $soulData->soul1_info }}</small></p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">{{ $soulData->soul2 }}</h5>
							<h6 class="card-subtitle mb-2 text-muted"><small>Soul 2</small></h6>
							<p class="card-text"><small>{{ $soulData->soul2_info }}</small></p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">{{ $soulData->soul3 }}</h5>
							<h6 class="card-subtitle mb-2 text-muted"><small>Soul 3</small></h6>
							<p class="card-text"><small>{{ $soulData->soul3_info }}</small></p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">{{ $soulData->soul4 }}</h5>
							<h6 class="card-subtitle mb-2 text-muted"><small>Soul 4</small></h6>
							<p class="card-text"><small>{{ $soulData->soul4_info }}</small></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection