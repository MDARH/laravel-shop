<div class="blog_right_sidebar">
    <aside class="single_sidebar_widget search_widget">
        <form action="#">
            <div class="form-group">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search Keyword">
                    <div class="input-group-append">
                        <button class="btn" type="button"><i class="ti-search"></i></button>
                    </div>
                </div>
            </div>
            <button class="main_btn rounded-0 w-100" type="submit">Search</button>
        </form>
    </aside>

    <aside class="single_sidebar_widget post_category_widget">
        <h4 class="widget_title">Category</h4>
        <ul class="list cat-list">
            <li>
                <a href="#" class="d-flex">
                    <p>Resaurant food</p>
                    <p>(37)</p>
                </a>
            </li>
            <li>
                <a href="#" class="d-flex">
                    <p>Travel news</p>
                    <p>(10)</p>
                </a>
            </li>
            <li>
                <a href="#" class="d-flex">
                    <p>Modern technology</p>
                    <p>(03)</p>
                </a>
            </li>
            <li>
                <a href="#" class="d-flex">
                    <p>Product</p>
                    <p>(11)</p>
                </a>
            </li>
            <li>
                <a href="#" class="d-flex">
                    <p>Inspiration</p>
                    <p>21</p>
                </a>
            </li>
            <li>
                <a href="#" class="d-flex">
                    <p>Health Care (21)</p>
                    <p>09</p>
                </a>
            </li>
        </ul>
    </aside>

    <aside class="single_sidebar_widget popular_post_widget">
        <h3 class="widget_title">Recent Post</h3>
        @foreach(Helper::recentPost() as $post)
            <div class="media post_item">
                @if($post->image)
                    <img src="{{asset('images/post/small'.$post->image)}}" alt="{{$post->title}}">
                @endif
                <div class="media-body">
                    <a href="{{route('post.single', $post->slug)}}">
                        <h3>{{$post->title}}</h3>
                    </a>
                    <p>{{date_format($post->updated_at,"d M, Y")}}</p>
                </div>
            </div>
        @endforeach
    </aside>



    <aside class="single_sidebar_widget tag_cloud_widget">
        <h4 class="widget_title">Tag Clouds</h4>
        <ul class="list">
            <li>
                <a href="#">project</a>
            </li>
            <li>
                <a href="#">love</a>
            </li>
            <li>
                <a href="#">technology</a>
            </li>
            <li>
                <a href="#">travel</a>
            </li>
            <li>
                <a href="#">restaurant</a>
            </li>
            <li>
                <a href="#">life style</a>
            </li>
            <li>
                <a href="#">design</a>
            </li>
            <li>
                <a href="#">illustration</a>
            </li>
        </ul>
    </aside>

    <aside class="single_sidebar_widget instagram_feeds">
        <h4 class="widget_title">Instagram Feeds</h4>
        <ul class="instagram_row flex-wrap">
            <li>
                <a href="#">
                    <img class="img-fluid" src="img/instagram/widget-i1.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="img/instagram/widget-i2.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="img/instagram/widget-i3.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="img/instagram/widget-i4.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="img/instagram/widget-i5.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="img/instagram/widget-i6.png" alt="">
                </a>
            </li>
        </ul>
    </aside>

    <aside class="single_sidebar_widget newsletter_widget">
        <h4 class="widget_title">Newsletter</h4>

        <form action="#">
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Enter email" required="">
            </div>
            <button class="main_btn rounded-0 w-100" type="submit">Subscribe</button>
        </form>
    </aside>
</div>