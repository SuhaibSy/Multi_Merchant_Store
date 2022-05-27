@extends('layouts.appAdmin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h5>Create Store</h5>
                </div>

                <div class="card-body">
                    <form action="{{route('admin.store.save')}}" method="POST">
                        @csrf

                        <div class="row justify-content-between">
                            <div class="form-group col-sm-6">
                                <label for="store_name" class="form-label">Store Name</label> <br />
                                <input type="text" class="col-sm-6 form-control" name="store_name" id="store_name" value="{{old('store_name')}}"/>

                                @error('store_name')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="first_name" class="form-label">First Name</label> <br />
                                <input type="text" class="col-sm-6 form-control" name="first_name" id="first_name" value="{{old('first_name')}}"/>

                                @error('first_name')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="form-group col-sm-6">
                                <label for="last_name" class="form-label">Last Name</label> <br />
                                <input type="text" class="col-sm-6 form-control" name="last_name" id="last_name" value="{{old('last_name')}}"/>

                                @error('last_name')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="phone_number" class="form-label">Phone Number</label> <br />
                                <input type="text" class="col-sm-6 form-control" name="phone_number" id="phone_number" value="{{old('phone_number')}}"/>

                                @error('phone_number')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="form-group col-sm-6">
                                <label for="email" class="form-label">Email</label> <br />
                                <input type="text" class="col-sm-6 form-control" name="email" id="email" value="{{old('email')}}"/>

                                @error('email')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group col-sm-6">
                                <label for="password" class="form-label">Password</label> <br />
                                <input type="password" class="col-sm-6 form-control" name="password" id="password" value="{{old('password')}}"/>

                                @error('password')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="form-group col-sm-12">
                                <label for="description" class="form-label">Description</label> <br />
                                <textarea class="form-control col-sm-12" name="description" id="description" rows="3">{{old('description')}}</textarea>

                                @error('description')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-sm-12">
                            <label for="pac-input" class="form-label">Address & Search</label> <br />
                            <input class="form-control col-sm-12" id="pac-input" name="address" value="{{old('address')}}">

                            @error('address')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div id="map" style="height: 500px; width: 975px;"></div>


                        <div class="card-footer mt-5 p-0">
                            <button type="submit" class="p-2 border-radius-btn me-3 col-12 col-md-2 text-light" style="background-image: linear-gradient(195deg, #EC407A 0%, #D81B60 100%); border:none">Save</button>
                            <button type="reset" class="btn-light p-2 border-radius-btn col-12 col-md-2">Clear</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{asset('asset/js/map.js')}}"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKZAuxH9xTzD2DLY2nKSPKrgRi2_y0ejs&libraries=places&callback=initAutocomplete&language=ar&region=EG
         async defer"></script>
@endpush
