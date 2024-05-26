<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: ./pages/dangnhap.php');
    exit();
}
?>
<html>
<head>
	<title>4 GIRLS | Trang chủ</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./css/grid.css">
	<link rel="stylesheet" type="text/css" href="./css/responsive.css">
	<link rel="stylesheet" type="text/css" href="./main.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<form action="timkiem.php" method="POST">
	<div class="app">
		<div class="header">
			<div class="grid wide">
				<div class="header-main">
					<div class="logo">
					<a href="./index.php"><img src="https://i.pinimg.com/736x/f5/f2/70/f5f270d9ddd51a81d705852a88c9e537.jpg" width="150" height="120"></a>
					</div>
					<div class="search">
						<input type="text" name="s" class="search-bar" placeholder="Tìm kiếm">
						<style>.tim{height: 40px;}</style>
						<input class="tim" type="submit" value="Tìm kiếm">
					</div>
					<div class="contact">
						<p>Hotline: 0123456789</p>
						<p>Email: <a href="mailto:4girls@gmail.com" style="color: #333;">4girls@gmail.com</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<!--Phan giua-->
<!--phan cai thanh-->
	<div class="navigation-bar">
		<ul class="navbar-list">
			<li class="navbar-item"><a href="index.php" class="navbar-link">Trang chủ</a></li>
			<li class="navbar-item"><a href="./pages/gioithieu.php" class="navbar-link">Giới thiệu</a></li>
		</ul>
		<ul class="navbar-list">
			<li class="navbar-item"><a href="./pages/giohang.php" class="navbar-link">Giỏ hàng</a></li>
			<li class="navbar-item"><a href="./taikhoan.php" class="navbar-link">Tài khoản</a></li>
			<li class="navbar-item"><a href="./pages/dangxuat.php" class="navbar-link">Đăng xuất</a></li>
		</ul>
	</div>
<!--phan trang chuyen dong-->
<div class="slideshow">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
   		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
   		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
   		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
   		<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  		</ol>

  		<div class="carousel-inner">
    		<div class="carousel-item active">
    			<img class="d-block w-100 h-50 " src="https://scontent-hkg4-1.xx.fbcdn.net/v/t39.30808-6/291097882_2799863680322203_5056813066739068509_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=5f2048&_nc_ohc=Y-VaCPrsm6MQ7kNvgFRhatk&_nc_ht=scontent-hkg4-1.xx&oh=00_AYBvSVFxvV1YC5X5IqxK3bNQVhcbe82SHu_1gjMkULRGBA&oe=664923F4" width="500 px" height="200 px" alt="First slide">
   		</div>
    		<div class="carousel-item">
      		<img class="d-block w-100 h-50" src="https://scontent.fdad3-4.fna.fbcdn.net/v/t39.30808-6/344318729_798030291891711_9028796871172650704_n.png?stp=dst-png_s960x960&_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_ohc=XP2bfUbLbv4Q7kNvgFyKO61&_nc_ht=scontent.fdad3-4.fna&oh=00_AYAK9fEBVx1enblx_XEicaN5AY10ugRtme9F3Jlkvar9qw&oe=66492D01" alt="Second slide">
    		</div>
    		<div class="carousel-item">
     			<img class="d-block w-100 h-50" src="https://mir-s3-cdn-cf.behance.net/project_modules/1400/cf8c5599420499.5f09d760d115b.jpg" alt="Third slide">
   		</div>
   		<div class="carousel-item">
     			<img class="d-block w-100 h-50" src="https://assets.dochipo.com/media/companies/dochipo/templates/6416e784e28a41c98d701ef5/screenshot.png" alt="Fourth slide">
   		</div>
  		</div>

  			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
   			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
   			<span class="sr-only">Previous</span>
  			</a>
  			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
   			<span class="carousel-control-next-icon" aria-hidden="true"></span>
   			<span class="sr-only">Next</span>
  			</a>
	</div>		
</div>

<!--thanh dung danh muc-->
<div class="container">
	<div class="grid wide">
		<div class="row sm-gutter grid-content">
			<div class="column l-2 me-0 s-0">
						<nav class="category">
							<h3 class="category-heading">
								<i class="category-heading-icon fas fa-bars"></i>
								Danh mục
							</h3>
							<ul class="category-list">
								<li class="category-item category-item--active">
									
									<?php
										$conn = mysqli_connect("localhost", "root", "", "dacs2");
										$sql = "SELECT * From danhmuc";
										$ketqua = mysqli_query($conn,$sql);
										while($row=mysqli_fetch_array($ketqua)){
											echo '<a href="danhmuc.php?iddanhmuc= '.$row['id'].'" class="category-item__link">'.$row['tendanhmuc'].'</a>';
										}
									?>
								</li>
							</ul>
						</nav>
					</div>
					<div class="column l-10 me-12 s-12">
						<div class="home-filter">
							<span class="label" style="margin-right: 16px;">Sắp xếp theo</span>
							<button class="home-filter-btn btn">Phổ biến</button>
							<button class="home-filter-btn btn btn--active">Mới nhất</button>
							<button class="home-filter-btn btn">Bán chạy</button>
						</div>
<?php
// PHẦN XỬ LÝ PHP
// BƯỚC 1: KẾT NỐI CSDL
$conn = mysqli_connect('localhost', 'root', '', 'dacs2');
 
        // BƯỚC 2: TÌM TỔNG SỐ RECORDS
        $result = mysqli_query($conn, 'select count(id) as total from sanpham');//đếm số hàng trong sanphambảng và gán kết quả cho total.
        $row = mysqli_fetch_assoc($result);//cố gắng tìm nạp hàng đầu tiên của tập kết quả được truy vấn $result. $row: Biến này bây giờ sẽ chứa một mảng kết hợp (cặp khóa-giá trị) đại diện cho hàng đầu tiên hoặc NULLnếu không có hàng nào.
        $total_records = $row['total'];//xuất giá trị của khóa 'total'từ $rowmảng và gán nó cho biến $total_records.
			//Giả sử truy vấn thành công và có ít nhất một hàng trong kết quả: Biến $total_recordsbây giờ sẽ chứa tổng số bản ghi (hàng) trong sanphambảng.

        // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;// gán số trang hiện tại cho biến $current_page. isset($_GET['page']): Phần này kiểm tra xem khóa có tên "page"có tồn tại trong $_GETmảng siêu toàn cầu hay không (chứa các tham số chuỗi truy vấn URL).Nếu khóa tồn tại (có nghĩa là URL chứa tham pagesố), mã sẽ chuyển sang phần tiếp theo.Ngược lại mã sẽ gán 1 cho $current_page, giả sử trang đầu tiên sẽ được hiển thị theo mặc định.
        $limit = 10;
 
        // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
        // tổng số trang
        $total_page = ceil($total_records / $limit);//tính toán tổng số trang cần thiết để hiển thị tất cả các bản ghi từ bảng cơ sở dữ liệu của bạn ở chế độ xem phân trang
		  //ceil():Hàm này lấy kết quả của phép chia và làm tròn nó lên số nguyên gần nhất.
 
        // Giới hạn current_page trong khoảng 1 đến total_page
        if ($current_page > $total_page){
            $current_page = $total_page;
        }
        else if ($current_page < 1){
            $current_page = 1;
        }
 
        // Tìm Start
        $start = ($current_page - 1) * $limit;//tính toán độ lệch bắt đầu dựa trên số trang hiện tại ($current_page) và số lượng bản ghi trên mỗi trang ($limit).
 
        // BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
        // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
		  //truy vấn lấy ra một tập hợp con các bản ghi cụ thể từsanphambàn,được sắp xếp theo ID theo thứ tự giảm dần và giới hạn số lượng bản ghi trên mỗi trang dựa trên số liệu được tính toán$startVà$limitcác giá trị.Điều này cho phép tải và hiển thị hiệu quả các tập dữ liệu lớn trong chế độ xem phân trang.
        $result = mysqli_query($conn, "SELECT * FROM sanpham ORDER BY id DESC  LIMIT $start, $limit");//truy xuất một bộ bản ghi cụ thể từ bảng sanpham, triển khai phân trang dựa trên các giá trị $startvà tính toán trước đó $limit.
		  	//ORDER BY id DESC:sắp xếp kết quả theo thứ tự giảm dần dựa trên idcột.là các bản ghi gần đây nhất (ID cao nhất) sẽ được truy xuất trước tiên.
        ?>
		
<!-- BÊN DƯỚI LÀ sản phẩm -->
	<div class="home-product">
	<div class="row sm-gutter">
		<?php
			while($row=mysqli_fetch_assoc($result)){
				if ($row['soluong'] >0  ){
					echo '<div class="column l-2-4 me-4 s-6" >
						<a class="home-product-item" href="./pages/sanpham.php?id= '.$row['id'].'">
							<div class="home-product-item__img" style="background-image:url('.$row['hinhanh'] .')"></div>
							<h4 class="home-product-item__name">'.$row['tensp'].'</h4>
							<div class="home-product-item__price">
								<div class="home-product-item__price-old"> Giá '.number_format($row['giasp'],3).'đ</div>
							</div>
							<div class="home-product-item__action">
								<span class="home-product-item__like home-product-item__liked">
									<i class="home-product-item__like-none far fa-heart"></i>
									<i class="home-product-item__like-fill fas fa-heart"></i>
								</span>
								<div class="home-product-item__rating">
									<i class="home-product-item__star-gold fas fa-star"></i>
									<i class="home-product-item__star-gold fas fa-star"></i>
									<i class="home-product-item__star-gold fas fa-star"></i>
									<i class="home-product-item__star-gold fas fa-star"></i>
									<i class="home-product-item__star-gold fas fa-star"></i>
								</div>
								<div>
								<br>
								<span class="home-product-item__sold">Số lượng:'.$row['soluong'].'</span>
								</div>
							</div>
							
							
						</a>
					</div>';
				}
				else {
						echo '<div class="column l-2-4 me-4 s-6" >
							<a class="home-product-item" href="./pages/sanpham.php?id= '.$row['id'].'">
								<div class="home-product-item__img" style="background-image:url('.$row['hinhanh'] .')"></div>
								<h4 class="home-product-item__name">'.$row['tensp'].'</h4>
								<div class="home-product-item__price">
									<div class="home-product-item__price-old">'.number_format($row['giasp'],3).'đ</div>
									<div class="home-product-item__price-new">'.number_format($row['giasp'],3).'đ</div>
								</div>
								<div class="home-product-item__action">
									<span class="home-product-item__like home-product-item__liked">
										<i class="home-product-item__like-none far fa-heart"></i>
										<i class="home-product-item__like-fill fas fa-heart"></i>
									</span>
									<div class="home-product-item__rating">
										<i class="home-product-item__star-gold fas fa-star"></i>
										<i class="home-product-item__star-gold fas fa-star"></i>
										<i class="home-product-item__star-gold fas fa-star"></i>
										<i class="home-product-item__star-gold fas fa-star"></i>
										<i class="home-product-item__star-gold fas fa-star"></i>
									</div>
									<span class="home-product-item__sold">Số lượng: 0</span>
								</div>
								
							
								
							</a>
						</div>';	
				}
			}			
		?>
	</div>
	</div>
<!-- BÊN trên LÀ sản phẩm -->

					<div class="pagination">
						<?php 
							// PHẦN HIỂN THỊ PHÂN TRANG
							// BƯỚC 7: HIỂN THỊ PHÂN TRANG

							// nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
							if ($current_page > 1 && $total_page > 1){
								echo '<a href="./index.php?page='.($current_page-1).'"> <font size="6px">
									<i class="page-control-icon fas fa-angle-left"></i></font> </a>  ';
							}
								// Lặp khoảng giữa
							for ($i = 1; $i <= $total_page; $i++){
								// Nếu là trang hiện tại thì hiển thị thẻ span
								// ngược lại hiển thị thẻ a
									if ($i == $current_page){
										echo '<span><font size="6px">'.$i.'</font></span>';
									}
									else{
										echo '<a href="./index.php?page=  '.$i.'  "><font size="6px">'.$i.'</font></a> | ';
									}
								}
							// nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
								if ($current_page < $total_page && $total_page > 1){
									echo '<a href="./index.php?page='.($current_page+1).'">  <font size="6px">
									<i class="page-control-icon fas fa-angle-right"></i></font></a>';
								}
						?>
					</div>
			</div>
		</div>
	</div>
</div>
<footer>
		<div class="footer">
			<div class="grid wide">
				<div class="row">
					<div class="column l-2-4 me-4 s-6">
						<h3 class="footer__heading">Chăm sóc khách hàng</h3>
						<ul class="footer-list">
							<li class="footer-item">
								<a class="footer-item-link">Trung tâm trợ giúp</a>
							</li>
							<li class="footer-item">
								<a class="footer-item-link">TT Mail</a>
							</li>
							<li class="footer-item">
								<a class="footer-item-link">Hướng dẫn mua hàng</a>
							</li>
						</ul>
					</div>
					<div class="column l-2-4 me-4 s-6">
						<h3 class="footer__heading">Giới thiệu</h3>
						<ul class="footer-list">
							<li class="footer-item">
								<a class="footer-item-link">Giới thiệu</a>
							</li>
							<li class="footer-item">
								<a class="footer-item-link">Tuyển dụng</a>
							</li>
							<li class="footer-item">
								<a class="footer-item-link">Điều khoản</a>
							</li>
						</ul>
					</div>
					<div class="column l-2-4 me-4 s-6">
						<h3 class="footer__heading">Tiêu chí</h3>
						<ul class="footer-list">
							<li class="footer-item">
								<a  class="footer-item-link">Chất lượng</a>
							</li>
							<li class="footer-item">
								<a  class="footer-item-link">Giá tốt nhất</a>
							</li>
							<li class="footer-item">
								<a  class="footer-item-link">Tất cả vì khách hàng</a>
							</li>
						</ul>
					</div>
					<div class="column l-2-4 me-4 s-6">
						<h3 class="footer__heading">Theo dõi</h3>
						<ul class="footer-list">
							<li class="footer-item">
								<a  class="footer-item-link">
									<i class="fab fa-facebook"></i>
									Facebook
								</a>
							</li>
							<li class="footer-item">
								<a class="footer-item-link">
									<i class="fab fa-instagram"></i>
									Instagram
								</a>
							</li>
						</ul>
					</div>
					<div class="column l-2-4 me-4 s-6">
                  <h3 class="footer__heading">Vào cửa hàng trên ứng dụng</h3>
                  <div class="footer__dowload">
                     <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/5b6e787c2e5ee052.png" width="80" height="60" alt="Dowload QR" class="footer__dowload-qr">
                     <div class="footer__dowload-apps">
                        <a class="footer__dowload-app-link">
                           <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/1fddd5ee3e2ead84.png" width="70" height="30"alt="Google play" class="footer__dowload-app-img">
                           </a>
                        <a class="footer__dowload-app-link">
                           <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/assets/135555214a82d8e1.png" width="70" height="30" alt="App Store" class="footer__dowload-app-img">
                        </a>
                     </div>
                  </div>
               </div>
				</div>
			</div>
			<div class="footer__bottom">
				<div class="grid wide">
					<p>© 2024 - Bản quyền thuộc về 4 GIRLS</p>
				</div>
			</div>
		</div>
</footer>
</body>
</html>