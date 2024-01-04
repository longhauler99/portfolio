@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center text-center">
            <div class="col hero-text">
                <h1 class="fw-bold" style="font-size: 55px">Designer, Developer & DevOps Engineer</h1>
                <h3 class="mb-2" style="color: aquamarine">I design and code beautifully simple things, and I love what I do.</h3>
                <div class="pt-4">
                    <img src="{{ url('/images/5042601.png') }}" class="img-fluid" alt="" style="width: 160px; border-radius: 80px">
                </div>
            </div>
        </div>
        <div class="row justify-content-center text-center" style="margin-top: 750px">
            <div class="col">
                <h1 class="pb-3">Hi, I'm Saina. Nice to meet you.</h1>
                <p class="fs-5 lh-lg">
                    A seasoned professional at the convergence of web development and DevOps engineering. I specialize in crafting seamless digital experiences while ensuring the underlying infrastructure operates at peak efficiency.
                    In the realm of web development, my toolkit includes HTML, CSS, JavaScript, PHP, Laravel, and MySQL. From architecting responsive interfaces to building robust backend solutions, I am committed to delivering user-centric experiences.
                    Complementing my web development expertise is a strong foundation in DevOps. I excel in orchestrating automated deployments, optimizing infrastructure, and implementing best practices for efficiency and scalability.
                    As you delve into my portfolio, you'll find a harmonious blend of web development finesse and DevOps acumen. I'm eager to contribute to projects that demand a holistic approach to technology and creativity.
                </p>
                <p class="fs-5">
                    Let's embark on a journey of innovation together!
                </p>
            </div>
        </div>
        <div class="row justify-content-center text-center mt-5">
            <h1>Projects</h1>
            <div class="col">
                <div class="card text-bg-dark" style="width: 15rem;">
                    <img src="{{ url('/images/5042601.png') }}" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
