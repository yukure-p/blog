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
                <h2 class="c-tit02">カーリース各社比較表</h2>
                <span class="tb-notice">「※オプション」「※条件あり」は各サービスの詳細をご参照ください</span>
                <div class="tb-box scroll_div">
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
                        <th><a href="index1" class="link02">オートフラット</a></th>
                        <th><a href="index2" class="link02">カルモくん</a></th>
                        <th><a href="index3" class="link02">KINTO</a></th>
                        <th><a href="index4" class="link02">クルカ</a></th>
                        <th><a href="index5" class="link02">コスモMyカーリース</a></th>
                        <th><a href="index6" class="link02">sompoで乗ーる</a></th>
                        <th><a href="index7" class="link02">NORIDOKI</a></th>
                        <th><a href="index8" class="link02">ニコノリ</a></th>
                        <th><a href="index9" class="link02">MOTA</a></th>
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
                        <th>走行距離制限<br>(月間)</th>
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
                        <td><span class="hyphen"></span></td>
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
                        <th>契約車の買取</th>
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
                        <th>ディーラー・メーカー<br>オプション</th>
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
                        <th>ボーナス払い対応</th>
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
                        <th>クレジットカード払い</th>
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
                        <th>法人・個人事業主</th>
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
                        <th></th>
                        <td><div class="btn01 type01 bg-car"><a href="">オートフラット<br>公式サイト</a></div></td>
                        <td><div class="btn01 type01 bg-car"><a href="">カルモくん<br>公式サイト</a></div></td>
                        <td><div class="btn01 type01 bg-car"><a href="">KINTO<br>公式サイト</a></div></td>
                        <td><div class="btn01 type01 bg-car"><a href="">クルカ<br>公式サイト</a></div></td>
                        <td><div class="btn01 type01 bg-car"><a href="">コスモMyカーリース<br>公式サイト</a></div></td>
                        <td><div class="btn01 type01 bg-car"><a href="">sompoで乗ーる<br>公式サイト</a></div></td>
                        <td><div class="btn01 type01 bg-car"><a href="">NORIDOKI<br>公式サイト</a></div></td>
                        <td><div class="btn01 type01 bg-car"><a href="">ニコノリ<br>公式サイト</a></div></td>
                        <td><div class="btn01 type01 bg-car"><a href="">MOTA<br>公式サイト</a></div></td>
                      </tr>
                    </tbody>              
                  </table>
                </div>
              </div>

              <div class="c-box box" id="index2">
                <h2 class="c-tit02">オートフラットのポイント</h2>
                <p class="c-txt">オートフラットは出光興産株式会社が運営するカーリースサービスです。</p>
                  <div class="flame-box-tit pac">ポイント</div>
                  <div class="flame-box pac">
                    <ul class="ulBasic01 type01 bold">
                      <li>契約満了時のキャッシュバック率が96％・平均20万円</li>
                      <li>残価での車買取ができる</li>
                      <li>オートフラット専用の任意自動車保険がお得</li>
                      <li>免許返納による中途解約金不要が無料で付帯</li>
                      <!-- <li>短期契約や長期契約（７年以上）ができない</li> -->
                      <li>中途解約に解約金が発生する</li>
                      <!-- <li>残価での車買取前提であれば、車のカスタム・改造ができる</li> -->
                    </ul>
                  </div>

                    <div class="base-glid car-base-type01 type01">

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
                          <div class="base-tit">走行距離制限(月間)</div>
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
                          <div class="base-tit">ディーラーオプション</div>
                        </div>
                        <div class="base-box-txt">
                          <div class="base-txt">
                            <span class="base-txt-line">選択可</span>
                          </div>
                        </div>
                      </div> 


                      <div class="box-content">
                        <div class="base-box-tit car-icon09">
                          <div class="base-tit">メーカーオプション</div>
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
                          <div class="base-tit">ボーナス払い対応</div>
                        </div>
                        <div class="base-box-txt">
                          <div class="base-txt">
                            <span class="base-txt-line">対応可</span>
                          </div>
                        </div>
                      </div> 

                      <div class="box-content">
                        <div class="base-box-tit car-icon13">
                          <div class="base-tit">クレジットカード払い</div>
                        </div>
                        <div class="base-box-txt">
                          <div class="base-txt">
                            <span class="base-txt-line">アポロステーションカードでの支払い可</span>
                          </div>
                        </div>
                      </div>

                      <div class="box-content">
                        <div class="base-box-tit car-icon14">
                          <div class="base-tit">法人・個人事業主</div>
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

              <div class="c-box box" id="index3">
                <h2 class="c-tit02">おトクにマイカー定額カルモくんの特徴</h2>
                <p class="c-txt">ナイル株式会社が提供する、定額制のカーリースサービスです。</p>
                <ul class="content-list frame">
                  <li>1. 契約年数が、１年〜11年と１年単位で選べる。</li>
                  <li>2. 月間走行距離が無制限(7年以上の契約の場合)。</li>
                  <li>3. 契約満了後に車が貰える(オプション加入時)。</li>
                </ul>
              </div>
 
              <div class="c-box box" id="index4">
                <h2 class="c-tit02">KINTOの特徴</h2>
                <p class="c-txt">株式会社KINTOが提供する、定額制のカーリースサービスです。</p>
                <ul class="content-list frame">
                  <li>1. 中途解約金が、かからないプランがある(解約金フリープラン)。</li>
                  <li>2. 選べる車種にレクサスがある(初期費用フリープラン)。</li>
                  <li>3. クレジットカード払いができる。</li>
                </ul>
              </div>

              <div class="c-box box" id="index4">
                <h2 class="c-tit02">クルカの特徴</h2>
                <p class="c-txt">株式会社KINTOが提供する、定額制のカーリースサービスです。</p>
                <ul class="content-list frame">
                  <li>1. 他社と比べてリース料が安い。</li>
                  <li>2. 契約年数が3年と短いため、乗り換えが短期間で出来る。</li>
                  <li>3. 契約満了し、再契約した場合月々の支払いが30%OFFになる。</li>
                </ul>
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


<script>
window.onload = function(){
FixedMidashi.create();
};
</script>  

        

















<?php get_footer(); ?>