<? if ( ! defined('BASEPATH') ) exit('No direct script access allowed'); ?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link href="/css/wood_warm_white/www.css?after" rel="stylesheet" type="text/css">
		<title>WWW - faq</title>
		<script src="https://kit.fontawesome.com/73fbacc1c6.js" crossorigin="anonymous"></script>	
			
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
  
			<!-- qna -->	
 
  		<div class="container">
			<section class="product-list">	

				
					<div class="title-image">
						<img src="/www_images/edit_interior_title08.jpg" width="932px" height="610px" style="max-width: 100%; height: auto;">
							<div class="caption-0">
								<div>Q&A</div>								
							</div>
					</div>
					
					<div>
						<div class="qna">
							<div class="qna_caption">
								<div>아래 목록에서 문의하실 내용이 있는지 확인해주세요!<br>이외의 문의사항은 고객센터로 문의 부탁드립니다.</div><br>
							</div>
							<div class="qna_caption">
								<input type="checkbox" id="popup">
								<label for="popup">고객센터 안내</label>
								<div>
									<div>
										<label for="popup"><i class="far fa-times-circle"></i></label>
										<div class="popup-text">
											<p><i class="fas fa-phone-alt"></i>&nbsp;&nbsp;02-123-1234</p>
											<p><i class="fas fa-envelope"></i>&nbsp;&nbsp;www.woodwarmwhtie@co.kr</p>
											<p><i class="fas fa-clock"></i>&nbsp;&nbsp;월 ~ 금 09:00 ~ 18:00</p>
											<p><i class="fas fa-user-times"></i>&nbsp;&nbsp;월 ~ 금 12:00 ~ 13:00, 토, 일, 공휴일 휴무</p><br>
											<p><i class="fas fa-asterisk"></i>&nbsp;&nbsp;최근 코로나19로 인해 고객센터를 잠정적으로 축소하여 운영중입니다. 전화 상담이 지연될 수 있는 점 너른 양해 부탁드립니다.</p>
										</div>
									</div>
									<label for="popup"></label>
								</div>
							</div>
						</div>	
					</div>
		
					<div class="accordion">
						<input type="radio" name="accordion" id="answer01">
							<label for="answer01">회원 가입 방법과 가입 후 혜택이 어떻게 되나요?
								<p><i class="fas fa-arrow-circle-down"></i></p>
							</label>
							<div>
								<p>회원가입은 홈페이지 상단의 "LOGIN" 버튼을 누르고 서비스 이용약관에 동의하신 후 고객님의 정보를 입력해 주시면 됩니다.<br>우드웜화이트의 회원 가입은 무료이며 가입 시 쿠폰, 적립금 등 다양한 혜택을 받으실 수 있습니다.</p>
							</div>
						
						<input type="radio" name="accordion" id="answer02">
							<label for="answer02">회원 아이디와 비밀번호를 잊어버렸어요.
								<p><i class="fas fa-arrow-circle-down"></i></p>
							</label>
							<div>
								<p>회원 아이디, 비밀번호가 생각나지 않으실 경우 "LOGIN" 페이지의 아이디 / 비밀번호 찾기에서 조회하실 수 있습니다.</p>
							</div>
						
						<input type="radio" name="accordion" id="answer03">
							<label for="answer03">쿠폰 및 적립금의 유효기간이 있나요?
								<p><i class="fas fa-arrow-circle-down"></i></p>
							</label>
							<div>
								<p>적립금에 대한 유효기간은 없습니다만, 회원 탈퇴 시 적립금이 소멸됩니다.<br>신규 가입 쿠폰은 발행일로부터 1년입니다. 그 외의 쿠폰 발생 시 별도의 유효기간이 안내되오니 이용에 참고 부탁드립니다.</p>
							</div>
						
						<input type="radio" name="accordion" id="answer04">
							<label for="answer04">제품 구매 후 적립금은 언제 지급이 되나요?
								<p><i class="fas fa-arrow-circle-down"></i></p>
							</label>
							<div>
								<p>구매 적립금은 배송 완료일 기준 1-2일 내 지급됩니다.</p>
							</div>
							
						
						<input type="radio" name="accordion" id="answer05">
							<label for="answer05">결제는 방법에는 어떤 것들이 있나요?
								<p><i class="fas fa-arrow-circle-down"></i></p>
							</label>
							<div>
								<p>무통장 입금, 신용카드 결제, 휴대폰 결제, 카카오페이, 네이버페이 중에서 선택하실 수 있습니다.<br>네이버페이를 통한 결제 시 네이버페이 자체적으로 적립금 혜택이 제공되며 우드웜화이트 회원 혜택은 제공되지 않으니 이용에 참고 부탁드립니다.</p>
							</div>
							
						<input type="radio" name="accordion" id="answer06">
							<label for="answer06">주문 취소는 어떻게 하나요?
								<p><i class="fas fa-arrow-circle-down"></i></p>
							</label>
							<div>
								<p>결제 후 취소는 "LOGIN" 클릭 후 "ORDER" 에서 취소하시거나 상담 시간 (09:00~18:00, 점심시간 : 12:00~13:00) 내에 고객센터 (02-123-1234) 로 전화주시면 처리해드리겠습니다. 다만, 상품이 발송된 경우나 주문 제작 제품은 변심에 의한 취소가 어려울 수 있으니 참고 부탁드립니다.</p>
							</div>
							
						<input type="radio" name="accordion" id="answer07">
							<label for="answer07">카드 취소를 했는데 카드 대금 청구서에 반영이 안 되어 있어요.
								<p><i class="fas fa-arrow-circle-down"></i></p>
							</label>
							<div>
								<p>고객님의 개인 금융 정보 보호를 위하여 온라인 쇼핑몰에서는 제 3자인 결제대행업체(PG사)를 경유하여 카드 승인 및 취소 처리를 하도록 법적으로 정해져 있습니다.<br>실제 취소 완료 시까지 약 3~7일 정도의 처리 기간이 소요되며 이 기간이 경과한 후에는 해당 카드사에서 취소 여부를 확인하실 수 있습니다.<br>위와 같이 결제 대행사에서 취소 후 3~7일 정도 후에 카드사에서 실제 승인 취소 처리 되기 때문에 카드 대금 청구서에는 결제 대행사에서 취소한 금액이 포함되어 있다 하더라도 고객님의 카드 결제일 전날까지 카드사에서 취소 처리 한다면 결제 당일 출금되지 않습니다.<br>결제일 전 7일 이내에 결제 대행사에서 취소하게 되는 경우는 5~7일 정도 소요되는 관계로 당월에는 출금되고, 익월에 해당 카드사에서 상계 (마이너스) 처리하여 청구하게 됩니다.<br>카드사 마다 약간씩 차이가 있기 때문에 해당 카드사로 문의하시면 보다 정확한 확인이 가능합니다.</p></p>
							</div>
							
						<input type="radio" name="accordion" id="answer08">
							<label for="answer08">교환 및 반품은 어떻게 하나요?
								<p><i class="fas fa-arrow-circle-down"></i></p>
							</label>
							<div>
								<p>교환, 반품 요청 기간은 상품 수령 후 7일 이내입니다.<br>제품에 이상이 있을 경우 반품 또는 교환은 무료이나 고객님의 귀책사유 (변심, 주소지 오기재, 배송 중 취소) 로 인한 교환 또는 반품의 경우는 고객님께서 왕복 배송비 (6,000원) 를 부담하셔야 합니다. 다만, 주문 제작 제품일 경우, 결제 완료 후 제작이 들어가므로 반품 및 교환이 불가하며 이불 솜, 베개 솜과 같은 솜류는 개봉 후 교환 또는 반품이 불가합니다.</p>
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