<x-navbar></x-navbar>
<x-layout>
<div class="d-flex flex-row justify-content-center">
    <div class="col-md-4">
        <form action="{{route('edit-user',auth()->user()->id)}}" class="p-4 bg-white rounded shadow-sm" method="POST">
            @csrf
            @method('PUT')
            <h4 class="text-center">ویرایش اطلاعات</h4>
            <div class="row">
                <label for="">نام</label>
                <input type="text" class="form-control bg-light border-0" value="{{$user->firstname}}" name="firstname">
                <label for="">نام خانوادگی</label>
                <input type="text" class="form-control bg-light border-0" value="{{$user->lastname}}" name="lastname">
                <label for="">ایمیل</label>
                <input type="email" class="form-control bg-light border-0 text-secondary" value="{{$user->email}}" name="email" disabled>
                <button type="submit" class="btn btn-primary mt-3">ویرایش اطلاعات</button>
            </div>
        </form>
    </div>
</div>
</x-layout>
