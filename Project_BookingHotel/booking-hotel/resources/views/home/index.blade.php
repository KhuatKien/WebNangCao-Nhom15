{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('layouts.css') }}">
    <script src="https://kit.fontawesome.com/7b9d8c4ddc.js" crossorigin="anonymous"></script>
    <title>Home</title>
</head>

<body>
    <div id="header">
        <div class="logo">
            <a href="{{route('index')}}"><img src="{{ asset('assets/image/logo.png') }}" alt="logo"></a>
        </div>
        <div class="menu">
            <div class="list-menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">ROOM</a></li>
                    <li><a href="#">RESTAURANT</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </div>
        </div>
        <div class="login">
            <ul>
                @if(Auth::check())
                    <li><a href="#">Hello, {{ Auth::user()->name }}</a></li>
                    <li><a href="{{ route('logout') }}">LOGOUT</a></li>
                @else
                    <li><a href="{{ route('login') }}">LOGIN</a></li>
                    <li><a href="{{ route('register') }}">REGISTER</a></li>
                @endif
            </ul>
        </div>
    </div>

    <div class="content">
        
    </div>
    
    <div class="footer">
            <div class="footer-top">
                    <div class="footer-top-1">
                        <h4>About Hotel</h4>
                        <p>Welcome to the best five-star deluxe hotel in New York. Hotel elementum sesue the aucan vestibulum aliquam justo in sapien rutrum volutpat.</p>
                        <div class="custom-select">
                        <select>
                        <option   option value="en">English</option>
                        <option value="fr">Vietnamese</option>
                        <option value="es">Korea</option>
                        </select>
                        </div>
                    </div>
                <div class="footer-top-2">
                    <h4>Explore</h4>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">Room & Suites</a></li>
                        <li><a href="">Restaurant</a></li>
                        <li><a href="">Spa & Wellness</a></li>
                        <li><a href="">About Hotel</a></li>
                        <li><a href="">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-top-3">
                    <h4>Contact</h4>
                    <p class="footer-top-3-p1">
                        1616 Broadway NY, New York 10001
                        United States of America
                    </p>
                    <p class="footer-top-3-p2">
                    <i class="fa-solid fa-phone"></i>
                        855 100 4444
                    </p> 
                    <p class="footer-top-3-p3">
                        info@luxuryhotel.com
                    </p>  
                    <div class="footer-icon">
                            <div class="footer-icon-1">
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                            <div class="footer-icon-2">
                                <i class="fa-brands fa-twitter"></i>
                            </div>
                            <div class="footer-icon-3">
                                <i class="fa-brands fa-youtube"></i>
                            </div>
                            <div class="footer-icon-3">
                                <i class="fa-brands fa-facebook"></i>
                            </div>
                            <div class="footer-icon-3">
                                <i class="fa-brands fa-pinterest-p"></i>
                            </div>
                        </div> 
                </div>
            </div>
            <div class="footer-bottom">
                <div class="footer-bottom-content">
                    <p>© Copyright 2022 by DuruThemes.com</p>
                </div>
            </div>
        </div>

    
</body>

</html> --}}

@extends('layouts.app')

@section('content')
    <h1>This is index page</h1>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.room-card');
    
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        });
    
        cards.forEach(card => {
            observer.observe(card);
        });
    });
</script>