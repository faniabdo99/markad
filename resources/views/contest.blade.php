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
                <li>كتابة بريدك الإلكتروني في اللعبة بشكل صحيح. وذلك للتواصل معك في حالة الفوز</li>
            </ul>
            <img src="{{url('public/images/contest')}}/gameplay-levels.jfif" class="w-100 d-block mb-4">
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
                                <ul id="local-leaderboard"></ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12">
                        <div class="resultes-board">
                            <p class="board-heading">الترتيب على مستوى العالم</p>
                            <div class="resultes-list">
                                <ul id="global-leaderboard"></ul>
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
