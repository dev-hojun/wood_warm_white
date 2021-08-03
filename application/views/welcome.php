<? if ( ! defined('BASEPATH') ) exit('No direct script access allowed'); ?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link href="/css/wood_warm_white/www.css?after" rel="stylesheet" type="text/css">
		<title>WWW - welcome</title>
        <script src="https://kit.fontawesome.com/73fbacc1c6.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
			
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
        }//sidebar darkmode

        function check_join() {
			if(document.getElementById("pw").value==document.getElementById("check_pw").value)
                return true;
			else{
                alert("비밀번호가 일치하지 않습니다.");
				return false;
            }        
        }// 비밀번호 일치 여부 검사
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
						<img src="/www_images/edit_interior_title12.jpg" width="932px" height="610px" style="max-width: 100%; height: auto;">
							<div class="caption-0">
								<div>WELCOME</div>								
							</div>
					</div>

					<div>
						<div class="join">
							<p>가입을 진심으로 환영합니다!</p>
						</div>
					</div>
					
					<div class="wellcome_caption">
						<div>wood warm white는 국내 본사와, 해외 공장에서 제품 기획, 디자인 그리고 제작의 전 과정에 직접 관여함으로써 제품의 품질과 가격 경쟁력을 높이고 있으며, 원목의 재료적 특성과 가공 기법에 대한 이해도가 높은 다수의 숙련된 기술자들이 제품을 생산함으로써 기능성과 품질의 안정성을 지속적으로 구현하고 있습니다.</div>
					</div>

					<div>
						<ul class="benefit">
							<li class="benefit_content">신규 회원가입 시 즉시 사용 가능한 
								<span class="highlight"><span>5,000원 할인 쿠폰 발급</span></span>
							</li>
							<li class="benefit_content">매달 1일 지급되는 
								<span class="highlight"><span>이달의 쿠폰 발급</span></span>
							</li>
							<li class="benefit_content">제품 구매 완료 시 
								<span class="highlight"><span>적립금 지급</span></span>
							</li>
							<li class="benefit_content">특별 프로모션, 이벤트 진행 시 
								<span class="highlight"><span>사전 안내 서비스 제공</span></span>
							</li>
						</ul>
					</div>
					
					<div class="move_page">
						<button type="button" onClick="location.href='<?=base_url( "wood_warm_white/login" )?>'">로그인 페이지로 이동</button>
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