<!DOCTYPE html>
<html>
<head> 
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <style>

    #bt{font-size: large;
}

#m{
    width: 70px;
   background: transparent;
    color: rgb(0, 0, 0);
}
#m:hover{
    background-color: rgb(102, 124, 194);
}
#m:active{
    background-color: rgb(231, 0, 0);
}
#t{
    color:black;
}
body{
    background-color: rgb(175, 186, 221);
}
#rtm{
    background-color: dimgray;
    
}

  </style>
</head>
<body  >
    <div class="container">
        @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
@error('title')
      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
        <div class="alert alert-dark mt-4" role="alert">
            SECTION'S PAGE...!
       </div>
      <table class="table container float-left" style="width: 60%;">
         <thead> <tr> 
          {{-- <th scope="col" class="bg-secondary">#</th> --}}
              <th scope="col" class="bg-secondary">Id</th>
             <th scope="col" class="bg-secondary">Section's name</th>  
             <th scope="col" class="bg-secondary">image Section</th>
             <th scope="col" class="bg-secondary">Action</th>
          </tr>
        </thead>
        <tbody>
             @foreach ($section as $item )
            {{-- <th>{{++$i}}</th> --}}
            <tr>
            <td> {{ $item->id }} </td>
            <td> {{ $item->Name }} </td>
            <td><img src="{{ Storage::url($item->Image) }}" height="75" width="75" alt=""> </td>
            <td>
               {{-- <form method="POST" action="{{ route('section.destroy',$item->id) }}">
                <a  href="{{ route('section.edit',$item->id) }}" class=" btn btn-primary">Edit</a>
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger" >Delete </button>
              </form> --}}
              <form action="{{ route('section.destroy',$item->id) }}" method="POST">
    
                <a class="btn btn-primary" href="{{ route('section.edit',$item) }}">Edit</a>

                @csrf
                @method('DELETE')
  
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
               </td>
            </tr>
        @endforeach
                 
            </tbody>
        </table>
        {{-- {!! $sections->links() !!} --}}
        <form method="GET" action="{{ route('section.create') }}">
           <div class="alert alert-dark text-dark float-left "> <h5>ADD SECTION</h5></div>

              <button class="btn btn-danger text-light  " id="bt"> + </button></div>
           </div>
        </form>
    </div>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{asset ('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>