@extends('layouts.app')

@section('content')

<section id="inner-banner">
	<div class="container">
		<h1>Latest Resumes</h1>
	</div>
</section>

@include('layouts.popular_category')

<section class="candidates-search-bar">
	<div class="container">
		<form action="#">
			<div class="row">
				<div class="col-md-4">
					<input type="text" placeholder="Enter Job Title, Skills or Company">
				</div>
				<div class="col-md-4">
					<input type="text" placeholder="Enter City, State, Province or Country">
				</div>
				<div class="col-md-3">
					<input type="text" placeholder="Category">
				</div>
				<div class="col-md-1">
					<button type="submit"><i class="fa fa-search"></i></button>
				</div>
			</div>
		</form>
	</div>
</section>


<div id="main">

	<section class="resumes-section padd-tb">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-8">
					<div class="resumes-content">
						<div class="check-filter">
							<form action="#">
								<ul>
									<li>
										<input id="id1" type="checkbox"/>
										<label>All Jobs</label>
									</li>
									<li>
										<input id="id2" type="checkbox"/>
										<label>Part Time</label>
									</li>
									<li>
										<input id="id3" type="checkbox"/>
										<label>Full Time</label>
									</li>
									<li>
										<input id="id4" type="checkbox"/>
										<label>Freelance</label>
									</li>
									<li>
										<input id="id5" type="checkbox"/>
										<label>Contract</label>
									</li>
									<li>
										<input id="id6" type="checkbox"/>
										<label>Internship</label>
									</li>
									<li>
										<input id="id7" type="checkbox"/>
										<label>Temporary</label>
									</li>
								</ul>
							</form>
						</div>
						<h2>Showing All Resumes</h2>
						<div class="box">
							<div class="frame"><a href="candidates-listings.html#"><img src="{{asset('images/resumes/resumes-img-1.jpg')}}" alt="img"></a></div>
							<div class="text-box">
								<h2><a href="candidates-listings.html#">Homer Simpson</a></h2>
								<h4>UX/UI Graphic Designer, Development (Mid Level)</h4>
								<div class="clearfix"> <strong><i class="fa fa-map-marker"></i>Mountain View, CA</strong>  </div>
								<div class="tags"> <a href="candidates-listings.html#"><i class="fa fa-tags"></i>Product Management,</a> <a href="candidates-listings.html#">Graphic Design,</a> <a href="candidates-listings.html#">HTML,</a> <a href="candidates-listings.html#">Development,</a> <a href="candidates-listings.html#">WordPress,</a> <a href="candidates-listings.html#">Content</a> </div>
								<div class="btn-row"> <a href="candidates-listings.html#" class="resume"><i class="fa fa-file-text-o"></i>Resume</a> <a href="candidates-listings.html#" class="contact">Contact</a> <a href="candidates-listings.html#" class="login">Login to Bookmark this Resume</a> </div>
							</div>
						</div>
						<div class="box">
							<div class="frame"><a href="candidates-listings.html#"><img src="{{asset('images/resumes/resumes-img-2.jpg')}}" alt="img"></a></div>
							<div class="text-box">
								<h2><a href="candidates-listings.html#">Rachael Smith</a></h2>
								<h4>Sales And Marketing Executive</h4>
								<div class="clearfix"> <strong><i class="fa fa-map-marker"></i>Mountain View, CA</strong> </div>
								<div class="tags"> <a href="candidates-listings.html#"><i class="fa fa-tags"></i>Product Management,</a> <a href="candidates-listings.html#">Graphic Design,</a> <a href="candidates-listings.html#">HTML,</a> <a href="candidates-listings.html#">Development,</a> <a href="candidates-listings.html#">WordPress,</a> <a href="candidates-listings.html#">Content</a> </div>
								<div class="btn-row"> <a href="candidates-listings.html#" class="resume"><i class="fa fa-file-text-o"></i>Resume</a> <a href="candidates-listings.html#" class="contact">Contact</a> <a href="candidates-listings.html#" class="login">Login to Bookmark this Resume</a> </div>
							</div>
						</div>
						<div class="box">
							<div class="frame"><a href="candidates-listings.html#"><img src="{{asset('images/resumes/resumes-img-3.jpg')}}" alt="img"></a></div>
							<div class="text-box">
								<h2><a href="candidates-listings.html#">John Spectre</a></h2>
								<h4>Inspection And Quality Assurance Officer</h4>
								<div class="clearfix"> <strong><i class="fa fa-map-marker"></i>Mountain View, CA</strong> </div>
								<span class="price"><i class="fa fa-money"></i>$50/hr</span>
								<div class="tags"> <a href="candidates-listings.html#"><i class="fa fa-tags"></i>Product Management,</a> <a href="candidates-listings.html#">Graphic Design,</a> <a href="candidates-listings.html#">HTML,</a> <a href="candidates-listings.html#">Development,</a> <a href="candidates-listings.html#">WordPress,</a> <a href="candidates-listings.html#">Content</a> </div>
								<div class="btn-row"> <a href="candidates-listings.html#" class="resume"><i class="fa fa-file-text-o"></i>Resume</a> <a href="candidates-listings.html#" class="contact">Contact</a> <a href="candidates-listings.html#" class="login">Login to Bookmark this Resume</a> </div>
							</div>
						</div>
						<div class="box">
							<div class="frame"><a href="candidates-listings.html#"><img src="{{asset('images/resumes/resumes-img-4.jpg')}}" alt="img"></a></div>
							<div class="text-box">
								<h2><a href="candidates-listings.html#">Angela Haze</a></h2>
								<h4>Lead User Interface/Visual Designer</h4>
								<div class="clearfix"> <strong><i class="fa fa-map-marker"></i>Mountain View, CA</strong> </div>
								<div class="tags"> <a href="candidates-listings.html#"><i class="fa fa-tags"></i>Product Management,</a> <a href="candidates-listings.html#">Graphic Design,</a> <a href="candidates-listings.html#">HTML,</a> <a href="candidates-listings.html#">Development,</a> <a href="candidates-listings.html#">WordPress,</a> <a href="candidates-listings.html#">Content</a> </div>
								<div class="btn-row"> <a href="candidates-listings.html#" class="resume"><i class="fa fa-file-text-o"></i>Resume</a> <a href="candidates-listings.html#" class="contact">Contact</a> <a href="candidates-listings.html#" class="login">Login to Bookmark this Resume</a> </div>
							</div>
						</div>
						<div class="box">
							<div class="frame"><a href="candidates-listings.html#"><img src="{{asset('images/resumes/resumes-img-5.jpg')}}" alt="img"></a></div>
							<div class="text-box">
								<h2><a href="candidates-listings.html#">Suzy Biggs</a></h2>
								<h4>Interactice &amp; Multimedia Tech Designer</h4>
								<div class="clearfix"> <strong><i class="fa fa-map-marker"></i>Mountain View, CA</strong> </div>
								<div class="tags"> <a href="candidates-listings.html#"><i class="fa fa-tags"></i>Product Management,</a> <a href="candidates-listings.html#">Graphic Design,</a> <a href="candidates-listings.html#">HTML,</a> <a href="candidates-listings.html#">Development,</a> <a href="candidates-listings.html#">WordPress,</a> <a href="candidates-listings.html#">Content</a> </div>
								<div class="btn-row"> <a href="candidates-listings.html#" class="resume"><i class="fa fa-file-text-o"></i>Resume</a> <a href="candidates-listings.html#" class="contact">Contact</a> <a href="candidates-listings.html#" class="login">Login to Bookmark this Resume</a> </div>
							</div>
						</div>
						<div id="loadMore"> <a href="candidates-listings.html#" class="load-more"><i class="fa fa-user"></i>Load More Jobs</a></div>
					</div>
				</div>
				<div class="col-md-3 col-sm-4">
					<h2>Related People</h2>
					<aside>
						<div class="sidebar">
							<div class="related-people">
								<ul>
									<li>
										<div class="frame"><a href="candidates-listings.html#"><img src="{{asset('images/resumes/related-img-1.jpg')}}" alt="img"></a></div>
										<div class="text-box"> <strong class="name"><a href="candidates-listings.html#">Bettymesfin</a></strong> <span><i class="fa fa-tags"></i>Developer</span> <span><i class="fa fa-map-marker"></i>Atlanta</span> </div>
									</li>
									<li>
										<div class="frame"><a href="candidates-listings.html#"><img src="{{asset('images/resumes/related-img-2.jpg')}}" alt="img"></a></div>
										<div class="text-box"> <strong class="name"><a href="candidates-listings.html#">Cammy</a></strong> <span><i class="fa fa-tags"></i>Front Desk Specialist</span> <span><i class="fa fa-map-marker"></i>Berlin</span> </div>
									</li>
									<li>
										<div class="frame"><a href="candidates-listings.html#"><img src="{{asset('images/resumes/related-img-3.jpg')}}" alt="img"></a></div>
										<div class="text-box"> <strong class="name"><a href="candidates-listings.html#">Jane Doe</a></strong> <span><i class="fa fa-tags"></i>Marketing Online</span> <span><i class="fa fa-map-marker"></i>Atlanta</span> </div>
									</li>
									<li>
										<div class="frame"><a href="candidates-listings.html#"><img src="{{asset('images/resumes/related-img-4.jpg')}}" alt="img"></a></div>
										<div class="text-box"> <strong class="name"><a href="candidates-listings.html#">Angela Haze</a></strong> <span><i class="fa fa-tags"></i>Accountant</span> <span><i class="fa fa-map-marker"></i>Berlin</span> </div>
									</li>
									<li>
										<div class="frame"><a href="candidates-listings.html#"><img src="{{asset('images/resumes/related-img-5.jpg')}}" alt="img"></a></div>
										<div class="text-box"> <strong class="name"><a href="candidates-listings.html#">Suzy Biggs</a></strong> <span><i class="fa fa-tags"></i>HR Manager Expert</span> <span><i class="fa fa-map-marker"></i>London, UK</span> </div>
									</li>
									<li>
										<div class="frame"><a href="candidates-listings.html#"><img src="{{asset('images/resumes/related-img-6.jpg')}}" alt="img"></a></div>
										<div class="text-box"> <strong class="name"><a href="candidates-listings.html#">Rachael Smith</a></strong> <span><i class="fa fa-tags"></i>Lead Designer</span> <span><i class="fa fa-map-marker"></i>New York, NY</span> </div>
									</li>
									<li>
										<div class="frame"><a href="candidates-listings.html#"><img src="{{asset('images/resumes/related-img-1.jpg')}}" alt="img"></a></div>
										<div class="text-box"> <strong class="name"><a href="candidates-listings.html#">Bettymesfin</a></strong> <span><i class="fa fa-tags"></i>Developer</span> <span><i class="fa fa-map-marker"></i>Atlanta</span> </div>
									</li>
									<li>
										<div class="frame"><a href="candidates-listings.html#"><img src="{{asset('images/resumes/related-img-2.jpg')}}" alt="img"></a></div>
										<div class="text-box"> <strong class="name"><a href="candidates-listings.html#">Cammy</a></strong> <span><i class="fa fa-tags"></i>Front Desk Specialist</span> <span><i class="fa fa-map-marker"></i>Berlin</span> </div>
									</li>
									<li>
										<div class="frame"><a href="candidates-listings.html#"><img src="{{asset('images/resumes/related-img-3.jpg')}}" alt="img"></a></div>
										<div class="text-box"> <strong class="name"><a href="candidates-listings.html#">Jane Doe</a></strong> <span><i class="fa fa-tags"></i>Marketing Online</span> <span><i class="fa fa-map-marker"></i>Atlanta</span> </div>
									</li>
									<li>
										<div class="frame"><a href="candidates-listings.html#"><img src="{{asset('images/resumes/related-img-4.jpg')}}" alt="img"></a></div>
										<div class="text-box"> <strong class="name"><a href="candidates-listings.html#">Angela Haze</a></strong> <span><i class="fa fa-tags"></i>Accountant</span> <span><i class="fa fa-map-marker"></i>Berlin</span> </div>
									</li>
									<li>
										<div class="frame"><a href="candidates-listings.html#"><img src="{{asset('images/resumes/related-img-5.jpg')}}" alt="img"></a></div>
										<div class="text-box"> <strong class="name"><a href="candidates-listings.html#">Suzy Biggs</a></strong> <span><i class="fa fa-tags"></i>HR Manager Expert</span> <span><i class="fa fa-map-marker"></i>London, UK</span> </div>
									</li>
									<li>
										<div class="frame"><a href="candidates-listings.html#"><img src="{{asset('images/resumes/related-img-6.jpg')}}" alt="img"></a></div>
										<div class="text-box"> <strong class="name"><a href="candidates-listings.html#">Rachael Smith</a></strong> <span><i class="fa fa-tags"></i>Lead Designer</span> <span><i class="fa fa-map-marker"></i>New York, NY</span> </div>
									</li>
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