<x-navbar></x-navbar>
<x-layout>
<div class="d-flex flex-row justify-content-center">
    <div class="col-md-4">
        <form action="{{route('register')}}" class="p-4 bg-white shadow-sm" method="POST">
            @csrf
            <h4 class="text-center">عضویت</h4>
            <label for="" class="@error('firstname') text-danger @enderror">نام</label>
            <input type="text" class="form-control bg-light border-0 @error('firstname')is-invalid @enderror" name="firstname">
            @error('firstname')<p class="text-danger">{{$message}}</p> @enderror
            <label for="" class="@error('lastname') text-danger @enderror">نام خانوادگی</label>
            <input type="text" class="form-control bg-light border-0 @error('lastname')is-invalid @enderror" name="lastname">
            @error('lastname')<p class="text-danger">{{$message}}</p> @enderror
            <label for="" class="@error('email') text-danger @enderror">ایمیل</label>
            <input type="email" class="form-control bg-light border-0 @error('email')is-invalid @enderror" name="email">
            @error('email')<p class="text-danger">{{$message}}</p> @enderror
            <label for="" class="@error('password') text-danger @enderror">کلمه عبور</label>
            <input type="password" class="form-control bg-light border-0 @error('password')is-invalid @enderror" name="password">
            @error('password')<p class="text-danger">{{$message}}</p> @enderror
            <label for="" class="@error('password_confirmation') text-danger @enderror">تکرار کلمه عبور</label>
            <input type="password" class="form-control bg-light border-0 @error('password_confirmation')is-invalid @enderror" name="password_confirmation">
            @error('password_confirmation')<p class="text-danger">{{$message}}</p> @enderror
            <div class="d-flex flex-row justify-content-center">
                <button class="btn btn-primary form-control mt-3">ثبت نام</button>
            </div>
        </form>
    </div>
</div>
</x-layout>
