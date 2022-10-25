<div class="card-body">
                                <div class="main-content-label mg-b-5">
                                    إدخال اسم ووصف المشروع بالثلاث لغات
                                </div>
                                <div class="row row-sm">
                                    <div class="col-lg">
                                        <label class="form-label"> الاسسم بالعربيه </label>
                                        <input  required="" v-model='name_ar' class="form-control" name="name_ar" placeholder="Input box" type="text">
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <label class="form-label"> الاسم باللغخ الانجليزيه</label>
                                        <input required="" v-model='name' class="form-control" name="name" placeholder="Input box " type="text">
                                    </div> 
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <label class="form-label"> الاسم باللغه الفرنسيه</label>
                                        <input required="" v-model='name_fr' class="form-control" name="name_fr" placeholder="Input box " type="text">
                                    </div>
                                </div>
                                <div class="row row-sm mg-t-20">
                                    <div class="col-lg">
                                        <label class="form-label"> الوصف باللغه العربيه </label>
                                        <textarea required="" v-model='description_ar' class="form-control" name="description_ar" placeholder="Textarea" rows="3"></textarea>
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <label class="form-label"> الوصف باللغه الانجليزيه</label>
                                        <textarea required="" v-model='description' class="form-control" name="description" placeholder="Textarea" rows="3"></textarea>
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <label class="form-label"> الوصف باللغه الفرنسيه  </label>
                                        <textarea required=""  v-model='description_fr' class="form-control" name="description_fr" placeholder="Texarea" rows="3"></textarea>
                                    </div>
                                </div>
                                  <div class="row row-sm">
                                    <div class="col-lg">
                                        <label class="form-label"> كود المشروع</label>
                                        <input  required="" v-model='code' class="form-control" name="code" placeholder="Input box" type="text">
                                    </div>

                                </div>
                            </div>