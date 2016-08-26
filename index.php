<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="./libs/css/common.css" type="text/css" />
    <link rel="stylesheet" href="./libs/css/main.css" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="./libs/js/navgation.js"></script>
    <script type="text/javascript" src="./libs/js/bxslider.js"></script>
    <script type="text/javascript">

        $(function(){


            $('#header .menuUp .nav ul li a').click(function(){

                var marginWidth = $('#wrapper #header .menuUp').width();

                var idx = $(this).parent().index();

                $(this).parent('li').addClass('on').siblings().removeClass('on')

                if(winWidth > 1024){

                  if(idx == 0){

                      $('#container .section3  .profile').css({
                          'display':'block',
                          'position':'absolute',
                          'width':100 + '%',
                          'left':-100 +'%',
                          'paddingLeft':  -247 + 'px',
                          'box-sizing':'border-box',

                      }).animate({
                          'left' : '0',
                      }).children('.bx-slider').css({
                        'display':'block'
                      })

                      $('#container .section3 .portfolio').css({
                        'position':'absolute',
                        'left':-100 +'%',
                      })

                      $('#container .section3 .design').css({
                        'position':'absolute',
                        'left':-100 +'%',
                      })


                  }else if(idx == 1){
                      $('#container .section3 .portfolio').css({
                          'display':'block',
                          'position':'absolute',
                          'left':-100 +'%',
                          'paddingLeft': -247 + 'px',
                          'box-sizing':'border-box',
                      }).animate({
                          'left' : '0',
                      }).parents('#container').children('.section3').children('.profile').children('.bx-slider').css({
                        'display':'none'
                      })

                      $('#container .section3 .profile').css({
                        'position':'absolute',
                        'left':-100 +'%',
                      })

                      $('#container .section3 .design').css({
                        'position':'absolute',
                        'left':-100 +'%',
                      })
                  }else if(idx == 2){
                      $('#container .section3 .design').css({
                          'display':'block',
                          'position':'absolute',
                          'left':-100 +'%',
                          'paddingLeft':  -247 + 'px',
                          'box-sizing':'border-box',
                      }).animate({
                          'left' : '0',
                      }).parents('#container').children('.section3').children('.profile').children('.bx-slider').css({
                        'display':'none'
                      })

                      $('#container .section3 .profile').css({
                        'position':'absolute',
                        'left':-100 +'%',
                      })

                      $('#container .section3 .design').css({
                        'position':'absolute',
                        'left':-100 +'%',
                      })
                  }
                }else if(winWidth <= 1024){

                  if(idx == 0){

                      $('#container .section3 .profile').css({
                          'width':100+'%',
                          'display':'block',
                          'position':'absolute',
                          'top':-100 +'%'
                      }).animate({
                          'top' : 0
                      }).children('.bx-slider').css({
                        'display':'block'
                      })

                      $('#container .section3 .portfolio').css({
                        'display':'none'
                      })

                      $('#container .section3 .design').css({
                        'display':'none'
                      })


                  }else if(idx == 1){
                      $('#container .section3 .portfolio').css({
                          'display':'block',
                          'position':'absolute',
                          'top':-100 +'%',
                      }).animate({
                          'top' : '0',
                      }).parents('#container').children('.section3').children('.profile').children('.bx-slider').css({
                        'display':'none'
                      })

                      $('#container .section3 .profile').css({
                        'display':'none'
                      })

                      $('#container .section3 .design').css({
                        'display':'none'
                      })
                  }else if(idx == 2){
                      $('#container .section3 .design').css({
                          'display':'block',
                          'position':'absolute',
                          'top':-100 +'%',
                      }).animate({
                          'top' : '0',
                      }).parents('#container').children('.section3').children('.profile').children('.bx-slider').css({
                        'display':'none'
                      })

                      $('#container .section3 .profile').css({
                        'display':'none'
                      })

                      $('#container .section3 .portfolio').css({
                        'display':'none'
                      })
                  }
              }else if(winWidth < 768){

                  if(idx == 0){

                      $('#container .section3 .profile').css({
                          'width':100+'%',
                          'display':'block',
                          'position':'absolute',
                          'top':-100 +'%',
                      }).animate({
                          'top' : 100 +'px'
                      }).children('.bx-slider').css({
                        'display':'block'
                      })

                      $('#container .section3 .portfolio').css({
                        'display':'none'
                      })

                      $('#container .section3 .design').css({
                        'display':'none'
                      })


                  }else if(idx == 1){
                      $('#container .section3 .portfolio').css({
                          'display':'block',
                          'position':'absolute',
                          'top':-100 +'%',
                      }).animate({
                          'top' : '0',
                      }).parents('#container').children('.section3').children('.profile').children('.bx-slider').css({
                        'display':'none'
                      })

                      $('#container .section3 .profile').css({
                        'display':'none'
                      })

                      $('#container .section3 .design').css({
                        'display':'none'
                      })
                  }else if(idx == 2){
                      $('#container .section3 .design').css({
                          'display':'block',
                          'position':'absolute',
                          'top':-100 +'%',
                      }).animate({
                          'top' : '0',
                      }).parents('#container').children('.section3').children('.profile').children('.bx-slider').css({
                        'display':'none'
                      })

                      $('#container .section3 .profile').css({
                        'display':'none'
                      })

                      $('#container .section3 .portfolio').css({
                        'display':'none'
                      })
                  }
                }
                return false;
            })

            $('#container .common .pr-top .closebtn').click(function(){

                var winHeight = $(window).height();
                winWidth = $(window).width();
                if(winWidth > 1024){
                    $('#container .common').animate({
                        'left' : -100 +'%',
                    })
                    $('#header .menuUp .nav ul li').removeClass('on')
                    $('body').css({
                        'height':winHeight,
                        'overflow':'hidden'
                    })
                    return false;
                }else if(winWidth <= 1024){
                    $('#container .common').css({
                        'display':'none'
                    })

                    $('#header .menuUp .nav ul li').removeClass('on')
                }else if(winWidth < 768){
                    $('#container .common').css({
                        'display':'none'
                    })

                    $('#header .menuUp .nav ul li').removeClass('on')
                }
            })

        })

    </script>
    <!--<script type="text/javascript" src="./libs/js/header.js"></script>-->
    <title>What'Up</title>
</head>
<body>

    <div id="wrapper">

        <div id="header">
            <div class="menu">
                <button type="button" class="menubtn"></button>
                <h1>
                    <a href="/">
                        <img src="./libs/images/logo.png" alt="logo" />
                    </a>
                </h1>
            </div>
            <div class="menuUp">
                <button type="button" class="closebtn"></button>
                <h1>
                    <a href="/">
                        <img src="./libs/images/logo.png" alt=""/>
                    </a>
                </h1>
                <div class="nav">
                    <ul>
                        <li>
                            <a href="#">PROFILE</a>
                        </li>
                        <li>
                            <a href="#">PORTFOLIO</a>
                        </li>
                        <li>
                            <a href="#">DESIGN</a>
                        </li>
                    </ul>
                </div>
                <div class="customer">
                    <p>CUSTOMER</br>010-6758-8803</p>
                </div>
                <div id="footer">
                    <p><strong>JUN PUBLISHING</strong></p>
                    <p>경기도 부천시 소사구 심곡본동</p>
                    <p>Copyright&copy; 2016 JUNNI. All Rights recomend.</p>
                </div>
            </div>

        </div>
        <!--header END -->

        <div id="container">
            <div class="section1">
                <p class="text1"><span>W</span>HO IS ..</p>
                <p class="text2">Trust, Passionate, honest</p>
                <p class="text3">WELCOME HOMEPAGE</p>
                <div class="morebtn">
                    <button type="button" name="button">MORE +</button>
                </div>
            </div>

            <!-- section1 END -->

            <div class="section2 closediv">
                <div class="section2_1">
                    <div class="s2_text">
                        <div class="title">
                            <strong>WELCOME TO JUN HOMEPAGE</strong>
                            <p class="subtext1">
                                홈페이지 방문을 진심으로 환영합니다.
                            </p>
                        </div>
                    </div>
                    <div class="s2_contents">
                        <p>-&nbsp;절대 어제를 후회하지 마라. 인생은 오늘의 나 안에 있고 내일은 스스로 만드는 것이다  </p>
                        <p>-&nbsp;직업에서 행복을 찾아라. 아니면 행복이 무엇인지 절대 모를 것이다 </p>
                        <p>-&nbsp;오랫동안 꿈을 그리는 사람은 마침내 그 꿈을 닮아 간다 </p>
                        <p>-&nbsp;언제나 현재에 집중할수 있다면 행복할것이다. </p>
                        <p>-&nbsp;삶이 있는 한 희망은 있다 </p>
                        <p>-&nbsp;피할수 없으면 즐겨라  </p>
                    </div>
                </div>
            </div>
            <!--  section2 END  -->
            <div class="section3">
                <div class="profile common closediv">
                    <div class="pr-top">
                        <button type="button" name="button" class="closebtn">닫기</button>
                    </div>
                    <div class="bx-slider">
                        <div class="bx-button">
                            <button type="button" name="button" class="nextbtn">다음</button>
                            <button type="button" name="button" class="prevbtn" >이전</button>
                        </div>
                        <div class="bx-view">
                            <ul>
                                <li class="on">
                                    <span class="viewimg1"></span>
                                    <a href="#"></a>
                                </li>
                                <li>
                                    <span class="viewimg2"></span>
                                    <a href="#"></a>
                                </li>
                                <li>
                                    <span class="viewimg3"></span>
                                    <a href="#"></a>
                                </li>
                                <li>
                                    <span class="viewimg4"></span>
                                    <a href="#"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="pr-content">
                        <div class="pr-title">
                            <h1>LEE YONG JUN PROFILE</h1>
                            <p>I LIEK PUBLISHING</p>
                        </div>
                        <div class="pr-intro">
                            <span class="pr-img"></span>
                            <div class="pr-profile" >
                                <div class="pr-txt-title">
                                    <strong>TRUST, PASSIONATE, HONEST</strong>
                                    <p class="subtext">I LIKE PUBLISHING</p>
                                </div>
                                <div class="pr-txt-content">
                                    <p>
                                        PhonNumber : 010-6758-8803</br>
                                        E-mail : lyjun0319@naver.com</br>
                                        KakaoTalk : rezys</br>
                                        Like : Music, EDM, Food, Americano</br>
                                        Skill : HTML/CSS , JQUERY, LESS, JAVASCRIPT, SVN, GITHUB, BOTTOSTRAP ,반응형
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- pr-intro END -->
                        <div class="pr-title bgColor">
                            <h1>PUBLISHING SKILL</h1>
                            <p>Little, Little</p>
                        </div>
                        <div class="pr-banner">
                            <ul>
                                <li class="ps ms">
                                    <span class="html"></span>
                                    <div class="bntxt">
                                        <p>
                                            <span class="on">★★★★★</span>
                                        </p>
                                        <p>
                                            웹표준/접근성에</br>마크업 작업 가능
                                        </p>
                                    </div>
                                </li>
                                <li class="ps ">
                                    <span class="css"></span>
                                    <div class="bntxt">
                                        <p>
                                            <span class="on">★★★★★</span>
                                        </p>
                                        <p>
                                            신규 시멘틱 태그와 </br>효과 활용이 가능합니다
                                        </p>
                                    </div>
                                </li>
                                <li class="ps ms mps">
                                    <span class="java"></span>
                                    <div class="bntxt">
                                        <p>
                                            <span class="on">★★</span>★★★
                                        </p>
                                        <p>
                                            자바스크립트의 기본 문법을</br> 이해하고 있습니다
                                        </p>
                                    </div>
                                </li>
                                <li class="mps">
                                    <span class="jquery"></span>
                                    <div class="bntxt">
                                        <p>
                                            <span class="on">★★★★</span>★
                                        </p>
                                        <p>
                                            웹에 필요한 간단한 </br>동작을 만들 수 있습니다.
                                        </p>
                                    </div>
                                </li>
                                <li class="ms mps">
                                    <span class="svn"></span>
                                    <div class="bntxt">
                                        <p>
                                            <span class="on">★★</span>★★★
                                        </p>
                                        <p>
                                            팀프로젝트 작업을 할 때 </br>사용 경험이 있습니다
                                        </p>
                                    </div>
                                </li>
                                <li class="mps">
                                    <span class="github"></span>
                                    <div class="bntxt">
                                        <p>
                                            <span class="on">★★★★</span>★
                                        </p>
                                        <p>
                                            저장소 활용 및 사용으로</br>프로젝트의사용경험이 있으며</br>깃험을 사용중에 있습니다
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- PR BANNER END  -->
                        <div class="pr-title">
                            <h1>WEB HISTORY</h1>
                            <p>SINCE 2011 .12 ~ 2016 .02</p>
                        </div>
                        <div class="pr-history">
                            <div class="impretty">
                                <strong>I'm Pretty</strong>
                                <p>
                                    I'm pretty 2010.03 ~ 2010.12(9개월근무)</br>
                                      운영 및 생산 관리 / 팀장</br>
                                </p>
                            </div>
                            <div class="nccj">
                                <strong>NCCJ/NCT</strong>
                                <p>
                                    NCCJ/NCT 2011.12 ~ 2014.12 <span>(37개월근무)</span></br>
                                    웹템플릿, 당근웹, 빌더, 고급템플릿형 맞춤제작</br>
                                     - 2011. 12 : 디자이너로 취업 / 서브페이지 수정 / 유지보수</br>
                                     - 2012. 08 : 메인시안 작업</br>
                                     - 2014. 01 : 1팀 주임승급 / 메인시안 / 시안초안 검수</br>
                                </p>
                            </div>
                            <div class="bizvalley">
                                <strong>Bizvalley</strong>
                                <p>
                                    BIZVALLEY 2015.03 ~ 2015.02(12개월근무)</br>
                                    웹에이전시 고객 맞춤형 제작</br>
                                     - 2015. 03 : 직급: 대리 / 맞춤형 제작 </br>
                                </p>
                            </div>
                        </div>
                        <!-- history End -->
                    </div>
                    <!-- content End -->
                </div>
                <!-- PR profile End -->

                <div class="portfolio common closediv">
                    <div class="pr-top">
                        <button type="button" name="button" class="closebtn">닫기</button>
                    </div>
                    <div class="pr-content">
                        <div class="pr-title">
                            <h1>PORTFOLIO</h1>
                            <p>I LIEK PUBLISHING</p>
                        </div>
                        <div class="pr-list">
                            <ul>
                                <li>
                                    <a href="http://pf.i-make.kr:8080/SKplanet/" target="_blank">
                                        <img src="./libs/images/SKplanet.jpg" alt="skplanet">
                                    </a>
                                    <div class="pr-subtext position">
                                        <div class="pr-subtextC">
                                            <strong>SKplanet</strong>
                                            <p>
                                                Team-project</br>
                                                Main마크업, 제이쿼리 작업
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="http://lyjun0303.cafe24.com/rbw" target="_blank">
                                        <img src="./libs/images/rbw.jpg" alt="rbw Entertament">
                                    </a>
                                    <div class="pr-subtext position1">
                                        <div class="pr-subtextC ">
                                            <strong>RBW ENTERTAINMENT</strong>
                                            <p>
                                                LESS 사용</br>
                                                LESS를 사용해 메인작업
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- PR portfolio End -->
                <div class="design common closediv">
                    <div class="pr-top">
                        <button type="button" name="button" class="closebtn">닫기</button>
                    </div>
                    <div class="pr-content">
                        <div class="pr-title">
                            <h1>DESIGN PORTFOLIO</h1>
                            <p>Since 2011~2016</p>
                        </div>
                        <div class="ds-list">
                            <ul>
                                <li>
                                    <a href="http://www.highcastle.co.kr/" target="_blank">
                                        <img src="./libs/images/portfoilo/ds1.jpg" alt="정선랜드">
                                    </a>
                                    <div class="pr-subtext position">
                                        <div class="pr-subtextC">
                                            <strong>정선랜드</strong>
                                            <p>
                                                Main시안, 서브페이지 작업
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="http://www.bizvalley.co.kr/" target="_blank">
                                        <img src="./libs/images/portfoilo/ds2.jpg" alt="비즈밸리">
                                    </a>
                                    <div class="pr-subtext position">
                                        <div class="pr-subtextC ">
                                            <strong>비즈밸리</strong>
                                            <p>
                                                Main시안, 서브페이지 작업
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="http://www.shinalabor.com/" target="_blank">
                                        <img src="./libs/images/portfoilo/ds3.jpg" alt="노무법인신아">
                                    </a>
                                    <div class="pr-subtext position">
                                        <div class="pr-subtextC">
                                            <strong>노무법인신아</strong>
                                            <p>
                                                Main시안, 서브페이지 작업
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="http://www.boratravel.com/" target="_blank">
                                        <img src="./libs/images/portfoilo/ds4.jpg" alt="보라여행사">
                                    </a>
                                    <div class="pr-subtext position">
                                        <div class="pr-subtextC">
                                            <strong>보라여행사</strong>
                                            <p>
                                                Main시안, 서브페이지 작업
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="http://www.anthropology.or.kr/" target="_blank">
                                        <img src="./libs/images/portfoilo/ds5.jpg" alt="서울대인류학과">
                                    </a>
                                    <div class="pr-subtext position">
                                        <div class="pr-subtextC">
                                            <strong>서울대인류학과</strong>
                                            <p>
                                                Main시안, 서브페이지 작업
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="http://www.kccaedu.com/" target="_blank">
                                        <img src="./libs/images/portfoilo/ds6.jpg" alt="KCCA 한국부식방지협회">
                                    </a>
                                    <div class="pr-subtext position">
                                        <div class="pr-subtextC ">
                                            <strong>한국부식방지기술협회</strong>
                                            <p>
                                                Main시안, 서브페이지 작업
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="http://www.toyotomi.kr/" target="_blank">
                                        <img src="./libs/images/portfoilo/ds7.jpg" alt="엔에스트레이딩">
                                    </a>
                                    <div class="pr-subtext position">
                                        <div class="pr-subtextC">
                                            <strong>22.엔에스트레이딩</strong>
                                            <p>
                                                Main시안, 서브페이지 작업
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="http://www.matinloc.com/" target="_blank">
                                        <img src="./libs/images/portfoilo/ds8.jpg" alt="matinloc resort">
                                    </a>
                                    <div class="pr-subtext position">
                                        <div class="pr-subtextC">
                                            <strong>Matinloc Resort</strong>
                                            <p>
                                                Main시안
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="http://www.skcpanacol.com/" target="_blank">
                                        <img src="./libs/images/portfoilo/ds9.jpg" alt="SKC pancol">
                                    </a>
                                    <div class="pr-subtext position">
                                        <div class="pr-subtextC">
                                            <strong>SKC pancol</strong>
                                            <p>
                                                Main시안, 서브페이지 작업
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="http://lyjun0303.cafe24.com/rbw" target="_blank">
                                        <img src="./libs/images/portfoilo/ds10.jpg" alt="rbw Entertament">
                                    </a>
                                    <div class="pr-subtext position">
                                        <div class="pr-subtextC ">
                                            <strong>테마팩 작업</strong>
                                            <p>
                                                Main 시안 , 테마팩 작업
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="http://pf.i-make.kr:8080/SKplanet/" target="_blank">
                                        <img src="./libs/images/portfoilo/ds11.jpg" alt="skplanet">
                                    </a>
                                    <div class="pr-subtext position">
                                        <div class="pr-subtextC">
                                            <strong> 테마팩 작업</strong>
                                            <p>
                                                Main 시안 , 테마팩 작업
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="http://pf.i-make.kr:8080/SKplanet/" target="_blank">
                                        <img src="./libs/images/portfoilo/ds12.jpg" alt="skplanet">
                                    </a>
                                    <div class="pr-subtext position">
                                        <div class="pr-subtextC">
                                            <strong> 테마팩 작업</strong>
                                            <p>
                                                Main 시안 , 테마팩 작업
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- sectin3 End -->
        </div>
        <!-- container END -->

    </div><!-- wrapper END -->

</body>
</html>
