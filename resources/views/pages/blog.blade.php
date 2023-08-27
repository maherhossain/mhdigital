@extends('layouts.template')

    @section('content')


    <!-- Breadcrumb Area Starts -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title">blog page</h2>
                    <a href="#">home</a><span> / blog page</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Area Starts -->
    <div class="blog-area padding-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                @foreach ($posts as $post)
                    <article class="cropium-blog-item">
                        <div class="blog-image">
                            <img src="{{$post->thumbnail}}" alt="{{$post->title}}">
                            <div class="blog-date">
                                <h5 class="title">14</h5>
                                <span>oct</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="#"><i class="fa fa-user-o"></i>john doe</a></li>
                                    <li><a href="#"><i class="fa fa-bookmark-o"></i>creative, portfolio</a></li>
                                </ul>
                            </div>
                            <h3 class="title"><a href="blog-details.html">{{$post->title}}</a></h3>
                            <p>{{$post->excerpt}}</p>
                        </div>
                    </article>
                @endforeach

                <!-- Blog Pagination Starts -->
                @include('components.pagination')

                </div>


                <!-- Blog Sidebar Starts -->
                @include('components.sidebar')
                
            </div>
            
        </div>
    </div>

@endsection