@extends('layouts.main', ['isDashboard' => 'y'])

@section('title', 'Profile')

@section('dashboard-content')<!-- Content
	================================================== -->
<div class="dashboard-content">

    <!-- Titlebar -->
    <div id="titlebar">
        <div class="row">
            <div class="col-md-12">
                <h2>My Profile</h2>
                <!-- Breadcrumbs -->
                <nav id="breadcrumbs">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Dashboard</a></li>
                        <li>My Profile</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>


    <div class="row">
        <!-- Profile -->
        <div class="col-md-8 col-sm-12">
            <div class="dashboard-list-box margin-top-0">
                <h4 class="gray">Profile Details</h4>
                <div class="dashboard-list-box-static">

                    <!-- Avatar -->
                    <div class="edit-profile-photo">
                        <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=300"
                            alt="">
                        <div class="change-photo-btn">
                            <div class="photoUpload">
                                <span><i class="fa fa-upload"></i> Upload Photo</span>
                                <input type="file" class="upload" />
                            </div>
                        </div>
                    </div>

                    <!-- Details -->
                    <div class="my-profile">

                        <label>Your Name</label>
                        <input value="Tom Perrin" type="text">

                        <label>Phone</label>
                        <input value="(123) 123-456" type="text">

                        <label>Email</label>
                        <input value="tom@example.com" type="text">

                        <label>Notes</label>
                        <textarea name="notes" id="notes" cols="30"
                            rows="10">Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper</textarea>

                        <label><i class="fa fa-twitter"></i> Twitter</label>
                        <input placeholder="https://www.twitter.com/" type="text">

                        <label><i class="fa fa-facebook-square"></i> Facebook</label>
                        <input placeholder="https://www.facebook.com/" type="text">

                        <label><i class="fa fa-google-plus"></i> Google+</label>
                        <input placeholder="https://www.google.com/" type="text">
                    </div>

                    <button class="button margin-top-15">Save Changes</button>

                </div>
            </div>
        </div>

        <!-- Change Password -->
        <div class="col-md-4 col-sm-12">
            <div class="dashboard-list-box margin-top-0">
                <h4 class="gray">Change Password</h4>
                <div class="dashboard-list-box-static">

                    <!-- Change Password -->
                    <div class="my-profile">
                        <label class="margin-top-0">Current Password</label>
                        <input type="password">

                        <label>New Password</label>
                        <input type="password">

                        <label>Confirm New Password</label>
                        <input type="password">

                        <button class="button margin-top-15">Change Password</button>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
<!-- Content / End -->

@endsection