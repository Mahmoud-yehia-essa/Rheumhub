@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Send Notification for Job Place</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Send Notification for Job Place</li>
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

		<form method="post" action="{{ route('admin.add.notification.jobPlace.store') }}" enctype="multipart/form-data" >
			@csrf
                <div class="col-lg-16">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Title</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" name="title" />
                                </div>
                            </div>



                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Description</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <textarea id="elm1" name="description"></textarea>

                                </div>
                            </div>
                           

             

                            {{-- <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Type</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">

                                    <select class="form-select mb-3" name="type" aria-label="Default select example" required>
                                        <option selected="" value="">Select type</option>
                                        <option value="workshop">Workshop</option>
                                        <option value="courses">Course</option>
                                        <option value="conferences">Conferences</option>
                                    </select>
                               

                                </div>
                            </div> --}}

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Job place</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">

                                    <select class="form-select mb-3" name="job_place" aria-label="Default select example" required>
                                        {{-- <option selected="" value="">Select Membership type</option>
                                        <option value="permanent">Permanent / Kuwaiti</option>
                                        <option value="associate">Associate / Non-Kuwaiti</option>
                                        <option value="affiliate">Affiliate / (Kuwaiti - Non-Kuwaiti)</option> --}}
                                        <option selected="" value="">Select Job place</option>
                                        <option  value="all">All</option>

                                        @foreach ($jobPlace as $jobPlace)
                                        <option value="{{$jobPlace->id}}">{{$jobPlace->name}}</option>
                                        @endforeach
                                    </select>
                               

                                </div>
                            </div>


                   

                      




                     
                            
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="submit" class="btn btn-primary px-4" value="Send Notification" />
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