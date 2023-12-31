@extends('layouts.app')

@section('content')

    <section class="course-header-area">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="course-header-wrap">
                        <h1 class="title">{{ $course->title }}</h1>
                        <p class="subtitle">{{ $course->short_description }}</p>
                        <div class="rating-row">
                            {{--<span class="course-badge best-seller">Best seller</span>--}}
                            <?php
                            for($i = 1; $i < 6; $i++):?>
                            <?php if ($i <= 0): ?>
                            <i class="fas fa-star filled" style="color: #f5c85b;"></i>
                            <?php else: ?>
                            <i class="fas fa-star"></i>
                            <?php endif; ?>
                            <?php endfor; ?>
                            <span class="d-inline-block average-rating"><?php echo 0; ?></span>
                            <span>(0 ratings)</span>
                            <span class="enrolled-num">
                                10 students enrolled
                            </span>
                        </div>
                        <div class="created-row">
                            {{--<span class="created-by">--}}
                            {{--Created by--}}
                            {{--<a href="">first_name last_name</a>--}}
                            {{--</span>--}}
                            <span class="last-updated-date">Created on {{ $course->created_at }}</span>
                            <span class="last-updated-date">Last updated on {{ $course->updated_at }}</span>
                            <span class="comment">
                                <i class="fas fa-comment"></i>English
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">

                </div>
            </div>
        </div>
    </section>

    <section class="course-content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <div class="what-you-get-box">
                        <div class="what-you-get-title">What I will learn</div>
                        <ul class="what-you-get__items">
                            {{ $course->outcomes }}
                        </ul>
                    </div>
                    <br>
                    <div class="course-curriculum-box">
                        <div class="course-curriculum-title clearfix">
                            <!-- <div class="title float-left">Course Overview</div> -->
                            <!-- <div class="float-right">
                                <span class="total-lectures">
                                    {{ $course->lessons->count() }} lessons
                                </span>
                                <span class="total-time">
                                    2 hours
                                </span>
                            </div> -->
                        </div>
                        <div class="course-curriculum-accordion">

                            <div class="lecture-group-wrapper">
                                <div class="enter-button"
                                     aria-expanded="false">
                                    <div class="title float-left">
                                        
                                        <!-- Button with Blade syntax and route link -->
                                        @if($course->id == 1)
                                        <a href="{{ route('algo_intro') }}">
                                            <button type="button" class="btn btn-primary">Go to Course</button>
                                        </a>
                                        @endif
                                        @if($course->id == 2)
                                        <a href="{{ route('ui_intro') }}">
                                            <button type="button" class="btn btn-primary">Go to Course</button>
                                        </a>
                                        @endif
                                    </div>
                                    <div class="float-right">
                                        <span class="total-lectures">
                                            8 lessons
                                        </span>
                                    </div>
                                </div>
                                <br>

                                <!-- <div id="collapse" class="lecture-list collapse">
                                    <ul>
                                        @foreach($course->lessons as $lesson)
                                            <li class="lecture has-preview">
                                                <span class="lecture-title">{{ $lesson->title }}</span>
                                                <span class="lecture-time float-right">{{ $lesson->duration }}</span>
                                                <span class="lecture-preview float-right" data-toggle="modal" data-target="#CoursePreviewModal">Preview</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                    </div>

                    <div class="requirements-box">
                        <div class="requirements-title">Requirements</div>
                        <div class="requirements-content">
                            <ul class="requirements__list">
                                {{ $course->requirements }}
                            </ul>
                        </div>
                    </div>
                    <div class="description-box view-more-parent">
                        <div class="view-more" onclick="viewMore(this,'hide')">
                            + View More
                        </div>
                        <div class="description-title">Description</div>
                        <div class="description-content-wrap">
                            <div class="description-content">
                                {{ $course->description }}
                            </div>
                        </div>
                    </div>


                    <div class="compare-box view-more-parent">
                        <div class="compare-title">Other Related Courses</div>
                        <div class="compare-courses-wrap">
                            @if($course->id == 1)
                            <a href="{{ url ('courses/2')}}">UI/UX Design</a>
                            @endif
                            @if($course->id==2)
                            <a href="{{ url ('courses/1')}}">Algorithm and Programming</a>
                            @endif
                        </div>
                    </div>

                    <!-- <div class="about-instructor-box">
                        <div class="about-instructor-title">
                            About the instructor
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="about-instructor-image">
                                    <img src="" alt="" class="img-fluid">
                                    <ul>
                                        <li><i class="fas fa-star"></i><b>4.4</b> Average Rating</li>
                                        <li>
                                            <i class="fas fa-comment"></i><b>
                                                0
                                            </b> reviews
                                        </li>
                                        <li><i class="fas fa-user"></i><b>
                                                5
                                            </b> Students
                                        </li>
                                        <li>
                                            <i class="fas fa-play-circle"></i>
                                            <b>
                                                11
                                            </b> Courses
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="about-instructor-details view-more-parent">
                                    <div class="view-more" onclick="viewMore(this)">+ View More</div>
                                    <div class="instructor-name">
                                        <a href=""></a>
                                    </div>
                                    <div class="instructor-title">
                                        title
                                    </div>
                                    <div class="instructor-bio">
                                        biography
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  -->

                    <div class="student-feedback-box">
                        <div class="student-feedback-title">
                            Student feedback
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-lg-offset-4">
                                <div class="average-rating">
                                    <div class="num">
                                        {{ $course->average }}
                                    </div>
                                    <div class="rating">
                                        <?php
                                        for($i = 1; $i < 6; $i++):?>
                                        <?php if ($i <= $course->average): ?>
                                        <i class="fas fa-star filled" style="color: #f5c85b;"></i>
                                        <?php else: ?>
                                        <i class="fas fa-star" style="color: #abb0bb;"></i>
                                        <?php endif; ?>
                                        <?php endfor; ?>
                                    </div>
                                    <div class="title">Average rating</div>
                                </div>
                            </div>
                            {{--<div class="col-lg-9">--}}
                                {{--<div class="individual-rating">--}}
                                    {{--<ul>--}}
                                        {{--@for($i = 1; $i <= 5; $i++)--}}
                                            {{--<li>--}}
                                                {{--<div class="progress">--}}
                                                    {{--<div class="progress-bar" style="width: 20%"></div>--}}
                                                {{--</div>--}}
                                                {{--<div>--}}
                                                    {{--<span class="rating">--}}
                                                        {{--@for($j = 1; $j <= (5 - $i); $j++)--}}
                                                            {{--<i class="fas fa-star"></i>--}}
                                                        {{--@endfor--}}
                                                        {{--@for($j = 1; $j <= $i; $j++)--}}
                                                            {{--<i class="fas fa-star filled"></i>--}}
                                                        {{--@endfor--}}
                                                    {{--</span>--}}
                                                    {{--<span>30%</span>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                        {{--@endfor--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                        <div class="reviews">
                            <div class="reviews-title">Reviews</div>
                            <ul>
                                @foreach($course->reviews as $review)
                                    <li>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="reviewer-details clearfix">
                                                    <div class="reviewer-img float-left">
                                                        <img src="" alt="">
                                                    </div>
                                                    <div class="review-time">
                                                        <div class="time">
                                                            {{ $review->created_at }}
                                                        </div>
                                                        <div class="reviewer-name">
                                                            {{ $review->user->name }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="review-details">
                                                    <div class="rating">
                                                        @for($i = 1; $i < 6; $i++)
                                                            @if ($i <= $review->rating)
                                                                <i class="fas fa-star filled"
                                                                   style="color: #f5c85b;"></i>
                                                            @else
                                                                <i class="fas fa-star" style="color: #abb0bb;"></i>
                                                            @endif
                                                        @endfor
                                                    </div>
                                                    <div class="review-text">
                                                        {{ $review->review }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="course-sidebar natural">
                        <div class="preview-video-box">
                            <a data-toggle="modal" data-target="#CoursePreviewModal">
                                <img src="{{ asset('images/algoprog.jpg') }}" alt="" class="img-fluid">
                                <!-- <span class="preview-text">Preview this course</span>
                                <span class="play-btn"></span> -->
                            </a>
                        </div>
                        <div class="course-sidebar-text-box">
                            <div class="price">
                                <span class="current-price">
                                    Rp <span class="current-price">{{ $course->price }}</span></span>
                                <input type="hidden" id="total_price_of_checking_out" value="{{ $course->price }}">
                            </div>

                            {{--<div class="buy-btns">--}}
                            {{--<button class="btn btn-buy-now" type="button">Already purchased</button>--}}
                            {{--</div>--}}
                            <div class="buy-btns">
                                @if(Cart::get($course->id))
                                    <a href="" class="btn btn-buy-now" id="course_2" onclick="handleBuyNow(this)">Buy
                                        now</a>
                                    <button class="btn btn-add-cart addedToCart" type="button" id="{{ $course->id }}"
                                            onclick="handleCartItems(this)">Added to cart
                                    </button>
                                @else
                                    <form action="{{ route('cart.add') }}" method="post">
                                        @csrf

                                        <input type="hidden" value="{{ $course->id }}" name="course_id">
                                        <input type="hidden" value="{{ $course->title }}" name="name">
                                        <input type="hidden" value="{{ $course->price }}" name="price">
                                        <input type="hidden" value="1" name="quantity">

                                        <button class="btn btn-add-cart" type="submit" id="{{ $course->id }}">Add to
                                            cart
                                        </button>
                                    </form>
                                @endif
                            </div>

                            <div class="includes">
                                <div class="title"><b>Includes:</b></div>
                                <ul>
                                    <li>
                                        <i class="far fa-file-video"></i>
                                        on_demand_videos
                                    </li>
                                    <li>
                                        <i class="far fa-file"></i> {{ $course->lessons->count() }} lessons
                                    </li>
                                    <li><i class="far fa-compass"></i>Full lifetime access
                                    </li>
                                
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection