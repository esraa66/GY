@extends('layouts.master')
@section('css')

  <!-- Internal Data table css -->
    <link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!---Internal Owl Carousel css-->
    <link href="{{ URL::asset('assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <!---Internal  Multislider css-->
    <link href="{{ URL::asset('assets/plugins/multislider/multislider.css') }}" rel="stylesheet">
    <!--- Select2 css -->
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">



@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto"> الاماكن الرئيسيه </h4>

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
    <div id='blogId'>
        <div>

            <!-- row -->
            <div class="row">
                <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                    <!--div-->
                    <form id='newblog'>
                        <div class="card">
                            <div class="card-body">
                                <div class="main-content-label mg-b-5">
                                        تعديل مكان رئيسي
                                </div>
                                <div class="row row-sm">
                                    <div class="col-lg-4">
                                        <label class="form-label">   {{ __('Name_en') }} </label>
                                        <input required="" class="form-control" name="name" placeholder="Input box"
                                            type="text">
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="form-label"> {{ __('Name_ar') }} </label>
                                        <input required="" class="form-control" name="name_ar" placeholder="Input box"
                                            type="text">
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="form-label"> {{ __('Name_fr') }} </label>
                                        <input required="" class="form-control" name="name_fr" placeholder="Input box"
                                            type="text">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                        <label class="form-label">Image </label>
                                        <input name='image' multiple class="form-control" required="" type="file">
                                </div>
                            <button type="submit" @click="saveData" class="btn btn-primary mt-3 mb-0">Submit</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <!-- row closed -->
        </div>
        <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection

@section('js')


    <!--Internal  Datepicker js -->
    <script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <!-- Internal Select2 js-->
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <!-- Internal Modal js-->
    <script src="{{ URL::asset('assets/js/modal.js') }}"></script>
    <script src="{{ URL::asset('assets/js/form-elements.js') }}"></script>
    @include('vue')
    <script>

        content = new Vue({
            'el': '#blogId',
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
                    let formData = new FormData(document.getElementById('newblog'));
                    this.load = true;
                    axios.post('{{ route('blogs.store') }}', formData).then(response => {
                        console.log(response)
                        if (response.data.err == true) {
                            swal({
                                title: response.data.msg,
                                type: 'warning',
                                confirmButtonText: 'موافق',
                            });
                        } else {
                            swal({
                                title: response.data.msg,
                                type: 'success',
                                confirmButtonText: 'موافق',
                            });
                            this.load = false;
                        }
                    }).catch(response => {
                       console.log(response)
                    })
                }
            }
        });
    </script>
@endsection
