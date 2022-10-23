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
                <button type="button" class="btn btn-info btn-icon ml-2"><i class="mdi mdi-filter-variant"></i></button>
            </div>
            <div class="pr-1 mb-3 mb-xl-0">
                <button type="button" class="btn btn-danger btn-icon ml-2"><i class="mdi mdi-star"></i></button>
            </div>
            <div class="pr-1 mb-3 mb-xl-0">
                <button type="button" class="btn btn-warning  btn-icon ml-2"><i class="mdi mdi-refresh"></i></button>
            </div>
            <div class="mb-3 mb-xl-0">
                <div class="btn-group dropdown">
                    <button type="button" class="btn btn-primary">14 Aug 2019</button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                        id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuDate"
                        data-x-placement="bottom-end">
                        <a class="dropdown-item" href="#">2015</a>
                        <a class="dropdown-item" href="#">2016</a>
                        <a class="dropdown-item" href="#">2017</a>
                        <a class="dropdown-item" href="#">2018</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div id='projectbuild'>
        <div>
            <div class="row">
                {{-- <div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Basic Content Wizard
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div id="wizard1">
									<h3>Personal Information</h3>
									<section>
										<div class="control-group form-group">
											<label class="form-label">Name</label>
											<input type="text" class="form-control required" placeholder="Name">
										</div>
										<div class="control-group form-group">
											<label class="form-label">Email</label>
											<input type="email" class="form-control required" placeholder="Email Address">
										</div>
										<div class="control-group form-group">
											<label class="form-label">Phone Number</label>
											<input type="number" class="form-control required" placeholder="Number">
										</div>
										<div class="control-group form-group mb-0">
											<label class="form-label">Address</label>
											<input type="text" class="form-control required" placeholder="Address">
										</div>
									</section>
									<h3>Billing Information</h3>
									<section>
										<div class="table-responsive mg-t-20">
											<table class="table table-bordered">
												<tbody>
													<tr>
														<td>Cart Subtotal</td>
														<td class="text-right">$792.00</td>
													</tr>
													<tr>
														<td><span>Totals</span></td>
														<td class="text-right text-muted"><span>$792.00</span></td>
													</tr>
													<tr>
														<td><span>Order Total</span></td>
														<td><h2 class="price text-right mb-0">$792.00</h2></td>
													</tr>
												</tbody>
											</table>
										</div>
									</section>
									<h3>Payment Details</h3>
									<section>
										<div class="form-group">
											<label class="form-label" >CardHolder Name</label>
											<input type="text" class="form-control" id="name1" placeholder="First Name">
										</div>
										<div class="form-group">
											<label class="form-label">Card number</label>
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Search for...">
												<span class="input-group-append">
													<button class="btn btn-info" type="button"><i class="fab fa-cc-visa"></i> &nbsp; <i class="fab fa-cc-amex"></i> &nbsp;
													<i class="fab fa-cc-mastercard"></i></button>
												</span>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-8">
												<div class="form-group mb-sm-0">
													<label class="form-label">Expiration</label>
													<div class="input-group">
														<input type="number" class="form-control" placeholder="MM" name="expiremonth">
														<input type="number" class="form-control" placeholder="YY" name="expireyear">
													</div>
												</div>
											</div>
											<div class="col-sm-4 ">
												<div class="form-group mb-0">
													<label class="form-label">CVV <i class="fa fa-question-circle"></i></label>
													<input type="number" class="form-control" required="">
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
						</div>
					</div> --}}
                {{-- <div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Basic Wizard With Validation
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div id="wizard2">
									<h3>Personal Information</h3>
									<section>
										<p class="mg-b-20">Try the keyboard navigation by clicking arrow left or right!</p>
										<div class="row row-sm">
											<div class="col-md-5 col-lg-4">
												<label class="form-control-label">Firstname: <span class="tx-danger">*</span></label> <input class="form-control" id="firstname" name="firstname" placeholder="Enter firstname" required="" type="text">
											</div>
											<div class="col-md-5 col-lg-4 mg-t-20 mg-md-t-0">
												<label class="form-control-label">Lastname: <span class="tx-danger">*</span></label> <input class="form-control" id="lastname" name="lastname" placeholder="Enter lastname" required="" type="text">
											</div>
										</div>
									</section>
									<h3>Billing Information</h3>
									<section>
										<p>Wonderful transition effects.</p>
										<div class="form-group wd-xs-300">
											<label class="form-control-label">Email: <span class="tx-danger">*</span></label> <input class="form-control" id="email" name="email" placeholder="Enter email address" required="" type="email">
										</div>
									</section>
									<h3>Payment Details</h3>
									<section>
										<div class="form-group">
											<label class="form-label" >CardHolder Name</label>
											<input type="text" class="form-control" id="name11" placeholder="First Name">
										</div>
										<div class="form-group">
											<label class="form-label">Card number</label>
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Search for...">
												<span class="input-group-append">
													<button class="btn btn-info" type="button"><i class="fab fa-cc-visa"></i> &nbsp; <i class="fab fa-cc-amex"></i> &nbsp;
													<i class="fab fa-cc-mastercard"></i></button>
												</span>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-8">
												<div class="form-group mb-sm-0">
													<label class="form-label">Expiration</label>
													<div class="input-group">
														<input type="number" class="form-control" placeholder="MM" name="expiremonth">
														<input type="number" class="form-control" placeholder="YY" name="expireyear">
													</div>
												</div>
											</div>
											<div class="col-sm-4 ">
												<div class="form-group mb-0">
													<label class="form-label">CVV <i class="fa fa-question-circle"></i></label>
													<input type="number" class="form-control" required="">
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
						</div>
					</div> --}}
            </div>
            <!-- /row -->
            <!-- row -->
                <div class="row">
                    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                        <!--div-->
                        <div class="card">
                            <div class="card-body">
                                <div class="main-content-label mg-b-5">
                                    إدخال اسم ووصف المشروع بالثلاث لغات
                                </div>
                                <div class="row row-sm">
                                    <div class="col-lg">
                                        <label class="form-label">name(ar)</label>
                                        <input  required="" class="form-control" name="name_ar" placeholder="Input box" type="text">
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <label class="form-label">name(en)</label>
                                        <input required="" class="form-control" name="name" placeholder="Input box " type="text">
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <label class="form-label">name(fr)</label>
                                        <input required="" class="form-control" name="name_fr" placeholder="Input box " type="text">
                                    </div>
                                </div>
                                <div class="row row-sm mg-t-20">
                                    <div class="col-lg">
                                        <label class="form-label">description(ar)</label>
                                        <textarea required="" class="form-control" name="description_ar" placeholder="Textarea" rows="3"></textarea>
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <label class="form-label">description(en)</label>
                                        <textarea required="" class="form-control" name="description" placeholder="Textarea" rows="3"></textarea>
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <label class="form-label">description(fr)</label>
                                        <textarea required="" class="form-control" name="description_fr" placeholder="Texarea" rows="3"></textarea>
                                    </div>
                                </div>
                                  <div class="row row-sm">
                                    <div class="col-lg">
                                        <label class="form-label">code</label>
                                        <input  required="" class="form-control" name="name_ar" placeholder="Input box" type="text">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="main-content-label mg-b-5">
                                    انشاء مشروع
                                </div>
                                <p class="mg-b-20"> إدخال اسم ووصف المشروع بثلاث لغات </p>
                                <div id="wizard3">
                                    <h3> العربيه </h3>
                                    <section>
                                        <div class="control-group form-group">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control required" placeholder="Name">
                                        </div>
                                        <div class="control-group form-group">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control required"
                                                placeholder="Email Address">
                                        </div>
                                        <div class="control-group form-group">
                                            <label class="form-label">Phone Number</label>
                                            <input type="number" class="form-control required" placeholder="Number">
                                        </div>
                                        <div class="control-group form-group mb-0">
                                            <label class="form-label">Address</label>
                                            <input type="text" class="form-control required" placeholder="Address">
                                        </div>
                                    </section>
                                    <h3>Personal Information</h3>
                                    <section>
                                        <div class="control-group form-group">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control required" placeholder="Name">
                                        </div>
                                        <div class="control-group form-group">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control required"
                                                placeholder="Email Address">
                                        </div>
                                        <div class="control-group form-group">
                                            <label class="form-label">Phone Number</label>
                                            <input type="number" class="form-control required" placeholder="Number">
                                        </div>
                                        <div class="control-group form-group mb-0">
                                            <label class="form-label">Address</label>
                                            <input type="text" class="form-control required" placeholder="Address">
                                        </div>
                                    </section>
                                    <h3>Payment Details</h3>
                                    <section>
                                        <div class="form-group">
                                            <label class="form-label">CardHolder Name</label>
                                            <input type="text" class="form-control" id="name12"
                                                placeholder="First Name">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Card number</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search for...">
                                                <span class="input-group-append">
                                                    <button class="btn btn-info" type="button"><i
                                                            class="fab fa-cc-visa"></i> &nbsp; <i
                                                            class="fab fa-cc-amex"></i> &nbsp;
                                                        <i class="fab fa-cc-mastercard"></i></button>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="form-group mb-sm-0">
                                                    <label class="form-label">Expiration</label>
                                                    <div class="input-group">
                                                        <input type="number" class="form-control" placeholder="MM"
                                                            name="expiremonth">
                                                        <input type="number" class="form-control" placeholder="YY"
                                                            name="expireyear">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 ">
                                                <div class="form-group mb-0">
                                                    <label class="form-label">CVV <i
                                                            class="fa fa-question-circle"></i></label>
                                                    <input type="number" class="form-control" required="">
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									سعر وخطة الدفع
								</div>
								{{-- <p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p> --}}

									<div class="row row-sm">
										<div class="col-lg-6">
											<div class="form-group has-success mg-b-0">
                                                <label class="form-label">price </label>
												<input name='price' class="form-control"  required="" type="text" >
											</div>
										</div>
										<div class="col-lg-6 mg-t-20 mg-lg-t-0">
											<div class="form-group has-danger mg-b-0">
                                            <label class="form-label">Pay_Plan</label>
											<input v-model.number="Count" name="pay_plan" class="form-control"  required="" type="number">
											</div>
										</div>
                                        <div class="col-lg-3 mt-1" v-for="i in Count">
											<div class="form-group has-success mg-b-0">
                                                <label class="form-label">  </label>
												<input  type="number" multiple name='pers[]' placeholder="10%" class="form-control"  required=""  >
											</div>
										</div>
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
										<p class="mg-b-10">  Area </p><select class="form-control select2">
											<option label="Choose one">
											</option>
											<option value="Firefox">
												Firefox
											</option>
										</select>
									</div>

									<div class="col-lg-6 mg-t-20 mg-lg-t-0">
										<p class="mg-b-10">  Area </p><select class="form-control select2">
											<option label="Choose one">
											</option>
											<option value="Firefox">
												Firefox
											</option>

										</select>
									</div><!-- col-4 -->
									{{-- <div class="col-lg-4 mg-t-20 mg-lg-t-0">
										<p class="mg-b-10">Single Select (Disabled)</p><select class="form-control select2" disabled>
											<option label="Choose one">
											</option>
											<option value="Firefox">
												Firefox
											</option>
											<option value="Chrome">
												Chrome
											</option>
											<option value="Safari">
												Safari
											</option>
											<option value="Opera">
												Opera
											</option>
											<option value="Internet Explorer">
												Internet Explorer
											</option>
										</select>
									</div><!-- col-4 --> --}}
								</div>

							</div>
						</div>
					</div>
                    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									plaan
								</div>
								{{-- <p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p> --}}

									<div class="row row-sm">
										<div class="col-lg-6">
											<div class="form-group has-success mg-b-0">
                                                <label class="form-label">image </label>
												<input name='plan' multiple class="form-control"  required="" type="file" >
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group has-success mg-b-0">
                                                <label class="form-label"> text </label>
												<input name='planName'  class="form-control"  required="" type="text" >
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
                                                <label class="form-label">images* </label>
												<input name='image[]' multiple class="form-control"  required="" type="file" >
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group has-success mg-b-0">
                                                <label class="form-label">pdf(1) </label>
												<input name='pdf'  class="form-control"  required="" type="file" >
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
                                    Property Details
                                </div>
                                <div class="row row-sm">
                                <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                        <label class="form-label">ID</label>
                                        <input required="" class="form-control" name="Id" placeholder="Project@email.com" type="email">
                                </div>
                                <div class="col-lg-4 mg-t-20 mg-lg-t-0">
										<p class="mg-b-10">  type </p><select class="form-control select2">
											<option label=""> choce type </option>
                                            @foreach (App\Models\Type::all() as $t )
                                              <option value="{{$t->id}}">{{ evaluate($t)['type'] }}</option>
                                            @endforeach
										</select>
								</div>
                                <div class="col-lg-4 mg-t-20 mg-lg-t-0">
										<p class="mg-b-10">  status </p><select class="form-control select2">
											<option label="Choose one">
											</option>
											<option value="Firefox">
												Firefox
											</option>

										</select>
								</div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <label class="form-label">rooms</label>
                                        <input  required="" class="form-control" name="name_ar" placeholder="Input box" type="text">
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <label class="form-label">Bedrooms</label>
                                        <input  required="" class="form-control" name="name_ar" placeholder="Input box" type="text">
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <label class="form-label">Bath</label>
                                        <input  required="" class="form-control" name="name_ar" placeholder="Input box" type="text">
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <label class="form-label">Garages</label>
                                        <input  required="" class="form-control" name="name_ar" placeholder="Input box" type="text">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    	<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									 Amenities &amp;
								</div>

								<div class="row">
									<div class="col-lg-3">
										<label class="ckbox"><input type="checkbox"><span>Checkbox Unchecked</span></label>
									</div>
									<div class="col-lg-3 mg-t-20 mg-lg-t-0">
										<label class="ckbox"><input checked type="checkbox"><span>Checkbox Checked</span></label>
									</div>
									<div class="col-lg-3 mg-t-20 mg-lg-t-0">
										<label class="ckbox"><input  type="checkbox"><span>Checkbox Disabled</span></label>
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
                                    معلومات التواصل
                                </div>
                                <div class="row row-sm">
                                    <div class="col-lg">
                                        <label class="form-label">email</label>
                                        <input required="" class="form-control" name="email" placeholder="Project@email.com" type="email">

                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <label class="form-label">phone</label>
                                        <input  required="" class="form-control" name="name_ar" placeholder="Input box" type="text">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">File Upload</h6>
									<p class="text-muted card-sub-title">Dropify is a jQuery plugin to create a beautiful file uploader that converts a standard <code>input type="file"</code> into a nice drag & drop zone with previews and custom styles.</p>
								</div>
								<div class="row mb-4">
									<div class="col-sm-12 col-md-6">
										<input type="file" class="dropify" data-height="200" />
									</div>
									<div class="col-sm-12 col-md-6 mg-t-10 mg-sm-t-0">
										<input type="file" class="dropify" multiple data-default-file="{{URL::asset('assets/img/photos/1.jpg')}}" data-height="200"  />
									</div>

								</div>
								<div>
									<input id="demo" type="file" name="files"  class="dropify" accept=".jpg, .png, image/jpeg, image/png, html, zip, css,js" multiple>
								</div>
							</div>
						</div>
					</div> --}}
                </div>
            <!-- row closed -->
        </div>
        <!-- Container closed -->
    </div>
    <!-- main-content closed -->
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
    @include('vue')
    <script>
        content = new Vue({
            'el': '#projectbuild',
            data: {
                ar: false,
                en: true,
                fr: false,
                load: false,
                Count: 0
            },
            methods: {
                validation: function() {

                },
                saveData: function(e) {
                    e.preventDefault();

                    let formData = new FormData(document.getElementById('addpro'));
                    this.load = true;
                    axios.post('{{ route('projects.store') }}', formData).then(response => {
                        console.log(response)
                        if (response.data.err == true) {
                            swal({
                                title: response.msg,
                                type: 'warning',
                                confirmButtonText: 'موافق',
                            });
                        } else {
                            swal({
                                title: response.msg,
                                type: 'success',
                                confirmButtonText: 'موافق',
                            });
                            this.load = false;
                        }
                    }).catch(response => {
                        swal({
                            title: response.response.message,
                            type: 'warning',
                            confirmButtonText: 'موافق',
                        });
                    })
                }
            }
        });
    </script>
@endsection
