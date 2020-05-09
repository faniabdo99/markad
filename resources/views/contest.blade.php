@include('layout.header')

<body>
    @include('layout.navbar')
    <section class="hero three-quarter-width">
        <div class="hero-content">
            <div class="container-fluid">
                <div class="row" dir="{{__('LandingPage.dir')}}">
                    <div class="col-md-12 col-xs-12 col-sm-12 text-center">
                        <h1>مسابقة Markad Racing الأسبوعية</h1>
                        <p>جاهزون للتحدي ؟ </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <section class="contest-content @lang('LandingPage.textClass')" dir="@lang('LandingPage.dir')">
            <h2>أهلاً بكم في مسابقة Markad Racing الأسبوعية !</h2>
            <p>أعزائنا المتسابقين , مستعدون للتحدي ؟ تمتع باللعب على هاتفك المحمول و استقبل جوائز في العالم الحقيقي !
                <br>
                حان الوقت الآن لإثبات بطولتك في الميدان , يمكنك الفوز بجوائز في العالم الحقيقي ومشاركتها مع أصدقائك و اثبات مهارتك و بطولتك , و ذلك فقط عبر لعب Markad Racing من هاتفك المحمول , هل أنت الأسرع ؟ لتبدأ المسابقة !
              </p>
              <h2>شروط المسابقة</h2>
              <p>قم بتنزيل لعبة Markad Racing على هاتفك المحمول , اللعبة متوفرة للأندرويد و ال IOS .</p>
              <a class="btn bg-brand" href="https://play.google.com/store/apps/details?id=com.markadracing.camel" target="_blank" class="download-btn">للأندرويد</a>
              <a class="btn bg-brand" href="https://apps.apple.com/us/app/%D8%B3%D8%A8%D8%A7%D9%82-%D8%A7%D9%84%D9%87%D8%AC%D9%86-2020/id1489191603?ls=1" target="_blank" class="download-btn">آيفون / آيباد</a>
              <ul class="mt-4">
                <li>يفضل أن تكون مسجلاً باللعبة على أن تكون زائراً</li>
                <li>كتابة بريدك الإلكتروني في اللعبة بشكل صحيح </li>
              </ul>
              <p>سيحصل أفضل 3 لاعبين على جوائز مميزة بالإضافة الى مبالغ نقدية</p>
              <h2 class="mb-5">جوائز المسابقة</h2>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-4 col-xs-12 col-sm-6">
                    <div class="prize-card">
                      <div class="prize-card-image">
                        <img class="w-100" height="400" src="{{url('public/images/contest')}}/sword-image.jpg" alt="Trophy">
                      </div>
                      <div class="prize-card-content @lang('LandingPage.textClass')" dir="@lang('LandingPage.dir')">
                        <div class="prize-card-icon pt-4">
                          <img class="d-block m-auto" width="40" height="40" src="{{url('public/images/contest')}}/sword-icon.png" alt="Trophy">
                        </div>
                        <h2>السيف العربي الأصيل</h2>
                        <p>السيف العربي دليل القوة , هذه الجائزة بالإضافة الى مبلغ نقدي ستصلك في العالم الحقيقي لتكون الدليل الدامغ على تفوقك في سباق الهجن !</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-xs-12 col-sm-6">
                    <div class="prize-card">
                      <div class="prize-card-image">
                        <img class="w-100" height="400" src="{{url('public/images/contest')}}/gun-image.jpg" alt="Trophy">
                      </div>
                      <div class="prize-card-content @lang('LandingPage.textClass')" dir="@lang('LandingPage.dir')">
                        <div class="prize-card-icon pt-4">
                          <img class="d-block m-auto" width="40" height="40" src="{{url('public/images/contest')}}/gun-icon.png" alt="Trophy">
                        </div>
                        <h2>بندقية</h2>
                        <p>إضافة الى مبلغ نقدي ستحصل على هذه البندقية الرائعة ! لن يستطيع أحد التشكيك في بطولتك بعد الآن ! , هل يمكنك اثبات أنك جدير بهذه البندقية ؟</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-xs-12 col-sm-6">
                    <div class="prize-card">
                      <div class="prize-card-image">
                        <img class="w-100" height="400" src="{{url('public/images/contest')}}/trophy-image.png" alt="Trophy">
                      </div>
                      <div class="prize-card-content @lang('LandingPage.textClass')" dir="@lang('LandingPage.dir')">
                        <div class="prize-card-icon pt-4">
                          <img class="d-block m-auto" width="40" height="40" src="{{url('public/images/contest')}}/trophy-icon.png" alt="Trophy">
                        </div>
                        <h2>كأس التفوق</h2>
                        <p>الكأس هو الجائزة الأهم حول العالم , هي الدليل القاطع على التفوق , تفوق على اللاعبين في لعبة سباق الهجن لتحصل على هذه الجائزة بالإضافة الى مبلغ نقدي</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h2 class="mt-4">كيفية المشاركة</h2>
              <p>قم أولاً بتنزيل لعبة Markad Racing على هاتفك المحمول من متجر Google Play أو App Store</p>
              <p>قم بانشاء حساب جديد كما في الصورة , يمكنك الضغط على فيس بوك لانشاء حساب سريع باستخدام حسابك على موقع فيسبوك , تأكد من كتابة بريدك الإلكتروني بشكل صحيح لنستطيع التواصل معك !</p>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6 col-xs-12 col-sm-12">
                    <img src="{{url('public/images/contest')}}/signup-1.jfif" class="w-100" alt="Signup 1">
                  </div>
                  <div class="col-md-6 col-xs-12 col-sm-12">
                    <img src="{{url('public/images/contest')}}/signup-2.jfif" class="w-100" alt="Signup 1">
                  </div>
                </div>
              </div>
              <h2 class="mt-4 mb-4">النتائج الحالية</h2>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6 col-xs-12 col-sm-12">
                    <div class="resultes-board">
                      <p class="board-heading">الترتيب على مستوى الامارات العربية المتحدة</p>
                      <div class="resultes-list">
                        <ul>
                          <li class="single-resulte-item">
                            <p class="icon">
                              <img src="{{url('public/images/contest')}}/sword-icon.png" alt="Trophy">
                            </p>
                            <p class="player-name">Saeed</p>
                            <p class="points">153/156</p>
                          </li>
                          <li class="single-resulte-item">
                            <p class="icon">
                              <img src="{{url('public/images/contest')}}/gun-icon.png" alt="Trophy">
                            </p>
                            <p class="player-name">guest4889</p>
                            <p class="points">36/50</p>
                          </li>
                          <li class="single-resulte-item">
                            <p class="icon">
                              <img src="{{url('public/images/contest')}}/trophy-icon.png" alt="Trophy">

                            </p>
                            <p class="player-name">guest2213</p>
                            <p class="points">31/25</p>
                          </li>
                          <li class="single-resulte-item">
                            <p class="icon">
                              <b>#4</b>
                            </p>
                            <p class="player-name">guest8931</p>
                            <p class="points">29/79</p>
                          </li>
                          <li class="single-resulte-item">
                            <p class="icon">
                              <b>#5</b>
                            </p>
                            <p class="player-name">guest0117</p>
                            <p class="points">26/49</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-xs-12 col-sm-12">
                    <div class="resultes-board">
                      <p class="board-heading">الترتيب على مستوى العالم</p>
                      <div class="resultes-list">
                        <ul>
                          <li class="single-resulte-item">
                            <p class="icon">
                              <img src="{{url('public/images/contest')}}/sword-icon.png" alt="Trophy">
                            </p>
                            <p class="player-name">Hadi Almari</p>
                            <p class="points">197/126</p>
                          </li>
                          <li class="single-resulte-item">
                            <p class="icon">
                              <img src="{{url('public/images/contest')}}/gun-icon.png" alt="Trophy">
                            </p>
                            <p class="player-name">Saeed</p>
                            <p class="points">159/156</p>
                          </li>
                          <li class="single-resulte-item">
                            <p class="icon">
                              <img src="{{url('public/images/contest')}}/trophy-icon.png" alt="Trophy">

                            </p>
                            <p class="player-name">Jazeb</p>
                            <p class="points">61/25</p>
                          </li>
                          <li class="single-resulte-item">
                            <p class="icon">
                              <b>#4</b>
                            </p>
                            <p class="player-name">Tayyab</p>
                            <p class="points">45/4</p>
                          </li>
                          <li class="single-resulte-item">
                            <p class="icon">
                              <b>#5</b>
                            </p>
                            <p class="player-name">guest4889</p>
                            <p class="points">36/50</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </section>

    </div>
</body>
@include('layout.footer')
@include('layout.scripts')
