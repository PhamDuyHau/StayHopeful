@extends('frontend.adminpage.index')
@section('admin_content')
    <div class="container mt-3">
        <h2>List News</h2> 
        <a class="btn btn-primary "href="{{route('news-image-trash')}}" target="_blank">Trash Image</a>
        <a class="btn btn-primary "href="{{route('news.create')}}">Create News</a>
        <a class="btn btn-primary "href="{{route('news-trash')}}" target="_blank">Trash News</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($news as $new)
                    <tr class="news-table">
                        <td>{{$new->id}}</td>
                        <td>{{$new->title}}</td>
                        <td>{{strip_tags($new->description)}}</td>
                        <td>
                            @if($new->images->count() > 0)
                                <img src="{{asset($new->images[0]->image)}}" width="100">
                            @endif
                        </td>
                        <td>
                            <button class="btn btn-danger delete-news" data-id="{{$new->id}}">DELETE</button>
                            <a  class="btn btn-primary" href="{{route('news.edit', $new->id)}}">EDIT</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function(){
        $('.delete-news').click(function(){
            var newsId = $(this).data('id');
            var newsTable = $(this).closest('.news-table');
            
            var _csrf = '{{ csrf_token() }}';

            $.ajax({
                type: "POST",
                url: '{{ route('news.delete',':id')}}'.replace(':id',newsId),
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    id:newsId, 
                    _token:_csrf
                },
                success: function(data){
                    
                    newsTable.remove()
                },
                error: function(error) {
                    alert(error);
                }
            })
        })
    })
</script>