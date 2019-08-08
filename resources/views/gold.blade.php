<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <base href="https://www.w3schools.com/"> -->
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<div class="header">
<nav class="navbar navbar-expand-md navbar-light sticky-top">
		<a class="navbar-branch" href="#">
			<h2>GOLFNEWSTV</h2>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" 
			data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="#">Upload file</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Lên lịch phát sóng</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Quản lí File phát</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Phân quyền</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="fa fa-user"></i> Admin 123456789  </a>
				</li>
			</ul>
		</div>
	
</nav>
</div>
<div class="container-fluid text-center">
    <div class="row">
    <div class="left col-md-2 col-xs-12">
    <h6 class="title">Thiết lập giờ phát sóng</h6>
    </div>
        <div class="right col-md-10 col-xs-12">
            <h5 class="title">Thiết lập giờ phát sóng</h5>
            <div class="table-responsive">
            <table class="table table-bordered">
    <thead>
      <tr>
        <th>Hole</th>
            @foreach($gold as $value)  
              <td>{{$value->id}}</td>
            @endforeach
            <td>Total</td>
            <td>Total2</td>
            <td>Total3</td>
            
      </tr>
      <tr>
        <th>Par</th>

            @foreach($gold as $value)
              <td>{{$value->par}}</td>
            @endforeach 

            <td><b>{{$sum}}</b></td>

            @if(isset($sumpar))
            <td><b>{{$sumpar}}</b></td>
            @endif

            @if(isset($sumpar1))
            <td><b>{{$sumpar1}}</b></td>
            @endif
            
           

           
            
            
      </tr>
       <th>Gross</th>

            @foreach($gold as $value)
              <td>{{$value->gross}}</td>
            @endforeach 

            <td><b>{{$sum2}}</b></td>

            @if(isset($sumgross))
            <td><b>{{$sumgross}}</b></td>
            @endif
            
            @if(isset($sumgross1))
            <td><b>{{$sumgross1}}</b></td>
            @endif
            
      </tr>


    </thead>
  </table>
  
        <div>
    <div>
</div>
</div>



</body>
</html>