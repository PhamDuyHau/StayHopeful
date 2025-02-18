@extends('frontend.adminpage.index')
@section('admin_content')
    <link rel="stylesheet" href="{{ asset('feedbackcss/sensitive.css') }}">
    <div class="container">
        <div class="row">
            <div class="container mt-3">
                <div style="margin-bottom: 20px">
                    <a class="btn btn-primary "href="{{ route('video-trash') }}">Unused Video</a>
                    @can('video_add')
                        <a class="btn btn-primary" href="{{ route('video-list.create') }}">Create New Video</a>
                    @endcan
                </div>

                <h1>Video List</h1>
                <table class="table table-striper">
                    <thead>
                        <tr>
                            <th>Video</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($videos as $video)
                            <tr class="video-table">
                                <td>
                                    <video id="" src="{{ asset($video->video) }}" controls width="200"
                                        height="100"></video>
                                </td>
                                <td>
                                    @can('video_edit')
                                        <a class="btn btn-warning" href="{{ route('video-list.edit', $video->id) }}"><i
                                                class="fa-regular fa-pen-to-square"></i></a>
                                    @endcan
                                    @can('video_delete')
                                        <button class="btn btn-danger delete-video" data-id="{{ $video->id }}"><i
                                                class="fa-solid fa-trash-can"></i></button>
                                    @endcan
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2" style="text-align:center">Empty</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function() {
        $('.delete-video').click(function() {
            var videoId = $(this).data('id');
            var videoTable = $(this).closest('.video-table');

            var _csrf = '{{ csrf_token() }}';

            $.ajax({
                type: "POST",
                url: '{{ route('video-list.delete', ':id') }}'.replace(':id', videoId),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    id: videoId,
                    _token: _csrf
                },
                success: function(data) {

                    videoTable.remove()
                },
                error: function(error) {
                    alert(error);
                }
            })
        })
    })
</script>
