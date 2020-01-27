<!-- Content page -->
<section class="bg0 p-t-104 p-b-116 right   ">
		<div class="container">
			<div class="flex-w flex-tr">
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					<form>
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Add Product
						</h4>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="name_product" placeholder="Your Product Name">
							<img class="how-pos4 pointer-none" src="images/icons/icon-email.png" alt="ICON">
						</div>

                        <div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="number" name="stock" placeholder="Stock of Product">
						</div>

                        <div class="bor8 m-b-20 how-pos4-parent">
                            <div class="rs1-select2 bor8 bg0">
						    <select required class="js-select2" name="mentor" tabindex="1">
                                <option value="">Choose your category product</option>
                                <?php 
                                    while ($ambilDataMentor = mysqli_fetch_array($queryMentorr)) {
                                ?>
                                <option value="<?php echo $ambilDataMentor['id_mentor'] ?>"><?php echo $ambilDataMentor['nama_mentor'] ?></option>    
                                <?php
                                    }
                                ?>
                            </select>
                            <div class="dropDownSelect2"></div>
                            </div>
						</div>

                        <div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="number" name="price" placeholder="Price of Product">
						</div>

						<div class="bor8 m-b-30">
							<textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="description" placeholder="Product Description"></textarea>
						</div>

						<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
							Upload
						</button>
					</form>
				</div>
            </div>
        </div>
</section>   
