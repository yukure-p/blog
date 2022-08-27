<?php
/*
Template Name: 1column
Template Post Type: car_lease
*/
?>

<?php get_header(); ?>
<?php if(have_posts()):?>
<?php while (have_posts()): the_post(); ?>
<div class="l-frame">
    <div class="l-entry">
      <?php breadcrumb(); ?>
    </div>

<section>
  
    <div class="l-container">
      <div class="l-section">

        <main>
          <div class="contents-box colum1">
            <div class="entry">
                <h1 class="l-entry-title" ><span><?php echo get_the_title($post->ID); ?></span></h1>
                <div class="l-entry-info row-2col">
                  
                  <time datetime="<?php echo get_the_date('Y.n.d'); ?>"><?php echo get_the_date('Y.n.d'); ?></time>
                  <?php get_template_part('inc/cat-tag'); ?>
                  
                </div>
                <div class="entry-img"><img src="<?php echo get_template_directory_uri()?>/img/kiasmos.jpg" alt="電子商店OPEN GUIDE" width="38" ></div>
            </div>
            <div class="table-of-content">
                <h1 class="aside-tit">この記事の目次</h1>
                <div class="l-aside-inner">
                  <ol class="l-aside-menu index" id="indexList">
                    <li><a href="#index1">サイドメニュー</a>
                      <ol class="l-aside-menu-under">
                        <li><a href="#index2">ああああああaaaaaaaaa</a></li>
                        <li><a href="#index3">いいいいいいbbbbbbbbbbb</a></li>
                        <li><a href="#index4">うううううcccccccccccc</a></li>
                      </ol>
                    </li>
                    <!-- <li><a href="#index2" >サイドメニュー</a></li> -->
                    <!-- <li><a href="#index3">サイドメニュー</a></li>
                    <li><a href="#index4">サイドメニュー</a></li> -->
                    <li><a href="#index5">サイドメニュー</a></li>
                    <li><a href="#index6">サイドメニュー</a>

                      <ol class="l-aside-menu-under">
                        <li><a href="#index7">ああああああaaaaaaaaa</a></li>
                        <li><a href="#index8">いいいいいいbbbbbbbbbbb</a></li>
                        <li><a href="#index9">いいいいいいbbbbbbbbbbb</a></li>
                        
                      </ol>
                    </li>
                    <!-- <li><a href="#index7">サイドメニュー</a></li>
                    <li><a href="#index8">サイドメニュー</a></li> -->
                    
                  </ol>
                </div>
              </div>
              <article>
              <div class="c-box box" id="index1">
                <h2 class="c-tit02">カーリース比較表</h2>

                <div id="app">
                <div class="tb-box">
                    <table class="tb_basic01">
                    <thead>
                      <tr>
                        <th rowspan="2" class="var-txt"></th>
                        <th rowspan="2"><div class="var-txt">オートフラット</div></th>
                        <th colspan="2" rowspan="2"><div class="var-txt">カルモ</div></th>
                        <th colspan="2" class="h"><div class="var-txt">KINTO</div></th>
                        <th rowspan="2" ><div class="var-txt">クルカ</div></th>
                        <th rowspan="2"><div class="var-txt">コスモMyカーリース</div></th>
                        <th rowspan="2"><div class="var-txt">sompoで乗ーる</div></th>
                        <th rowspan="2"><div class="var-txt">NORIDOKI</div></th>
                        <th rowspan="2"><div class="var-txt">ニコノリ</div></th>
                        <th rowspan="2"><div class="var-txt">モータ</div></th>
                      </tr>
                      <tr>
                        <th class="hh"  class="var-txt">初期費用フリープラン</th>
                        <th class="hh"  class="var-txt">解約金フリープラン</th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <th>選べる車種</th>
                      <td>国産車</td>
                      <td colspan="2">国産車</td>
                      <td>トヨタ・レクサス</td>
                      <td>トヨタ</td>
                      <td>最安値で提供できる車のみ</td>
                      <td>国産車・全車種</td>
                      <td>国産車・輸入車</td>
                      <td>低価格で提供できる車のみ</td>
                      <td>国産車</td>
                      <td>国産車・レクサス</td>
                    </tr>
                    <tr>
                      <th class="tb-th-w">契約年数</th>
                      <td>3年～7年</td>
                      <td colspan="2">1〜11年</td>
                      <td>3・5・7年</td>
                      <td>3年</td>
                      <td>3年</td>
                      <td>36ヶ月〜84ヶ月<br>（36ヶ月未満も可）</td>
                      <td>3・5・7・9年</td>
                      <td>3年</td>
                      <td>1年〜9年</td>
                      <td>5・7・11年</td>
                    </tr>
                    <tr>
                      <th>中途解約</th>
                      <td>-</td>
                      <td colspan="2">-</td>
                      <td>-</td>
                      <td>○</td>
                      <td>-</td>
                      <td>-</td>
                      <td>○※オプション</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                    </tr>
                    <tr>
                      <th>走行距離制限（月間）</th>
                      <td>2,500km<br>1,500km<span class="notice">※マイメンテプラン</span></td>
                      <td>契約6年以下<br>1,500km</td>
                      <td>7年以上の<br>契約無制限</td>
                      <td colspan="2">1,500km</td>
                      <td>1,000km<br>（貨物）2,000km</td>
                      <td>以下から選択<br>
                          500km<br>
                          1,500km<br>
                          2,000km
                      </td>
                      <td>以下から選択<br>
                          1,000km<br>
                          1,500km<br>
                          2,000km<br>
                          3,000km
                      </td>
                      <td>1,000km</td>
                      <td>契約時に走行距離制限を決める</td>
                      <td>制限なし</td>
                    <tr>
                      <th>車もらえる</th>
                      <td>-</td>
                      <td colspan="2">○<span class="notice">（7年以上の契約及び<br>月額500円のオプション加入時）</span></td>
                      <td colspan="2">-</td>
                      <td>-</td>
                      <td>○<br>（9年リースの場合）</td>
                      <td>○<br>（9年リース・残価なしプラン）</td>
                      <td>-</td>
                      <td>○<br>オプション加入</td>
                      <td>○</td>
                    <tr>
                      <th>乗り換え</th>
                      <td>○</td>
                      <td colspan="2">○</td>
                      <td colspan="2">○</td>
                      <td>○</td>
                      <td>-</td>
                      <td>○</td>
                      <td>○</td>
                      <td>○</td>
                      <td>○</td>
                    </tr>
                    <tr>
                      <th>再リース</th>
                      <td>○</td>
                      <td colspan="2">○</td>
                      <td>-</td>
                      <td>○</td>
                      <td>-</td>
                      <td>○</td>
                      <td>○</td>
                      <td>-</td>
                      <td>○</td>
                      <td>-</td>
                    </tr>
                    <tr>
                      <th>契約車の買取</th>
                      <td>○</td>
                      <td colspan="2">-</td>
                      <td colspan="2">-</td>
                      <td>-</td>
                      <td>○</td>
                      <td>-</td>
                      <td>-</td>
                      <td>○</td>
                      <td>-</td>
                    </tr>
                    <tr>
                      <th>ディーラーオプション</th>
                      <td>○</td>
                      <td colspan="2">○</td>
                      <td colspan="2" rowspan="2">所定のオプション<br>パッケージから選択</td>
                      <td>○</td>
                      <td>○</td>
                      <td>○</td>
                      <td>○</td>
                      <td>○</td>
                      <td>○</td>
                    </tr>
                    <tr>
                      <th>メーカーオプション</th>
                      <td>○</td>
                      <td colspan="2">○</td>
                      <td>○</td>
                      <td>○</td>
                      <td>○</td>
                      <td>○</td>
                      <td>○</td>
                      <td>○</td>
                    </tr>
                    <tr>
                      <th>車のカスタム</th>
                      <td>-</td>
                      <td colspan="2">-</td>
                      <td colspan="2">指定車のみ可</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                      <td>○</td>
                    </tr>
                    <tr>
                      <th>頭金対応</th>
                      <td>○</td>
                      <td colspan="2">-</td>
                      <td colspan="2">-</td>
                      <td>○</td>
                      <td>○</td>
                      <td>○</td>
                      <td>○</td>
                      <td>○</td>
                      <td>○</td>
                    </tr>
                    <tr>
                      <th>ボーナス払い対応</th>
                      <td>○</td>
                      <td colspan="2">-</td>
                      <td>○</td>
                      <td>-</td>
                      <td>○</td>
                      <td>○</td>
                      <td>○</td>
                      <td>○</td>
                      <td>○</td>
                      <td>○</td>
                    </tr>
                    <tr>
                      <th>クレジットカード払い</th>
                      <td>○</td>
                      <td colspan="2">-</td>
                      <td colspan="2">○<span class="notice">(Dinaersのみ)</span></td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                      <td>-</td>
                    </tr>
                    <tr>
                      <th>法人・個人事業主</th>
                      <td>法人向け カーリース<br>「オートフラットBiz」</td>
                      <td colspan="2">○</td>
                      <td colspan="2">○</td>
                      <td>○</td>
                      <td>○</td>
                      <td>○</td>
                      <td>○</td>
                      <td>○</td>
                      <td>-</td>
                    </tr>
                    </tbody>              
                  </table>
                </div>
                </div>

 <div class="w">
                <div class="table-glid">
                  <div class="inner">
                    <div>見出し</div>
                    <div>見出し</div>
                    <div>見出し</div>
                    <div>見出し</div>
                    <div>見出し</div>
                    <div>見出し</div>
                    <div>見出し</div>
                    <div>見出し</div>
                  </div>
                  <div class="inner01">
                    <div class="m">見出し</div>
                    <div>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</div>
                    <div>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</div>
                    <div>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</div>
                    <div>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</div>
                    <div>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</div>
                    <div>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</div>
                    <div>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</div>
                  </div>
                  <div class="inner01">
                    <div class="m">見出し</div>
                    <div>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</div>
                    <div>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</div>
                    <div>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</div>
                    <div>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</div>
                    <div>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</div>
                    <div>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</div>
                    <div>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</div>
                  </div>
                  <div class="inner01">
                    <div class="m">見出し</div>
                    <div>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</div>
                    <div>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</div>
                    <div>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</div>
                    <div>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</div>
                    <div>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</div>
                    <div>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</div>
                    <div>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</div>
                  </div>
                  <div class="inner01">
                    <div class="m">見出し</div>
                    <div>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</div>
                    <div>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</div>
                    <div>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</div>
                    <div>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</div>
                    <div>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</div>
                    <div>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</div>
                    <div>内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</div>
                  </div>
                </div>
</div>




              </div>

              <div class="c-box box" id="index3">
                <h3 class="c-tit02">bbbbbbbbbbbbbb</h3>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
              </div>

              <div class="c-box box" id="index4">
                <h4 class="c-tit04">ccccccccccccccc</h4>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
              </div>
 
                        
              <div class="c-box box" id="index5"> 
                <h2 class="c-tit02">タイトルh2タイトルh2タイトルh2</h2>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
              </div>

              <div class="c-box box" id="index6">
                <h2 class="c-tit02">タイトルh2タイトルh2タイトルh2</h2>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
              </div>

              <div class="c-box box" id="index7"> 
                <h3 class="c-tit03">タイトルh3タイトルh3タイトルh3</h3>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
              </div>

              <div class="c-box box" id="index8"> 
                <h4 class="c-tit04">タイトルh4タイトルh4タイトルh4</h4>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
              </div>
              <div class="c-box box" id="index9"> 
                <h4 class="c-tit04">タイトルh4タイトルh4タイトルh4</h4>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
                <p class="c-txt">テキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスとスとテキスとテキスとテキスとテキスとテキスとテキスと</p>
              </div>
            </article>
          </div>

        </main>
<?php endwhile; ?>
<?php endif; ?>



      </div>
    </div>
  
  
</section>


<?php
// おすすめの記事一覧を取得
$posts = get_field('related');
if( $posts ):
?>
   <section>
      <div class="l-container related">
         <h1 class="tit-01"><span>関連する記事</span></h1>
         <div class="l-contents related">
            <ul class="contents-list l-gid type01">

                <?php foreach( $posts as $post ): ?>
                <li class="box-content">
                  <div class="box-item">
                     <figure class="box-img">
                        <a href="<?php echo get_permalink($post->ID); ?>" class="linkBl01">
                       <?php
                        // アイキャッチ画像を取得
                        $thumbnail_id = get_post_thumbnail_id($post->ID);
                        $thumb_url = wp_get_attachment_image_src($thumbnail_id, 'small');
                        if (get_post_thumbnail_id($post->ID)) {
                          echo '<figure><img src="' . $thumb_url[0] . '" alt=""></figure>';
                        } else {
                          // アイキャッチ画像が登録されていなかったときの画像
                          echo '<figure><img src="' . get_template_directory_uri() . '/img/img-default.png" alt=""></figure>';
                        }
                        ?>
                        </a>
                     </figure>
                     <div class="box-info">
                     <!-- <div class="row-2col">
                        <time datetime=""><?php the_time('Y.m.d') ?></time>
                        <?php get_template_part('inc/cat-tag'); ?>
                     </div> -->
                     <div class="box-txt">
                        <h1 class="box-tit">
                        <a href="<?php echo get_permalink($post->ID); ?>" class="link03"><?php echo get_the_title($post->ID); ?></a>
                        </h1>
                     </div>

                     </div>
                  </div>
                </li>

                <?php endforeach; ?>

            </ul>
        


        </div>
      </div>
     </section>
     <?php endif; ?>
</div>




        

















<?php get_footer(); ?>