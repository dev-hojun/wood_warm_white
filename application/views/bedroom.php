<? if ( ! defined('BASEPATH') ) exit('No direct script access allowed'); ?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link href="/css/wood_warm_white/www.css" rel="stylesheet" type="text/css">
		<title>WWW - bed room</title>
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
							<a  href="" onMouseOver="this.innerHTML=' 메인'" onMouseOut="this.innerHTML=' MAIN'">
								<span> MAIN</span>
							</a>	
						</li><br>
						
						<li>
							<i class="fas fa-sign-in-alt"></i>
							<a  href="" onMouseOver="this.innerHTML=' 로그인'" onMouseOut="this.innerHTML=' LOGIN'">
								<span> LOGIN</span>
							</a>
						</li>

						<li>
							<a  href="" onMouseOver="this.innerHTML='회원가입'" onMouseOut="this.innerHTML='JOIN'">JOIN</a>
						</li>

						<li>
							<a  href="" onMouseOver="this.innerHTML='주문조회'" onMouseOut="this.innerHTML='ORDER'">ORDER</a>
						</li>

						<li>
							<a  href="" onMouseOver="this.innerHTML='마이페이지'" onMouseOut="this.innerHTML='MY PAGE'">MY PAGE</a>
						</li><br>
											
						<li>
							<i class="fas fa-bed"></i>
							<a  href="" onMouseOver="this.innerHTML=' 침실'" onMouseOut="this.innerHTML=' BED ROOM'">
								<span> BED ROOM</span>
							</a>
						</li>

						<li>
							<a  href="" onMouseOver="this.innerHTML='침대'" onMouseOut="this.innerHTML='BED'">BED</a>
						</li>

						<li>
							<a  href="" onMouseOver="this.innerHTML='협탁'" onMouseOut="this.innerHTML='SIDE TABLE'">SIDE TABLE</a>
						</li>

						<li>
							<a  href="" onMouseOver="this.innerHTML='서랍장'" onMouseOut="this.innerHTML='DRAWER'">DRAWER</a>
						</li><br>			
											
						<li>
							<i class="fas fa-sink"></i>
							<a  href="" onMouseOver="this.innerHTML=' 주방'" onMouseOut="this.innerHTML=' DINING ROOM'">
								<span> DINING ROOM</span>
							</a>
						</li>

						<li>
							<a  href="" onMouseOver="this.innerHTML='주방용품'" onMouseOut="this.innerHTML='DINING ROOM UTENSILS'">DINING ROOM UTENSILS</a>
						</li>

						<li>
							<a  href="" onMouseOver="this.innerHTML='주방 수납장'" onMouseOut="this.innerHTML='DINING ROOM CABINET'">DINING ROOM CABINET</a>
						</li><br>
											
						<li>
							<i class="fas fa-couch"></i>
							<a  href="" onMouseOver="this.innerHTML=' 인테리어'" onMouseOut="this.innerHTML=' INTERIOR'">
								<span> INTERIOR</span>
							</a>
						</li>

						<li>
							<a  href="" onMouseOver="this.innerHTML='조명'" onMouseOut="this.innerHTML='LAMP'">LAMP</a>
						</li>

						<li>
							<a  href="" onMouseOver="this.innerHTML='장식품'" onMouseOut="this.innerHTML='DECORATION'">DECORATION</a>
						</li>

						<li>
							<a  href="" onMouseOver="this.innerHTML='식물 / 조화'" onMouseOut="this.innerHTML='PLANT / ARTIFICIAL FLOWER'">PLANT / ARTIFICIAL FLOWER</a>
						</li><br>
						
						<li>
							<i class="fas fa-question"></i>
							<a  href="" onMouseOver="this.innerHTML=' 고객센터'" onMouseOut="this.innerHTML=' Q&A'">
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
						<img src="/www_images/edit_interior_title09.jpg" width="932px" height="610px" style="max-width: 100%; height: auto;">
							<div class="caption-0">
								<div>BED ROOM</div>								
							</div>
					</div>
				</div>	

				<div>
					<div class="hover-area">
						<img src="/www_images/bed01.jpg" width="300px">
						<div class="caption">
							<p>
                                SS / Q / LK / CK (4size)<br>
                                natural / walnut (2color)<br>
								<a href="">상세보기</a>
							</p>
						</div>

						<div class="description">
							<p><br>
								<b>라움 세븐트리 원목 침대</b>
                            </p>
                            
							<p>
								<s>758,000원</s>
								<b>368,000원 [51%]</b>
                            </p>
                            
							<p>
								<button type="button" class="btn btn-outline-secondary" style="font-size: 10px; padding: 3px; cursor: default; font-weight: 600;">무료배송</button>
								<button type="button" class="btn btn-outline-danger" style="font-size: 10px; padding: 3px; cursor: default; font-weight: 600;">할인판매</button>
							</p>
						</div>
					</div>
				</div>
				
					
				<div>
					<div class="hover-area">
						<img src="/www_images/bed03.jpg" width="300px">
						<div class="caption">
							<p>
                                SS / Q (2size)<br>
                                natural / walnut (2color)<br>
								<a href="">상세보기</a>
							</p>	
						</div>

						<div class="description">
							<p><br>
								<b>스칸딕 발리감성 라탄 원목 침대</b>
                            </p>
                            
							<p>
                                <s>649,000원</s>
					    		<b>379,000원 [41%]</b>
                            </p>
                            
							<p>
								<button type="button" class="btn btn-outline-secondary" style="font-size: 10px; padding: 3px; cursor: default; font-weight: 600;">무료배송</button>
								<button type="button" class="btn btn-outline-danger" style="font-size: 10px; padding: 3px; cursor: default; font-weight: 600;">할인판매</button>
							</p>
						</div>
					</div>
				</div>
				
				<div>
					<div class="hover-area">
						<img src="/www_images/bed02.jpg" width="300px">
						<div class="caption">
							<p>
                                SS / Q (2size)<br>
                                natural / walnut / gray (3color)<br>
								<a href="">상세보기</a>
							</p>	
						</div>

						<div class="description">
							<p><br>
								<b>스칸딕 로맨틱 신혼 원목 침대</b>
                            </p>
                            
                            <p>
                                <s>629,000원</s>
					    	    <b>379,000원 [39%]</b>
                            </p>
                            
							<p>
								<button type="button" class="btn btn-outline-secondary" style="font-size: 10px; padding: 3px; cursor: default; font-weight: 600;">무료배송</button>
                                <button type="button" class="btn btn-outline-danger" style="font-size: 10px; padding: 3px; cursor: default; font-weight: 600;">할인판매</button>				
                            </p>
						</div>
					</div>
                </div>
                
                <div>
					<div class="hover-area">
						<img src="/www_images/bed04.jpg" width="300px">
						<div class="caption">
							<p>
                                SS / Q (2size)<br>
                                natural / acacia (2color)<br>
								<a href="">상세보기</a>
							</p>	
						</div>

						<div class="description">
							<p><br>
								<b>마리카 아카시아 원목 침대</b>
                            </p>
                            
                            <p>
                                <s>399,000원</s>
					    	    <b>199,000원 [50%]</b>
							</p>
							
							<p>
								<button type="button" class="btn btn-outline-secondary" style="font-size: 10px; padding: 3px; cursor: default; font-weight: 600;">무료배송</button>
                                <button type="button" class="btn btn-outline-danger" style="font-size: 10px; padding: 3px; cursor: default; font-weight: 600;">할인판매</button>						
                            </p>
						</div>
					</div>
                </div>
                
                <div>
					<div class="hover-area">
						<img src="/www_images/bed05.jpg" width="300px">
						<div class="caption">
							<p>
                                SS / Q (2size)<br>
                                acacia (1color)<br>
                                2월 15일 재입고 예정<br>
								<a href="">상세보기</a>
							</p>	
						</div>

						<div class="description">
							<p><br>
								<b>스텔리 헤링본 원목 침대</b>
                            </p>
                            
                            <p>
                                <s>623,000원</s>
								<b style='color:#ED0000;'>품절</b>
							</p>
							
							<p>
								<button type="button" class="btn btn-outline-secondary" style="font-size: 10px; padding: 3px; cursor: default; font-weight: 600;">무료배송</button>
                                <button type="button" class="btn btn-outline-danger" style="font-size: 10px; padding: 3px; cursor: default; font-weight: 600;">할인판매</button>						
                            </p>
						</div>
					</div>
                </div>
                
                <div>
					<div class="hover-area">
						<img src="/www_images/bed06.jpg" width="300px">
						<div class="caption">
							<p>
                                SS / Q / (2size)<br>
                                daisy (1color)<br>
								<a href="">상세보기</a>
							</p>	
						</div>

						<div class="description">
							<p><br>
								<b>데이지 침대</b>
                            </p>

                            <p>
                                <s>410,000원</s>
					    	    <b>250,000원 [39%]</b>
                            </p>
                            						
							<p>
								<button type="button" class="btn btn-outline-secondary" style="font-size: 10px; padding: 3px; cursor: default; font-weight: 600;">무료배송</button>
                                <button type="button" class="btn btn-outline-danger" style="font-size: 10px; padding: 3px; cursor: default; font-weight: 600;">할인판매</button>					
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
					<div>서울특별시 은평구 OO로 8 HJ타워 6층</div>
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
					<div>OO은행 123456-12-123456</div>
					<div>예금주 : (주)우드웜화이트</div>
				</div>
				
				<div>			
					<div>상호명 : 주식회사 우드웜화이트 | 대표자 : 이호준 | 개인정보관리자 : 이호준</div>
					<div>사업자등록번호 : 000-00-00000 | 통신판매업 신고번호 : 제2020-서울은평-00000</div>
					<div>사업자정보확인 e-mail : www@woodwarmwhtie.co.kr</div>
					<div>Copyright. 2020 by 주식회사 우드웜화이트 all rights reserved.</div>			
				</div>	
			</div>
		</nav>
  	</body>
 </html>