<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>@yield('title') - Pilketos OSMANUSGI</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- CSS --}}
    <style>
        .section {
            min-height: calc(100vh - 66px);
        }

    </style>
</head>
<body>
    @include('sweetalert::alert')

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center fw-bold" href="{{route('home.index')}}">
                <img src="{{asset('img/logo.png')}}" alt="" width="40" height="40" class="me-2 d-inline-block align-text-top">
                PILKETOS &nbsp;<span class="d-md-block d-none"> OSMANUSGI</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @if (Auth::check())
                    <li class="nav-item mx-2 my-1">
                        <a class="nav-link" href="#"><i class="fas fa-fw fa-home"></i> Dashboard</a>
                    </li>
                    <li class="nav-item mx-2 my-1">
                        <a class="btn btn-outline-danger w-100" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal"><i class="fas fa-fw fa-sign-out-alt"></i> Logout</a>

                    </li>
                    @else
                    <li class="nav-item mx-2 my-1">
                        <a class="btn btn-primary w-100" href="{{route('auth.showLogin')}}"><i class="fas fa-fw fa-sign-in-alt"></i> Login</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    {{-- End Navbar --}}
