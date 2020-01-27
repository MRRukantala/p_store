<?php

session_start();

include ("../../helper/connection.php");

$nameProduct = $_POST['nama_product'];
$priceProduct = $_POST['price_product'];
$stockProduct = $_POST['stock_product'];
$descriptionProductb = $_POST['deskripsi_product'];
$categoryProduct = $_POST['category_product'];

$MEMBER_ID = $_SESSION['member_id'];
$toko = mysqli_query($CONNECTION, "SELECT store_id from store where member_id = '$MEMBER_ID' ");
$ambilIdToko = mysqli_fetch_assoc($toko);

$idToko = $ambilIdToko['store_id'];



			$ekstensi_diperbolehkan	= array('png','jpg');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];	

			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, ''.$nama);
					$Query = "INSERT INTO product (product_id, name, description, stock, price, store_id, image_id, category_id)
          			VALUES ('coba', '$nameProduct', '$descriptionProductb', '$stockProduct', '$priceProduct', '$idToko', '11', '$categoryProduct')";

          			$QUERYINSERT = mysqli_query($CONNECTION, $Query);

          			$INSERTIMAGE = mysqli_query($CONNECTION, "INSERT INTO image (image_id,image) VALUES ('11','$nama') ");

					var_dump($QUERYINSERT);
					var_dump($INSERTIMAGE);

					if($Query){
						echo 'FILE BERHASIL DI UPLOAD';
					}else{
						echo 'GAGAL MENGUPLOAD GAMBAR';
					}
				}else{
					echo 'UKURAN FILE TERLALU BESAR';
				}
			}else{
				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			}

?>
