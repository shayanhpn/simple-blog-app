<x-navbar></x-navbar>
<x-layout>
<div class="d-flex flex-row justify-content-center">
    <div class="col-md-8">
        <form action="{{route('create-post')}}" class="p-4 bg-white shadow-sm" enctype="multipart/form-data" method="POST">
            @csrf
            @method('POST')
            <h2>ایجاد نوشته</h2>
            <hr>
            <label for="">عنوان</label>
            <input type="text" class="form-control bg-light" name="title">
            <label for="">متن</label>
            <textarea rows="10" type="text" class="form-control bg-light" name="body"></textarea>
            <div class="row mt-4">
                <div class="col-md-6">
                    <label for="">دسته بندی</label>
                    <input type="text" class="form-control bg-light" name="category">
                </div>
                <div class="col-md-6">
                    <label for="">برچسب ها</label>
                    <input type="text" class="form-control bg-light" name="tags">
                </div>
            </div>
            <div class="mt-3">
                <input type="text" class="form-control bg-light" name="post_image">
            </div>
            <div class="d-flex flex-row justify-content-center">
                <button type="submit" class="btn btn-primary Mt-4">ارسال نوشته</button>
            </div>
        </form>
    </div>
</div>
</x-layout>
