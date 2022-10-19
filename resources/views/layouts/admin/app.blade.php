<!DOCTYPE html>
<html lang="zxx">

@include('layouts.admin.head')

<body class="maxw1600 m0a dashboard-bd">
    <!-- Wrapper -->
    <div id="wrapper" class="int_main_wraapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <div class="dash-content-wrap">
            <header id="header-container" class="db-top-header">
                <!-- Header -->
                <div id="header">
                  @include('layouts.admin.nav')
                </div>
                <!-- Header / End -->
            </header>
        </div>
        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <!-- START SECTION DASHBOARD -->
        <section class="user-page section-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-xs-12 pl-0 pr-0 user-dash">
                        <div class="user-profile-box mb-0">
                            <div class="sidebar-header"><img src="images/logo-blue.svg" alt="header-logo2.png"> </div>
                            <div class="header clearfix">
                                <img src="images/testimonials/ts-1.jpg" alt="avatar" class="img-fluid profile-img">
                            </div>
                            <div class="active-user">
                                <h2>Mary Smith</h2>
                            </div>

                            @include('layouts.admin.slide')

                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 col-xs-12 pl-0 user-dash2">
                       {{-- <div class="col-lg-12 mobile-dashbord dashbord">
                            <div class="dashboard_navigationbar dashxl">
                                <div class="dropdown">
                                    <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10 mr-2"></i> Dashboard Navigation</button>
                                    <ul id="myDropdown" class="dropdown-content">
                                        <li>
                                            <a class="active" href="dashboard.html">
                                                <i class="fa fa-map-marker mr-3"></i> Dashboard
                                            </a>
                                        </li>
                                        <li>
                                            <a href="user-profile.html">
                                                <i class="fa fa-user mr-3"></i>Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="my-listings.html">
                                                <i class="fa fa-list mr-3" aria-hidden="true"></i>My Properties
                                            </a>
                                        </li>
                                        <li>
                                            <a href="favorited-listings.html">
                                                <i class="fa fa-heart mr-3" aria-hidden="true"></i>Favorited Properties
                                            </a>
                                        </li>
                                        <li>
                                            <a href="add-property.html">
                                                <i class="fa fa-list mr-3" aria-hidden="true"></i>Add Property
                                            </a>
                                        </li>
                                        <li>
                                            <a href="payment-method.html">
                                                <i class="fas fa-credit-card mr-3"></i>Payments
                                            </a>
                                        </li>
                                        <li>
                                            <a href="invoice.html">
                                                <i class="fas fa-paste mr-3"></i>Invoices
                                            </a>
                                        </li>
                                        <li>
                                            <a href="change-password.html">
                                                <i class="fa fa-lock mr-3"></i>Change Password
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index.html">
                                                <i class="fas fa-sign-out-alt mr-3"></i>Log Out
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="dashborad-box stat bg-white">
                            <h4 class="title">Manage Dashboard</h4>
                            <div class="section-body">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-xs-12 dar pro mr-3">
                                        <div class="item">
                                            <div class="icon">
                                                <i class="fa fa-list" aria-hidden="true"></i>
                                            </div>
                                            <div class="info">
                                                <h6 class="number">345</h6>
                                                <p class="type ml-1">Published Property</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-xs-12 dar rev mr-3">
                                        <div class="item">
                                            <div class="icon">
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="info">
                                                <h6 class="number">116</h6>
                                                <p class="type ml-1">Total Reviews</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 dar com mr-3">
                                        <div class="item mb-0">
                                            <div class="icon">
                                                <i class="fas fa-comments"></i>
                                            </div>
                                            <div class="info">
                                                <h6 class="number">223</h6>
                                                <p class="type ml-1">Messages</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 dar booked">
                                        <div class="item mb-0">
                                            <div class="icon">
                                                <i class="fas fa-heart"></i>
                                            </div>
                                            <div class="info">
                                                <h6 class="number">432</h6>
                                                <p class="type ml-1">Times Bookmarked</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="dashborad-box">
                            <h4 class="title">Listing</h4>
                            <div class="section-body listing-table">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Listing Name</th>
                                                <th>Date</th>
                                                <th>Rating</th>
                                                <th>Status</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Luxury Restaurant</td>
                                                <td>23 Jan 2020</td>
                                                <td class="rating"><span>5.0</span></td>
                                                <td class="status"><span class=" active">Active</span></td>
                                                <td class="edit"><a href="#"><i class="fa fa-pencil"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>Gym in Town</td>
                                                <td>11 Feb 2020</td>
                                                <td class="rating"><span>4.5</span></td>
                                                <td class="status"><span class="active">Active</span></td>
                                                <td class="edit"><a href="#"><i class="fa fa-pencil"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>Cafe in Boston</td>
                                                <td>09 Jan 2020</td>
                                                <td class="rating"><span>5.0</span></td>
                                                <td class="status"><span class="non-active">Non-Active</span></td>
                                                <td class="edit"><a href="#"><i class="fa fa-pencil"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="pb-0">Car Dealer in New York</td>
                                                <td class="pb-0">24 Feb 2018</td>
                                                <td class="rating pb-0"><span>4.5</span></td>
                                                <td class="status pb-0"><span class="active">Active</span></td>
                                                <td class="edit pb-0"><a href="#"><i class="fa fa-pencil"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="dashborad-box">
                            <h4 class="title">Message</h4>
                            <div class="section-body">
                                <div class="messages">
                                    <div class="message">
                                        <div class="thumb">
                                            <img class="img-fluid" src="images/testimonials/ts-1.jpg" alt="">
                                        </div>
                                        <div class="body">
                                            <h6>Mary Smith</h6>
                                            <p class="post-time">22 Minutes ago</p>
                                            <p class="content mb-0 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                            <div class="controller">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="far fa-trash-alt"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="message">
                                        <div class="thumb">
                                            <img class="img-fluid" src="images/testimonials/ts-2.jpg" alt="">
                                        </div>
                                        <div class="body">
                                            <h6>Karl Tyron</h6>
                                            <p class="post-time">23 Minutes ago</p>
                                            <p class="content mb-0 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                            <div class="controller">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="far fa-trash-alt"></i></a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="message">
                                        <div class="thumb">
                                            <img class="img-fluid" src="images/testimonials/ts-3.jpg" alt="">
                                        </div>
                                        <div class="body">
                                            <h6>Lisa Willis</h6>
                                            <p class="post-time">53 Minutes ago</p>
                                            <p class="content mb-0 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                            <div class="controller">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="far fa-trash-alt"></i></a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="dashborad-box">
                            <h4 class="title">Review</h4>
                            <div class="section-body">
                                <div class="reviews">
                                    <div class="review">
                                        <div class="thumb">
                                            <img class="img-fluid" src="images/testimonials/ts-4.jpg" alt="">
                                        </div>
                                        <div class="body">
                                            <h5>Family House</h5>
                                            <h6>Mary Smith</h6>
                                            <p class="post-time">10 hours ago</p>
                                            <p class="content mb-0 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                            <ul class="starts mb-0">
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star-o"></i>
                                                </li>
                                            </ul>
                                            <div class="controller">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="far fa-trash-alt"></i></a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review">
                                        <div class="thumb">
                                            <img class="img-fluid" src="images/testimonials/ts-5.jpg" alt="">
                                        </div>
                                        <div class="body">
                                            <h5>Bay Apartment</h5>
                                            <h6>Karl Tyron</h6>
                                            <p class="post-time">22 hours ago</p>
                                            <p class="content mb-0 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                            <ul class="starts mb-0">
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star-o"></i>
                                                </li>
                                            </ul>
                                            <div class="controller">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="far fa-trash-alt"></i></a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review">
                                        <div class="thumb">
                                            <img class="img-fluid" src="images/testimonials/ts-6.jpg" alt="">
                                        </div>
                                        <div class="body">
                                            <h5>Family House Villa</h5>
                                            <h6>Lisa Willis</h6>
                                            <p class="post-time">51 hours ago</p>
                                            <p class="content mb-0 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                            <ul class="starts mb-0">
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star-o"></i>
                                                </li>
                                            </ul>
                                            <div class="controller">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="far fa-trash-alt"></i></a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                      
                        <!-- START FOOTER -->

                        @yield('content')
                     
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION DASHBOARD -->

        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
        <!-- END FOOTER -->
           <div class="second-footer">
                            <div class="container">
                                <p>2021 © Copyright - All Rights Reserved.</p>
                                <p>Made With <i class="fa fa-heart" aria-hidden="true"></i> By Code-Theme</p>
                            </div>
                        </div>

        <!-- START PRELOADER -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>
        <!-- END PRELOADER -->
            @include('layouts.admin.footer')

    </div>
    <!-- Wrapper / End -->
</body>

</html>
