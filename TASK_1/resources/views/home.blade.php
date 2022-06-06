@extends('layouts.app')

@section('title')
<title>Home</title>
@endsection

@section('content')

    <div class="bg-light">
        <div class="container px-4 py-5" id="featured-3">
            <h2 class="pb-2 border-bottom">We are Zero Gravity, We are Awesome</h2>
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="feature col">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center bg-primary bg-gradient text-white fs-2 mb-3">
                        <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"></use></svg>
                    </div>
                    <h2>Music</h2>

                    <p>
                        We distribute and aggregate content in different formats to reach billions of consumers globally. Our multi-platform approach allows us to create multiple consumer touchpoints across different ecosystems and target wider audience segments
                    </p>

                </div>
                <div class="feature col">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center bg-primary bg-gradient text-white fs-2 mb-3">
                        <svg class="bi" width="1em" height="1em"><use xlink:href="#people-circle"></use></svg>
                    </div>
                    <h2>Games</h2>
                    <p>Our ability to create gaming technology and content solutions, integrate content with existing apps or package it to meet different requirements, allows us to develop and manage digital entertainment services for different ecosystems</p>

                </div>
                <div class="feature col">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center bg-primary bg-gradient text-white fs-2 mb-3">
                        <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"></use></svg>
                    </div>
                    <h2>Content Creation</h2>
                    <p>Content is king and the force behind digital marketing. We ensure you to reach your target audience, branding, promotion, engage with them, and build long term relationships that translate to business benefits.</p>

                </div>
            </div>
        </div>
    </div>
@endsection
