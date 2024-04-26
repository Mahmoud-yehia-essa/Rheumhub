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
                    <li class="breadcrumb-item active" aria-current="page">ALl Notification</li>
                </ol>
            </nav>
        </div>
       
    </div>
    <!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase">ALl Notification</h6>
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
                            <th>Notification title</th>
                            <th>Notification date</th>

                            <th>Viewed notification</th>

                            <th>Job title</th>
                            <th>Place of work</th>
                            <th>Membership type</th>
                            <th>Status</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($notification as $key => $notification)
                            

                        <tr>
                            <td> {{ $key+1 }} </td>

                            <td>{{$notification->user->name}}</td>
                            <td>{{$notification->user->ar_name}}</td>
                            
                            <td style="white-space: pre-line;">{{$notification->title}}</td>
                            <td>{{ Carbon\Carbon::parse($notification->created_at)->diffForHumans() }}</td>


                            <td >   


                                
                                
                                @if ($notification->user_view == "no")
                                <p style="color: rgb(0, 0, 0)"> {{
                                
                                
                                ucwords($notification->user_view)
                                }}</p>

                                @elseif ($notification->user_view == "deleted" )
                                <p style="color: crimson"> {{
                                ucwords($notification->user_view)
                                
                                
                                
                                }}</p>

                                @else
                                <p style="color: green"> {{
                                
                               // $notification->user_view

                                ucwords($notification->user_view)
                                
                                }}</p>
                                
                                @endif
                             
                             
                            
                            </td>

                            <td>{{$notification->user->jobTitle->name}}</td>
                            <td>{{$notification->user->jobPlace->name}}</td>
                            <td>{{$notification->user->membership->name}}</td>
                            <td>{{$notification->user->status}}</td>


                           

                        </tr>
                        @endforeach
                    
                        
                    </tbody>
                    <tfoot>
                        

                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Arabic Name</th>
                            <th>Notification title</th>
                            <th>Notification date</th>

                            <th>Viewed notification</th>

                            <th>Job title</th>
                            <th>Place of work</th>
                            <th>Membership type</th>
                            <th>Status</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
  
    
</div>
@endsection