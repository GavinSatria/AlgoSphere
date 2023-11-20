<div class="main-nav-wrap">
    <div class="mobile-overlay"></div>

    <ul class="mobile-main-nav">
        <div class="mobile-menu-helper-top"></div>

        <li class="has-children">
            <a href="">
                <i class="fas fa-th d-inline"></i>
                <span>Courses</span>
                <span class="has-sub-category"><i class="fas fa-angle-right"></i></span>
            </a>

            <ul class="category corner-triangle top-left is-hidden">
                <li class="go-back">
                    <a href=""><i class="fas fa-angle-left"></i>Menu</a>
                </li>

                {{--<li class="has-children">--}}
                <li>
                    @foreach(\App\Category::all() as $category)
                        <a href="{{ route('courses_by_category', $category) }}">
                            <span class="icon"><i class="fa fa-caret-right"></i></span>
                            <span>{{ $category->title  }}</span>
                        </a>
                    @endforeach
                </li>
                <li>
                    <a href="{{ url ('courses/1') }}">
                        <span class="icon"><i class="fa fa-caret-right"></i></span>
                        <span>Algorithm & Programming</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url ('courses/2') }}">
                        <span class="icon"><i class="fa fa-caret-right"></i></span>
                        <span>UI/UX Design</span>
                    </a>
                </li>
            </ul>
        </li>

        <div class="mobile-menu-helper-bottom"></div>
    </ul>
</div>
