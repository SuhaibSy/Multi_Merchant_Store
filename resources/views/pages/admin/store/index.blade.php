@extends('layouts.appAdmin')

@section('content')
    <nav id="nav_path" aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="#">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Manage Stores</li>
        </ol>
        <h6 class="font-weight-bolder mb-0">Stores</h6>
    </nav>

    <div class="row mb-4">
        <!-- Table -->
        <div class="col-md-12 mb-md-0 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-6 col-7">
                            <h6>Stores</h6>

                            @if($message = session()->get('msg'))
                                <p class="text-success">{{$message}}</p>
                            @endif
                        </div>

                        <div class="col-lg-6 col-5 my-auto text-end">
                            <div class="dropdown float-lg-end pe-4">
                                <a class="cursor-pointer" href="{{route('admin.store.create')}}" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-plus text-secondary"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body px-0 pb-2">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Store name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">First Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">First Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone Number</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">State</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(!$users->isEmpty())
                                @foreach($users as $user)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm ps-2">{{$user->store->store_name}}</h6>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="align-middle text-left text-sm">
                                            <span class="text-xs font-weight-bold">{{$user->first_name}}</span>
                                        </td>

                                        <td class="align-middle text-left text-sm">
                                            <span class="text-xs font-weight-bold ps-3">{{$user->last_name}}</span>
                                        </td>

                                        <td class="align-middle text-left text-sm">
                                            <span class="text-xs font-weight-bold ps-3">{{$user->phone_number}}</span>
                                        </td>

                                        <td class="align-middle text-left text-sm">
                                            <span class="text-xs font-weight-bold ps-3">{{$user->active == false ? "UnActive" : "Active"}}</span>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
