@extends('admin.admin_dashboard')
@section('admin')


<div class="card radius-10">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Arabic Name</th>
                            <th>License</th>
                            <th>Job title</th>
                            <th>Place of work</th>
                            <th>KMA NO</th>
                            <th>KMA valid till</th>
                            <th>Membership type</th>
                            <th>Register Event Date</th>

                            <th>Status</th>
                             

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($EventUsers as $EventUsers)
                            

                        <tr>
                            <td>{{$EventUsers->user->name}}</td>
                            <td>{{$EventUsers->user->ar_name}}</td>
                            
                            <td>
@if ($EventUsers->user->license_picture != NULL)
    <a href="{{url('upload/admin/'.$EventUsers->user->license_picture)}}" download >Open license</a>
@else
    <p style="color: crimson"> No license </p>
@endif

                                
                            </td>

                            <td>{{$EventUsers->user->jobTitle->name}}</td>
                            <td>{{$EventUsers->user->jobPlace->name}}</td>
                            <td>{{$EventUsers->user->kma_no}}</td>
                            <td>{{$EventUsers->user->kma_valid}}</td>
                            <td>{{$EventUsers->user->membership->name}}</td>
                            <td>{{ Carbon\Carbon::parse($EventUsers->created_at)->diffForHumans() }}</td>
                            <td>{{$EventUsers->user->status}}</td>


                        

                        </tr>
                        @endforeach
                    
                        
                    </tbody>
                    <tfoot>
                        
                        <tr>
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