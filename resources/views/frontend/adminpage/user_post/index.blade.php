@extends('frontend.adminpage.index')
@section('admin_content')
    <link rel="stylesheet" href="{{ asset('general/general.css') }}">

    <div class="container mt-3">
        <a class="btn btn-primary "href="{{ route('post-trash') }}">Unused Post</a>
        <h1>User Post</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>User</th>
                    <th>Status</th>
                    <th>Image</th>
                    <th>Detail</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                    <tr class="post-table">
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>
                            <a style="text-decoration: none; color:cornflowerblue"
                                href="{{ route('auth.profile') }}">{{ $post->user->name }}</a>
                        </td>
                        <td>
                            @if ($post->status == 1)
                                <span data-choduyet="{{ $post->id }}" class="post-choduyet" style="cursor: pointer"><span
                                        class="badge bg-warning rounded-pill">Pending</span></span>
                            @else
                                <span data-duyet="{{ $post->id }}" class="post-daduyet"><span
                                        class="badge bg-success rounded-pill">Approved</span></span>
                            @endif
                        </td>
                        <td>
                            @if ($post->images->count() > 0)
                                <img src="{{ asset($post->images[0]->image) }}" width="50%">
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('post.detail', $post->id) }}"
                                style="text-decoration: none; color:cornflowerblue">Details</a>
                        </td>
                        <td>
                            <button class="btn btn-danger delete-post" data-id="{{ $post->id }}"><i
                                    class="fa-solid fa-trash-can"></i></button>
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
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {

        $('.delete-post').click(function() {
            var postId = $(this).data('id');
            var postTable = $(this).closest('.post-table');

            var _csrf = '{{ csrf_token() }}';

            $.ajax({
                type: "POST",
                url: '{{ route('post.delete', ':id') }}'.replace(':id', postId),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    id: postId,
                    _token: _csrf
                },
                success: function(data) {

                    postTable.remove()
                },
                error: function(error) {
                    alert(error);
                }
            })
        })


        $('.post-choduyet').on('click', function() {
            var postId = $(this).data('choduyet');

            $.ajax({
                type: "GET",
                url: '{{ route('post.choduyet', ':id') }}'.replace(':id', postId),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    id: postId,
                },
                success: function(data) {
                    location.reload();
                },
                error: function(error) {
                    alert(error);
                }
            })

        })

        $('.post-daduyet').on('click', function() {
            var postId = $(this).data('duyet');

            $.ajax({
                type: "GET",
                url: '{{ route('post.duyet', ':id') }}'.replace(':id', postId),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    id: postId,
                },
                success: function(data) {
                    location.reload();
                },
                error: function(error) {
                    alert(error);
                }
            })

        })
    })
</script>
