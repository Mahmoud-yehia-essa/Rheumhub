@extends('admin.admin_dashboard')
@section('admin')

@php
        $total = 0;
        foreach($SurveysAnswer as $SurveysAnswer2)
        {

            $total += $SurveysAnswer2->count;
        }


        
@endphp
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Question Information</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Question Information</li>
                </ol>
            </nav>
        </div>
       
    </div>
    <!--end breadcrumb-->
    <h3 class="mb-0 text-uppercase">{{$SurveysQu->qu}}</h6>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Answer</th>
                            <th>Count of Answers</th>
                            <th>Percentage</th>


                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($SurveysAnswer as $SurveysAnswer)
                            

                        <tr>
                            <td>{{$SurveysAnswer->answer}}</td>
                            {{-- <td>{{$SurveysAnswer->surveysQus->qu}}</td> --}}
                            <td>{{$SurveysAnswer->count}}</td>
                            <td>


                                @php

                                if( $total != 0)
                                {
                                    $persantage = ($SurveysAnswer->count / $total) * 100;
                                }
                                else {
                                    $persantage = 0;
                                }
                                @endphp
      
      {{round($persantage)}}%
<div class="progress" style="height:19px;">
    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="{{round($persantage)}}" aria-valuemin="0" aria-valuemax="100" style="width: {{round($persantage)}}%"></div>
</div>
                                {{-- <div class="progress-bar" role="progressbar" style="color:white; width: {{round($persantage)}}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{round($persantage)}}%</div> --}}
                            </td>



                        </tr>
                        @endforeach
                    
                        
                    </tbody>
                    <tfoot>
                        
                        <tr>
                            <th>Answer</th>
                            <th>Count of Answers</th>
                            <th>Percentage</th>

                         
                        

                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
  
    
</div>
@endsection