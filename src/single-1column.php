<?php
/*
Template Name: 1column
Template Post Type: car_lease
*/
?>

<?php get_header(); ?>
<div id="fix"></div>
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
                
                
              </div>
              <div class="entry-img">
                <?php
                // アイキャッチ画像を取得
                $thumbnail_id = get_post_thumbnail_id($post->ID);
                $thumb_url = wp_get_attachment_image_src($thumbnail_id, 'small');
                if (get_post_thumbnail_id($post->ID)) {
                  echo '<figure class="single"><img src="' . $thumb_url[0] . '" alt=""></figure>';
                } else {
                  // アイキャッチ画像が登録されていなかったときの画像
                  echo '<figure><img src="' . get_template_directory_uri() . '/img/img-default.png" alt=""></figure>';
                }
                ?>
              </div>
            </div>




              <article>
              <div class="c-box">
                <p class="c-txt">カーリース9社を比較表にして１ページにまとめました。</p>
                <p class="c-txt">オートフラット・おトクにマイカー定額カルモくん・車のサブスクKINTO・車のサブスククルカ・コスモMyカーリース・SOMPOで乗ーる・車のサブスクNORIDOKI・ニコニコカーリース ニコノリ・もらえるカーリースMOTAの9社を比較しています。</p>
              </div>


              <div class="c-box">
                <h2 class="c-tit02">カーリース各社比較表</h2>
                <!-- <span class="tb-notice">「※オプション」「※条件あり」は各サービスの詳細をご参照ください</span> -->
                <div class="tb-box scroll_div table-pc">
                  <table class="tb_basic01" _fixedhead="rows:2; cols:1; div-auto-size: none;body-header-id: fix;">
                    <thead>
                      <tr>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                      </tr>
                      <tr>
                        <th></th>
                        <th><a href="#index1">オートフラット</a></th>
                        <th><a href="#index2">カルモくん</a></th>
                        <th><a href="#index3">KINTO</a></th>
                        <th><a href="#index4">クルカ</a></th>
                        <th><a href="#index5">コスモMyカーリース</a></th>
                        <th><a href="#index6">SOMPOで乗ーる</a></th>
                        <th><a href="#index7">NORIDOKI</a></th>
                        <th><a href="#index8">ニコノリ</a></th>
                        <th><a href="#index9">MOTA</a></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th>選べる車種</th>
                        <td>国産車</td>
                        <td>国産車</td>
                        <td>トヨタ・レクサス<span class="notice-type-row">(初期費用フリープラン)</span>トヨタ<span class="notice-type-top">(解約金フリープラン)</span></td>
                        <td>特選車のみ</td>
                        <td>国産車</td>
                        <td>国産車・輸入車</td>
                        <td>低価格で<br>提供できる<br>車のみ</td>
                        <td>国産車</td>
                        <td>国産車・レクサス</td>
                      </tr>
                      <tr>
                        <th class="tb-th-w">契約年数</th>
                        <td>3年～7年</td>
                        <td>1〜11年</td>
                        <td>3・5・7年<span class="notice-type-row">(初期費用フリープラン)</span>3年<span class="notice-type-top">(解約金フリープラン)</span></td>
                        <td>3年</td>
                        <td>36ヶ月〜84ヶ月<span class="notice-type-top">(36ヶ月未満も可)</span></td>
                        <td>3・5・7・9年</td>
                        <td>3年</td>
                        <td>1年〜9年</td>
                        <td>5・7・11年</td>
                      </tr>
                      <tr>
                        <th>中途解約</th>
                        <td><span class="hyphen"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="hyphen margin"></span><span class="notice-type-row">(初期費用フリープラン)</span><span class="circle margin"></span><span class="notice-type-top">(解約金フリープラン)</span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="triangle"></span></span><span class="notice-type-top">※オプション</span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="hyphen"></span></td>
                      </tr>
                      <tr>
                        <th>走行距離<br class="sp">制限<br>(月間)</th>
                        <td>
                          <p>500km</p>
                          <span class="rotate">&#133;</span>
                          <p class="text-row">2,500km<span class="notice-type-row">(500km単位で選択)</span></p>
                          <p>1,500km<span class="notice-type-top">(マイメンテプラン)</span></p>
                        </td>
                        <td>
                          無制限
                          <span class="notice-type-row">(７年以上の契約)</span>
                          1,500km
                          <span class="notice-type-bottom">(契約６年以下)</span>
                        </td>
                        <td>1,500km</td>
                        <td>
                          <p class="text-row">1,000km</p>
                          2,000km
                          <span class="notice-type-bottom">(貨物)</span>
                        </td>
                        <td>
                          <p class="text-row">500km</p>
                          <p class="text-row">1,000km</p>
                          <p class="text-row">1,500km</p>
                          <span class="notice-type-top">(上記から選択)</span>
                        </td>
                        <td>
                            <p>1,000km</p>
                            <span class="rotate">&#133;</span>
                            <p class="text-row">3,000km</p>
                            <span class="notice-type-row">(500km単位で選択)</span>
                        </td>
                        <td>1,000km</td>
                        <td>
                          <p class="text-row">500km</p>
                          <p class="text-row">1,000km</p>
                          <span class="notice-type-row">(相談により増加可能)</span>
                        </td>
                        <td>制限なし</td>
                      </tr>  
                      <tr>
                        <th>車もらえる</th>
                        <td><span class="triangle"></span><span class="notice-type-top">※条件あり</span></td>
                        <td><span class="triangle"></span><span class="notice-type-top">※オプション</span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="triangle"></span><span class="notice-type-top">※条件あり</span></td>
                        <td><span class="triangle"></span><span class="notice-type-top">※条件あり</span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="triangle"></span><span class="notice-type-top">※オプション</span></td>
                        <td><span class="circle"></span></td>
                      </tr>
                      <tr>
                        <th>再リース</th>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen margin"></span><span class="notice-type-row">(初期費用フリープラン)</span><span class="circle margin"></span><span class="notice-type-top">(解約金フリープラン)</span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                      </tr>
                      <tr>
                        <th>契約車の<br class="sp">買取</th>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                      </tr>
                      <tr>
                        <th>ディーラー・<br class="sp">メーカー<br>オプション</th>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                      </tr>
                      <tr>
                        <th>車のカスタム</th>
                        <td><span class="hyphen"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="triangle"></span><span class="notice-type-top">※指定車のみ</span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                      </tr>
                      <tr>
                        <th>頭金対応</th>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                      </tr>
                      <tr>
                        <th>ボーナス<br class="sp">払い対応</th>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle margin"></span><span class="notice-type-row">(初期費用フリープラン)</span><span class="hyphen margin"></span><span class="notice-type-top">(解約金フリープラン)</span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                      </tr>
                      <tr>
                        <th>クレジット<br class="sp">カード払い</th>
                        <td><span class="triangle"></span><span class="notice-type-top">※条件あり</span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="triangle"></span><span class="notice-type-top">※条件あり</span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="hyphen"></span></td>
                      </tr>
                      <tr>
                        <th>法人・<br class="sp">個人事業主</th>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                      </tr>
                      <tr>
                        <th>公式サイト</th>
                        <td><a href="https://px.a8.net/svt/ejp?a8mat=3NL3HL+90HA8Q+4X2G+60H7M" rel="nofollow" t target="_blank">オートフラット</a>
<amp-pixel src="https://www16.a8.net/0.gif?a8mat=3NL3HL+90HA8Q+4X2G+60H7M" layout="nodisplay"></amp-pixel></td>
                        <td><a href="https://carmo-kun.jp/" target="_blank">カルモくん</a></td>
                        <td><amp-img src="https://www.rentracks.jp/adx/p.gifx?idx=0.50932.320514.5958.8624&dna=110306" height="1" width="1"></amp-img><a href="https://www.rentracks.jp/adx/r.html?idx=0.50932.320514.5958.8624&dna=110306" rel="nofollow noopener" target="_blank">【KINTO】</a></td>
                        <td><a href="https://px.a8.net/svt/ejp?a8mat=3NL3HL+91O5GA+5226+HUKPU&a8ejpredirect=https%3A%2F%2Fnewcar.shop%2F" rel="nofollow" target="_blank">クルカ</a>
<img border="0" width="1" height="1" src="https://www17.a8.net/0.gif?a8mat=3NL3HL+91O5GA+5226+HUKPU" alt=""></td>
                        <td><a href="https://www.cosmo-mycar.com/" target="_blank">コスモMyカーリース</a></td>
                        <td><a href="https://px.a8.net/svt/ejp?a8mat=3NL3HL+941VVE+4JVQ+5YJRM" rel="nofollow" target="_blank" class="sompo">SOMPOで乗ーる（そんぽでのーる）</a>
<img border="0" width="1" height="1" src="https://www10.a8.net/0.gif?a8mat=3NL3HL+941VVE+4JVQ+5YJRM" alt="">
<amp-pixel src="https://www12.a8.net/0.gif?a8mat=3NL3HL+941VVE+4JVQ+5YJRM" layout="nodisplay" target="_blank"></amp-pixel></td>
                        <td><a href="https://px.a8.net/svt/ejp?a8mat=3NL3HL+929L22+5226+BW8O2&a8ejpredirect=https%3A%2F%2Fjoycal.jp%2Fnoridoki%2F" rel="nofollow" target="_blank">NORIDOKI</a>
<img border="0" width="1" height="1" src="https://www12.a8.net/0.gif?a8mat=3NL3HL+929L22+5226+BW8O2" alt=""></td>
                        <td><amp-img src="https://www.rentracks.jp/adx/p.gifx?idx=0.50932.320514.6719.9856&dna=121962" height="1" width="1"></amp-img><a href="https://www.rentracks.jp/adx/r.html?idx=0.50932.320514.6719.9856&dna=121962" rel="nofollow noopener" target="_blank">ニコノリ</a></td>
                        <td><a href="https://autoc-one.jp/lease/" target="_blank">MOTA</a></td>
                      </tr>
                    </tbody>              
                  </table>
                </div>


                
                <div class="tb-box scroll_div table-sp">
                  <table class="tb_basic" _fixedhead="rows:2; cols:1; div-auto-size: none;body-header-id: fix;">
                    <thead>
                      <tr>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                      </tr>
                      <tr>
                        <th></th>
                        <th>選べる車種</th>
                        <th>契約年数</th>
                        <th>中途解約</th>
                        <th>走行距離制限<br class="sp">(月間)</th>
                        <th>車もらえる</th>
                        <th>再リース</th>
                        <th>契約車の<br class="sp">買取</th>
                        <th>ディーラー・<br class="sp">メーカー<br class="sp">オプション</th>
                        <th>車の<br class="sp">カスタム</th>
                        <th>頭金対応</th>
                        <th>ボーナス<br class="sp">払い対応</th>
                        <th>クレジット<br class="sp">カード払い</th>
                        <th>法人・<br class="sp">個人事業主</th>
                        <th>公式サイト</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th><a href="#index1">オート<br class="sp">フラット</a></th>
                        <td>国産車</td>
                        <td>3年～7年</td>
                        <td><span class="hyphen"></span></td>
                        <td>
                          <p>500km</p>
                          <span class="rotate">&#133;</span>
                          <p class="text-row">2,500km<span class="notice-type-row">(500km単位で選択)</span></p>
                          <p>1,500km<span class="notice-type-top">(マイメンテプラン)</span></p>
                        </td>
                        <td><span class="triangle"></span><span class="notice-type-top">※条件あり</span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="triangle"></span><span class="notice-type-top">※条件あり</span></td>
                        <td><span class="circle"></span></td>
                        <td><div class="btn01 type01 bg-car"><a href="https://px.a8.net/svt/ejp?a8mat=3NL3HL+90HA8Q+4X2G+60H7M" rel="nofollow" target="_blank">オートフラット</a>
<amp-pixel src="https://www11.a8.net/0.gif?a8mat=3NL3HL+90HA8Q+4X2G+60H7M" layout="nodisplay"></amp-pixel></div></td>
                      </tr>
                      <tr>
                        <th><a href="#index2">カルモくん</a></th>
                        <td>国産車</td>
                        <td>1〜11年</td>
                        <td><span class="hyphen"></span></td>
                        <td>
                          無制限
                          <span class="notice-type-row">(７年以上の契約)</span>
                          1,500km
                          <span class="notice-type-bottom">(契約６年以下)</span>
                        </td>
                        <td><span class="triangle"></span><span class="notice-type-top">※オプション</span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><div class="btn01 type01 bg-car"><a href="https://carmo-kun.jp/" target="_blank">カルモくん</a></div></td>
                      </tr>
                      <tr>
                        <th><a href="#index3">KINTO</a></th>
                        <td>トヨタ<br class="sp">レクサス<span class="notice-type-row">(初期費用<br class="sp">フリープラン)</span>トヨタ<span class="notice-type-top">(解約金<br class="sp">フリープラン)</span></td>
                        <td>3・5・7年<span class="notice-type-row">(初期費用<br class="sp">フリープラン)</span>3年<span class="notice-type-top">(解約金<br class="sp">フリープラン)</span></td>
                        <td><span class="hyphen margin"></span><span class="notice-type-row">(初期費用<br class="sp">フリープラン)</span><span class="circle margin"></span><span class="notice-type-top">(解約金<br class="sp">フリープラン)</span></td>
                        <td>1,500km</td>
                        <td><span class="hyphen"></span></td>

                        <td><span class="hyphen margin"></span><span class="notice-type-row">(初期費用<br class="sp">フリープラン)</span><span class="circle margin"></span><span class="notice-type-top">(解約金<br class="sp">フリープラン)</span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="hyphen"></span></td>

                        <td><span class="triangle"></span><span class="notice-type-top">※指定車のみ</span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle margin"></span><span class="notice-type-row">(初期費用<br class="sp">フリープラン)</span><span class="hyphen margin"></span><span class="notice-type-top">(解約金<br class="sp">フリープラン)</span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><div class="btn01 type01 bg-car"><amp-img src="https://www.rentracks.jp/adx/p.gifx?idx=0.50932.320514.5958.8624&dna=110306" height="1" width="1"></amp-img><a href="https://www.rentracks.jp/adx/r.html?idx=0.50932.320514.5958.8624&dna=110306" rel="nofollow noopener" target="_blank">【KINTO】</a></div></td>
                      </tr>
                      <tr>
                        <th><a href="#index4">クルカ</a></th>
                        <td>厳選車種<br class="sp">のみ</td>
                        <td>3年</td>
                        <td><span class="hyphen"></span></td>
                        <td>
                          <p class="text-row">1,000km</p>
                          2,000km
                          <span class="notice-type-bottom">(貨物)</span>
                        </td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><div class="btn01 type01 bg-car"><a href="https://px.a8.net/svt/ejp?a8mat=3NL3HL+91O5GA+5226+HUKPU&a8ejpredirect=https%3A%2F%2Fnewcar.shop%2F" rel="nofollow" target="_blank">クルカ</a>
<img border="0" width="1" height="1" src="https://www17.a8.net/0.gif?a8mat=3NL3HL+91O5GA+5226+HUKPU" alt=""></div></td>
                      </tr>
                      <tr>
                        <th><a href="#index5">コスモMy<br class="sp">カーリース</a></th>
                        <td>国産車</td>
                        <td>36ヶ月〜<br class="sp">84ヶ月<span class="notice-type-top">(36ヶ月未満も可)</span></td>
                        <td><span class="hyphen"></span></td>
                        <td>
                          <p class="text-row">500km</p>
                          <p class="text-row">1,000km</p>
                          <p class="text-row">1,500km</p>
                          <span class="notice-type-top">(上記から選択)</span>
                        </td>
                        <td><span class="triangle"></span><span class="notice-type-top">※条件あり</span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><div class="btn01 type01 bg-car"><a href="https://www.cosmo-mycar.com/" target="_blank">コスモMyカーリース</a></div></td>
                      </tr>
                      <tr>
                        <th><a href="#index6">SOMPOで<br class="sp">乗ーる</a></th>
                        <td>国産車<br class="sp">輸入車</td>
                        <td>3・5・7・9年</td>
                        <td><span class="triangle"></span></span><span class="notice-type-top">※オプション</span></td>
                        <td>
                            <p>1,000km</p>
                            <span class="rotate">&#133;</span>
                            <p class="text-row">3,000km</p>
                            <span class="notice-type-row">(500km単位で選択)</span>
                        </td>
                        <td><span class="triangle"></span><span class="notice-type-top">※条件あり</span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><div class="btn01 type01 bg-car"><a href="https://px.a8.net/svt/ejp?a8mat=3NL3HL+941VVE+4JVQ+5YJRM" rel="nofollow" target="_blank">SOMPOで乗ーる（そんぽでのーる）</a>
<amp-pixel src="https://www12.a8.net/0.gif?a8mat=3NL3HL+941VVE+4JVQ+5YJRM" layout="nodisplay"></amp-pixel></div></td>
                      </tr>
                      <tr>
                        <th><a href="#index7">NORI<br class="sp">DOKI</a></th>
                        <td>特選車のみ</td>
                        <td>3年</td>
                        <td><span class="hyphen"></span></td>
                        <td>
                          <p class="text-row">500km</p>
                          <p class="text-row">1,000km</p>
                          <span class="notice-type-row">(相談により増加可能)</span>
                        </td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="triangle"></span><span class="notice-type-top">※条件あり</span></td>
                        <td><span class="circle"></span></td>
                        <td><div class="btn01 type01 bg-car"><a href="https://px.a8.net/svt/ejp?a8mat=3NL3HL+929L22+5226+BW8O2&a8ejpredirect=https%3A%2F%2Fjoycal.jp%2Fnoridoki%2F" rel="nofollow" target="_blank">NORIDOKI</a>
<img border="0" width="1" height="1" src="https://www12.a8.net/0.gif?a8mat=3NL3HL+929L22+5226+BW8O2" alt=""></div></td>
                      </tr>
                      <tr>
                        <th><a href="#index8">ニコノリ</a></th>
                        <td>国産車</td>
                        <td>1年〜9年</td>
                        <td><span class="hyphen"></span></td>
                        <td>1,000km</td>
                        <td><span class="triangle"></span><span class="notice-type-top">※オプション</span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><div class="btn01 type01 bg-car"><amp-img src="https://www.rentracks.jp/adx/p.gifx?idx=0.50932.320514.6719.9856&dna=121962" height="1" width="1"></amp-img><a href="https://www.rentracks.jp/adx/r.html?idx=0.50932.320514.6719.9856&dna=121962" rel="nofollow noopener" target="_blank">ニコノリ</a></div></td>
                      </tr>
                      <tr>
                        <th><a href="#index9">MOTA</a></th>
                        <td>国産車<br class="sp">レクサス</td>
                        <td>5・7・11年</td>
                        <td><span class="hyphen"></span></td>
                        <td>制限なし</td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><div class="btn01 type01 bg-car"><a href="https://autoc-one.jp/lease/" target="_blank">MOTA</a></div></td>
                      </tr>
                    </tbody>              
                  </table>

                </div>
                <span class="table-notice sp">※上記の表は縦横にスクロールできます。</span>

              </div>



              <div class="c-box">
                <h2 class="c-tit02">月額費用に含まれる項目比較</h2>
                <p class="c-txt">メンテナンスプランの契約が必須のリース会社は、プランによって月額に含まれる項目が変わります。<br>
                メンテナンスプランの契約が任意のリース会社では、プラン加入時と未加入時で月額に含まれる項目が変わります。<br>
                メンテナンスプランの選択がないリース会社の場合は、全ての契約で対象の項目が月額費用に含まれます。</p><br>


                <div class="tb-box scroll_div table-pc c-box-inner">
                  <table class="tb_basic01 getugaku" _fixedhead="rows:2; cols:1; div-auto-size: none;body-header-id: fix;">
                    <thead>
                      <tr>
                        <th>&nbsp;</th>
                        <th colspan="2" >&nbsp;</th>
                        <th colspan="2" >&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th colspan="2" >&nbsp;</th>
                        <th colspan="2" >&nbsp;</th>
                        <th>&nbsp;</th>
                        <th colspan="2" >&nbsp;</th>
                        <th colspan="2" >&nbsp;</th>
                      </tr>
                      <tr>
                        <th></th>
                        <th colspan="2"><a href="#index1">オートフラット</a></th>
                        <th colspan="2"><a href="#index2">カルモくん</a></th>
                        <th><a href="#index3">KINTO</a></th>
                        <th><a href="#index4">クルカ</a></th>
                        <th colspan="2"><a href="#index5">コスモMyカーリース</a></th>
                        <th colspan="2"><a href="#index6">SOMPOで乗ーる</a></th>
                        <th><a href="index7">NORIDOKI</a></th>
                        <th colspan="2"><a href="#index8">ニコノリ</a></th>
                        <th colspan="2"><a href="#index9">MOTA</a></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th>メンテナンスプランの契約</th>
                        <td colspan="2">加入必須</td>
                        <td colspan="2">任意</td>
                        <td rowspan="2">メンテナンスプランの<br>選択は無し<span class="notice-type-top margin">全ての契約で「○」の項目が月額に含まれる</span></td>
                        <td rowspan="2">メンテナンスプランの<br>選択は無し<span class="notice-type-top">全ての契約で「○」の項目が月額に含まれる</span></td>
                        <td colspan="2">加入必須</td>
                        <td colspan="2">加入必須</td>
                        <td rowspan="2">メンテナンスプランの<br>選択は無し<span class="notice-type-top">全ての契約で「○」の項目が月額に含まれる</span></td>
                        <td colspan="2">任意</td>
                        <td colspan="2">任意</td>
                      </tr>
                      <tr>
                        <th>メンテナンスプラン</th>
                        <td>フルメンテプラン<br>
                        マイメンテプラン</td>
                        <td>メンテなしプラン</td>
                        <td>加入時</td>
                        <td>未加入</td>
                        <td>ゴールドパック<br>
                        シルバーパック</td>
                        <td>ホワイトパック</td>
                        <td>フルメンテ<br>
                        ライトメンテ</td>
                        <td>シンプル</td>
                        <td>ライトプラン<br>
                        バリュープラン</td>
                        <td>未加入</td>
                        <td>加入時</td>
                        <td>未加入</td>
                      </tr>
                      <tr>
                        <th>車両代金</th>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                      </tr>
                      <tr>
                        <th>自動車税</th>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                      </tr>
                      <tr>
                        <th>重量税</th>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                      </tr>
                      <tr>
                        <th>自賠責保険</th>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                      </tr>
                      <tr>
                        <th>新車登録手数料</th>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                      </tr>
                      <tr>
                        <th>環境性能割</th>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                      </tr>
                      <tr>
                        <th>車検費用</th>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                      </tr>
                      <tr>
                        <th>１２ヶ月法定点検</th>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                      </tr>
                      <tr>
                        <th>その他メンテナンス項目</th>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                        <td><span class="circle"></span></td>
                        <td><span class="hyphen"></span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <div class="c-box-inner">
                  <div class="tb-box scroll_div table-sp">
                    <table class="tb_basic getugaku" _fixedhead="rows:2; cols:1; div-auto-size: none;body-header-id: fix;">
                      <thead>
                        <tr>
                          <th>&nbsp;</th>
                          <th>&nbsp;</th>
                          <th>&nbsp;</th>
                          <th>&nbsp;</th>
                          <th>&nbsp;</th>
                          <th>&nbsp;</th>
                          <th>&nbsp;</th>
                          <th>&nbsp;</th>
                          <th>&nbsp;</th>
                          <th>&nbsp;</th>
                          <th>&nbsp;</th>
                          <th>&nbsp;</th>
                          <th>&nbsp;</th>
                        </tr>
                        <tr>
                          <th>&nbsp;</th>
                          <th>メンテナンス<br>プランの契約</th>
                          <th>メンテナンス<br>プラン</th>
                          <th>車両代金</th>
                          <th>自動車税</th>
                          <th>重量税</th>
                          <th>自賠責保険</th>
                          <th>新車登録<br>手数料</th>
                          <th>環境性能割</th>
                          <th>車検費用</th>
                          <th>１２ヶ月<br>法定点検</th>
                          <th>その他<br>メンテナンス<br>項目</th>
                          <th>公式サイト</th>
                        </tr>
                      </thead>  
                      <tbody>
                        <tr>
                          <th rowspan="2">オート<br>フラット</th>
                          <td rowspan="2">加入必須</td>
                          <td>フルメンテ・<br>
                          マイメンテ<br>プラン</td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td rowspan="2"><div class="btn01 type01 bg-car"><a href="https://px.a8.net/svt/ejp?a8mat=3NL3HL+90HA8Q+4X2G+60H7M" rel="nofollow" target="_blank">オートフラット</a>
<amp-pixel src="https://www11.a8.net/0.gif?a8mat=3NL3HL+90HA8Q+4X2G+60H7M" layout="nodisplay"></amp-pixel></div></td>
                        </tr>
                        <tr>
                          <td>メンテなし<br>プラン</td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="hyphen"></span></td>
                          <td><span class="hyphen"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="hyphen"></span></td>
                          <td><span class="hyphen"></span></td>
                          <td><span class="hyphen"></span></td>
                        </tr>
                        <tr>
                          <th rowspan="2">カルモくん</th>
                          <td rowspan="2">任意</td>
                          <td>加入時</td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td rowspan="2"><div class="btn01 type01 bg-car"><a href="https://carmo-kun.jp/" target="_blank">カルモくん</a></div></td>
                        </tr>
                        <tr>
                          <td>未加入</td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="hyphen"></span></td>
                          <td><span class="hyphen"></span></td>
                          <td><span class="hyphen"></span></td>
                        </tr>
                        <tr>
                          <th>KINTO</th>
                          <td>プラン選択無し<span class="notice-type-top margin">全ての契約で<br>「○」の項目が<br>月額に含まれる</span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><div class="btn01 type01 bg-car"><amp-img src="https://www.rentracks.jp/adx/p.gifx?idx=0.50932.320514.5958.8624&dna=110306" height="1" width="1"></amp-img><a href="https://www.rentracks.jp/adx/r.html?idx=0.50932.320514.5958.8624&dna=110306" rel="nofollow noopener" target="_blank">【KINTO】</a></div></td>
                        </tr>
                        <tr>
                          <th>クルカ</th>
                          <td>プラン選択無し<span class="notice-type-top margin">全ての契約で<br>「○」の項目が<br>月額に含まれる</span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="hyphen"></span></td>
                          <td><span class="hyphen"></span></td>
                          <td><span class="hyphen"></span></td>
                          <td><div class="btn01 type01 bg-car"><a href="https://px.a8.net/svt/ejp?a8mat=3NL3HL+91O5GA+5226+HUKPU&a8ejpredirect=https%3A%2F%2Fnewcar.shop%2F" rel="nofollow" target="_blank">クルカ</a>
<img border="0" width="1" height="1" src="https://www17.a8.net/0.gif?a8mat=3NL3HL+91O5GA+5226+HUKPU" alt=""></div></td>
                        </tr>
                        <tr>
                          <th rowspan="2">コスモMy<br>カーリース</th>
                          <td rowspan="2">加入必須</td>
                          <td>ゴールド<br>パック<br>シルバー<br>パック</td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td rowspan="2"><div class="btn01 type01 bg-car"><a href="https://www.cosmo-mycar.com/" target="_blank">コスモMyカーリース</a></div></td>
                        </tr>
                        <tr>
                          <td>ホワイト<br>パック</td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="hyphen"></span></td>
                          <td><span class="hyphen"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="hyphen"></span></td>
                          <td><span class="hyphen"></span></td>
                          <td><span class="hyphen"></span></td>
                        </tr>
                        <tr>
                          <th rowspan="2">SOMPOで<br>乗ーる</th>
                          <td rowspan="2">加入必須</td>
                          <td>フルメンテ<br>ライトメンテ</td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td rowspan="2"><div class="btn01 type01 bg-car"><a href="https://px.a8.net/svt/ejp?a8mat=3NL3HL+941VVE+4JVQ+5YJRM" rel="nofollow" target="_blank" class="sompo">SOMPOで乗ーる（そんぽでのーる）</a>
<img border="0" width="1" height="1" src="https://www10.a8.net/0.gif?a8mat=3NL3HL+941VVE+4JVQ+5YJRM" alt="">
<amp-pixel src="https://www12.a8.net/0.gif?a8mat=3NL3HL+941VVE+4JVQ+5YJRM" layout="nodisplay" target="_blank"></amp-pixel></div></td>
                        </tr>
                        <tr>
                          <td>シンプル</td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="hyphen"></span></td>
                          <td><span class="hyphen"></span></td>
                          <td><span class="hyphen"></span></td>
                        </tr>
                        <tr>
                          <th>NORI<br>DOKI</th>
                          <td>プラン選択無し<span class="notice-type-top margin">全ての契約で<br>「○」の項目が<br>月額に含まれる</span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="hyphen"></span></td>
                          <td><span class="hyphen"></span></td>
                          <td><span class="hyphen"></span></td>
                          <td><div class="btn01 type01 bg-car"><a href="https://px.a8.net/svt/ejp?a8mat=3NL3HL+929L22+5226+BW8O2&a8ejpredirect=https%3A%2F%2Fjoycal.jp%2Fnoridoki%2F" rel="nofollow" target="_blank">NORIDOKI</a>
<img border="0" width="1" height="1" src="https://www12.a8.net/0.gif?a8mat=3NL3HL+929L22+5226+BW8O2" alt=""></div></td>
                        </tr>
                        <tr>
                          <th rowspan="2">ニコノリ</th>
                          <td rowspan="2">任意</td>
                          <td>ライトプラン<br>バリュープラン</td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td rowspan="2"><div class="btn01 type01 bg-car"><amp-img src="https://www.rentracks.jp/adx/p.gifx?idx=0.50932.320514.6719.9856&dna=121962" height="1" width="1"></amp-img><a href="https://www.rentracks.jp/adx/r.html?idx=0.50932.320514.6719.9856&dna=121962" rel="nofollow noopener" target="_blank">ニコノリ</a></div></td>
                        </tr>
                        <tr>
                          <td>未加入</td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="hyphen"></span></td>
                          <td><span class="hyphen"></span></td>
                        </tr>
                        <tr>
                          <th rowspan="2">MOTA</th>
                          <td rowspan="2">任意</td>
                          <td>加入時</td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td rowspan="2"><div class="btn01 type01 bg-car"><a href="https://autoc-one.jp/lease/" target="_blank">MOTA</a></div></td>
                        </tr>
                        <tr>
                          <td>未加入</td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="circle"></span></td>
                          <td><span class="hyphen"></span></td>
                          <td><span class="hyphen"></span></td>
                          <td><span class="hyphen"></span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <span class="table-notice">※上記の表は縦横にスクロールできます。</span>
                </div>
                
                <p class="c-txt">上記表の「その他メンテナンス項目」は各リース会社によってメンテナンスの内容は異なります。</p>
              </div>



              <div class="c-box" id="index1">
                <h2 class="c-tit02">オートフラット</h2>

                <div class="c-box-inner">
                  <p class="c-txt">オートフラットはガソリンスタンドでおなじみの出光興産株式会社が提供するカーリースサービスで、2015年6月からカーリースサービスを開始しています。</p>
                  <p class="c-txt">車検・メンテナンス・税金もすべてコミコミで、契約満了まで支払いが変わることなく定額で新車に乗れます。</p>
                  <p class="c-txt">近隣のガソリンスタンドでカーリースのことや、車のメンテナンスに関して対面で相談できるという店舗をもつカーリース会社のメリットがあります。</p>
                  <p class="c-txt">契約満了時のキャッシュバック率が96％・平均20万円となっていることからも、リース契約時の設定残価が適正となっていることがわかるので安心して契約することができるリース会社と言えます。また、契約時の設定残価でリース満了後に車を買取できるので、最終的に車を手元に残したい方にも向いているリースとなっています。</p>
                </div>


                <div class="flame-box-tit pac">オートフラットのポイント</div>
                <div class="flame-box conclude hikaku-point">
                  <ul class="ulBasic point bold">
                    <li>車検・メンテナンス・税金もすべてコミコミで、月々の支払いが定額</li>
                    <li>車の返却時にキャッシュバック率が96％・平均20万円</li>
                    <li>リース契約時の設定残価で買取ができる</li>
                    <li>「あんしんキャンセルサポート」免許返納による中途解約金不要が無料で付帯</li>
                    <li>リース満了後は「乗り換え・延長・買取」から選べる</li>
                    <li>9年リース契約の場合、車をもらう・返却が選べ、返却時はキャッシュバックあり</li>
                    <li>オートフラット専用の自動車保険がお得。<br>リース期間分の契約になるので、1年ごとの保険より割安・保険を利用しても保険料が変わらない</li>
                    <li>法人・個人事業主は法人向け「オートフラットBiz」で対応</li>
                  </ul>
                </div>
                

                <div class="car-base-compaer">
                  <h3 class="c-tit-compaer base-btn"><span>オートフラット基本情報</span></h3>
                  <div class="base-grid compaer car-base-type01">

                    <div class="box-content">
                      <div class="base-box-tit car-icon04">
                        <div class="base-tit">契約プラン<br class="sp">(3タイプ)</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <p><span class="base-txt-line">フルメンテプラン</span></p>
                          <p><span class="base-txt-line">マイメンテプラン</span></p>
                          <p><span class="base-txt-line">メンテなしプラン</span></p>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon01">
                        <div class="base-tit">選べる車種</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">国産車</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon02">
                        <div class="base-tit">契約年数</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">3年～7年</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon03">
                        <div class="base-tit">中途解約</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          不可<span class="b-small">(中途解約金発生)</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon05">
                        <div class="base-tit">走行距離制限<br class="sp">(月間)</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <p class="base-txt-marge"><span class="base-txt-line">〜2,500km</span><span class="b-small">(500km単位で選択可)</span></p>
                          <p><span class="base-txt-line">〜1,500km</span>
                            <span class="b-small">(マイメンテプラン)</span>
                          </p>
                        </div>
                      </div>
                    </div>                       

                    <div class="box-content">
                      <div class="base-box-tit car-icon09">
                        <div class="base-tit">ディーラー<br class="sp">オプション</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">選択可</span>
                        </div>
                      </div>
                    </div> 


                    <div class="box-content">
                      <div class="base-box-tit car-icon09">
                        <div class="base-tit">メーカー<br class="sp">オプション</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">選択可</span>
                        </div>
                      </div>
                    </div> 

                    <div class="box-content">
                      <div class="base-box-tit car-icon10">
                        <div class="base-tit">車のカスタム</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          不可<span class="b-small">(原状回復金発生)</span>
                        </div>
                      </div>
                    </div> 

                    <div class="box-content">
                      <div class="base-box-tit car-icon06">
                        <div class="base-tit">新車乗換</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                         <span class="base-txt-line">精算して<br>新車に乗り換え</span>
                        </div>
                      </div>
                    </div> 

                    <div class="box-content">
                      <div class="base-box-tit car-icon07">
                        <div class="base-tit">再リース</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">そのまま<br>リース契約延長</span>
                        </div>
                      </div>
                    </div> 

                    <div class="box-content">
                      <div class="base-box-tit car-icon08">
                        <div class="base-tit">買取</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">残価での買取</span>
                        </div>
                      </div>
                    </div> 

                    <div class="box-content">
                      <div class="base-box-tit car-icon16">
                        <div class="base-tit">返却</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">残存価格を<br>査定し返却</span>
                        </div>
                      </div>
                    </div> 

                    <div class="box-content">
                      <div class="base-box-tit car-icon16">
                        <div class="base-tit">返却</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">もらえる</span>
                          <span class="b-small">(9年リースのみ)</span>
                        </div>
                      </div>
                    </div> 

                    <div class="box-content">
                      <div class="base-box-tit car-icon11">
                        <div class="base-tit">頭金対応</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">対応可</span>
                        </div>
                      </div>
                    </div> 


                    <div class="box-content">
                      <div class="base-box-tit car-icon12">
                        <div class="base-tit">ボーナス<br class="sp">払い対応</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">対応可</span>
                        </div>
                      </div>
                    </div> 

                    <div class="box-content">
                      <div class="base-box-tit car-icon13">
                        <div class="base-tit">クレジット<br class="sp">カード払い</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">アポロステーションカードでの支払い可</span>
                        </div>
                      </div>
                    </div> 

                    <div class="box-content">
                      <div class="base-box-tit car-icon14">
                        <div class="base-tit">法人・<br class="sp">個人事業主</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">法人向け「オートフラットBiz」で対応</span>
                        </div>
                      </div>
                    </div> 

                    <div class="box-content">
                      <div class="base-box-tit car-icon15">
                        <div class="base-tit">中古車リース</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          未対応
                        </div>
                      </div>
                    </div> 

                  </div>
                </div>

                <div class="btn-type01 single-btn"><a href="https://px.a8.net/svt/ejp?a8mat=3NL3HL+90HA8Q+4X2G+60H7M" rel="nofollow" target="_blank">オートフラット</a><amp-pixel src="https://www16.a8.net/0.gif?a8mat=3NL3HL+90HA8Q+4X2G+60H7M" layout="nodisplay"></amp-pixel></div>
              </div>








              <div class="c-box box" id="index2">
                <h2 class="c-tit02">おトクにマイカー定額カルモくん</h2>

                <div class="c-box-inner">
                  <p class="c-txt">おトクにマイカー定額カルモくんはナイル株式会社が運営しているサービスになります。<br>
                  ナイル株式会社はマーケティングDX事業・自動車産業DX事業を行なっている会社で、デジタルマーケティング支援や自社によるメディア開発を行なっており、自動車産業DX事業としてサブスクリプションサービスのおトクにマイカー定額カルモくんを2019年から開始しています。</p>
                  <p class="c-txt">もらえるオプション「月々500円」を支払うことと、と7年以上の契約で契約満了後に車をもらえるのが特徴となっています。また、7年以上の契約で走行距離が無制限となるため、長距離を利用するような事業利用にも最適なサービスとなっています。</p>
                </div>


                <div class="flame-box-tit pac">おトクにマイカー定額カルモくんのポイント</div>
                <div class="flame-box conclude hikaku-point">
                  <ul class="ulBasic point">
                    <li>もらえるオプション「月々500円」と7年以上の契約で契約満了後に車をもらえる</li>
                    <li>7年以上の契約で走行距離が無制限、事業利用にも最適</li>
                    <li>6年以下の契約の場合、走行距離は月間1,500kmまで</li>
                    <li>リース満了後、車は「再リース・返却」から選択</li>
                    <li>法人・個人事業主の契約に対応</li>
                    <li>最長11年の契約があり、月々の支払いを抑える選択もできる</li>
                    <li>車を返却時の修理・修繕・原状回復費などを、メンテナンスプランで補償対応できる</li>
                    <li>中古車リースは納期が最短4日、平均1ヶ月程度</li>
                  </ul>
                </div>

                <div class="car-base-compaer">
                  <h3 class="c-tit-compaer base-btn"><span>おトクにマイカー定額<br class="sp">カルモくん基本情報一覧</span></h3>
                  <div class="base-grid compaer car-base-type01">

                    <div class="box-content">
                      <div class="base-box-tit car-icon01">
                        <div class="base-tit">選べる車種</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">国産車</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon02">
                        <div class="base-tit">契約年数</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <p class="base-txt-marge"><span class="base-txt-line">1年～11年</span></p>
                          <span class="b-small">(1年単位で契約可)</span>
                        </div>
                      </div>
                    </div>


                    <div class="box-content">
                      <div class="base-box-tit car-icon04">
                        <div class="base-tit">メンテナンス<br class="sp">プラン</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <p><span class="base-txt-line">プラチナメンテプラン</span></p>
                          <p><span class="base-txt-line">ゴールドメンテプラン</span></p>
                          <p class="base-txt-marge"><span class="base-txt-line">シルバーメンテプラン</span></p>
                          <span class="b-small">(プラン未加入も可)</span>
                        </div>
                      </div>
                    </div>


                    <div class="box-content">
                      <div class="base-box-tit car-icon05">
                        <div class="base-tit">走行距離制限<br class="sp">(月間)</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <p class="base-txt-marge"><span class="base-txt-line">無制限</span><span class="b-small">(7年以上の契約)</span></p>
                          <p><span class="base-txt-line">1,500kmまで</span>
                            <span class="b-small">(6年以下の契約)</span>
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon03">
                        <div class="base-tit">中途解約</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          不可<span class="b-small">(中途解約金発生)</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon21">
                        <div class="base-tit">車もらえる</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">もらえる</span>
                          <span class="b-small">(7年以上の契約)</span><span class="b-small">(オプション月々500円)</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon06">
                        <div class="base-tit">新車乗換</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">新車へ乗換</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon07">
                        <div class="base-tit">再リース</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">リース契約延長</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon16">
                        <div class="base-tit">返却</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">残価精算なしで返却</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon08">
                        <div class="base-tit">買取</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          未対応
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon09">
                        <div class="base-tit">ディーラー<br class="sp">オプション</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">選択可</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon09">
                        <div class="base-tit">メーカー<br class="sp">オプション</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">選択可</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon10">
                        <div class="base-tit">車のカスタム</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <p class="base-txt-marge"><span class="base-txt-line">カスタム可能</span></p>
                          <span class="b-small">(もらえるオプション加入時)</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon10">
                        <div class="base-tit">車のカスタム</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          <p class="base-txt-marge"><span class="base-txt-line">カスタム不可</span></p>
                          <span class="b-small">(もらえるオプション未加入時<br class="sp">原状回復費用発生)</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon11">
                        <div class="base-tit">頭金対応</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          未対応
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon12">
                        <div class="base-tit">ボーナス<br class="sp">払い対応</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          未対応
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon13">
                        <div class="base-tit">クレジット<br class="sp">カード払い</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          未対応
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon14">
                        <div class="base-tit">法人・<br class="sp">個人事業主</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">対応可</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon15">
                        <div class="base-tit">中古車リース</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">中古車も選択可能</span>
                        </div>
                      </div>
                    </div>

                  </div>  
                </div>

                <div class="btn-type01 single-btn"><a href="https://carmo-kun.jp/" target="_blank">おトクにマイカー定額<br class="sp">カルモくん</a></div>

              </div>
 





              <div class="c-box" id="index3">
                <h2 class="c-tit02">クルマのサブスクKINTO</h2>

                <div class="c-box-inner">
                  <p class="c-txt">KINTOとは、トヨタグループが展開するモビリティサービスのブランドになります。トヨタグループが展開しているブランドということもあり、選べる車種はトヨタ車・レクサス・モリゾウセレクションのみとなっています。</p>
                  <p class="c-txt">KINTOは2つの契約プラン「初期費用フリープラン」「解約金フリープラン」が用意されており、その時の状況に合わせて車を利用しやすいプランから選択する形になっているのが特徴です。</p>
                  <p class="c-txt">プランによって「契約中の車の乗り換え」「中途解約金の発生の有無」「契約満了後の車の選択肢」などが変わってきます。</p>
                </div>



                <div class="flame-box-tit pac">KINTOのポイント</div>
                <div class="flame-box conclude hikaku-point">
                  <ul class="ulBasic point">
                    <li>「初期費用フリープラン」「解約金フリープラン」2つのプランから選択して契約</li>
                    <li>契約期間中に車の乗り換えができる「のりかえGO」がある「初期費用フリープラン」</li>
                    <li>利用期間が不明瞭な方に最適！いつ解約しても中途解約金0円の「解約金フリープラン」</li>
                    <li>カクレジットカード払いができる。VISA・Master・JCB・AMEX・Diners対応</li>
                    <li>取り扱い車種は、トヨタ車・レクサス・モリゾウセレクション</li>
                    <li>リース満了後の選択肢は、返却・再リース</li>
                    <li>車検・メンテナンス・税金もすべてコミコミで、月々の支払いが定額</li>
                  </ul>
                </div>



                <div class="car-base-compaer">
                  <h3 class="c-tit-compaer base-btn"><span>KINTO基本情報</span></h3>
                  <div class="compaer-kinto-box">

                    <div class="car-base-outer">
                      <div class="base-grid compaer-kinto type01 car-base-type01">

                        <div class="box-content">
                          <div class="base-box-tit car-icon04">
                            <div class="base-tit">契約プラン</div>
                          </div>
                          <div class="base-box-txt">
                            <div class="base-txt">
                              <p class="base-txt-marge"><span class="base-txt-line">初期費用フリープラン</span></p>
                              <span class="base-txt-line">解約金フリープラン</span>
                            </div>
                          </div>
                        </div>

                        <div class="box-content">
                          <div class="base-box-tit car-icon04">
                            <div class="base-tit">メンテナンス</div>
                          </div>
                          <div class="base-box-txt">
                            <div class="base-txt">
                              <p class="base-txt-marge"><span class="base-txt-line">月額費用に込み</span></p>
                              <span class="b-small">(プラン選択は無し)</span>
                            </div>
                          </div>
                        </div>


                        <div class="box-content">
                          <div class="base-box-tit car-icon05">
                            <div class="base-tit">走行距離制限<br class="sp">(月間)</div>
                          </div>
                          <div class="base-box-txt">
                            <div class="base-txt">
                              <span class="base-txt-line">1,500km</span>
                            </div>
                          </div>
                        </div>

                        <div class="box-content">
                          <div class="base-box-tit car-icon14">
                            <div class="base-tit">法人・<br class="sp">個人事業主</div>
                          </div>
                          <div class="base-box-txt">
                            <div class="base-txt">
                              <span class="base-txt-line">対応可</span>
                            </div>
                          </div>
                        </div>

                        <div class="box-content">
                          <div class="base-box-tit car-icon15">
                            <div class="base-tit">中古車リース</div>
                          </div>
                          <div class="base-box-txt">
                            <div class="base-txt">
                              <span class="base-txt-line">中古車も選択可能</span>
                            </div>
                          </div>
                        </div>

                        <div class="box-content">
                          <div class="base-box-tit car-icon09">
                            <div class="base-tit">メーカー・ディーラー<br class="sp">オプション</div>
                          </div>
                          <div class="base-box-txt">
                            <div class="base-txt">
                              所定のオプションパッケージから選択
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>



                    <div class="car-base-outer">
                      <h3 class="c-tit-base"><span>プランごとの違い</span></h3>
                      <div class="base-glid-table type01">

                        <div class="box-content">
                          <div class="base-box-tit">
                            <!-- <div class="base-tit"></div> -->
                          </div>
                          <div class="base-box-txt">
                            <div class="base-txt">
                            初期費用フリープラン
                            </div>
                          </div>
                          <div class="base-box-txt">
                            <div class="base-txt">
                              解約金フリープラン
                            </div>
                          </div>
                        </div>

                      </div>

                    
                      <div class="base-glid-table">

                        <div class="box-content">
                          <div class="base-box-tit car-icon01">
                            <div class="base-tit">初期費用</div>
                          </div>
                          <div class="base-box-txt">
                            <div class="base-txt">
                              <p><span class="base-txt-line">0円</span></p>
                            </div>
                          </div>
                          <div class="base-box-txt">
                            <div class="base-txt">
                              <p><span class="base-txt-line">月額の5ヶ月分相当</span></p>
                            </div>
                          </div>
                        </div>

                        <div class="box-content">
                          <div class="base-box-tit car-icon01">
                            <div class="base-tit">選べる車種</div>
                          </div>
                          <div class="base-box-txt">
                            <div class="base-txt">
                              <p class="base-txt-marge"><span class="base-txt-line">トヨタ車</span></p>
                              <p class="base-txt-marge"><span class="base-txt-line">レクサス</span></p>
                              <span class="base-txt-line">モリゾウセレクション</span>
                            </div>
                          </div>
                          <div class="base-box-txt">
                            <div class="base-txt">
                              <p><span class="base-txt-line">トヨタ車</span></p>
                            </div>
                          </div>
                        </div>


                        <div class="box-content">
                          <div class="base-box-tit car-icon02">
                            <div class="base-tit">契約年数</div>
                          </div>
                          <div class="base-box-txt">
                            <div class="base-txt">
                              <p class="base-txt-marge"><span class="base-txt-line">3・5・7年</span></p>
                              <span class="b-small">(レクサス・モリゾウセレクションは3年契約のみ)</span>
                            </div>
                          </div>
                          <div class="base-box-txt">
                            <div class="base-txt">
                              <p class="base-txt-marge"><span class="base-txt-line">3年</span></p>
                            </div>
                          </div>
                        </div>

                        <div class="box-content">
                          <div class="base-box-tit car-icon03">
                            <div class="base-tit">中途解約</div>
                          </div>
                          <div class="base-box-txt base-triangle">
                            <div class="base-txt">
                              -<span class="b-small">(中途解約金発生)</span>
                            </div>
                          </div>

                          <div class="base-box-txt">
                            <div class="base-txt">
                              <p class="base-txt-marge"><span class="base-txt-line">いつでも解約可能</span></p>
                              <span class="b-small">(中途解約金なし)</span>
                            </div>
                          </div>

                        </div>

                        <div class="box-content">
                          <div class="base-box-tit car-icon03">
                            <div class="base-tit">契約中の車乗換</div>
                          </div>
                          <div class="base-box-txt">
                            <div class="base-txt">
                              <p class="base-txt-marge"><span class="base-txt-line">対応可</span></p>
                              <span class="b-small">(のりかえGOオプション)</span>
                            </div>
                          </div>
                          <div class="base-box-txt base-cross">
                            <div class="base-txt">
                              未対応
                            </div>
                          </div>
                        </div>

                        <div class="box-content combine">
                          <div class="base-box-tit car-icon06">
                            <div class="base-tit">契約満了後<br class="pc">新車乗換</div>
                          </div>
                          <div class="base-box-txt">
                            <div class="base-txt">
                              <span class="base-txt-line">契約満了後<br>新車へ乗換</span>
                            </div>
                          </div>
                        </div>

                        <div class="box-content combine">
                          <div class="base-box-tit car-icon16">
                            <div class="base-tit">契約満了後<br class="pc">返却</div>
                          </div>
                          <div class="base-box-txt">
                            <div class="base-txt">
                              <span class="base-txt-line">査定後返却</span>
                            </div>
                          </div>
                        </div>

                        <div class="box-content">
                          <div class="base-box-tit car-icon07">
                            <div class="base-tit">契約満了後<br class="pc">再リース</div>
                          </div>
                          <div class="base-box-txt base-cross">
                            <div class="base-txt">
                              未対応
                            </div>
                          </div>
                          <div class="base-box-txt">
                            <div class="base-txt">
                              <span class="base-txt-line">同じ車で再契約</span>
                            </div>
                          </div>
                        </div>

                        <div class="box-content combine">
                          <div class="base-box-tit car-icon08">
                            <div class="base-tit">契約満了後<br class="pc">買取</div>
                          </div>
                          <div class="base-box-txt base-cross">
                            <div class="base-txt">
                              未対応
                            </div>
                          </div>
                        </div> 

                        <div class="box-content">
                          <div class="base-box-tit car-icon12">
                            <div class="base-tit">ボーナス払い</div>
                          </div>
                          <div class="base-box-txt">
                            <div class="base-txt">
                              <span class="base-txt-line">対応可</span>
                            </div>
                          </div>
                          <div class="base-box-txt base-cross">
                            <div class="base-txt">
                              未対応
                            </div>
                          </div>
                        </div>

                        <div class="box-content combine">
                          <div class="base-box-tit car-icon13">
                            <div class="base-tit">クレジットカード</div>
                          </div>
                          <div class="base-box-txt">
                            <div class="base-txt">
                              <span class="base-txt-line">対応可</span>
                            </div>
                          </div>
                        </div>

                        <div class="box-content combine">
                          <div class="base-box-tit car-icon11">
                            <div class="base-tit">頭金</div>
                          </div>
                          <div class="base-box-txt base-cross">
                            <div class="base-txt">
                              未対応
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>

                  </div>
                </div>

                <div class="btn-type01 single-btn"><amp-img src="https://www.rentracks.jp/adx/p.gifx?idx=0.50932.320514.5958.8624&dna=110306" height="1" width="1"></amp-img><a href="https://www.rentracks.jp/adx/r.html?idx=0.50932.320514.5958.8624&dna=110306" rel="nofollow noopener" target="_blank">【KINTO】</a></div>

              </div>  






              <div class="c-box" id="index4">
                <h2 class="c-tit02">車のサブスク クルカ　</h2>
                <div class="c-box-inner">
                  <p class="c-txt">クルカとは、株式会社クルカが運営するカーリース事業になります。<br>
                  絞り込んだ車種のみを取り扱うこと、リース契約満了後に返却された車は全車売却を前提とすることで、高残価設定を実現し低価格で新車のリースを提供しているサービスになります。</p>
                  <p class="c-txt">3年という短期の契約期間のリースとなっており、3年毎に新車へ乗り換えるという形になっています。短期間の契約なので、その時の状況に合わせた車を選びやすく長期の契約にはないメリットがあります。<br>
                  また、車検を受ける前に返却となるので車検の手配や、車検時の代車のことなどに時間を使う必要がなく、大きな故障のリスクが少ないのでメンテナンス費用も多くかからないといったメリットもあります。</p>
                </div>


                <div class="flame-box-tit pac">クルカのポイント</div>
                <div class="flame-box conclude hikaku-point">
                  <ul class="ulBasic point">
                    <li>3年の短期間のリース契約だから、車検や大きなメンテナンスが不要</li>
                    <li>取り扱い車種を人気車種に絞り込み、高残価設定をすることで格安のリースに</li>
                    <li>高残価設定を実現するためにリース契約満了後、返却された車は全車売却を前提</li>
                    <li>3年の短期リースだから今乗りたい車・その時に必要な車種を選択しやすい。</li>
                    <li>月間走行距離制限1000km</li>
                    <li>リース満了後の選択肢は「返却」のみ</li>
                  </ul>
                </div>


                <div class="car-base-compaer">
                  <h3 class="c-tit-compaer base-btn"><span>クルカ基本情報</span></h3>
                  <div class="base-grid compaer car-base-type01">

                    <div class="box-content">
                      <div class="base-box-tit car-icon01">
                        <div class="base-tit">選べる車種</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <p class="base-txt-marge"><span class="base-txt-line">HP上の取り扱い車種</span></p>
                          <span class="b-small">(HP上の掲載車種のみ)</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon02">
                        <div class="base-tit">契約年数</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">3年</span>
                        </div>
                      </div>
                    </div>


                    <div class="box-content">
                      <div class="base-box-tit car-icon04">
                        <div class="base-tit">メンテナンス<br class="sp">プラン</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          なし
                        </div>
                      </div>
                    </div>


                    <div class="box-content">
                      <div class="base-box-tit car-icon05">
                        <div class="base-tit">走行距離制限<br class="sp">(月間)</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <p class="base-txt-marge"><span class="base-txt-line">1,000km</span></p>
                          <span class="base-txt-line">貨物 2,000km</span>
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon03">
                        <div class="base-tit">中途解約</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          <p class="base-txt-marge">不可</p>
                          <span class="b-small">(中途解約金発生)</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon06">
                        <div class="base-tit">新車乗換</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">新契約で新車へ乗換</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon16">
                        <div class="base-tit">返却</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">返却</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon21">
                        <div class="base-tit">車もらえる</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          未対応
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon07">
                        <div class="base-tit">再リース</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          未対応
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon08">
                        <div class="base-tit">買取</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          未対応
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon09">
                        <div class="base-tit">オプション</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          <p class="base-txt-marge">指定オプション</p>
                          <span class="b-small">(指定オプションの取り外し・変更以外は可能)</span>
                        </div>
                      </div>
                    </div>


                    <div class="box-content">
                      <div class="base-box-tit car-icon10">
                        <div class="base-tit">車のカスタム</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          <p class="base-txt-marge">可能</p>
                          <span class="b-small">(返却時原状回復必須)</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon11">
                        <div class="base-tit">頭金対応</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">対応可</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon12">
                        <div class="base-tit">ボーナス<br class="sp">払い対応</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">対応可</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon13">
                        <div class="base-tit">クレジット<br class="sp">カード払い</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          <span class="base-txt-line">対応可</span>
                        </div>
                      </div>
                    </div>



                    <div class="box-content">
                      <div class="base-box-tit car-icon14">
                        <div class="base-tit">法人・<br class="sp">個人事業主</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">対応可</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon15">
                        <div class="base-tit">中古車リース</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">対応可</span>
                        </div>
                      </div>
                    </div>

                  </div>  
                </div>


                <div class="btn-type01 single-btn"><a href="https://px.a8.net/svt/ejp?a8mat=3NL3HL+91O5GA+5226+HUKPU&a8ejpredirect=https%3A%2F%2Fnewcar.shop%2F" rel="nofollow" target="_blank">クルカ</a>
<img border="0" width="1" height="1" src="https://www17.a8.net/0.gif?a8mat=3NL3HL+91O5GA+5226+HUKPU" alt=""></div>

              </div>







              <div class="c-box" id="index5"> 
                <h2 class="c-tit02">コスモMyカーリース</h2>
                <div class="c-box-inner">
                  <p class="c-txt">コスモMyカーリースとはコスモ石油マーケティング株式会社が運営し、2011年4月から本格的に展開したカーリース事業となります。<br>新車リースで9年のリースであれば契約満了後に車がもらえるサービスもあり、同じ車を長く乗り続けたい方には向いているサービスといえます。</p>
                  <p class="c-txt">中古車リースも行なっており、中古車リースであれば納期が１週間程度と早いのが特徴です。法人・個人事業主の契約にも対応しており、事業で早急に車が必要になった場合など中古車リースを選択することもできます。</p>
                </div>

                <div class="flame-box-tit pac">ポイント</div>
                <div class="flame-box conclude hikaku-point">
                  <ul class="ulBasic point">
                    <li>車検・メンテナンス・税金もすべてコミコミで、月々の支払いが定額</li>
                    <li>店舗が多くあるので、契約後もメンテナンスの相談がしやすい</li>
                    <li>コスモならではのガソリン代最大10円/L引き</li>
                    <li>車種限定の3年リースプランがあり、短期間での乗り換えに対応</li>
                    <li>9年リースプランで車がもらえる</li>
                    <li>介護・福祉車両のリースもあり。法人・個人のどちらにも対応</li>
                    <li>中古車リースの納期が最短1週間</li>
                  </ul>
                </div>

                
                <div class="car-base-compaer">
                  <h3 class="c-tit-compaer base-btn"><span>コスモMyカーリース基本情報</span></h3>
                  <div class="base-grid compaer car-base-type01">

                    <div class="box-content">
                      <div class="base-box-tit car-icon01">
                        <div class="base-tit">選べる車種</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">国産車</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon02">
                        <div class="base-tit">契約年数</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <p class="base-txt-marge"><span class="base-txt-line">36ヶ月〜84ヶ月</span></p>
                          <p class="base-txt-marge"><span class="b-small">(36ヶ月未満も対応可)</span></p>
                          <p class="base-txt-marge"><span class="base-txt-line">9年リースプラン</span></p>
                          <span class="b-small">(店舗での申込のみ)</span>
                        </div>
                      </div>
                    </div>


                    <div class="box-content">
                      <div class="base-box-tit car-icon04">
                        <div class="base-tit">メンテナンス<br class="sp">プラン</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <p><span class="base-txt-line">ゴールドパック</span></p>
                          <p><span class="base-txt-line">シルバーパック</span></p>
                          <p><span class="base-txt-line">ホワイトパック</span></p>
                        </div>
                      </div>
                    </div>


                    <div class="box-content">
                      <div class="base-box-tit car-icon05">
                        <div class="base-tit">走行距離制限<br class="sp">(月間)</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <p class="base-txt-marge"><span class="base-txt-line">〜2,000km</span></p>
                          <span class="b-small">(500km単位で選択)</span>
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon03">
                        <div class="base-tit">中途解約</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          不可<span class="b-small">(中途解約金発生)</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon21">
                        <div class="base-tit">車もらえる</div>
                      </div>
                      <div class="base-box-txt base-triangle">
                        <div class="base-txt">
                          <span class="base-txt-line">もらえる</span>
                          <span class="b-small">(9年契約の場合のみ)</span>
                          <span class="b-small">(店舗での申込のみ)</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon06">
                        <div class="base-tit">新車乗換</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">新契約で新車へ乗換</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon07">
                        <div class="base-tit">再リース</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">リース契約延長</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon16">
                        <div class="base-tit">返却</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <p class="base-txt-marge"><span class="base-txt-line">精算を行い返却</span></p>
                          <p class="base-txt-marge"><span class="b-small">(オープンエンド契約)</span></p>
                          <p class="base-txt-marge"><span class="base-txt-line">審査後返却</span></p>
                          <span class="b-small">(クローズドエンド契約)</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon08">
                        <div class="base-tit">買取</div>
                      </div>
                      <div class="base-box-txt base-triangle">
                        <div class="base-txt">
                          <p class="base-txt-marge"><span class="base-txt-line">可能</span></p>
                          <p class="base-txt-marge"><span class="b-small">(オープンエンド契約)</span></p>
                          <p class="base-txt-marge">未対応</p>
                          <span class="b-small">(クローズドエンド契約)</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon09">
                        <div class="base-tit">ディーラー<br class="sp">オプション</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">選択可</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon09">
                        <div class="base-tit">メーカー<br class="sp">オプション</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">選択可</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon10">
                        <div class="base-tit">車のカスタム・改造</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          <p class="base-txt-marge">不可</p>
                          <!-- <span class="b-small">(もらえるオプション加入時)</span> -->
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon11">
                        <div class="base-tit">頭金対応</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">対応可</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon12">
                        <div class="base-tit">ボーナス<br class="sp">払い対応</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">対応可</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon13">
                        <div class="base-tit">クレジット<br class="sp">カード払い</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          未対応
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon14">
                        <div class="base-tit">法人・<br class="sp">個人事業主</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">対応可</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon15">
                        <div class="base-tit">中古車リース</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">選択可</span>
                        </div>
                      </div>
                    </div>

                  </div>  
                </div>

                <div class="btn-type01 single-btn"><a href="https://www.cosmo-mycar.com/" target="_blank">コスモMyカーリース</a></div>

              </div>





              <div class="c-box" id="index6">
                <h2 class="c-tit02">SOMPOで乗ーる</h2>
                <div class="c-box-inner">
                  <p class="c-txt">SOMPOで乗ーるとは、株式会社 DeNA SOMPO Carlife(ディー・エヌ・エー ソンポ カーライフ)が運営するカーリース事業になります。<br>
                  IT企業である株式会社ディー・エヌ・エーと保険事業を手がけるSOMPOホールディングス株式会社が、2019年に合弁会社「DeNA SOMPO Carlife」を設立しマイカーリース事業を開始しました。</p>
                  <p class="c-txt">同時期に個人間カーシェア事業の合弁会社「DeNA SOMPO Mobility」も設立し、個人間カーシェアサービス「Anyca」の運営を行なっています。<br>
                  <p class="c-txt">SOMPOで乗ーるでは、選べる車種が国産車に限らず輸入車の選択ができるのが特長といえます。</p>
                  <p class="c-txt">また中途解約ができるオプションや、個人間カーシェア「Anyca」で車を貸し出すことができ維持費の軽減ができるサービスがあるのが特長となっています。</p>
                </div>


                <div class="flame-box-tit pac">ポイント</div>
                <div class="flame-box conclude hikaku-point">
                  <ul class="ulBasic point">
                    <li>選べる車種は、国産車全車種以外にも輸入車が選べる</li>
                    <li>もらえるオプションで、契約満了時に車がもらえる</li>
                    <li>９年リース／残価なしプランでリース満了後車がもらえる</li>
                    <li>中途解約オプションがあるので、長期の契約でも解約清算金なしで中途解約が可能</li>
                    <li>残価保証オプション:月額1,100円で契約終了時の残価精算が不要</li>
                    <li>最短10日での即納車がある（台数限定）</li>
                    <li>個人間カーシェア「Anyca」を利用することで維持費軽減が可能</li>
                  </ul>
                </div>


                <div class="car-base-compaer">
                  <h3 class="c-tit-compaer base-btn"><span>SOMPOで乗ーる基本情報</span></h3>
                  <div class="base-grid compaer car-base-type01">
                    <div class="box-content">
                      <div class="base-box-tit car-icon01">
                        <div class="base-tit">選べる車種</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <p class="base-txt-marge"><span class="base-txt-line">国産車</span></p>
                          <p class="base-txt-marge"><span class="base-txt-line">レクサス</span></p>
                          <span class="base-txt-line">輸入車</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon02">
                        <div class="base-tit">契約年数</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">3・5・7・9年</span>
                        </div>
                      </div>
                    </div>


                    <div class="box-content">
                      <div class="base-box-tit car-icon04">
                        <div class="base-tit">メンテナンス<br class="sp">プラン</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <p><span class="base-txt-line">フルメンテプラン</span></p>
                          <p><span class="base-txt-line">ライトメンテプラン</span></p>
                          <p><span class="base-txt-line">シンプルプラン</span></p>
                        </div>
                      </div>
                    </div>


                    <div class="box-content">
                      <div class="base-box-tit car-icon05">
                        <div class="base-tit">走行距離制限<br class="sp">(月間)</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <p class="base-txt-marge"><span class="base-txt-line">1,000km</span></p>
                          <p class="base-txt-marge"><span class="base-txt-line">1,500km</span></p>
                          <p class="base-txt-marge"><span class="base-txt-line">2,000km</span></p>
                          <span class="base-txt-line">3,000km</span>
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon03">
                        <div class="base-tit">中途解約</div>
                      </div>
                      <div class="base-box-txt base-triangle">
                        <div class="base-txt">
                          <p class="base-txt-marge"><span class="base-txt-line">オプションあり</span></p>

                          <span class="b-small">(契約年数の条件あり)</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon21">
                        <div class="base-tit">車もらえる</div>
                      </div>
                      <div class="base-box-txt base-triangle">
                        <div class="base-txt">
                          <span class="base-txt-line">もらえる</span>
                          <span class="b-small">(９年リース／残価なしプランのみ)</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon06">
                        <div class="base-tit">新車乗換</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">新契約で新車へ乗換</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon07">
                        <div class="base-tit">再リース</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">リース契約延長</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon16">
                        <div class="base-tit">返却</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">精算を行い返却</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon08">
                        <div class="base-tit">買取</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          <p class="base-txt-marge">未対応</p>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon09">
                        <div class="base-tit">ディーラー<br class="sp">オプション</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">選択可</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon09">
                        <div class="base-tit">メーカー<br class="sp">オプション</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">選択可</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon10">
                        <div class="base-tit">車のカスタム</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          <p class="base-txt-marge">不可</p>
                          <!-- <span class="b-small">(もらえるオプション加入時)</span> -->
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon11">
                        <div class="base-tit">頭金対応</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">対応可</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon12">
                        <div class="base-tit">ボーナス<br class="sp">払い対応</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">対応可</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon13">
                        <div class="base-tit">クレジット<br class="sp">カード払い</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          未対応
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon14">
                        <div class="base-tit">法人・<br class="sp">個人事業主</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">対応可</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon15">
                        <div class="base-tit">中古車リース</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          未対応
                        </div>
                      </div>
                    </div>

                  </div>

                </div>

                <div class="btn-type01 single-btn"><a href="https://px.a8.net/svt/ejp?a8mat=3NL3HL+941VVE+4JVQ+5YJRM" rel="nofollow" target="_blank">SOMPOで乗ーる（そんぽでのーる）</a>
<amp-pixel src="https://www12.a8.net/0.gif?a8mat=3NL3HL+941VVE+4JVQ+5YJRM" layout="nodisplay"></amp-pixel></div>

              </div>






              <div class="c-box" id="index7">
                <h2 class="c-tit02">車のサブスクNORIDOKI</h2>

                <div class="c-box-inner">
                  <p class="c-txt">NORIDOKIとは、株式会社ジョイカルジャパンが運営するカーリース事業になります。<br>
                    株式会社ジョイカルジャパンは新車販売事業や車検サポート事業を行う企業で、新車販売事業の一つにあるのが、カーリースサービスのNORIDOKIとなります。<br>
                  カーリース事業のNORIDOKIは2020年12月から開始されたカーリースサービスになり、3年ごとに新車に乗り換えるカーライフサービスを展開しています。</p>
                </div>
                

                <div class="flame-box-tit pac">ポイント</div>
                <div class="flame-box conclude hikaku-point">
                  <ul class="ulBasic point">
                    <li>乗り換え前提の3年契約だから格安</li>
                    <li>3年の短期間のリース契約だから、車検や大きなメンテナンスが不要</li>
                    <li>最長で3年という短い期間で契約のためライフスタイルの変化に対応しやすい</li>
                    <li>傷・破損への補償「ジョイカルたすカッター3」修理補償最大60万円分が無償でついてくる</li>
                    <li>ダイナースクラブカードによる決済、一括払いも可能</li>
                    <li>リース満了後の選択肢は「返却」のみ</li>
                  </ul>
                </div>


                <div class="car-base-compaer">
                  <h3 class="c-tit-compaer base-btn"><span>NORIDOKI基本情報</span></h3>
                  <div class="base-grid compaer car-base-type01">
                    <div class="box-content">
                      <div class="base-box-tit car-icon01">
                        <div class="base-tit">選べる車種</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <p class="base-txt-marge"><span class="base-txt-line">特選車一覧</span></p>
                          <span class="b-small">(HP上の掲載車種のみ)</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon02">
                        <div class="base-tit">契約年数</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">3年</span>
                        </div>
                      </div>
                    </div>


                    <div class="box-content">
                      <div class="base-box-tit car-icon04">
                        <div class="base-tit">メンテナンス<br class="sp">プラン</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          なし
                        </div>
                      </div>
                    </div>


                    <div class="box-content">
                      <div class="base-box-tit car-icon05">
                        <div class="base-tit">走行距離制限<br class="sp">(月間)</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">1,000km</span>
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon03">
                        <div class="base-tit">中途解約</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          不可
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon06">
                        <div class="base-tit">新車乗換</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">新契約で新車へ乗換</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon16">
                        <div class="base-tit">返却</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">返却</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon21">
                        <div class="base-tit">車もらえる</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          未対応
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon07">
                        <div class="base-tit">再リース</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          未対応
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon08">
                        <div class="base-tit">買取</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          未対応
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon09">
                        <div class="base-tit">ディーラー<br class="sp">オプション</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          <p class="base-txt-marge">指定オプション</p>
                          <span class="b-small">(指定オプションの取り外し・変更以外は可能)</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon09">
                        <div class="base-tit">メーカー<br class="sp">オプション</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          <p class="base-txt-marge">指定オプション</p>
                          <span class="b-small">(指定オプションの取り外し・変更以外は可能)</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon10">
                        <div class="base-tit">車のカスタム</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          <p class="base-txt-marge">可能</p>
                          <span class="b-small">(返却時原状回復必須)</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon11">
                        <div class="base-tit">頭金対応</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">対応可</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon12">
                        <div class="base-tit">ボーナス<br class="sp">払い対応</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">対応可</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon13">
                        <div class="base-tit">クレジット<br class="sp">カード払い</div>
                      </div>
                      <div class="base-box-txt base-triangle">
                        <div class="base-txt">
                          <span class="base-txt-line">対応可</span>
                          <span class="b-small">(ダイナースクラブカードのみ)</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon14">
                        <div class="base-tit">法人・<br class="sp">個人事業主</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">対応可</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon15">
                        <div class="base-tit">中古車リース</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          未対応
                        </div>
                      </div>
                    </div>

                  </div>

                </div>

                <div class="btn-type01 single-btn"><a href="https://px.a8.net/svt/ejp?a8mat=3NL3HL+929L22+5226+BW8O2&a8ejpredirect=https%3A%2F%2Fjoycal.jp%2Fnoridoki%2F" rel="nofollow" target="_blank">NORIDOKI</a>
<img border="0" width="1" height="1" src="https://www12.a8.net/0.gif?a8mat=3NL3HL+929L22+5226+BW8O2" alt=""></div>

              </div>




              <div class="c-box" id="index8">
                <h2 class="c-tit02">ニコニコカーリース ニコノリ</h2>
                <div class="c-box-inner">
                  <p class="c-txt">ニコノリとは、株式会社MICが運営するカーリース事業になります。<br>
                  株式会社MICは、ニコニコレンタカーや車検整備・中古車販売などを行なっており「新車のリースニコノリ」以外にも「ニコノリ中古車」、1ヵ月から使える超短期カーリース「ニコリース」を運営している企業になります。</p>

                  <p class="c-txt">契約年数が1年という短期から9年までと幅広く設定されているので、用途に応じた契約年数を選べるといった特徴があります。</p>
                  <p class="c-txt">通常のリース会社では「オープンエンド契約(残価精算あり)」「クローズドエンド契約(残価精算なし)」どちらかの契約方式しかありませんが、ニコノリでは「オープンエンド契約(残価精算あり)」「クローズドエンド契約(残価精算なし)」どちらの契約も選ぶことができます。 </p>
                  <p class="c-txt">通常のリース会社ではクローズドエンド契約では車の買取ができない場合がほとんどですが、ニコノリでは「クローズドエンド契約(残価精算なし)」でも車の買取が可能といった特徴があります。</p>
                  <p class="c-txt">また、9年のリース契約でリース満了後に車がもらえる「もらえるパック」や、リース満了後は車の買取ができたりと最終的に手元に車を残せる選択肢があるリース会社となっています。</p>
                  <p class="c-txt">「オープンエンド契約(残価精算あり)」「クローズドエンド契約(残価精算なし)」どちらの契約方式でもリース満了後は「買取」「返却」「再リース」が可能なので、リース満了後の選択肢が多いのも特徴の一つとなっています。</p>
                  <p class="c-txt">「オープンエンド契約」「クローズドエンド契約」については、<a href="<?php echo esc_url (home_url('/car_lease/51/')); ?>" target="_blank" class="link02">「カーリースの残価・オープンエンド・クローズドエンドとは？」</a>の記事をご覧ください。</p>
                  
                </div>



                <div class="flame-box-tit pac">ニコノリのポイント</div>
                <div class="flame-box conclude hikaku-point">
                  <ul class="ulBasic point">
                    <li>月々の支払いが定額なので、必要なのはガゾリン代・駐車場代のみ</li>
                    <li>1〜9年の契約年数があり、短期間の契約から長期の契約まで選択できる</li>
                    <li>「もらえるパック」9年のリース契約にすると、リース満了後に車がもらえる</li>
                    <li>「オープンエンド契約(残価精算あり)」「クローズドエンド契約(残価精算なし)」どちらの契約も選択可能</li>
                    <li>リース満了後は、買取・返却・再リースが可能で選択肢が多い(契約方式に関わらず)</li>
                    <li>契約から最短２週間で即納車可能　2022/10/27日現在97台</li>
                  </ul>
                </div>


                <div class="car-base-compaer">
                  <h3 class="c-tit-compaer base-btn"><span>ニコノリ基本情報</span></h3>
                  <div class="base-grid compaer car-base-type01">

                    <div class="box-content">
                      <div class="base-box-tit car-icon01">
                        <div class="base-tit">選べる車種</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">国産車</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon02">
                        <div class="base-tit">契約年数</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">1〜9年</span>
                        </div>
                      </div>
                    </div>


                    <div class="box-content">
                      <div class="base-box-tit car-icon04">
                        <div class="base-tit">メンテナンス<br class="sp">プラン</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <p><span class="base-txt-line">ライトプラン</span></p>
                          <span class="base-txt-line">バリュープラン</span>
                        </div>
                      </div>
                    </div>


                    <div class="box-content">
                      <div class="base-box-tit car-icon05">
                        <div class="base-tit">走行距離制限<br class="sp">(月間)</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <p class="base-txt-marge"><span class="base-txt-line">5年契約月間1,000km</span></p>
                          <span class="b-small">(相談により変更可能)</span>
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon03">
                        <div class="base-tit">中途解約</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          不可
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon21">
                        <div class="base-tit">車もらえる</div>
                      </div>
                      <div class="base-box-txt base-triangle">
                        <div class="base-txt">
                          <span class="base-txt-line">もらえる</span>
                          <span class="b-small">(もらえるパック/9年のリース)</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon06">
                        <div class="base-tit">新車乗換</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">新契約で新車へ乗換</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon07">
                        <div class="base-tit">再リース</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">リース契約延長</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon16">
                        <div class="base-tit">返却</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">精算を行い返却</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon08">
                        <div class="base-tit">買取</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">可能</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon09">
                        <div class="base-tit">ディーラー<br class="sp">オプション</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">選択可</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon09">
                        <div class="base-tit">メーカー<br class="sp">オプション</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">選択可</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon10">
                        <div class="base-tit">車のカスタム</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          <p class="base-txt-marge">不可</p>
                          <!-- <span class="b-small">(もらえるオプション加入時)</span> -->
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon11">
                        <div class="base-tit">頭金対応</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">対応可</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon12">
                        <div class="base-tit">ボーナス<br class="sp">払い対応</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">対応可</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon13">
                        <div class="base-tit">クレジット<br class="sp">カード払い</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          未対応
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon14">
                        <div class="base-tit">法人・<br class="sp">個人事業主</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">対応可</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon15">
                        <div class="base-tit">中古車リース</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">対応可</span>
                        </div>
                      </div>
                    </div>

                  </div>

                </div>

                <div class="btn-type01 single-btn"><amp-img src="https://www.rentracks.jp/adx/p.gifx?idx=0.50932.320514.6719.9856&dna=121962" height="1" width="1"></amp-img><a href="https://www.rentracks.jp/adx/r.html?idx=0.50932.320514.6719.9856&dna=121962" rel="nofollow noopener" target="_blank">ニコノリ</a></div>

              </div>



              <div class="c-box" id="index9">
                <h2 class="c-tit02">もらえるカーリースMOTA</h2>
                <div class="c-box-inner">
                  <p class="c-txt">MOTAとは、株式会社MOTA（モータ）が運営する、カーリース事業になります。</p>
                  <p class="c-txt">株式会社MOTAは、1999年からインターネットでの自動車マッチングに取り組んできており、個人向け自動車リースのサービスを2020年5月から開始しています。</p>
                  <p class="c-txt">2021年12月にはMOTAカーリースの申込件数が累計5000件を突破しており、月間で250件以上の申し込みがあるサービスとなっています。</p>

                  <p class="c-txt">MOTAでは、「返却の心配なし(最後にもらえる)」「走行距離の心配無し」「修理費用請求の心配無し」となっており、リース契約した車を購入した車と同じように扱えるのが特長となっています。</p>
                </div>
                <div class="flame-box-tit pac">ポイント</div>
                <div class="flame-box conclude hikaku-point">
                  <ul class="ulBasic point">
                    <li>車検費用・税金などコミコミなので月々の支払いが定額</li>
                    <li>最長11年契約が選択でき、長期の契約で月々のリース料金を抑えることができる</li>
                    <li>国産車全メーカー・全車種、レクサスから車が選べる</li>
                    <li>契約満了時に車がもらえる。追加料金・オプション契約・契約年数の縛りなどなしで全ての契約で最終的に車がもらえる</li>
                    <li>最終的に車がもらえるので、走行距離・カスタム・ペットの同乗・喫煙などといったことを気にすることなく利用できる</li>
                    <li>リース満了時に車を返却した場合、原状回復費用などの修理費の請求が無し</li>
                    <li>短期納車が可能車もあり、1ヶ月以内に納車できる車が19台　2022/10/27現在</li>
                  </ul>
                </div>


                <div class="car-base-compaer">
                  <h3 class="c-tit-compaer base-btn"><span>MOTA基本情報</span></h3>
                  <div class="base-grid compaer car-base-type01">

                    <div class="box-content">
                      <div class="base-box-tit car-icon01">
                        <div class="base-tit">選べる車種</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">国産車・レクサス</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon02">
                        <div class="base-tit">契約年数</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">5・7・11年</span>
                        </div>
                      </div>
                    </div>


                    <div class="box-content">
                      <div class="base-box-tit car-icon04">
                        <div class="base-tit">メンテナンス<br class="sp">プラン</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <p class="base-txt-marge"><span class="base-txt-line">メンテナンスパック</span></p>
                          <p class="base-txt-marge"><span class="base-txt-line">メンテナンスパック<br>プレミアム</span></p>
                          <span class="b-small">(未加入も可能)</span>
                        </div>
                      </div>
                    </div>


                    <div class="box-content">
                      <div class="base-box-tit car-icon05">
                        <div class="base-tit">走行距離制限<br class="sp">(月間)</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">無制限</span>
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon03">
                        <div class="base-tit">中途解約</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          不可<span class="b-small">(中途解約金発生)</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon21">
                        <div class="base-tit">車もらえる</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">もらえる</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon06">
                        <div class="base-tit">新車乗換</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">新車へ乗換</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon16">
                        <div class="base-tit">返却</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <p class="base-txt-marge"><span class="base-txt-line">返却</span></p>
                          <span class="b-small">(修理費用の請求無し)</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon07">
                        <div class="base-tit">再リース</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          <span class="base-txt-line">未対応</span>
                        </div>
                      </div>
                    </div>


                    <div class="box-content">
                      <div class="base-box-tit car-icon08">
                        <div class="base-tit">買取</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          未対応
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon09">
                        <div class="base-tit">ディーラー<br class="sp">オプション</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">選択可</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon09">
                        <div class="base-tit">メーカー<br class="sp">オプション</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">選択可</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon10">
                        <div class="base-tit">車のカスタム</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">カスタム可能</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon11">
                        <div class="base-tit">頭金対応</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">対応可能</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon12">
                        <div class="base-tit">ボーナス<br class="sp">払い対応</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">対応可</span>
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon13">
                        <div class="base-tit">クレジット<br class="sp">カード払い</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          未対応
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon14">
                        <div class="base-tit">法人・<br class="sp">個人事業主</div>
                      </div>
                      <div class="base-box-txt base-cross">
                        <div class="base-txt">
                          未対応
                        </div>
                      </div>
                    </div>

                    <div class="box-content">
                      <div class="base-box-tit car-icon15">
                        <div class="base-tit">中古車リース</div>
                      </div>
                      <div class="base-box-txt">
                        <div class="base-txt">
                          <span class="base-txt-line">選択可能</span>
                        </div>
                      </div>
                    </div>

                  </div>

                </div>

                <div class="btn-type01 single-btn"><a href="https://autoc-one.jp/lease/" target="_blank">もらえるカーリース<br class="sp">MOTA</a></div>
                
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


<script>
window.onload = function(){
FixedMidashi.create();
};
</script>  

        

















<?php get_footer(); ?>