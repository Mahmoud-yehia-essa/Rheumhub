@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Users</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">ALl Users</li>
                </ol>
            </nav>
        </div>
       
    </div>
    <!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase">ALl Users</h6>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>id</th>

                            <th>Name</th>
                            <th>Arabic Name</th>
                            <th>License</th>
                            <th>Job title</th>
                            <th>Place of work</th>
                            <th>KMA NO</th>
                            <th>KMA valid till</th>
                            <th>Membership type</th>
                            <th>Status</th>
                            <th>Action</th> 

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key => $user)
                            

                        <tr>
                            <td> {{ $key+1 }} </td>

                            <td>{{$user->name}}</td>
                            <td>{{$user->ar_name}}</td>
                            
                            <td>
@if ($user->license_picture != NULL)
    <a href="{{url('upload/admin/'.$user->license_picture)}}" download >Open license</a>
@else
    <p style="color: crimson"> No license </p>
@endif

                                
                            </td>

                            <td>{{$user->jobTitle->name}}</td>
                            <td>{{$user->jobPlace->name}}</td>
                            <td>{{$user->kma_no}}</td>
                            <td>{{$user->kma_valid}}</td>
                            <td>{{$user->membership->name}}</td>
                            <td>{{$user->status}}</td>


                            <td>
                                <a href="{{route('admin.user.update',$user->id)}}" class="btn btn-info" title="Edit Data"> <i class="fa fa-pencil"></i> </a>
                                <a href="{{route('admin.user.delete',$user->id)}}" class="btn btn-danger" id="delete" title="Delete Data" ><i class="fa fa-trash"></i></a>
                                
                                
                                @if($user->status == "active")
                                <a href="{{route('admin.user.inactive',$user->id)}}" class="btn btn-primary" title="Inactive"> <i class="fa-solid fa-thumbs-down"></i> </a>
                                @else
                                <a href="{{route('admin.user.active',$user->id)}}" class="btn btn-primary" title="Active"> <i class="fa-solid fa-thumbs-up"></i> </a>
                                @endif
                            </td> 

                        </tr>
                        @endforeach
                    
                        
                    </tbody>
                    <tfoot>
                        

                        <tr>
                            <th>Id</th>

                            <th>Name</th>
                            <th>Arabic Name</th>
                            <th>License</th>
                            <th>Job title</th>
                            <th>Place of work</th>
                            <th>KMA NO</th>
                            <th>KMA valid till</th>
                            <th>Membership type</th>
                            
                            <th>Status</th>
                            <th>Action</th> 

                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
  
    
</div>
@endsection