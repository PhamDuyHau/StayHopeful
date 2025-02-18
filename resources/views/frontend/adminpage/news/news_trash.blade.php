@extends('frontend.adminpage.index')
@section('admin_content')
    <link rel="stylesheet" href="{{ asset('general/general.css') }}">

    <div class="container mt-3">
        <div style="margin-bottom: 20px">
            <a href="{{ route('news.index') }}"><i class="fas fa-long-arrow-alt-left"> Go Back</i></a>
        </div>

        <table class="table table-hover">
            <h1>Unused</h1>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($news as $new)
                    <tr class="project-table">
                        <td>{{ $new->id }}</td>
                        <td>{{ $new->title }}</td>
                        <td>{{ strip_tags($new->description) }}</td>

                        <td>
                            @if ($new->images->count() > 0)
                                <img src="{{ asset($new->images[0]->image) }}" width="100">
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-secondary" href="{{ route('news-untrash', $new->id) }}"><i
                                class="fa-solid fa-clock-rotate-left"></i></a>
                            <a class="btn btn-danger" href="{{ route('news-forcedelete', $new->id) }}"><i
                                class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" style="text-align:center">Empty</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
