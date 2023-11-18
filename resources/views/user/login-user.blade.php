<x-navbar></x-navbar>
<x-layout>
    <div class="d-flex flex-row justify-content-center">
        <div class="col-md-4">
            <form action="" class="p-4 bg-white shadow-sm" method="POST" enctype="multipart/form-data">
                <h4 class="text-center">ورود</h4>
                <label for="">ایمیل</label>
                <input type="email" class="form-control bg-light border-0" name="email">
                <label for="">کلمه عبور</label>
                <input type="password" class="form-control bg-light border-0" name="password">
                <div class="d-flex flex-row justify-content-center">
                    <button class="btn btn-primary form-control mt-3">ورود</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
