<?php
	$action = $_POST['action']; // Lấy giá trị action
	if(!empty($_POST['txtTenDangNhap']) && $action == 'check_user')
	{
		// Lấy giá trị tên đăng nhập
		$user = $_POST['txtTenDangNhap']; 
		
		// Chuyển giá trị tên đăng nhập thành chữ thường & gọi hàm kiểm tra
		username_exist(strtolower($user)); 
	}
	
	function username_exist($user)
	{
		include_once("DataProvider.php");
		$dsNguoiDung = DataProvider::ExecuteQuery("Select * From user");
		if($dsNguoiDung != false)
		{
			while ($row = mysql_fetch_array($dsNguoiDung, MYSQL_ASSOC))
			{
				$data[] = $row['username'];
			}
		}
		// Mảng giá trị tên đăng nhập đã tồn tại
		$user_arr = $data;
		
		// Kiểm tra tên đăng nhập 
		if(in_array($user, $user_arr))
		{
			echo "<span class='error'><img src='img/icon_error.gif' width='15' height='15'> Tên đăng nhập: <strong>{$user}</strong> đã tồn tại !!!</span>";
		}
		else
		{
			echo "<span class='success'><img src='img/icon_ok.png' width='15' height='15'> Tên đăng nhập: <strong>{$user}</strong> hợp lệ</span>";	
		}
	}

?>