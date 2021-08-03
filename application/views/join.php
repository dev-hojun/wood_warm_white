<? if ( ! defined('BASEPATH') ) exit('No direct script access allowed'); ?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link href="/css/wood_warm_white/www.css" rel="stylesheet" type="text/css">
		<title>WWW - join</title>
        <script src="https://kit.fontawesome.com/73fbacc1c6.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
			
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
						<img src="/www_images/edit_interior_title07.jpg" width="932px" height="610px" style="max-width: 100%; height: auto;">
							<div class="caption-0">
								<div>JOIN</div>								
							</div>
					</div>
					
					<div>
						<div class="join">
                            <p id="join_focus">회원가입</p>
                            <div class="join_caption">
                                <form method="post" action="<?=base_url( "wood_warm_white/insert_member" )?>" onsubmit="return check_join();" name="join">
                                    <div class="join-area">
                                        <div>아이디</div>
                                        <input class="join_input" type="text" name="id" id="id" onclick="id_click();" minlength=5 maxlength="20" pattern="[a-zA-z0-9]*" placeholder="영문, 숫자 5~20자" required> 
                                    </div>

                                    <div class="join-area">
                                        <div>이름</div>
                                        <input class="join_input" type="text" name="name" minlength=2 maxlength="10" pattern="[가-힣]*" placeholder="한글, 영문 2~20자" required> 
                                    </div>
                                    
                                    <div class="join-area">
                                        <div>비밀번호</div>
                                        <input type="password" name="pw" id="pw" minlength=8 maxlength="20" pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$" placeholder="영문, 숫자, 특수문자 포함 8~20자" required>
                                    </div>

                                    <div class="join-area">
                                        <div>비밀번호 확인</div>
                                        <input type="password" name="check_pw" id="check_pw" minlength=8 maxlength="20" pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$" placeholder="영문, 숫자, 특수문자 포함 8~20자" required>
                                    </div>

                                    <div>
                                        <div class="join-area_2">약관동의</div>
                                            <div class="check_box">
                                                <label><input type="checkbox" required> 만 14세 이상입니다.</label>
                                            </div>
                                            <div class="check_box">
                                                <label><input type="checkbox" required> 이용약관 <a href="javascript:alert('준비 중입니다.');">(링크 확인)</a></label>
                                            </div>
                                            <div class="check_box">
                                                <label><input type="checkbox" required> 개인정보처리방침 <a href="javascript:alert('준비 중입니다.');">(링크 확인)</a></label>
                                            </div>
                                    </div>

                                    <div class="btn-area button" style="text-align:center">
                                        <button type="submit">가입 신청</button>
                                    </div>                                
                                </form>
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
			 if(!document.join.id.value){
				 window.alert("아이디를 입력하세요.")
				 document.join.id.focus();
				 return false;
			 }
	
			 if(!document.join.name.value){
				 window.alert("이름을 입력하세요.")
				 document.join.name.focus();
				 return false;
			 }   
			 
			 if(!document.join.pw.value){
				 window.alert("비밀번호를 입력하세요.")
				 document.join.pw.focus();
				 return false;
			 }   
	
			 if(!document.join.check_pw.value){
				 window.alert("비밀번호를 한 번 더 입력하세요.")
				 document.join.check_pw.focus();
				 return false;
			 }   
	
			if(document.getElementById("pw").value==document.getElementById("check_pw").value)
				return true;
				
			else{
				alert("비밀번호가 일치하지 않습니다.");
				return false;
			}        
		}// 비밀번호 일치 여부 검사
		</script>

		<script type="text/javascript" charset="utf-8">
		$(document).ready(function(){ $("#id").focus(); });
		
		$(document).ready(function () {
			$('html, body').animate({
				scrollTop: $('#join_focus').offset().top
        }, 'slow'); //페이지 로드 시 해당 id값으로 포커싱 ( fast or slow  )
    });
	</script>


  	</body>
</html>