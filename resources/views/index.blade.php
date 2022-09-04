<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Dialup Career | Tele Sale Agent">
    <meta name="author" content="dailup">
    <title>Riuman Career</title>
    <meta name="facebook-domain-verification" content="sge9uacgg5bewedqalicwj6h0h0qnv" />
    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset('main/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('main/css/menu.css')}}" rel="stylesheet">
    <link href="{{asset('main/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('main/css/vendors.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('main/css/custom.css')}}" rel="stylesheet">

	<!-- MODERNIZR MENU -->
	<script src="{{asset('main/js/modernizr.js')}}"></script>
    {{--  --}}
    <link href="{{asset('main/css/whatsapp-widget.css')}}" rel="stylesheet">
    {{--  --}}

</head>

<body>

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->

	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->

	<nav>
		<ul class="cd-primary-nav">
			<li><a href="{{route('home')}}" class="animated_link">Home</a></li>
			{{-- <li><a href="index-2.html" class="animated_link">Version 2</a></li>
			<li><a href="index-3.html" class="animated_link">Version 3</a></li>
			<li><a href="index-4.html" class="animated_link">File Attachment demo</a></li>
			<li><a href="about.html" class="animated_link">About Us</a></li>
			<li><a href="contacts.html" class="animated_link">Contact Us</a></li>
			<li><a href="#0" class="animated_link">Purchase Template</a></li> --}}
		</ul>
	</nav>
	<!-- /menu -->

	<div class="container-fluid">
	    <div class="row row-height">
	        <div class="col-xl-4 col-lg-4 content-left">
	            <div class="content-left-wrapper">
	                <a href="{{route('home')}}" id="logo"><img src="{{asset('img/riuman-white-logo.png')}}" alt="Riuman International" class="img-responsive img-fluid" style="width:50px;"></a>
	                <div id="social">
	                    <ul>
	                        <li><a href="#0"><i class="icon-facebook"></i></a></li>
	                        <li><a href="#0"><i class="icon-twitter"></i></a></li>
	                        <li><a href="#0"><i class="icon-google"></i></a></li>
	                        <li><a href="#0"><i class="icon-linkedin"></i></a></li>
	                    </ul>
	                </div>
	                <!-- /social -->
	                <div>
	                    {{-- <figure><img src="img/info_graphic_1.svg" alt="" class="img-fluid" width="270" height="270"></figure> --}}
	                    <h2>We are Hiring</h2>
	                    {{-- <p>Attention!!!</p>
	                    <p>Dial up IT services is looking for energetic & experienced Male and Female Candidates for Sales Based Campaigns in day shift as TELE-SALES Representatives.</p>
	                    <p>We are offering fixed Salaries Plus Commissions from the very first month.</p>
	                    <p>Shift Timings:</p>
	                    <p>10:00 AM TO 05:00 Pm</p>
	                    <p>05:00 PM TO 10:00 PM</p>
	                    <p>Saturday to Thursday (Friday holiday)</p>
	                    <p>Fixed Salary: Rs 35,000 to Rs 50,000.</p>
	                    <p>Plus earn Commission up to Rs 100,000/-</p>
	                    <p>We will provide you the following benefits and incentives to be a part of our company:</p> --}}
                        <ul style="text-align: left">
                            <li>
                               * (*) Tele Sale Agent
                            </li>
                            <li>
                                * (1) Sales Trainer
                            </li>
                            <li>
                                * (3) Experience Sale Manager
                            </li>
                            <li>
                                * (1) Google Adword Expert
                            </li>
                            <li>
                                * (1) Social Media Manager
                            </li>
                            <li>
                                * (1) Digital Marketing Executive
                            </li>
                            {{-- <h5>Requirements</h5>
                            <li>
                                * Fluency in English or Arabic
                            </li>
                            <li>
                                * Punctuality
                            </li>
                            <li>
                               * Must have 1 year call center experience
                            </li>
                            <li>
                                * Must have done target based job in past
                            </li>
                            <li>
                                * Must have call confidence
                            </li> --}}
                        </ul>
	                    {{-- <a href="#0" class="btn_1 rounded yellow">Purchase this template</a> --}}
	                    <a href="#start" class="btn_1 rounded mobile_btn yellow">Start Now!</a>
	                </div>
	                <div class="copy">© {{date('Y')}} Riuman International</div>
	            </div>
	            <!-- /content-left-wrapper -->
	        </div>
	        <!-- /content-left -->
	        <div class="col-xl-8 col-lg-8 content-right" id="start" data-state="end">
	            <div id="wizard_container">
	                <div id="top-wizard">
	                    <span id="location"></span>
	                    <div id="progressbar"></div>
	                </div>
	                <!-- /top-wizard -->
	                <form id="wrapped" method="post" enctype="multipart/form-data" onsubmit="return false;">
                        @csrf
	                    <input id="website" name="website" type="text" value="">
	                    <!-- Leave for security protection, read docs for details -->
	                    <div id="middle-wizard">
	                        <div class="step">
	                            <h2 class="section_title">Riuman International</h2>
	                            <h3 class="main_question">Personal info</h3>
	                            <div class="form-group add_top_30">
	                                <label for="name">First and Last Name</label>
	                                <input type="text" name="name" id="name" class="form-control required" onchange="getVals(this, 'name_field');">
	                            </div>
	                            <div class="form-group">
	                                <label for="email">Email Address</label>
	                                <input type="email" name="email" id="email" class="form-control required" onchange="getVals(this, 'email_field');">
	                            </div>
	                            <div class="form-group">
	                                <label for="phone">Phone</label>
	                                <input type="text" name="phone" id="phone" class="form-control required" placeholder="923120000000">
	                            </div>
								<label>Gender</label>
								<div class="form-group radio_input">
								    <label class="container_radio mr-3">Male
								        <input type="radio" name="gender" value="Male" class="required">
								        <span class="checkmark"></span>
								    </label>
								    <label class="container_radio">Female
								        <input type="radio" name="gender" value="Female" class="required">
								        <span class="checkmark"></span>
								    </label>
								</div>
	                            {{-- <div class="form-group add_bottom_30 add_top_20">
	                                <label>Upload Resume<br><small>(File accepted: .pdf, .doc/docx - Max file size: 150KB for demo limit)</small></label>
	                                <div class="fileupload">
	                                    <input type="file" name="fileupload" accept=".pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" class="">
	                                </div>
	                            </div> --}}
                                <h2 class="section_title">Apply Vacancy</h2>
	                            {{-- <h3 class="main_question">Which language do you speak fluently?</h3> --}}
	                            <div class="form-group">
                                    {{-- @for($i=1;$i<=10;$i++) --}}
                                        <select name="vacancy" id="time" class="form-control">
                                            <option value="">-- Select Vancy --</option>
                                            <option value="Tele Sale">Tele Sale Agent</option>
                                            <option value="Sales Trainer">Sales Trainer</option>
                                            <option value="Experience Sale Manager">Experience Sale Manager</option>
                                            <option value="Google Adword Expert">Google Adword Expert</option>
                                            <option value="Social Media Manager">Social Media Manager</option>
                                            <option value="Digital Marketing Executive">Digital Marketing Executive</option>
                                        </select>
	                                {{-- <label class="container_radio version_2">Arabic
	                                    <input type="radio" name="language" value="Arabic" class="required">
	                                    <span class="checkmark"></span>
	                                </label>
	                                <label class="container_radio version_2">Both
	                                    <input type="radio" name="language" value="Both" class="required">
	                                    <span class="checkmark"></span>
	                                </label> --}}
	                            </div>
                                {{-- <h2 class="section_title">Preffered Work Location</h2>
	                                <h3 class="main_question">Select your preffered Location</h3>
	                                <div class="form-group">
                                        <label class="container_radio version_2">Shah e Milat Road
                                            <input type="radio" name="location" value="Shah e Milat Road" class="required">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container_radio version_2">Gulshan e Iqbal
                                            <input type="radio" name="location" value="Gulshan e Iqbal" class="required">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container_radio version_2">P & T Colony
                                            <input type="radio" name="location" value="P & T Colony" class="required">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div> --}}
                                    {{-- <h3 class="main_question">Book Interview Appointment</h3>
                                    <div class="form-group">
                                        <label for="timedate">Date</label>
                                        <input type="date" name="date_both" id="datetime" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="timedate">Time</label>
                                        <select name="time_both" id="time" class="form-control">
                                            @for ($i=1;$i<=8;$i++)
                                            <option value="{{$i}} Pm">{{$i}} Pm</option>
                                            @endfor
                                        </select>
                                    </div> --}}
	                        </div>
	                        <!-- /step-->

	                        <!-- /Start Branch ============================== -->
	                        {{-- <div class="step" data-state="branchtype">
	                            <h2 class="section_title">Fluency in Language</h2>
	                            <h3 class="main_question">Which language do you speak fluently?</h3>
	                            <div class="form-group">
	                                <label class="container_radio version_2">English
	                                    <input type="radio" name="language" value="English" class="required">
	                                    <span class="checkmark"></span>
	                                </label>
	                                <label class="container_radio version_2">Arabic
	                                    <input type="radio" name="language" value="Arabic" class="required">
	                                    <span class="checkmark"></span>
	                                </label>
	                                <label class="container_radio version_2">Both
	                                    <input type="radio" name="language" value="Both" class="required">
	                                    <span class="checkmark"></span>
	                                </label>
	                            </div>
	                        </div> --}}

	                        <!-- /Work Availability > Full-time ============================== -->
	                        <div class="branch" id="Both">
	                            <div class="step" data-state="end">
	                                <h2 class="section_title">Preffered Work Location</h2>
	                                <h3 class="main_question">Select your preffered Location</h3>
	                                <div class="form-group">
                                        <label class="container_radio version_2">Shah e Milat Road
                                            <input type="radio" name="location" value="Shah e Milat Road" class="required">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container_radio version_2">Gulshan e Iqbal
                                            <input type="radio" name="location" value="Gulshan e Iqbal" class="required">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container_radio version_2">P & T Colony
                                            <input type="radio" name="location" value="P & T Colony" class="required">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <h3 class="main_question">Select your preffered Location</h3>
                                    <div class="form-group">
                                        <label for="timedate">Date</label>
                                        {{-- <input type="date" name="date_both" id="datetime" class="form-control"> --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="timedate">Time</label>
                                        <select name="time_both" id="time" class="form-control">
                                            @for ($i=1;$i<=8;$i++)
                                            <option value="{{$i}} Pm">{{$i}} Pm</option>
                                            @endfor
                                        </select>
                                    </div>
	                            </div>
	                        </div>
	                        <!-- /step-->
	                        <!-- /Work Availability > Full-time ============================== -->
	                        <div class="branch" id="English">
	                            <div class="step" data-state="end">
	                                <h2 class="section_title">Preffered Work Location</h2>
	                                <h3 class="main_question">Select your preffered Location</h3>
	                                <div class="form-group">
                                        <label class="container_radio version_2">Shah e Milat Road
                                            <input type="radio" name="location" value="Shah e Milat Road" class="required">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container_radio version_2">Gulshan e Iqbal
                                            <input type="radio" name="location" value="Gulshan e Iqbal" class="required">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container_radio version_2">P & T Colony
                                            <input type="radio" name="location" value="P & T Colony" class="required">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <h3 class="main_question">Select your preffered Location</h3>
                                    <div class="form-group">
                                        <label for="timedate">Date</label>
                                        <input type="date" name="date_english" id="datetime" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="timedate">Time</label>
                                        <select name="time_english" id="time" class="form-control">
                                            @for ($i=1;$i<=8;$i++)
                                            <option value="{{$i}} Pm">{{$i}} Pm</option>
                                            @endfor
                                        </select>
                                    </div>
	                            </div>
	                        </div>
	                        <!-- /step-->
	                        <!-- /Work Availability > Full-time ============================== -->
	                        <div class="branch" id="Arabic">
	                            <div class="step" data-state="end">
	                                <h2 class="section_title">Preffered Work Location</h2>
	                                <h3 class="main_question">Select your preffered Location</h3>
	                                <div class="form-group">
                                        <label class="container_radio version_2">Shah e Milat Road
                                            <input type="radio" name="location" value="Shah e Milat Road" class="required">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container_radio version_2">Gulshan e Iqbal
                                            <input type="radio" name="location" value="Gulshan e Iqbal" class="required">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container_radio version_2">P & T Colony
                                            <input type="radio" name="location" value="P & T Colony" class="required">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <h3 class="main_question">Select your preffered Location</h3>
                                    <div class="form-group">
                                        <label for="timedate">Date</label>
                                        <input type="date" name="date_arabic" id="datetime" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="timedate">Time</label>
                                        <select name="time_arabic" id="time" class="form-control">
                                            @for ($i=1;$i<=8;$i++)
                                            <option value="{{$i}} Pm">{{$i}} Pm</option>
                                            @endfor
                                        </select>
                                        {{-- <input type="date" name="date" id="datetime" class="form-control"> --}}
                                    </div>
	                            </div>
	                        </div>
	                        <!-- /step-->

	                        <!-- /Work Availability > Part-time ============================== -->
	                        <div class="branch" id="Part-time">
	                            <div class="step" data-state="end">
	                                <h2 class="section_title">Work Availability</h2>
	                                <h3 class="main_question">Additional info about "Part Time" availability</h3>
	                                <div class="form-group add_bottom_30">
	                                    <label>Minimum salary? (in USD)</label>
	                                    <label for="minimum_salary_part_time">Choose a range</label>
	                                    <div class="styled-select clearfix">
	                                        <select class="form-control required" id="minimum_salary_part_time" name="minimum_salary_part_time">
	                                            <option value="">Choose a range</option>
	                                            <option value="&lt;2k">&lt;2k</option>
	                                            <option value="3-5k">3-5k</option>
	                                            <option value="5-7k">5-7k</option>
	                                            <option value="7-10k">7-10k</option>
	                                            <option value="&gt;10k">&gt;10k</option>
	                                        </select>
	                                    </div>
	                                </div>
	                                <div class="form-group add_bottom_30">
	                                    <label>How soon would you be looking to start?</label>
	                                     <label for="start_availability_part_time">Choose your availability</label>
	                                    <div class="styled-select clearfix">
	                                        <select class="form-control required" id="start_availability_part_time" name="start_availability_part_time">
	                                            <option value="">Choose your availability</option>
	                                            <option value="I can start immediately">I can start immediately</option>
	                                            <option value="I need to give 2 or 4 weeks notice">I need to give 2–4 weeks notice</option>
	                                            <option value="I am passively browsing">I am passively browsing</option>
	                                            <option value="I will be available in a couple months">I will be available in a couple months</option>
	                                            <option value="I am not sure">I am not sure</option>
	                                        </select>
	                                    </div>
	                                </div>
	                                <label class="custom">When you prefer to work?</label>
	                                <div class="form-group radio_input">
	                                    <label class="container_radio mr-3">Morning
	                                        <input type="radio" name="day_preference_part_time" value="Morning" class="required">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                    <label class="container_radio mr-3">Afternoon
	                                        <input type="radio" name="day_preference_part_time" value="Afternoon" class="required">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                    <label class="container_radio">No Preferences
	                                        <input type="radio" name="day_preference_part_time" value="No Preferences" class="required">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- /step-->

	                        <!-- /Work Availability > Freelance-Contract ============================== -->
	                        <div class="branch" id="Freelance-Contract">
	                            <div class="step" data-state="end">
	                                <h2 class="section_title">Work Availability</h2>
	                                <h3 class="main_question">Additional info about "Freelance/Contract" availability</h3>
	                                <div class="form-group">
	                                    <label for="fixed_rate_contract">Minimum fixed rate? (in USD)</label>
	                                    <input type="text" name="fixed_rate_contract" id="fixed_rate_contract" class="form-control required">
	                                </div>
	                                <div class="form-group">
	                                    <label for="hourly_rate_contract">Minimum hourly rate? (in USD)</label>
	                                    <input type="text" name="hourly_rate_contract" id="hourly_rate_contract" class="form-control required">
	                                </div>
	                                <div class="form-group">
	                                    <label for="minimum_hours_conctract">Minimum hours for a contract?</label>
	                                    <input type="text" name="minimum_hours_conctract" id="minimum_hours_conctract" class="form-control required">
	                                </div>
	                                <label class="custom">Are you willing to work remotely?</label>
	                                <div class="form-group radio_input">
	                                    <label class="container_radio mr-3">Yes
	                                        <input type="radio" name="remotely_contract" value="Yes" class="required">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                    <label class="container_radio">No
	                                        <input type="radio" name="remotely_contract" value="No" class="required">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </div>
	                            </div>
	                        </div>
	                        <!-- /step-->

	                        <div class="submit step" id="end">
	                            <div class="summary">
	                                <div class="wrapper">
	                                    <h3>Thank you for your time<br><span id="name_field"></span>!</h3>
	                                    <p id="show_on_chance" style="display:none">We will contat you shorly at the following email address <strong id="email_field"></strong></p>
	                                </div>
	                                {{-- <div class="text-center">
	                                    <div class="form-group terms">
	                                        <label class="container_check">Please accept our <a href="#" data-toggle="modal" data-target="#terms-txt">Terms and conditions</a> before Submit
	                                            <input type="checkbox" name="terms" value="Yes" class="required">
	                                            <span class="checkmark"></span>
	                                        </label>
	                                    </div>
	                                </div> --}}
	                            </div>
	                        </div>
	                        <!-- /step last-->
                            <div class="alert alert-danger print-error-msg" style="display:none">
                                <ul></ul>
                            </div>

	                    </div>
	                    <!-- /middle-wizard -->
	                    <div id="bottom-wizard">
	                        {{-- <button type="button" name="backward" class="backward">Prev</button> --}}
	                        {{-- <button type="button" name="forward" class="forward">Next</button> --}}
	                        <button type="button" name="forward" class="submit forward" onclick="VerifyLead('{{route('send.report')}}','wrapped','https://wa.me/923363338665?text=Hey, I recently applied for Job, can you please guide me more?')">Submit</button>
	                    </div>
	                    <!-- /bottom-wizard -->
	                </form>
	            </div>
	            <!-- /Wizard container -->
	        </div>
	        <!-- /content-right-->
	    </div>
	    <!-- /row-->
	</div>
	<!-- /container-fluid -->

	<div class="cd-overlay-nav">
		<span></span>
	</div>
	<!-- /cd-overlay-nav -->

	<div class="cd-overlay-content">
		<span></span>
	</div>
	<!-- /cd-overlay-content -->

	<a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a>
	<!-- /menu button -->

	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
    <form id="general-support" class="wa-widget" action="923363338665" data-chat="general-support"></form>

	<!-- COMMON SCRIPTS -->
	<script src="{{asset('main/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('main/js/common_scripts.min.js')}}"></script>
	<script src="{{asset('main/js/velocity.min.js')}}"></script>
	<script src="{{asset('main/js/common_functions.js')}}"></script>
	<script src="{{asset('main/js/file-validator.js')}}"></script>

	<!-- Wizard script-->
	<script src="{{asset('main/js/func_1.js')}}"></script>
    <script src="{{asset('main/js/whatsapp-widget.js')}}"></script>
	<script src="{{asset('main/js/main.js')}}"></script>

    <script>
        var generalSupport = new WhatsAppWidget(document.getElementById('general-support'), {
            name: 'Riuman Team',
            division: 'HR Supports',
            photo: 'https://www.pinclipart.com/picdir/big/111-1114429_best-price-guarantee-girl-call-center-agent-clipart.png',
            introduction: 'Hi, how may i help you?'
        }, [
            {
                data: 'name',
                type: 'text',
                required: true
            }, {
                data: 'email',
                type: 'email',
                required: false
            }, {
                data: 'message',
                type: 'text',
                required: true
            }
        ]);
        // generalSupport.toggle()
    </script>
    <!-- Hotjar Tracking Code for https://careers.dialupit.com -->
    <!-- Facebook Pixel Code -->


</body>
</html>
