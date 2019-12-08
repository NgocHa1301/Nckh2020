@section('title')
    Liên Hệ
@endsection

@extends('index')

@section('content')
    <!-- Page Content -->
    <div class="container">

    	@include('block.slide')

        <div class="space20"></div>


        <div class="row main-left">
            @include('block.menu')

            <div class="col-md-9">
	            <div class="panel panel-default">            
	            	<div class="panel-heading" style="background-color:#337AB7; color:white;" >
	            		<h2 style="margin-top:0px; margin-bottom:0px;">Liên hệ</h2>
	            	</div>

	            	<div class="panel-body">
	            		<!-- item -->
                        <h3><span class="glyphicon glyphicon-align-left"></span> Thông tin liên hệ</h3>
					    
                        <div class="break"></div>
					   	<h4><span class= "glyphicon glyphicon-home "></span> Địa chỉ : </h4>
                        <p> Tổ 6, phường Túc Duyên, Thành phố Thái Nguyên, tỉnh Thái Nguyên </p>

                        <h4><span class="glyphicon glyphicon-envelope"></span> Email : </h4>
                        <p>trunghieuch2@gmail.com </p>

                        <h4><span class="glyphicon glyphicon-phone-alt"></span> Điện thoại : </h4>
                        <p>+84 868 701 413</p>



                        <br><br>
                        <h3><span class="glyphicon glyphicon-globe"></span> Bản đồ</h3>
                        <div class="break"></div><br>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3709.827520378499!2d105.82333921449715!3d21.59265468569557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135271efca414ed%3A0x3f8a7d3d1df3ecb!2zVHLGsOG7nW5nIFRIUFQgQ2h1ecOqbiBUaMOhaSBOZ3V5w6pu!5e0!3m2!1svi!2s!4v1575794538042!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

					</div>
	            </div>
        	</div>
        </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content -->
@endsection
