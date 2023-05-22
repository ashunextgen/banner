<!DOCTYPE html>
<html>
<head>
	<title>banner</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>




	<div class="container">
		
		<form action="{{url('post_banner')}}" method="post" enctype="multipart/form-data">
			@csrf

			           @if(\Session::has('message'))
                        <div class="alert alert-success">{{\Session::get('message')}}</div>
                        @endif
  <div class="form-group">
    <label >Banner Image</label>
    <input type="file" class="form-control" id="banner_image" name="banner_image" >
     @error('banner_image')
     <span class="text-danger"  style="font-size:10px">{{$message}}</span>
      @enderror
    
  </div>
  <div class="mb-3 mt-3">
  <label for="exampleFormControlTextarea1" class="form-label">Discription</label>
  <textarea class="form-control" id="discription"  name="discription" rows="3"></textarea>
</div>
 @error('discription')
  <span class="text-danger"  style="font-size:10px">{{$message}}</span>
   @enderror
  



  <div class="form-group mt-3">
    <label >Office Image</label>
    <input type="file" class="form-control" id="office_image" name="office_image" >
     @error('office_image')
      <span class="text-danger"  style="font-size:10px">{{$message}}</span>
    @enderror
    
  </div>
  <div class="mb-3 mt-3">
  <label for="exampleFormControlTextarea1" class="form-label">Content</label>
  <textarea class="form-control" id="content"  name="content" rows="3"></textarea>
</div>
 @error('content')
                                    <span class="text-danger"  style="font-size:10px">{{$message}}</span>
                                    @enderror



  <button type="submit" class="btn btn-primary">Submit</button>
</form>
	</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>