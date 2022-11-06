@extends('layouts.master')
@section('css')
    <!--- Internal Select2 css-->
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
<!--- Internal Select2 css-->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<!---Internal Fileupload css-->
<link href="{{URL::asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>
<!---Internal Fancy uploader css-->
<link href="{{URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet" />
<!--Internal Sumoselect css-->
<link rel="stylesheet" href="{{URL::asset('assets/plugins/sumoselect/sumoselect-rtl.css')}}">
<!--Internal  TelephoneInput css-->
<link rel="stylesheet" href="{{URL::asset('assets/plugins/telephoneinput/telephoneinput-rtl.css')}}">




@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Forms</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    Form-wizards</span>
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content">

            <div class="pr-1 mb-3 mb-xl-0">
                <button type="button" class="btn btn-warning  btn-icon ml-2"><i class="mdi mdi-refresh"></i></button>
            </div>

        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div id='projectbuild'>
        <div>
                <form  method="post" action = "{{route('projects.update',$project->id)}}"
                                enctype="multipart/form-data" >
                    @csrf
                <div class="row">
                    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                        <!--div-->
                        <div class="card">
                             @include('admin.project.nameedit')
                        </div>
                    </div>

                    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									سعر وخطة الدفع
								</div>
								<div class="row row-sm">
										<div class="col-lg-6">
											<div class="form-group has-success mg-b-0">
                                                <label class="form-label"> السعر </label>
												<input name='price' value= "{{ $project->price }}" class="form-control"  required="" type="text" >
											</div>
										</div>
										<div class="col-lg-6 mg-t-20 mg-lg-t-0">
											<div class="form-group has-danger mg-b-0">
                                            <label class="form-label"> خطة الدفع (كام دفعه) </label>
											<input value= "{{ $project->pay_plan }}" name="pay_plan"  class="form-control"   type="number" readonly>
											</div>
										</div>
                                        @foreach(App\Models\Payment::all() as $t)
                                            @if($t->project_id  == $project->id)
                                                <div class="col-lg-3 mt-1" >
											        <div class="form-group has-success mg-b-0">
                                                        <label class="form-label">  </label>
											            <input  type="number" multiple name='pers[]' value="{{ $t-> pers}}" placeholder="10%" class="form-control"    >
											        </div>
										        </div>
                                            @endif
                                        @endforeach
								</div>
							</div>
						</div>
					</div>


                    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5"> عنوان المشروع
								</div>

								<div class="row row-sm mg-b-20">
									<div class="col-lg-6 mg-t-20 mg-lg-t-0">
										<p class="mg-b-10">  المنطقة </p>
                                        <select  name='region_id'     class="form-control">
                                            @foreach (App\Models\Location::all() as $t )
                                                <option  @if($t->id == $project->region_id) selected @endif value="{{$t->id}}" >{{$t->location}}</option>
                                            @endforeach
										</select>
									</div>
									<div class="col-lg-6 mg-t-20 mg-lg-t-0">
										<p class="mg-b-10">  Area </p>
                                        <select  name='area_id'   class="form-control">
                                        @foreach (App\Models\Area::all() as $t )
                                            @if($t->region_id == $project->region_id)
                                                <option @if($t->id == $project->area_id) selected @endif value="{{$t->id}}" > {{ $t->area }}</option>

                                            @endif
                                        @endforeach
										</select>
									</div><!-- col-4 -->
								</div>

							</div>
						</div>
					</div>
                    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									خطة
								</div>


									<div class="row row-sm">
										<div class="col-lg-6">
											<div class="form-group has-success mg-b-0">
                                                <label class="form-label"> صوره </label>
												<input name='plan_image'  class="form-control"   type="file" >

                                                <!-- <img src="{{asset('images/projects/plan/'.$project->plans)}}"
                                                height="50px" width="50px"> -->
											</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group has-success mg-b-0">
                                                <label class="form-label"> عنوان </label>
												<input name='planName'@if($result) value ="{{$result[0]['name']}}" @value ="" @endif class="form-control"  required="" type="text" >
											</div>
										</div>

									</div>

							</div>
						</div>
					</div>
                    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									مرفقات لمشروع
								</div>
								{{-- <p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p> --}}

									<div class="row row-sm">
										<div class="col-lg-6">
											<div class="form-group has-success mg-b-0">
                                                <label class="form-label">صور المشروع* </label>
												<input name='image[]' multiple class="form-control"  type="file" >
                                                <!-- @foreach($project->image as $t)
                                                <img src="{{asset('images/projects/'.$t->image)}}"
                                                height="50px" width="50px">
                                                @endforeach -->
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group has-success mg-b-0">
                                                <label class="form-label">pdf(1) </label>
												<input name='pdf'  value= "{{ $project->pdf }}" class="form-control" type="file" >
                                                <!-- <img src="{{asset('images/projects/'.$project->pdf)}}"
                                                height="50px" width="50px"> -->
											</div>
										</div>
                                        <div class="col-lg-12">
											<div class="form-group has-success mg-b-0">
                                                <label class="form-label">رابط الفيديو </label>
												<input name='vedio_link' value="{{ $project-> vedio_link }}"  class="form-control"  required="" type="text" >
											</div>

										</div>
									</div>

							</div>
						</div>
					</div>
                    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                        <!--div-->
                        <div class="card">
                            <div class="card-body">
                                <div class="main-content-label mg-b-5">
                                    تفاصيل المشروع
                                </div>
                                <div class="row row-sm">
                                  <div class="col-lg-4 mg-t-20 mg-lg-t-0">
										<p class="mg-b-10">  المطور </p><select name='dev_id'  class="form-control">
                                            @foreach (App\Models\Developer::all() as $t )
                                              <option  @if($t->id == $project->dev_id) selected @endif value="{{$t->id}}">{{$t->name}}</option>
                                            @endforeach
										</select>
								</div>
                                <div class="col-lg-4 mg-t-20 mg-lg-t-0">
										<p class="mg-b-10">  النوع </p><select name='type_id'  class="form-control ">
                                            @foreach (App\Models\Type::all() as $t )
                                            <option   @if($t->id == $project->type_id) selected @endif value="{{$t->id}}">{{$t->type}}</option>
                                          @endforeach
										</select>
								</div>
                                <div class="col-lg-4 mg-t-20 mg-lg-t-0">
										<p class="mg-b-10">  حالة المشروع </p><select name="status_id"    class="form-control ">
										@foreach (App\Models\status::all() as $t )
                                              <option @if($t->id == $project->status_id) selected @endif value="{{$t->id}}">{{ $t->name }}</option>
                                            @endforeach
										</select>
								</div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <label class="form-label">rooms</label>
                                        <input  required="" class="form-control" name="rooms" value="{{$project->rooms}}" placeholder="Input box" type="number">
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <label class="form-label">Bedrooms</label>
                                        <input  required="" class="form-control" name="bedrooms" value="{{$project->bedrooms}}" placeholder="Input box" type="number">
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <label class="form-label">Bath</label>
                                        <input  required="" class="form-control" name="bath" value="{{$project->bath}}" placeholder="Input box" type="text">
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <label class="form-label">Garages</label>
                                        <input  required="" class="form-control" name="garage"  value="{{$project->garage}}" placeholder="Input box" type="text">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    	<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									 مميزات المشروع &amp;
								</div>

								<div class="row">
                                @foreach (App\Models\Amenitie::all() as $t )
									<div class="col-lg-3">
										<label class="ckbox"><input  multiple
                                            value="{{ $t->id }}"  type="checkbox"
                                            @if ( in_array ($t->id , $project->advgarr() ) )
                                             checked name='amenitie_update[]'
                                            @else
                                            name='amenitie[]'
                                            @endif>
                                            <span> {{ $t->name }}</span>
                                        </label>
									</div>
                                @endforeach
								</div>

							</div>
						</div>
					</div>

                    </div>
                            <button type="submit"  class="btn btn-primary mt-3 mb-0">  تعديل</button>
                    </div>
                    </form>
    </div>
            <!-- row closed -->

@endsection

@section('js')
 <!--Internal  Select2 js -->
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <!-- Internal Jquery.steps js -->
    <script src="{{ URL::asset('assets/plugins/jquery-steps/jquery.steps.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/parsleyjs/parsley.min.js') }}"></script>
    <!--Internal  Form-wizard js -->
    <script src="{{ URL::asset('assets/js/form-wizard.js') }}"></script>
    <!--Internal  Datepicker js -->
    <script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <!--Internal Fileuploads js-->
    <script src="{{URL::asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>
    <!--Internal Fancy uploader js-->
    <script src="{{URL::asset('assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>
    <!--Internal  Form-elements js-->
    <script src="{{URL::asset('assets/js/advanced-form-elements.js')}}"></script>
    <script src="{{URL::asset('assets/js/select2.js')}}"></script>
    <!--Internal Sumoselect js-->
    <script src="{{URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js')}}"></script>

    <script>
    $(document).ready(function () {
        $('select[name="region_id"]').on('change', function () {
            var region_id = $(this).val();
            if (region_id) {
                    url = '{{ route('area.getarea' ,':id') }}' ;
                    url = url.replace(':id' , region_id) ;
                    console.log(url) ;
                $.ajax({
                    url: url,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        console.log(data['areas'] );
                        $('select[name="area_id"]').empty();
                        //$('select[name="area_id"]').append('<option selected disabled >{{trans('Parent_trans.Choose')}}...</option>');
                        $.each(data['areas'], function (item) {
                            var ss = data['areas'][item] ;
                            var id = ss['id'] ;
                            var area = ss['area'] ;
                            console.log( ss['area']);
                           $('select[name="area_id"]').append('<option value="' + id + '">' + area + '</option>');
                        });
                    },
                });
            }
            else {
                console.log('AJAX load did not work');
            }
        });
    });
</script>

@endsection
