@extends('layouts.app')

@section('content')
<section id="inner-banner">
  <div class="container">
    <h1>Latest Volunteer Jobs</h1>
  </div>
</section>

@include('layouts.popular_category')

<div id="main">
    <section class="recent-row padd-tb">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8">
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
                                    <input id="id4" type="checkbox"/>
                                    <label>Freelance</label>
                                </li>
                                <li>
                                    <input id="id7" type="checkbox"/>
                                    <label>Temporary</label>
                                </li>
                            </ul>
                        </form>
                    </div>
                    <div id="content-area">
                        <h2>Latest Jobs</h2>
                        <ul id="myList">
                            @foreach($jobs as $job)
                            <li>
                                <div class="box">
                                    <div class="thumb"><a href="{{action('JobsController@GetJob',['job' => $job->id])}}"><img src="{{asset('images/recent-job-thumb-1.jpg')}}" alt="img"></a></div>
                                    <div class="text-col">
                                        <div class="hold">
                                            <h4><a href="{{action('JobsController@GetJob',['job' => $job->id])}}">{{$job->title}}</a></h4>
                                            <p>{{str_limit($job->description,150)}}</p>
                                            <a href="{{action('JobsController@GetJob',['job' => $job->id])}}" class="text"><i class="fa fa-map-marker"></i>Moorgate, London</a> <a href="{{action('JobsController@GetJob',['job' => $job->id])}}" class="text"><i class="fa fa-calendar"></i>Dec 30, 2015 - Feb 20, 2016 </a> </div>
                                    </div>
                                    <a href="{{action('JobsController@GetJob',['job' => $job->id])}}" class="btn-1 btn-color-2 ripple">View Job</a> </div>
                            </li>
                            @endforeach
                        </ul>
                        <div id="loadMore"> <a href="jobs.html#" class="load-more"><i class="fa fa-user"></i>Load More Jobs</a></div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <h2>Featured Jobs</h2>
                    <aside>
                        <div class="sidebar">
                            <div class="box">
                                <div class="thumb"> <a href="jobs.html#"><img src="{{asset('images/features-img-1.jpg')}}" alt="img"></a>
                                    <div class="caption"><img src="{{asset('images/envato-text.png')}}" alt="envato"></div>
                                </div>
                                <div class="text-box"> <a href="jobs.html#" class="btn-time">Part Time</a>
                                    <h4><a href="jobs.html#">UI/UX Visual Designers</a></h4>
                                    <a href="jobs.html#" class="text"><i class="fa fa-map-marker"></i>Moorgate, London</a> <a href="jobs.html#" class="text"><i class="fa fa-calendar"></i>Dec 22, 2015 - Mar 17, 2016 </a> <a href="jobs.html#" class="btn-apply">Apply for this Job</a> </div>
                            </div>
                            <h2>Jobs Gallery</h2>
                            <div class="sidebar-jobs">
                                <ul>
                                    <li> <a href="jobs.html#">General Compliance Officer</a> <span><i class="fa fa-map-marker"></i>Arlington, VA </span> <span><i class="fa fa-calendar"></i>Dec 22, 2015 - Mar 17, 2016 </span> </li>
                                    <li> <a href="jobs.html#">Medical Transcrption</a> <span><i class="fa fa-map-marker"></i>San Francisco, CA</span> <span><i class="fa fa-calendar"></i>Dec 22, 2015 - Mar 17, 2016 </span> </li>
                                    <li> <a href="jobs.html#">Support Coordinator</a> <span><i class="fa fa-map-marker"></i>Moorgate, London</span> <span><i class="fa fa-calendar"></i>Dec 22, 2015 - Mar 17, 2016 </span> </li>
                                    <li> <a href="jobs.html#">Mobile Application Developer</a> <span><i class="fa fa-map-marker"></i>New York, NY</span> <span><i class="fa fa-calendar"></i>Dec 22, 2015 - Mar 17, 2016 </span> </li>
                                    <li> <a href="jobs.html#">2D/3D Graphic Designer</a> <span><i class="fa fa-map-marker"></i>Moorgate, London</span> <span><i class="fa fa-calendar"></i>Dec 22, 2015 - Mar 17, 2016 </span> </li>
                                    <li> <a href="jobs.html#">Corporate Sales Executive</a> <span><i class="fa fa-map-marker"></i>Washington, DC </span> <span><i class="fa fa-calendar"></i>Dec 22, 2015 - Mar 17, 2016 </span> </li>
                                    <li> <a href="jobs.html#">International Tour Consultant</a> <span><i class="fa fa-map-marker"></i>Nationwide Anywhere </span> <span><i class="fa fa-calendar"></i>Dec 22, 2015 - Mar 17, 2016 </span> </li>
                                    <li> <a href="jobs.html#">Marketing Strategist</a> <span><i class="fa fa-map-marker"></i>Moorgate, London</span> <span><i class="fa fa-calendar"></i>Dec 22, 2015 - Mar 17, 2016 </span> </li>
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