@extends('layouts.app')

@section('styles')
    <style type="text/css">
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 48px 0 0;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
        }

        @media (max-width: 767.98px) {
            .sidebar {
                top: 5rem;
            }
        }

        .sidebar-sticky {
            position: relative;
            top: 0;
            height: calc(100vh - 48px);
            padding-top: .5rem;
            overflow-x: hidden;
            overflow-y: auto;
        }

        .navbar-nav li {
            display: inline-block;
        }

        .scroll {
            white-space: nowrap;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
        
        .main-img {
        background: url('https://ak2.picdn.net/shutterstock/videos/9057502/thumb/12.jpg');
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
        width: 100%;
        }
    </style>
@endsection

@section('main-plain')
@endsection
