@extends('layouts.main')

@section('title', 'Browse Jobs')

@section('content')
<!-- Titlebar
================================================== -->
<div id="titlebar">
    <div class="container">
        <div class="ten columns">
            <span>We found 1,412 jobs matching:</span>
            <h2>Web, Software & IT</h2>
        </div>

        <div class="six columns">
            <a href="dashboard-add-job.html" class="button">Post a Job, It’s Free!</a>
        </div>
    </div>
</div>

<!-- Content
================================================== -->
<div class="container">
    <!-- Recent Jobs -->
    <div class="col-md-8">
        <div class="padding-right">
            <div class="listings-container">
                <!-- Listing -->
                <a href="job-page-alt.html" class="listing full-time">
                    <div class="listing-logo">
                        <img src="images/job-list-logo-01.png" alt="" />
                    </div>
                    <div class="listing-title">
                        <h4>
                            Marketing Coordinator - SEO / SEM Experience
                            <span class="listing-type">Full-Time</span>
                        </h4>
                        <ul class="listing-icons">
                            <li><i class="ln ln-icon-Management"></i> King</li>
                            <li><i class="ln ln-icon-Map2"></i> Sydney</li>
                            <li><i class="ln ln-icon-Money-2"></i> $5000 - $7000</li>
                            <li>
                                <div class="listing-date new">new</div>
                            </li>
                        </ul>
                    </div>
                </a>

                <!-- Listing -->
                <a href="job-page.html" class="listing part-time">
                    <div class="listing-logo">
                        <img src="images/job-list-logo-02.png" alt="" />
                    </div>
                    <div class="listing-title">
                        <h4>
                            Core PHP Developer for Site Maintenance
                            <span class="listing-type">Part-Time</span>
                        </h4>
                        <ul class="listing-icons">
                            <li><i class="ln ln-icon-Management"></i> Cubico</li>
                            <li><i class="ln ln-icon-Map2"></i> Sydney</li>
                            <li><i class="ln ln-icon-Money-2"></i> $125 / hour</li>
                            <li>
                                <div class="listing-date">3d ago</div>
                            </li>
                        </ul>
                    </div>
                </a>

                <!-- Listing -->
                <a href="job-page-alt.html" class="listing full-time">
                    <div class="listing-logo">
                        <img src="images/job-list-logo-01.png" alt="" />
                    </div>
                    <div class="listing-title">
                        <h4>
                            Restaurant Team Member - Crew
                            <span class="listing-type">Full-Time</span>
                        </h4>
                        <ul class="listing-icons">
                            <li><i class="ln ln-icon-Management"></i> King</li>
                            <li><i class="ln ln-icon-Map2"></i> Sydney</li>
                            <li>
                                <div class="listing-date">3d ago</div>
                            </li>
                        </ul>
                    </div>
                </a>

                <!-- Listing -->
                <a href="job-page.html" class="listing internship">
                    <div class="listing-logo">
                        <img src="images/job-list-logo-04.png" alt="" />
                    </div>
                    <div class="listing-title">
                        <h4>
                            Power Systems User Experience Designer
                            <span class="listing-type">Internship</span>
                        </h4>
                        <ul class="listing-icons">
                            <li><i class="ln ln-icon-Management"></i> Hexagon</li>
                            <li><i class="ln ln-icon-Map2"></i> London</li>
                            <li><i class="ln ln-icon-Money-2"></i> $55 / hour</li>
                            <li>
                                <div class="listing-date">4d ago</div>
                            </li>
                        </ul>
                    </div>
                </a>

                <!-- Listing -->
                <a href="job-page.html" class="listing freelance">
                    <div class="listing-logo">
                        <img src="images/job-list-logo-05.png" alt="" />
                    </div>
                    <div class="listing-title">
                        <h4>
                            iPhone / Android Music App Development
                            <span class="listing-type">Freelance</span>
                        </h4>
                        <ul class="listing-icons">
                            <li><i class="ln ln-icon-Management"></i> Hexagon</li>
                            <li><i class="ln ln-icon-Map2"></i> London</li>
                            <li><i class="ln ln-icon-Money-2"></i> $85 / hour</li>
                            <li>
                                <div class="listing-date">4d ago</div>
                            </li>
                        </ul>
                    </div>
                </a>

                <!-- Listing -->
                <a href="job-page.html" class="listing part-time featured">
                    <div class="listing-logo">
                        <img src="images/job-list-logo-02.png" alt="" />
                    </div>
                    <div class="listing-title">
                        <h4>
                            Core PHP Developer for Site Maintenance
                            <span class="listing-type">Part-Time</span>
                        </h4>
                        <ul class="listing-icons">
                            <li><i class="ln ln-icon-Management"></i> Cubico</li>
                            <li><i class="ln ln-icon-Map2"></i> Sydney</li>
                            <li><i class="ln ln-icon-Money-2"></i> $125 / hour</li>
                            <li>
                                <div class="listing-date">3d ago</div>
                            </li>
                        </ul>
                    </div>
                </a>

                <!-- Listing -->
                <a href="job-page.html" class="listing full-time">
                    <div class="listing-logo">
                        <img src="images/job-list-logo-01.png" alt="" />
                    </div>
                    <div class="listing-title">
                        <h4>
                            Restaurant Team Member - Crew
                            <span class="listing-type">Full-Time</span>
                        </h4>
                        <ul class="listing-icons">
                            <li><i class="ln ln-icon-Management"></i> King</li>
                            <li><i class="ln ln-icon-Map2"></i> Sydney</li>
                            <li>
                                <div class="listing-date">3d ago</div>
                            </li>
                        </ul>
                    </div>
                </a>

                <!-- Listing -->
                <a href="job-page.html" class="listing full-time">
                    <div class="listing-logo">
                        <img src="images/job-list-logo-04.png" alt="" />
                    </div>
                    <div class="listing-title">
                        <h4>
                            Power Systems User Experience Designer
                            <span class="listing-type">Full-Time</span>
                        </h4>
                        <ul class="listing-icons">
                            <li><i class="ln ln-icon-Management"></i> Hexagon</li>
                            <li><i class="ln ln-icon-Map2"></i> London</li>
                            <li><i class="ln ln-icon-Money-2"></i> $55 / hour</li>
                            <li>
                                <div class="listing-date">4d ago</div>
                            </li>
                        </ul>
                    </div>
                </a>
            </div>
            <div class="clearfix"></div>

            <div class="pagination-container">
                <nav class="pagination">
                    <ul>
                        <li><a href="#" class="current-page">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li class="blank">...</li>
                        <li><a href="#">22</a></li>
                    </ul>
                </nav>

                <nav class="pagination-next-prev">
                    <ul>
                        <li><a href="#" class="prev">Previous</a></li>
                        <li><a href="#" class="next">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- Widgets -->
    <div class="col-md-4">
        <!-- Sort by -->
        <div class="widget">
            <h4>Sort by</h4>
            <!-- Select -->
            <select data-placeholder="Choose Category" class="chosen-select-no-single">
                <option selected="selected" value="recent">Newest</option>
                <option value="oldest">Oldest</option>
                <option value="expiry">Expiring Soon</option>
                <option value="ratehigh">Hourly Rate – Highest First</option>
                <option value="ratelow">Hourly Rate – Lowest First</option>
            </select>
        </div>

        <!-- Location -->
        <div class="widget">
            <h4>Location</h4>
            <form action="#" method="get">
                <select data-placeholder="Choose Location" class="chosen-select-no-single">
                    <option selected="selected" value="recent">Ho Chi Minh</option>
                    <option value="oldest">Oldest</option>
                </select>
                <br />
                <button class="button">Filter</button>
            </form>
        </div>

        <!-- Job Type -->
        <div class="widget">
            <h4>Job Type</h4>

            <ul class="checkboxes">
                <li>
                    <input id="check-1" type="checkbox" name="check" value="check-1" checked />
                    <label for="check-1">Any Type</label>
                </li>
                <li>
                    <input id="check-2" type="checkbox" name="check" value="check-2" />
                    <label for="check-2">Full-Time <span>(312)</span></label>
                </li>
                <li>
                    <input id="check-3" type="checkbox" name="check" value="check-3" />
                    <label for="check-3">Part-Time <span>(269)</span></label>
                </li>
                <li>
                    <input id="check-4" type="checkbox" name="check" value="check-4" />
                    <label for="check-4">Internship <span>(46)</span></label>
                </li>
                <li>
                    <input id="check-5" type="checkbox" name="check" value="check-5" />
                    <label for="check-5">Freelance <span>(119)</span></label>
                </li>
            </ul>
        </div>

        <!-- Rate/Hr -->
        <div class="widget">
            <h4>Rate / Hr</h4>

            <ul class="checkboxes">
                <li>
                    <input id="check-6" type="checkbox" name="check" value="check-6" checked />
                    <label for="check-6">Any Rate</label>
                </li>
                <li>
                    <input id="check-7" type="checkbox" name="check" value="check-7" />
                    <label for="check-7">$0 - $25 <span>(231)</span></label>
                </li>
                <li>
                    <input id="check-8" type="checkbox" name="check" value="check-8" />
                    <label for="check-8">$25 - $50 <span>(297)</span></label>
                </li>
                <li>
                    <input id="check-9" type="checkbox" name="check" value="check-9" />
                    <label for="check-9">$50 - $100 <span>(78)</span></label>
                </li>
                <li>
                    <input id="check-10" type="checkbox" name="check" value="check-10" />
                    <label for="check-10">$100 - $200 <span>(98)</span></label>
                </li>
                <li>
                    <input id="check-11" type="checkbox" name="check" value="check-11" />
                    <label for="check-11">$200+ <span>(21)</span></label>
                </li>
            </ul>
        </div>
    </div>
    <!-- Widgets / End -->
</div>
@endsection()
