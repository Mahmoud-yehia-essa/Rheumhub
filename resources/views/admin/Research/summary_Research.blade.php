@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">ALl KAR Research</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">ALl KAR Research</li>
                </ol>
            </nav>
        </div>
       
    </div>
    <!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase">ALl KAR Research</h6>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                                                        <th>id</th>

                            <th>name</th>
                            <th>position</th>
                            <th>Work_Address</th>
                        
                            <th>email</th> 
                            <th>number</th> 
                            <th>title</th> 
                            <th>leader</th> 
                       
                            
                            <th>created_at</th> 

                            




                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($applicationForm as $key => $applicationForm)
                            

                        <tr>
                               <td> {{ $key+1 }} </td>
                            <td style="white-space: pre-line;">{{$applicationForm->name}}</td>
                            <td style="white-space: pre-line;">{{$applicationForm->position}}</td>
                            <td style="white-space: pre-line;">{{$applicationForm->Work_Address}}</td>
                            <td style="white-space: pre-line;">{{$applicationForm->email}}</td>
                            <td style="white-space: pre-line;">{{$applicationForm->number}}</td>
                            <td style="white-space: pre-line;">{{$applicationForm->title}}</td>
                            <td style="white-space: pre-line;">{{$applicationForm->leader}}</td>
                          
                            <td>{{ Carbon\Carbon::parse($applicationForm->created_at)->diffForHumans() }}</td>
                           

                            <td>
                                <a href="{{ route('admin.Research.pdf',$applicationForm->id) }}" class="btn btn-info" title="Details"><i class="fa fa-file-pdf"></i> </a>

                                <a href="{{route('admin.Research.delete',$applicationForm->id)}}" class="btn btn-danger" id="delete" title="Delete Data" ><i class="fa fa-trash"></i></a>


                                  
                               
                            </td> 

                        </tr>
                        @endforeach
                    
                        
                    </tbody>
                    <tfoot>
                        
                        <tr>
                            <th>id</th>

                            <th>name</th>
                            <th>position</th>
                            <th>Work_Address</th>
                        
                            <th>email</th> 
                            <th>number</th> 
                            <th>title</th> 
                            <th>leader</th> 
                            
                            <th>created_at</th> 


                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
  
    
</div>
@endsection