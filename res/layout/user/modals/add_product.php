<?php

include 'connection.php';

$QY = mysqli_query($CONNECTION," SELECT * FROM category ");

?>

<!-- Modal Add Product -->
	<div class="wrap-addProduct js-addProduct p-t-60 p-b-20">
		<div class="overlay-addProduct js-hide-addProduct"></div>

		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">

				<button class="how-pos3 hov3 trans-04 js-hide-addProduct">
					<img src="images/icons/icon-close.png" alt="CLOSE">
				</button>

				<div class="row">
				<div class="col-md-6  col-lg-12 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-l-40 p-b-8">
								Add your product
							</h4>

							<p class="stext-102 cl3 p-l-40 p-t-10">
								sell your product here.
							</p>
							
							<!--  -->
						<form action="Logic/store_user/proses_add_product.php" method="POST" enctype="multipart/form-data">
							<div class="p-t-33 p-l-40">
								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Name Product
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<input class="stext-111 cl2 plh3 size-116 p-l-12 p-r-30" type="text" name="nama_product" placeholder="Your Product Name">
										</div>
									</div>
								</div>

                                <div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Stock Product
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<input class="stext-111 cl2 plh3 size-116 p-l-12 p-r-30" type="number" name="stock_product" placeholder="Product stock">
										</div>
									</div>
								</div>

                                <div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Price Product
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<input class="stext-111 cl2 plh3 size-116 p-l-12 p-r-30" type="number" name="price_product" placeholder="Your price product">
										</div>
									</div>
								</div>

                                <div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Description 
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
                                            <textarea placeholder="Deskripsi" name="deskripsi_product" placeholder="Your product description" class="stext-111 cl2 plh3 size-116 p-l-12 p-r-30"> </textarea>
                                        </div>
									</div>
                                </div>
                                
								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Kategori
									</div>
									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="category_product">
												<option>Pilih Product</option>
												<?php 
                                                    while ($fetchkategori = mysqli_fetch_assoc($QY)) {
                                                        ?>
                                                        <option value="<?php echo $fetchkategori['category_id'] ?>"><?php echo $fetchkategori['category_name'] ?></option>    
                                                        <?php
                                                    }
                                                ?>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
                                </div>	

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Image
									</div>
										<div class="size-204  respon6-next">
											<div>
											<div class="card" style="width: 14rem;">
												<div class="card-body d-flex justify-content-center">
													<input type="file" name="file" href="#" class="flex-c-m how-pagination1 hov-btn1 trans-04 m-all-7 active-pagination1">
														+
													</input>
												</div>
											</div>
										</div>		
									</div>
                                </div>

								

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-204 flex-w flex-m respon6-next">
										<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail" type="submit">
											Add Product
										</button>
									</div>
								</div>	
							</div>
						</form>
						</div>
					</div>
			</div>
		</div>
	</div>