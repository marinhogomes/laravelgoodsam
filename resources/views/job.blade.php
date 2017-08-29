@extends('layouts.app')

@section('content')
<section id="inner-banner">
	<div class="container">
		<h1>Job Details</h1>
	</div>
</section>


<div id="main">

<section class="recent-row padd-tb job-detail">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-sm-8">
				<div id="content-area">
					<div class="box">
						<div class="thumb"><a href="jobs-detail.html#"><img src="{{asset('images/recent-job-detail.jpg')}}" alt="img"></a></div>
						<div class="text-col">
							<h2><a href="#">{{$job->title}}</a></h2>
							<p>Life Insurance LLC <em>(View All Volunteer Jobs)</em></p>
							<a href="jobs-detail.html#" class="text"><i class="fa fa-map-marker"></i>Nationwide</a> <a href="jobs-detail.html#" class="text"><i class="fa fa-calendar"></i>Dec 30, 2015 - Feb 20, 2016 </a>
							<div class="clearfix"> <a href="jobs-detail.html#" class="btn-freelance">Volunteer</a> <a href="jobs-detail.html#" class="btn-style-1">Apply for this Job</a> </div>
						</div>
						<div class="clearfix">
							<h4>Overview</h4>
							<p>{{$job->description}}</p>
								<a href="jobs-detail.html#" class="btn-style-1 style-big">Apply for this Job Now</a> </div>
							</div>
						</div>
			</div>
			<div class="col-md-3 col-sm-4">
				<aside>
					<div class="sidebar">
						<h2>Company Details</h2>
						<div class="box">
							<div class="thumb"> <a href="jobs-detail.html#"><img src="{{asset('images/recent-job-detail.jpg')}}" alt="img"></a>
							</div>
							<div class="text-box">
								<h4><a href="jobs-detail.html#">Life Insurance LLC</a></h4>
								<p>Life Insurance LLC. In marketing communications, we dream it and create it. All of the company’s promotional and communication needs are completed in-house.
								</p>
								<strong>Industry</strong>
								<p>Insurance</p>
								<strong>Type of Business Entity</strong>
								<p>Sole Proprietorship</p>
								<strong>Established In</strong>
								<p>01 January, 2000</p>
								<strong>No. of Employees</strong>
								<p>105</p>
								<strong>Location</strong>
								<p>New York, NY </p>
							</div>
						</div>
						<h2>Featured Jobs</h2>
						<div class="box">
							<div class="thumb"> <a href="jobs-detail.html#"><img src="{{asset('images/features-img-1.jpg')}}" alt="img"></a>
								<div class="caption"><img src="{{asset('images/envato-text.png')}}" alt="envato"></div>
							</div>
							<div class="text-box"> <a href="jobs-detail.html#" class="btn-time">Part Time</a>
								<h4><a href="jobs-detail.html#">UI/UX Visual Designers</a></h4>
								<a href="jobs-detail.html#" class="text"><i class="fa fa-map-marker"></i>Moorgate, London</a> <a href="jobs-detail.html#" class="text"><i class="fa fa-calendar"></i>Dec 22, 2015 - Mar 17, 2016 </a>  <a href="jobs-detail.html#" class="btn-apply">Apply for this Job</a> </div>
							</div>
							<h2>Jobs Gallery</h2>
							<div class="sidebar-jobs">
								<ul>
									<li> <a href="jobs-detail.html#">General Compliance Officer</a> <span><i class="fa fa-map-marker"></i>Arlington, VA </span> <span><i class="fa fa-calendar"></i>Dec 22, 2015 - Mar 17, 2016 </span> </li>
									<li> <a href="jobs-detail.html#">Medical Transcrption</a> <span><i class="fa fa-map-marker"></i>San Francisco, CA</span> <span><i class="fa fa-calendar"></i>Dec 22, 2015 - Mar 17, 2016 </span> </li>
									<li> <a href="jobs-detail.html#">Support Coordinator</a> <span><i class="fa fa-map-marker"></i>Moorgate, London</span> <span><i class="fa fa-calendar"></i>Dec 22, 2015 - Mar 17, 2016 </span> </li>
								</ul>
							</div>
						</div>
					</aside>
				</div>
			</div>
		</div>
</section>

</div>
@endsection