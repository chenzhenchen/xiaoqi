<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>小七</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    @section('styles')
        <link rel="stylesheet" type="text/css" href="{{asset('css/home/home_page/public.css')}}?v={{time()}}">
    @show
</head>
<body id="ver-tc" style="min-height: 888px;">
    @section('header')
        <header>
            <div class="container">
                <div class="d-table">
                    <div class="d-cell">
                        <a href="javascript:void(0);" id="menu" class="menu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                    <div class="d-cell">
                        <a href="http://www.sldgroup.com/sc/index.php" class="logo"><img src=""></a>

                        <!--<div class="subscribe-box">
                        <form action="ir_alert.php">
                              <input type="text" value="Enter your email" onfocus="if (value =='Enter your email'){value =''}" onblur="if (value ==''){value='Enter your email'}" class="inputtxt" />
                              <input type="submit" value="subscribe" class="submit">
                              </form>
                        </div>-->
                    </div>
                    <div class="d-cell">
                        <div class="lang">
                            <a href="http://www.sldgroup.com/en/index.php" style="font-family:Arial, Helvetica, Verdana, sans-serif;">EN</a>
                            <a href="http://www.sldgroup.com/tc/index.php" style="font-family:Microsoft JhengHei, Microsoft YaHei, Arial, Helvetica, Verdana, sans-serif;">繁</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-box">
                <div class="nav-wrap" style="height: 828px;">
                    <div class="container">
                        <nav>
                            <ul class="nav-list">
                                <li class=""><a href="http://www.sldgroup.com/sc/about_intro.php#Introduction" class="java-a">关于我们</a>
                                    <div class="sub-nav">
                                        <dl class="about_intro_dl">
                                            <dd class="Introduction"><a href="http://www.sldgroup.com/sc/about_intro.php#Introduction">公司简介</a></dd>
                                            <dd class="Philosophy"><a href="http://www.sldgroup.com/sc/about_intro.php#Philosophy">设计理念</a></dd>
                                            <dd class="Brands"><a href="http://www.sldgroup.com/sc/about_intro.php#Brands">品牌</a>
                                                <!--<div class="sm-sub-nav">

                                                    <a href="about_intro.php" class="">SLA</a>
                                                    <a href="about_intro.php" class="">SLC</a>
                                                    <a href="about_intro.php" class="">SLD</a>
                                                    <a href="about_intro.php" class="">SLE</a>
                                                    <a href="about_intro.php" class="">SLH</a>
                                                    <a href="about_intro.php" class="">SLL</a>
                                                    <a href="about_intro.php" class="">SLW</a>
                                                    <a href="about_intro.php" class="">SLX</a>
                                                    <a href="about_intro.php" class="">SLY</a>
                                                    <a href="about_intro.php" class="">GangYuan</a>
                                                    <a href="about_intro.php" class="">EDL</a>
                                                </div>-->
                                            </dd>
                                            <dd class=""><a href="http://www.sldgroup.com/sc/about_board.php" class="java-a">管理团队</a></dd>
                                            <dd class=""><a href="http://www.sldgroup.com/sc/about_award.php" class="java-a">荣誉及奖项</a></dd>
                                            <!--<dd class=""><a href="about_milestones.php" class="java-a">发展历程</a></dd>-->
                                            <dd class=""><a href="http://www.sldgroup.com/sc/about_csr.php" class="java-a">企业责任</a></dd>


                                        </dl>
                                    </div>
                                </li>

                                <li class=""> <a href="http://www.sldgroup.com/sc/our_works.php" class="java-b">设计作品</a>
                                    <!--<li class=""><a href="our_overseas.php" class="java-a">我们的业务</a>-->
                                    <div class="sub-nav">
                                        <dl>
                                            <!--<dd class=""><a href="our_residential.php" class="java-a">室内设计</a></dd>
                                            <dd class=""><a href="our_interior.php">室内陈设</a></dd>

                                            <dd class=""><a href="our_product.php" class="java-a">产品设计</a></dd>-->
                                        </dl>
                                    </div>
                                </li>

                                <li class=""> <a href="http://www.sldgroup.com/sc/media_press.php" class="java-b">新闻与媒体</a>
                                    <!--<li class=""><a href="media_press.php" class="java-a">新闻与媒体</a>-->
                                    <div class="sub-nav">
                                        <dl>
                                            <!--<dd class=""><a href="media_press.php">新闻稿</a></dd>-->
                                            <!--<dd class=""><a href="media.php">媒体报道</a></dd>-->
                                        </dl>
                                    </div>
                                </li>
                                <li class=""><a href="http://www.sldgroup.com/sc/ir_ann.php" class="java-a">投资者关系</a>
                                    <div class="sub-nav sub-min">
                                        <dl>
                                            <!-- <dd class=""><a href="ir_overview.php">Overview</a></dd>
                                            <dd class=""><a href="ir_stock.php">Stock Information</a></dd> -->
                                            <dd class=""><a href="http://www.sldgroup.com/sc/ir_fina.php">财务报告</a></dd>
                                            <dd class=""><a href="http://www.sldgroup.com/sc/ir_ann.php">公告与通函</a></dd>
                                            <dd class=""><a href="http://www.sldgroup.com/sc/ir_prospectus.php">招股书</a></dd>
                                            <dd class=""><a href="http://www.sldgroup.com/sc/ir_info.php">公司信息</a></dd>

                                            <!-- <dd class=""><a href="ir_news.php">Investors News & Events</a></dd> -->

                                            <dd class=""><a href="http://www.sldgroup.com/sc/ir_gov.php">企业管治</a></dd>

                                            <!-- <dd class=""><a href="ir_fact.php">Fact Sheet</a></dd> -->
                                            <dd class=""><a href="http://www.sldgroup.com/sc/ir_alert.php">电邮通知</a></dd>
                                            <dd class=""><a href="http://www.sldgroup.com/sc/ir_contact.php">投资者关系联络</a></dd>

                                        </dl>
                                    </div>
                                </li>


                                <!--<li class=""><a href="career.php" class="java-b">加入我们</a></li>-->
                                <li class=""><a href="http://www.sldgroup.com/sc/contact.php" class="java-b">联系我们</a>
                                    {{--<div class="sub-nav sub-bot">--}}
                                        {{--<dl>--}}
                                            {{--<dd class=""><a href="contact_hk.php">Hong Kong Headquarter </a></dd>--}}
                                            {{--<dd class=""><a href="contact_bj.php">Beijing Office</a></dd>--}}
                                            {{--<dd class=""><a href="contact_sh.php">Shanghai Office</a></dd>--}}
                                            {{--<dd class=""><a href="contact_gz.php">Guangzhou Office</a></dd>--}}
                                            {{--<dd class=""><a href="contact_cd.php">Chengdu Office</a></dd>--}}
                                            {{--<dd class=""><a href="contact_sz.php">Shenzhen Office</a></dd>--}}
                                        {{--</dl>--}}
                                    {{--</div>--}}
                                </li>

                                {{-- 分享地址 --}}
                                {{--<li class="nav-logi-only">--}}
                                    {{--<a href="http://www.steveleung.com/___Wechat.html" target="block"><!-- <img src="../images/wx.svg" /> --><i class="fa fa-weixin fa-color" aria-hidden="true"></i></a>--}}
                                    {{--<a href="http://www.weibo.com/steveleung1957" target="block"><!-- <img src="../images/wb.svg" /> --><i class="fa fa-weibo fa-color" aria-hidden="true"></i></a>--}}
                                    {{--<a href="http://www.facebook.com/SteveLeungDesigners" target="block"><!-- <img src="../images/face.svg" /> --><i class="fa fa-facebook fa-color" aria-hidden="true"></i></a>--}}
                                    {{--<a href="http://www.linkedin.com/company/2332473?trk=tyah&amp;trkInfo=tarId:1434539756055,tas:steve%20leung%20,idx:1-1-" target="block"><!-- <img src="../images/in.svg" /> --><i class="fa fa-linkedin fa-color" aria-hidden="true"></i></a>--}}
                                    {{--<a href="http://www.instagram.com/steveleungdesigners/" target="block"><!-- <img src="../images/tv.png" /> --><i class="fa fa-instagram fa-color" aria-hidden="true"></i></a>--}}
                                    {{--<a href="https://www.pinterest.com/sld1957/" target="block"><!-- <img src="../images/bk.png" /> --><i class="fa fa-pinterest-p fa-color" aria-hidden="true"></i></a>--}}
                                {{--</li>--}}

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    @show

    @section('contents')

    @show

    @section('footer')
        <footer class="fiexd">
            <div class="">
                {{--<p class="con-link">--}}

                    {{--<a href="http://www.steveleung.com/___Wechat.html" target="_blank"><!-- <img src="../images/wx.svg" /> --><i class="fa fa-weixin fa-color" aria-hidden="true"></i></a>--}}
                    {{--<a href="http://www.weibo.com/steveleung1957" target="_blank"><!-- <img src="../images/wb.svg" /> --><i class="fa fa-weibo fa-color" aria-hidden="true"></i></a>--}}
                    {{--<a href="http://www.facebook.com/SteveLeungDesigners" target="_blank"><!-- <img src="../images/face.svg" /> --><i class="fa fa-facebook fa-color" aria-hidden="true"></i></a>--}}
                    {{--<a href="http://www.linkedin.com/company/2332473?trk=tyah&amp;trkInfo=tarId:1434539756055,tas:steve%20leung%20,idx:1-1-" target="_blank"><!-- <img src="../images/in.svg" /> --><i class="fa fa-linkedin fa-color" aria-hidden="true"></i></a>--}}
                    {{--<a href="http://www.instagram.com/steveleungdesigners/" target="_blank"><!-- <img src="../images/tv.png" /> --><i class="fa fa-instagram fa-color" aria-hidden="true"></i></a>--}}
                    {{--<a href="https://www.pinterest.com/sld1957/" target="_blank"><!-- <img src="../images/bk.png" /> --><i class="fa fa-pinterest-p fa-color" aria-hidden="true"></i></a>--}}
                {{--</p>--}}
                <p class="copy">
                    <span>©  <script type="text/javascript">var date = new Date();document.write(date.getFullYear());</script>2019 梁志天设计集团有限公司 版权所有</span>
                    <span class="su">|</span>
                    <span><a href="http://www.sldgroup.com/sc/disclaimer.php">声明及政策</a></span>
                </p>
            </div>
        </footer>
    @show
</body>
@section('scripts')
    <script type="text/javascript" src="{{asset('js/jquery-2.2.1.min.js')}}?v={{time()}}"></script>
@show
</html>