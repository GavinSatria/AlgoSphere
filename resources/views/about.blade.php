@extends('layouts.app')

@section('content')
    <style>

        section {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            color: #333;
        }

        p {
            line-height: 1.6;
            color: #555;
        }

        img {
            max-width: 100%;
            height: auto;
        }
    </style>
    <section>
        <h2>About Us</h2>
        <p>Welcome to AlgoSphere, your gateway to mastering basic computer science skills! We understand that starting your journey into the world of computer science can be both exciting and challenging, especially if you're new to the field. That's why we're here to guide you every step of the way.</p>
        
        <img src="your-image-url.jpg" alt="AlgoSphere Team">

        <p>At AlgoSphere, we have a passionate team of educators and industry professionals dedicated to making computer science accessible to everyone, regardless of their prior experience. Our courses are designed with the beginner in mind, focusing on hands-on learning and real-world applications.</p>

        <p>What sets us apart:</p>
        <ul>
            <li>Structured Curriculum: Our carefully crafted curriculum ensures a step-by-step learning experience.</li>
            <li>Interactive Learning: Engage with our interactive lessons and coding exercises to reinforce your understanding.</li>
            <li>Supportive Community: Join our community of learners, where you can connect with peers and instructors for support.</li>
        </ul>

        <p>Whether you're a high school student exploring computer science for the first time or an adult looking to acquire valuable skills, AlgoSphere is here to help you succeed in your journey.</p>
    </section>
@endsection