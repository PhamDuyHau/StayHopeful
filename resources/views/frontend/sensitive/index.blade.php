@extends('frontend.adminpage.index')
@section('admin_content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('feedbackcss/sensitive.css') }}">
    <link rel="stylesheet" href="{{ asset('general/general.css') }}">
    {{-- css --}}

    <div class="btn__back">
        <a href="{{ route('feedback.index') }}" class="btn__go_back"><i class="fa fa-long-arrow-left"> </i>GO BACK</a>
    </div>

    <div class="sensitive-detail">
        <h1>Sensitive Word List</h1>
        <div class="container mt-3">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Word</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sensitives as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->word }}</td>
                            <td>{{ $item->status ? 'Active' : 'Deactive' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="btn__container">
            <div class="btn_sensitive_create"><a href="{{ route('sensitive.create') }}" class="btn btn-primary">Add
                    sensitive
                    word</a></div>
        </div>
    </div>
@endsection