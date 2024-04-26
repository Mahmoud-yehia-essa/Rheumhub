@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Update user</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Update user</li>
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

		<form method="post" action="{{ route('admin.upate.user.store',$user->id) }}" enctype="multipart/form-data" >
			@csrf
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" name="name" value="{{$user->name}}" />
                                </div>
                            </div>


                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Arabic Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" name="ar_name"  value="{{$user->ar_name}}"/>
                                </div>
                            </div>



                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">User Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control"   name="username" value="{{$user->username}}"/>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="email" class="form-control"  name="email" value="{{$user->email}}"/>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Password</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="password" class="form-control"  name="password"/>
                                </div>
                            </div>


                        

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Job Title</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">

                                    <select class="form-select mb-3" name="job_title" aria-label="Default select example" required>
                                        {{-- <option selected="" value="">Select Membership type</option>
                                        <option value="permanent">Permanent / Kuwaiti</option>
                                        <option value="associate">Associate / Non-Kuwaiti</option>
                                        <option value="affiliate">Affiliate / (Kuwaiti - Non-Kuwaiti)</option> --}}
                                        <option selected="" value="">Select Job Title type</option>
                                        @foreach ($jobTitle as $jobTitle)
                                        <option value="{{$jobTitle->id}}" {{$jobTitle->id == $user->job_title_id ? 'selected' :''}}>{{$jobTitle->name}} - {{$jobTitle->ar_name}} </option>
                                        @endforeach
                                    </select>
                               

                                </div>
                            </div>



                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Job Place</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">

                                    <select class="form-select mb-3" name="job_place" aria-label="Default select example" required>
                                        {{-- <option selected="" value="">Select Membership type</option>
                                        <option value="permanent">Permanent / Kuwaiti</option>
                                        <option value="associate">Associate / Non-Kuwaiti</option>
                                        <option value="affiliate">Affiliate / (Kuwaiti - Non-Kuwaiti)</option> --}}
                                        <option selected="" value="">Select Job Place type</option>
                                        @foreach ($jobPlace as $jobPlace)
                                        <option value="{{$jobPlace->id}}" {{$jobPlace->id == $user->job_place_id ? 'selected' :''}}>{{$jobPlace->name}} - {{$jobPlace->ar_name}}</option>
                                        @endforeach
                                    </select>
                               

                                </div>
                            </div>


                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">KMA Number</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control"   name="kma_no" value="{{$user->kma_no}}"/>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">KMA valid</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">

                                    <input type="date" class="form-control"  name="kma_valid"  value="{{$user->kma_valid}}">
                                </div>
                            </div>



                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Membership</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">

                                    <select class="form-select mb-3" name="membership" aria-label="Default select example" required>
                                        {{-- <option selected="" value="">Select Membership type</option>
                                        <option value="permanent">Permanent / Kuwaiti</option>
                                        <option value="associate">Associate / Non-Kuwaiti</option>
                                        <option value="affiliate">Affiliate / (Kuwaiti - Non-Kuwaiti)</option> --}}
                                        <option selected="" value="">Select Membership type</option>
                                        @foreach ($memberships as $membership)
                                        <option value="{{$membership->id}}" {{$membership->id == $user->membership_id ? 'selected' :''}}>{{$membership->name}}</option>
                                        @endforeach
                                    </select>
                               

                                </div>
                            </div>



                          
                            

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control"   name="phone" value="{{$user->phone}}"/>
                                </div>
                            </div>
                        
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control"  name="address" value="{{$user->address}}"/>
                                </div>
                            </div>



                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Upload license (pdf,png,jpg)</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input class="form-control" type="file"  name="license" value="{{old('license')}}">
                                </div>
                            </div>
 

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0"> </h6>
                                </div>
                                <div class="col-sm-9 text-secondary">

                                    @if ($user->license_picture != NULL)
                    <a href="{{url('upload/admin/'.$user->license_picture)}}" download >Open license</a>
                    @else
                 <p style="color: crimson"> No license </p>
                        @endif

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
                                     <img id="showImage" src="{{ (!empty($user->photo)) ? url('upload/admin/'.$user->photo):url('upload/no_image.jpg') }}" alt="Admin" style="width:100px; height: 100px;"  >
                                </div>
                            </div>


                            
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="submit" class="btn btn-primary px-4" value="update User" />
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