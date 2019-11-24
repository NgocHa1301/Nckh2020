<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\TuyenSinh;
use App\TinTuc;
use App\TheLoai;
Route::get('/trang-chu', 'HomeController@index');
Route::get('/kien', function(){
	$tintuc = TinTuc::all();
	foreach($tintuc as $chitiet){

        echo $chitiet->LoaiTin->Ten . $chitiet->LoaiTin->TheLoai->Ten ;
        // echo $chitiet->LoaiTin->Ten ;
	}
        

	// $idList = TuyenSinh::where('nganh_hoc','=',"1")->Where('khoi_thi','=',"A01")->Where('diemchuan','>=',number_format("21"))->pluck('id')->toArray();
	// foreach($TuyenSinhList  as $TuyenSinh){
	// 	foreach($TuyenSinh -> TinTuc as $TinTuc){
	// 	echo $TinTuc->TomTat;
	// }
	// }
	// $TuyenSinh = TuyenSinh::find(2);
	
	// $tintuc = TinTuc::wherein('idTuyenSinh', $idList)->paginate(5);
	// // return view('page.xxxx',['tintuc' => $tintuc, 'keyword' => "Kết quả tra cứu"]);
	// return view('page.xxxx');
	// foreach($tintucList as $TinTuc){
	// 	echo $TinTuc->TomTat;
	// }

	// foreach($idList  as $id){
		
	// 	echo $id;
	
	// }

// 	$num = "1000.314"; 
  
// // Convert string in number using  
// // number_format(), function 
// echo number_format($num), "\n"; 
  
// // Convert string in number using  
// // number_format(), function 
// echo number_format($num, 2); 
	
	
	
});
Route::get('reseach-score','HomeController@SearchByScore');
// Route::get('reseach-score',function(){
// });

Route::get('/', 'HomeController@Dashboard');

Route::get('lien-he','HomeController@Contact');
Route::get('tu-van','HomeController@Research');

Route::get('loai-tin/{unsigned_name}','HomeController@LoaiTin');

Route::get('tin-tuc/{unsigned_name}.html','HomeController@TinTuc');

Route::get('dang-nhap','HomeController@Login');

Route::post('dang-nhap','HomeController@LoginAuth');

Route::get('dang-xuat','HomeController@Logout');

Route::post('binh-luan/{article_id}','CommentController@Them');

Route::get('quan-ly-thong-tin','HomeController@UserConf');

Route::post('quan-ly-thong-tin','HomeController@ExUserConf');

Route::get('dang-ky-tai-khoan','HomeController@Register');

Route::post('dang-ky-tai-khoan','HomeController@DoRegister');

Route::get('tim-kiem','HomeController@Search');


Route::get('admin/login','UserController@Login');

Route::post('admin/login','UserController@LoginAuth');

Route::get('admin/logout','UserController@Logout');

// Khai báo Middleware trong Kernel trước thì mới sử dụng tại Route được, gom tất cả những cái cần thiết trong trang admin, vào group prefix admin để sử dụng middleware bảo mật cho trang admin.
Route::group(['prefix' => 'admin','middleware' => 'adminAuth'],function(){

	Route::get('/','AdminController@index');

	// Route group The Loai
	Route::group(['prefix' => 'theloai'],function(){
		// Route URL: admin/theloai/danhsach
		Route::get('danhsach','TheLoaiController@getDanhSach');

		// Route URL: admin/theloai/them
		Route::get('them','TheLoaiController@Them');

		Route::post('them','TheLoaiController@XuLyThemTL');

		// Route URL: admin/theloai/sua
		Route::get('sua/{id}','TheLoaiController@Sua');

		Route::post('sua/{id}','TheLoaiController@XuLySuaTL');

		Route::get('xoa/{id}','TheLoaiController@Xoa');
	});

	// Route group Loai Tin
	Route::group(['prefix' => 'loaitin'],function(){
		Route::get('danhsach','LoaiTinController@getDanhSach');

		Route::get('them','LoaiTinController@Them');

		Route::post('them','LoaiTinController@XuLyThemLT');

		Route::get('sua/{id}','LoaiTinController@Sua');

		Route::post('sua/{id}','LoaiTinController@XuLySuaLT');

		Route::get('xoa/{id}','LoaiTinController@Xoa');
	});

	// Route group Tin Tuc
	Route::group(['prefix' => 'tintuc'],function(){
		Route::get('danhsach','TinTucController@getDanhSach');

		Route::get('them','TinTucController@Them');

		Route::post('them','TinTucController@XuLyThemTT');

		Route::get('sua/{id}','TinTucController@Sua');

		Route::post('sua/{id}','TinTucController@XuLySuaTT');

		Route::get('xoa/{id}','TinTucController@Xoa');
	});

	// Route group User
	Route::group(['prefix' => 'user'],function(){
		Route::get('danhsach','UserController@getDanhSach');

		Route::get('them','UserController@Them');

		Route::post('them','UserController@XuLyThemUser');

		Route::get('sua/{id}','UserController@Sua');

		Route::post('sua/{id}','UserController@XuLySuaUser');

		Route::get('xoa/{id}','UserController@Xoa');
	});

	// Route group Comment
	Route::group(['prefix' => 'comment'],function(){
		Route::get('danhsach','CommentController@getDanhSach');

		Route::get('xoa/{id}','CommentController@Xoa');
	});

	// Route group Slide
	Route::group(['prefix' => 'slide'],function(){
		Route::get('danhsach','SlideController@getDanhSach');

		Route::get('them','SlideController@Them');

		Route::post('them','SlideController@XuLyThemSlide');

		Route::get('sua/{id}','SlideController@Sua');

		Route::post('sua/{id}','SlideController@XuLySuaSlide');

		Route::get('xoa/{id}','SlideController@Xoa');
	});

	// Route group Ajax
	Route::group(['prefix'=>'ajax'],function(){
		Route::get('layloaitin/{idTheLoai}','AjaxController@getLoaiTin');

		Route::get('timestamp','AjaxController@timestamp');
	});
});
