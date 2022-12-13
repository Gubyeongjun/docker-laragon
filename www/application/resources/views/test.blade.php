<!DOCTYPE html>
<html lang="en">
<head>
  <title>test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Georgia, serif;
    }

    body{
      width: 1903px;
      height: 1000px;
    }

    #aa{
      text-align: center;
      display: inline-block;
    }

    li{
      list-style-type: none;
    }

    .head_img{
      margin: 0 auto;
      width: 100px;
      height: 100px;
      margin-bottom: -50px;
    }

    .sug{
      font-weight: bold;
      font-size: 20px;
      margin: 0 auto;
      text-align: center;
      height: 25px;
      width: 1440px;
    }

    .section{
      width: 1440px;
      display: inline-block;
    }

    .side{
      position: fixed;
      width: 300px;
      height: 350px;
      float: left;
      margin-left: 150px;
      margin-right: 100px;
      padding-top: 25px;
      padding-bottom: 50px;
      text-align: center;
      border: 1px solid gray;
      border-radius: 8px;
    }

    .side h3{
      margin-bottom: 30px;
    }

    .side_content{
      width: 200px;
      height: 350px;
      text-align: left;
      margin: 0 auto;
      line-height: 200%;
    }

    .side_content ul li a{
      color: black;
      cursor: pointer;
    }

    #slideShow{
      width: 810px;
      height: 460px;
      display: inline-block;
      position: relative;
      margin: 0px auto;
      overflow: hidden;
      margin-left: 550px;
    }

    .slides{      
      position: absolute;
      left: 0;
      top: 0;
      width: 2430px;
      transition: left 0.5s ease-out;
    }

    .slides li{
      float: left;
    }

    .slides li:last-child{
      float: left;
    }

    .controller{
      width: 800px;      
    }

    .controller span{
      position: absolute;
      background-color: transparent;
      color: black;
      text-align: center;
      border-radius: 50%;
      padding: 10px 15px;
      top: 45%;
      font-size: 1.3em;
      cursor: pointer;
    }

    .controller span:hover{
      background-color: rgba(128, 128, 128, 0.11);
    }

    .prev{
      left: 10px;
    }

    .prev:hover{
      transform: translateX(-10px);
    }

    .next{
      right: 10px;
    }

    .next:hover{
      transform: translateX(10px);
    }

    #main{
      width: 1200px;
      height: 700px;
      display: block;
      margin: 50px auto;
      margin-left: 500px;
    }

    .raw{
      width: 72%;
      height: 200px;
      margin-top: 10px;
      margin-left: 2.5%;
      background-color: #A9A9A9;
    }
    
    .cell{
      display: inline-block;
      width: 250px;
      height: 200px;
      background-color: lightgray;
      text-align: center;
      padding: 10px;
      margin-left: 25px;
    }

    .footer{
      width: 1903px;
      height: 200px;
      background-color: gray;
      margin-top: 50px;
      text-align: center;
    }

    .footer p {
      font-weight: bold;
    }

    .moveTopBtn{
      border: 1px solid black;
      border-radius: 50px;
      text-align: center;
      position: fixed;
      bottom: 6.5rem;
      right: 3rem;
      width: 3rem;
      height: 3rem;
      background: #fff;
      color: #000;
      cursor: pointer;
    }

    .moveBottomBtn{
      border: 1px solid black;
      border-radius: 50px;
      text-align: center;
      position: fixed;
      bottom: 2.5rem;
      right: 3rem;
      width: 3rem;
      height: 3rem;
      background: #fff;
      color: #000;
      cursor: pointer;
    }

    .fix{
      position: fixed;
      _position: absolute;
      width: 100%;
      bottom: 680px;
      z-index: 100;
    }

  </style>
</head>

<body>

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <div class="head_img">
        <a href="#"><img src="" alt="head_img"></a>
      </div>
      <h1>GAMEs</h1>
      <br>
      <p>PC / CONSOLE <br> 혼자나 여럿이서 하면 좋은 게임</p>
    </div>
  </div>

  <div class="sug">
    <p>추천 게임</p>
  </div>

  <div class="section">
    <div id="side_all">
      <div class="side">
        <h3>SIDE PART</h3>
        <div class="side_content">
          <ul>
            <li><a class="li_a">전체</a></li>
            <li><a class="li_a">싱글</a></li>
            <li><a class="li_a">멀티</a></li>
            <li><a class="li_a">PC</a></li>
            <li><a class="li_a">CONSOLE</a></li>
          </ul>
        </div>
      </div>
    </div>  

    <div id="slideShow" class="container">
      <ul class="slides">
        <li>
          <div id="aa" class="card" style="width:800px; height:450px;float:left;margin:5px;padding-top:10px;">
            <a href="#"><img src="https://www.kukinews.com/data/kuk/image/2022/08/08/kuk202208080217.647x.0.jpg" alt="pokemon" style="width: 600px; height:300px; border-radius:15px; margin-bottom:5px;"></a>
            <p>Pokemon</p>
            <p class="card-text">포켓몬이다</p>
            <button type="button" class="btn btn-outline-secondary" style="width:200px; text-align:center;">Go</button>
            <button type="button" class="btn btn-outline-secondary" style="width:200px; text-align:center;" onClick="window.open('https://pokemonkorea.co.kr/sv/', '_blank')">공식 사이트</button>
          </div>
        </li>

        <li>
          <div id="aa" class="card" style="width:800px; height:450px;float:left;margin:5px;padding-top:10px;">
            <a href="#"><img src="https://static-cdn.jtvnw.net/ttv-boxart/516173984_IGDB-144x192.jpg" alt="CULT OF THE LAMB" style="width: 600px; height:300px; border-radius:15px; margin-bottom:5px;"></a>
            <p>CULT OF THE LAMB</p>
            <p class="card-text">어린 양이 주교?</p>
            <button type="button" onclick="" class="btn btn-outline-secondary" style="width:200px; text-align:center;">Go</button>
            <button type="button" class="btn btn-outline-secondary" style="width:200px; text-align:center;" onClick="window.open('https://www.cultofthelamb.com/', '_blank')">공식 사이트</button>
          </div>
        </li>

        <li>
          <div id="aa" class="card" style="width:800px; height:450px;float:left;margin:5px;padding-top:10px;">
            <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9z2Io9xI9IuziURjf1Ql85-NZZP2IHUDVEQ&usqp=CAU.jpg" alt="fifa 23" style="width: 600px; height:300px; border-radius:15px; margin-bottom:5px;"></a>
            <p>FIFA 23</p>
            <p class="card-text">발롱도르 타러가자</p>
            <button type="button" onclick="" class="btn btn-outline-secondary" style="width:200px; text-align:center;">Go</button>
          </div>
        </li>

      </ul>
      <p class="controller">
        <span class="prev">&lang;</span>
        <span class="next">&rang;</span>
      </p>
    </div>  
  </div>

  <div id="main">
    <div class="raw">
      <div class="cell">1</div>
      <div class="cell">2</div>
      <div class="cell">3</div>
    </div>
    <div class="raw">
      <div class="cell">4</div>
      <div class="cell">5</div>
      <div class="cell">6</div>
    </div>
    <div class="raw">
      <div class="cell">7</div>
      <div class="cell">8</div>
      <div class="cell">9</div>
    </div>
  </div>

  <div class="footer">
    <p>Fix Your Fucking Attitude.</p>
  </div>

  <div class="moveTopBtn"><img src="https://cdn-icons-png.flaticon.com/512/271/271239.png" alt="up_arrow" style="width:16px; height: 16px; text-align: center; margin-top: 12px;"></div>
  <div class="moveBottomBtn"><img src="https://cdn-icons-png.flaticon.com/512/32/32195.png" alt="down_arrow" style="width:16px; height: 16px; text-align: center; margin-top: 12px;"></div>

  <script language='javascript'>
      const slides = document.querySelector('.slides'); //전체 슬라이드 컨테이너
      const slideImg = document.querySelectorAll('.slides li'); //모든 슬라이드들
      let currentIdx = 0; //현재 슬라이드 index
      const slideCount = slideImg.length; // 슬라이드 개수
      const prev = document.querySelector('.prev'); //이전 버튼
      const next = document.querySelector('.next'); //다음 버튼
      const slideWidth = 810; //한개의 슬라이드 넓이
      const slideMargin = 100; //슬라이드간의 margin 값

      //전체 슬라이드 컨테이너 넓이 설정
      slides.style.width = (slideWidth + slideMargin) * slideCount + 'px';

      function moveSlide(num) {
        slides.style.left = -num * 810 + 'px';
        currentIdx = num;
      }

      prev.addEventListener('click', function () {
        /*첫 번째 슬라이드로 표시 됐을때는 
        이전 버튼 눌러도 아무런 반응 없게 하기 위해 
        currentIdx !==0일때만 moveSlide 함수 불러옴 */

        if (currentIdx !== 0) moveSlide(currentIdx - 1);
      });

      next.addEventListener('click', function () {
        /* 마지막 슬라이드로 표시 됐을때는 
        다음 버튼 눌러도 아무런 반응 없게 하기 위해
        currentIdx !==slideCount - 1 일때만 
        moveSlide 함수 불러옴 */
        if (currentIdx !== slideCount - 1) {
          moveSlide(currentIdx + 1);
        }
      });

      const $topBtn = document.querySelector(".moveTopBtn");

      // 버튼 클릭 시 맨 위로 이동
      $topBtn.onclick = () => {
        window.scrollTo({ top: 0, behavior: "smooth" });  
      }

      const $bottomBtn = document.querySelector(".moveBottomBtn");

      // 버튼 클릭 시 페이지 하단으로 이동
      $bottomBtn.onclick = () => {
        window.scrollTo({ top: document.body.scrollHeight, behavior: "smooth" });
      };
      
      const $li_a = document.querySelector(".li_a");

      $li_a.onclick = () => {
        window.scrollTo({ top: 520, behavior: "smooth" });
      };

      $(window).scroll(  
        function(){  
          //스크롤의 위치가 상단에서 850보다 크면  
          if($(window).scrollTop() > 800){  /* if(window.pageYOffset >= $('원하는위치의엘리먼트').offset().top){ */  
            $('#side_all').addClass("fix");  //위의 if문에 대한 조건 만족시 fix라는 class를 부여함  
          }else{  
            $('#side_all').removeClass("fix");  //위의 if문에 대한 조건 아닌경우 fix라는 class를 삭제함  
          }  
        }  
      ); 

      $(function() {
        var marginLeft = parseInt( $(".side").css('margin-left') );
        $(window).scroll(function(e) {
          $(".side").css("margin-left", marginLeft - $(this).scrollLeft() );
        });
      });

    </script>

  </body>
</html>
