<?php

use App\Http\Controllers\AboutusController;
use App\Http\Controllers\AboutusteamController;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\AdminPermissionsController;
use App\Http\Controllers\AdminRoleController;
use App\Http\Controllers\AuthloginController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CommentPostController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\detaildonateController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\NewsController;

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\VideoController;use App\Http\Controllers\SensitiveController;
use App\Http\Controllers\UserAdminController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\VolunteerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// home


//frontend

Route::get('/', [AdminPageController::class, 'sliderview'])->name('/');
//donatedetail

Route::get('/donate', [detaildonateController::class, 'index'])->name('detail.donate');
// Route::post('/donate', [detaildonateController::class, 'thanhtoan'])->name('detail.thanhtoan');

Route::post('/donate', [detaildonateController::class, 'payment'])->name('detail.payment');
Route::get('/donate/success', [detaildonateController::class, 'paymentsuccess'])->name('detail.paymentsuccess');

//listdonate
Route::get('/listdonate', [detaildonateController::class, 'viewlistdonate'])->name('detail.listdonate');

//login
Route::get('/logout', [AuthloginController::class, 'logout'])->name('logout');
Route::post('/login', [AuthloginController::class, 'login'])->name('auth.login');
Route::post('/register', [AuthloginController::class, 'register'])->name('auth.register');
Route::get('/login/google', [AuthloginController::class, 'redirectgoogle'])->name('auth.google');
Route::get('/auth/google/callback', [AuthloginController::class, 'handleGoogleback'])->name('auth.googlecallback');
Route::get('/login/facebook', [AuthloginController::class, 'redirectfacebook'])->name('auth.facebook');
Route::get('/auth/facebook/callback', [AuthloginController::class, 'handlefacebookleback'])->name('auth.facebookcallback');
//verify_email
// Route::get('/verify_email', [AuthloginController::class, 'abc'])->name('verify.email');
Route::get('/verified/{verify_token}', [AuthloginController::class, 'verified_email'])->name('auth.verified_email');
//profile
Route::get('/profile/css', [AuthloginController::class, 'profilePopupView'])->name('auth.profilecss');

Route::get('/profile', [AuthloginController::class, 'viewprofile'])->name('auth.profile');
Route::get('/post-edit/{id}', [AuthloginController::class, 'post_edit'])->name('post.edit');
Route::post('/post-edit/{id}', [AuthloginController::class, 'post_edit'])->name('post.edit.form');
// user middleware close


//blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/blog_finished', [BlogController::class, 'blog_finished'])->name('blog.blog_finished');
Route::get('/blog/blog_detail', [BlogController::class, 'blog_detail'])->name('blog.blog_detail');
Route::get('/news-detail/{id}', [BlogController::class, 'news_detail'])->name('news-detail');



//detail-page
Route::get('/detail/{id}', [BlogController::class, 'viewdetail'])->name('detail.post');

// Contact
Route::get('/contact',[ContactusController::class,'index'])->name('contact.index');
// Contact
Route::get('/contact', [ContactusController::class, 'index'])->name('contact.index');


// Aboutus
Route::get('/aboutus',[AboutusController::class,'index'])->name('aboutus.index');

Route::get('/aboutus/whoweare', [AboutUsController::class, 'whoweare'])->name('aboutus.whoweare');

Route::get('/aboutus/whoweare/johndoe', [AboutUsController::class, 'johndoe'])->name('aboutus.johndoe');

Route::get('/aboutus/whoweare/janesmith', [AboutUsController::class, 'janesmith'])->name('aboutus.janesmith');

Route::get('/aboutus/whoweare/robertjohnson', [AboutUsController::class, 'robertjohnson'])->name('aboutus.robertjohnson');

Route::get('/aboutus/whoweare/kaigreene', [AboutUsController::class, 'kaigreene'])->name('aboutus.kaigreene');

Route::get('/aboutus/whoweare/oliverhudson', [AboutUsController::class, 'oliverhudson'])->name('aboutus.oliverhudson');

// About Us Team
Route::get('/aboutusteam', [AboutusteamController::class, 'aboutus_team_index'])->name('aboutusteam.index');

Route::get('/aboutusteam/create', [AboutusTeamController::class, 'aboutus_team_create'])->name('aboutusteam.create');

Route::post('/aboutusteam/create', [AboutusTeamController::class, 'aboutus_team_store'])->name('aboutusteam.store');

Route::get('/aboutusteam/edit/{aboutusteam}', [AboutusTeamController::class, "aboutus_team_edit"])->name("aboutusteam.edit_aboutus");

Route::put('/aboutusteam/edit/{aboutusteam}', [AboutusTeamController::class, 'aboutus_team_update'])->name('aboutusteam.update');

Route::delete('/aboutusteam/delete/{aboutusteam}', [AboutusteamController::class, "aboutus_team_delete"])->name("aboutusteam.delete");

Route::get('/aboutusteam/{id}', [AboutusteamController::class, 'aboutus_team_detail'])->name('aboutusteam.detail');

Route::get('/aboutus/whoweare/{id}', [AboutUsController::class, 'showTeamMemberDetail'])->name('aboutus.whoweare.detail');

//feedback
Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');
Route::get('/feedback/create', [FeedbackController::class, 'create'])->name('feedback.create');
Route::post('/feedback/create', [FeedbackController::class, 'store'])->name('feedback.store');
Route::get('/feedback/detail/{id}', [FeedbackController::class, 'detail'])->name('feedback.detail');

//sensitive
Route::get('/sensitive', [SensitiveController::class, 'index'])->name('sensitive.index');
Route::get('/sensitive/create', [SensitiveController::class, 'create'])->name('sensitive.create');
Route::post('/sensitive/create', [SensitiveController::class, 'store'])->name('sensitive.store');

//volunteer form
Route::get('/volunteer', [VolunteerController::class, 'index'])->name('volunteer.index');
Route::get('/volunteer/create', [VolunteerController::class, 'create'])->name('volunteer.create');
Route::post('/volunteer/create', [VolunteerController::class, 'store'])->name('volunteer.store');


// project
Route::get('/project/{id}', [BlogController::class, 'project'])->name('project.post');
Route::get('/project-all', [BlogController::class, 'project_index'])->name('project.index');

// video page
Route::get('/video', [BlogController::class, 'video'])->name('video.index');

//comment
Route::post('/comment/{id}', [CommentController::class, 'comment'])->name('comment.index');





//admin
Route::group(['prefix' => 'admin/'], function () {
    // Route::get('/', [AdminPageController::class, 'viewsidebar'])->name('admin.index');
    Route::get('/', [AdminPageController::class, 'viewdashboard'])->name('admin.dashboard');
    Route::get('managerpost', [AdminPageController::class, 'viewmanagerpost'])->name('admin.managerpost');

    Route::get('managerdesign', [AdminPageController::class, 'viewmanagerdesign'])->name('admin.managerdesign')->middleware('can:slider_list');
    Route::post('managerdesign', [AdminPageController::class, 'create_slider'])->name('admin.create_slider')->middleware('can:slider_add');
    Route::put('managerdesign/{slider}', [AdminPageController::class, 'update_slider'])->name('admin.update_slider')->middleware('can:slider_add');
    Route::get('managerdesign/{id}', [AdminPageController::class, 'getSliderImage'])->name('get.slider.image');
    Route::delete('managerdesign/{slider}', [AdminPageController::class, 'delete_slider'])->name('admin.delete_slider')->middleware('can:slider_delete');

    Route::get('listuser', [AdminPageController::class, 'viewlistuser'])->name('admin.listuser');
    Route::post('listuser', [AdminPageController::class, 'registeruser'])->name('admin.registeruser');
    Route::put('listuser/{id}', [AdminPageController::class, 'updateuser'])->name('admin.updateuser');
    Route::get('listuser/{id}', [AdminPageController::class, 'deleteuser'])->name('admin.deleteuser');
    Route::get('updateuser/{id}', [AdminPageController::class, 'getiduser'])->name('admin.getiduser');
    Route::get('updateuser/{id}/banned', [AdminPageController::class, 'banned'])->name('admin.banneduser');
    Route::get('updateuser/{id}/active', [AdminPageController::class, 'active'])->name('admin.activeuser');
    Route::get('listdonate', [AdminPageController::class, 'viewlistdonate'])->name('admin.listdonate');
    Route::get('/getuserdonate', [AdminPageController::class, 'getdonateuser'])->name('detail.getuserdonate');
    Route::get('/totaldonate', [AdminPageController::class, 'GetTotalAmount'])->name('detail.GetTotalAmount');
    Route::get('/searchdashboard', [AdminPageController::class, 'searchdashboard'])->name('admin.searchdashboard');
    Route::get('/searchdesign', [AdminPageController::class, 'searchdesign'])->name('admin.searchdesign');
    Route::get('/searchlistuser', [AdminPageController::class, 'searchlistuser'])->name('admin.searchlistuser');
    Route::get('/searchlistdonate', [AdminPageController::class, 'searchlistdonate'])->name('admin.searchlistdonate');
    

});


//

//caregory Admin page
Route::group(['prefix' => 'category/'], function () {
    Route::get('index', [CategoryController::class, 'index'])->name('category.index')->middleware('can:category_list');

    Route::get('create', [CategoryController::class, 'create'])->name('category.create')->middleware('can:category_add');

    Route::post('store', [CategoryController::class, 'store'])->name('category.store');

    Route::post('delete/{id}', [CategoryController::class, 'delete'])->name('category.delete')->middleware('can:category_delete');

    Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('category.edit')->middleware('can:category_edit');

    Route::put('update/{id}', [CategoryController::class, 'update'])->name('category.update');
});

//project admin page
Route::group(['prefix' => 'project-post/'], function () {
    Route::get('index', [ProjectController::class, 'index'])->name('projectAd.index')->middleware('can:project_list');

    Route::get('create', [ProjectController::class, 'create'])->name('projectAd.create')->middleware('can:project_add');

    Route::post('store', [ProjectController::class, 'store'])->name('projectAd.store');

    Route::post('delete/{id}', [ProjectController::class, 'delete'])->name('projectAd.delete')->middleware('can:project_delete');

    Route::get('edit/{id}', [ProjectController::class, 'edit'])->name('projectAd.edit')->middleware('can:project_edit');

    Route::get('editimage/{id}', [ProjectController::class, 'deleteImgChild'])->name('delete_ImgChild');

    Route::put('update/{id}', [ProjectController::class, 'update'])->name('projectAd.update');

    // trash - softDelete - ProjectImage
    Route::get('image-trash', [ProjectController::class, 'trash_image'])->name('projectAd-image');
    Route::get('image-untrash/{id}', [ProjectController::class, 'untrash_image'])->name('projectAd-untrash');
    Route::get('projectAd-forcedelete/{id}', [ProjectController::class, 'projectAd_forcedelete'])->name('projectAd-forcedelete');

    // trash - softDelete - Project
    Route::get('project-trash', [ProjectController::class, 'project_trash'])->name('project-trash');
    Route::get('project_untrash/{id}', [ProjectController::class, 'project_untrash'])->name('project-untrash');
    Route::get('project-forcedelete/{id}', [ProjectController::class, 'project_forcedelete'])->name('project-forcedelete');

    //project status

    Route::get('project-finish/{id}', [ProjectController::class, 'finish_status'])->name('projectAd.finish');
    Route::get('project-unfinish/{id}', [ProjectController::class, 'unfinish_status'])->name('projectAd.unfinish');
});

// blog - news
Route::group(['prefix' => 'news/'], function () {
    Route::get('index', [NewsController::class, 'index'])->name('news.index')->middleware('can:news_list');

    Route::get('create', [NewsController::class, 'create'])->name('news.create')->middleware('can:news_add');

    Route::post('store', [NewsController::class, 'store'])->name('news.store');

    Route::post('delete/{id}', [NewsController::class, 'delete'])->name('news.delete')->middleware('can:news_delete');

    Route::get('edit/{id}', [NewsController::class, 'edit'])->name('news.edit')->middleware('can:news_edit');

    Route::put('update/{id}', [NewsController::class, 'update'])->name('news.update');

    // delete imageChild
    Route::get('edit-news-image/{id}', [NewsController::class, 'deleteImgChild'])->name('delete_newsImgChild');

    // trash - softDelete - newsImage
    Route::get('news-image-trash', [NewsController::class, 'trash_image'])->name('news-image-trash');
    Route::get('news-image-untrash/{id}', [NewsController::class, 'untrash_image'])->name('news-image-untrash');
    Route::get('news-image-forcedelete/{id}', [NewsController::class, 'news_image_forcedelete'])->name('news-image-forcedelete');

    // trash - softDelete - Project
    Route::get('news-trash', [NewsController::class, 'news_trash'])->name('news-trash');
    Route::get('news_untrash/{id}', [NewsController::class, 'news_untrash'])->name('news-untrash');
    Route::get('news-forcedelete/{id}', [NewsController::class, 'news_forcedelete'])->name('news-forcedelete');

    // news-detail
    // Route::get('/news-detail/{id}', [NewsController::class, 'news_detail'])->name('news-detail');
});

// video-adminpage
Route::group(['prefix'=> 'video-list/'], function(){
    Route::get('index',[VideoController::class,'index'])->name('video-list.index')->middleware('can:video_list');

    Route::get('create',[VideoController::class,'create'])->name('video-list.create')->middleware('can:video_add');

    Route::post('store',[VideoController::class,'store'])->name('video-list.store');

    Route::get('edit/{id}',[VideoController::class,'edit'])->name('video-list.edit')->middleware('can:video_edit');

    Route::put('update/{id}',[VideoController::class,'update'])->name('video-list.update');

    Route::post('delete/{id}',[VideoController::class,'delete'])->name('video-list.delete')->middleware('can:video_delete');

    //softDelete
    Route::get('video-trash',[VideoController::class,'video_trash'])->name('video-trash');
    Route::get('video_untrash/{id}',[VideoController::class,'video_untrash'])->name('video-untrash');
    Route::get('video-forcedelete/{id}',[VideoController::class,'video_forcedelete'])->name('video-forcedelete');

});


//user-post

Route::group(['prefix'=> 'post/'], function(){
    Route::get('index',[UserPostController::class,'index'])->name('post.index');

    Route::post('store',[UserPostController::class,'store'])->name('post.store');

    Route::post('dalete/{id}',[UserPostController::class,'delete'])->name('post.delete');

    Route::get('detail/{id}',[UserPostController::class,'detail_post'])->name('post.detail');

    //show-post(web)
    Route::get('post-detail',[UserPostController::class,'show_post_home'])->name('post.detail.web');

    // Route::put('update/{id}',[VideoController::class,'update'])->name('video-list.update');

    Route::get('post-cho-duyet/{id}',[UserPostController::class,'choduyet'])->name('post.choduyet');
    Route::get('post-da-duyet/{id}',[UserPostController::class,'daduyet'])->name('post.duyet');

    // //softDelete
    Route::get('post-trash',[UserPostController::class,'post_trash'])->name('post-trash');
    Route::get('post_untrash/{id}',[UserPostController::class,'post_untrash'])->name('post-untrash');
    Route::get('post-forcedelete/{id}',[UserPostController::class,'post_forcedelete'])->name('post-forcedelete');

});

//edit-post(user)
Route::get('/post/delete_image/{id}',[UserPostController::class,'delete_post_image'])->name('delete.post_image');
Route::get('/post/delete_post/{id}',[UserPostController::class,'delete_post_user'])->name('delete.post_user');
Route::put('/post/edit',[UserPostController::class,'edit_post'])->name('edit.post');

// comment post-user
Route::post('/post/comment/{id}',[CommentPostController::class,'post_comment'])->name('post.comment');
// Route::get('/post/comment/{id}',[CommentPostController::class,'get_comment'])->name('get.comment');


//ds nv

Route::group(['prefix'=> 'staff/'], function(){
    Route::get('index',[UserAdminController::class,'index'])->name('staff.index')->middleware('can:user_list');
    Route::get('create',[UserAdminController::class,'create'])->name('staff.create')->middleware('can:user_add');
    Route::post('store',[UserAdminController::class,'store'])->name('staff.store');
    Route::get('edit/{id}',[UserAdminController::class,'edit'])->name('staff.edit')->middleware('can:user_edit');
    Route::post('update/{id}',[UserAdminController::class,'update'])->name('staff.update');
    Route::get('delete/{id}',[UserAdminController::class,'delete'])->name('staff.delete')->middleware('can:user_delete');
});
//roles
Route::group(['prefix'=> 'roles/'], function(){
    Route::get('index',[AdminRoleController::class,'index'])->name('roles.index')->middleware('can:roles_list');
    Route::get('create',[AdminRoleController::class,'create'])->name('roles.create')->middleware('can:roles_add');
    Route::post('store',[AdminRoleController::class,'store'])->name('roles.store');
    Route::get('edit/{id}',[AdminRoleController::class,'edit'])->name('roles.edit')->middleware('can:roles_edit');
    Route::post('update/{id}',[AdminRoleController::class,'update'])->name('roles.update');
    Route::get('delete/{id}',[AdminRoleController::class,'delete'])->name('roles.delete')->middleware('can:roles_delete'); 
});
Route::group(['prefix'=> 'permissions/'], function(){
    Route::get('create',[AdminPermissionsController::class,'create'])->name('permissions.create')->middleware('can:permissions_add');
    Route::post('store',[AdminPermissionsController::class,'store'])->name('roles.store');
});
