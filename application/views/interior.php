<? if ( ! defined('BASEPATH') ) exit('No direct script access allowed'); ?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link href="/css/wood_warm_white/www.css" rel="stylesheet" type="text/css">
		<title>WWW - interior</title>
		<script src="https://kit.fontawesome.com/73fbacc1c6.js" crossorigin="anonymous">		
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
						
						<li>
							<i class="far fa-lightbulb"></i>
							<button onclick="darkmode()" id="darkmode_button">DARK MODE</button>
						</li>		
					</ul>		
				</div>
			</ul>
			
		</nav>
  
			<!-- item -->	
 
  		<div class="container">
			<section class="product-list">	
			
				<div>
					<div class="title-image">
						<img src="/www_images/edit_interior_title11.jpg" width="932px" height="610px" style="max-width: 100%; height: auto;">
							<div class="caption-0">
								<div>INTERIOR</div>								
							</div>
					</div>
				</div>	

				<div>
					<div class="hover-area">
						<img src="/www_images/flower01.jpg" width="300px">
						<div class="caption">
							<p>
								red / yellow / pink / white (4color)<br>
								3??? 10??? burgundy ?????? ?????? ??????<br>
								<a href="">????????????</a>
							</p>
						</div>

						<div class="description">
							<p><br>
								<b>?????? ??????(10P) ?????? ??????</b>
							</p>
							
							<p>
								<s>19,900???</s>
								<b>7,900??? [60%]</b>
							</p>
							
							<p>
								<button type="button" class="btn btn-outline-secondary" style="font-size: 10px; padding: 3px; cursor: default; font-weight: 600;">????????????</button>
								<button type="button" class="btn btn-outline-danger" style="font-size: 10px; padding: 3px; cursor: default; font-weight: 600;">????????????</button>
							</p>
						</div>
					</div>
				</div>
				
					
				<div>
					<div class="hover-area">
						<img src="/www_images/flower02.jpg" width="300px">
						<div class="caption">
							<p>
								yellow (1color)<br>
								20,000??? ?????? ?????? ??? ????????? ??????<br>
								<a href="">????????????</a>
							</p>	
						</div>

						<div class="description">
							<p><br>
								<b>???????????? ??????(6P) ?????? ??????</b>
							</p>
							
							<p>
								<s>19,900???</s>
								<b>6,900??? [65%]</b>
							</p>
							
							<p>
								<button type="button" class="btn btn-outline-secondary" style="font-size: 10px; padding: 3px; cursor: default; font-weight: 600;">????????????</button>
								<button type="button" class="btn btn-outline-danger" style="font-size: 10px; padding: 3px; cursor: default; font-weight: 600;">????????????</button>
								<button type="button" class="btn btn-outline-primary" style="font-size: 10px; padding: 3px; cursor: default; font-weight: 600;">?????????</button>
							</p>
						</div>
					</div>
				</div>
				
				<div>
					<div class="hover-area">
						<img src="/www_images/flower03.jpg" width="300px">
						<div class="caption">
							<p>
								pink / white (2color)<br>
								2??? 15??? ????????? ??????<br>
								<a href="">????????????</a>
							</p>	
						</div>

						<div class="description">
							<p><br>
								<b>????????? ?????? ??????</b>
							</p>
							
							<p>
								<s>10,200???</s>
								<b style='color:#ED0000;'>??????</b>
							</p>
							
							<p>
								<button type="button" class="btn btn-outline-secondary" style="font-size: 10px; padding: 3px; cursor: default; font-weight: 600;">????????????</button>
								<button type="button" class="btn btn-outline-danger" style="font-size: 10px; padding: 3px; cursor: default; font-weight: 600;">????????????</button>					
							</p>
						</div>
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