@extends('home.layout.layout')

@section('title')
    <title>设计及项目团队</title>
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
    <div id="page-banner">
        <p><a href="{{route('home.index.index')}}">Home</a><span class="gt"></span><a href="{{route('home.index.about')}}">关于我们</a><span class="gt"></span><b>管理团队</b></p>
        <h1>管理团队</h1>
    </div>


    <div class="page-people-tit page-content LEADERSHIP">

        <input type="checkbox" name="toggle" id="toggle">
        <label class="work-btn-label" for="toggle"><span>董事会</span><b></b></label>
        <div class="work-btn-group">
            <ul class="work-btn">
                <li><a href="{{route('home.index.board')}}">董事会</a></li>
                <li><a href="{{route('home.index.leader')}}">高级管理层</a></li>
                <li class="active"><a href="{{route('home.index.designer')}}">设计及项目团队</a></li>
            </ul>
        </div>
        <!--<select class="chosen-select-gohref">
          <option value="about_board.php" selected >BOARD OF DIRECTORS</option>
          <option value="about_senior.php" >SENIOR MANAGEMENT</option>
          <option value="about_design.php" >DESIGN AND PROJECT TEAM</option>
        </select>-->

        <div class="design-main LEADERSHIP-main">

            <div class="design-box">
                <ul class="clearfix design-load-more">
                    <li class="load-show-li show">
                        <a href="http://www.sldgroup.com/sc/about_lead_detail1_1.php">
                            <dl>
                                <dt>
                                    <img src="./梁志天设计集团_files/board_xingli.jpg">
                                </dt>
                                <dd>
                                    <span>许兴利</span>
                                    <b>非执行董事兼董事会主席</b>
                                </dd>
                            </dl>
                        </a>
                    </li>
                    <li class="load-show-li show">
                        <a href="http://www.sldgroup.com/sc/about_lead_detail12_2.php">
                            <dl>
                                <dt>
                                    <img src="./梁志天设计集团_files/board_kenny.jpg">
                                </dt>
                                <dd class="">
                                    <span>萧文熙</span>
                                    <b>执行董事兼首席执行官</b>
                                </dd>
                            </dl>
                        </a>
                    </li>
                    <li class="load-show-li show">
                        <a href="http://www.sldgroup.com/sc/about_lead_detail12_3.php">
                            <dl>
                                <dt>
                                    <img src="./梁志天设计集团_files/board_kevin.jpg">
                                </dt>
                                <dd class="">
                                    <span>叶玨鸿</span>
                                    <b>执行董事兼首席财务官</b>
                                </dd>
                            </dl>
                        </a>
                    </li>
                    <li class="load-show-li show">
                        <a href="http://www.sldgroup.com/sc/about_lead_detail1_4.php">
                            <dl>
                                <dt>
                                    <img src="./梁志天设计集团_files/board_chunya.jpg">
                                </dt>
                                <dd>
                                    <span>丁春亚</span>
                                    <b>执行董事</b>
                                </dd>
                            </dl>
                        </a>
                    </li>
                    <li class="load-show-li show">
                        <a href="http://www.sldgroup.com/sc/about_lead_detail1_5.php">
                            <dl>
                                <dt>
                                    <img src="./梁志天设计集团_files/board_galaxie.jpg">
                                </dt>
                                <dd class="">
                                    <span>裘慧芬</span>
                                    <b>执行董事兼行政总监</b>
                                </dd>
                            </dl>
                        </a>
                    </li>

                    <li class="load-show-li show">
                        <a href="http://www.sldgroup.com/sc/about_lead_detail1_6.php">
                            <dl>
                                <dt>
                                    <img src="./梁志天设计集团_files/board_jianhong.jpg">
                                </dt>
                                <dd class="">
                                    <span>黄剑虹</span>
                                    <b>非执行董事</b>
                                </dd>
                            </dl>
                        </a>
                    </li>

                    <li class="load-show-li">
                        <a href="http://www.sldgroup.com/sc/about_lead_detail1_7.php">
                            <dl>
                                <dt>
                                    <img src="./梁志天设计集团_files/board_yi.jpg">
                                </dt>
                                <dd>
                                    <span>刘珝</span>
                                    <b>独立非执行董事</b>
                                </dd>
                            </dl>
                        </a>
                    </li>

                    <li class="load-show-li">
                        <a href="http://www.sldgroup.com/sc/about_lead_detail1_8.php">
                            <dl>
                                <dt>
                                    <img src="./梁志天设计集团_files/board_engene.jpg">
                                </dt>
                                <dd>
                                    <span>曾浩嘉</span>
                                    <b>独立非执行董事</b>
                                </dd>
                            </dl>
                        </a>
                    </li>

                    <li class="load-show-li">
                        <a href="http://www.sldgroup.com/sc/about_lead_detail1_9.php">
                            <dl>
                                <dt>
                                    <img src="./梁志天设计集团_files/board_sheng.jpg">
                                </dt>
                                <dd>
                                    <span>孙延生</span>

                                    <b>独立非执行董事</b>
                                </dd>
                            </dl>

                        </a>
                    </li>

                </ul>
                <a href="javascript:void(0)" class="more1">更多</a>
            </div>

        </div>
    </div>
@endsection

@section('scripts')
    @parent
    <script type="text/javascript" src="{{asset('js/home/home_page/piwik.js')}}?v={{time()}}"></script>
    <script type="text/javascript" src="{{asset('js/home/home_page/easyXDM-2.4.19.3.min.js')}}?v={{time()}}"></script>
    <script type="text/javascript" src="{{asset('js/home/home_page/public.js')}}?v={{time()}}"></script>
    <script type="text/javascript" src="{{asset('js/home/home_page/slick.min.js')}}?v={{time()}}"></script>
    <script type="text/javascript" src="{{asset('js/home/home_page/chosen.jquery.js')}}?v={{time()}}"></script>
    <script type="text/javascript" src="{{asset('js/home/home_page/init.js')}}?v={{time()}}"></script>
@endsection