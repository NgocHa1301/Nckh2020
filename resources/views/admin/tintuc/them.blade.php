@extends('admin.layout.index')

@section('content')
<script src="admin_asset/dist/js/extra.js"></script>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tin Tức
                            <small>> Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    <strong>{{$err}}</strong><br>
                                @endforeach
                            </div>
                        @endif
                        
                        @if(session('error'))
                            <div class="alert alert-danger">
                                <strong>{{session('error')}}</strong>
                            </div>
                        @endif

                        @if(session('message'))
                            <div class="alert alert-success">
                                <strong>{{session('message')}}</strong>
                            </div>
                        @endif
                        <form action="admin/tintuc/them" method="POST" enctype="multipart/form-data"> <!-- Form bắt buộc phải có thuộc tính enctype thì mới up được file lên -->
                            {{ csrf_field() }}
                            <div class="form-group">
                                <p><label>Chọn Thể Loại</label></p>
                                <select class="form-control input-width catefield" name="cate">
                                    @foreach($theloai as $chitietTL)
                                        <option value="{{ $chitietTL->id }}">{{ $chitietTL->Ten }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <p><label>Chọn Loại Tin</label></p>
                                <select class="form-control input-width subcatefield" name="sub_cate">
                                    @foreach($loaitin as $chitietLT)
                                        <option value="{{ $chitietLT->id }}">{{ $chitietLT->Ten }}</option>
                                    @endforeach
                                </select>
                            </div>
                           

                            <div class="form-group">
                                <p><label>Tiêu Đề</label></p>
                                <input type="text" class="form-control input-width" name="article_title" placeholder="Nhập Tiêu Đề Tin Tức" value="{{ old('article_title') }}" />
                            </div>

                            <div class="form-group">
                                <p><label>Tóm Tắt Nội Dung</label></p>
                                <textarea name="article_desc" id="demo" class="form-control ckeditor" rows="3">
                                    {{ old('article_desc') }}
                                </textarea>
                            </div>

                            <div class="form-group">
                                <p><label>Nội Dung Bài Viết</label></p>
                                <textarea name="article_content" id="demo" class="form-control ckeditor" rows="3">
                                    {{ old('article_content') }}
                                </textarea>
                            </div>

                            <div class="form-group">
                                <p><label>Thêm Hình Ảnh</label></p>
                                <input type="file" class="form-control" name="article_img">
                            </div>

                            <div class="form-group">
                                <p><label>Tin Tức Nổi Bật?</label></p>
                                <label class="radio-inline">
                                    <input name="article_rep" value="1" checked="" type="radio">Có
                                </label>
                                <label class="radio-inline">
                                    <input name="article_rep" value="0" type="radio">Không
                                </label>
                            </div>
                           
                                
                            <div class="form-group">
    <p>
        <label>Điền thông tin tuyển sinh (nếu có)</label>
    </p>
    <p>
        <label>Chọn nhóm ngành</label>
    </p>
    <select class="form-control input-width catefield" name="nganhhoc" id="nganhhoc">
        <option value="0" selected="selected">---Tất cả các nghành---</option>
        <option value="1">Kế toán - Kiểm toán</option>

        <option value="2">Tài chính - Ngân hàng- Bảo hiểm</option>

        <option value="3">Kinh tế - Quản trị kinh doanh - Thương Mại</option>

        <option value="4">Ngoại thương - Xuất nhập khẩu - KTế quốc tế</option>

        <option value="5">Ngoại giao - Ngoại ngữ</option>

        <option value="6">Báo chí - Marketing - Quảng cáo - PR</option>

        <option value="7">Công nghệ thông tin - Tin học</option>

        <option value="8">Thiết kế đồ họa - Game - Đa phương tiện</option>

        <option value="9">Công an - Quân đội</option>

        <option value="10">Luật - Tòa án</option>

        <option value="11">Xây dựng - Kiến trúc-Giao thông</option>

        <option value="12">Mỹ thuật - Âm nhạc-Nghệ thuật</option>

        <option value="13">Thể dục - Thể thao</option>

        <option value="14">Du lịch-Khách sạn</option>

        <option value="15">Văn hóa - Chính trị - Khoa học Xã hội</option>

        <option value="16">Nhân sự - Hành chính</option>

        <option value="17">Tâm lý</option>

        <option value="18">Sư phạm - Giáo dục</option>

        <option value="19">Mỏ - Địa chất</option>

        <option value="20">Tài nguyên- Môi trường</option>

        <option value="21">Thủy sản-Lâm Nghiệp-Nông nghiệp</option>

        <option value="22">Hàng hải-Thủy lợi-Thời tiết</option>

        <option value="23">Y - Dược</option>

        <option value="24">Bác sĩ thú y</option>

        <option value="25">Ô tô - Cơ khí -Chế tạo</option>

        <option value="26">Điện lạnh- Điện tử - Điện - Tự động hóa</option>

        <option value="27">Công nghệ In - Giấy</option>

        <option value="28">Công nghệ chế biến thực phẩm</option>

        <option value="29">Công nghệ sinh - Hóa</option>

        <option value="30">Thời trang- May mặc</option>

        <option value="31">Công nghệ vật liệu</option>

        <option value="32">Hàng không - Vũ trụ- Hạt nhân</option>

        <option value="33">Toán học và thống kê</option>

        <option value="34">Khoa học tư nhiên khác</option>

    </select>
<p>
    <label>Nhập tổng điểm</label>
</p>
<input class="form-control input-width" placeholder="Tổng điểm 3 môn dự kiến" type="tongdiem" name="tongdiem" />
<p>
    <label>Nhập tên trường</label>
</p>
<input class="form-control input-width" placeholder="Tên trường" name="tentruong" />
<p>
    <label>Khối thi</label>
</p>
<select class="form-control input-width catefield" name="khoithi" id="block">
    <option value="">--Khối thi--</option>
    <option value="A00">A00 - Toán, Vật lí, Hóa học</option>
    <option value="A01">A01 - Toán, Vật lí, Tiếng Anh</option>
    <option value="B00">B00 - Toán, Hóa học, Sinh học</option>
    <option value="C00">C00 - Ngữ văn, Lịch sử, Địa lí</option>
    <option value="D01">D01 - Ngữ văn, Toán, Tiếng Anh</option>
    <option value="D02">D02 - Ngữ văn, Toán, Tiếng Nga</option>
    <option value="D03">D03 - Ngữ văn, Toán, Tiếng Pháp</option>
    <option value="D04">D04 - Ngữ văn, Toán, Tiếng Trung</option>
    <option value="D05">D05 - Ngữ văn, Toán, Tiếng Đức</option>
    <option value="D06">D06 - Ngữ văn, Toán, Tiếng Nhật</option>
    <option value="A02">A02 - Toán, Vật lí, Sinh học</option>
    <option value="A03">A03 - Toán, Vật lí, Lịch sử</option>
    <option value="A04">A04 - Toán, Vật lí, Địa lí</option>
    <option value="A05">A05 - Toán, Hóa học, Lịch sử</option>
    <option value="A06">A06 - Toán, Hóa học, Địa lí</option>
    <option value="A07">A07 - Toán,Lịch sử, Địa lí</option>
    <option value="A08">A08 - Toán, Lịch sử, Giáo dục công dân</option>
    <option value="A09">A09 - Toán,Địa lý, Giáo dục công dân</option>
    <option value="A10">A10 - Toán,Lý, Giáo dục công dân</option>
    <option value="A11">A11 - Toán,Hóa, Giáo dục công dân</option>
    <option value="A12">A12 - Toán,Khoa học tự nhiên, KH xã hội</option>
    <option value="A14">A14 - Toán,Khoa học tự nhiên, Địa lí</option>
    <option value="A15">A15 - Toán,KH tự nhiên, Giáo dục công dân</option>
    <option value="A16">A16 - Toán,Khoa học tự nhiên, Ngữ văn</option>
    <option value="A17">A17 - Toán,Vật lý, Khoa học xã hội</option>
    <option value="A18">A18 - Toán,Hoá học, Khoa học xã hội</option>
    <option value="B01">B01 - Toán, Sinh học, Lịch sử</option>
    <option value="B02">B02 - Toán, Sinh học, Địa lí</option>
    <option value="B03">B03 - Toán, Sinh học, Ngữ văn</option>
    <option value="B04">B04 - Toán, Sinh học, Giáo dục công dân</option>
    <option value="B05">B05 - Toán, Sinh học, Khoa học xã hội</option>
    <option value="B08">B08 - Toán, Sinh học, Tiếng Anh</option>
    <option value="C01">C01 - Ngữ văn, Toán, Vật lí</option>
    <option value="C02">C02 - Ngữ văn, Toán, Hóa học</option>
    <option value="C03">C03 - Ngữ văn, Toán, Lịch sử</option>
    <option value="C04">C04 - Ngữ văn, Toán, Địa lí</option>
    <option value="C05">C05 - Ngữ văn, Vật lí, Hóa học</option>
    <option value="C06">C06 - Ngữ văn, Vật lí, Sinh học</option>
    <option value="C07">C07 - Ngữ văn, Vật lí, Lịch sử</option>
    <option value="C08">C08 - Ngữ văn, Hóa học, Sinh học</option>
    <option value="C09">C09 - Ngữ văn, Vật lí, Địa lí</option>
    <option value="C10">C10 - Ngữ văn, Hóa học, Lịch sử</option>
    <option value="C12">C12 - Ngữ văn, Sinh học, Lịch sử</option>
    <option value="C13">C13 - Ngữ văn, Sinh học, Địa lí</option>
    <option value="C14">C14 - Ngữ văn, Toán, Giáo dục công dân</option>
    <option value="C15">C15 - Ngữ văn, Toán, Khoa học xã hội</option>
    <option value="C16">C16 - Ngữ văn, Vật lí, Giáo dục công dân</option>
    <option value="C19">C19 - Ngữ văn, Lịch sử, Giáo dục công dân</option>
    <option value="C20">C20 - Ngữ văn, Địa lí, Giáo dục công dân</option>
    <option value="D07">D07 - Toán, Hóa học, Tiếng Anh</option>
    <option value="D08">D08 - Toán, Sinh học, Tiếng Anh</option>
    <option value="D09">D09 - Toán, Lịch sử, Tiếng Anh</option>
    <option value="D10">D10 - Toán, Địa lí, Tiếng Anh</option>
    <option value="D11">D11 - Ngữ văn, Vật lí, Tiếng Anh</option>
    <option value="D12">D12 - Ngữ văn, Hóa học, Tiếng Anh</option>
    <option value="D13">D13 - Ngữ văn, Sinh học, Tiếng Anh</option>
    <option value="D14">D14 - Ngữ văn, Lịch sử, Tiếng Anh</option>
    <option value="D15">D15 - Ngữ văn, Địa lí, Tiếng Anh</option>
    <option value="D16">D16 - Toán, Địa lí, Tiếng Đức</option>
    <option value="D17">D17 - Toán, Địa lí, Tiếng Nga</option>
    <option value="D18">D18 - Toán, Địa lí, Tiếng Nhật</option>
    <option value="D19">D19 - Toán, Địa lí, Tiếng Pháp</option>
    <option value="D20">D20 - Toán, Địa lí, Tiếng Trung</option>
    <option value="D21">D21 - Toán, Hóa học, Tiếng Đức</option>
    <option value="D22">D22 - Toán, Hóa học, Tiếng Nga</option>
    <option value="D23">D23 - Toán, Hóa học, Tiếng Nhật</option>
    <option value="D24">D24 - Toán, Hóa học, Tiếng Pháp</option>
    <option value="D25">D25 - Toán, Hóa học, Tiếng Trung</option>
    <option value="D26">D26 - Toán, Vật lí, Tiếng Đức</option>
    <option value="D27">D27 - Toán, Vật lí, Tiếng Nga</option>
    <option value="D28">D28 - Toán, Vật lí, Tiếng Nhật</option>
    <option value="D29">D29 - Toán, Vật lí, Tiếng Pháp</option>
    <option value="D30">D30 - Toán, Vật lí, Tiếng Trung</option>
    <option value="D31">D31 - Toán, Sinh học, Tiếng Đức</option>
    <option value="D32">D32 - Toán, Sinh học, Tiếng Nga</option>
    <option value="D33">D33 - Toán, Sinh học, Tiếng Nhật</option>
    <option value="D34">D34 - Toán, Sinh học, Tiếng Pháp</option>
    <option value="D35">D35 - Toán, Sinh học, Tiếng Trung</option>
    <option value="D41">D41 - Ngữ văn, Địa lí, Tiếng Đức</option>
    <option value="D42">D42 - Ngữ văn, Địa lí, Tiếng Nga</option>
    <option value="D43">D43 - Ngữ văn, Địa lí, Tiếng Nhật</option>
    <option value="D44">D44 - Ngữ văn, Địa lí, Tiếng Pháp</option>
    <option value="D45">D45 - Ngữ văn, Địa lí, Tiếng Trung</option>
    <option value="D52">D52 - Ngữ văn, Vật lí, Tiếng Nga</option>
    <option value="D54">D54 - Ngữ văn, Vật lí, Tiếng Pháp</option>
    <option value="D55">D55 - Ngữ văn, Vật lí, Tiếng Trung</option>
    <option value="D61">D61 - Ngữ văn, Lịch sử, Tiếng Đức</option>
    <option value="D62">D62 - Ngữ văn, Lịch sử, Tiếng Nga</option>
    <option value="D63">D63 - Ngữ văn, Lịch sử, Tiếng Nhật</option>
    <option value="D64">D64 - Ngữ văn, Lịch sử, Tiếng Pháp</option>
    <option value="D65">D65 - Ngữ văn, Lịch sử, Tiếng Trung</option>
    <option value="D66">D66 - Ngữ văn, Giáo dục công dân, Tiếng Anh</option>
    <option value="D68">D68 - Ngữ văn, Giáo dục công dân, Tiếng Nga</option>
    <option value="D67">D67 - Ngữ văn, Giáo dục công dân, Tiếng Đức</option>
    <option value="D69">D69 - Ngữ Văn, Giáo dục công dân, Tiếng Nhật</option>
    <option value="D70">D70 - Ngữ Văn, Giáo dục công dân, Tiếng Pháp</option>
    <option value="D71">D71 - Ngữ văn, Giáo dục công dân, Tiếng Trung</option>
    <option value="D72">D72 - Ngữ văn, Khoa học tự nhiên, Tiếng Anh</option>
    <option value="D73">D73 - Ngữ văn, Khoa học tự nhiên, Tiếng Đức</option>
    <option value="D74">D74 - Ngữ văn, Khoa học tự nhiên, Tiếng Nga</option>
    <option value="D75">D75 - Ngữ văn, Khoa học tự nhiên, Tiếng Nhật</option>
    <option value="D76">D76 - Ngữ văn, Khoa học tự nhiên, Tiếng Pháp</option>
    <option value="D77">D77 - Ngữ văn, Khoa học tự nhiên, Tiếng Trung</option>
    <option value="D78">D78 - Ngữ văn, Khoa học xã hội, Tiếng Anh</option>
    <option value="D79">D79 - Ngữ văn, Khoa học xã hội, Tiếng Đức</option>
    <option value="D80">D80 - Ngữ văn, Khoa học xã hội, Tiếng Nga</option>
    <option value="D81">D81 - Ngữ văn, Khoa học xã hội, Tiếng Nhật</option>
    <option value="D82">D82 - Ngữ văn, Khoa học xã hội, Tiếng Pháp</option>
    <option value="D83">D83 - Ngữ văn, Khoa học xã hội, Tiếng Trung</option>
    <option value="D84">D84 - Toán, Giáo dục công dân, Tiếng Anh</option>
    <option value="D85">D85 - Toán, Giáo dục công dân, Tiếng Đức</option>
    <option value="D86">D86 - Toán, Giáo dục công dân, Tiếng Nga</option>
    <option value="D87">D87 - Toán, Giáo dục công dân, Tiếng Pháp</option>
    <option value="D88">D88 - Toán, Giáo dục công dân, Tiếng Nhật</option>
    <option value="D90">D90 - Toán, Khoa học tự nhiên, Tiếng Anh</option>
    <option value="D91">D91 - Toán, Khoa học tự nhiên, Tiếng Pháp</option>
    <option value="D92">D92 - Toán, Khoa học tự nhiên, Tiếng Đức</option>
    <option value="D93">D93 - Toán, Khoa học tự nhiên, Tiếng Nga</option>
    <option value="D94">D94 - Toán, Khoa học tự nhiên, Tiếng Nhật</option>
    <option value="D95">D95 - Toán, Khoa học tự nhiên, Tiếng Trung</option>
    <option value="D96">D96 - Toán, Khoa học xã hội, Anh</option>
    <option value="D97">D97 - Toán, Khoa học xã hội, Tiếng Pháp</option>
    <option value="H00">H00 - Ngữ văn, Năng khiếu vẽ Nghệ thuật 1, Năng khiếu vẽ Nghệ thuật 2</option>
    <option value="H01">H01 - Toán, Ngữ văn, Vẽ Mỹ thuật</option>
    <option value="H02">H02 - Toán, Vẽ Hình họa mỹ thuật, Vẽ trang trí màu</option>
    <option value="H03">H03 - Toán, Khoa học tự nhiên, Vẽ Năng khiếu</option>
    <option value="H04">H04 - Toán, Tiếng Anh, Vẽ Năng khiếu</option>
    <option value="H05">H05 - Ngữ văn, Khoa học xã hội, Vẽ Năng khiếu</option>
    <option value="H06">H06 - Ngữ văn, Tiếng Anh,Vẽ mỹ thuật</option>
    <option value="H07">H07 - Toán, Hình họa, Trang trí</option>
    <option value="H08">H08 - Ngữ văn, Lịch sử, Vẽ mỹ thuật</option>
    <option value="K01">K01 - Toán, Tiếng Anh, Tin học</option>
    <option value="M00">M00 - Ngữ văn, Toán, Đọc diễn cảm, Hát</option>
    <option value="M01">M01 - Ngữ văn, Lịch sử, Năng khiếu</option>
    <option value="M02">M02 - Toán, Năng khiếu 1, Năng khiếu 2</option>
    <option value="M03">M03 - Văn, Năng khiếu 1, Năng khiếu 2</option>
    <option value="M04">M04 - Toán, Đọc kể diễn cảm, Hát - Múa</option>
    <option value="M09">M09 - Toán, NK Mầm non 1( kể chuyện, đọc, diễn cảm), NK Mầm non 2 (Hát)</option>
    <option value="M10">M10 - </option>
    <option value="M11">M11 - Ngữ Văn, năng kiếu báo chí, Tiếng Anh</option>
    <option value="M12">M12 - Ngữ Văn, năng kiếu báo chí, Vật Lý</option>
    <option value="M13">M13 - </option>
    <option value="M14">M14 - Ngữ văn, Năng khiếu báo chí, Toán</option>
    <option value="M15">M15 - Ngữ văn, Năng khiếu báo chí, Tiếng Anh</option>
    <option value="M16">M16 - Ngữ văn, Năng khiếu báo chí, Vật lý</option>
    <option value="M17">M17 - Ngữ văn, Năng khiếu báo chí, Lịch sử</option>
    <option value="M18">M18 - Ngữ văn, Năng khiếu Ảnh báo chí, Toán</option>
    <option value="M19">M19 - Ngữ văn, Năng khiếu Ảnh báo chí, Tiếng Anh</option>
    <option value="M20">M20 - Ngữ văn, Năng khiếu Ảnh báo chí, Vật lý</option>
    <option value="M21">M21 - Ngữ văn, Năng khiếu Ảnh báo chí, Lịch sử</option>
    <option value="M22">M22 - Ngữ văn, Năng khiếu quay phim truyền hình, Toán</option>
    <option value="M23">M23 - Ngữ văn, Năng khiếu quay phim truyền hình, Tiếng Anh</option>
    <option value="M24">M24 - Ngữ văn, Năng khiếu quay phim truyền hình, Vật lý</option>
    <option value="M25">M25 - Ngữ văn, Năng khiếu quay phim truyền hình, Lịch sử</option>
    <option value="N00">N00 - Ngữ văn, Năng khiếu Âm nhạc 1, Năng khiếu Âm nhạc 2</option>
    <option value="N01">N01 - Ngữ văn, xướng âm, biểu diễn nghệ thuật</option>
    <option value="N02">N02 - Ngữ văn, Ký xướng âm, Hát hoặc biểu diễn nhạc cụ</option>
    <option value="N03">N03 - Ngữ văn, Ghi âm- xướng âm, chuyên môn</option>
    <option value="N04">N04 - Ngữ Văn, Năng khiếu thuyết trình, Năng khiếu</option>
    <option value="N05">N05 - Ngữ Văn, Xây dựng kịch bản sự kiện, Năng khiếu</option>
    <option value="N06">N06 - Ngữ văn, Ghi âm- xướng âm, chuyên môn</option>
    <option value="N07">N07 - Ngữ văn, Ghi âm- xướng âm, chuyên môn</option>
    <option value="N08">N08 - Ngữ văn , Hòa thanh, Phát triển chủ đề và phổ thơ</option>
    <option value="N09">N09 - Ngữ văn, Hòa thanh, Bốc thăm đề- chỉ huy tại chỗ</option>
    <option value="R00">R00 - Ngữ văn, Lịch sử, Năng khiếu báo chí</option>
    <option value="R01">R01 - Ngữ văn, Địa lý, Năng khiếu Biểu diễn nghệ thuật</option>
    <option value="R02">R02 - Ngữ văn, Toán, Năng khiếu Biểu diễn nghệ thuật</option>
    <option value="R03">R03 - Ngữ văn, tiếng Anh, Năng khiếu Biểu diễn nghệ thuật</option>
    <option value="R04">R04 - Ngữ văn, Năng khiếu Biểu diễn nghệ thuật, Năng khiếu Kiến thức văn hóa – xã hội – nghệ thuật</option>
    <option value="R05">R05 - Ngữ văn, tiếng Anh, Năng khiếu kiến thức truyền thông</option>
    <option value="S00">S00 - Ngữ văn, Năng khiếu SKĐA 1, Năng khiếu SKĐA 2</option>
    <option value="S01">S01 - Toán, Năng khiếu 1, Năng khiếu 2</option>
    <option value="T00">T00 - Toán, Sinh học, Năng khiếu TDTT</option>
    <option value="T01">T01 - Toán, Ngữ văn, Năng khiếu TDTT</option>
    <option value="T02">T02 - Ngữ văn, Sinh, Năng khiếu TDTT</option>
    <option value="T03">T03 - Ngữ văn, Địa, Năng khiếu TDTT</option>
    <option value="T04">T04 - Toán, Lý, Năng khiếu TDTT</option>
    <option value="T05">T05 - </option>
    <option value="V00">V00 - Toán, Vật lí, Vẽ Hình họa mỹ thuật</option>
    <option value="V01">V01 - Toán, Ngữ văn, Vẽ Hình họa mỹ thuật</option>
    <option value="V02">V02 - VẼ MT, Toán, Tiếng Anh</option>
    <option value="V03">V03 - VẼ MT, Toán, Hóa</option>
    <option value="V05">V05 - </option>
    <option value="V06">V06 - </option>
    <option value="V07">V07 - </option>
    <option value="V08">V08 - </option>
    <option value="V09">V09 - </option>
    <option value="V10">V10 - </option>
    <option value="V11">V11 - </option>
</select>
</div>

                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default btn-mleft">Nhập Lại</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection