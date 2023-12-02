<x-navbar></x-navbar>
<x-layout>
<div class="row">
<div class="col-md-3">
    <div class="card p-2 shadow-sm">
        <div class="card-body">
            <h5 class="card-title text-center fw-bold">حساب کاربری</h5>
            <div class="d-flex flex-row justify-content-center">
                <img src="{{asset('images/default-avatar.png')}}" alt="" class="my-2" width="150px">
            </div>
            <h6 class="text-secondary">نام: <span>{{auth()->user()->firstname}}</span></h6>
            <h6 class="text-secondary">نام خانوادگی: <span>{{auth()->user()->lastname}}</span></h6>
            <h6 class="text-secondary">تاریخ عضویت: <span>{{auth()->user()->created_at}}</span></h6>
            <hr>
                <a type="button" href="{{route('edit-profile',auth()->user()->id)}}" class="btn btn-primary w-100">ویرایش اطلاعات</a>
                <a type="button" href="{{route('show.delete-user',auth()->user()->id)}}" class="btn btn-danger w-100 mt-3">حذف حساب کاربری</a>
        </div>
    </div>
</div>
    <div class="col-md-9">
        <div class="d-flex flex-row justify-content-around">
            <div class="card p-2 text-bg-white mb-3 rounded-3 shadow-sm" >
                <div class="card-body">
                    <h5 class="card-title">نوشته های من</h5>
                    <p class="card-text text-secondary">تعداد کل نوشته های منتشر شده توسط شما</p>
                    <h4>+50</h4>
                </div>
            </div>
            <div class="card p-2 text-bg-white mb-3 rounded-3 shadow-sm" >
                <div class="card-body">
                    <h5 class="card-title">نظرات من</h5>
                    <p class="card-text text-secondary">تعداد کل نظرات منتشر شده توسط شما</p>
                    <h4>+50</h4>
                </div>
            </div>
        </div>
        <div class="card p-2 shadow-sm">
            <div class="card-body">
                <h5 class="card-title text-center fw-bold">تنظیمات حساب کاربری</h5>
                <hr>
                <a href="#">شما با نام {{auth()->user()->firstname}} وارد شده اید، آیا میخواهید خارج شوید؟</a>
            </div>
        </div>
    </div>

</div>
</x-layout>
