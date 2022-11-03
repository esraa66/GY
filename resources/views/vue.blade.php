{{-- <script src="{{ url('assets/vue.js') }}"></script> --}}
<script src="{{ url('assets/vuedev.js') }}"></script>
<script src="{{ url('assets/axiox.js') }}"></script>
<script src="{{ URL::asset('js/sweetalert2@11.js') }}"></script>
<script src="{{ URL::asset('js/sweetalert2.all.js') }}"></script>


<script>
    // async function postAx(url , data){
    //       return  axios.post(url,data)
    // }

    var adawe =  async function(url, data) {

        let response = await axios.post(url,data)
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
                return response.data;
            }
    };
    var units  =  (function(tableid , url, array) {
        $('#'+tableid).DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: url,
                    data: function (d) {
                        }
                    },
                columns : [
                    {
                        data: 'id',
                        name: 'id',
                    },
                    {
                        data: 'location',
                        name: 'location',
                    },
                    {
                        data :'count',
                        name:'count'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ]
    });
})




</script>
