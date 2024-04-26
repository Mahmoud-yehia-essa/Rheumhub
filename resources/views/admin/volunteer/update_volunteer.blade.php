@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Update Volunteer work</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Update Volunteer work</li>
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

		<form method="post" action="{{ route('admin.update.volunteer.store',$volunteer->id) }}" enctype="multipart/form-data" >
			@csrf
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Volunteer work name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" name="name" value="{{$volunteer->name}}" />
                                </div>
                            </div>



                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Description</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <textarea  name="des"   class="form-control" id="input11" placeholder="Description ..." rows="3">{{$volunteer->des}}</textarea>
                                </div>
                            </div>

                           

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">place</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <textarea  name="place"  class="form-control" id="input11" placeholder="Place ..." rows="3">{{$volunteer->place}}</textarea>
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
                                        <option selected="" value="">Select Event Typ</option>
                                        @foreach ($eventType as $eventType)
                                        <option value="{{$eventType->id}}" {{$eventType->id == $volunteer->event_type_id ? 'selected' :''}}>{{$eventType->name}}</option>
                                        @endforeach
                                    </select>
                               

                                </div>
                            </div>

                     
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Volunteer work type</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">

                                    <select class="form-select mb-3" name="work_type" aria-label="Default select example" required>
                                      <option selected="" value="">Select Volunteer work type</option>
                                        <option value="free" {{$volunteer->type == 'free' ? 'selected' :''}}>Free</option>
                                        <option value="reward" {{$volunteer->type == 'reward' ? 'selected' :''}}>Reward</option>
                                       
                                    </select>
                               

                                </div>
                            </div>
                     

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Date</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">

                                    <input type="date" class="form-control" value="{{$volunteer->date}}" name="date" >
                                </div>
                            </div>



                            
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Register start</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">

                                    <input type="date" class="form-control"  name="start"   value="{{$volunteer->start}}">
                                </div>
                            </div>


                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Register end</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">

                                    <input type="date" class="form-control"  name="end" value="{{$volunteer->end}}" >
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
                                     <img id="showImage" src="{{ (!empty($volunteer->photo)) ? url('upload/admin/'.$volunteer->photo):url('upload/no_image.jpg') }}" alt="Admin" style="width:100px; height: 100px;"  >
                                </div>
                            </div>


                            
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="submit" class="btn btn-primary px-4" value="Update Volunteer Work" />
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