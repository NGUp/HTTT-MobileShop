// JavaScript Document
var checkTenDN = false;
var checkKyTuTenDN = false;
var searchReg = /^[a-zA-Z0-9-]+$/;
var checkMatKhau = false;
var checkKyTuMK = false;
var checkXacNhatMK = false;
var checkTrungMatKhau = false;
var checkMaKT = false;
var checkTenDNTrung = false;
var test = '';
$(document).ready(function() {
	// Tên đăng nhập
    $('#tenDangNhap').blur(function() {
		var tenDangNhap = $('#tenDangNhap').val();
		if(tenDangNhap == ""){
			$('#tenDangNhap_msg').html("<span style='color: red'><img src='img/icon_error.gif' width='15' height='15'> Vui lòng nhập tên đăng nhập !</span>");
		}
	});
	$('#tenDangNhap').keyup(function() {
		var tenDangNhap = $('#tenDangNhap').val();
		if(tenDangNhap == ""){
			$('#tenDangNhap_msg').html("<span style='color: red'><img src='img/icon_error.gif' width='15' height='15'> Vui lòng nhập tên đăng nhập !</span>");
		}
		else
		{
			$('#tenDangNhap_msg').html("<span></span>");
		}
	});
	// Mật khẩu
	$('#password').blur(function() {
		var password = $('#password').val();
		if(password == ""){
			$('#password_msg').html("<span style='color: red'><img src='img/icon_error.gif' width='15' height='15'> Vui lòng nhập mật khẩu !</span>");
		}
	});
	$('#password').keyup(function() {
		var password = $('#password').val();
		
		if (password.length < 1){
			$('#password_msg').html("<span style='color: red'><img src='img/icon_error.gif' width='15' height='15'> Vui lòng nhập mật khẩu !</span>");
		}
		else if (password.length < 3){
			$('#password_msg').html("<span style='color: red'><img src='img/icon_error.gif' width='15' height='15'> Mật khẩu quá ngắn !</span>");
		}
		else if (password.length < 6) {
			$('#password_msg').html("<span style='color: red'><img src='img/red.png' width='15' height='15'> Mật khẩu yếu</span>");
		}
		else if (password.length <8){
			$('#password_msg').html("<span style='color: #FC0'><img src='img/yellow.jpg' width='15' height='15'> <img src='img/yellow.jpg' width='15' height='15'> Mật khẩu tốt</span>");
		}
		else if (password.length < 10){
			$('#password_msg').html("<span style='color: #0F0'><img src='img/green.jpg' width='15' height='15'> <img src='img/green.jpg' width='15' height='15'> <img src='img/green.jpg' width='15' height='15'> Mật khẩu mạnh</span>");
		}
	});
	// Xác nhận mật khẩu
	$('#xacNhanPassword').blur(function() {
		var xacNhanPassword = $('#xacNhanPassword').val();
		if(xacNhanPassword == ""){
			$('#xacNhanPassword_msg').html("<span style='color: red'><img src='img/icon_error.gif' width='15' height='15'> Xác nhận mật khẩu không hợp lệ !</span>");
		}
	});
	$('#xacNhanPassword').keyup(function(){
		var password = $('#password').val();
		var xacNhanPassword = $('#xacNhanPassword').val();
		if(password == xacNhanPassword)
		{
			$('#xacNhanPassword_msg').html("<span style='color: #0F0'><img src='img/icon_ok.png' width='15' height='15'> Xác nhận mật khẩu hợp lệ !</span>");
			}
		else if(password != xacNhanPassword)
		{
			$('#xacNhanPassword_msg').html("<span style='color: red'><img src='img/icon_error.gif' width='15' height='15'> Xác nhận mật khẩu không hợp lệ !</span>");
			}
	});
	$('#maKT').blur(function() {
		var maKT = $('#maKT').val();
		if(maKT == ""){
			$('#maKT_msg').html("<span style='color: red'><img src='img/icon_error.gif' width='15' height='15'> Vui lòng nhập mã kiểm tra !</span>");
		}
	});
	$('#maKT').keyup(function() {
		var maKT = $('#maKT').val();
		if(maKT == ""){
			$('#maKT_msg').html("<span></span>");
		}
		else{
			$('#maKT_msg').html("<span></span>");
		}
	});
	// Kiểm tra rỗng
	$('#tenDangNhap').blur(function(){
		if($('#tenDangNhap').val() == "")
		{
			checkTenDN = false;
		}
		else
		{
			if(!searchReg.test($('#tenDangNhap').val()))
			{
				checkKyTuTenDN = false;
			}
			else
			{
				checkKyTuTenDN = true;
			}
			checkTenDN = true;
		}
	});
	$('#password').blur(function(){
		if($('#password').val() == "")
		{
			checkMatKhau = false;
		}
		else
		{
			if($('#password').val().length < 3)
			{
				checkKyTuMK= false;
			}
			else
			{
				checkKyTuMK = true;
			}
			checkMatKhau = true;
		}
	});
	$('#xacNhanPassword').blur(function(){
		if($('#xacNhanPassword').val() == "")
		{
			checkXacNhatMK = false;
		}
		else
		{
			if($('#password').val() != $('#xacNhanPassword').val())
			{
				checkTrungMatKhau == false;
			}
			else
			{
				checkTrungMatKhau = true;
			}
			checkXacNhatMK = true;
		}
	});
	$('#maKT').blur(function(){
		if($('#maKT').val() == "")
		{
			checkMaKT = false;
		}
		else
		{
			checkMaKT = true;
		}
	});
	// Kiểm tra mã kiểm tra
	// Sự kiện khi focus vào user_name
	$("#tenDangNhap").blur(function() { 
	
		if($(this).val() != ''){
			// Gán text cho class thongbao trước khi AJAX response
			$(".thongbao").html('Đang kiểm tra tên đăng nhập ...'); 
		}
		
		// Dữ liệu sẽ gởi đi
		var form_data = {action: 'check_user',	txtTenDangNhap: $(this).val()};
		
		$.ajax({
			type: "POST",				// Phương thức gởi đi
			url: "xlTrangDangKy.php",			// File xử lý dữ liệu được gởi
			data: form_data,			// Dữ liệu gởi đến cho url 
			success: function(result) { // Hàm chạy khi dữ liệu gởi thành công
				$(".thongbao").html(result);
			}
		});
		
		$.ajax({
			type: "POST",				// Phương thức gởi đi
			url: "KiemTraTenDN.php",			// File xử lý dữ liệu được gởi
			data: form_data,			// Dữ liệu gởi đến cho url 
			async:false,
			success: function(result) { // Hàm chạy khi dữ liệu gởi thành công
				test = result;
			}
		});
		
		if(test === "false")
		{
			checkTenDNTrung = false;
		}
		else
		{
			checkTenDNTrung = true;
		}
	});
	
	$('#submit').click(function(){
		if(checkTenDN == false)
		{
			window.alert("Tên đăng nhập không được để trống.");
			$('#tenDangNhap').focus();
			return;
		}
		if(checkKyTuTenDN == false)
		{
			window.alert("Tên đăng nhập có chứa ký tự đặc biệt.");
			$('#tenDangNhap').focus();
			return;
		}
		if(checkTenDNTrung == false)
		{
			window.alert("Tên đăng nhập đã sử dụng.");
			$('#tenDangNhap').focus();
			return;
		}
		if(checkMatKhau == false)
		{
			window.alert("Mật khẩu không được để trống.");
			$('#password').focus();
			return;
		}
		if(checkKyTuMK == false)
		{
			window.alert("Mật khẩu quá ngắn (phải tối thiểu 3 kí tự).");
			$('#password').focus();
			return;
		}
		if(checkXacNhatMK == false)
		{
			window.alert("Xác nhận mật khẩu không được để trống.");
			$('#xacNhanPassword').focus();
			return;
		}
		if(checkTrungMatKhau == false)
		{
			window.alert("Mật khẩu gõ lại không đúng.");
			$('#xacNhanPassword').focus();
			return;
		}
		if(checkMaKT == false)
		{
			window.alert("Mã kiểm tra không được để trống.");
			$('#maKT').focus();
			return;
		}
		$('#submit').prop('type', 'submit');
	});
});

