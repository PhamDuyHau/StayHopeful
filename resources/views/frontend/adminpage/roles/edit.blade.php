@extends('frontend.adminpage.index')
@section('admin_content')

    <div class="container mt-3">
        <h2>Add user</h2>
        <a class="btn btn-primary"href="{{route('roles.index')}}">Roles List</a>
        <form action="{{route('roles.update', $roles->id)}}" method="POST">
            @csrf
            <div class="mb-3 mt-3">
                <label for="name">Role:</label>
                <input type="text" class="form-control" placeholder="Enter role" name="name" value="{{$roles->name}}">
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label for="description">Description:</label>
                <textarea type="text" class="form-control" placeholder="Enter description" name="display_name">{{$roles->display_name}}</textarea>
                @error('description')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-lg-12">
                <input type="checkbox" class="checkall">
                CheckAll
            </div>
            <div class="col-lg-12">
                @foreach ($permissionsParent as $permissions)
                    <div class="card border-dark mb-3" style="max-width: 100%;">
                        <div class="card-header">
                            <label>
                                <input type="checkbox" class="checkbox_wrapper">
                            </label>
                            {{$permissions->name}}
                        </div>
                        <div class="row">
                            @foreach ($permissions->permissionsChildrent as $permissionsChildrent)
                                <div class="card-body text-dark col-md-3">
                                    <label>
                                        <input 
                                            class="checkbox_childrent" 
                                            name="permission_id[]" 
                                            type="checkbox" 
                                            value="{{$permissionsChildrent->id}}"
                                            {{$permissionsChecked->contains('id', $permissionsChildrent->id) ? 'checked' : ''}} 
                                            >
                                    </label>
                                    {{$permissionsChildrent->name}}
                                </div>
                                @endforeach
                        </div>
                    </div>
                @endforeach
                
            </div>

            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </form>
    </div>

@endsection
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        $('.checkbox_wrapper').on('click',function(){
            $(this).parents('.card').find('.checkbox_childrent').prop('checked',$(this).prop('checked'));
        })
    })
    $(document).ready(function() {
        $('.checkall').on('click',function(){
            $(this).parents().find('.checkbox_childrent').prop('checked',$(this).prop('checked'));
            $(this).parents().find('.checkbox_wrapper').prop('checked',$(this).prop('checked'));

        })
    })
</script>