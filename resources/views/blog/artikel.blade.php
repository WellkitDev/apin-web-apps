@extends('layouts.apps')

@section('content')
<!-- start of breadcumb-section -->
<div class="wpo-breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wpo-breadcumb-wrap">
                    <h2>Artikel</h2>
                    <ul>
                        <li><a href="{{ url('/') }}">Beranda</a></li>
                        <li><span>Artikel</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of wpo-breadcumb-section-->

<!-- start wpo-blog-pg-section -->
<section class="wpo-blog-pg-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-lg-8">
                <div class="wpo-blog-content">
                    <div class="post format-standard-image">
                        <div class="entry-media">
                            <img src="https://wpocean.com/html/tf/consultar-live/assets/images/blog/img-4.jpg" alt>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="fi flaticon-user"></i> By <a href="#">Jenny Watson</a> </li>
                                <li><i class="fi flaticon-comment-white-oval-bubble"></i> Comments 35 </li>
                                <li><i class="fi flaticon-calendar"></i> 24 Jun 2021</li>
                            </ul>
                        </div>
                        <div class="entry-details">
                            <h3><a href="blog-single.html">8 Mistakes Founders Make When Starting a Business.</a></h3>
                            <p>Consulting is a great career path if you want to build a broad skill set that includes everything from critical thinking and strategic planning to communications. If you love rising to a challenge.</p>
                            <a href="blog-single.html" class="read-more">READ MORE...</a>
                        </div>
                    </div>
                    <div class="post format-standard-image">
                        <div class="entry-media">
                            <img src="https://wpocean.com/html/tf/consultar-live/assets/images/blog/img-4.jpg" alt>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="fi flaticon-user"></i> By <a href="#">Jenny Watson</a> </li>
                                <li><i class="fi flaticon-comment-white-oval-bubble"></i> Comments 35 </li>
                                <li><i class="fi flaticon-calendar"></i> 24 Jun 2021</li>
                            </ul>
                        </div>
                        <div class="entry-details">
                            <h3><a href="blog-single.html">8 Mistakes Founders Make When Starting a Business.</a></h3>
                            <p>Consulting is a great career path if you want to build a broad skill set that includes everything from critical thinking and strategic planning to communications. If you love rising to a challenge.</p>
                            <a href="blog-single.html" class="read-more">READ MORE...</a>
                        </div>
                    </div>
                    <div class="pagination-wrapper pagination-wrapper-left">
                        <ul class="pg-pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <i class="fi ti-angle-left"></i>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <i class="fi ti-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col col-lg-4">
                <div class="blog-sidebar">
                    
                    <div class="widget search-widget">
                        <form>
                            <div>
                                <input type="text" class="form-control" placeholder="Search Post..">
                                <button type="submit"><i class="ti-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="widget category-widget">
                        <h3>Categories</h3>
                        <ul>
                            <li><a href="blog.html">Blockchain Consulting <span>5</span></a></li>
                            <li><a href="blog.html">Commodity Traders <span>7</span></a></li>
                            <li><a href="blog.html">Financial Planning <span>3</span></a></li>
                            <li><a href="blog.html">Investment Consulting <span>6</span></a></li>
                            <li><a href="blog.html">Online Banking Consulting <span>2</span></a></li>
                            <li><a href="blog.html">Personal Consulting Advice <span>8</span></a></li>
                        </ul>
                    </div>
                    <div class="widget recent-post-widget">
                        <h3>Related Posts</h3>
                        <div class="posts">
                            <div class="post">
                                <div class="img-holder">
                                    <img src="https://wpocean.com/html/tf/consultar-live/assets/images/recent-posts/img-1.jpg" alt>
                                </div>
                                <div class="details">
                                    <h4><a href="blog-single.html">Why Choose Management Consulting?</a></h4>
                                    <span class="date">19 Jun 2021 </span>
                                </div>
                            </div>
                            <div class="post">
                                <div class="img-holder">
                                    <img src="https://wpocean.com/html/tf/consultar-live/assets/images/recent-posts/img-2.jpg" alt>
                                </div>
                                <div class="details">
                                    <h4><a href="blog-single.html">Researching the Consulting Career Path</a></h4>
                                    <span class="date">22 May 2021 </span>
                                </div>
                            </div>
                            <div class="post">
                                <div class="img-holder">
                                    <img src="https://wpocean.com/html/tf/consultar-live/assets/images/recent-posts/img-3.jpg" alt>
                                </div>
                                <div class="details">
                                    <h4><a href="blog-single.html">Joining the Consulting Club During Your MBA</a></h4>
                                    <span class="date">12 Apr 2021 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget wpo-instagram-widget">
                        <div class="widget-title">
                            <h3>Projects</h3>
                        </div>
                        <ul class="d-flex">
                            <li><a href="project-single.html"><img src="https://wpocean.com/html/tf/consultar-live/assets/images/instragram/13.jpg" alt=""></a></li>
                            <li><a href="project-single.html"><img src="https://wpocean.com/html/tf/consultar-live/assets/images/instragram/14.jpg" alt=""></a></li>
                            <li><a href="project-single.html"><img src="https://wpocean.com/html/tf/consultar-live/assets/images/instragram/15.jpg" alt=""></a></li>
                            <li><a href="project-single.html"><img src="https://wpocean.com/html/tf/consultar-live/assets/images/instragram/16.jpg" alt=""></a></li>
                            <li><a href="project-single.html"><img src="https://wpocean.com/html/tf/consultar-live/assets/images/instragram/17.jpg" alt=""></a></li>
                            <li><a href="project-single.html"><img src="https://wpocean.com/html/tf/consultar-live/assets/images/instragram/18.jpg" alt=""></a></li>
                        </ul>
                    </div>
                    <div class="widget tag-widget">
                        <h3>Tags</h3>
                        <ul>
                            <li><a href="#">Consulting</a></li>
                            <li><a href="#">Planning</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Strategy</a></li>
                            <li><a href="#">Finance</a></li>
                            <li><a href="#">Solution</a></li>
                            <li><a href="#">Corporate</a></li>
                            <li><a href="#">Idea</a></li>
                            <li><a href="#">Market Reserch</a></li>
                        </ul>
                    </div>
                    <div class="wpo-contact-widget widget">
                        <h2>How We Can <br> Help You!</h2>
                        <p>labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                        <a href="contact.html">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end wpo-blog-pg-section -->
@endsection