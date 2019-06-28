@extends('home.layout.layout')

@section('title')
    <title>小七666</title>
@endsection

@section('styles')
    @parent
    <style type="text/css">
        footer{
            position: relative!important;
            bottom: auto;
        }
    </style>
@endsection

@section('contents')
    <div id="banner" style="height: 888px;">
        <ul class="banner-list">
            <li style="display: none;"><a href="" class="ban-btn"></a></li>
            <li style="display: none;"></li>
            <li style="display: list-item;"></li>
            <li style="display: none;"></li>
            <li style="display: none;"></li>
        </ul>


        <ul class="num">
            <li class=""></li>
            <li class=""></li>
            <li class="active"></li>
            <li class=""></li>
            <li class=""></li>
        </ul>
    </div>
    <div id="index-content">
        <div class="index-ir">

            <ul class="ind-ir-media clearfix">
                <li>
                    <h2><a href="{{route('home.index.about')}}">关于我们</a></h2>
                    <p><a href="{{route('home.index.about')}}">梁志天设计集团是屡获殊荣的国际知名室内设计服务及室内陈设服务供应商，总部设于香港...</a></p>
                    <!--<span>20.7.2017</span>-->
                </li>
                <li>
                    <h2><a href="http://www.sldgroup.com/sc/our_works.php">设计作品</a></h2>
                    <p><a href="http://www.sldgroup.com/sc/our_works.php">我们的代表及获奖作品包括：位于迪拜的亚特兰蒂斯棕榈酒店的元餐厅、新加坡的卓锦豪庭...</a></p>
                    <!--<b class="fina-a"><a href="#">2016年度报告</a></b>
                    <b class="fina-a"><a href="#">2016中期报告</a></b>-->
                </li>
                <li>
                    <h2><a href="http://www.sldgroup.com/sc/media_press.php">新闻与媒体</a></h2>
                    <p><a href="http://www.sldgroup.com/sc/media_press.php">梁志天设计集团有限公司于香港联交所主板挂牌上市</a></p>
                    <!--<div id="stockFrame">
                        <script type="text/javascript">
                        $(function(){
                          new easyXDM.Socket({
                                      remote: "ir-stock-iframe.php",
                                      swf: 'easyxdm.swf',
                                      container: 'stockFrame',
                                      onMessage: function(message, origin) {
                                        this.container.getElementsByTagName('iframe')[0].style.height = message + 'px';
                                        this.container.getElementsByTagName('iframe')[0].scrolling = 'no';
                                        this.container.getElementsByTagName("iframe")[0].style.width ="100%";
                                      }
                                    });
                        });
                        </script>
                      </div>-->
                </li>
            </ul>
        </div>
    </div>
@endsection

@section('scripts')
    @parent
    {{--<script type="text/javascript" src="{{asset('js/home/home_page/piwik.js')}}?v={{time()}}"></script>--}}
    <script type="text/javascript" src="{{asset('js/home/home_page/easyXDM-2.4.19.3.min.js')}}?v={{time()}}"></script>
    <script type="text/javascript" src="{{asset('js/home/home_page/public.js')}}?v={{time()}}"></script>
    <script type="text/javascript" src="{{asset('js/home/home_page/slick.min.js')}}?v={{time()}}"></script>
    <script type="text/javascript" src="{{asset('js/home/home_page/chosen.jquery.js')}}?v={{time()}}"></script>
    <script type="text/javascript" src="{{asset('js/home/home_page/init.js')}}?v={{time()}}"></script>

    {{--<script>--}}
        {{--function MM_jumpMenu(targ,selObj,restore){ //v3.0--}}
            {{--eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");--}}
            {{--if (restore) selObj.selectedIndex=0;--}}
        {{--}--}}
        {{--var _paq = _paq || [];--}}
        {{--/* tracker methods like "setCustomDimension" should be called before "trackPageView" */--}}
        {{--_paq.push(['trackPageView']);--}}
        {{--_paq.push(['enableLinkTracking']);--}}
        {{--(function() {--}}
            {{--var u="//analytics.guruir.com/";--}}
            {{--_paq.push(['setTrackerUrl', u+'piwik.php']);--}}
            {{--_paq.push(['setSiteId', '344']);--}}
            {{--var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];--}}
            {{--g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);--}}
        {{--})();--}}
    {{--</script>--}}
@endsection