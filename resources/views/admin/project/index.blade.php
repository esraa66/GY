@extends('layouts.admin.app')


@section('css')

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
@section('content')


   <div class="my-properties">
                            <table class="table-responsive" id='projects'>
                                <thead>
                                    <tr>
                                        <th class="pl-2"> id </th>
                                        <th class="pl-2"> name </th>
                                        <th class="p-0"> price </th>
                                        <th> pay_plan </th>
                                        <th> action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- <tr>
                                        <td class="image myelist">
                                            <a href="single-property-1.html"><img alt="my-properties-3" src="images/feature-properties/fp-1.jpg" class="img-fluid"></a>
                                        </td>
                                        <td>
                                            <div class="inner">
                                                <a href="single-property-1.html"><h2>Luxury Villa House</h2></a>
                                                <figure><i class="lni-map-marker"></i> Est St, 77 - Central Park South, NYC</figure>
                                                <ul class="starts text-left mb-0">
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="ml-3">(6 Reviews)</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>08.14.2020</td>
                                        <td>163</td>
                                        <td class="actions">
                                            <a href="#" class="edit"><i class="lni-pencil"></i>Edit</a>
                                            <a href="#"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="image">
                                            <a href="single-property-1.html"><img alt="my-properties-3" src="images/feature-properties/fp-2.jpg" class="img-fluid"></a>
                                        </td>
                                        <td>
                                            <div class="inner">
                                                <a href="single-property-1.html"><h2>Luxury Villa House</h2></a>
                                                <figure><i class="lni-map-marker"></i> Est St, 77 - Central Park South, NYC</figure>
                                                <ul class="starts text-left mb-0">
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star-o"></i>
                                                    </li>
                                                    <li class="ml-3">(6 Reviews)</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>08.14.2020</td>
                                        <td>202</td>
                                        <td class="actions">
                                            <a href="#" class="edit"><i class="lni-pencil"></i>Edit</a>
                                            <a href="#"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="image">
                                            <a href="single-property-1.html"><img alt="my-properties-3" src="images/feature-properties/fp-3.jpg" class="img-fluid"></a>
                                        </td>
                                        <td>
                                            <div class="inner">
                                                <a href="single-property-1.html"><h2>Luxury Villa House</h2></a>
                                                <figure><i class="lni-map-marker"></i> Est St, 77 - Central Park South, NYC</figure>
                                                <ul class="starts text-left mb-0">
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="ml-3">(6 Reviews)</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>08.14.2020</td>
                                        <td>412</td>
                                        <td class="actions">
                                            <a href="#" class="edit"><i class="lni-pencil"></i>Edit</a>
                                            <a href="#"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="image">
                                            <a href="single-property-1.html"><img alt="my-properties-3" src="images/feature-properties/fp-4.jpg" class="img-fluid"></a>
                                        </td>
                                        <td>
                                            <div class="inner">
                                                <a href="single-property-1.html"><h2>Luxury Villa House</h2></a>
                                                <figure><i class="lni-map-marker"></i> Est St, 77 - Central Park South, NYC</figure>
                                                <ul class="starts text-left mb-0">
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star-o"></i>
                                                    </li>
                                                    <li class="ml-3">(6 Reviews)</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>08.14.2020</td>
                                        <td>675</td>
                                        <td class="actions">
                                            <a href="#" class="edit"><i class="lni-pencil"></i>Edit</a>
                                            <a href="#"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="image">
                                            <a href="single-property-1.html"><img alt="my-properties-3" src="images/feature-properties/fp-5.jpg" class="img-fluid"></a>
                                        </td>
                                        <td>
                                            <div class="inner">
                                                <a href="single-property-1.html"><h2>Luxury Villa House</h2></a>
                                                <figure><i class="lni-map-marker"></i> Est St, 77 - Central Park South, NYC</figure>
                                                <ul class="starts text-left mb-0">
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="ml-3">(6 Reviews)</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>08.14.2020</td>
                                        <td>325</td>
                                        <td class="actions">
                                            <a href="#" class="edit"><i class="lni-pencil"></i>Edit</a>
                                            <a href="#"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="image">
                                            <a href="single-property-1.html"><img alt="my-properties-3" src="images/feature-properties/fp-6.jpg" class="img-fluid"></a>
                                        </td>
                                        <td>
                                            <div class="inner">
                                                <a href="single-property-1.html"><h2>Luxury Villa House</h2></a>
                                                <figure><i class="lni-map-marker"></i> Est St, 77 - Central Park South, NYC</figure>
                                                <ul class="starts text-left mb-0">
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star-o"></i>
                                                    </li>
                                                    <li class="ml-3">(6 Reviews)</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>08.14.2020</td>
                                        <td>247</td>
                                        <td class="actions">
                                            <a href="#" class="edit"><i class="lni-pencil"></i>Edit</a>
                                            <a href="#"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr> --}}
                                </tbody>
                            </table>
                            {{-- <div class="pagination-container">
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item"><a class="btn btn-common" href="#"><i class="lni-chevron-left"></i> Previous </a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="btn btn-common" href="#">Next <i class="lni-chevron-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div> --}}
                        </div>


@endsection




@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    {{-- <script>
    content = new Vue({
                'el': '#projectbuild',
                data : {
                    ar : false,
                    en : true,
                    fr : false,
                    load: false,
                    Count : 0
                },
                methods:{
                    validation:function(){

                    },
                    saveData:function(e){
                        e.preventDefault();

                        let formData = new FormData(document.getElementById('addpro'));
                        this.load = true;
                        axios.post('{{ route('projects.store')}}', formData).then(response => {
                            console.log(response)
                            if(response.data.err == true){
                                swal({
                                    title:  response.msg,
                                    type: 'warning',
                                    confirmButtonText: 'موافق',
                                });
                            }else{
                            swal({
                                    title:  response.msg,
                                    type: 'success',
                                    confirmButtonText: 'موافق',
                                });
                                this.load = false;
                            }
                        }).catch(response => {
                            swal({
                                title:  response.response.message,
                                type: 'warning',
                                confirmButtonText: 'موافق',
                                });
                        })
                    }
                }
    });

    </script> --}}

    <script type="text/javascript">

           $(function() {
            var table = $('#projects').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url:"{{ route('projects.index') }}",
                    data: function (d) {

                        }
                    },
                columns: [
                    // {data: 'DT_RowIndex', name: 'DT_RowIndex'},

                    {
                        data: 'id',
                        name: 'id',
                        searchable: true
                    },

                    {
                        data: 'name',
                        name: 'name',
                        searchable: true

                    },
                    {
                        data: 'price',
                        name: 'price',
                        searchable: true

                    },
                    {
                        data: 'pay_plan',
                        name: 'pay_plan',
                        searchable: true

                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    }
                ]
            })
            });
    </script>
@endsection
