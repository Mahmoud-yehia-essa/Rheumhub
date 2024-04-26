@extends('admin.admin_dashboard')
@section('admin')
    
<div class="page-content">

    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
        <div class="col">
            <div class="card radius-10 bg-gradient-deepblue">
             <div class="card-body">
                <div class="d-flex align-items-center">
                    <h5 class="mb-0 text-white">{{count($users)}}</h5>
                    <div class="ms-auto">
                        <i class='bx bx-group fs-3 text-white'></i>
                    </div>
                </div>
              
                <div class="d-flex align-items-center text-white">
                    <p class="mb-0">Total Users</p>
                </div>
            </div>
          </div>
        </div>
        <div class="col">
            <div class="card radius-10 bg-gradient-ohhappiness">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <h5 class="mb-0 text-white">{{count($events)}}</h5>
                    <div class="ms-auto">
                        <i class='bx bx-calendar-event fs-3 text-white'></i>
                    </div>
                </div>
                
                <div class="d-flex align-items-center text-white">
                    <p class="mb-0">Total Events</p>
                </div>
            </div>
          </div>
        </div>
        <div class="col">
            <div class="card radius-10 bg-gradient-ibiza">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <h5 class="mb-0 text-white">{{count($Magazine)}}</h5>
                    <div class="ms-auto">
                        <i class='bx bx-book fs-3 text-white'></i>
                    </div>
                </div>
               
                <div class="d-flex align-items-center text-white">
                    <p class="mb-0">Total Magazines</p>
                </div>
            </div>
        </div>
        </div>
        <div class="col">
            <div class="card radius-10 bg-gradient-moonlit">
             <div class="card-body">
                <div class="d-flex align-items-center">
                    <h5 class="mb-0 text-white"> {{count($volunteers)}}</h5>
                    <div class="ms-auto">
                        <i class='bx bx-user fs-3 text-white'></i>
                    </div>
                </div>
               
                <div class="d-flex align-items-center text-white">
                    <p class="mb-0">Total Volunteers works</p>
                </div>
            </div>
         </div>
        </div>
    </div><!--end row-->

  




   

    

      <div class="card radius-10">
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
                                <th>Register Date</th>

                                <th>Status</th>
                                 
    
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
                                <td>{{ Carbon\Carbon::parse($user->created_at)->diffForHumans() }}</td>
                                <td>{{$user->status}}</td>
    
    
                            
    
                            </tr>
                            @endforeach
                        
                            
                        </tbody>
                        <tfoot>
                            
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
                                <th>Register Date</th>

                                <th>Status</th>
    
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

</div>


@endsection
