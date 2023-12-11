@extends('frontend.adminpage.index')
@section('admin_content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('feedbackcss/sensitive.css') }}">

    <h1 class="fb-detail-title">Volunteer Detail List</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Finding Source</th>
                <th>Enrolled</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Description</th>
                <th>Relative Name</th>
                <th>Relative Phone</th>
                <th>Relative Relationship</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($volunteers as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->finding_source }}</td>
                    <td>{{ $item->enrolled }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->volunteer_description }}</td>
                    <td>{{ $item->rel_name }}</td>
                    <td>{{ $item->rel_phone }}</td>
                    <td>{{ $item->rel_relationship }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
