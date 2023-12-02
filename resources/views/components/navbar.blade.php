<nav class="navbar navbar-expand-lg bg-blue shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">پِن شات</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="#">صفحه اصلی</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">وبلاگ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">درباره ما</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">تماس با ما</a>
                </li>
            </ul>
        </div>
        @if(auth()->check())
            <div class="dropdown">
                <button class="btn btn-primary text-white mx-4 py-2 px-3" data-bs-toggle="dropdown" aria-expanded="false"> <i class="fa-solid fa-user"></i> حساب کاربری <i class="fa-solid fa-caret-down"></i> </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('my-account')}}">حساب من</a></li>
                    <li><a class="dropdown-item" href="#">نوشته ها من</a></li>
                    <li><a class="dropdown-item text-danger" href="#">خروج</a></li>
                </ul>
            </div>

        @else
        <a class="nav-link mx-4 py-2 px-3 rounded register-navbar-button" href="{{route('register')}}">ثبت نام</a>
        @endif
    </div>
</nav>
