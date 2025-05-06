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
            @foreach ($related_article as $more)
                <div class="post">
                    <div class="img-holder">
                        <img src="{{ $more->article_img }}" width="90px"alt>
                    </div>
                    <div class="details">
                        <h4><a
                                href="{{ route('article.detail', ['slug' => $more->slug]) }}">{{ $more->article_title }}</a>
                        </h4>
                        <span class="date">{{ $more->created_at->translatedFormat('j, F Y') }} </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- <div class="widget wpo-instagram-widget">
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
    </div> --}}
    <div class="widget tag-widget">
        <h3>Tags</h3>
        <ul>
            @foreach ($tags as $tag)
                <li><a href="#">{{ $tag->tag_name }}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="wpo-contact-widget widget">
        <h2>Kami Siap <br> Membantu Anda!</h2>
        <p>Kami bekerja keras untuk memberikan solusi terbaik. Kami siap membantu Anda dengan layanan yang mudah dan
            nyaman </p>
        <a href="{{ url('/contact') }}">Contact Us</a>
    </div>
</div>
