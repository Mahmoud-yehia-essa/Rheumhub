@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Magazines</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">ALl Magazines</li>
                </ol>
            </nav>
        </div>
       
    </div>
    <!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase">ALl Magazines</h6>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>

                        <tr>
                            <th>id</th>

                            <th>Name</th>
                            <th>Magazine</th>
                          
                            <th>Action</th> 

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($Magazine as $key =>  $Magazine)
                            

                        <tr>
                            <td> {{ $key+1 }} </td>
                            <td>{{$Magazine->name}}</td>
                            
                            <td>

                                @if ($Magazine->Magazine == NULL)
                                <p style="color: crimson"> No Magazine uploaded</p>

                                @else
                                <a href="{{url('upload/admin/'.$Magazine->Magazine)}}" download >Open Magazine</a>
    
                                @endif


                                
                            </td>

                         


                            <td>
                                <a href="{{route('admin.Magazine.update',$Magazine->id)}}" class="btn btn-info" title="Edit Data"> <i class="fa fa-pencil"></i> </a>
                                <a href="{{route('admin.Magazine.delete',$Magazine->id)}}" class="btn btn-danger" id="delete" title="Delete Data" ><i class="fa fa-trash"></i></a>
                                
                                
                              
                            </td> 

                        </tr>
                        @endforeach
                    
                        
                    </tbody>
                    <tfoot>
                        
                        <tr>
                            <th>id</th>

                            <th>Name</th>
                            <th>Magazine</th>
                            <th>Action</th> 


                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
  
    
</div>
@endsection