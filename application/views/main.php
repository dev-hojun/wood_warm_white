<? if ( ! defined('BASEPATH') ) exit('No direct script access allowed'); ?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="/css/wood_warm_white/www.css" rel="stylesheet" type="text/css">
		<title>WWW - wood warm white</title>
		<script src="https://kit.fontawesome.com/73fbacc1c6.js" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>		
		</script>	
		
		<script>
		function darkmode() {
			var body = document.body;
			body.classList.toggle("darkmode");
			
			var button = document.getElementById("darkmode_button");
			if(button.innerHTML == "DARK MODE") {
			button.innerHTML = "LIGHT MODE";
			}
			else {
			button.innerHTML = "DARK MODE";
			}		
		}
		</script>
		
	</head>
	
	<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

 			<!-- navbar -->	
 
		<nav class="navbar">
			<div class="navbar__logo">
				<i>WWW</i>
			</div>
	
			<ul class="navbar__menu">
				<li><a  href="http://27.96.130.25/wood_warm_white/main">MAIN</a></li>						
				<li><a  href="http://27.96.130.25/wood_warm_white/login">LOGIN</a></li>
				<li><a  href="http://27.96.130.25/wood_warm_white/bedroom">BED ROOM</a></li>
				<li><a  href="http://27.96.130.25/wood_warm_white/diningroom">DINING ROOM</a></li>
				<li><a  href="http://27.96.130.25/wood_warm_white/interior">INTERIOR</a></li>
				<li><a  href="http://27.96.130.25/wood_warm_white/qna">Q&A</a></li>
				
			</ul>  
	
			<ul class="navbar__icons">
				<li id="youtube"><a  href=""><i class="fab fa-youtube"></i></a></li>
				<li id="facebook"><a  href=""><i class="fab fa-facebook-square"></i></a></li>
				<li id="instagram"><a  href=""><i class="fab fa-instagram-square"></i></a></li>

				<!-- sidebar -->
				
				<input type="checkbox" id="menuicon">
				<label for="menuicon">
					<span></span>
					<span></span>
					<span></span>
				</label>
				
				
				<div class="sidebar">
					<ul>
						<li>
							<i class="fas fa-home"></i>
							<a  href="" onMouseOver="this.innerHTML=' ??????'" onMouseOut="this.innerHTML=' MAIN'">
								<span> MAIN</span>
							</a>	
						</li><br>
						
						<li>
							<i class="fas fa-sign-in-alt"></i>
							<a  href="" onMouseOver="this.innerHTML=' ?????????'" onMouseOut="this.innerHTML=' LOGIN'">
								<span> LOGIN</span>
							</a>
						</li>

						<li>
							<a  href="" onMouseOver="this.innerHTML='????????????'" onMouseOut="this.innerHTML='JOIN'">JOIN</a>
						</li>

						<li>
							<a  href="" onMouseOver="this.innerHTML='????????????'" onMouseOut="this.innerHTML='ORDER'">ORDER</a>
						</li>

						<li>
							<a  href="" onMouseOver="this.innerHTML='???????????????'" onMouseOut="this.innerHTML='MY PAGE'">MY PAGE</a>
						</li><br>
											
						<li>
							<i class="fas fa-bed"></i>
							<a  href="" onMouseOver="this.innerHTML=' ??????'" onMouseOut="this.innerHTML=' BED ROOM'">
								<span> BED ROOM</span>
							</a>
						</li>

						<li>
							<a  href="" onMouseOver="this.innerHTML='??????'" onMouseOut="this.innerHTML='BED'">BED</a>
						</li>

						<li>
							<a  href="" onMouseOver="this.innerHTML='??????'" onMouseOut="this.innerHTML='SIDE TABLE'">SIDE TABLE</a>
						</li>

						<li>
							<a  href="" onMouseOver="this.innerHTML='?????????'" onMouseOut="this.innerHTML='DRAWER'">DRAWER</a>
						</li><br>			
											
						<li>
							<i class="fas fa-sink"></i>
							<a  href="" onMouseOver="this.innerHTML=' ??????'" onMouseOut="this.innerHTML=' DINING ROOM'">
								<span> DINING ROOM</span>
							</a>
						</li>

						<li>
							<a  href="" onMouseOver="this.innerHTML='????????????'" onMouseOut="this.innerHTML='DINING ROOM UTENSILS'">DINING ROOM UTENSILS</a>
						</li>

						<li>
							<a  href="" onMouseOver="this.innerHTML='?????? ?????????'" onMouseOut="this.innerHTML='DINING ROOM CABINET'">DINING ROOM CABINET</a>
						</li><br>
											
						<li>
							<i class="fas fa-couch"></i>
							<a  href="" onMouseOver="this.innerHTML=' ????????????'" onMouseOut="this.innerHTML=' INTERIOR'">
								<span> INTERIOR</span>
							</a>
						</li>

						<li>
							<a  href="" onMouseOver="this.innerHTML='??????'" onMouseOut="this.innerHTML='LAMP'">LAMP</a>
						</li>

						<li>
							<a  href="" onMouseOver="this.innerHTML='?????????'" onMouseOut="this.innerHTML='DECORATION'">DECORATION</a>
						</li>

						<li>
							<a  href="" onMouseOver="this.innerHTML='?????? / ??????'" onMouseOut="this.innerHTML='PLANT / ARTIFICIAL FLOWER'">PLANT / ARTIFICIAL FLOWER</a>
						</li><br>
						
						<li>
							<i class="fas fa-question"></i>
							<a  href="" onMouseOver="this.innerHTML=' ????????????'" onMouseOut="this.innerHTML=' Q&A'">
								<span>Q&A</span>
							</a>
						</li><br>
						
						<li>			<!-- @@@@@@ ??????(?????????), ???????????? ?????? ????????? ?????? @@@@@@ -->	
							<i class="far fa-lightbulb"></i>
							<button onclick="darkmode()" id="darkmode_button">
								<?
									if ( $this->input->cookie( "hojun_mode" ) == "dark" ) echo "DARK MODE";

									else echo "LIGHT MODE";
								?>
							</button>
						</li>		
					</ul>	
				</div>
			</ul>
			
		</nav>
  
			<!-- line01 -->	
 
  		<div class="container">
			<section class="product-list">	
			
				<div>
					<div class="title-image">
						<img src="/www_images/edit_interior_title05.jpg" width="932px" height="610px" style="max-width: 100%; height: auto;">
							<div class="caption-0">
								<div>WOOD</div>
								<div>WARM</div>
								<div>WHITE</div>								
							</div>
					</div>
				</div>
				
			<!-- line02 -->
					
				<div>
					<div class="hover-area">
						<img src="/www_images/edit_furniture26.jpg" width="617px" height="200px" style="max-width: 100%; height: auto;">
					</div>
				</div>
				
				<div>
					<div class="text-image">
						<img src="/www_images/beige01.jpg" width="300px" height="200px">
							<div class="caption-2">
								<a  href="http://27.96.130.25/wood_warm_white/bedroom">
									<span>BED ROOM</span>
								</a>
							</div>
					</div>
				</div>

			<!-- line03 -->
			
				<div>
					<div class="hover-area">
						<img src="/www_images/homedeco07.jpg" width="300px" height="300px">
					</div>
				</div>
				
				<div>
					<div class="hover-area">
						<img src="/www_images/edit_furniture27.jpg" width="300px" height="300px">
					</div>
				</div>

				<div>
					<div class="hover-area">
						<img src="/www_images/homedeco28.jpg" width="300px" height="300px">
					</div>
				</div>

			<!-- line04 -->
			
				<div>
					<div class="text-image">
						<img src="/www_images/beige01.jpg" width="300px" height="200px">
							<div class="caption-2">
								<a  href="http://27.96.130.25/wood_warm_white/diningroom">
									<span>DINING ROOM</span>
								</a>
							</div>
					</div>
				</div>			

				<div>
					<div class="hover-area">
						<img src="/www_images/kitchen15.jpg" width="617px" height="200px" style="max-width: 100%; height: auto;">
					</div>
				</div>

			<!-- line05 -->

				<div>
					<div class="hover-area">
						<img src="/www_images/edit_kitchen10.jpg" width="457px" height="300px" style="max-width: 100%; height: auto;">
					</div>
				</div>

				<div>
					<div class="hover-area">
						<img src="/www_images/kitchen16.jpg" width="457px" height="300px" style="max-width: 100%; height: auto;">
					</div>
				</div>
				
			<!-- line06 -->				

				<div>
					<div class="hover-area">
						<img src="/www_images/kitchen19.jpg" width="300px" height="200px">
					</div>
				</div>

				<div>
					<div class="hover-area">
						<img src="/www_images/edit_homedeco21.jpg" width="300px" height="200px">
					</div>
				</div>

				<div>
					<div class="text-image">
						<img src="/www_images/beige01.jpg" width="300px" height="200px">
							<div class="caption-2">
								<a  href="http://27.96.130.25/wood_warm_white/interior">
									<span>INTERIOR</span>
								</a>
							</div>
					</div>
				</div>

			<!-- line07 -->		

				<div>
					<div class="hover-area">
						<img src="/www_images/kitchen17.jpg" width="300px" height="300px">
					</div>
				</div>

				<div>
					<div class="hover-area">
						<img src="/www_images/kitchen18.jpg" width="300px" height="300px">
					</div>
				</div>
				
				<div>
					<div class="hover-area">
						<img src="/www_images/homedeco11.jpg" width="300px" height="300px">
					</div>
				</div>

			
			</section>
		</div>

			<!-- last navbar -->  
	
		<nav class="last_navbar">
			<div class="last_navbar_menu">
				<div>
					<div class="last_navbar_menu_title">HEAD OFFICE</div>
					<div>??????????????? ????????? OO??? 8 HJ?????? 6???</div>
					<div>TEL 02-123-1234</div>
					<div>FAX 02-123-1234</div>
					<div>E-MAIL www@woodwarmwhtie.co.kr</div>
				</div>

				<div>
					<div class="last_navbar_menu_title">CS SENTER</div>
					<div>02-123-1234</div>
					<div>MON ~ FRI 09:00 ~ 18:00</div>
					<div>LUNCH 12:00 ~ 13:00</div>
					<div>SAT, SUN, HOILDAY OFF</div>
				</div>
				
				<div>
					<div class="last_navbar_menu_title">BANK ACCOUNT</div>
					<div>OO?????? 123456-12-123456</div>
					<div>????????? : (???)??????????????????</div>
				</div>
				
				<div>			
					<div>????????? : ???????????? ?????????????????? | ????????? : ????????? | ????????????????????? : ?????????</div>
					<div>????????????????????? : 000-00-00000 | ??????????????? ???????????? : ???2020-????????????-00000</div>
					<div>????????????????????? e-mail : www@woodwarmwhtie.co.kr</div>
					<div>Copyright. 2020 by ???????????? ?????????????????? all rights reserved.</div>			
				</div>	
			</div>
		</nav>
  	</body>
</html>