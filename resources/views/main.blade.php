<x-navbar></x-navbar>
<x-layout>
    <div class="row">
        <div class="col-md-4">
            <x-sidebar></x-sidebar>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="card mx-4 shadow-sm p-0" style="width: 18rem;">
                    <div><img src="{{asset('images/1.png')}}" class="img-fluid" alt="..."></div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">پست اول</h5>
                        <p class="card-text text-secondary">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                        <hr>
                        <a href="#" class="">ادامه مطلب...</a>
                    </div>
                </div>
                <div class="card shadow-sm p-0" style="width: 18rem;">
                    <img src="{{asset('images/1.png')}}" class="img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">پست دوم</h5>
                        <p class="card-text text-secondary">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                        <hr>
                        <a href="#" class="">ادامه مطلب...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
