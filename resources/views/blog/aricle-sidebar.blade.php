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
            @foreach ($subCategory as $item)
                <li><a href="">{{ $item->subcategory_name }} <span>{{ $item->articles->count() }}</span></a></li>
            @endforeach
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
            <li><a href="project-single.html"><img
                        src="https://wpocean.com/html/tf/consultar-live/assets/images/instragram/13.jpg"
                        alt=""></a></li>
            <li><a href="project-single.html"><img
                        src="https://wpocean.com/html/tf/consultar-live/assets/images/instragram/14.jpg"
                        alt=""></a></li>
            <li><a href="project-single.html"><img
                        src="https://wpocean.com/html/tf/consultar-live/assets/images/instragram/15.jpg"
                        alt=""></a></li>
            <li><a href="project-single.html"><img
                        src="https://wpocean.com/html/tf/consultar-live/assets/images/instragram/16.jpg"
                        alt=""></a></li>
            <li><a href="project-single.html"><img
                        src="https://wpocean.com/html/tf/consultar-live/assets/images/instragram/17.jpg"
                        alt=""></a></li>
            <li><a href="project-single.html"><img
                        src="https://wpocean.com/html/tf/consultar-live/assets/images/instragram/18.jpg"
                        alt=""></a></li>
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
        <p>labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas
            accumsan lacus vel facilisis. </p>
        <a href="contact.html">Contact Us</a>
    </div>
</div>
