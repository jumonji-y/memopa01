<?php
$siteTitle = 'リスト作成';
 require("head.php");
?>


<body class="page-logined page-1colum">

    <style>
      .form .btn {
        float: none;
        margin: 30px 15px;
      }
    
      .form {
        text-align: center;
      }
    
      .form .btn-create {
        background: #1CAE35;
      }
    
      .form .btn-create:hover {
        background: #32cd32;
      }
    </style>

  <!-- ヘッダー  -->
  <header>
    <div class="site-width">
      <h1><a href="index.html">memopa</a></h1>
      <nav id="top-nav">
        <ul>
          <li><a href="">ログアウト</a></li>
          <li><a href="myMemo.html">マイメモ</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- メインコンテンツ -->
  <div id="contents" class="site-width">

    <!-- Main -->
    <section id="main" class="list">
      <div class="form-container">
        <form action="" method="post" class="form">

          <!-- リスト -->
          <label class="memo-title">リスト名</label>
          <input type="text" name="name">

          <div class="btn-container">
            <input type="submit" class="btn btn-mid btn-create" value="作成">
          </div>
        </form>
      </div>
    </section>

  </div>

  <!-- footer -->
  <footer id="footer">
    Copyright memopa. All Rights Reserved.
  </footer>

  <!-- innnerHeightに関しての参考記事→ https://www.flatflag.nir87.com/height-1083 -->
  <!-- innerHeight = 要素＋padding(borderの内側)を取得 -->
  <!-- outerHeight = 要素＋padding+borderを取得 -->
  <!-- window ＝ 画面上に出てくる小さい画面のこと-->
  <script> src = "js/vendor/jquery-3.4.1.min.js"</script>
  <script>
    $(function () {
      var $ftr = $('#footer');
      if (window.innerHeight() > $ftr.offset().top + $ftr.outerHeight()) {
        $ftr.attr({ 'style': 'position: fixed; top:' + (window.innerHeight - $ftr.outerHeight()) + 'px;' });
      }
    });
  </script>

</body>

</html>