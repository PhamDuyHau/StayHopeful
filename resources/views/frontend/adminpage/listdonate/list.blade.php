@extends('frontend.adminpage.index')
@section('admin_content')
    <link rel="stylesheet" href="{{ asset('admincss/listdonate.css') }}">
    <div class="container">
        <h1 style="font-weight: 700">List Donate</h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="search">
                    <div class="search-container">
                        <i class="fas fa-magnifying-glass search-icon"></i>
                        <input type="search" placeholder="Search User name" class="form-control input-search">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mt-5">
                <div class="form-table">
                    <table class="table table-striper">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Phone</td>
                                <td>Project</td>
                                <td>Method</td>
                                <td>Amount</td>
                                <td>Message <div class="question-container">
                                        <i class="fa-solid fa-question"></i>
                                        <div class="info-tooltip">
                                            Bấm vào message để hiện thỉ message
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($donateinfo as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->project_id }}</td>
                                    <td>{{ $item->method }}</td>
                                    <td>{{ $item->amount }}</td>
                                    <td class="clickmessage">{{ $item->message }}</td>

                                </tr>
                                <tr class="message-hide">
                                    <td colspan="8">{{ $item->message }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        var clickElements = document.querySelectorAll('.clickmessage');

        clickElements.forEach(function(click) {
            click.addEventListener('click', function() {
                var message = this.parentElement
                    .nextElementSibling;

                if (message) {
                    if (message.style.display === 'none' || message.style.display === '') {
                        message.style.display = 'table-row';
                        message.children[0].colSpan = 8;
                    } else {
                        message.style.display = 'none';
                        message.children[0].colSpan = 1;
                    }
                }
            });
        });
    </script>
@endsection