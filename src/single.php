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
          <div class="contents-box">
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

                </div>
              </div>
              <article>
              <div class="c-box intro">
                <p class="c-txt">この記事では、出光興産が提供する、月々定額カーリース「オートフラット」ってどのようなサービスなのかについて解説しています。</p>
                <ul class="ulBasic01 type03">
                  <li>オートフラットってどんなサービスなの？</li>
                  <li>契約満了後ってどうなるの？</li>
                  <li>メンテナンスは充実している？</li>
                </ul>
                <p class="c-txt">こんな疑問があるかと思います。<br>契約してから後悔が起こってしまっては、楽しいカーライフを送れません。</p>
                <p class="c-txt">私自身が、カーリースサービスを利用しこれまでに色々と調べた情報をまとめています。<br>オートフラットについて、メリットやデメリットなど解説し、ご自身に合ったカーリースサービスか解る内容になっています。</p>

              </div>


              <div class="c-box box" id="index1">
                <h2 class="c-tit02" >基本情報</h2>

                <div class="flexList01 type02">
                  <div class="box-content">
                    <div class="base-box">
                      <div class="base-img">
                        <figure><img src="<?php echo get_template_directory_uri()?>/img/car_lease/car_lease-icon01.svg" alt="選べる車種"></figure>
                      </div>
                      <div class="base-tit">選べる車種</div>
                    </div>
                    <div class="base-txt">国産車</div>
                  </div>
                  <div class="box-content">
                    <div class="base-box">
                      <div class="base-img">
                        <figure><img src="<?php echo get_template_directory_uri()?>/img/car_lease/car_lease-icon02.svg" alt="契約年数"></figure>
                      </div>
                      <div class="base-tit">契約年数</div>
                    </div>
                    <div class="base-txt">3年～7年</div>
                  </div>
                  <div class="box-content">
                    <div class="base-box">
                      <div class="base-img">
                        <figure><img src="<?php echo get_template_directory_uri()?>/img/car_lease/car_lease-icon03.svg" alt="中途解約"></figure>
                      </div>
                      <div class="base-tit">中途解約</div>
                    </div>
                    <div class="base-txt">中途解約金発生</div>
                  </div>
                  <div class="box-content">
                    <div class="base-box">
                      <div class="base-img">
                        <figure><img src="<?php echo get_template_directory_uri()?>/img/car_lease/car_lease-icon04.svg" alt="契約プラン"></figure>
                      </div>
                      <div class="base-tit">3つの契約プラン</div>
                    </div>
                    <div class="base-txt">・フルメンテプラン<br>・マイメンテプラン<br>・メンテなしプラン</div>
                  </div>
                  <div class="box-content">
                    <div class="base-box">
                      <div class="base-img">
                        <figure><img src="<?php echo get_template_directory_uri()?>/img/car_lease/car_lease-icon05.svg" alt="走行距離制限"></figure>
                      </div>
                      <div class="base-tit">走行距離制限(月間)</div>
                    </div>
                    <div class="base-txt">500km〜2,500km<br>
                    1,500kmまで<br>
                    <span class="b-small">(マイメンテプラン)</span>
                    </div>
                  </div>
                  <div class="box-content">
                    <div class="base-box">
                      <div class="base-img">
                        <figure><img src="<?php echo get_template_directory_uri()?>/img/car_lease/car_lease-icon06.svg" alt="契約満了後"></figure>
                      </div>
                      <div class="base-tit">契約満了後新車乗換</div>
                    </div>
                    <div class="base-txt">残価支払後新車へ乗換可能</div>
                  </div>
                  <div class="box-content">
                    <div class="base-box">
                      <div class="base-img">
                        <figure><img src="<?php echo get_template_directory_uri()?>/img/car_lease/car_lease-icon07.svg" alt="契約満了後"></figure>
                      </div>
                      <div class="base-tit">契約満了後再リース</div>
                    </div>
                    <div class="base-txt">そのままリース契約延長</div>
                  </div>
                  <div class="box-content">
                    <div class="base-box">
                      <div class="base-img">
                        <figure><img src="<?php echo get_template_directory_uri()?>/img/car_lease/car_lease-icon08.svg" alt="契約満了後"></figure>
                      </div>
                      <div class="base-tit">契約満了後買取</div>
                    </div>
                    <div class="base-txt">残価での買取可能</div>
                  </div>
                  <div class="box-content">
                    <div class="base-box">
                      <div class="base-img">
                        <figure><img src="<?php echo get_template_directory_uri()?>/img/car_lease/car_lease-icon09.svg" alt="ディーラー・メーカーオプション"></figure>
                      </div>
                      <div class="base-tit">ディーラー・メーカーオプション</div>
                    </div>
                    <div class="base-txt">選択可</div>
                  </div>
                  <div class="box-content">
                    <div class="base-box">
                      <div class="base-img">
                        <figure><img src="<?php echo get_template_directory_uri()?>/img/car_lease/car_lease-icon10.svg" alt="車のカスタム"></figure>
                      </div>
                      <div class="base-tit">車のカスタム</div>
                    </div>
                    <div class="base-txt">車体改造不可</div>
                  </div>
                  <div class="box-content">
                    <div class="base-box">
                      <div class="base-img">
                        <figure><img src="<?php echo get_template_directory_uri()?>/img/car_lease/car_lease-icon11.svg" alt="頭金対応"></figure>
                      </div>
                      <div class="base-tit">頭金対応</div>
                    </div>
                    <div class="base-txt">対応可</div>
                  </div>
                  <div class="box-content">
                    <div class="base-box">
                      <div class="base-img">
                        <figure><img src="<?php echo get_template_directory_uri()?>/img/car_lease/car_lease-icon12.svg" alt="ボーナス払い対応"></figure>
                      </div>
                      <div class="base-tit">ボーナス払い対応</div>
                    </div>
                    <div class="base-txt">対応可</div>
                  </div>
                  <div class="box-content">
                    <div class="base-box">
                      <div class="base-img">
                        <figure><img src="<?php echo get_template_directory_uri()?>/img/car_lease/car_lease-icon13.svg" alt="クレジットカード払い"></figure>
                      </div>
                      <div class="base-tit">クレジットカード払い</div>
                    </div>
                    <div class="base-txt">アポロステーションカードでの支払いが可能</div>
                  </div>
                  <div class="box-content">
                    <div class="base-box">
                      <div class="base-img">
                        <figure><img src="<?php echo get_template_directory_uri()?>/img/car_lease/car_lease-icon14.svg" alt="法人個人事業主"></figure>
                      </div>
                      <div class="base-tit">法人・個人事業主</div>
                    </div>
                    <div class="base-txt">法人向け「オートフラットBiz」で対応</div>
                  </div>
                  <div class="box-content">
                    <div class="base-box">
                      <div class="base-img">
                        <figure><img src="<?php echo get_template_directory_uri()?>/img/car_lease/car_lease-icon15.svg" alt="中古車リース"></figure>
                      </div>
                      <div class="base-tit">中古車リース</div>
                    </div>
                    <div class="base-txt">対応なし</div>
                  </div>
                </div>

              </div>

              <div class="c-box box" id="index2">
                <h2 class="c-tit02">オートフラットのメリット</h2>


                <div class="flame-box-tit pac">メリット</div>
                <div class="flame-box pac">
                  <ul class="ulBasic01 type01 bold">
                    <li>契約満了後の選択肢が多い！</li>
                    <li>適正な残価設定で契約満了時のキャッシュバック率が96％！</li>
                    <li>残価での車買取ができる！</li>
                    <!-- <li>リース期間中ずっと、ガソリン代を最大7円/L引き</li> -->
                    <li>オートフラット専用の任意自動車保険がお得！</li>
                    <li>免許返納・死亡時は中途解約金不要！</li>
                  </ul>
                </div>

                <h3 class="c-tit03" id="index3">メリット１. 契約満了後の選択肢が多い！</h3>
                <p class="c-txt">
                契約満了後に<span class="bold txt-large txt-line">「再リース」&nbsp;「新車への乗り換え」&nbsp;「買取」&nbsp;「返却」</span>&nbsp;の４つの選択肢から選ぶことができます。契約満了後の選択肢が複数あることは、<span class="bold txt-large txt-line">契約満了時のライフプランに合わせた選択</span>ができるという大きなメリットになります。契約時には、想定していなかったライフスタイルの変化に柔軟に対応できるサービスになっていると言えます。</p>

                <p class="c-tit05">契約満了後豊富な選択肢！</p>
                <div class="flexList01 row4 of-pca01">
                  <div class="box-content">
                    <div class="pca-inner">
                      <div class="tit">返却</div>
                      <figure class="pac-of04"><img src="<?php echo get_template_directory_uri()?>/img/car_lease/car_lease-icon16.svg" alt="返却"></figure>
                    </div>
                  </div>
                  <div class="box-content">
                    <div class="pca-inner">
                      <div class="tit">新車への乗り換え</div>
                      <figure class="pac-of02"><img src="<?php echo get_template_directory_uri()?>/img/car_lease/car_lease-icon17.svg" alt="新車への乗り換え"></figure>
                    </div>
                  </div>
                  <div class="box-content">
                    <div class="pca-inner">
                      <div class="tit">残価で買取</div>
                      <figure class="pac-of03"><img src="<?php echo get_template_directory_uri()?>/img/car_lease/car_lease-icon08.svg" alt="残価買取"></figure>
                    </div>
                  </div>
                  <div class="box-content">
                    <div class="pca-inner">
                      <div class="tit">再リース</div>
                      <figure class="pac-of01"><img src="<?php echo get_template_directory_uri()?>/img/car_lease/car_lease-icon07.svg" alt="再リース"></figure>
                    </div>
                  </div>
                </div>
                <p class="txt-notice space-mt-20">残価とは、「残存価格」の略で、契約満了時の車両の予想売却価格(車両価値)になります</p>

                <h3 class="c-tit03">メリット2. 適正な残価設定で契約満了時のキャッシュバック率が96％！</h3>
                <p class="c-txt">契約満了時の査定で<span class="bold txt-large txt-line">キャッシュバック率が96％</span>と、高確率でキャッシュバックされています。<br>
                <span class="bold txt-large txt-line">平均キャッシュバック額は約20万円</span>となっており、契約時の残価設定が適正な価格で設定されていることが解る数値と言えます。<br>
                <span class="txt-notice">※残価とは、「残存価格」の略で、契約満了時の車両の予想売却価格(車両価値)になります</span>
                </p>
                <p class="c-txt">オートフラットでは<span class="bold txt-large txt-line">車両ごとに契約期間・車のグレード・ボディカラー・契約走行距離を元に残価が設定</span>されています。そのため、契約満了時の残価差額に大きな差が出ず、安心して契約することができます。</p>
                <p class="txt-notice">※2021年度（2021年4月1日～2022年1月31日データ）残価精算平均実績税込216千円。キャッシュバック率96%</p>
                <p class="c-tit05">オートフラットの残価設定</p>
                <div class="of-pca-outer">
                  <div class="flexList01 of-pca02">
                    <div class="box-content">
                      <div class="pca-inner">
                        <p class="tit">オートフラット</p>
                        
                        <figure class="pac-of01"><img src="<?php echo get_template_directory_uri()?>/img/car_lease/car_lease-icon18.svg" alt="残価設定が適正"></figure>
                        <p class="txt-border">適正な残価設定</p>

<!--                         <div class="row-2col">
                          <p>リース料金150万円</p>
                          <p>残価50万円</p>
                        </div> -->
                      </div>
                    </div>
                    <div class="box-content">
                      <div class="pca-inner">
                        <p class="tit">他格安リースの場合</p>
                        <figure class="pac-of01"><img src="<?php echo get_template_directory_uri()?>/img/car_lease/car_lease-icon19.svg" alt="残価設定が高額"></figure>
                        <p class="txt-border">残価設定が高設定</p>
                      </div>
                    </div>
                   
                  </div>
                   <p class="of-pca02-tit">契約満了後</p>
                   <div class="flexList01 of-pca02">
                    <div class="box-content">
                      <p>契約時の残価設定が適正なため、契約満了後の査定でキャッシュバック率％</p>
                      <p>平均キャッシュバック率２０万円</p>
                    </div>
                    <div class="box-content">
                      <p>契約満了後の査定で残価がマイナス査定になり差額の支払いが発生</p>
                      <p>契約満了後に思わぬ出費になることも</p>
                    </div>
                   </div>

                </div>

                <h3 class="c-tit03">メリット3. 残価での車買取ができる！</h3>
                <p class="c-txt">他社では、買取ができないリース契約もありますが、オートフラットでは、<span class="bold txt-large txt-line">残価での買取が可能</span>です。<br>
                  <span class="bold txt-large txt-line">気に入った車を長く乗りたい方には、残価での買取</span>ができるオートフラットはおすすめです。</p>
                <p class="c-tit05">契約時の残存価格で契約車の買取ができる！</p>
                <div class="car-grid">
                  <div class="box-content">
                    <p class="car-grid-tit">契約時</p>
                    <div class="box-inner">
                      
                      <figure class="zanka"><img src="<?php echo get_template_directory_uri()?>/img/car_lease/car_lease-icon18.svg" alt="残価設定が高額"></figure>
                      <p class="txt-border">適正な残存価格を設定</p>
                    </div>
                  </div>
                  <div class="box-content">
                   <figure class="allow"><img src="<?php echo get_template_directory_uri()?>/img/car_lease/car_lease-icon20.svg" alt="allow"></figure>
                  </div>
                  <div class="box-content">
                    <p class="car-grid-tit">契約満了で買取</p>
                    <div class="box-inner">
                      
                      <p class="inner-txt">平均キャッシュバック金額<span class="bold">２０万円</span></p>
                      <!-- <p class="inner-txt-symbol"></p> -->
                      <p class="car-grid-txt">

                        
                      <span class="txt-line-themaa">実際の残存価値よりも<br>２０万円程安く購入できる</span></p>
                    </div>
                  </div>
                </div>
                


                <h3 class="c-tit03" id="index3">メリット4. オートフラット専用の任意自動車保険がお得！</h3>
                <p class="c-txt">リース契約では通常、任意保険は自身での加入がほとんどになります。<br>
                オートフラットでは任意自動車保険を月額に含めることができ、さらに<span class="bold txt-large txt-line">リース契約期間と同年数の長期の任意自動車保険契約</span>となります。<br>長期契約ため、<span class="bold txt-large txt-line">単年契約よりも割安でお得</span>な契約となります。</p>
                <h4 class="c-tit04">事故で保険を使っても保険料が変わらない！</h4>
                <p class="c-txt">通常保険を利用してしまうと、翌年の保険料が大幅にアップしてしまいます。<br>
                オートフラット専用自動車保険の場合、保険を利用しても<span class="bold txt-large txt-line">契約時の保険料のまま</span>のため保険料が変わることはありません。
                </p>


                <h3 class="c-tit03">メリット5. 免許返納・死亡時は中途解約金不要！</h3>
                <p class="c-txt">他社ではオプション対応となる場合や、追加費用が掛かることもある免許返納・死亡時の中途解約ですが、オートフラットでは<span class="bold txt-large txt-line">リース期間3～5年契約の場合は自動的に「あんしんキャンセルサポート」が無料で付帯</span>されます。<br>ご高齢の方などで、最新の安全装備がついた新車を希望しつつも「いつまで乗れるだろうか」「免許の返納も考えないと」と思案されている方でも、中途解約で解約金が発生しないため心配することなくカーライフを送ることができます。</p>
                <p class="c-txt">また、不慮の死亡事故の場合の備えとしても無料で付帯されるので、安心できるサポートになっています。</p>
              </div>

              <div class="c-box box" id="index4">
                <h2 class="c-tit02">オートフラットのデメリット</h2>
                <div class="flame-box-tit pac">デメリット</div>
                <div class="flame-box pac">
                  
                  <ul class="ulBasic01 type01 bold">
                    <li>単年契約や長期契約（７年以上）ができない</li>
                    <li>輸入車のリースがない</li>
                    <li>中途解約に解約金が発生する</li>
                    <li>中古リースがない</li>
                    <li>車のカスタム、改造ができない</li>
                  </ul>
                </div>

                <h3 class="c-tit03">デメリット1. 単年契約や長期契約（７年以上）ができない</h3>
                <p class="c-txt">オートフラットの契約期間は「３年〜７年」となります。<span class="bold txt-large txt-line">短期間、単身赴任等</span>でのリースを考えている方や、<span class="bold txt-large txt-line">7年以上の長期契約</span>をすることで月額費用を抑えたい方には向かないサービスになります。</p>
                <!-- <p class="c-txt">長期短期のサービスがあるリンクを設置</p> -->

                <h3 class="c-tit03">デメリット2. 輸入車のリースがない</h3>
                <p class="c-txt">選べる車種が国産車全車種となるオートフラットでは、輸入車が選択できません。</p>
                <!-- <p class="c-txt">輸入車のリースをご検討されている方はsompoで乗ーるをご確認ください。</p> -->


                <h3 class="c-tit03">デメリット3. 中古リースがない</h3>
                <p class="c-txt">新車のみのサービスとなっていて、中古リースで月額費用を極力抑えたいという方には向かないサービスになります。</p>
                <!-- <p class="c-txt">中古車リースご検討の方は下記をご参照ください。</p>
                <p class="c-txt">中古車サービスリンクを設置</p> -->


                <h3 class="c-tit03">デメリット4. 車のカスタム、改造ができない</h3>
                <p class="c-txt">車体の改造を伴わないカー用品取り付けは可能ですが、<span class="bold txt-large txt-line">車の塗装変更や、車の車体に穴を開けるなどの改造やカスタム</span>を行いたい方には向いていないサービスになります。</p>
               <!--  <p class="c-txt">車のカスタムを自由にしたい！という方は</p>
                <p class="c-txt">カスタム可サービスリンクを設置</p> -->

              </div>

              <div class="c-box" id="index4">
                <h2 class="c-tit02">３つの契約プラン(メンテナンスプラン)</h2>
                <p class="c-txt">オートフラットで提供されているのは３つのプラン。<br>
                ３つのメンテナンスプランから選択し契約する形となります。</p>

                <div class="flame-box-tit pac">３つの契約プラン</div>
                <div class="flame-box pac">
                <ul class="ulBasic01 type01　bold">
                  <li>フルメンテプラン</li>
                  <li>マイメンテプラン</li>
                  <li>メンテなしプラン</li>
                </ul>
                </div>

                <h3 class="c-tit03">フルメンテプラン</h3>
                <p class="c-txt">車検や法定点検、消耗部品の交換、故障修理、代車など充実したメンテナンスサポートを受けたい方におすすめです。</p>
                <h3 class="c-tit03">マイメンテプラン</h3>
                <p class="c-txt">メンテナンス項目を重要な項目に絞ったプランになっていて月々の費用を抑えたい方、走行距離が少なめの方におすすめです。
                <p class="txt-notice">マイメンテプランは月間走行距離1,500キロ以下の場合選択可能</p></p>
                <h3 class="c-tit03">メンテなしプラン</h3>
                <p class="c-txt">メンテナンス費用が含まれないため、月々の支払いを抑えたい方や、行きつけのショップや工場がある方はこちらがおすすめです。<br>
                <p class="txt-notice">レクサス車はメンテなしプランのみ選択可能</p></p><br>

                <div class="tb-box scroll_div">
                  <table class="tb_basic02" _fixedhead="rows:2; cols:1; div-auto-size: none;body-header-id: fix;">
                    <thead>
                      <tr>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                      </tr>
                      <tr>
                        <th></th>
                        <th>フルメンテプラン</th>
                        <th>マイメンテプラン</a></th>
                        <th>メンテなしプラン</a></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th>車両代金</th>
                        <td>○</td>
                        <td>○</td>
                        <td>○</td>
                      </tr>
                      <tr>
                        <th class="tb-th-w">契約年数</th>
                        <td>○</td>
                        <td>○</td>
                        <td>○</td>
                      </tr>
                      <tr>
                        <th>自動車税環境性能割</th>
                        <td>○</td>
                        <td>○</td>
                        <td>○</td>
                      </tr>
                      <tr>
                        <th>自動車税種別割</th>
                        <td>○</td>
                        <td>○</td>
                        <td>○</td>
                      </tr>  
                      <tr>
                        <th>重量税</th>
                        <td>○</td>
                        <td>○</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <th>自賠責保険</th>
                        <td>○</td>
                        <td>○</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <th>車検整備</th>
                        <td>○</td>
                        <td>○</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <th>法定点検</th>
                        <td>○</td>
                        <td>○</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <th>定期点検</th>
                        <td>○</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <th>エンジンオイル</th>
                        <td>○</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <th>オイルエレメント</th>
                        <td>○</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <th>ブレーキオイル</th>
                        <td>○</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <th>タイヤ</th>
                        <td>○</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <th>バッテリー</th>
                        <td>○</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <th>ブレーキパッド</th>
                        <td>○</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <th>ワイパーゴム</th>
                        <td>○</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <th>その他の消耗品</th>
                        <td>○</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <th>故障修理</th>
                        <td>○</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <th>代車</th>
                        <td>○</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                    </tbody>              
                  </table>
                </div>
              </div>
 
                        
              <!-- <div class="c-box" id="index5"> 
                <h2 class="c-tit02">ガゾリン代7円引きと商品券２万円分どっちがお得？</h2>
                <h3 class="c-tit03">メリット4. リース期間中ずっと、ガソリン代を最大7円/L引き</h3>
                <p class="c-txt">apollostation/出光で契約し給油値引を選択した場合、リース期間中<span class="bold txt-large">ガソリン代が最大7円/L値引き</span>（月100ℓまで）になります。給油値引きを選択しない場合は、２万円分の商品券を選択することもできます。</p>
                <p class="c-txt">シェルで契約した場合は２万円の商品券がもらえます。(給油値引きはなし)</p>
                <p class="c-txt">※apollostation card（クレジットカード）への入会が必要となります。</p>
                <p class="c-txt">※</p>


                <div class="flame-box point">
                  <div class="flame-box-tit point">POINT</div>
                  <ul class="ulBasic01 type01 bold">
                    <li>単年契約や長期契約（７年以上）ができない</li>
                    <li>輸入車のリースがない</li>
                    <li>中途解約に解約金が発生する</li>
                    <li>中古リースがない</li>
                    <li>車のカスタム、改造ができない</li>
                  </ul>
                </div>
              </div>
 -->
              <div class="c-box" id="index5">
                <h2 class="c-tit02">まとめ</h2>
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

         <aside>
          <div class="l-aside-outer">
            <?php get_template_part('inc/aside'); ?>
            <?php get_template_part('inc/local-aside'); ?>

          </div>
         </aside>

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