<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./nickname.js"></script>
    <link href="./nickname.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <div><a href="./home.html">홈</a></div>
        <div><a href="./history.html">삼겹살의 기원</a></div>
        <div><a href="./recipe.html">삼겹살 레시피</a></div>
        <div><a href="./nickname.html">삼겹살 애칭 정하기</a></div>
    </div>
    <div class="Line"></div>
    <div class="date">현재시간은 <?php $apache_server_time = date('Y-m-d H:i:s'); echo "아파치 웹 서버의 현재 시간은 " . $apache_server_time . " 입니다.";?></div>
    <div class="contentFrame">
        <div class="makeNick">
          <img src="https://search.pstatic.net/common/?src=http%3A%2F%2Fblogfiles.naver.net%2FMjAyNDAxMjBfMTg1%2FMDAxNzA1NzI3MzMxNTY2.ccA778xxqPsVoMq2rl3K1h6Z9UX9YFDlbkcXsKXjgycg.gtnn9ml4Ykq2HxtAiiNTHgpBDiccDPlm2ht3770hm-kg.JPEG.recipekorea%2F69f0a2aad1ab2f44c146b6b3765d26ba_1586006837_7207.jpg&type=sc960_832" width="800px"></img>
          <div class="nickname" id="nickname">애칭을 정해주세요.</div>
          <input class="inputName" type="text" id="kk"></input>
          <button class="save" id="save" onClick="onClickNickname()">저장하기</button>
        </div>
    </div>
</body>
</html>