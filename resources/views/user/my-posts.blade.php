<x-navbar></x-navbar>
<x-layout>
    <div class="table-responsive">
    <table class="table table-bordered table-hover shadow-sm ">
    <thead>
        <tr>
            <th>#</th>
            <th class="text-center">تصویر شاخص</th>
            <th class="text-center">عنوان</th>
            <th class="text-center">محتوا</th>
            <th class="text-center">دسته بندی</th>
            <th class="text-center">وضعیت</th>
            <th class="text-center">تاریخ ایجاد</th>
            <th class="text-center">عمکرد</th>
        </tr>
    </thead>
    <tbody>
    @forelse($posts as $post)
        <tr>
            <td>1</td>
            <td>عکس اول</td>
            <td>{{$post->title}}</td>
            <td>محتوا اول</td>
            <td>دسته بندی 1</td>
            <td>منتشر شده</td>
            <td>1402/09/16</td>
            <td class="text-center">
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="نمایش" class="btn btn-primary"><i class="fa-solid fa-image"></i></a>
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"  data-bs-title="ویرایش" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="حذف" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
            </td>
        </tr>
        @empty
            <tr>
                <td colspan="9"><b>هیچ داده ای برای نمایش وجود ندارد</b></td>
            </tr>
    @endforelse
    </tbody>
    </table>
    </div>
</x-layout>
