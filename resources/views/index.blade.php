<!DOCTYPE html>
<html>
<head>
	<title>Digimons - @yield('judul')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body class="font">
	<div class="header">
		<div class="container">
			<p style="font-size: 25px">Digimon Masters - DigiDex</p>
			<p>@yield('judul')</p>
		</div>
	</div>
	<ul class="sidenav">
		<div class="container">
			<li><a href="digimons">List</a></li>
			<li><a href="shardscalculations">Kalkulasi</a></li>
			<li><a href="abo ut">Tentang</a></li>
		</div>
	</ul>

	@yield('content')

	<footer>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script type="text/javascript">
		var f1 = 10
		var f2 = 20
		var f3 = 70
		var temporary
			$("#devolution").on('change', function() {
				var devolutionId = $(this).val();
				 // AJAX request 
         $.ajax({
           url: 'http://127.0.0.1/test/evolutionList/'+devolutionId,
           type: 'GET',
           dataType: 'json',
           success: function(response){

						 $("#evolution").empty();
							$("#calculated").val('');
						 
						 if(response.f3 === undefined && response.f2 === undefined && response.f1 === undefined) {
							$("#evolution").append($('<option>', {
                            text : "Digimon Akhir"
                        }))
							$("#evolution").append($('<option>', {
                            value: response.f4,
														id:Object.keys(response)[0],
                            text : response.f4
                        }))
							$("#calculated").val(f3)
							temporary = f3
           }
						else if(response.f2 === undefined && response.f1 === undefined) {
							$("#calculated").val(f2)
							temporary = f2
														$("#evolution").append($('<option>', {
                            text : "Digimon Akhir"
                        }))
							$("#evolution").append($('<option>', {
                            value: response.f3,
														id:Object.keys(response)[0],
                            text : response.f3
                        }))
							$("#evolution").append($('<option>', {
                            value: response.f4,
														id:Object.keys(response)[1],
                            text : response.f4
                        }))
           }
						else if(response.f1 === undefined) {
							$("#calculated").val(f1)
							temporary = f1
														$("#evolution").append($('<option>', {
                            text : "Digimon Akhir"
                        }))
							$("#evolution").append($('<option>', {
                            value: response.f2,
														id:Object.keys(response)[0],
                            text : response.f2
                        }))
							$("#evolution").append($('<option>', {
                            value: response.f3,
														id:Object.keys(response)[1],
                            text : response.f3
                        }))
							$("#evolution").append($('<option>', {
                            value: response.f4,
														id:Object.keys(response)[2],
                            text : response.f4
                        }))
           }
						
					 },
					 error: function(){
							$("#evolution").empty();
							$("#calculated").val('');
					 }
        })
				
			})

			$("#evolution").on('change', function() {


	 if($(this).children(":selected").attr('id') === 'f2')
{
var nambah = parseInt(temporary) + 20
console.log($("#calculated").val(nambah) )

}
	else if($(this).children(":selected").attr('id') === 'f3'){
		if(temporary === f1){
var nambah = parseInt(temporary) + 90
console.log($("#calculated").val(nambah) )
} else if(temporary === f2) {
	var nambah = parseInt(temporary) + 70
console.log($("#calculated").val(nambah) )
}
	}
 else if($(this).children(":selected").attr('id') === 'f4'){
	 		if(temporary === f1){
var nambah = parseInt(temporary) + 340
console.log($("#calculated").val(nambah) )
} else if(temporary === f2) {
	var nambah = parseInt(temporary) + 320
console.log($("#calculated").val(nambah) )
} else if(temporary === f3) {
var nambah = parseInt(temporary) + 250
console.log($("#calculated").val(nambah) )
}} else {
	$("#calculated").prev().val()
}



			})

		</script>
		<p>Footer</p>
	</footer>
</body>
</html>
