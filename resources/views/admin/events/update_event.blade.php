@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Update ACTIVITIES & EVENTS</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Update ACTIVITIES & EVENTS</li>
                </ol>
            </nav>
        </div>
       
    </div>
    <!--end breadcrumb-->
    <div class="container">
        <div class="main-body">
            @if ($errors->any())
        

            @foreach ($errors->all() as $item)
           

           <div class="alert alert-danger" role="alert">
            {{$item}}
          </div>

            @endforeach
        
            
        @endif

		<form method="post" action="{{ route('admin.update.event.store',$event->id) }}" enctype="multipart/form-data" >
			@csrf
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" name="name" value="{{$event->name}}"/>
                                </div>
                            </div>



                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">price</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control"   name="price" value="{{$event->price}}"/>
                                </div>
                            </div>

                            {{-- <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">place</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">

                                    <select class="form-select mb-3" name="place" aria-label="Default select example" required>
                                        <option selected="" value="">Select place</option>
                                        <option value="kuwait" {{$event->place == "kuwait" ? "selected" : ""}} >Kuwait</option>
                                        <option value="outside_kuwait" {{$event->place == "outside_kuwait" ? "selected" : ""}}>Outside kuwait</option>
                                    </select>
                                </div>
                            </div> --}}



                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Place</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" name="place" value="{{$event->place}}"/>
                                </div>
                            </div> 

             

                  



                            


                            



                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Event Type</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">

                                    <select class="form-select mb-3" name="type" aria-label="Default select example" required>
                                        {{-- <option selected="" value="">Select Membership type</option>
                                        <option value="permanent">Permanent / Kuwaiti</option>
                                        <option value="associate">Associate / Non-Kuwaiti</option>
                                        <option value="affiliate">Affiliate / (Kuwaiti - Non-Kuwaiti)</option> --}}
                                        <option selected="" value="">Select Event Type</option>

                                        @foreach ($eventType as $eventType)
                                        <option value="{{$eventType->id}}" {{$eventType->id == $event->event_type_id ? 'selected' :''}}>{{$eventType->name}}</option>
                                        @endforeach
                                    </select>
                               

                                </div>
                            </div>
                     

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">start</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">

                                    <input type="datetime-local" class="form-control"  name="start"  value="{{$event->start}}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">end</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">

                                    <input type="datetime-local" class="form-control"  name="end"  value="{{$event->end}}">
                                </div>
                            </div>




                            










                            @php

                                       $selectedMembershipsString = $event->membership_id;


                                    

                                       $selectedMembershipsArray = explode(',', $selectedMembershipsString);

                                        //   foreach ($selectedMembershipsArray as  $selectedMembershipsArray) {
                                
                                        //         echo $selectedMembershipsArray;

                                        //         }

                            @endphp

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Membership</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">

                                    @foreach ($memberships as $membership)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="selected_memberships[]" value="{{ $membership->id }}" id="membership_{{ $membership->id }}" 

                                        
                                        @foreach ($selectedMembershipsArray as $selectedMembershipsArray2)
                                        
                                        @if ($selectedMembershipsArray2 == $membership->id)
                                        checked
                                        @endif

                                        
                                        @endforeach
                                        
                                        >
                                        <label class="form-check-label" for="membership_{{ $membership->id }}">
                                            {{ $membership->name }}
                                        </label>
                                    </div>
                                @endforeach

                                      {{-- <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                                        <label class="form-check-label" for="flexCheckChecked">
                                          Checked checkbox
                                        </label>
                                      </div> --}}
                               

                                </div>
                            </div>
                            


                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Photo</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input class="form-control" type="file" id="image" name="photo">
                                </div>
                            </div>



                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0"> </h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                     <img id="showImage" src="{{ (!empty($event->photo)) ? url('upload/admin/'.$event->photo):url('upload/no_image.jpg') }}" alt="Admin" style="width:100px; height: 100px;"  >
                                </div>
                            </div>




                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">pdf (optional)</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input class="form-control" type="file" id="pdf" name="pdf">
                                </div>
                            </div>


                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0"> </h6>
                                </div>
                                <div class="col-sm-9 text-secondary">

                                    @if ($event->pdf != NULL)
                    <a href="{{url('upload/admin/'.$event->pdf)}}" download >Open pdf</a>
                    @else
                 <p style="color: crimson"> No pdf </p>
                        @endif

                                </div>
                            </div>



                       


                             
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">url (optional)</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" name="url"   value="{{$event->url}}"/>
                                </div>
                            </div>


                            
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="submit" class="btn btn-primary px-4" value="Update EVENT" />
                                </div>
                            </div>

                        </form>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>

@endsection