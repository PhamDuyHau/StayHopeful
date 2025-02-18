@extends('frontend.site')
@section('title', 'Donate List')
@section('main')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    {{-- icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- icon --}}
    {{-- ajax --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    {{-- ajax --}}
    <link rel="stylesheet" href="{{ asset('detaildonate(css)/listdonate.css') }}">
    @if (session('success'))
    <div class="container-error-notification showAlert">
        <div class="status-error">
            <div class="exit-alert-btn">
                <i class="fa-solid fa-xmark"></i>
            </div>
            <img class="img-alert" src="{{ asset('img/logo.svg') }}" alt="">
            <p>
                Sincerely appreciate your support in aiding and assisting others. Thank you &#128150;
            </p>
        </div>
    </div>
    @endif

    <div class="container-fluid" style="padding: 0;">
        <div class="row">
            <div class="col-lg-12">
                <div class="nav3 ">
                    <div class="input-group mb-3 setinput2">

                        <input type="text" class="form-control output" placeholder="Enter Name search"
                            aria-label="Username" aria-describedby="basic-addon1" id="search">
                    </div>
                    <div class="textnav3">
                        <h3>Donate List</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="tableform mt-4">
            <ul class="responsive-table">
                <li class="table-header">
                    <div class="col col-1">Name</div>
                    <div class="col col-2">Project</div>
                    <div class="col col-3">Amount</div>
                    <div class="col col-4">Date</div>
                </li>
                @foreach ($donateinfo as $user)
                    <li class="table-row">
                        <div class="col col-1" data-label="name">{{ $user->name }}</div>
                        <div class="col col-2" data-label="project">{{ $user->project->title }}</div>
                        <div class="col col-3" data-label="Amount"
                            style="color: #2ECC71; font-size: 20px; font-weight: 900">{{ $user->amount }}$</div>
                        <div class="col col-4" data-label="date">{{ $user->created_at }}</div>
                    </li>
                @endforeach


            </ul>
        </div>
    </div>
    <script src="{{ asset('js/listdonate.js') }}"></script>
    <script>
        var click = document.getElementById('click-exit');
        var click_ok = document.getElementById('click-exit-ok');
        var popup = document.querySelector('.pop-background'); // Fixed typo here
        click.addEventListener('click', function() {
            popup.classList.add('exit-none');
        });
        click_ok.addEventListener('click', function() {
            popup.classList.add('exit-none');
        });
    </script>
    </body>

    </html>
    @include('frontend/login/login')
    @include('frontend/profile/popup_profile')
@endsection()
