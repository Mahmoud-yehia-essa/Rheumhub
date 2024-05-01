<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>APPLICATION</title>
    <link href="{{asset('adminbackend/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet')}}" />
    <link href="{{asset('adminbackend/assets/plugins/input-tags/css/tagsinput.css" rel="stylesheet')}}" />
    <link
      href="{{asset('adminbackend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}"
      rel="stylesheet"
    />
    <link
      href="{{asset('adminbackend/assets/plugins/metismenu/css/metisMenu.min.css')}}"
      rel="stylesheet"
    />


    <!-- loader-->
    {{-- <link href="{{asset('adminbackend/assets/css/pace.min.css')}}" rel="stylesheet" />
    <script src="{{asset('adminbackend/assets/js/pace.min.js')}}"></script> --}}
    <!-- Bootstrap CSS -->
    <link href="{{asset('adminbackend/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('adminbackend/assets/css/bootstrap-extended.css')}}" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <link href="{{asset('adminbackend/assets/css/app.css')}}" rel="stylesheet" />
    <link href="{{asset('adminbackend/assets/css/icons.css')}}" rel="stylesheet" />




    

    <!-- Theme Style CSS -->
    {{-- <link rel="stylesheet" href="{{asset('adminbackend/assets/css/dark-theme.css')}}" />
    <link rel="stylesheet" href="{{asset('adminbackend/assets/css/semi-dark.css')}}" />
    <link rel="stylesheet" href="{{asset('adminbackend/assets/css/header-colors.css')}}" />
 --}}


    <style>

.bt-container
{

  text-align: center;
  margin-top: 3rem;  
}


body
  {
      
      background:none transparent;
      margin:0;
  }
    </style>




  </head>
  <body>
    <div class="page-wrapper mt-0">
      <div class="page-content">






        <div class="row">
          <div class="col-xl-9">
          


            @if ($errors->any())
        

            @foreach ($errors->all() as $item)
           

           <div class="alert alert-danger" role="alert">
            {{$item}}
          </div>

            @endforeach
        
            
        @endif


        <div class="card">
          <div class="card-body">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button  {{ old('hidden') == 'done' ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            Mission & Agenda

         
          </button>        </h2>                <div id="collapseOne" class="accordion-collapse collapse {{ old('hidden') == 'done' ? 'hidden' : 'show' }}" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">


                  <div class="accordion-body">

                    <main id="main" class="site-main col-sm-12 full-width">

	
                      <article id="post-18236" class="post-18236 page type-page status-publish hentry pmpro-has-access">
                          <div class="entry-content">
                                  <div data-elementor-type="wp-page" data-elementor-id="18236" class="elementor elementor-18236" data-elementor-settings="[]">
                                    <div class="elementor-section-wrap">
                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-5825f3f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5825f3f" data-element_type="section">
                                  <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-50e3aca" data-id="50e3aca" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-4e7b0f3 elementor-widget elementor-widget-heading" data-id="4e7b0f3" data-element_type="widget" data-widget_type="heading.default">
                              <div class="elementor-widget-container">
                            <style>/*! elementor - v3.5.3 - 28-12-2021 */
                      .elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}</style><h1 class="elementor-heading-title elementor-size-default"><span id="docs-internal-guid-d57ee81c-7fff-8e03-ce14-49153a6e4d2d" style="white-space: normal; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-weight: normal;"><span style="font-size: 16pt; font-family: Calibri, sans-serif; font-weight: 700; font-style: italic; font-variant-ligatures: normal; font-variant-alternates: normal; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-position: normal; text-decoration: underline; text-decoration-skip-ink: none; vertical-align: baseline; white-space: pre-wrap;">Mission</span></span></h1>		</div>
                              </div>
                                </div>
                          </div>
                                    </div>
                          </section>
                              <section class="elementor-section elementor-top-section elementor-element elementor-element-32da95c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="32da95c" data-element_type="section">
                                  <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-92b29b6" data-id="92b29b6" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-043e6d8 elementor-widget elementor-widget-text-editor" data-id="043e6d8" data-element_type="widget" data-widget_type="text-editor.default">
                              <div class="elementor-widget-container">
                            <style>/*! elementor - v3.5.3 - 28-12-2021 */
                      .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#818a91;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#818a91;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}</style>				<p><span style="font-weight: 400; color: #000000;">KAR&nbsp; Rheumatology Research Committee is committed to promoting and facilitating high quality research in the field of rheumatology in Kuwait.</span></p>						</div>
                              </div>
                                </div>
                          </div>
                                    </div>
                          </section>
                              <section class="elementor-section elementor-top-section elementor-element elementor-element-3daefd6 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3daefd6" data-element_type="section">
                                  <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-670d542" data-id="670d542" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-e9c0f77 elementor-widget elementor-widget-heading" data-id="e9c0f77" data-element_type="widget" data-widget_type="heading.default">
                              <div class="elementor-widget-container">
                            <h1 class="elementor-heading-title elementor-size-default"><span style="white-space: normal; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-weight: normal;"><span style="font-size: 16pt; font-family: Calibri, sans-serif; font-weight: 700; font-style: italic; font-variant-ligatures: normal; font-variant-alternates: normal; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-position: normal; text-decoration: underline; text-decoration-skip-ink: none; vertical-align: baseline; white-space: pre-wrap;">Agenda</span></span></h1>		</div>
                              </div>
                                </div>
                          </div>
                                    </div>
                          </section>
                              <section class="elementor-section elementor-top-section elementor-element elementor-element-d78118e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d78118e" data-element_type="section">
                                  <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a6e58fe" data-id="a6e58fe" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-fd50c58 elementor-widget elementor-widget-heading" data-id="fd50c58" data-element_type="widget" data-widget_type="heading.default">
                              <div class="elementor-widget-container">
                            <h3 class="elementor-heading-title elementor-size-default"><span style="white-space: normal; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-weight: normal;"><span style="font-size: 14pt; font-family: Calibri, sans-serif; font-weight: 700; font-style: italic; font-variant-ligatures: normal; font-variant-alternates: normal; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-position: normal; text-decoration: underline; text-decoration-skip-ink: none; vertical-align: baseline; white-space: pre-wrap;">1- Building a Research Network</span></span></h3>		</div>
                              </div>
                                </div>
                          </div>
                                    </div>
                          </section>
                              <section class="elementor-section elementor-top-section elementor-element elementor-element-da54b6c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="da54b6c" data-element_type="section">
                                  <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-26be5c0" data-id="26be5c0" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-5b5d7aa elementor-widget elementor-widget-text-editor" data-id="5b5d7aa" data-element_type="widget" data-widget_type="text-editor.default">
                              <div class="elementor-widget-container">
                                    <ul><li><blockquote><span style="font-weight: 400; color: #333333;">The committee actively seeks collaboration with rheumatologists, researchers, national, regional, and international academic institutions to create and maintain a celebrative network of professionals.</span></blockquote></li><li><blockquote><span style="font-weight: 400; color: #333333;">The committee connects researchers from various national and international medical associations &amp; academies with KAR members.</span></blockquote></li><li><blockquote><span style="font-weight: 400;"><span style="color: #333333;">The committee seeks to recruit medical students, residents, and fellows in training with interest in rheumatology and clinical research and facilitates collaborations with KAR members in different Hospitals in Kuwait.</span> </span></blockquote></li></ul>						</div>
                              </div>
                                </div>
                          </div>
                                    </div>
                          </section>
                              <section class="elementor-section elementor-top-section elementor-element elementor-element-37ab8ba elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="37ab8ba" data-element_type="section">
                                  <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-65fba8a" data-id="65fba8a" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-3c85b6a elementor-widget elementor-widget-heading" data-id="3c85b6a" data-element_type="widget" data-widget_type="heading.default">
                              <div class="elementor-widget-container">
                            <h3 class="elementor-heading-title elementor-size-default"><span style="white-space: normal; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-weight: normal;"><span style="font-size: 14pt; font-family: Calibri, sans-serif; font-weight: 700; font-style: italic; font-variant-ligatures: normal; font-variant-alternates: normal; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-position: normal; text-decoration: underline; text-decoration-skip-ink: none; vertical-align: baseline; white-space: pre-wrap;">2- </span></span><span id="docs-internal-guid-7e5b785e-7fff-00a1-c6bc-aa1732f5415f" style="white-space: normal; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-weight: normal;"><span style="font-size: 14pt; font-family: Calibri, sans-serif; font-weight: 700; font-style: italic; font-variant-ligatures: normal; font-variant-alternates: normal; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-position: normal; text-decoration: underline; text-decoration-skip-ink: none; vertical-align: baseline; white-space: pre-wrap;">Research Grant allocation and Funding Support</span></span></h3>		</div>
                              </div>
                                </div>
                          </div>
                                    </div>
                          </section>
                              <section class="elementor-section elementor-top-section elementor-element elementor-element-215a22a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="215a22a" data-element_type="section">
                                  <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-356fd39" data-id="356fd39" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-1e09df8 elementor-widget elementor-widget-text-editor" data-id="1e09df8" data-element_type="widget" data-widget_type="text-editor.default">
                              <div class="elementor-widget-container">
                                    <ul><li><blockquote><p><span style="caret-color: #000000; color: #000000;"><span style="font-size: 12pt; font-family: Calibri, sans-serif; font-variant-ligatures: normal; font-variant-alternates: normal; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-position: normal; vertical-align: baseline; white-space: pre-wrap;">The Research committee oversees the allocation of research grants and funding. A thorough and transparent evaluation of the grant applications is conducted within the committee, prioriting research projects based on their significance and potential impact and issues recommendations for funding decisions, made by KAR administrative board, to support valuable research endeavors within society.</span></span></p></blockquote></li><li><blockquote><p><span style="caret-color: #000000; color: #000000;"><span style="font-size: 12pt; font-family: Calibri, sans-serif; font-variant-ligatures: normal; font-variant-alternates: normal; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-position: normal; vertical-align: baseline; white-space: pre-wrap;">The committee guides the research for funding opportunities from government, non-profit organizations, and pharmaceutical companies as well as from KAR. </span></span></p></blockquote></li></ul>						</div>
                              </div>
                                </div>
                          </div>
                                    </div>
                          </section>
                              <section class="elementor-section elementor-top-section elementor-element elementor-element-7eb0bd5 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7eb0bd5" data-element_type="section">
                                  <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a457b8a" data-id="a457b8a" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-c8b697b elementor-widget elementor-widget-heading" data-id="c8b697b" data-element_type="widget" data-widget_type="heading.default">
                              <div class="elementor-widget-container">
                            <h3 class="elementor-heading-title elementor-size-default"><span style="white-space: normal; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-weight: normal;"><span style="font-size: 14pt; font-family: Calibri, sans-serif; font-weight: 700; font-style: italic; font-variant-ligatures: normal; font-variant-alternates: normal; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-position: normal; text-decoration: underline; text-decoration-skip-ink: none; vertical-align: baseline; white-space: pre-wrap;">3- </span></span><span id="docs-internal-guid-9d389a9e-7fff-12e8-0ac7-c8073b557a2f" style="white-space: normal; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-weight: normal;"><span style="font-size: 14pt; font-family: Calibri, sans-serif; font-weight: 700; font-style: italic; font-variant-ligatures: normal; font-variant-alternates: normal; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-position: normal; text-decoration: underline; text-decoration-skip-ink: none; vertical-align: baseline; white-space: pre-wrap;">Research Education and Training</span></span></h3>		</div>
                              </div>
                                </div>
                          </div>
                                    </div>
                          </section>
                              <section class="elementor-section elementor-top-section elementor-element elementor-element-85312ee elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="85312ee" data-element_type="section">
                                  <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d4b051f" data-id="d4b051f" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-186a17c elementor-widget elementor-widget-text-editor" data-id="186a17c" data-element_type="widget" data-widget_type="text-editor.default">
                              <div class="elementor-widget-container">
                                    <ul><li><blockquote><p><span id="docs-internal-guid-d3a1a885-7fff-8060-42be-b27adef91ded" style="caret-color: #000000; color: #000000;"><span style="font-size: 12pt; font-family: Calibri, sans-serif; font-variant-ligatures: normal; font-variant-alternates: normal; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-position: normal; vertical-align: baseline; white-space: pre-wrap;">The committee seeks to organize and collaborate in workshops, seminars, and webinars to enhance the research skills and knowledge of rheumatologists. </span></span></p></blockquote></li></ul>						</div>
                              </div>
                                </div>
                          </div>
                                    </div>
                          </section>
                              <section class="elementor-section elementor-top-section elementor-element elementor-element-7a573e7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7a573e7" data-element_type="section">
                                  <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8686029" data-id="8686029" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-9a398be elementor-widget elementor-widget-heading" data-id="9a398be" data-element_type="widget" data-widget_type="heading.default">
                              <div class="elementor-widget-container">
                            <h3 class="elementor-heading-title elementor-size-default"><span style="white-space: normal; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-weight: normal;"><span style="font-size: 14pt; font-family: Calibri, sans-serif; font-weight: 700; font-style: italic; font-variant-ligatures: normal; font-variant-alternates: normal; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-position: normal; text-decoration: underline; text-decoration-skip-ink: none; vertical-align: baseline; white-space: pre-wrap;">4- </span></span><span id="docs-internal-guid-4c1e4848-7fff-7436-6e9a-ed94e9d9eefe" style="white-space: normal; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-weight: normal;"><span style="font-size: 14pt; font-family: Calibri, sans-serif; font-weight: 700; font-style: italic; font-variant-ligatures: normal; font-variant-alternates: normal; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-position: normal; text-decoration: underline; text-decoration-skip-ink: none; vertical-align: baseline; white-space: pre-wrap;">Patient Engagement and Advocacy</span></span></h3>		</div>
                              </div>
                                </div>
                          </div>
                                    </div>
                          </section>
                              <section class="elementor-section elementor-top-section elementor-element elementor-element-91757af elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="91757af" data-element_type="section">
                                  <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-27bbddc" data-id="27bbddc" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-6dbafff elementor-widget elementor-widget-text-editor" data-id="6dbafff" data-element_type="widget" data-widget_type="text-editor.default">
                              <div class="elementor-widget-container">
                                    <ul><li><blockquote><p><span id="docs-internal-guid-2f571316-7fff-da54-c29f-0cedaf0d8bcd" style="caret-color: #000000; color: #000000;"><span style="font-size: 12pt; font-family: Calibri, sans-serif; font-variant-ligatures: normal; font-variant-alternates: normal; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-position: normal; vertical-align: baseline; white-space: pre-wrap;">Patients with Rheumatological conditions are an invaluable partner in the advancement of research in the field of rheumatology. The committee believes in engaging patient advocate groups and representatives in various aspects of research areas ensuring research questions are patient-centered addressing the unmet needs of those living with rheumatic diseases. </span></span></p></blockquote></li></ul>						</div>
                              </div>
                                </div>
                          </div>
                                    </div>
                          </section>
                              <section class="elementor-section elementor-top-section elementor-element elementor-element-b795b9f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b795b9f" data-element_type="section">
                                  <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4c6db99" data-id="4c6db99" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-9616fa9 elementor-widget elementor-widget-heading" data-id="9616fa9" data-element_type="widget" data-widget_type="heading.default">
                              <div class="elementor-widget-container">
                            <h3 class="elementor-heading-title elementor-size-default"><span style="white-space: normal; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-weight: normal;"><span style="font-size: 14pt; font-family: Calibri, sans-serif; font-weight: 700; font-style: italic; font-variant-ligatures: normal; font-variant-alternates: normal; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-position: normal; text-decoration: underline; text-decoration-skip-ink: none; vertical-align: baseline; white-space: pre-wrap;">5- </span></span><span id="docs-internal-guid-9525fc59-7fff-cab5-669e-06d3a22591b2" style="white-space: normal; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-weight: normal;"><span style="font-size: 14pt; font-family: Calibri, sans-serif; font-weight: 700; font-style: italic; font-variant-ligatures: normal; font-variant-alternates: normal; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-position: normal; text-decoration: underline; text-decoration-skip-ink: none; vertical-align: baseline; white-space: pre-wrap;">Guidelines Development</span></span></h3>		</div>
                              </div>
                                </div>
                          </div>
                                    </div>
                          </section>
                              <section class="elementor-section elementor-top-section elementor-element elementor-element-5bb84b6 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5bb84b6" data-element_type="section">
                                  <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ad68023" data-id="ad68023" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-586d81b elementor-widget elementor-widget-text-editor" data-id="586d81b" data-element_type="widget" data-widget_type="text-editor.default">
                              <div class="elementor-widget-container">
                                    <ul><li><blockquote><span style="color: #000000;">The committee is responsible for the revision and development ofKuwait guidelines and recommendations of varies rheumatic diseases</span></blockquote></li></ul>						</div>
                              </div>
                                </div>
                          </div>
                                    </div>
                          </section>
                              <section class="elementor-section elementor-top-section elementor-element elementor-element-98cf86e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="98cf86e" data-element_type="section">
                                  <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f3da23d" data-id="f3da23d" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-25732ba elementor-widget elementor-widget-heading" data-id="25732ba" data-element_type="widget" data-widget_type="heading.default">
                              <div class="elementor-widget-container">
                              </div>
                                </div>
                          </div>
                                    </div>
                          </section>
                                  </div>
                                </div>
                                      </div><!-- .entry-content -->
                      
                      </article><!-- #post-## -->
                      
                        
                      
                      </main>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Committee current Members
          </button>
        </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample" style="">
                  <div class="accordion-body">
              

                    <main id="main" class="site-main col-sm-12 full-width">

	
                      <article id="post-18256" class="post-18256 page type-page status-publish hentry pmpro-has-access">
                          <div class="entry-content">
                                  <div data-elementor-type="wp-page" data-elementor-id="18256" class="elementor elementor-18256" data-elementor-settings="[]">
                                    <div class="elementor-section-wrap">
                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-6ba6a7a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6ba6a7a" data-element_type="section">
                                  <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-16d955c" data-id="16d955c" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-70851e6 elementor-widget elementor-widget-heading" data-id="70851e6" data-element_type="widget" data-widget_type="heading.default">
                              <div class="elementor-widget-container">
                            <style>/*! elementor - v3.5.3 - 28-12-2021 */
                      .elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}</style><h2 class="elementor-heading-title elementor-size-default"><span style="white-space: normal; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-weight: normal;"><span style="font-size: 18pt; font-family: Calibri, sans-serif; font-weight: 700; font-variant-ligatures: normal; font-variant-alternates: normal; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-position: normal; vertical-align: baseline; white-space: pre-wrap;">Current Committee Members</span></span></h2>		</div>
                              </div>
                                </div>
                          </div>
                                    </div>
                          </section>
                              <section class="elementor-section elementor-top-section elementor-element elementor-element-cd68652 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="cd68652" data-element_type="section">
                                  <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b1c134f" data-id="b1c134f" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-6520d27 elementor-widget elementor-widget-heading" data-id="6520d27" data-element_type="widget" data-widget_type="heading.default">
                              <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default"><span style="white-space: normal; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);"><span style="font-size: 14pt; font-family: Calibri, sans-serif; font-variant-ligatures: normal; font-variant-alternates: normal; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-position: normal; vertical-align: baseline; white-space: pre-wrap;"><b><u>Chairperson</u></b></span></span></h2>		</div>
                              </div>
                                </div>
                          </div>
                                    </div>
                          </section>
                              <section class="elementor-section elementor-top-section elementor-element elementor-element-3959ff4 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3959ff4" data-element_type="section">
                                  <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5500446" data-id="5500446" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-5211051 elementor-widget elementor-widget-text-editor" data-id="5211051" data-element_type="widget" data-widget_type="text-editor.default">
                              <div class="elementor-widget-container">
                            <style>/*! elementor - v3.5.3 - 28-12-2021 */
                      .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#818a91;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#818a91;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}</style>				<p><span style="font-weight: 400; color: #000000;"><u><strong>Dr. Anwar Albasri</strong> </u></span></p><ul><li style="font-weight: 400;" aria-level="4"><blockquote><p><span style="font-weight: 400; color: #000000;">BMBCh, FRCPC in Internal medicine and rheumatology&nbsp;</span></p></blockquote></li><li style="font-weight: 400;" aria-level="4"><blockquote><p><span style="font-weight: 400; color: #000000;">Specialist in internal medicine and rheumatology in AlSabah Hospital</span></p></blockquote></li></ul>						</div>
                              </div>
                                </div>
                          </div>
                                    </div>
                          </section>
                              <section class="elementor-section elementor-top-section elementor-element elementor-element-63ca129 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="63ca129" data-element_type="section">
                                  <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-24a510a" data-id="24a510a" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-83f3b8d elementor-widget elementor-widget-heading" data-id="83f3b8d" data-element_type="widget" data-widget_type="heading.default">
                              <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default"><span id="docs-internal-guid-185552bd-7fff-4e73-81ec-c9c3d3eb5e6c" style="white-space: normal; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0);"><span style="font-size: 14pt; font-family: Calibri, sans-serif; font-variant-ligatures: normal; font-variant-alternates: normal; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-position: normal; vertical-align: baseline; white-space: pre-wrap;"><u>Members</u></span></span></h2>		</div>
                              </div>
                                </div>
                          </div>
                                    </div>
                          </section>
                              <section class="elementor-section elementor-top-section elementor-element elementor-element-53b53a6 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="53b53a6" data-element_type="section">
                                  <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-235f7e1" data-id="235f7e1" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-c069b02 elementor-widget elementor-widget-text-editor" data-id="c069b02" data-element_type="widget" data-widget_type="text-editor.default">
                              <div class="elementor-widget-container">
                                    <ul><li style="font-weight: 400;" aria-level="3"><blockquote><span style="font-weight: 400; color: #000000;">Dr. Mohamed Khudadah&nbsp;</span></blockquote></li><li style="font-weight: 400;" aria-level="3"><blockquote><span style="font-weight: 400; color: #000000;">Dr. Wesam Gouda&nbsp;</span></blockquote></li><li style="font-weight: 400;" aria-level="3"><blockquote><span style="font-weight: 400; color: #000000;">Dr. Fatmah Baroon</span></blockquote></li></ul>						</div>
                              </div>
                                </div>
                          </div>
                                    </div>
                          </section>
                              <section class="elementor-section elementor-top-section elementor-element elementor-element-f20137d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f20137d" data-element_type="section">
                                  <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-09ef8ac" data-id="09ef8ac" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-e2434ae elementor-widget elementor-widget-heading" data-id="e2434ae" data-element_type="widget" data-widget_type="heading.default">
                              <div class="elementor-widget-container">
                              </div>
                                </div>
                          </div>
                                    </div>
                          </section>
                                  </div>
                                </div>
                                      </div><!-- .entry-content -->
                      
                      </article><!-- #post-## -->
                      
                        
                      
                      </main>


                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Application Review process
          </button>
        </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <main id="main" class="site-main col-sm-12 full-width">

	
                      <article id="post-18261" class="post-18261 page type-page status-publish hentry pmpro-has-access">
                          <div class="entry-content">
                                  <div data-elementor-type="wp-page" data-elementor-id="18261" class="elementor elementor-18261" data-elementor-settings="[]">
                                    <div class="elementor-section-wrap">
                                    <section class="elementor-section elementor-top-section elementor-element elementor-element-0ae8b4a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0ae8b4a" data-element_type="section">
                                  <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-956a9ac" data-id="956a9ac" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-062d7a2 elementor-widget elementor-widget-text-editor" data-id="062d7a2" data-element_type="widget" data-widget_type="text-editor.default">
                              <div class="elementor-widget-container">
                            <style>/*! elementor - v3.5.3 - 28-12-2021 */
                      .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#818a91;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#818a91;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}</style>				<p><span style="font-weight: 400; color: #000000;">The research committee core objective is to advocate for research in the field of rheumatology, the committee has rigorous criteria concerning the acceptance of applications, allocation of funding, granting access to data from registries of rheumatic diseases in Kuwait, and efficient resource management that are structured, transparent, and ensuring an ethical approach.</span></p>						</div>
                              </div>
                                </div>
                          </div>
                                    </div>
                          </section>
                              <section class="elementor-section elementor-top-section elementor-element elementor-element-4161964 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4161964" data-element_type="section">
                                  <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-eb93642" data-id="eb93642" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-72c4d53 elementor-widget elementor-widget-heading" data-id="72c4d53" data-element_type="widget" data-widget_type="heading.default">
                              <div class="elementor-widget-container">
                            <style>/*! elementor - v3.5.3 - 28-12-2021 */
                      .elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}</style><h2 class="elementor-heading-title elementor-size-default"><span style="white-space: normal; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-weight: normal;"><span style="font-size: 12pt; font-family: Calibri, sans-serif; font-weight: 700; font-variant-ligatures: normal; font-variant-alternates: normal; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-position: normal; text-decoration: underline; text-decoration-skip-ink: none; vertical-align: baseline; white-space: pre-wrap;">Initial screening</span></span></h2>		</div>
                              </div>
                                </div>
                          </div>
                                    </div>
                          </section>
                              <section class="elementor-section elementor-top-section elementor-element elementor-element-4263c44 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4263c44" data-element_type="section">
                                  <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-45d657b" data-id="45d657b" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-9be4445 elementor-widget elementor-widget-text-editor" data-id="9be4445" data-element_type="widget" data-widget_type="text-editor.default">
                              <div class="elementor-widget-container">
                                    <p><span style="color: #000000;"><span style="font-weight: 400;">The committee conducts an initial review of applications to ensure they meet basic eligibility criteria and ethical approval granted by the respective authorities. </span><span style="font-weight: 400;">Applicants must ensure the completeness of the application.</span></span></p>						</div>
                              </div>
                                </div>
                          </div>
                                    </div>
                          </section>
                              <section class="elementor-section elementor-top-section elementor-element elementor-element-60300a8 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="60300a8" data-element_type="section">
                                  <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8359ea4" data-id="8359ea4" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-d03210c elementor-widget elementor-widget-heading" data-id="d03210c" data-element_type="widget" data-widget_type="heading.default">
                              <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default"><span style="white-space: normal; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-weight: normal;"><span style="font-size: 12pt; font-family: Calibri, sans-serif; font-weight: 700; font-variant-ligatures: normal; font-variant-alternates: normal; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-position: normal; text-decoration: underline; text-decoration-skip-ink: none; vertical-align: baseline; white-space: pre-wrap;">Application form</span></span></h2>		</div>
                              </div>
                                </div>
                          </div>
                                    </div>
                          </section>
                              <section class="elementor-section elementor-top-section elementor-element elementor-element-5263347 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5263347" data-element_type="section">
                                  <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-837c1db" data-id="837c1db" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-662c693 elementor-widget elementor-widget-text-editor" data-id="662c693" data-element_type="widget" data-widget_type="text-editor.default">
                              <div class="elementor-widget-container">
                                    <p><span style="color: #000000;"><span style="font-weight: 400;">Please click here to download the application forms. (</span><span style="font-weight: 400;">Pdf link</span><span style="font-weight: 400;">).&nbsp;</span><span style="font-weight: 400;">Applicants need to fill in the details and submit it to the following Email address:&nbsp;</span><span style="font-weight: 400;">(</span><a style="color: #000000;" href="mailto:KAR.research.committee@Karkwt.org"><span style="font-weight: 400;">KAR.research.committee@Karkwt.org</span></a><span style="font-weight: 400;">)</span></span></p><p><span style="font-weight: 400; color: #000000;">Applicants need to specify if application is for:</span></p><ol><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Full Grant (full funding, registry data access, resource allocation including medical writer and statistician)</span></li><li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Partial Grant:</span><ol><li style="font-weight: 400;" aria-level="2"><span style="font-weight: 400; color: #000000;">Full funding only. (no need for access to registry data)</span></li><li style="font-weight: 400;" aria-level="2"><span style="font-weight: 400; color: #000000;">Access to registry data only. (no need for funding, no need for medical writer)</span></li><li style="font-weight: 400;" aria-level="2"><span style="font-weight: 400; color: #000000;">Medical writer and statistician (no need for access to registry data, no need for Funding)</span></li><li style="font-weight: 400;" aria-level="2"><span style="font-weight: 400; color: #000000;">Article processing charges (APCs)</span></li></ol></li></ol>						</div>
                              </div>
                                </div>
                          </div>
                                    </div>
                          </section>
                              <section class="elementor-section elementor-top-section elementor-element elementor-element-000843e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="000843e" data-element_type="section">
                                  <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a438ffa" data-id="a438ffa" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-8973acb elementor-widget elementor-widget-heading" data-id="8973acb" data-element_type="widget" data-widget_type="heading.default">
                              <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default"><span style="white-space: normal; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-weight: normal;"><span style="font-size: 12pt; font-family: Calibri, sans-serif; font-weight: 700; font-variant-ligatures: normal; font-variant-alternates: normal; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-position: normal; text-decoration: underline; text-decoration-skip-ink: none; vertical-align: baseline; white-space: pre-wrap;">Review Panel Meetings</span></span></h2>		</div>
                              </div>
                                </div>
                          </div>
                                    </div>
                          </section>
                              <section class="elementor-section elementor-top-section elementor-element elementor-element-17cea9b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="17cea9b" data-element_type="section">
                                  <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-384feb9" data-id="384feb9" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-3bddd7f elementor-widget elementor-widget-text-editor" data-id="3bddd7f" data-element_type="widget" data-widget_type="text-editor.default">
                              <div class="elementor-widget-container">
                                    <p><span id="docs-internal-guid-718db055-7fff-5a02-42dd-85ce4f13a332" style="caret-color: #000000; color: #000000;"><span style="font-size: 12pt; font-family: Calibri, sans-serif; font-variant-ligatures: normal; font-variant-alternates: normal; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-position: normal; vertical-align: baseline; white-space: pre-wrap;">All applications will be reviewed on regular bases. Applicants should expect a response in a period of 21 days form the time of submission. </span></span></p><p><span style="color: #000000;"><b>Review process: (declaration)</b></span></p><p><span style="font-weight: 400; color: #000000;">The committee has a transparent Scoring and Feedback System. A scoring system for evaluation is utilized, ensuring each application is judged fairly. The committee reserve the right to provide detailed feedback to unsuccessful applicants, offering insights that could strengthen future applications.</span></p>						</div>
                              </div>
                                </div>
                          </div>
                                    </div>
                          </section>
                              <section class="elementor-section elementor-top-section elementor-element elementor-element-490d4e8 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="490d4e8" data-element_type="section">
                                  <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-cbc3801" data-id="cbc3801" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-65bbff2 elementor-widget elementor-widget-heading" data-id="65bbff2" data-element_type="widget" data-widget_type="heading.default">
                              <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default"><span style="white-space: normal; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-weight: normal;"><p dir="ltr" style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 12pt; font-family: Calibri, sans-serif; font-weight: 700; font-variant-ligatures: normal; font-variant-alternates: normal; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-position: normal; text-decoration: underline; text-decoration-skip-ink: none; vertical-align: baseline; white-space: pre-wrap;">Post-Award Monitoring and Support:</span><span style="color: rgb(110, 193, 228); font-family: var( --e-global-typography-primary-font-family ), Sans-serif; white-space: pre-wrap;"></span></p></span></h2>		</div>
                              </div>
                                </div>
                          </div>
                                    </div>
                          </section>
                              <section class="elementor-section elementor-top-section elementor-element elementor-element-03b66c6 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="03b66c6" data-element_type="section">
                                  <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-255bbdc" data-id="255bbdc" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-d7a5a33 elementor-widget elementor-widget-text-editor" data-id="d7a5a33" data-element_type="widget" data-widget_type="text-editor.default">
                              <div class="elementor-widget-container">
                                    <p><span style="font-weight: 400; color: #000000;">Once an application is accepted, regular check-ins and progress reports should be required. The committee can offer support to researchers.</span></p>						</div>
                              </div>
                                </div>
                          </div>
                                    </div>
                          </section>
                              <section class="elementor-section elementor-top-section elementor-element elementor-element-2ffebe6 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2ffebe6" data-element_type="section">
                                  <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-53d4c2d" data-id="53d4c2d" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-0add4f2 elementor-widget elementor-widget-heading" data-id="0add4f2" data-element_type="widget" data-widget_type="heading.default">
                              <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default"><span style="white-space: normal; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-weight: normal;"><span style="font-size: 12pt; font-family: Calibri, sans-serif; font-weight: 700; font-variant-ligatures: normal; font-variant-alternates: normal; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-position: normal; text-decoration: underline; text-decoration-skip-ink: none; vertical-align: baseline; white-space: pre-wrap;">Ethical Considerations</span></span></h2>		</div>
                              </div>
                                </div>
                          </div>
                                    </div>
                          </section>
                              <section class="elementor-section elementor-top-section elementor-element elementor-element-6aae44e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6aae44e" data-element_type="section">
                                  <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1746d0f" data-id="1746d0f" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-0b74e3f elementor-widget elementor-widget-text-editor" data-id="0b74e3f" data-element_type="widget" data-widget_type="text-editor.default">
                              <div class="elementor-widget-container">
                                    <p dir="ltr" style="line-height: 1.38; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 12pt; font-family: Calibri, sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-alternates: normal; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-position: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">The committee will ensure that proposed research adheres to ethical guidelines and standards.</span></p><p dir="ltr" style="line-height: 1.38; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 12pt; font-family: Calibri, sans-serif; color: #000000; background-color: transparent; font-weight: 400; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-alternates: normal; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-position: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">If ethical concerns arise during the review, the committee may request further clarification or modifications. </span></p>						</div>
                              </div>
                                </div>
                          </div>
                                    </div>
                          </section>
                              <section class="elementor-section elementor-top-section elementor-element elementor-element-4844049 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4844049" data-element_type="section">
                                  <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ae31d9c" data-id="ae31d9c" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                      <div class="elementor-element elementor-element-b41e8bc elementor-widget elementor-widget-heading" data-id="b41e8bc" data-element_type="widget" data-widget_type="heading.default">
                              <div class="elementor-widget-container">
                              </div>
                                </div>
                          </div>
                                    </div>
                          </section>
                                  </div>
                                </div>
                                      </div><!-- .entry-content -->
                      
                      </article><!-- #post-## -->
                      
                        
                      
                      </main>
                  </div>
                </div>
              </div>



              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            Resources
          </button>
        </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                   
                    <span style="color: #000000;"><b>Journal specialized in Rheumatology in descending order according to 2023 ranking</b></span>

                    <span style="color: #000000;"><b><i>WEB OF SCIENCE and SCOPUS INDEXED</i></b></span>
                    <ol>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Annals of the Rheumatic Diseases </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Lancet Rheumatology, </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">RMD Open </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Arthritis Research and Therapy </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Biologics: Targets and Therapy </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Therapeutic Advances in Musculoskeletal Disease </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Lupus Science and Medicine </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Rheumatology Advances in Practice </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Pediatric Rheumatology </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">BMC Musculoskeletal Disorders</span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Advances in Rheumatology </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Open Access Rheumatology: Research and Reviews </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Clinical Medicine Insights: Arthritis and Musculoskeletal Disorders </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">International Journal of Rheumatology </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Reumatismo </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Archives of Rheumatology</span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Acta Reumatologica Portuguesa </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Egyptian Rheumatologist </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Indian Journal of Rheumatology </span></li>
                    </ol>
                    <span style="color: #000000;"><b><i>SCOPUS INDEXED ONLY</i></b></span>
                    <ol>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Annals of the Rheumatic Diseases </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Lancet Rheumatology, </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">RMD Open </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Arthritis Research and Therapy </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Rheumatology and Therapy </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">ACR Open Rheumatology </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Biologics: Targets and Therapy </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Therapeutic Advances in Musculoskeletal Disease </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Lupus Science and Medicine </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Rheumatology Advances in Practice </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Pediatric Rheumatology </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">BMC Musculoskeletal Disorders </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">BMC Rheumatology </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Advances in Rheumatology </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Open Access Rheumatology: Research and Reviews </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Clinical Medicine Insights: Arthritis and Musculoskeletal Disorders </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Journal of Rheumatic Disease</span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Reumatologia</span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Mediterranean Journal of Rheumatology </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">International Journal of Rheumatology </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Reumatismo</span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Archives of Rheumatology </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Open Rheumatology Journal </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Acta Reumatologica Portuguesa</span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Egyptian Rheumatologist</span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Indian Journal of Rheumatology</span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Revista Colombiana de Reumatologia </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Sovremennaya Revmatologiya </span></li>
                       <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Romanian Journal of Rheumatology </span></li>
                    </ol>

                    <u><span style="white-space: normal; caret-color: rgb(0, 0, 0); color: rgb(0, 0, 0); font-weight: normal;"><span style="font-size: 18pt; font-family: Calibri, sans-serif; font-weight: 700; font-variant-ligatures: normal; font-variant-alternates: normal; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-position: normal; vertical-align: baseline; white-space: pre-wrap;">How To apply for Ethical Approval</span></span></u>

                    <ol>
                      <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Applicant to fill out the Ethical approval application form </span></li>
                      <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">The Ethical approval application form to be sign by Head of Department and then Hospital Director. </span></li>
                      <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">This document should be attached to applicant study protocol, informed consent, and privacy form. </span></li>
                      <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">All these papers should be emailed or sent through what’s up to Office of the Assistant Undersecretary for Planning and Quality Affairs. Contact information are available on the ethical approval application form. </span></li>
                      <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; color: #000000;">Ministry committee will review the applications. Once it is approved, a document will be created by the committee with title “facilitate the task/project”. </span></li>
                      <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;"><span style="color: #000000;">This document will be sent from the ministry to hospital director and then distributed on all hospital department you wanted to be included.</span> </span></li>
                   </ol>
                  </div>
                </div>
              </div>





              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
          <button class="accordion-button {{ old('hidden') == 'done' ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
            APPLICATION INFORMATION

          </button>
        </h2>
                <div id="collapseFive" class="accordion-collapse collapse {{ old('hidden') == 'done' ? 'show' : 'hidden' }}" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <hr />
                    <div class="card">
                      <div class="card-body">
                        <form action="{{route('add-application')}}" method="POST" id="myForm" target="_top">
                          @csrf
                          <div class="mb-3">
                            <input type="hidden" value="done" name="hidden">

                            <label class="form-label">Name:</label>
                            <input type="text" name="name" value="{{old('name')}}" class="form-control" />
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Position:</label>
                            <input type="text" name="position" value="{{old('position')}}" class="form-control" />
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Work Address:</label>
                            <input type="text" name="workAddress" value="{{old('work-address')}}" class="form-control" placeholder="" />
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Email:</label>
                            <input
                              type="email"
                              name="email"
                              value="{{old('email')}}"
                              class="form-control"
                              placeholder="example@gmail.com"
                            />
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Contact number:</label>
                            <input type="text" value="{{old('number')}}" name="number" class="form-control" />
                          </div>
                      </div>
                    </div>
        
                    <h6 class="mb-0 text-uppercase">PROJECT INFORMATION</h6>
                    <hr />
                    <div class="card">
                      <div class="card-body">
                          <div class="mb-3">
                            <label class="form-label">Title:</label>
                            <input type="text" name="title" value="{{old('title')}}" class="form-control" />
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Project Leader(s):</label>
                            <input type="text" name="leader"  value="{{old('leader')}}" class="form-control" />
                          </div>
        
                          <div class="row gy-1 mb-3">
                            <label class="form-label">Project Members:</label>
        
                            <div class="col-md-9">
                              <input
                                id="todo-input"
                                type="text"
                                class="form-control"
                                value=""
                                {{-- name="jsMembers[]" --}}
                                
                              />
                            </div>
                            <div class="col-md-3 text-end d-grid">
                              <button
                                type="button"
                                onclick="CreateTodo();"
                                class="btn btn-primary"
                              >
                                Add Member
                              </button>
                            </div>
                          </div>
                         
        
        
                          <div class="form-row mt-3">
                            <div class="col-12">
                              <div id="todo-container"></div>
                            </div>
                          </div>
        
                          <div class="row gy-1">
                            <label class="form-label">Objectives:</label>
        
                            <div class="col-md-9">
                              <input
                                id="todo-input2"
                                type="text"
                                class="form-control"
                                value=""
                                {{-- name="jsobjectives[]" --}}
                              />
                            </div>
                            <div class="col-md-3 text-end d-grid">
                              <button
                                type="button"
                                onclick="CreateTodo2();"
                                class="btn btn-primary"
                              >
                                Add objective
                              </button>
                            </div>
                          </div>
        
                          <div class="form-row mt-3">
                            <div class="col-12">
                              <div id="todo-container2"></div>
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Description:</label>
                            <textarea
                              class="form-control"
                              id="text"
                              name="des"
                              maxlength="500"
                              placeholder="Type in your message"
                              rows="5"
                            ></textarea>
                            <span
                              class="pull-right label label-default"
                              id="count_message"
                            ></span>
                          </div>
                      </div>
                    </div>
        
                    <div id="repeater">
                      <!-- Repeater Heading -->
        
                      <div class="card">
                        <div class="card-body">
                          <div
                            class="d-flex align-items-center justify-content-between"
                          >
                            <h5 class="mb-0">Project organization</h5>
                            <button type="button" class="btn btn-primary repeater-add-btn px-4">
                              Add
                            </button>
                          </div>
                        </div>
                      </div>
        
                      <div class="items" data-group="test">
                        <div class="card">
                          <div class="card-body">
                            <!-- Repeater Content -->
                            <div class="item-content">
                              <div class="mb-3">
                                <label for="inputEmail2" class="form-label">Start</label>
                                <input
                                  type="date"
                                  class="form-control"
                                  id="inputEmail2"
                                  data-skip-name="true"
        
                                  data-name="pstart[]"
        
                                  name="pstart[]"
                                />
                              </div>
                              <div class="mb-3">
                                <label for="inputEmail3" class="form-label">End</label>
                                <input
                                  type="date"
                                  class="form-control"
                                  id="inputEmail3"
                                  data-skip-name="true"
                                  data-name="pend[]"
                                  name="pend[]"
        
                                />
                              </div>
                              <div class="mb-3">
                                <label for="inputEmail4" class="form-label"
                                  >Description</label
                                >
                                <textarea class="form-control" rows="5" data-skip-name="true" name="pdes[]"></textarea>
                              </div>
                            </div>
                            <!-- Repeater Remove Btn -->
                            <div class="repeater-remove-btn">
                              <button class="btn btn-danger remove-btn px-4">
                                Remove
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
        
                    <h6 class="mb-0 text-uppercase"></h6>
                    <hr />
                    <div class="card">
                      <div class="card-body">
                        <div class="row gy-1 mb-3">
                            <label class="form-label">Targeted Journal:</label>
        
                            <div class="col-md-9">
                              <input
                                id="todo-input3"
                                type="text"
                                class="form-control"
                                value=""
                                {{-- name="jsjournal[]" --}}
                              />
                            </div>
                            <div class="col-md-3 text-end d-grid">
                              <button
                                type="button"
                                onclick="CreateTodo3();"
                                class="btn btn-primary"
                              >
                                Add Journal
                              </button>
                            </div>
                          </div>
        
                          <div class="form-row mt-3">
                            <div class="col-12">
                              <div id="todo-container3"></div>
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Grant Type :</label>
        
                            <div class="form-check mb-4">
                              <input
                                class="form-check-input"
                                type="radio"
        
                                value="Full grant (full funding, registry data access, resource allocation including medical writer and statistician)"
                                name="grant"
                                id="flexRadioDefault1"
                              />
                              <label class="form-check-label" for="flexRadioDefault1">
                                Full grant (full funding, registry data access, resource allocation including medical writer and statistician)
                              </label>
                            </div>
        
                            <div class="form-check form-check-success">
                              <div class="row">
                                <div class="col-sm-3">
                                  <input
                                    class="form-check-input"
                                    type="radio"
                                    name="grant"
                                    value="Partial Grant"
                                    id="flexRadioDefault2"
                                  />
                                  <label
                                    class="form-check-label"
                                    for="flexRadioDefault2"
                                  >
                                    Partial Grant
                                  </label>
                                </div>
        
                                <div class="col-sm-3">
                                  <div class="form-check">
                                    <input
                                      class="form-check-input"
                                      type="checkbox"
                                      value="Electronic Survey Creation"
                                      id="flexCheckDefault"
                                      name="grant_checked[]"
        
                                    />
                                    <label
                                      class="form-check-label"
                                      for="flexCheckDefault"
                                    >
                                      Electronic Survey Creation
                                    </label>
                                  </div>
        
                                  <div class="form-check">
                                    <input
                                      class="form-check-input"
                                      type="checkbox"
                                      value="Statistical analysis"
                                      id="flexCheckDefault2"
                                      name="grant_checked[]"
        
                                    />
                                    <label
                                      class="form-check-label"
                                      for="flexCheckDefault2"
                                    >
                                      Statistical analysis
                                    </label>
                                  </div>
        
                                  <div class="form-check">
                                    <input
                                      class="form-check-input"
                                      type="checkbox"
                                      value="Medical writer"
                                      id="flexCheckDefault3"
                                      name="grant_checked[]"
        
                                    />
                                    <label
                                      class="form-check-label"
                                      for="flexCheckDefault3"
                                    >
                                      Medical writer
                                    </label>
                                  </div>
        
                                  <div class="form-check">
                                    <input
                                      class="form-check-input"
                                      type="checkbox"
                                      value="Article process charges (APCs)"
                                      id="flexCheckDefault4"
                                      name="grant_checked[]"
        
                                    />
                                    <label
                                      class="form-check-label"
                                      for="flexCheckDefault4"
                                    >
                                      Article process charges (APCs)
                                    </label>
                                  </div>
        
                                  <div class="form-check">
                                    <input
                                      class="form-check-input"
                                      type="checkbox"
                                      value="Access to registry data only"
                                      id="flexCheckDefault5"
                                      name="grant_checked[]"
        
                                    />
                                    <label
                                      class="form-check-label"
                                      for="flexCheckDefault5"
                                    >
                                      Access to registry data only
                                    </label>
                                  </div>
        
                                  <div class="form-check">
                                    <input
                                      class="form-check-input"
                                      type="checkbox"
                                      value="Others"
                                      id="flexCheckDefault6"
                                      name="grant_checked[]"
        
                                    />
                                    <label
                                      class="form-check-label"
                                      for="flexCheckDefault6"
                                    >
                                      Others, Specify:
                                    </label>
                                  </div>
        
                                  <input type="text" id="grant-other" name="grantOther" class="form-control" />
                                </div>
                              </div>
                            </div>
                          </div>
        
        
        
                          <div class="bt-container">
        
        
                          <button type="submit" class="btn btn-primary bt-form">Submit Now</button>
        
                        </div>
        
                        </form>
                      </div>
                    </div>
        
                  </div>
                </div>
                <!--end row-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


          
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="{{ asset('adminbackend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <!--plugins-->
    <script src="{{ asset('adminbackend/assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('adminbackend/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
    <script src="{{ asset('adminbackend/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
    <script src="{{ asset('adminbackend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    <!--app JS-->
    <script src="{{ asset('adminbackend/assets/js/app.js')}}"></script>
    <script>
      // to do list

      var todos = [];
      var currentTodo = {
        text: "",
        done: false,
        id: 0,
      };
      document.getElementById("todo-input").oninput = function (e) {
        currentTodo.text = e.target.value;
      };
      /*
			//jQuery Version
			$('#todo-input').on('input',function(e){
				currentTodo.text = e.target.value;
			   });
			*/
      function DrawTodo(todo) {
        document.getElementById("todo-input").value = "";

        var newTodoHTML = `
			<div class="pb-3 todo-item" todo-id="${todo.id}">
				<div class="input-group">
					
					
					
					<input type="text" name="members[]"  class="form-control ${
            todo.done && " todo-done "
          } " aria-label="Text input with checkbox" value="${todo.text}">
					
						<button todo-id="${
              todo.id
            }" class="btn btn-outline-secondary bg-danger text-white" type="button" onclick="DeleteTodo(this);" id="button-addon2 ">X</button>
					
				</div>
			</div>
			  `;
        var dummy = document.createElement("DIV");
        dummy.innerHTML = newTodoHTML;
        document
          .getElementById("todo-container")
          .appendChild(dummy.children[0]);
        /*
				//jQuery version
				 var newTodo = $.parseHTML(newTodoHTML);
				 $("#todo-container").append(newTodo);
				*/
      }

      function RenderAllTodos() {
        var container = document.getElementById("todo-container");
        while (container.firstChild) {
          container.removeChild(container.firstChild);
        }
        /*
				//jQuery version
				  $("todo-container").empty();
				*/
        for (var i = 0; i < todos.length; i++) {
          DrawTodo(todos[i]);
        }
      }
      RenderAllTodos();

      function DeleteTodo(button) {
        var deleteID = parseInt(button.getAttribute("todo-id"));
        /*
				//jQuery version
				  var deleteID = parseInt($(button).attr("todo-id"));
				*/
        for (let i = 0; i < todos.length; i++) {
          if (todos[i].id === deleteID) {
            todos.splice(i, 1);
            RenderAllTodos();
            break;
          }
        }
      }

      function TodoChecked(id) {
        todos[id].done = !todos[id].done;
        RenderAllTodos();
      }

      function CreateTodo() {
        newtodo = {
          text: currentTodo.text,
          done: false,
          id: todos.length,
        };
        todos.push(newtodo);
        RenderAllTodos();
      }

      var text_max = 500;
      $("#count_message").html("0 / " + text_max);

      $("#text").keyup(function () {
        var text_length = $("#text").val().length;
        var text_remaining = text_max - text_length;

        $("#count_message").html(text_length + " / " + text_max);
      });
    </script>

    <script src="{{ asset('adminbackend/assets/plugins/form-repeater/repeater.js')}}"></script>
    <script>
      /* Create Repeater */
      $("#repeater").createRepeater({
        showFirstItemToDefault: true,
      });
    </script>

    <script>
      var todos2 = [];
      var currentTodo2 = {
        text: "",
        done: false,
        id: 0,
      };
      document.getElementById("todo-input2").oninput = function (e) {
        currentTodo2.text = e.target.value;
      };
      /*
			//jQuery Version
			$('#todo-input').on('input',function(e){
				currentTodo.text = e.target.value;
			   });
			*/
      function DrawTodo2(todo) {
        document.getElementById("todo-input2").value = "";

        var newTodoHTML2 = `
			<div class="pb-3 todo-item" todo-id="${todo.id}">
				<div class="input-group">
					
					
					
					<input type="text" name="objectives[]"  class="form-control ${
            todo.done && " todo-done "
          } " aria-label="Text input with checkbox" value="${todo.text}">
					
						<button todo-id="${
              todo.id
            }" class="btn btn-outline-secondary bg-danger text-white" type="button" onclick="DeleteTodo2(this);" id="button-addon2 ">X</button>
					
				</div>
			</div>
			  `;
        var dummy = document.createElement("DIV");
        dummy.innerHTML = newTodoHTML2;
        document
          .getElementById("todo-container2")
          .appendChild(dummy.children[0]);
        /*
				//jQuery version
				 var newTodo = $.parseHTML(newTodoHTML);
				 $("#todo-container").append(newTodo);
				*/
      }

      function RenderAllTodos2() {
        var container2 = document.getElementById("todo-container2");
        while (container2.firstChild) {
          container2.removeChild(container2.firstChild);
        }
        /*
				//jQuery version
				  $("todo-container").empty();
				*/
        for (var i = 0; i < todos2.length; i++) {
          DrawTodo2(todos2[i]);
        }
      }
      RenderAllTodos2();

      function DeleteTodo2(button) {
        var deleteID = parseInt(button.getAttribute("todo-id"));
        /*
				//jQuery version
				  var deleteID = parseInt($(button).attr("todo-id"));
				*/
        for (let i = 0; i < todos2.length; i++) {
          if (todos2[i].id === deleteID) {
            todos2.splice(i, 1);
            RenderAllTodos2();
            break;
          }
        }
      }

      function TodoChecked2(id) {
        todos2[id].done = !todos2[id].done;
        RenderAllTodos2();
      }

      function CreateTodo2() {
        newtodo = {
          text: currentTodo2.text,
          done: false,
          id: todos2.length,
        };
        todos2.push(newtodo);
        RenderAllTodos2();
      }
    </script>

    <script>
      var todos3 = [];
      var currentTodo3 = {
        text: "",
        done: false,
        id: 0,
      };
      document.getElementById("todo-input3").oninput = function (e) {
        currentTodo3.text = e.target.value;
      };
      /*
  //jQuery Version
  $('#todo-input').on('input',function(e){
    currentTodo.text = e.target.value;
     });
  */
      function DrawTodo3(todo) {
        document.getElementById("todo-input3").value = "";

        var newTodoHTML3 = `
  <div class="pb-3 todo-item" todo-id="${todo.id}">
    <div class="input-group">
      
      
      
      <input type="text" name="journals[]"  class="form-control ${
        todo.done && " todo-done "
      } " aria-label="Text input with checkbox" value="${todo.text}">
      
        <button todo-id="${
          todo.id
        }" class="btn btn-outline-secondary bg-danger text-white" type="button" onclick="DeleteTodo3(this);" id="button-addon2 ">X</button>
      
    </div>
  </div>
    `;
        var dummy = document.createElement("DIV");
        dummy.innerHTML = newTodoHTML3;
        document
          .getElementById("todo-container3")
          .appendChild(dummy.children[0]);
        /*
    //jQuery version
     var newTodo = $.parseHTML(newTodoHTML);
     $("#todo-container").append(newTodo);
    */
      }

      function RenderAllTodos3() {
        var container3 = document.getElementById("todo-container3");
        while (container3.firstChild) {
          container3.removeChild(container3.firstChild);
        }
        /*
    //jQuery version
      $("todo-container").empty();
    */
        for (var i = 0; i < todos3.length; i++) {
          DrawTodo3(todos3[i]);
        }
      }
      RenderAllTodos3();

      function DeleteTodo3(button) {
        var deleteID = parseInt(button.getAttribute("todo-id"));
        /*
    //jQuery version
      var deleteID = parseInt($(button).attr("todo-id"));
    */
        for (let i = 0; i < todos3.length; i++) {
          if (todos3[i].id === deleteID) {
            todos3.splice(i, 1);
            RenderAllTodos3();
            break;
          }
        }
      }

      function TodoChecked3(id) {
        todos3[id].done = !todos2[id].done;
        RenderAllTodos3();
      }

      function CreateTodo3() {
        newtodo = {
          text: currentTodo3.text,
          done: false,
          id: todos3.length,
        };
        todos3.push(newtodo);
        RenderAllTodos3();
      }
    </script>

    <script>



/*

document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector('form'); // Adjust this if needed to select the correct form
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Stop the form from submitting immediately

        // Remove old hidden inputs if any to avoid duplicates
        document.querySelectorAll('input[name="jsMembers[]"]').forEach(input => input.remove());
        document.querySelectorAll('input[name="jsObjectives[]"]').forEach(input => input.remove());

        // Collect member values from visible inputs
        const members = Array.from(document.querySelectorAll('input[name="members[]"]')).map(input => input.value);



        alert(members); // Alert the members array to check what is captured

        // Create hidden inputs for each member and append to the form
        members.forEach(member => {
            const hiddenInput = document.createElement('input');
            hiddenInput.type = 'hidden';
            hiddenInput.name = 'jsMembers[]'; // Use a different name to differentiate from visible inputs if needed
            hiddenInput.value = member;
            form.appendChild(hiddenInput);
        });

        const objectives = Array.from(document.querySelectorAll('input[name="objectives[]"]')).map(input => input.value);

        alert(objectives); // Alert the members array to check what is captured

        objectives.forEach(objective => {
            const hiddenInput = document.createElement('input');
            hiddenInput.type = 'hidden';
            hiddenInput.name = 'jsObjectives[]'; // Use a different name to differentiate from visible inputs if needed
            hiddenInput.value = objective;
            form.appendChild(hiddenInput);
        });




        // const pstart = Array.from(document.querySelectorAll('input[name="pstart[]"]')).map(input => input.value);

       // var startDate = document.querySelector('input[name="pstart[]"]').value;
 
           // Access the input element by its `data-name` attribute
           const startDate = Array.from(document.querySelectorAll('input[name="pstart[]"]')).map(input => input.value);

           const endDate = Array.from(document.querySelectorAll('input[name="pend[]"]')).map(input => input.value);


           const des = Array.from(document.querySelectorAll('input[name="pdes[]"]')).map(input => input.value);

  //  var endDate = document.querySelector('input[data-name="pend[]"]').value;

// Log the value to the console


// this working
alert(`end data values ${endDate}`); // Alert the members array to check what is captured

// why this not working and get null vlaues
alert(`Start data values ${startDate}`); // Alert the members array to check what is captured

// why this also not working and get null vlaues

alert(`des values ${des}`); // Alert the members array to check what is captured


        // Now submit the form
       // form.submit();
    });
});

*/

document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector('form');
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Stop the form from submitting immediately

        // Simplified data collection using clearer selectors
        const members = Array.from(document.querySelectorAll('input[name="members[]"]')).map(input => input.value);
        const objectives = Array.from(document.querySelectorAll('input[name="objectives[]"]')).map(input => input.value);
        const journals = Array.from(document.querySelectorAll('input[name="journals[]"]')).map(input => input.value);

        const projectStartDates = Array.from(document.querySelectorAll('input[name="pstart[]"]')).map(input => input.value);
        const projectEndDates = Array.from(document.querySelectorAll('input[name="pend[]"]')).map(input => input.value);
        const projectDescriptions = Array.from(document.querySelectorAll('textarea[name="pdes[]"]')).map(textarea => textarea.value);

        // Display captured data for verification
        // alert(`Members: ${members.join(", ")}`);
        // alert(`Objectives: ${objectives.join(", ")}`);
        // alert(`Journal Entries: ${journals.join(", ")}`);
        // alert(`Project Start Dates: ${projectStartDates.join(", ")}`);
        // alert(`Project End Dates: ${projectEndDates.join(", ")}`);
        // alert(`Project Descriptions: ${projectDescriptions.join(", ")}`);


        members.forEach(member => {
            const hiddenInput = document.createElement('input');
            hiddenInput.type = 'hidden';
            hiddenInput.name = 'jsMembers[]'; // Use a different name to differentiate from visible inputs if needed
            hiddenInput.value = member;
            form.appendChild(hiddenInput);
        });



        objectives.forEach(objective => {
            const hiddenInput = document.createElement('input');
            hiddenInput.type = 'hidden';
            hiddenInput.name = 'jsobjectives[]'; // Use a different name to differentiate from visible inputs if needed
            hiddenInput.value = objective;
            form.appendChild(hiddenInput);
        });



        projectStartDates.forEach(projectStartDate => {
            const hiddenInput = document.createElement('input');
            hiddenInput.type = 'hidden';
            hiddenInput.name = 'jsprojectStartDate[]'; // Use a different name to differentiate from visible inputs if needed
            hiddenInput.value = projectStartDate;
            form.appendChild(hiddenInput);
        });


        projectEndDates.forEach(projectEndDate => {
            const hiddenInput = document.createElement('input');
            hiddenInput.type = 'hidden';
            hiddenInput.name = 'jsprojectEndDate[]'; // Use a different name to differentiate from visible inputs if needed
            hiddenInput.value = projectEndDate;
            form.appendChild(hiddenInput);
        });


        projectDescriptions.forEach(projectDescription => {
            const hiddenInput = document.createElement('input');
            hiddenInput.type = 'hidden';
            hiddenInput.name = 'jsprojectDescription[]'; // Use a different name to differentiate from visible inputs if needed
            hiddenInput.value = projectDescription;
            form.appendChild(hiddenInput);
        });


        journals.forEach(journal => {
            const hiddenInput = document.createElement('input');
            hiddenInput.type = 'hidden';
            hiddenInput.name = 'jsjournal[]'; // Use a different name to differentiate from visible inputs if needed
            hiddenInput.value = journal;
            form.appendChild(hiddenInput);
        });
        // Optionally submit the form if all data is validated
        form.submit();
    });
});



          </script>


<script>

document.addEventListener('DOMContentLoaded', function() {
    var radioButton = document.getElementById('flexRadioDefault1');
    var radioButton2 = document.getElementById('flexRadioDefault2');

    radioButton.addEventListener('change', function() {
        if (this.checked) {
            //alert('Partial Grant selected');

            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
checkboxes.forEach(function(checkbox) {
    checkbox.checked = false;
});



var textInputs = document.querySelectorAll('input[name="grant-other"]');
textInputs.forEach(function(input) {
    input.value = "";
});


        }
    });






    var checkboxes = document.querySelectorAll('input[type="checkbox"]');

checkboxes.forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
        radioButton.checked = false;
        radioButton2.checked = true;
    });
});





var grantOther = document.getElementById('grant-other');

var otherCheckBox = document.getElementById('flexCheckDefault6');


grantOther.addEventListener('input', function() {

  otherCheckBox.checked = true;
  radioButton2.checked = true;

  if(this.value == "")
  {
    otherCheckBox.checked = false;

  }

});


});

</script>

  </body>
</html>
