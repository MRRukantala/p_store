
<!-- Product Detail -->
<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="bor10 m-t-50 p-t-43 p-b-40">
				<!-- Tab01 -->
				<div class="tab01">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item p-b-10">
							<a class="nav-link active" data-toggle="tab" href="#login" role="tab">Login</a>
						</li>

						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#register" role="tab">Register</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content p-t-43">
						<!-- Login -->
						<div class="tab-pane fade show active" id="login" role="tabpanel">
							<div class="row">
								<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
									<div class="p-b-30 m-lr-15-sm">
										
										<!-- Login-->
										<form class="w-full" method="POST" action="Logic/proses_login.php">
											<div class="row p-b-25">
												<!-- <div class="col-12 p-b-5">
													<label class="stext-102 cl3" for="review">Your review</label>
													<textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="review" name="review"></textarea>
												</div> -->

												<div class="col-sm-6 p-b-5">
													<label class="stext-102 cl3" for="email">E-Mail</label>
													<input class="size-111 bor8 stext-102 cl2 p-lr-20" required id="email" placeholder="E-Mail" type="email" name="email">
												</div>

												<div class="col-sm-6 p-b-5">
													<label class="stext-102 cl3" for="password">Password</label>
													<input class="size-111 bor8 stext-102 cl2 p-lr-20" required id="password" type="password" placeholder="Password" name="password">
												</div>
											</div>

											<button class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10" type="submit">
												Login
											</button>
										</form>
									</div>
								</div>
							</div>
						</div>

						<!-- Register -->
						<div class="tab-pane fade" iframe="tampil" id="register" role="tabpanel">
							<div class="row">
								<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
									<div class="p-b-30 m-lr-15-sm">
										
										<!-- Register-->
										<form class="w-full" method="POST" action="Logic/proses_register.php">
											<div class="row p-b-25">
												<!-- <div class="col-12 p-b-5">
													<label class="stext-102 cl3" for="review">Your review</label>
													<textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="review" name="review"></textarea>
                                                </div> -->
                        
												<div class="col-sm-6 col-lg-12 p-b-5">
													<label class="stext-102 cl3" for="email">E-Mail</label>
													<input class="size-111 bor8 stext-102 cl2 p-lr-20" required id="email" placeholder="E-Mail" type="email" name="email">
												</div>
												
												<div class="col-sm-6 p-b-5">
													<label class="stext-102 cl3" for="password">Password</label>
													<input class="size-111 bor8 stext-102 cl2 p-lr-20" id="password" required type="password" placeholder="Password" name="password">
                                                </div>
                                                
                                                <div class="col-sm-6 p-b-5">
													<label class="stext-102 cl3" for="pasword_validation">Pasword Validation</label>
													<input class="size-111 bor8 stext-102 cl2 p-lr-20" id="password_validation" required type="password" placeholder="Password Validation" name="password">
												</div>
											</div>

											<button class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10" type="submit">
												Register
											</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>