<?php
    class AccountModel{
		public function modelLogin(){
			$email = $_POST["email"];
			$password = $_POST["password"];
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select id, name, email, password from customers where email='$email'");
			$result = $query->fetch();
			if(isset($result->email)){
				if($result->password == md5($password)){
					//dang nhap thanh cong
					$_SESSION["customerId"] = $result->id;
					$_SESSION["customerName"] = $result->name;
					return true;
				}
			}
			return false;
			//---
		}
        public function modelRegister()
        {
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $password = $_POST["password"];
            $name = $_POST["name"];
            $address = $_POST["address"];
            // ma hoa
			$password = md5($password);	
			// 
			$conn = Connection::getInstance();
			$conn->query("insert into customers set name='$name',phone='$phone',password='$password',address='$address',email='$email'");
		}
		public function modelGetAccount($id)
		{
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select * from customers where id = $id");
			//tra ve mot ban ghi
			return $query->fetch();
			//---
		}
		public function modelUpdate($id){
			//---
			$name = $_POST["name"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $address = $_POST["address"];
			$password = $_POST["password"];			
			//---
			$conn = Connection::getInstance();
			$conn->query("update customers set name='$name',email='$email',phone='$phone',address='$address' where id=$id");
			if($password != ""){
				$password = md5($password);
				$conn->query("update customers set password = $password");
			}
			echo "<script>alert('Thay đổi thành công !')</script>";
		}
		public function modelRead($recordPerPage,$cus_id){
			// lấy tổng số bản ghi
			$total = $this->modelTotal($cus_id);
			//lấy tổng số trang
			$numPage = ceil($total/$recordPerPage);
			//lấy số trang trong pagination
			$page = isset($_GET["p"]) && $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//tính số bản ghi cần in
			$from = $page * $recordPerPage;
			//thuc hien truy van
			$conn = Connection::getInstance();
			$query = $conn->query("select * from orders where customer_id=$cus_id order by status desc limit $from, $recordPerPage");
			//tra ve tat ca cac ban truy van duoc
			return $query->fetchAll();
		}
		//ham tinh tong so ban ghi
		public function modelTotal($id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select id from orders where customer_id = $id");
			//lay tong so ban ghi
			return $query->rowCount();
			//---
		}
		public function modelDeleteOrder($id)
        {
            $conn = Connection::getInstance();
			$query = $conn->query("delete from orders where id = $id");
        }
    }
?>