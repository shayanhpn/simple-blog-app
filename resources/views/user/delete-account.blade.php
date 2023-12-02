<x-navbar></x-navbar>
<x-layout>
    <div class="d-flex flex-row justify-content-center">
        <form action="{{route('delete-user',auth()->user()->id)}}" class="p-4 bg-white shadow-sm" method="POST">
            @csrf
            @method('DELETE')
            <h6>{{auth()->user()->firstname}} آیا مایل به حذف اکانت خود هستید؟</h6>
            <button type="submit" class="btn btn-danger">حذف</button>
            <button class="btn btn-warning">برگشت</button>
        </form>
    </div>
</x-layout>
