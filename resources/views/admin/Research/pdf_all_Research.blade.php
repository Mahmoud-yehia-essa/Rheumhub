<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>R0000{{ $applicationForm->id }}</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    

    <div class="container-fluid header-main">


        <a href="https://karkwt.org/home/">
        <img class="image" src="https://karkwt.org/home/wp-content/uploads/2022/05/logois.png" width="90" height="90" class="d-inline-block align-top" alt="">
        </a>
  
        
        <div  class="title-kar display-6" style="margin-top: 2rem">
          KAR RESEARCH
        </div>
  
  
  
      </div>

    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-md-2 font-weight-bold text-primary">ID:</div>
                    <div class="col-md-10">R0000{{ $applicationForm->id }}</div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-2 font-weight-bold text-primary">Name:</div>
                    <div class="col-md-10">{{ $applicationForm->name }}</div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-2 font-weight-bold text-primary">Position:</div>
                    <div class="col-md-10">{{ $applicationForm->position }}</div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-2 font-weight-bold text-primary">Work Address:</div>
                    <div class="col-md-10">{{ $applicationForm->Work_Address }}</div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-2 font-weight-bold text-primary">Email:</div>
                    <div class="col-md-10">{{ $applicationForm->email }}</div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-2 font-weight-bold text-primary">Number:</div>
                    <div class="col-md-10">{{ $applicationForm->number }}</div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-2 font-weight-bold text-primary">Title:</div>
                    <div class="col-md-10">{{ $applicationForm->title }}</div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-2 font-weight-bold text-primary">Leader:</div>
                    <div class="col-md-10">{{ $applicationForm->leader }}</div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-2 font-weight-bold text-primary">Members:</div>
                    <div class="col-md-10">{{ $applicationForm->members }}</div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-2 font-weight-bold text-primary">Objectives:</div>
                    <div class="col-md-10">{{ $applicationForm->objectives }}</div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-2 font-weight-bold text-primary">Description:</div>
                    <div class="col-md-10">{{ $applicationForm->description }}</div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-2 font-weight-bold text-primary">Project Organization:</div>
                    <div class="col-md-10">{{ $applicationForm->project_organization }}</div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-2 font-weight-bold text-primary">Timeline:</div>
                    <div class="col-md-10">{{ $applicationForm->timeline }}</div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-2 font-weight-bold text-primary">Timeline Description:</div>
                    <div class="col-md-10">{{ $applicationForm->timeline_description }}</div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-2 font-weight-bold text-primary">Journal:</div>
                    <div class="col-md-10">{{ $applicationForm->journal }}</div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-2 font-weight-bold text-primary">Other Journal:</div>
                    <div class="col-md-10">{{ $applicationForm->other_journal }}</div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-2 font-weight-bold text-primary">Grant:</div>
                    <div class="col-md-10">
                        {{ $applicationForm->grant }}
                        {{ $applicationForm->grantChecked }}
                        {{ $applicationForm->grantOther }}
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-2 font-weight-bold text-primary">Created At:</div>
                    <div class="col-md-10">{{ $applicationForm->created_at }}</div>
                </div>
                
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script></body>
</html>