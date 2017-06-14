<?php include ("include/header.php") ; ?>
		<!-- Begin Login -->
		<div class="login-wrapper">
			<form id="form-login" role="form">
				<h4>Login</h4>
				<p>If you're a member, login here.</p>
				<div class="form-group">
					<label for="inputusername">Username</label>
					<input type="text" class="form-control input-lg" id="inputusername" placeholder="Username">
				</div>
				<div class="form-group">
					<label for="inputpassword">Password</label>
					<input type="password" class="form-control input-lg" id="inputpassword" placeholder="Password">
				</div>
				<ul class="list-inline">
					<li><a href="#">Create new account</a></li>
					<li><a href="#">Request new password</a></li>
				</ul>
				<button type="submit" class="btn btn-white">Log in</button>
			</form>
		</div>
		<!-- End Login -->
		
		<!-- Begin Main -->
		<div role="main" class="main">
			<!-- Begin Main Slide -->
			<section class="main-slide">
				<div id="owl-main-demo" class="owl-carousel main-demo">
					<div class="item" id="item1"><img src="images/content/slides/slider1.jpg" class="img-responsive" alt="Photo">
						<div class="item-caption">
							<div class="item-caption-inner">
								<div class="item-caption-wrap">
									<p class="item-cat"><a href="#">Fall/Winter 2014</a></p>
									<h2>Up to 50% off<br>on selected items</h2>
									<a href="#" class="btn btn-white hidden-xs">Shop Now</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item" id="item2"><img src="images/content/slides/slider2.jpg" class="img-responsive" alt="Photo">
						<div class="item-caption">
							<div class="item-caption-inner">
								<div class="item-caption-wrap">
									<p class="item-cat"><a href="#">Top</a></p>
									<h2>25% off<br>for pink swim</h2>
									<a href="#" class="btn btn-white hidden-xs">Shop Now</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item" id="item3"><img src="images/content/slides/slider3.jpg" class="img-responsive" alt="Photo">
						<div class="item-caption">
							<div class="item-caption-inner">
								<div class="item-caption-wrap">
									<p class="item-cat"><a href="#">Panties</a></p>
									<h2>Free shipping<br>on $50 plus $20</h2>
									<a href="#" class="btn btn-white hidden-xs">Shop Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Main Slide -->
			
			<!-- Begin Ads -->
			<section class="ads">
				<div class="container">
					<div class="row">
						<div class="col-xs-4 animation">
							<a href="#"><img src="images/content/products/ad-1.png" class="img-responsive" alt="Ad"></a>
						</div>
						<div class="col-xs-4 animation">
							<a href="#"><img src="images/content/products/ad-2.png" class="img-responsive" alt="Ad"></a>
						</div>
						<div class="col-xs-4 animation">
							<a href="#"><img src="images/content/products/ad-3.png" class="img-responsive" alt="Ad"></a>
						</div>
					</div>
				</div>
			</section>
			<!-- End Ads -->
			
			<!-- Begin Top Selling -->
			<section class="products-slide">
				<div class="container">
					<h2 class="title"><span>Top Selling</span></h2>
					<div class="row">
						<div id="owl-product-slide" class="owl-carousel product-slide">
								<?php
								$query1 = "SELECT * FROM tbl_products WHERE status ='1'";
								$result1 = mysqli_query($conn, $query1);
								$rows = mysqli_fetch_all($result1);
								foreach($rows as $k=>$v)
								{ 
									$color = "SELECT * FROM color_tbl WHERE tbl_product_id ='".$v[0]."' ";
									$res_color = mysqli_query($conn,$color);
									$row_color = mysqli_fetch_assoc($res_color);
									
							?>
							<div class="col-md-12 animation">
								<div class="item product">
								
									<div class="product-thumb-info">
										
										<div class="product-thumb-info-image">
											<span class="product-thumb-info-act">
												<a href="javascript:void(0);" data-toggle="modal" data-target=".quickview-wrapper" class="view-product">
													<span><i class="fa fa-external-link"></i></span>
												</a>
												<a href="product_list.php?id=<?php echo $v[0] ?>" class="add-to-cart-product">
													<span><i class="fa fa-shopping-cart"></i></span>
												</a>
											</span>
											<img alt="" class="img-responsive" src="images/content/products/<?php echo $row_color['product_image'];?>">
										</div>
										
										<div class="product-thumb-info-content">
											<span class="price pull-right"><?php echo $v[4];?></span>
											<h4><a href="shop-product-detail2.html"><?php echo $v[2];?></a></h4>
											
										</div>
									</div>
								</div>
							</div>
								<?php }?>
						</div>
					</div>
				</div>
			</section>
			<!-- End Top Selling -->
			
			<!-- Begin Lookbook Women -->
			<section id="lookbook">
				<div class="container">
					<div class="lookbook">
						<h2><a href="#">Lookbook Women</a></h2>
						<p>Etiam aliquam risus ante, quis ultrices enim porta a. Integer et dolor sit amet enim feugiat faucibus. Donec sit amet egestas orci. Proin facilisis mi ornare turpis sollicitudin; vel rutrum est viverra. Vestibulum hendrerit egestas semper.</p>
					</div>
				</div>
			</section>
			<!-- End Lookbook Women -->
			
			<!-- Begin New Products -->
			<section class="product-tab">
				<div class="container">
					<h2 class="title"><span>New Products</span></h2>
					<!-- Nav tabs -->
					<ul class="nav nav-tabs pro-tabs text-center animation" role="tablist">
					<?php 
								$sql2 ="SELECT * FROM tbl_categories WHERE status ='1' ";
								$res2 = mysqli_query($conn, $sql2);
								//$temp = '';
								//print_r($result1);
								while ($row2= mysqli_fetch_assoc($res2))
								 { 
							         $class = '';
									
									if($temp==0)
									
										$class = 'active';
										$temp = 1; 
										?>
							
						<li><a onclick="variables('<?php echo $row2['Categories'];?>','MEN' ,'WOMEN' ,'KIDS' ,'ELECTRONICS' ,'BOOKS')" role="tab" data-toggle="tab"><?php echo $row2['Categories'] ;?></a></li>
				        
				
				  <?php }?>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="man">
							<div class="row" id="MEN">
							<?php 
								$sql3="SELECT * FROM tbl_sub_child_cat WHERE tbl_sub_cat_id ='1'&& status ='1'  ";
								$res3 = mysqli_query($conn, $sql3);
								//print_r($result1);
								while ($row6= mysqli_fetch_assoc($res3))
								 {
									 //var_dump($row6);
								 $id1=$row6['id'];
								 //echo ($id1);
								 $sql_1="SELECT * FROM tbl_products WHERE sub_child_cat_id ='".$id1."' && status ='1'";
								 $res_3 = mysqli_query($conn, $sql_1);
								 $resu = mysqli_fetch_all($res_3); 
								 foreach($resu as $k=>$v)

							{	
							       // print_r($v);
									$color_men = "SELECT * FROM color_tbl WHERE tbl_product_id ='".$v[0]."' ";
									$res_clr = mysqli_query($conn, $color_men);
									//var_dump($res_clr);
									$row_clr_men = mysqli_fetch_assoc($res_clr);
							
							# echo "<pre>";
							//var_dump($color_men); 
							?>	
								<div class="col-xs-6 col-sm-3 animation">
									<div class="product">
										<div class="product-thumb-info">
											<div class="product-thumb-info-image">
												<span class="product-thumb-info-act">
													<a href="javascript:void(0);" data-toggle="modal" data-target=".quickview-wrapper" class="view-product">
														<span><i class="fa fa-external-link"></i></span></a>
													<a href="product_list.php?id=<?php echo $v[0] ?>" class="add-to-cart-product">
														<span><i class="fa fa-shopping-cart"></i></span>
													</a>
												</span>
												<img alt="" class="img-responsive" src="images/content/products/<?php echo $row_clr_men['product_image'];?>">
											</div>
											<div class="product-thumb-info-content">
												<span class="price pull-right"><?php echo $v[4];?></span>
												<h4><a href="shop-product-detail2.html"><?php echo $v[2];?></a></h4>
												<span class="item-cat"><small><a href="#"><?php echo $v[7];?> </a></small></span>
												
											</div>
										</div>
									</div>
								</div>
								<?php } }
								?>
							</div>
							<div class="row" id="WOMEN" style='display:none' >
							<?php 
								$sql3_1="SELECT * FROM tbl_sub_child_cat WHERE tbl_sub_cat_id ='7'&& status ='1'  ";
								$res3_1 = mysqli_query($conn, $sql3_1);
								//print_r($result1);
								while ($row6_1= mysqli_fetch_assoc($res3_1))
								 {
								
									$id2=$row6_1['id'];
									//var_dump($id2);
								 $sql_11="SELECT * FROM tbl_products WHERE sub_child_cat_id='".$id2."' && status ='1'";
								 $res_31 = mysqli_query($conn, $sql_11);
								 $resu_11 = mysqli_fetch_all($res_31);
								foreach($resu_11 as $k=>$v)
								{	
									$color_women = "SELECT * FROM color_tbl WHERE tbl_product_id ='".$v[0]."' ";
									$res_clr_women = mysqli_query($conn, $color_women);
									$row_clr_women = mysqli_fetch_assoc($res_clr_women);
									
								//print_r($v);?>
							 <div class="col-xs-6 col-sm-3 animation">
									<div class="product">
										<div class="product-thumb-info">
											<div class="product-thumb-info-image">
												<span class="product-thumb-info-act">
													<a href="javascript:void(0);" data-toggle="modal" data-target=".quickview-wrapper" class="view-product">
														<span><i class="fa fa-external-link"></i></span>
													</a>
													<a href="product_list.php?id=<?php echo $v[0] ?>" class="add-to-cart-product">
														<span><i class="fa fa-shopping-cart"></i></span>
													</a>
												</span>
												<img alt="" class="img-responsive" src="images/content/products/<?php echo $row_clr_women['product_image'];?>">
											</div>
											<div class="product-thumb-info-content">
												<span class="price pull-right"><?php echo $v[4];?></span>
												<h4><a href="shop-product-detail2.html"><?php echo $v[2];?></a></h4>
												<span class="item-cat"><small><a href="#"><?php echo $v[7];?></a></small></span>
											</div>
										</div>
									</div>
								</div>
								 <?php }
								 } ?>
							 </div>
							 <div class="row" id="KIDS" style='display:none'>
							<?php 
								$sql3_12="SELECT * FROM tbl_sub_child_cat WHERE tbl_sub_cat_id ='13' && status ='1'";
								$res3_12 = mysqli_query($conn, $sql3_12);
								//print_r($result1);
								while($row3_21= mysqli_fetch_assoc($res3_12))
								 {
								
									$id3=$row3_21['id'];
									//var_dump($id2);
								 $sql3_2="SELECT * FROM tbl_products WHERE sub_child_cat_id='".$id3."' && status ='1'";
								 $res3_2 = mysqli_query($conn, $sql3_2);
								 $resu3_2_1 = mysqli_fetch_all($res3_2);
								foreach($resu3_2_1 as $y=>$z)
								{
									//print_r($z);
									$color_kids = "SELECT * FROM color_tbl WHERE tbl_product_id ='".$z[0]."' ";
									$res_color_kids = mysqli_query($conn,$color_kids);
									$row_color_kids = mysqli_fetch_assoc($res_color_kids);
							?>
							 <div class="col-xs-6 col-sm-3 animation">
									<div class="product">
										<div class="product-thumb-info">
											<div class="product-thumb-info-image">
												<span class="product-thumb-info-act">
													<a href="javascript:void(0);" data-toggle="modal" data-target=".quickview-wrapper" class="view-product">
														<span><i class="fa fa-external-link"></i></span>
													</a>
													<a href="product_list.php?id=<?php echo $z[0] ?>" class="add-to-cart-product">
														<span><i class="fa fa-shopping-cart"></i></span>
													</a>
												</span>
												<img alt="" class="img-responsive" src="images/content/products/<?php echo $row_color_kids['product_image'];?>">
											</div>
											<div class="product-thumb-info-content">
												<span class="price pull-right"><?php echo $z[4];?></span>
												<h4><a href="shop-product-detail2.html"><?php echo $z[2];?></a></h4>
												<span class="item-cat"><small><a href="#"><?php echo $z[7];?> </a></small></span>
											</div>
										</div>
									</div>
								</div>
								 <?php }
								 } ?>
							 </div>
							 
							 <div class="row" id="ELECTRONICS" style='display:none'>
							<?php 
								$sql4="SELECT * FROM tbl_sub_child_cat WHERE tbl_sub_cat_id ='18'&& status ='1'  ";
								$res4 = mysqli_query($conn, $sql4);
								//print_r($result1);
								while ($row4= mysqli_fetch_assoc($res4))
								 {
								
									$id4=$row4['id'];
									//var_dump($id2);
								 $sql_4_1="SELECT * FROM tbl_products WHERE sub_child_cat_id ='".$id4."' && status ='1'";
								 $res_4_1 = mysqli_query($conn, $sql_4_1);
								 $resu_4_1 = mysqli_fetch_all($res_4_1);
								foreach($resu_4_1 as $k=>$v)
								{
									$color_elect = "SELECT * FROM color_tbl WHERE tbl_product_id ='".$v[0]."' ";
									$res_color_elect = mysqli_query($conn,$color_elect);
									$row_color_elect = mysqli_fetch_assoc($res_color_elect);
							?>
							 <div class="col-xs-6 col-sm-3 animation">
									<div class="product">
										<div class="product-thumb-info">
											<div class="product-thumb-info-image">
												<span class="product-thumb-info-act">
													<a href="javascript:void(0);" data-toggle="modal" data-target=".quickview-wrapper" class="view-product">
														<span><i class="fa fa-external-link"></i></span>
													</a>
													<a href="product_list.php?id=<?php echo $v[0] ?>" class="add-to-cart-product">
														<span><i class="fa fa-shopping-cart"></i></span>
													</a>
												</span>
												<img alt="" class="img-responsive" src="images/content/products/<?php echo $row_color_elect['product_image'];?>">
											</div>
											<div class="product-thumb-info-content">
												<span class="price pull-right"><?php echo $v[4];?></span>
												<h4><a href="shop-product-detail2.html"><?php echo $v[2];?></a></h4>
												<span class="item-cat"><small><a href="#"><?php echo $v[8];?> </a></small></span>
											</div>
										</div>
									</div>
								</div>
								 <?php }
								 } ?>
							 </div>
						 <div class="row" id="BOOKS" style='display:none' >
									<?php 
										$sql5="SELECT * FROM tbl_sub_child_cat WHERE tbl_sub_cat_id ='23'&& status ='1'  ";
										$res5 = mysqli_query($conn, $sql5);
										//print_r($result1);
										while ($row5= mysqli_fetch_assoc($res5))
										 {
										
											$id5=$row5['id'];
											//var_dump($id2);
										 $sql_5_1="SELECT * FROM tbl_products WHERE sub_child_cat_id ='".$id5."' && status ='1'";
										 $res_5_1 = mysqli_query($conn, $sql_5_1);
										 $resu_5_1 = mysqli_fetch_all($res_5_1);
										foreach($resu_5_1 as $k=>$v)
										{
											//print_r($v);
											$color_books = "SELECT * FROM color_tbl WHERE tbl_product_id ='".$v[0]."' ";
											$res_color_books = mysqli_query($conn,$color_books);
											$row_color_books = mysqli_fetch_assoc($res_color_books);
									?>
							 <div class="col-xs-6 col-sm-3 animation">
									<div class="product">
										<div class="product-thumb-info">
											<div class="product-thumb-info-image">
												<span class="product-thumb-info-act">
													<a href="javascript:void(0);" data-toggle="modal" data-target=".quickview-wrapper" class="view-product">
														<span><i class="fa fa-external-link"></i></span>
													</a>
													<a href="product_list.php?id=<?php echo $v[0] ?>" class="add-to-cart-product">
														<input type="hidden" name="product_id" id="<?php echo $v[0];?>"><span><i class="fa fa-shopping-cart"></i></span>
													</a>
												</span>
												<img alt="" class="img-responsive" src="images/content/products/<?php echo $row_color_books['product_image'];?>">
											</div>
											<div class="product-thumb-info-content">
												<span class="price pull-right"><?php echo $v[4];?></span>
												<h4><a href="shop-product-detail2.html"><?php echo $v[2];?></a></h4>
												<span class="item-cat"><small><a href="#"><?php echo $v[13];?> </a></small></span>
											</div>
										</div>
									</div>
								</div>
								 <?php }
								 } ?>
							</div>
							
						
						</div>
					</div>
					
				</div>
			</section>
			<!-- End New Products -->
			
			<!-- Begin Parallax -->
			<section class="pi-parallax" data-stellar-background-ratio="0.6">
				<div class="container">
					<div id="owl-text-slide" class="owl-carousel">
						<div class="item">
							<blockquote>
								<p>Design is a funny word. Some people think design means how it looks. But of course, if you dig deeper, it’s really how it works.</p>
								<footer>by <cite title="Steve Jobs">Steve Jobs</cite></footer>
							</blockquote>
						</div>
						<div class="item">
							<blockquote>
								<p>They may forget what you said, but they will never forget how you made them feel.</p>
								<footer>by <cite title="Steve Jobs">Carl W. Buechner</cite></footer>
							</blockquote>
						</div>
					</div>
				</div>
			</section>
			<!-- End Parallax -->
			
			<!-- Begin Latest Blogs -->
			<section class="latest-blog">
				<div class="container">
					<h2 class="title"><span>Latest from the blog</span></h2>
					<div class="row">
						<div class="col-xs-6 animation">
							<article class="post">
								<div class="post-image">
									<span class="post-info-act">
										<a href="blog-single.html"><i class="fa fa-caret-right"></i></a>
									</span>
									<img class="img-responsive" src="images/content/blog/demo-1.jpg" alt="Blog">
								</div>
								<h3><a href="blog-single.html">Paris Fashion Week S/S 2014: womenswear collections</a></h3>
								<p class="post-meta">15th December 2014</p>
							</article>
						</div>
						<div class="col-xs-6 animation">
							<article class="post">
								<div class="post-image">
									<span class="post-info-act">
										<a href="blog-single.html"><i class="fa fa-camera"></i></a>
									</span>
									<img class="img-responsive" src="images/content/blog/demo-2.jpg" alt="Blog">
								</div>
								<h3><a href="blog-single.html">Show tunes: London Fashion Week S/S 2014's runway playlist</a></h3>
								<p class="post-meta">15th December 2014</p>
							</article>
						</div>
					</div>
				</div>
			</section>
			<!-- End Latest Blogs -->
			
		</div>
		<!-- End Main -->
		
		<!-- Begin footer -->
		<?php include ("include/footer.php") ; ?>
		