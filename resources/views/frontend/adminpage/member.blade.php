@extends('frontend.adminpage.index')
@section('admin_content')
<link rel="stylesheet" href="{{asset('detaildonate(css)/managermember.css')}}">
<div class="container">
    <h1 style="font-weight: 700">Quản lý Bài Đăng</h1>
    <div class="row">
        <div class="col-lg-6">
            <div class="search">
                <div class="search-container">
                    <i class="fas fa-magnifying-glass search-icon"></i>
                    <input type="search" placeholder="Tìm Kiếm Tên Người Dùng" class="form-control input-search">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-table ">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Tên người dùng</td>
                            <td>Nội Dung</td>
                            <td>Ngày Đăng</td>
                            <td>Tác Vụ</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Phong</td>
                            <td>Đăng Bài Tìm Con Ve Sầu</td>
                            <td>20-5-2026</td>
                            <td><a href="#"><i class="fa-solid fa-check" style="color: #4CAF50"></i></a>
                                <a href="#"><span class="icon"><i class="fa-solid fa-x" style="color: #D32F2F;"></i></span></a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Phong</td>
                            <td>Đăng Bài Tìm Con Ve Sầu</td>
                            <td>20-5-2026</td>
                            <td><a href="#"><i class="fa-solid fa-check" style="color: #4CAF50"></i></a>
                                <a href="#"><span class="icon"><i class="fa-solid fa-x" style="color: #D32F2F;"></i></span></a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Phong</td>
                            <td>Đăng Bài Tìm Con Ve Sầu</td>
                            <td>20-5-2026</td>
                            <td><a href="#"><i class="fa-solid fa-check" style="color: #4CAF50"></i></a>
                                <a href="#"><span class="icon"><i class="fa-solid fa-x" style="color: #D32F2F;"></i></span></a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Phong</td>
                            <td>Đăng Bài Tìm Con Ve Sầu</td>
                            <td>20-5-2026</td>
                            <td><a href="#"><i class="fa-solid fa-check" style="color: #4CAF50"></i></a>
                                <a href="#"><span class="icon"><i class="fa-solid fa-x" style="color: #D32F2F;"></i></span></a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Phong</td>
                            <td>Đăng Bài Tìm Con Ve Sầu</td>
                            <td>20-5-2026</td>
                            <td><a href="#"><i class="fa-solid fa-check" style="color: #4CAF50"></i></a>
                                <a href="#"><span class="icon"><i class="fa-solid fa-x" style="color: #D32F2F;"></i></span></a></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Phong</td>
                            <td>Đăng Bài Tìm Con Ve Sầu</td>
                            <td>20-5-2026</td>
                            <td><a href="#"><i class="fa-solid fa-check" style="color: #4CAF50"></i></a>
                                <a href="#"><span class="icon"><i class="fa-solid fa-x" style="color: #D32F2F;"></i></span></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection