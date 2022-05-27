<!DOCTYPE html>
<html>
<head> 
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head> 
<body  class="container w-50 mt-5 bg-secondary">
    <h1 class=" m-5 container"><i class="bi bi-plus-circle-fill"></i> the page is Edit section</h1>
    <div class="pull-right">
      <a class="btn btn-primary" href="{{ route('section.index') }}" enctype="multipart/form-data"> Back</a>
  </div>
    <form  action="{{ route('section.update',$section->id) }}" method="POST" enctype="multipart/form-data" class="container">
      @csrf 
      @method('PUT')
        <div class="form-group row">
          <label  class="col-sm-2 col-form-label"><i class="bi bi-person-workspace"></i> Name</label>
          <div class="col-sm-10">
            <input type="text" name="Name"class="form-control" id="t" value="{{ $section->Name }}">
          </div>
        </div>
        
        
            <div class="form-group">
                <input type="file" name="Image"  required>
                @error('Image')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
               <img src="{{ Storage::url($section->Image) }}" width="200" height="200"/>
            </div>
             
           
              <div class="form-group row ">
                <button class="btn btn-dark" type="submit"> edit section</button>
              </div>
            
           
        </form>
        



    <script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{asset ('js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
</body>