@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Update Physiotherapy Video</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Update Physiotherapy Video</li>
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

		<form method="post" action="{{ route('admin.update.PhysiotherapyVideo.store',$PhysiotherapyVideo->id) }}" enctype="multipart/form-data" >
			@csrf
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" name="name" value="{{$PhysiotherapyVideo->name}}" />
                                </div>
                            </div>



                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Description</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <textarea  name="des"   class="form-control" id="input11" placeholder="Description ..." rows="3">{{$PhysiotherapyVideo->des}}</textarea>
                                </div>
                            </div>

                           

                    
                          

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Physiotherapy Category</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">

                                    <select class="form-select mb-3" name="physiotherapy" aria-label="Default select example" required>
                                        {{-- <option selected="" value="">Select Membership type</option>
                                        <option value="permanent">Permanent / Kuwaiti</option>
                                        <option value="associate">Associate / Non-Kuwaiti</option>
                                        <option value="affiliate">Affiliate / (Kuwaiti - Non-Kuwaiti)</option> --}}
                                        <option selected="" value="">Select Physiotherapy Category</option>
                                        @foreach ($Physiotherapy as $Physiotherapy)
                                        <option value="{{$Physiotherapy->id}}" {{$Physiotherapy->id == $PhysiotherapyVideo->physiotherapy ? 'selected' :''}}>{{$Physiotherapy->name}}</option>
                                        @endforeach
                                    </select>
                               

                                </div>
                            </div>

                     
      

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Video</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input class="form-control" type="file" id="video" name="video">
                                </div>
                            </div>




                            
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="submit" class="btn btn-primary px-4" value="Update Physiotherapy video" />
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