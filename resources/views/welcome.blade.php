<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>CRUD</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style type="text/css">


.a{
	
	padding:20px;
	font-size:50px;
	font-family:"FS Meridan";
	
}
.row{
	padding:15px;
}



</style>
</head>
<body>
	<div class="container">
	
	<h3 class="a text-center">Create,Read,Update And Delete</h3>
	<div class="row">
  <div class="col-sm-8">
    <div class="card">
	<div class="card-header">
    All Student
	@if(session('update'))
	
	<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('update')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@if(session('Delete'))
	
	<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('Delete')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
  </div>
      <div class="card-body">
        <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Sl No.</th>
      <th scope="col">Name</th>
      <th scope="col">Department</th>
      <th scope="col">University Id</th>
    </tr>
  </thead>
  <tbody>
  @php($i=1)
  @foreach($student as $res)
    <tr>
      <th scope="row">{{$i++}}</th>
	  <td>{{$res->name}}</td>
	  <td>{{$res->department}}</td>
	  <td>{{$res->uid}}</td>
	  <td>
	  <a href="{{url('stuent/edit/'.$res->id)}}" class="btn btn-sm btn-primary">Edit</a>
	  <a href="{{url('stuent/delete/'.$res->id)}}" onclick="confirm('Are you confirm to delete')" class="btn btn-sm btn-danger">Delete</a>
	  </td>
    </tr>
    @endforeach
  </tbody>
</table>

      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
	 <div class="card-header">
    Add New Student
	@if(session('success'))
	
	<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('success')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
  </div>
      <div class="card-body">
        <form action="{{url('stuent/adddata')}}" method="POST">
		@csrf
          <div class="form-group">
		  <label for="">Name</label>
		  <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Your Name">
		  @error('name')
		  <strong class="text-danger">{{$message}}</strong>
		  @enderror
		  </div>
		  <div class="form-group">
		  <label for="">Department</label>
		  <input type="text" name="dep" class="form-control @error('dep') is-invalid @enderror" placeholder="Enter Your Department">
		   @error('dep')
		  <strong class="text-danger">{{$message}}</strong>
		  @enderror
		  </div>
		  <div class="form-group">
		  <label for="">University Id</label>
		  <input type="text" name="uid" class="form-control @error('uid') is-invalid @enderror" placeholder="Enter Your University Id">
		   @error('uid')
		  <strong class="text-danger">{{$message}}</strong>
		  @enderror
		  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
    </div>
  </div>
</div>
	
	
	
	
	
	
	
	
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>