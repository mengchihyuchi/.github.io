<!DOCTYPE html>

<html lang="zh-Hant-TW">

<head>
	<title>MOMO 貓萌家潤丨貓的專業美容︱商品嚴選︱台南在地</title>
	<meta charset="utf-8" />
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="MOMO 貓萌家潤是台南專業貓咪美容專家，提供溫和舒適的貓咪專屬美容服務，嚴選貓咪用品，為您的愛貓打造最佳照護。" name="description" />
	<meta content="貓咪美容, 台南貓咪美容, 貓咪洗澡, 貓咪剪指甲, 貓咪用品, 貓咪SPA, 貓咪專業護理" name="keywords" />
	<meta content="MOMO 貓萌家潤" name="author" />
	<link href="images/favicon.ico" rel="icon" type="image/x-icon" />
	<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
	<link href="css/bootstrap.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="css/responsive.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="css/camera.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="css/style.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Raleway:100" rel="stylesheet" type="text/css" />
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/superfish.js" type="text/javascript"></script>
	<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
	<script src="js/camera.js" type="text/javascript"></script>
	<script src="js/jquery.cookie.js" type="text/javascript"></script>
	<script src="js/jcarousel.js" type="text/javascript"></script>
	<script>
		jQuery(document).ready(function() {
			jQuery('.camera_wrap').camera();
			jQuery('.camera_prev, .camera_next, ul.social li a img').animate({
				'opacity': '.35'
			}, 10);
			jQuery('.camera_prev, .camera_next, ul.social li a img').hover(
				function() {
					jQuery(this).animate({
						'opacity': '1'
					}, 150);
				},
				function() {
					jQuery(this).animate({
						'opacity': '.35'
					}, 250);
				}
			);

			//	Responsive layout, resizing the items
			$('.carousel.main ul').carouFredSel({
				auto: 4000,
				responsive: true,
				width: '100%',
				scroll: 1,
				prev: '#prev',
				next: '#next',
				pagination: false,
				mousewheel: false,
				swipe: {
					onMouse: true,
					onTouch: true
				},
				items: {
					width: 270,
					height: 'auto', //	optionally resize item-height
					visible: {
						min: 1,
						max: 4
					}
				}
			});

			// 滾動位置記憶功能 (已優化)
			// 當網址中沒有錨點(#)時，才恢復上次的滾動位置
			$(window).on('beforeunload', function() {
				localStorage.setItem('scrollpos', $(window).scrollTop());
			});

			var scrollpos = localStorage.getItem('scrollpos');
			if (scrollpos && !window.location.hash) {
				$(window).scrollTop(scrollpos);
			}
			// 每次載入後都清除，避免影響下一次無關的操作
			localStorage.removeItem('scrollpos');
		});
	</script>
	<script src="js/jquery.mobile.customized.min.js" type="text/javascript"></script>
	</link>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
</head>

<body>
	<div class="top_padding"></div>
	<div id="main">
		<header>
			<div class="clearfix">
				<a class="logo" href="index.php">貓 萌 家 潤<span>提供高品質的寵物美容服務與精選用品，讓毛孩健康美麗，讓主人安心方便。</span></a>
			</div>
			<div id="nav_section">
				<div class="container">
					<div class="row">
						<div class="span12">
							<div class="navbar navbar_ clearfix">
								<div class="navbar-inner navbar-inner_">
									<div class="container">
										<a class="btn btn-navbar" data-target=".nav-collapse_"
											data-toggle="collapse">MENU</a>
										<div class="nav-collapse nav-collapse_ collapse">
											<ul class="nav sf-menu">
												<li class="active">
													<a href="index.php">
														HOME
													</a>
												</li>
												<li class="sub-menu">
													<a>
														貓潤印記
													</a>
													<ul>
														<li>
															<a href="index-1.php">關於我們</a>
														</li>
														<li>
															<a href="index-1_2.php">萌寵專欄</a>
														</li>
													</ul>
												</li>
												<li>
													<a href="index-2.php">
														貓潤美容
													</a>
												</li>
												<li>
													<a href="index-3.php">
														貓潤嚴選
													</a>
												</li>
												<li>
													<a href="index-4.php">
														服務據點
													</a>
												</li>
												<li><a href="cat_records.php">貓咪日誌</a></li>
												<li class="sub-menu">
													<a>
														成果發表
													</a>
													<ul>
														<li>
															<a href="admin_login.php">後台登入</a>
														</li>
														<li>
															<a href="#">E-BOOK</a>
														</li>
														<li>
															<a href="#">專題說明</a>
														</li>
														<li>
															<a href="#">專題影片</a>
														</li>
													</ul>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slider">
				<div class="camera_wrap">
					<div data-src="images/slide_1.jpg">
						<div class="camera_caption">
							<div class="container">
								<p>
									貓咪友善環境，美容變享受
								</p>
							</div>
						</div>
					</div>
					<div data-src="images/slide_2.jpg">
						<div class="camera_caption">
							<div class="container">
								<p>
									專業手法，貓咪點頭的安心保證
								</p>
							</div>
						</div>
					</div>
					<div data-src="images/slide_3.jpg">
						<div class="camera_caption">
							<div class="container">
								<p>
									專業接送，讓美容變成輕鬆事
								</p>
							</div>
						</div>
					</div>
					<div data-src="images/slide_4.jpg">
						<div class="camera_caption">
							<div class="container">
								<p>
									爆款商品推薦，貓家長狂推
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="carousel-box">
			<div class="inner span12">
				<h3>美容項目展示</h3>
				<div class="carousel main">
					<ul>
						<li>
							<a data-lightbox="grooming" data-title="剪指甲" href="images/carousel_1big.jpg">
								<img alt="" border="0" src="images/carousel_1.jpg" />
								<div>
									<p>
										<span>剪指甲</span>
										Top
									</p>
								</div>
							</a>
						</li>
						<li>
							<a data-lightbox="grooming" data-title="清耳朵" href="images/carousel_2big.jpg">
								<img alt="" border="0" src="images/carousel_2.jpg" />
								<div>
									<p>
										<span>清耳朵</span>
										Top
									</p>
								</div>
							</a>
						</li>
						<li>
							<a data-lightbox="grooming" data-title="基本按摩" href="images/carousel_3big.jpg">
								<img alt="" border="0" src="images/carousel_3.jpg" />
								<div>
									<p>
										<span>基本按摩</span>
										Top
									</p>
								</div>
							</a>
						</li>
						<li>
							<a data-lightbox="grooming" data-title="全身剃毛" href="images/carousel_4big.jpg">
								<img alt="" border="0" src="images/carousel_4.jpg" />
								<div>
									<p>
										<span>全身剃毛</span>
										Top
									</p>
								</div>
							</a>
						</li>
						<li>
							<a data-lightbox="grooming" data-title="修腳底毛" href="images/carousel_5big.jpg">
								<img alt="" border="0" src="images/carousel_5.jpg" />
								<div>
									<p>
										<span>修腳底毛</span>
										Top
									</p>
								</div>
							</a>
						</li>
						<li>
							<a data-lightbox="grooming" data-title="驅蝨藥浴" href="images/carousel_6big.jpg">
								<img alt="" border="0" src="images/carousel_6.jpg" />
								<div>
									<p>
										<span>驅蝨藥浴</span>
										Top
									</p>
								</div>
							</a>
						</li>
					</ul>
					<a class="" href="javascript:;" id="prev" style="display: block;"></a>
					<a class="" href="javascript:;" id="next" style="display: block;"></a>
				</div>
			</div>
		</div>
		<section id="content">
			<div class="container">
				<div class="row">
					<div class="clearfix">
						<div class="span6">
							<h1>展示影片</h1>
							<div class="embed-responsive embed-responsive-16by9">
								<iframe class="embed-responsive-item"
									src="https://www.youtube.com/embed/oYKEh1A5ID0?si=QpHbND7gMdT-M-b9"></iframe>
							</div>
							<p>
								<b></b>親愛的貓奴們，你們好！這裡是專為尊貴貓主子打造的美容殿堂，我們相信每隻貓咪都值得擁有最溫柔的呵護與最時尚的造型！
								從精緻的洗澡護理、專業的毛髮修剪，到貼心的指甲護理與耳朵清潔，我們的團隊以愛心和專業技術，讓您的愛貓在舒適無壓力的環境中煥然一新。無論是日常保養還是特殊造型，我們都致力於讓貓咪健康又亮麗！
								快來預約服務，讓您的毛孩享受五星級的美容體驗吧！✨ 因為牠不只是寵物，更是家人。
							</p>
							<div class="padcontent"></div>
						</div>
						<?php
						require_once('Connections/conn_sql.php');

						// 分頁設定
						$records_per_page = 3; // 每頁顯示3條優惠訊息
						$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
						$offset = ($current_page - 1) * $records_per_page;

						// 獲取總優惠訊息數量
						$total_offers_query = "SELECT COUNT(*) AS total FROM offers";
						$total_offers_result = $conn_sql->query($total_offers_query);
						$total_offers_row = $total_offers_result->fetch_assoc();
						$total_offers = $total_offers_row['total'];
						$total_pages = ceil($total_offers / $records_per_page);

						// 獲取當前頁的優惠訊息
						$query_offers = "SELECT * FROM offers ORDER BY offer_date DESC LIMIT $offset, $records_per_page";
						$offers = $conn_sql->query($query_offers);
						?>
						<div class="span6" id="offers">
							<h2>優惠訊息</h2>
							<?php while ($row_offers = $offers->fetch_assoc()): ?>
								<p class="news">
									<span>
										<i><?php echo date('d', strtotime($row_offers['offer_date'])); ?></i>
										<em><?php echo date('F', strtotime($row_offers['offer_date'])); ?> <br />
											<?php echo date('Y', strtotime($row_offers['offer_date'])); ?></em>
									</span>
									<strong><?php echo $row_offers['offer_title']; ?></strong>
									<?php echo $row_offers['offer_content']; ?>
								</p>
							<?php endwhile; ?>
							<div class="pagination" style="display: flex; justify-content: center; margin-top: 20px;">
								<?php if ($current_page > 1): ?>
									<a href="?page=<?php echo $current_page - 1; ?>#offers" class="btn primary">上一頁</a>
								<?php else: ?>
									<span class="btn primary disabled">上一頁</span>
								<?php endif; ?>

								<?php if ($current_page < $total_pages): ?>
									<a href="?page=<?php echo $current_page + 1; ?>#offers" class="btn primary">下一頁</a>
								<?php else: ?>
									<span class="btn primary disabled">下一頁</span>
								<?php endif; ?>
							</div>
							<?php $offers->free();
							$conn_sql->close(); // 釋放結果集並關閉連接 
							?>
							<div class="padcontent"></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="clearfix"></div>
	</div>
	<footer>
		<ul class="bottom_menu">
			<li><a href="index.php">HOME</a></li>
			<li><a href="index-1.php">貓潤印記</a></li>
			<li><a href="index-2.php">貓潤美容</a></li>
			<li><a href="index-3.php">貓潤嚴選</a></li>
			<li><a href="index-4.php">服務據點</a></li>
			<li><a href="cat_records.php">貓咪日誌</a></li>			
		</ul>
		<h4>貓 萌 家 潤</h4>
		<ul class="social">
			<li><a href="https://line.me/ti/p/pmS5YFwAsH"><img alt="" border="0" height="33" src="images/social_1.png" width="35" /></a></li>
			<li><a href="#"><img alt="" border="0" height="33" src="images/social_2.png" width="35" /></a></li>
			<li><a href="#"><img alt="" border="0" height="33" src="images/social_3.png" width="35" /></a></li>
			<li><a href="mailto:mengchihyuchi@gmail.com"><img alt="" border="0" height="33" src="images/social_4.png" width="35" /></a></li>
			<li><a href="https://www.youtube.com/@貓萌家潤-666" target="_blank" rel="noopener noreferrer"><img alt="" border="0" height="33" src="images/social_5.png" width="35" /></a></li>
		</ul>
		<p class="copy">
			<a href="index.php">Pet Grooming Salon 貓萌家潤寵物美容專門店</a>
		</p>
	</footer>
	<script src="js/bootstrap.js" type="text/javascript"></script>
</body>

</html>