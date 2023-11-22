@extends('frontend.adminpage.index')
@section('admin_content')
    <link rel="stylesheet" href="{{ asset('detaildonate(css)/managerdesign.css') }}">


    <div class="container">
        <h1 style="font-weight: 700">Manager Design</h1>
        <div class="row d-flex justify-content-between mt-5 position-relative">
            <div class="col-lg-6">
                <div class="search">
                    <div class="search-container">
                        <i class="fas fa-magnifying-glass search-icon"></i>
                        <input type="search" placeholder="Search Category Name" class="form-control input-search">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="btnsearch position-absolute " style="right: 0;">
                    <button class="btn-search " data-bs-toggle="modal" data-bs-target="#exampleModal2"><i
                            class="fa-solid fa-plus"></i><span>Add New Image</span></button>
                </div>
            </div>
        </div>
        <div class="row row-rs">
            <div class="col-lg-12 mt-5">
                <div class="form-table ">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Catogries</td>
                                <td>Image</td>
                                <td>Name Image</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Home</td>
                                <td><img src="{{ asset('img/omg.jpeg') }}" width="100"
                                        onclick="openImagePopup('{{ asset('img/omg.jpeg') }}')"></td>
                                <td>Người Đẹp Ngủ Trong Rừng</td>
                                <td>
                                    <a href="#"><button type="button" class="btn btn-success" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            <i class="fa-regular fa-pen-to-square" style="color: #ffffff"></i>
                                        </button></a>
                                    <a href="#"><button class="btn btn-danger"><i class="fa-solid fa-x"
                                                style="color: #ffffff;"></i></button></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Home</td>
                                <td><img src="{{ asset('img/omg.jpeg') }}" width="100"
                                        onclick="openImagePopup('{{ asset('img/omg.jpeg') }}')"></td>
                                <td>Người Đẹp Ngủ Trong Rừng</td>
                                <td>
                                    <a href="#"><button type="button" class="btn btn-success" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            <i class="fa-regular fa-pen-to-square" style="color: #ffffff"></i>
                                        </button></a>
                                    <a href="#"><button class="btn btn-danger"><i class="fa-solid fa-x"
                                                style="color: #ffffff;"></i></button></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Home</td>
                                <td><img src="{{ asset('img/omg.jpeg') }}" width="100"
                                        onclick="openImagePopup('{{ asset('img/omg.jpeg') }}')"></td>
                                <td>Người Đẹp Ngủ Trong Rừng</td>
                                <td>
                                    <a href="#"><button type="button" class="btn btn-success" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            <i class="fa-regular fa-pen-to-square" style="color: #ffffff"></i>
                                        </button></a>
                                    <a href="#"><button class="btn btn-danger"><i class="fa-solid fa-x"
                                                style="color: #ffffff;"></i></button></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Home</td>
                                <td><img src="{{ asset('img/omg.jpeg') }}" width="100"
                                        onclick="openImagePopup('{{ asset('img/omg.jpeg') }}')"></td>
                                <td>Người Đẹp Ngủ Trong Rừng</td>
                                <td>
                                    <a href="#"><button type="button" class="btn btn-success" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            <i class="fa-regular fa-pen-to-square" style="color: #ffffff"></i>
                                        </button></a>
                                    <a href="#"><button class="btn btn-danger"><i class="fa-solid fa-x"
                                                style="color: #ffffff;"></i></button></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thay Đổi Slider</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="mb-3 mt-3">
                            <select class="form-select" aria-label="Default select example" name="catogries-change">
                                <option selected>Choose Category</option>
                                <option value="Home">Home</option>
                                <option value="Blog">Blog</option>
                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="image-change" class="form-label">Current Image:</label>
                            <img src="{{ asset('img/omg.jpeg') }}" width="100">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="image-change" class="form-label">Image:</label>
                            <input type="file" class="form-control" id="image-change" placeholder="Chọn Ảnh Mới"
                                name="image-change" onchange="previewImage()">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="image-preview">New Image Preview:</label>
                            <img id="image-preview" src="" width="100">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="name-image-change" class="form-label">Name Image:</label>
                            <input type="text" class="form-control" id="name-image-change"
                                placeholder="Enter New Image Name" name="name-image-change">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm Slider</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="mb-3 mt-3">
                            <select class="form-select" aria-label="Default select example" name="catogries-add">
                                <option selected>Choose Category</option>
                                <option value="Home">Home</option>
                                <option value="Blog">Blog</option>
                            </select>
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="image-add" class="form-label">Image:</label>
                            <input type="file" class="form-control" id="image-add" placeholder="Choose New Image"
                                name="image-add" onchange="previewImage()">
                        </div>
                        <div class="mb-3 mt-3">
                            <img id="image-preview" src="" width="100">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="name-image-add" class="form-label">Name Image:</label>
                            <input type="text" class="form-control" id="name-image-add"
                                placeholder="Enter Name Picture" name="name-image-add">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- them moi modal --}}
    <div class="modal" id="imageModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img id="modalImage" src="" class="img-fluid" alt="Image Preview">
                </div>
            </div>
        </div>
    </div>
    <script>
        function previewImage() {
            var input = document.getElementById('image-change');
            var preview = document.getElementById('image-preview');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                preview.src = '';
            }
        }
        
        function openImagePopup(imageSrc) {
            var modalImage = document.getElementById('modalImage');
            modalImage.src = imageSrc;

            $('#imageModal').modal('show');
        }
    </script>
@endsection
