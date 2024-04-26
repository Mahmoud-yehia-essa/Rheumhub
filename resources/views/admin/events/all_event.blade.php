@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">ACTIVITIES & EVENTS</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">ALl ACTIVITIES & EVENTS</li>
                </ol>
            </nav>
        </div>
       
    </div>
    <!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase">ALl ACTIVITIES & EVENTS</h6>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>id</th>

                            <th>Name</th>
                            <th>price</th>
                            <th>place</th>
                            <th>Event type</th>
                            <th>Start</th>
                            <th>End</th>
                            <th>Status</th>

                            <th>Action</th> 

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($events as $key =>  $event)
                            

                        <tr>
                            <td> {{ $key+1 }} </td>

                            <td><a href="{{route('admin.event.users',$event->id)}}">{{$event->name}}</td>
                            <td>{{$event->price == "" ? "Free" : $event->price}}</td>
                            <td>{{$event->place}}</td>
                            <td>{{$event->eventType->name}}</td>
                            <td>{{$event->start}}</td>
                            <td>{{$event->end}}</td>
                            <td>{{$event->status}}</td>


                            <td>
                                <a href="{{route('admin.event.update',$event->id)}}" class="btn btn-info" title="Edit Data"> <i class="fa fa-pencil"></i> </a>
                                <a href="{{route('admin.event.delete',$event->id)}}" class="btn btn-danger" id="delete" title="Delete Data" ><i class="fa fa-trash"></i></a>


                                  
                                @if($event->status == "open")
                                <a href="{{route('admin.event.close',$event->id)}}" class="btn btn-primary" title="CLOSE"> <i class="fa-solid fa-thumbs-down"></i> </a>
                                @else
                                <a href="{{route('admin.event.open',$event->id)}}" class="btn btn-primary" title="OPEN"> <i class="fa-solid fa-thumbs-up"></i> </a>
                                @endif
                            </td> 

                        </tr>
                        @endforeach
                    
                        
                    </tbody>
                    <tfoot>
                        
                        <tr>
                            <th>id</th>

                            <th>Name</th>
                            <th>Subscription</th>
                            <th>price</th>
                            <th>place</th>
                            <th>type</th>
                            <th>Start</th>
                            <th>End</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
  
    
</div>
@endsection