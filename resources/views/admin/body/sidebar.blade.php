<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('adminbackend/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Admin</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
     </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">


{{-- 
        <li>
            <a href="{{route('admin.dashboard')}}">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li> --}}



        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-spreadsheet"></i>
                </div>
                <div class="menu-title">KAR Research</div>
            </a>
            <ul>
                <li> <a href="{{route('admin.all.Research')}}"><i class='bx bx-radio-circle'></i>All KAR Research</a>
                </li>
           
                
            </ul>
        </li>
       
        {{-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-group"></i>
                </div>
                <div class="menu-title">USERS</div>
            </a>
            <ul>
                <li> <a href="{{route('admin.all.users')}}"><i class='bx bx-radio-circle'></i>All Users</a>
                </li>
                <li> <a href="{{route('admin.add.user')}}"><i class='bx bx-radio-circle'></i>Add user</a>
                </li>
                
            </ul>
        </li> --}}


     




        {{-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-user-check"></i>
                </div>
                <div class="menu-title">Mmbership</div>
            </a>
            <ul>
                <li> <a href="{{route('admin.all.membership')}}"><i class='bx bx-radio-circle'></i>All membership</a>
                </li>
                <li> <a href="{{route('admin.add.membership')}}"><i class='bx bx-radio-circle'></i>Add membership</a>
                </li>
                
            </ul>
        </li> --}}


        {{-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-briefcase"></i>
                </div>
                <div class="menu-title">Job Title</div>
            </a>
            <ul>
                <li> <a href="{{route('admin.all.jobTitle')}}"><i class='bx bx-radio-circle'></i>All job Title</a>
                </li>
                <li> <a href="{{route('admin.add.jobTitle')}}"><i class='bx bx-radio-circle'></i>Add job Title</a>
                </li>
                
            </ul>
        </li> --}}


        {{-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-building-house"></i>
                </div>
                <div class="menu-title">Job Place</div>
            </a>
            <ul>
                <li> <a href="{{route('admin.all.jobPlace')}}"><i class='bx bx-radio-circle'></i>All job Place</a>
                </li>
                <li> <a href="{{route('admin.add.jobPlace')}}"><i class='bx bx-radio-circle'></i>Add job Place</a>
                </li>
                
            </ul>
        </li> --}}

        {{-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-calendar"></i>
                </div>
                <div class="menu-title">Events Type</div>
            </a>
            <ul>
                <li> <a href="{{route('admin.all.eventType')}}"><i class='bx bx-radio-circle'></i>All events type</a>
                </li>
                <li> <a href="{{route('admin.add.eventType')}}"><i class='bx bx-radio-circle'></i>Add events type</a>
                </li>
                
            </ul>
        </li> --}}

        

        {{-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-calendar-check"></i>
                </div>
                <div class="menu-title">ACTIVITIES & EVENTS</div>
            </a>
            <ul>
                <li> <a href="{{route('admin.all.events')}}"><i class='bx bx-radio-circle'></i>All ACTIVITIES & EVENTS</a>
                </li>
                <li> <a href="{{route('admin.add.events')}}"><i class='bx bx-radio-circle'></i>Add ACTIVITIES & EVENTS</a>
                </li>
                
            </ul>
        </li> --}}

        {{-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-smile"></i>
                </div>
                <div class="menu-title">Volunteer Works</div>
            </a>
            <ul>
                <li> <a href="{{route('admin.all.volunteer')}}"><i class='bx bx-radio-circle'></i>All Volunteer Works</a>
                </li>
                <li> <a href="{{route('admin.add.volunteer')}}"><i class='bx bx-radio-circle'></i>Add Volunteer Works</a>
                </li>
                
            </ul>
        </li> --}}





        {{-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-dollar"></i>
                </div>
                <div class="menu-title">Offers and discounts</div>
            </a>
            <ul>


                <li> <a href="{{route('admin.all.OffersCate')}}"><i class='bx bx-radio-circle'></i>All Offers Category</a>
                </li>
                <li> <a href="{{route('admin.add.OffersCate')}}"><i class='bx bx-radio-circle'></i>Add Offers Category</a>
                </li>
                    


                <li> <a href="{{route('admin.all.Offers')}}"><i class='bx bx-radio-circle'></i>All Offers</a>
                </li>
                <li> <a href="{{route('admin.add.Offers')}}"><i class='bx bx-radio-circle'></i>Add Offers</a>
                </li> 

                
            </ul>
        </li> --}}


        {{-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-notification"></i>
                </div>
                <div class="menu-title">Notification</div>
            </a>
            <ul>

               

                <li> <a href="{{route('admin.add.notification.all.type')}}"><i class='bx bx-radio-circle'></i>Send Notification</a></li>
               
                

                


                <li> <a href="{{route('admin.add.notification.users')}}"><i class='bx bx-radio-circle'></i>Send Notification for users</a>
                </li>

                <li> <a href="{{route('admin.all.notification.users')}}"><i class='bx bx-radio-circle'></i>All notification sent</a>
                </li>


            </ul>
        </li> --}}




        

        {{-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-book"></i>
                </div>
                <div class="menu-title">Magazine</div>
            </a>
            <ul>
                <li> <a href="{{route('admin.all.Magazine')}}"><i class='bx bx-radio-circle'></i>All Magazines</a>
                </li>
                <li> <a href="{{route('admin.add.Magazine')}}"><i class='bx bx-radio-circle'></i>Add Magazine</a>
                </li>
                
            </ul>
        </li> --}}



        {{-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-book-reader"></i>
                </div>
                <div class="menu-title">News</div>
            </a>
            <ul>
                <li> <a href="{{route('admin.all.News')}}"><i class='bx bx-radio-circle'></i>All News</a>
                </li>
                <li> <a href="{{route('admin.add.News')}}"><i class='bx bx-radio-circle'></i>Add News</a>
                </li>
                
            </ul>
        </li> --}}


        {{-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-video"></i>
                </div>
                <div class="menu-title">Videos</div>
            </a>
            <ul>
                <li> <a href="{{route('admin.all.Video')}}"><i class='bx bx-radio-circle'></i>All Videos</a>
                </li>
                <li> <a href="{{route('admin.add.Video')}}"><i class='bx bx-radio-circle'></i>Add Videos</a>
                </li>
                
            </ul>
        </li> --}}




        {{-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-hotel"></i>
                </div>
                <div class="menu-title">Physiotherapy Category</div>
            </a>
            <ul>
                <li> <a href="{{route('admin.all.Physiotherapy')}}"><i class='bx bx-radio-circle'></i>All Physiotherapy Category</a>
                </li>
                <li> <a href="{{route('admin.add.Physiotherapy')}}"><i class='bx bx-radio-circle'></i>Add Physiotherapy Category</a>
                </li>
                
            </ul>
        </li> --}}





        {{-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-video"></i>
                </div>
                <div class="menu-title">Physiotherapy Video</div>
            </a>
            <ul>
                <li> <a href="{{route('admin.all.PhysiotherapyVideo')}}"><i class='bx bx-radio-circle'></i>All Physiotherapy Video</a>
                </li>
                <li> <a href="{{route('admin.add.PhysiotherapyVideo')}}"><i class='bx bx-radio-circle'></i>Add Physiotherapy Video</a>
                </li>
                
            </ul>
        </li> --}}





 



        {{-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-spreadsheet"></i>
                </div>
                <div class="menu-title">Surveys</div>
            </a>
            <ul>
                <li> <a href="{{route('admin.all.Surveys.Questions')}}"><i class='bx bx-radio-circle'></i>All Surveys Questions</a>
                </li>
                <li> <a href="{{route('admin.add.Surveys.Questions')}}"><i class='bx bx-radio-circle'></i>Add Surveys Questions</a>
                </li>
                
            </ul>
        </li> --}}





        {{-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-check-square"></i>
                </div>
                <div class="menu-title">Surveys Answers</div>
            </a>
            <ul>
                <li> <a href="{{route('admin.all.SurveysAnswer')}}"><i class='bx bx-radio-circle'></i>All Surveys Answers</a>
                </li>
                <li> <a href="{{route('admin.add.SurveysAnswer')}}"><i class='bx bx-radio-circle'></i>Add Surveys Answers</a>
                </li>
                
            </ul>
        </li> --}}



        {{-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-heart"></i>
                </div>
                <div class="menu-title">Preoperative Assessment</div>
            </a>
            <ul>
                <li> <a href="{{route('admin.add.Assessment')}}"><i class='bx bx-radio-circle'></i>Preoperative Assessment</a>
                </li>
               
                
              
            </ul>
        </li> --}}



        {{-- <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-align-justify"></i>
                </div>
                <div class="menu-title">More</div>
            </a>
            <ul>
                <li> <a href="{{route('admin.add.About')}}"><i class='bx bx-radio-circle'></i>About</a>
                </li>
                <li> <a href="{{route('admin.add.Contact')}}"><i class='bx bx-radio-circle'></i>Contact</a>
                </li>
                
                <li> <a href="{{route('admin.add.Policies')}}"><i class='bx bx-radio-circle'></i>Policies</a>
                </li>

                <li> <a href="{{route('admin.add.Sources')}}"><i class='bx bx-radio-circle'></i>Sources of Health Information</a>
                </li>

                
                <li> <a href="{{route('admin.add.Version')}}"><i class='bx bx-radio-circle'></i>App Version</a>
                </li>
            </ul>
        </li> --}}


  


        
        
    </ul>
    <!--end navigation-->
</div>