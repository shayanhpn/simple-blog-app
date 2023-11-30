<x-navbar></x-navbar>
<x-layout>
<div class="d-flex flex-row justify-content-center">
    <div class="col-md-4">
        <form action="" class="p-4 bg-white rounded shadow-sm" method="POST">
            @csrf
            <h4 class="text-center">ویرایش اطلاعات</h4>
            <div class="row">
                <label for="">نام</label>
                <input type="text" class="form-control bg-light border-0" value="{{$user->firstname}}">
                <label for="">نام خانوادگی</label>
                <input type="text" class="form-control bg-light border-0" value="{{$user->lastname}}">
                <label for="">ایمیل</label>
                <input type="email" class="form-control bg-light border-0" value="{{$user->email}}">
                <label for="">رمز عبور فعلی</label>
                <input type="password" class="form-control bg-light border-0">
                <label for="">رمز عبور جدید</label>
                <input type="password" class="form-control bg-light border-0">
                <button type="submit" class="btn btn-primary mt-3">ویرایش اطلاعات</button>
            </div>
        </form>
    </div>
</div>
</x-layout>
