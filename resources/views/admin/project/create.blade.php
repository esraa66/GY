@extends('layouts.admin.app')



@section('content')
    <div class="dashborad-box mb-0" id='projectbuild'>
        <h4 class="heading pt-0"> create dev </h4>
        <div class="section-inforamation">
            <form id="addpro">
                @csrf
                <div class="dev">
                <a class="btn btn-primary" @click='ar = !ar' data-bs-toggle="collapse" role="button" > arabic  </a>
                <a class="btn btn-primary" @click='fr = !fr' data-bs-toggle="collapse" role="button" > franch  </a>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>name(en) </label>
                            <input type="text" class="form-control" name="name" placeholder="Enter your First name">
                        </div>
                    </div>
                    <div class="col-sm-6" v-show='ar'>
                        <div class="form-group">
                            <label> name(ar) </label>
                            <input type="text" class="form-control" name="name_ar" placeholder="Enter your First name">
                        </div>
                    </div>
                    <div class="col-sm-6" v-show='fr'>
                        <div class="form-group">
                            <label>name (fr) </label>
                            <input type="text" class="form-control" name="name_fr" placeholder="Enter your First name">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>description(en)</label>
                            <textarea  name="description" class="form-control" placeholder="Write your address here"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6" v-show='ar'>
                        <div class="form-group">
                            <label>description(ar)</label>
                            <textarea  name="description_ar" class="form-control" placeholder="Write your address here"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6" v-show='fr'>
                        <div class="form-group">
                            <label>description(fr)</label>
                            <textarea  name="description_fr" class="form-control" placeholder="Write your address here"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Price </label>
                            <input type="number" name='price' class="form-control" placeholder="Enter your Last name">
                        </div>
                    </div>


                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Location </label>
                            <select class="form-control" aria-label="Default select example">
                                <option   selected>Open this select menu</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                     <div class="col-sm-6">
                        <div class="form-group">
                            <label>Area </label>
                            <select class="form-control" aria-label="Default select example">
                                <option   selected>Open this select menu</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                     <div class="col-sm-6">
                        <div class="form-group">
                            <label>status </label>
                            <select class="form-control" aria-label="Default select example">
                                <option   selected>Open this select menu</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                     <div class="col-sm-6">
                        <div class="form-group">
                            <label> Type </label>
                            <select class="form-control" aria-label="Default select example">
                                <option   selected>Open this select menu</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>payment Plan  Count </label>
                            <input v-model.number="Count" name="pay_plan" type="number" class="form-control" placeholder="Enter your Last name">
                        </div>
                    </div>
                    <div class="col-sm-2" v-for="i in Count">
                        <div class="form-group">
                            <input  type="number" multiple name='pers[]' class="form-control" placeholder=" نسبخ مؤيه">
                        </div>
                    </div>


                    {{--

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" class="form-control" placeholder="Write your address here"></textarea>
                        </div>
                    </div> --}}

{{--
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="text" class="form-control" placeholder="Ex: example@domain.com">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" placeholder="Ex: +1-800-7700-00">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label> code </label>
                            <input type="text" class="form-control" placeholder="Ex: +1-800-7700-00">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label> pdf Attachment </label>
                            <input type="text" class="form-control" placeholder="Ex: +1-800-7700-00">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>  space 1 </label>
                            <input type="text" class="form-control" placeholder="Ex: +1-800-7700-00">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label> space 2  </label>
                            <input type="text" class="form-control" placeholder="Ex: +1-800-7700-00">
                        </div>
                    </div>
                     --}}
                    {{-- <div class="col-lg-12">
                        <div class="form-group">
                            <label>About Yourself</label>
                            <textarea name="address" class="form-control" placeholder="Write about userself"></textarea>
                        </div>
                    </div> --}}
                </div>
                {{-- <div class="password-section">
                    <h6>Update Password</h6>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>New Password</label>
                                <input type="password" class="form-control" placeholder="Write new password">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Repeat Password</label>
                                <input type="password" class="form-control" placeholder="Write same password again">
                            </div>
                        </div>
                    </div>
                </div> --}}
                <button type="button" @click="saveData" class="btn btn-primary btn-lg mt-2">Submit</button>
            </form>
        </div>
    </div>
@endsection

@include('vue')

@section('js')
    <script>
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

    </script>


@endsection


