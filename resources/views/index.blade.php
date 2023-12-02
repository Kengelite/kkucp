<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('public/css/index.css') }}">
    <link rel="stylesheet" href="/css/index.css">
    <!-- title of site -->
    <title>CP:Scholarsphere</title>

    <!-- For favicon png -->
    <link rel="shortcut icon" href="{{ asset('public/images/icons/CP_icon.png') }}">
    <link rel="shortcut icon" type="image/icon" href="/images/icons/CP_icon.png" />


</head>

<body>
    <header>
        <a href="#">
            <img src="{{ asset('public/images/icons/Computing_KKU.png') }} " alt="College of Computing" class="" width="20%">
        </a>
    </header>
    <div class="card">
        <a href="#">
            <div class="column">
                <img src="{{ asset('public/images/รูปindex/วิจัย.svg') }} " alt="Image 1">
                <h3>E-Project</h3>
                <p>ระบบฐานข้อมูลโครงงาน</p>
            </div>
        </a>

        <a href="{{ asset('/Scholarsphere') }}">
            <div class="column">
                <img src="{{ asset('public/images/รูปindex/วิจัย.svg') }} " alt="Image 3">
                <h3>ScholarSphere</h3>
                <p>ระบบฐานข้อมูลวิจัย</p>
            </div>
        </a>
        <a href="/Scholarsphere">
            <div class="column">
                <img src="{{ asset('public/images/รูปindex/วิจัย.svg') }} " alt="Image 3">
                <h3>ScholarSphere</h3>
                <p>ระบบฐานข้อมูลวิจัย</p>
            </div>
        </a>
        <div class="column">
            <img src="{{ asset('public/images/รูปindex/วิจัย.svg') }} " alt="Image 4">
            <h3>ScholarSphere</h3>
            <p>ระบบฐานข้อมูลวิจัย</p>
        </div>
    </div>

</body>

</html>