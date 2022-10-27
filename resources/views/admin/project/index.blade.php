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

                                </tbody>
                            </table>

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
