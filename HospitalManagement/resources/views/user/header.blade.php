<div class="page-section">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>
        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
            @foreach($doctors as $doctor)
            <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img src="doctorImage/{{$doctor->doctor_image}}" alt="" class="img" height="300">
                        <div class="meta">
                            <a href="#"><span class="mai-call"></span></a>
                            <a href="#"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                    </div>
                    <div class="body">
                        <p class="text-xl mb-0">Dr. {{$doctor->doctor_name}}</p>
                        <span class="text-sm text-grey"> Phone {{$doctor->phone}}</span><br>
                        <span class="text-sm text-grey"> Room {{$doctor->doctor_room}}</span><br>
                        <span class="text-sm text-grey"> Detail {{$doctor->detail}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
