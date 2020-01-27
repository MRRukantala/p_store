<?php 


	include 'modals/connection.php';

	$QuerySelect = mysqli_query($CONNECTION,"SELECT p.product_id,p.name,p.price,p.stock,i.image FROM product p inner join image i WHERE
	p.image_id = i.image_id AND p.store_id = (SELECT store_id from store where member_id = '$MEMBER_ID')");


?>
<!-- Shoping Cart -->
	<form class="bg0 p-t-75 p-b-85 m-t-25">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-lg-3 col-xl-3 m-b-50">
					<div class="bor10 p-lr-20 p-t-30 p-b-40  m-r-10 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Store
						</h4>

						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-180">
								<span class="stext-110 cl2">
									Data Produk
								</span>
							</div>
						</div>

						<div class="flex-w flex-t p-t-13 bor12 p-b-13">
							<div class="size-180">
								<span class="stext-110 cl2">
									Data Penjualan
								</span>
							</div>
						</div>

						<div class="flex-w flex-t p-t-13 bor12 p-b-13">
							<div class="size-180">
								<span class="stext-110 cl2">
									Data Pengiriman
								</span>
							</div>
						</div>
 
						<br>

						<!-- <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
							Proceed to Checkout
						</button> -->
					</div>
                </div>

                <div class="col-lg-9 col-xl-9 m-lr-auto m-b-50">
					<div class=" m-lr-0-xl">
				<a href="#" class="">
					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-addProduct">
						 Add Product
					</div>
				</a>

				
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">No</th>
									<th class="column-2">Image</th>
									<th class="column-3">Name</th>
									<th class="column-4">Price</th>
									<th class="column-5 text-center">Action</th>
								</tr>

								<tr class="table_row">
									<?php 
									$no = 1;
									while ($ambil = mysqli_fetch_assoc($QuerySelect)) {
										echo "";?>
										<td class="column-1"><?php echo $no; ?></td>
									<td class="column-2">
										<div class="how-itemcart1">
											<img src="images/product/Screenshot (38).PNG" alt="IMG">
										</div>
									</td>
									<td class="column-3"><?php echo $ambil['name']; ?></td>
									<td class="column-4"><?php echo $ambil['price']; ?></td>
									<td class="column-5 ">
								
										<button class="btn btn-outline-info">Detail</button>
										<button class="btn btn-outline-success">Edit</button>
									</td>
										<?php
									$no++;
									}
									?>									
								</tr>

								
							</table>
						</div>

						<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>


	<?php 

	include_once('modals/add_product.php');
?>


