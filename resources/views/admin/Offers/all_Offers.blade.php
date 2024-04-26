@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">ALl Offers Works</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">ALl Offers works</li>
                </ol>
            </nav>
        </div>
       
    </div>
    <!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase">ALl Offers works</h6>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>id</th>

                            <th>Name</th>
                            <th>Description</th>
                            <th>Event Type</th>
                            <th>Date</th>
                        
                            <th>Action</th> 

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($Offers as $key => $Offers)
                            

                        <tr>

                            <td> {{ $key+1 }} </td>

                            <td>

                                <a href="{{route('admin.Offers.users',$Offers->id)}}" >
                                {{$Offers->name}}
                            
                                </a>
                            </td>
                            <td style="white-space: pre-line;">{{$Offers->des}}</td>
                            <td style="white-space: pre-line;">{{$Offers->OffersType->name}}</td>
                            <td>{{$Offers->date}}</td>


                            <td>
                                <a href="{{route('admin.Offers.update',$Offers->id)}}" class="btn btn-info" title="Edit Data"> <i class="fa fa-pencil"></i> </a>
                                <a href="{{route('admin.Offers.delete',$Offers->id)}}" class="btn btn-danger" id="delete" title="Delete Data" ><i class="fa fa-trash"></i></a>


                                  
                               
                            </td> 

                        </tr>
                        @endforeach
                    
                        
                    </tbody>
                    <tfoot>
                        
                        <tr>
                            <th>id</th>

                            <th>Name</th>
                            <th>Description</th>
                            <th>Type</th>
                            <th>Date</th>
                        
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
  
    
</div>
@endsection