@extends('layouts.apps')

@section('content')
<!-- start of breadcumb-section -->
<div class="wpo-breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wpo-breadcumb-wrap">
                    <h2>Details</h2>
                    <ul>
                        <li><a href="{{ url('/') }}">Beranda</a></li>
                        <li><span>Artikel</span></li>
                        <li><span>Details</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of wpo-breadcumb-section-->


<!-- start wpo-blog-single-section -->
<section class="wpo-blog-single-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-lg-8 col-12">
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
                        <h2>Underestimating the challenge of raising Series A funding</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful.</p>
                        <blockquote>
                            Combined with a handful of model sentence structures, generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                        </blockquote>
                        <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself,</p>

                        <div class="gallery">
                            <div>
                                <img src="https://wpocean.com/html/tf/consultar-live/assets/images/blog/img-3.jpg" alt="">
                            </div>
                            <div>
                                <img src="https://wpocean.com/html/tf/consultar-live/assets/images/blog/img-2.jpg" alt="" >
                            </div>
                        </div>
                    </div>

                    <div class="tag-share clearfix">
                        <div class="tag">
                            <span>Share: </span>
                            <ul>
                                <li><a href="#">Planning</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Consulting</a></li>
                            </ul>
                        </div>
                    </div> <!-- end tag-share -->
                    <div class="tag-share-s2 clearfix">
                        <div class="tag">
                            <span>Share: </span>
                            <ul>
                                <li><a href="#">facebook</a></li>
                                <li><a href="#">twitter</a></li>
                                <li><a href="#">linkedin</a></li>
                                <li><a href="#">pinterest</a></li>
                            </ul>
                        </div>
                    </div> <!-- end tag-share -->

                    <div class="author-box">
                        <div class="author-avatar">
                            <a href="#" target="_blank"><img src="https://wpocean.com/html/tf/consultar-live/assets/images/blog-details/author.jpg" alt></a>
                        </div>
                        <div class="author-content">
                            <a href="#" class="author-name">Author: Jenny Watson</a>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                            <div class="socials">
                                <ul class="social-link">
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- end author-box -->

                    <div class="more-posts">
                        <div class="previous-post">
                            <a href="blog.html">
                                <span class="post-control-link">Previous Post</span>
                                <span class="post-name">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.</span>
                            </a>
                        </div>
                        <div class="next-post">
                            <a href="blog-left-sidebar.html">
                                <span class="post-control-link">Next Post</span>
                                <span class="post-name">Dignissimos ducimus qui blanditiis praesentiu deleniti atque corrupti quos dolores</span>
                            </a>
                        </div>
                    </div>

                    <div class="comments-area">
                        <div class="comments-section">
                            <h3 class="comments-title">5 Comments</h3>
                            <ol class="comments">
                                <li class="comment even thread-even depth-1" id="comment-1">
                                    <div id="div-comment-1">
                                        <div class="comment-theme">
                                            <div class="comment-image"><img src="https://wpocean.com/html/tf/consultar-live/assets/images/blog-details/comments-author/img-1.jpg" alt></div>
                                        </div>
                                        <div class="comment-main-area">
                                            <div class="comment-wrapper">
                                                <div class="comments-meta">
                                                    <h4>Robert Sonny <span class="comments-date">says Jul 21, 2021 at 10:00am</span></h4>
                                                </div>
                                                <div class="comment-area">
                                                    <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system</p>
                                                    <div class="comments-reply">
                                                        <a class="comment-reply-link" href="#"><span>Reply</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="children">
                                        <li class="comment">
                                            <div>
                                                <div class="comment-theme">
                                                    <div class="comment-image"><img src="https://wpocean.com/html/tf/consultar-live/assets/images/blog-details/comments-author/img-2.jpg" alt></div>
                                                </div>
                                                <div class="comment-main-area">
                                                    <div class="comment-wrapper">
                                                        <div class="comments-meta">
                                                            <h4>John Abraham  <span class="comments-date">says Jul 21, 2021 at 10:00am</span></h4>
                                                        </div>
                                                        <div class="comment-area">
                                                            <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system</p>
                                                            <div class="comments-reply">
                                                                <a  class="comment-reply-link" href="#"><span>Reply</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul>
                                                <li class="comment">
                                                    <div>
                                                        <div class="comment-theme">
                                                            <div class="comment-image"><img src="https://wpocean.com/html/tf/consultar-live/assets/images/blog-details/comments-author/img-3.jpg" alt></div>
                                                        </div>
                                                        <div class="comment-main-area">
                                                            <div class="comment-wrapper">
                                                                <div class="comments-meta">
                                                                    <h4>Robert Sonny <span class="comments-date">says Jul 21, 2021 at 10:00am</span></h4>
                                                                </div>
                                                                <div class="comment-area">
                                                                    <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system</p>
                                                                    <div class="comments-reply">
                                                                        <a  class="comment-reply-link" href="#"><span>Reply</span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="comment">
                                    <div>
                                        <div class="comment-theme">
                                            <div class="comment-image"><img src="https://wpocean.com/html/tf/consultar-live/assets/images/blog-details/comments-author/img-1.jpg" alt></div>
                                        </div>
                                        <div class="comment-main-area">
                                            <div class="comment-wrapper">
                                                <div class="comments-meta">
                                                    <h4>John Abraham  <span class="comments-date">says Jul 21, 2021 at 10:00am</span></h4>
                                                </div>
                                                <div class="comment-area">
                                                    <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system</p>
                                                    <div class="comments-reply">
                                                        <a  class="comment-reply-link" href="#"><span>Reply</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div> <!-- end comments-section -->

                        <div class="comment-respond">
                            <h3 class="comment-reply-title">Leave a reply</h3>
                            <form class="comment-form">
                                <div class="form-inputs">
                                    <input placeholder="Name" type="text">
                                    <input placeholder="Email" type="email">
                                    <input placeholder="Website" type="url">
                                </div>
                                <div class="form-textarea">
                                    <textarea id="comment" placeholder="Write Your Comments..."></textarea>
                                </div>
                                <div class="form-submit">
                                    <input id="submit" value="Post Comment" type="submit">
                                </div>
                            </form>
                        </div>
                    </div> <!-- end comments-area -->
                </div>
            </div>
            <div class="col col-lg-4 col-12">
                <div class="blog-sidebar">
                    <div class="widget about-widget">
                        <div class="img-holder">
                            <img src="https://wpocean.com/html/tf/consultar-live/assets/images/blog/about-widget.jpg" alt>
                        </div>
                        <h4>Jenny Watson</h4>
                        <p>Hi! beautiful people. I`m an authtor of this blog. Read our post - stay with us</p>
                        <div class="social">
                            <ul class="clearfix">
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                <li><a href="#"><i class="ti-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="aw-shape">
                            <img src="https://wpocean.com/html/tf/consultar-live/assets/images/blog/ab.png" alt="">
                        </div>
                    </div>
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
<!-- end wpo-blog-single-section -->
@endsection