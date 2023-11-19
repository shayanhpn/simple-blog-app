<x-navbar></x-navbar>
<x-layout>
    <div class="d-flex flex-row justify-content-center">
        <div class="col-md-4">
            <form action="{{route('login')}}" class="p-4 bg-white shadow-sm" method="POST">
                @csrf
                <h4 class="text-center">ورود</h4>
                <label for="" class="@error('login_email') text-danger @enderror">ایمیل</label>
                <input type="email" class="form-control bg-light border-0 @error('login_email') is-invalid @enderror" name="login_email">
                @error('login_email') <p class="text-danger">{{$message}}</p> @enderror
                <label for="" class="@error('login_password') text-danger @enderror">کلمه عبور</label>
                <input type="password" class="form-control bg-light border-0 @error('login_email') is-invalid @enderror" name="login_password">
                @error('login_password') <p class="text-danger">{{$message}}</p> @enderror
                <div class="d-flex flex-row justify-content-center">
                    <button class="btn btn-primary form-control mt-3">ورود</button>
                </div>
                <hr>
                <a href=""><i class="fa-solid fa-key"></i> کلمه عبور خود را فراموش کرده اید؟</a>
            </form>
        </div>
    </div>
</x-layout>
