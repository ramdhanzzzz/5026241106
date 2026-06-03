<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('css/pertemuan4.css') }}">
</head>

<body>
    <div class="row">
        <div class="col-4">
            <div class="links">
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Contact</a>
            </div>
        </div>
        <div class="col-4 ">
            <h2 class="title">Landing</h2>
        </div>
        <div class="col-4 d-flex justify-content-center align-items-center">
            <button class="biru-btn-buy">Buy Now</button>
        </div>
    </div>
    <div class="background">
       <img src="{{ asset('img/designer_1.png') }}" class="bg-img">
        <div class="container-fluid">
            <div class="row teks">
                <div class="col-md-6">
                    <h1>Introduce Your Product Quickly & Effectively</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                        Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                        <br><br> mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla
                        consequat massa quis enim.
                    </p>
                    <button class="biru-btn">Purchase UI Kit</button>
                    <button class="learn-btn">Learn More</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
