@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Physiotherapy</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">All Physiotherapy Category</li>
                </ol>
            </nav>
        </div>
       
    </div>
    <!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase">All Physiotherapy Category</h6>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>     
                            <th>Action</th> 

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($Physiotherapy as $Physiotherapy)
                            

                        <tr>
                            <td>{{$Physiotherapy->name}}</td>
                       


                            <td>
                                <a href="{{route('admin.Physiotherapy.update',$Physiotherapy->id)}}" class="btn btn-info" title="Edit Data"> <i class="fa fa-pencil"></i> </a>
                                <a href="{{route('admin.Physiotherapy.delete',$Physiotherapy->id)}}" class="btn btn-danger" id="delete" title="Delete Data" ><i class="fa fa-trash"></i></a>


                                  
                               
                            </td> 

                        </tr>
                        @endforeach
                    
                        
                    </tbody>
                    <tfoot>
                        
                        <tr>
                            <th>Name</th>

                        
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
  
    
</div>
@endsection