<x-navbar></x-navbar>
<x-layout>
    <div class="d-flex flex-row justify-content-center bg-white shadow-sm rounded">
        <div class="col-md-12 p-4">
            <h1>{{$post->title}}</h1>
            <p class="text-secondary">نوشته شده توسط شایان حسین پوریان در تاریخ 1402/08/15</p>
            <hr>
            {!! $post->body !!}
            <hr>
            <p>برچسب ها: </p>
            <a href="" class="btn btn-primary">asdasd</a>
        </div>
    </div>
</x-layout>
