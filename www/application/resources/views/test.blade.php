<!DOCTYPE html>
<html lang="en">
<head>
  <title>test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>

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
      width: 200px;
      height: 200px;
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
      height: 280px;
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
      width: 910px;
      height: 640px;
      display: inline-block;
      position: relative;
      overflow: hidden;
      margin: 50px auto;
      margin-left: 460px;
    }

    .slides2{      
      position: absolute;
      left: 0;
      top: 0;
      width: 4550px;
      transition: left 0s ease-out;
    }

    .slides2 li{
      float: left;
    }

    .slides2 li:last-child{
      float: left;
    }

    .raw{
      width: 900px;
      height: 200px;
      margin-top: 10px;
      margin-left: 50px;
    }
    
    .cell{
      display: inline-block;
      width: 250px;
      height: 200px;
      text-align: center;
      padding: 10px;
      margin-left: 25px;
    }

    .footer{
      width: 1903px;
      height: 200px;
      background-color: gray;
      margin-top: 50px;
      padding-top: 20px;
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

    .cell img{
      width: 230px;
      height: 180px;
      border-radius:15px;
      transition : all 0.2s linear;
    }

    .cell:hover img{
      transform: scale(1.2);
    }

  </style>
</head>

<body>

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <div class="head_img">
        <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/8935/8935922.png" alt="head_img" style="width:200px; height:200px; "></a>
      </div>
      <!-- <h1>GAMEs</h1>
      <br>
      <p>PC / CONSOLE <br> 혼자나 여럿이서 하면 좋은 게임</p> -->
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
            <li><a id="li_a" class="li1">전체</a></li>
            <li><a id="li_a" class="li2">싱글</a></li>
            <li><a id="li_a" class="li3">멀티</a></li>
            <li><a id="li_a" class="li4">PC</a></li>
            <li><a id="li_a" class="li5">CONSOLE</a></li>
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
            <!-- <button type="button" class="btn btn-outline-secondary" style="width:200px; text-align:center;">Go</button> -->
            <button type="button" class="btn btn-outline-secondary" style="width:200px; text-align:center;" onClick="window.open('https://pokemonkorea.co.kr/sv/', '_blank')">공식 사이트</button>
          </div>
        </li>

        <li>
          <div id="aa" class="card" style="width:800px; height:450px;float:left;margin:5px;padding-top:10px;">
            <a href="#"><img src="https://static-cdn.jtvnw.net/ttv-boxart/516173984_IGDB-144x192.jpg" alt="CULT OF THE LAMB" style="width: 600px; height:300px; border-radius:15px; margin-bottom:5px;"></a>
            <p>CULT OF THE LAMB</p>
            <p class="card-text">어린 양이 주교?</p>
            <!-- <button type="button" onclick="" class="btn btn-outline-secondary" style="width:200px; text-align:center;">Go</button> -->
            <button type="button" class="btn btn-outline-secondary" style="width:200px; text-align:center;" onClick="window.open('https://www.cultofthelamb.com/', '_blank')">공식 사이트</button>
          </div>
        </li>

        <li>
          <div id="aa" class="card" style="width:800px; height:450px;float:left;margin:5px;padding-top:10px;">
            <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9z2Io9xI9IuziURjf1Ql85-NZZP2IHUDVEQ&usqp=CAU.jpg" alt="fifa 23" style="width: 600px; height:300px; border-radius:15px; margin-bottom:5px;"></a>
            <p>FIFA 23</p>
            <p class="card-text">발롱도르 타러가자</p>
            <button type="button" class="btn btn-outline-secondary" style="width:200px; text-align:center;" onClick="window.open('https://www.ea.com/ko-kr/games/fifa/fifa-23', '_blank')">공식 사이트</button>
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
    <ul class="slides2">
      <li>
        <div class="raw">
          <div class="cell">
            <a href="https://www.kukinews.com/data/kuk/image/2022/08/08/kuk202208080217.647x.0.jpg" data-toggle="lightbox" class="col-sm-4" data-title="포켓몬스터 스칼렛-바이올렛" data-footer="<h6>포켓몬스터 시리즈의 9세대 게임인 스칼렛-바이올렛.</h6><button type='button' class='btn btn-outline-secondary' style='width=100px; text-align:center;' onClick=&quot;window.open('https://pokemonkorea.co.kr/sv/', '_blank')&quot;>공식 사이트</button>">
              <img src="https://www.kukinews.com/data/kuk/image/2022/08/08/kuk202208080217.647x.0.jpg" alt="pokemon">
            </a>
          </div>
          <div class="cell">
            <a href="https://static-cdn.jtvnw.net/ttv-boxart/516173984_IGDB-144x192.jpg" data-toggle="lightbox" class="col-sm-4" data-title="CULT OF THE LAMB" data-footer="<h6>로그라이크 액션 어드벤처 및 경영 시뮬레이션 게임.</h6><button type='button' class='btn btn-outline-secondary' style='width=100px; text-align:center;' onClick=&quot;window.open('https://www.cultofthelamb.com/', '_blank')&quot;>공식 사이트</button>">
              <img src="https://static-cdn.jtvnw.net/ttv-boxart/516173984_IGDB-144x192.jpg" alt="CULT OF THE LAMB">
            </a>
          </div>
          <div class="cell">
            <a href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9z2Io9xI9IuziURjf1Ql85-NZZP2IHUDVEQ&usqp=CAU.jpg" data-toggle="lightbox" class="col-sm-4" data-title="FIFA 23" data-footer="<h6>FIFA 23 - EA 스포츠의 FIFA 시리즈 30번째 정규작이다.</h6><button type='button' class='btn btn-outline-secondary' style='width=100px; text-align:center;' onClick=&quot;window.open('https://www.ea.com/ko-kr/games/fifa/fifa-23', '_blank')&quot;>공식 사이트</button>">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9z2Io9xI9IuziURjf1Ql85-NZZP2IHUDVEQ&usqp=CAU.jpg" alt="FIFA23">
            </a>
          </div>
        </div>

        <div class="raw">
          <div class="cell">
            <a href="https://upload.wikimedia.org/wikipedia/fi/thumb/8/84/It-Takes-Two.jpg/600px-It-Takes-Two.jpg?20210412095651" data-toggle="lightbox" class="col-sm-4" data-title="It Takes Two" data-footer="<h6>It Takes Two</h6><button type='button' class='btn btn-outline-secondary' style='width=100px; text-align:center;' onClick=&quot;window.open('https://www.hazelight.se/games/it-takes-two/', '_blank')&quot;>공식 사이트</button>">
              <img src="https://upload.wikimedia.org/wikipedia/fi/thumb/8/84/It-Takes-Two.jpg/600px-It-Takes-Two.jpg?20210412095651" alt="it takes two">  
            </a>
          </div>
          <div class="cell">
            <a href="https://cdn2.unrealengine.com/fgss3-s09-primary-logo-rgb-1413x1381-da6908f5828e.png?resize=1&w=1920" data-toggle="lightbox" class="col-sm-4" data-title="Fall Guys" data-footer="<h6>Fall Guys</h6><button type='button' class='btn btn-outline-secondary' style='width=100px; text-align:center;' onClick=&quot;window.open('https://www.fallguys.com/ko', '_blank')&quot;>공식 사이트</button>">
              <img src="https://cdn2.unrealengine.com/fgss3-s09-primary-logo-rgb-1413x1381-da6908f5828e.png?resize=1&w=1920" alt="Fall Guys">
            </a>
          </div>
          <div class="cell">
            <a href="https://w.namu.la/s/c628bb2388b636d27e3a3b31bcc7424c2a0555e2c2f840a861121ea1abc1d431878fd07e3b84f1f177f9e5be287dddc578712db26b0f1c501c0d9cc3816aa778b68713890a1ab3dbf3885a2c1737daf866b2a2db170ae9bd3784e4129cffb3571c20d775e259a7ea523424f5b4a1ee99" data-toggle="lightbox" class="col-sm-4" data-title="카트라이더: 드리프트" data-footer="<h6>카트라이더 : 드리프트</h6><button type='button' class='btn btn-outline-secondary' style='width=100px; text-align:center;' onClick=&quot;window.open('https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwjl_4-D3v37AhXOwEwCHSgvCeMYABAAGgJ0bQ&ohost=www.google.com&cid=CAASJeRoEKvXT4G_X3Ci6aunkCC01TZeOeUE8s7HQzIaQAVk5UELgOA&sig=AOD64_1fDHgq_F47fxtJ_pa3dTIBRlNGQQ&q&adurl&ved=2ahUKEwj494mD3v37AhWaHHAKHcltCWoQ0Qx6BAgIEAE', '_blank')&quot;>공식 사이트</button>">
              <img src="https://w.namu.la/s/c628bb2388b636d27e3a3b31bcc7424c2a0555e2c2f840a861121ea1abc1d431878fd07e3b84f1f177f9e5be287dddc578712db26b0f1c501c0d9cc3816aa778b68713890a1ab3dbf3885a2c1737daf866b2a2db170ae9bd3784e4129cffb3571c20d775e259a7ea523424f5b4a1ee99" alt="카트라이더 드리프트">
            </a>
          </div>
        </div>

        <div class="raw">
          <div class="cell">
            <a href="https://w.namu.la/s/2f19c6d3b53bd81a6355bc79b6ff1a104c0f752ba97bb8b6f1dd68c196c8e75dd24cce7277c891037d280a51d34d57671ca709cb966c6e2821493e010af54d56898cb925ead10ae0f3d1d01e4c3eb2c4d1311cf14a7d2560756d41a2232c398a34e4509d819011766b055f57514b6b54" data-toggle="lightbox" class="col-sm-4" data-title="마리오 파티 슈퍼스타즈" data-footer="<h6>마리오 파티 슈퍼스타즈</h6><button type='button' class='btn btn-outline-secondary' style='width=100px; text-align:center;' onClick=&quot;window.open('https://www.nintendo.co.kr/software/switch/az82a/', '_blank')&quot;>공식 사이트</button>"><!---->
              <img src="https://w.namu.la/s/2f19c6d3b53bd81a6355bc79b6ff1a104c0f752ba97bb8b6f1dd68c196c8e75dd24cce7277c891037d280a51d34d57671ca709cb966c6e2821493e010af54d56898cb925ead10ae0f3d1d01e4c3eb2c4d1311cf14a7d2560756d41a2232c398a34e4509d819011766b055f57514b6b54" alt="마리오파티 슈퍼스타즈">
            </a>
          </div>
          <div class="cell">
            <a href="https://store.nintendo.co.kr/media/catalog/product/cache/8e3c84988db1fdb90470f4d01453d879/0/b/0beb41e342fc129c51b54cd9075c212ed208bdce61a15ac54dd7dc7e3426e118.jpeg" data-toggle="lightbox" class="col-sm-4" data-title="Ultimate Chicken Horse" data-footer="<h6>Ultimate Chicken Horse</h6><button type='button' class='btn btn-outline-secondary' style='width=100px; text-align:center;' onClick=&quot;window.open('https://www.cleverendeavourgames.com/ultimate-chicken-horse', '_blank')&quot;>공식 사이트</button>"><!---->
              <img src="https://store.nintendo.co.kr/media/catalog/product/cache/8e3c84988db1fdb90470f4d01453d879/0/b/0beb41e342fc129c51b54cd9075c212ed208bdce61a15ac54dd7dc7e3426e118.jpeg" alt="ultimate chicken horse">
            </a>
          </div>
          <div class="cell">
            <a href="https://static-cdn.jtvnw.net/ttv-boxart/1747174592_IGDB-144x192.jpg" data-toggle="lightbox" class="col-sm-4" data-title="ROUNDS" data-footer="<h6>ROUNDS</h6><button type='button' class='btn btn-outline-secondary' style='width=100px; text-align:center;' onClick=&quot;window.open('https://landfall.se/rounds', '_blank')&quot;>공식 사이트</button>"><!---->
              <img src="https://static-cdn.jtvnw.net/ttv-boxart/1747174592_IGDB-144x192.jpg" alt="ROUNDS">  
            </a>
          </div>
        </div>
      </li>

      <li>
        <div class="raw">
          <div class="cell">
          <a href="https://www.kukinews.com/data/kuk/image/2022/08/08/kuk202208080217.647x.0.jpg" data-toggle="lightbox" class="col-sm-4" data-title="포켓몬스터 스칼렛-바이올렛" data-footer="<h6>포켓몬스터 시리즈의 9세대 게임인 스칼렛-바이올렛.</h6><button type='button' class='btn btn-outline-secondary' style='width=100px; text-align:center;' onClick=&quot;window.open('https://pokemonkorea.co.kr/sv/', '_blank')&quot;>공식 사이트</button>">
              <img src="https://www.kukinews.com/data/kuk/image/2022/08/08/kuk202208080217.647x.0.jpg" alt="pokemon">
            </a>
          </div>
          <div class="cell">
          <a href="https://static-cdn.jtvnw.net/ttv-boxart/516173984_IGDB-144x192.jpg" data-toggle="lightbox" class="col-sm-4" data-title="CULT OF THE LAMB" data-footer="<h6>로그라이크 액션 어드벤처 및 경영 시뮬레이션 게임.</h6><button type='button' class='btn btn-outline-secondary' style='width=100px; text-align:center;' onClick=&quot;window.open('https://www.cultofthelamb.com/', '_blank')&quot;>공식 사이트</button>">
              <img src="https://static-cdn.jtvnw.net/ttv-boxart/516173984_IGDB-144x192.jpg" alt="CULT OF THE LAMB">  
            </a>
          </div>
          <div class="cell">
          <a href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9z2Io9xI9IuziURjf1Ql85-NZZP2IHUDVEQ&usqp=CAU.jpg" data-toggle="lightbox" class="col-sm-4" data-title="FIFA 23" data-footer="<h6>FIFA 23 - EA 스포츠의 FIFA 시리즈 30번째 정규작이다.</h6><button type='button' class='btn btn-outline-secondary' style='width=100px; text-align:center;' onClick=&quot;window.open('https://www.ea.com/ko-kr/games/fifa/fifa-23', '_blank')&quot;>공식 사이트</button>">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9z2Io9xI9IuziURjf1Ql85-NZZP2IHUDVEQ&usqp=CAU.jpg" alt="FIFA23">  
            </a>
          </div>
        </div>

        <div class="raw">
          <div class="cell">
          <a href="https://w.namu.la/s/c628bb2388b636d27e3a3b31bcc7424c2a0555e2c2f840a861121ea1abc1d431878fd07e3b84f1f177f9e5be287dddc578712db26b0f1c501c0d9cc3816aa778b68713890a1ab3dbf3885a2c1737daf866b2a2db170ae9bd3784e4129cffb3571c20d775e259a7ea523424f5b4a1ee99" data-toggle="lightbox" class="col-sm-4" data-title="카트라이더: 드리프트" data-footer="<h6>카트라이더 : 드리프트</h6><button type='button' class='btn btn-outline-secondary' style='width=100px; text-align:center;' onClick=&quot;window.open('https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwjl_4-D3v37AhXOwEwCHSgvCeMYABAAGgJ0bQ&ohost=www.google.com&cid=CAASJeRoEKvXT4G_X3Ci6aunkCC01TZeOeUE8s7HQzIaQAVk5UELgOA&sig=AOD64_1fDHgq_F47fxtJ_pa3dTIBRlNGQQ&q&adurl&ved=2ahUKEwj494mD3v37AhWaHHAKHcltCWoQ0Qx6BAgIEAE', '_blank')&quot;>공식 사이트</button>">
              <img src="https://w.namu.la/s/c628bb2388b636d27e3a3b31bcc7424c2a0555e2c2f840a861121ea1abc1d431878fd07e3b84f1f177f9e5be287dddc578712db26b0f1c501c0d9cc3816aa778b68713890a1ab3dbf3885a2c1737daf866b2a2db170ae9bd3784e4129cffb3571c20d775e259a7ea523424f5b4a1ee99" alt="카트라이더 드리프트">  
            </a>
          </div>
        </div>
      </li>

      <li>
        <div class="raw">
          <div class="cell">
          <a href="https://www.kukinews.com/data/kuk/image/2022/08/08/kuk202208080217.647x.0.jpg" data-toggle="lightbox" class="col-sm-4" data-title="포켓몬스터 스칼렛-바이올렛" data-footer="<h6>포켓몬스터 시리즈의 9세대 게임인 스칼렛-바이올렛.</h6><button type='button' class='btn btn-outline-secondary' style='width=100px; text-align:center;' onClick=&quot;window.open('https://pokemonkorea.co.kr/sv/', '_blank')&quot;>공식 사이트</button>">
              <img src="https://www.kukinews.com/data/kuk/image/2022/08/08/kuk202208080217.647x.0.jpg" alt="pokemon">  
            </a>
          </div>
          <div class="cell">
          <a href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9z2Io9xI9IuziURjf1Ql85-NZZP2IHUDVEQ&usqp=CAU.jpg" data-toggle="lightbox" class="col-sm-4" data-title="FIFA 23" data-footer="<h6>FIFA 23 - EA 스포츠의 FIFA 시리즈 30번째 정규작이다.</h6><button type='button' class='btn btn-outline-secondary' style='width=100px; text-align:center;' onClick=&quot;window.open('https://www.ea.com/ko-kr/games/fifa/fifa-23', '_blank')&quot;>공식 사이트</button>">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9z2Io9xI9IuziURjf1Ql85-NZZP2IHUDVEQ&usqp=CAU.jpg" alt="FIFA23">  
            </a>
          </div>
          <div class="cell">
          <a href="https://upload.wikimedia.org/wikipedia/fi/thumb/8/84/It-Takes-Two.jpg/600px-It-Takes-Two.jpg?20210412095651" data-toggle="lightbox" class="col-sm-4" data-title="It Takes Two" data-footer="<h6>It Takes Two</h6><button type='button' class='btn btn-outline-secondary' style='width=100px; text-align:center;' onClick=&quot;window.open('https://www.hazelight.se/games/it-takes-two/', '_blank')&quot;>공식 사이트</button>">
              <img src="https://upload.wikimedia.org/wikipedia/fi/thumb/8/84/It-Takes-Two.jpg/600px-It-Takes-Two.jpg?20210412095651" alt="it takes two">  
            </a>
          </div>
        </div>

        <div class="raw">
          <div class="cell">
          <a href="https://cdn2.unrealengine.com/fgss3-s09-primary-logo-rgb-1413x1381-da6908f5828e.png?resize=1&w=1920" data-toggle="lightbox" class="col-sm-4" data-title="Fall Guys" data-footer="<h6>Fall Guys</h6><button type='button' class='btn btn-outline-secondary' style='width=100px; text-align:center;' onClick=&quot;window.open('https://www.fallguys.com/ko', '_blank')&quot;>공식 사이트</button>">
              <img src="https://cdn2.unrealengine.com/fgss3-s09-primary-logo-rgb-1413x1381-da6908f5828e.png?resize=1&w=1920" alt="Fall Guys">  
            </a>
          </div>
          <div class="cell">
          <a href="https://w.namu.la/s/c628bb2388b636d27e3a3b31bcc7424c2a0555e2c2f840a861121ea1abc1d431878fd07e3b84f1f177f9e5be287dddc578712db26b0f1c501c0d9cc3816aa778b68713890a1ab3dbf3885a2c1737daf866b2a2db170ae9bd3784e4129cffb3571c20d775e259a7ea523424f5b4a1ee99" data-toggle="lightbox" class="col-sm-4" data-title="카트라이더: 드리프트" data-footer="<h6>카트라이더 : 드리프트</h6><button type='button' class='btn btn-outline-secondary' style='width=100px; text-align:center;' onClick=&quot;window.open('https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwjl_4-D3v37AhXOwEwCHSgvCeMYABAAGgJ0bQ&ohost=www.google.com&cid=CAASJeRoEKvXT4G_X3Ci6aunkCC01TZeOeUE8s7HQzIaQAVk5UELgOA&sig=AOD64_1fDHgq_F47fxtJ_pa3dTIBRlNGQQ&q&adurl&ved=2ahUKEwj494mD3v37AhWaHHAKHcltCWoQ0Qx6BAgIEAE', '_blank')&quot;>공식 사이트</button>">
              <img src="https://w.namu.la/s/c628bb2388b636d27e3a3b31bcc7424c2a0555e2c2f840a861121ea1abc1d431878fd07e3b84f1f177f9e5be287dddc578712db26b0f1c501c0d9cc3816aa778b68713890a1ab3dbf3885a2c1737daf866b2a2db170ae9bd3784e4129cffb3571c20d775e259a7ea523424f5b4a1ee99" alt="카트라이더 드리프트">  
            </a>
          </div>
          <div class="cell">
          <a href="https://w.namu.la/s/2f19c6d3b53bd81a6355bc79b6ff1a104c0f752ba97bb8b6f1dd68c196c8e75dd24cce7277c891037d280a51d34d57671ca709cb966c6e2821493e010af54d56898cb925ead10ae0f3d1d01e4c3eb2c4d1311cf14a7d2560756d41a2232c398a34e4509d819011766b055f57514b6b54" data-toggle="lightbox" class="col-sm-4" data-title="마리오 파티 슈퍼스타즈" data-footer="<h6>마리오 파티 슈퍼스타즈</h6><button type='button' class='btn btn-outline-secondary' style='width=100px; text-align:center;' onClick=&quot;window.open('https://www.nintendo.co.kr/software/switch/az82a/', '_blank')&quot;>공식 사이트</button>"><!---->
              <img src="https://w.namu.la/s/2f19c6d3b53bd81a6355bc79b6ff1a104c0f752ba97bb8b6f1dd68c196c8e75dd24cce7277c891037d280a51d34d57671ca709cb966c6e2821493e010af54d56898cb925ead10ae0f3d1d01e4c3eb2c4d1311cf14a7d2560756d41a2232c398a34e4509d819011766b055f57514b6b54" alt="마리오파티 슈퍼스타즈">  
            </a>
          </div>
        </div>

        <div class="raw">
          <div class="cell">
          <a href="https://store.nintendo.co.kr/media/catalog/product/cache/8e3c84988db1fdb90470f4d01453d879/0/b/0beb41e342fc129c51b54cd9075c212ed208bdce61a15ac54dd7dc7e3426e118.jpeg" data-toggle="lightbox" class="col-sm-4" data-title="Ultimate Chicken Horse" data-footer="<h6>Ultimate Chicken Horse</h6><button type='button' class='btn btn-outline-secondary' style='width=100px; text-align:center;' onClick=&quot;window.open('https://www.cleverendeavourgames.com/ultimate-chicken-horse', '_blank')&quot;>공식 사이트</button>"><!---->
              <img src="https://store.nintendo.co.kr/media/catalog/product/cache/8e3c84988db1fdb90470f4d01453d879/0/b/0beb41e342fc129c51b54cd9075c212ed208bdce61a15ac54dd7dc7e3426e118.jpeg" alt="ultimate chicken horse">  
            </a>
          </div>
          <div class="cell">
          <a href="https://static-cdn.jtvnw.net/ttv-boxart/1747174592_IGDB-144x192.jpg" data-toggle="lightbox" class="col-sm-4" data-title="ROUNDS" data-footer="<h6>ROUNDS</h6><button type='button' class='btn btn-outline-secondary' style='width=100px; text-align:center;' onClick=&quot;window.open('https://landfall.se/rounds', '_blank')&quot;>공식 사이트</button>"><!---->
              <img src="https://static-cdn.jtvnw.net/ttv-boxart/1747174592_IGDB-144x192.jpg" alt="ROUNDS">  
            </a>
          </div>
        </div>
      </li>

      <li>
        <div class="raw">
          <div class="cell">
          <a href="https://static-cdn.jtvnw.net/ttv-boxart/516173984_IGDB-144x192.jpg" data-toggle="lightbox" class="col-sm-4" data-title="CULT OF THE LAMB" data-footer="<h6>로그라이크 액션 어드벤처 및 경영 시뮬레이션 게임.</h6><button type='button' class='btn btn-outline-secondary' style='width=100px; text-align:center;' onClick=&quot;window.open('https://www.cultofthelamb.com/', '_blank')&quot;>공식 사이트</button>">
              <img src="https://static-cdn.jtvnw.net/ttv-boxart/516173984_IGDB-144x192.jpg" alt="CULT OF THE LAMB">  
            </a>
          </div>
          <div class="cell">
          <a href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9z2Io9xI9IuziURjf1Ql85-NZZP2IHUDVEQ&usqp=CAU.jpg" data-toggle="lightbox" class="col-sm-4" data-title="FIFA 23" data-footer="<h6>FIFA 23 - EA 스포츠의 FIFA 시리즈 30번째 정규작이다.</h6><button type='button' class='btn btn-outline-secondary' style='width=100px; text-align:center;' onClick=&quot;window.open('https://www.ea.com/ko-kr/games/fifa/fifa-23', '_blank')&quot;>공식 사이트</button>">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9z2Io9xI9IuziURjf1Ql85-NZZP2IHUDVEQ&usqp=CAU.jpg" alt="FIFA23">  
            </a>
          </div>
          <div class="cell">
          <a href="https://upload.wikimedia.org/wikipedia/fi/thumb/8/84/It-Takes-Two.jpg/600px-It-Takes-Two.jpg?20210412095651" data-toggle="lightbox" class="col-sm-4" data-title="It Takes Two" data-footer="<h6>It Takes Two</h6><button type='button' class='btn btn-outline-secondary' style='width=100px; text-align:center;' onClick=&quot;window.open('https://www.hazelight.se/games/it-takes-two/', '_blank')&quot;>공식 사이트</button>">
              <img src="https://upload.wikimedia.org/wikipedia/fi/thumb/8/84/It-Takes-Two.jpg/600px-It-Takes-Two.jpg?20210412095651" alt="it takes two">  
            </a>
          </div>
        </div>

        <div class="raw">
          <div class="cell">
          <a href="https://cdn2.unrealengine.com/fgss3-s09-primary-logo-rgb-1413x1381-da6908f5828e.png?resize=1&w=1920" data-toggle="lightbox" class="col-sm-4" data-title="Fall Guys" data-footer="<h6>Fall Guys</h6><button type='button' class='btn btn-outline-secondary' style='width=100px; text-align:center;' onClick=&quot;window.open('https://www.fallguys.com/ko', '_blank')&quot;>공식 사이트</button>">
              <img src="https://cdn2.unrealengine.com/fgss3-s09-primary-logo-rgb-1413x1381-da6908f5828e.png?resize=1&w=1920" alt="Fall Guys">  
            </a>
          </div>
          <div class="cell">
          <a href="https://w.namu.la/s/c628bb2388b636d27e3a3b31bcc7424c2a0555e2c2f840a861121ea1abc1d431878fd07e3b84f1f177f9e5be287dddc578712db26b0f1c501c0d9cc3816aa778b68713890a1ab3dbf3885a2c1737daf866b2a2db170ae9bd3784e4129cffb3571c20d775e259a7ea523424f5b4a1ee99" data-toggle="lightbox" class="col-sm-4" data-title="카트라이더: 드리프트" data-footer="<h6>카트라이더 : 드리프트</h6><button type='button' class='btn btn-outline-secondary' style='width=100px; text-align:center;' onClick=&quot;window.open('https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwjl_4-D3v37AhXOwEwCHSgvCeMYABAAGgJ0bQ&ohost=www.google.com&cid=CAASJeRoEKvXT4G_X3Ci6aunkCC01TZeOeUE8s7HQzIaQAVk5UELgOA&sig=AOD64_1fDHgq_F47fxtJ_pa3dTIBRlNGQQ&q&adurl&ved=2ahUKEwj494mD3v37AhWaHHAKHcltCWoQ0Qx6BAgIEAE', '_blank')&quot;>공식 사이트</button>">
              <img src="https://w.namu.la/s/c628bb2388b636d27e3a3b31bcc7424c2a0555e2c2f840a861121ea1abc1d431878fd07e3b84f1f177f9e5be287dddc578712db26b0f1c501c0d9cc3816aa778b68713890a1ab3dbf3885a2c1737daf866b2a2db170ae9bd3784e4129cffb3571c20d775e259a7ea523424f5b4a1ee99" alt="카트라이더 드리프트">  
            </a>
          </div>
          <div class="cell">
          <a href="https://store.nintendo.co.kr/media/catalog/product/cache/8e3c84988db1fdb90470f4d01453d879/0/b/0beb41e342fc129c51b54cd9075c212ed208bdce61a15ac54dd7dc7e3426e118.jpeg" data-toggle="lightbox" class="col-sm-4" data-title="Ultimate Chicken Horse" data-footer="<h6>Ultimate Chicken Horse</h6><button type='button' class='btn btn-outline-secondary' style='width=100px; text-align:center;' onClick=&quot;window.open('https://www.cleverendeavourgames.com/ultimate-chicken-horse', '_blank')&quot;>공식 사이트</button>"><!---->
              <img src="https://store.nintendo.co.kr/media/catalog/product/cache/8e3c84988db1fdb90470f4d01453d879/0/b/0beb41e342fc129c51b54cd9075c212ed208bdce61a15ac54dd7dc7e3426e118.jpeg" alt="ultimate chicken horse">    
            </a>
          </div>
        </div>

        <div class="raw">
          <div class="cell">
          <a href="https://static-cdn.jtvnw.net/ttv-boxart/1747174592_IGDB-144x192.jpg" data-toggle="lightbox" class="col-sm-4" data-title="ROUNDS" data-footer="<h6>ROUNDS</h6><button type='button' class='btn btn-outline-secondary' style='width=100px; text-align:center;' onClick=&quot;window.open('https://landfall.se/rounds', '_blank')&quot;>공식 사이트</button>"><!---->
              <img src="https://static-cdn.jtvnw.net/ttv-boxart/1747174592_IGDB-144x192.jpg" alt="ROUNDS">  
            </a>
          </div>
        </div>
      </li>

      <li>
        <div class="raw">
          <div class="cell">
          <a href="https://www.kukinews.com/data/kuk/image/2022/08/08/kuk202208080217.647x.0.jpg" data-toggle="lightbox" class="col-sm-4" data-title="포켓몬스터 스칼렛-바이올렛" data-footer="<h6>포켓몬스터 시리즈의 9세대 게임인 스칼렛-바이올렛.</h6><button type='button' class='btn btn-outline-secondary' style='width=100px; text-align:center;' onClick=&quot;window.open('https://pokemonkorea.co.kr/sv/', '_blank')&quot;>공식 사이트</button>">
              <img src="https://www.kukinews.com/data/kuk/image/2022/08/08/kuk202208080217.647x.0.jpg" alt="pokemon">  
            </a>
          </div>
          <div class="cell">
          <a href="https://static-cdn.jtvnw.net/ttv-boxart/516173984_IGDB-144x192.jpg" data-toggle="lightbox" class="col-sm-4" data-title="CULT OF THE LAMB" data-footer="<h6>로그라이크 액션 어드벤처 및 경영 시뮬레이션 게임.</h6><button type='button' class='btn btn-outline-secondary' style='width=100px; text-align:center;' onClick=&quot;window.open('https://www.cultofthelamb.com/', '_blank')&quot;>공식 사이트</button>">
              <img src="https://static-cdn.jtvnw.net/ttv-boxart/516173984_IGDB-144x192.jpg" alt="CULT OF THE LAMB">  
            </a>
          </div>
          <div class="cell">
          <a href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9z2Io9xI9IuziURjf1Ql85-NZZP2IHUDVEQ&usqp=CAU.jpg" data-toggle="lightbox" class="col-sm-4" data-title="FIFA 23" data-footer="<h6>FIFA 23 - EA 스포츠의 FIFA 시리즈 30번째 정규작이다.</h6><button type='button' class='btn btn-outline-secondary' style='width=100px; text-align:center;' onClick=&quot;window.open('https://www.ea.com/ko-kr/games/fifa/fifa-23', '_blank')&quot;>공식 사이트</button>">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9z2Io9xI9IuziURjf1Ql85-NZZP2IHUDVEQ&usqp=CAU.jpg" alt="FIFA23">  
            </a>
          </div>
        </div>

        <div class="raw">
          <div class="cell">
          <a href="https://upload.wikimedia.org/wikipedia/fi/thumb/8/84/It-Takes-Two.jpg/600px-It-Takes-Two.jpg?20210412095651" data-toggle="lightbox" class="col-sm-4" data-title="It Takes Two" data-footer="<h6>It Takes Two</h6><button type='button' class='btn btn-outline-secondary' style='width=100px; text-align:center;' onClick=&quot;window.open('https://www.hazelight.se/games/it-takes-two/', '_blank')&quot;>공식 사이트</button>">
              <img src="https://upload.wikimedia.org/wikipedia/fi/thumb/8/84/It-Takes-Two.jpg/600px-It-Takes-Two.jpg?20210412095651" alt="it takes two">  
            </a>
          </div>
          <div class="cell">
          <a href="https://cdn2.unrealengine.com/fgss3-s09-primary-logo-rgb-1413x1381-da6908f5828e.png?resize=1&w=1920" data-toggle="lightbox" class="col-sm-4" data-title="Fall Guys" data-footer="<h6>Fall Guys</h6><button type='button' class='btn btn-outline-secondary' style='width=100px; text-align:center;' onClick=&quot;window.open('https://www.fallguys.com/ko', '_blank')&quot;>공식 사이트</button>">
              <img src="https://cdn2.unrealengine.com/fgss3-s09-primary-logo-rgb-1413x1381-da6908f5828e.png?resize=1&w=1920" alt="Fall Guys">  
            </a>
          </div>
          <div class="cell">
          <a href="https://w.namu.la/s/c628bb2388b636d27e3a3b31bcc7424c2a0555e2c2f840a861121ea1abc1d431878fd07e3b84f1f177f9e5be287dddc578712db26b0f1c501c0d9cc3816aa778b68713890a1ab3dbf3885a2c1737daf866b2a2db170ae9bd3784e4129cffb3571c20d775e259a7ea523424f5b4a1ee99" data-toggle="lightbox" class="col-sm-4" data-title="카트라이더: 드리프트" data-footer="<h6>카트라이더 : 드리프트</h6><button type='button' class='btn btn-outline-secondary' style='width=100px; text-align:center;' onClick=&quot;window.open('https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwjl_4-D3v37AhXOwEwCHSgvCeMYABAAGgJ0bQ&ohost=www.google.com&cid=CAASJeRoEKvXT4G_X3Ci6aunkCC01TZeOeUE8s7HQzIaQAVk5UELgOA&sig=AOD64_1fDHgq_F47fxtJ_pa3dTIBRlNGQQ&q&adurl&ved=2ahUKEwj494mD3v37AhWaHHAKHcltCWoQ0Qx6BAgIEAE', '_blank')&quot;>공식 사이트</button>">
              <img src="https://w.namu.la/s/c628bb2388b636d27e3a3b31bcc7424c2a0555e2c2f840a861121ea1abc1d431878fd07e3b84f1f177f9e5be287dddc578712db26b0f1c501c0d9cc3816aa778b68713890a1ab3dbf3885a2c1737daf866b2a2db170ae9bd3784e4129cffb3571c20d775e259a7ea523424f5b4a1ee99" alt="카트라이더 드리프트">  
            </a>
          </div>
        </div>

        <div class="raw">
          <div class="cell">
          <a href="https://w.namu.la/s/2f19c6d3b53bd81a6355bc79b6ff1a104c0f752ba97bb8b6f1dd68c196c8e75dd24cce7277c891037d280a51d34d57671ca709cb966c6e2821493e010af54d56898cb925ead10ae0f3d1d01e4c3eb2c4d1311cf14a7d2560756d41a2232c398a34e4509d819011766b055f57514b6b54" data-toggle="lightbox" class="col-sm-4" data-title="마리오 파티 슈퍼스타즈" data-footer="<h6>마리오 파티 슈퍼스타즈</h6><button type='button' class='btn btn-outline-secondary' style='width=100px; text-align:center;' onClick=&quot;window.open('https://www.nintendo.co.kr/software/switch/az82a/', '_blank')&quot;>공식 사이트</button>"><!---->
              <img src="https://w.namu.la/s/2f19c6d3b53bd81a6355bc79b6ff1a104c0f752ba97bb8b6f1dd68c196c8e75dd24cce7277c891037d280a51d34d57671ca709cb966c6e2821493e010af54d56898cb925ead10ae0f3d1d01e4c3eb2c4d1311cf14a7d2560756d41a2232c398a34e4509d819011766b055f57514b6b54" alt="마리오파티 슈퍼스타즈">  
            </a>
          </div>
          <div class="cell">
          <a href="https://store.nintendo.co.kr/media/catalog/product/cache/8e3c84988db1fdb90470f4d01453d879/0/b/0beb41e342fc129c51b54cd9075c212ed208bdce61a15ac54dd7dc7e3426e118.jpeg" data-toggle="lightbox" class="col-sm-4" data-title="Ultimate Chicken Horse" data-footer="<h6>Ultimate Chicken Horse</h6><button type='button' class='btn btn-outline-secondary' style='width=100px; text-align:center;' onClick=&quot;window.open('https://www.cleverendeavourgames.com/ultimate-chicken-horse', '_blank')&quot;>공식 사이트</button>"><!---->
              <img src="https://store.nintendo.co.kr/media/catalog/product/cache/8e3c84988db1fdb90470f4d01453d879/0/b/0beb41e342fc129c51b54cd9075c212ed208bdce61a15ac54dd7dc7e3426e118.jpeg" alt="ultimate chicken horse">  
            </a>
          </div>
        </div>
      </li>
    </ul>
  </div>

  <div class="footer">
    <p>게임 구매 사이트</p>
    <div class="footer_icon" style="width:300px; display:inline-block; text-align:center; margin-top:20px;">
      <img src="https://cdn-icons-png.flaticon.com/512/1241/1241011.png" alt="steam" style="width:50px; height:50px; margin-left:10px; margin-right:10px;">
      <img src="https://cdn-icons-png.flaticon.com/512/871/871469.png" alt="nintendo switch" style="width:50px; height:50px; margin-left:10px; margin-right:10px;">
      <img src="https://cdn-icons-png.flaticon.com/512/1240/1240998.png" alt="origin" style="width:50px; height:50px; margin-left:10px; margin-right:10px;">
    </div>
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

      const slides2 = document.querySelector('.slides2'); //전체 슬라이드 컨테이너
      const slideImg2 = document.querySelectorAll('.slides2 li'); //모든 슬라이드들
      let currentIdx2 = 0; //현재 슬라이드 index
      const slideCount2 = slideImg2.length; // 슬라이드 개수
      const li1 = document.querySelector('.li1'); //전체
      const li2 = document.querySelector('.li2'); //싱글
      const li3 = document.querySelector('.li3'); //멀티
      const li4 = document.querySelector('.li4'); //PC
      const li5 = document.querySelector('.li5'); //CONSOLE
      const slideWidth2 = 910; //한개의 슬라이드 넓이
      const slideMargin2 = 100; //슬라이드간의 margin 값

      //전체 슬라이드 컨테이너 넓이 설정
      slides2.style.width = (slideWidth2 + slideMargin2) * slideCount2 + 'px';

      function moveSlide2(num) {
        slides2.style.left = -num * 950 + 'px';
        currentIdx2 = num;
      }

      li1.addEventListener('click', function () {
        moveSlide2(0);
      });

      li2.addEventListener('click', function () {
        moveSlide2(1);
      });

      li3.addEventListener('click', function () {
        moveSlide2(2);
      });

      li4.addEventListener('click', function () {
        moveSlide2(3);
      });

      li5.addEventListener('click', function () {
        moveSlide2(4);
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
      }
      
      const $li_a = document.querySelector("#li_a");

      $li_a.onclick = () => {
        window.scrollTo({ top: 520, behavior: "smooth" });
      }

      $(window).scroll(  
        function(){  
          //스크롤의 위치가 상단에서 850보다 크면  
          if($(window).scrollTop() > 900){  /* if(window.pageYOffset >= $('원하는위치의엘리먼트').offset().top){ */  
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

      $(document).on('click', '[data-toggle="lightbox"]', function(event){
        event.preventDefault();
        $(this).ekkoLightbox();
      });
      
    </script>

  </body>
</html>
