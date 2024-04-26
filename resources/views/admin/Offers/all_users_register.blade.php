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
                            <th>Register Date</th>

                            <th>Status</th>
                             

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($OfferUsers as $OfferUsers)
                            

                        <tr>
                            <td>{{$OfferUsers->user->name}}</td>
                            <td>{{$OfferUsers->user->ar_name}}</td>
                            
                            <td>
@if ($OfferUsers->user->license_picture != NULL)
    <a href="{{url('upload/admin/'.$OfferUsers->user->license_picture)}}" download >Open license</a>
@else
    <p style="color: crimson"> No license </p>
@endif

                                
                            </td>

                            <td>{{$OfferUsers->user->jobTitle->name}}</td>
                            <td>{{$OfferUsers->user->jobPlace->name}}</td>
                            <td>{{$OfferUsers->user->kma_no}}</td>
                            <td>{{$OfferUsers->user->kma_valid}}</td>
                            <td>{{$OfferUsers->user->membership->name}}</td>
                            <td>{{ Carbon\Carbon::parse($OfferUsers->created_at)->diffForHumans() }}</td>
                            <td>{{$OfferUsers->user->status}}</td>


                        

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