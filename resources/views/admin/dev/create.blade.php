@extends('layouts.admin.app')



@section('content')
    <div class="dashborad-box mb-0">
        <h4 class="heading pt-0"> create dev </h4>
        <div class="section-inforamation">
            <form>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control" placeholder="Enter your First name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" placeholder="Enter your Last name">
                        </div>
                    </div>
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
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" class="form-control" placeholder="Write your address here"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>About Yourself</label>
                            <textarea name="address" class="form-control" placeholder="Write about userself"></textarea>
                        </div>
                    </div>
                </div>
                <div class="password-section">
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
                </div>
                <button type="submit" class="btn btn-primary btn-lg mt-2">Submit</button>
            </form>
        </div>
    </div>
@endsection
