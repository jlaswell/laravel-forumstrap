<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Company Forum</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="{{ URL::asset( 'css/bootstrap.min.css' ) }}">
        <style>
        .breakable {
            width: auto;
            word-wrap: break-word;
        }
        .boardInfo {
            padding-top: 0.24em;
        }
        .sectionRow {
            margin: 1em 0em;
            padding-top: 1em;
        }
        .sectionContentTable {
            padding: 0em 1em;
        }
        .sectionContentTableImage {
            margin: 12px;
        }
        .mediaContent:hover {
            height: auto;
            overflow: visible;
        }
        .fauxImg64 {
            margin: 0;
            padding: 0;
            background-color: #ddd;
            border: 1px solid #aaa;
        }
        .table td:not(:first-child), .table th:not(:first-child) {
            text-align: center;
        }
        </style>
        <link rel="stylesheet" href="{{ URL::asset( 'css/bootstrap-responsive.min.css' ) }}">
        <link rel="stylesheet" href="{{ URL::asset( 'css/main.css' ) }}">

        <script src="{{ URL::asset( 'js/vendor/modernizr-2.6.2-respond-1.1.0.min.js' ) }}"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Company</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#about">About</a></li>
                        </ul>
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> username <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Profile</a></li>
                                    <li><a href="#">Inbox</a></li>
                                    <li><a href="#">Subscriptions</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="navbar-form pull-right form-search">
                            <div class="input-append">
                                <input class="span2 search-query" type="text" placeholder="Seach">
                                <button type="submit" class="btn"><span class="icon-search"></span></button>
                            </div>
                        </form>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row" id="actionWrapper">
                <div class="span3 actionPanel">
                    <div id="userActions" class="well well-small">
                        <p class="breakable">
                            <i class="icon-user"></i>
                            username
                            <br>
                            <a class="link" href="#"><small>View Profile</small></a>
                        </p>
                        <p>This is some extra text that is filling in for a future user action panel.</p>
                    </div>
                    <div id="boardActions" class="well well-small">
                        <h4><i style="vertical-align:0;" class="icon-globe"></i> Global Activites</h4>
                        <hr>
                        <ul class="unstyled">
                            <li><h5>Trends</h5></li>
                            <li><a href="#">3.0.2</a></li>
                            <li><a href="#">adminModule</a></li>
                            <li><a href="#">wiki</a></li>
                        </ul>
                        <hr>
                        <ul class="unstyled">
                            <li><h5>Latest Announcements</h5></li>
                            <li><a href="#">3.1 Release Date</a></li>
                        </ul>
                        <hr>
                        <ul class="unstyled">
                            <li><h5>Benchmarks</h5></li>
                            <li><span>Guests: </span><a href="#">124</a></li>
                            <li><span>Active Users: </span><a href="#">323</a></li>
                            <li><span>Registered Users: </span><a href="#">12,034</a></li>
                            <li><span>Total Topics: </span><a href="#">12,034</a></li>
                            <li><span>Total Posts: </span><a href="#">12,034</a></li>
                        </ul>
                    </div>
                </div>
                <div class="span9">
                    <!-- Main hero unit for a primary marketing message or call to action -->
                    <div id="annoucements" class="hero-unit">
                        <h2>Annoucements</h2>
                    </div>
                    <div id="boardContainer" class="well well-small clearfix">
                        <div class="row-fluid boardDetails" data-toggle="collapse" data-target="#boardContent">
                            <div class="span6">
                                <h3>Expandable Board Title<span class="text-info" id="board1Tooltip" data-toggle="tooltip" title="This board is collapsed by default. Click anywhere along this title to expand/collapse." style="cursor:pointer">*</span></h3>
                            </div>
                            <p class="span2 boardInfo text-center">Topics<br><small>4 New</small></p>
                            <p class="span2 boardInfo text-center">Posts<br><small>24 New</small></p>
                            <p class="span2 boardInfo text-center">Mentions<br><small>3 New</small></p>
                        </div>
                        <div class="row-fluid collapse" id="boardContent">
                            <hr>
                                <ul class="media-list">
                                    <div class="row-fluid sectionRow">
                                        <li class="media span6">
                                            <a class="pull-left lead" href="#">
                                                <img class="media-object" src="{{ URL::asset( 'img/64x64.png' ) }}">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">Section Title</h4>
                                                <span class="mediaContent">Content related to the description of this section. You can say all sorts of things in this section to describe what all can be talked about here.</span>
                                                <small class="clearfix">Moderators: <a href="#">jlaswell</a>, <a href="#">Admin</a></small>
                                            </div>
                                        </li>
                                        <div class="span2 text-center">
                                            <span>55<br><small><a href="#">2 New</a></small></span>
                                        </div>
                                        <div class="span2 text-center">
                                            <span>865<br><small><a href="#">8 New</a></small></span>
                                        </div>
                                        <div class="span2 text-center">
                                            <span>86<br><small><a href="#">1 New</a></small></span>
                                        </div>
                                    </div>  
                                    <div class="row-fluid sectionRow">
                                        <li class="media span6">
                                            <a class="pull-left lead" href="#">
                                                <img class="media-object" src="{{ URL::asset( 'img/64x64.png' ) }}">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">Section Title</h4>
                                                <span class="mediaContent">Content related to the description of this section. You can say all sorts of things in this section to describe what all can be talked about here.</span>
                                                <small class="clearfix">Moderators: <a href="#">jlaswell</a>, <a href="#">Admin</a></small>
                                            </div>
                                        </li>
                                        <div class="span2 text-center">
                                            <span>55<br><small><a href="#">2 New</a></small></span>
                                        </div>
                                        <div class="span2 text-center">
                                            <span>865<br><small><a href="#">8 New</a></small></span>
                                        </div>
                                        <div class="span2 text-center">
                                            <span>86<br><small><a href="#">1 New</a></small></span>
                                        </div>
                                    </div>
                                    <div class="row-fluid sectionRow">
                                        <li class="media span6">
                                            <a class="pull-left lead" href="#">
                                                <img class="media-object" src="{{ URL::asset( 'img/64x64.png' ) }}">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">Section Title</h4>
                                                <span class="mediaContent">Content related to the description of this section. You can say all sorts of things in this section to describe what all can be talked about here.</span>
                                                <small class="clearfix">Moderators: <a href="#">jlaswell</a>, <a href="#">Admin</a></small>
                                            </div>
                                        </li>
                                        <div class="span2 text-center">
                                            <span>55<br><small><a href="#"></a></small></span>
                                        </div>
                                        <div class="span2 text-center">
                                            <span>865<br><small><a href="#">8 New</a></small></span>
                                        </div>
                                        <div class="span2 text-center">
                                            <span>86<br><small><a href="#">1 New</a></small></span>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                        </div>

                    <div id="board2Container" class="well well-small clearfix">
                        <div class="row-fluid boardDetails" data-toggle="collapse" data-target="#board2Content">
                            <div class="span6">
                                <h3>Collapsible Board Title<span class="text-info" id="board2Tooltip" data-toggle="tooltip" title="This board is expanded by default. Click anywhere along this title to expand/collapse." style="cursor:pointer">*</span></h3>
                            </div>
                            <p class="span2 boardInfo text-center">Topics<br><small>4 New</small></p>
                            <p class="span2 boardInfo text-center">Posts<br><small>24 New</small></p>
                            <p class="span2 boardInfo text-center">Mentions<br><small>3 New</small></p>
                        </div>
                        <div class="row-fluid collapse in" id="board2Content">
                            <hr>
                                <ul class="media-list">
                                    <div class="row-fluid sectionRow">
                                        <li class="media span6">
                                            <a class="pull-left lead" href="#">
                                                <img class="media-object" src="{{ URL::asset( 'img/64x64.png' ) }}">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">Section Title</h4>
                                                <span class="mediaContent">Content related to the description of this section. You can say all sorts of things in this section to describe what all can be talked about here.</span>
                                                <small class="clearfix">Moderators: <a href="#">jlaswell</a>, <a href="#">Admin</a></small>
                                            </div>
                                        </li>
                                        <div class="span2 text-center">
                                            <span>55<br><small><a href="#">2 New</a></small></span>
                                        </div>
                                        <div class="span2 text-center">
                                            <span>865<br><small><a href="#">8 New</a></small></span>
                                        </div>
                                        <div class="span2 text-center">
                                            <span>86<br><small><a href="#">1 New</a></small></span>
                                        </div>
                                    </div>  
                                    <div class="row-fluid sectionRow">
                                        <li class="media span6">
                                            <a class="pull-left lead" href="#">
                                                <img class="media-object" src="{{ URL::asset( 'img/64x64.png' ) }}">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">Section Title</h4>
                                                <span class="mediaContent">Content related to the description of this section. You can say all sorts of things in this section to describe what all can be talked about here.</span>
                                                <small class="clearfix">Moderators: <a href="#">jlaswell</a>, <a href="#">Admin</a></small>
                                            </div>
                                        </li>
                                        <div class="span2 text-center">
                                            <span>55<br><small><a href="#">2 New</a></small></span>
                                        </div>
                                        <div class="span2 text-center">
                                            <span>865<br><small><a href="#">8 New</a></small></span>
                                        </div>
                                        <div class="span2 text-center">
                                            <span>86<br><small><a href="#">1 New</a></small></span>
                                        </div>
                                    </div>
                                    <div class="row-fluid sectionRow">
                                        <li class="media span6">
                                            <a class="pull-left lead" href="#">
                                                <img class="media-object" src="{{ URL::asset( 'img/64x64.png' ) }}">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">Section Title</h4>
                                                <span class="mediaContent">Content related to the description of this section. You can say all sorts of things in this section to describe what all can be talked about here.</span>
                                                <small class="clearfix">Moderators: <a href="#">jlaswell</a>, <a href="#">Admin</a></small>
                                            </div>
                                        </li>
                                        <div class="span2 text-center">
                                            <span>55<br><small><a href="#"></a></small></span>
                                        </div>
                                        <div class="span2 text-center">
                                            <span>865<br><small><a href="#">8 New</a></small></span>
                                        </div>
                                        <div class="span2 text-center">
                                            <span>86<br><small><a href="#">1 New</a></small></span>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                        </div>

                    <div id="boardContainerTable">
                        <table class="table">
                            <caption><!-- This is a table caption. --></caption>
                            <thead data-toggle="collapse" data-target="#board3Content" id="board3Header">
                                <th class="span8"><h3>Static Board Title</h3></th>
                                <th>Topics<br>4 New</th>
                                <th>Posts<br>24 New</th>
                                <th>Mentions<br>3 New</th>
                            </thead>
                            <tbody class="collapse in" id="board3Content">
                                <tr>
                                    <td class="span8">
                                        <img class="pull-left sectionContentTableImage" src="{{ URL::asset( 'img/64x64.png' ) }}">
                                        <div class="sectionContentTable">
                                            <h4>Section Title</h4>
                                            <span>Content related to the description of this section. You can say all sorts of things in this section to describe what all can be talked about here.</span>
                                            <small class="clearfix">Moderators: <a href="#">jlaswell</a>, <a href="#">Admin</a></small>
                                        </div>
                                    </td>
                                    <td>
                                        Topics<br><small>4 New</small>
                                    </td>
                                    <td>
                                        Posts<br><small>24 New</small></p>
                                    </td>
                                    <td>
                                        Mentions<br><small>3 New</small></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="span8">
                                        <img class="pull-left sectionContentTableImage" src="{{ URL::asset( 'img/64x64.png' ) }}">
                                        <div class="sectionContentTable">
                                            <h4>Section Title</h4>
                                            <span>Content related to the description of this section. You can say all sorts of things in this section to describe what all can be talked about here.</span>
                                            <small class="clearfix">Moderators: <a href="#">jlaswell</a>, <a href="#">Admin</a></small>
                                        </div>
                                    </td>
                                    <td>
                                        Topics<br><small>4 New</small>
                                    </td>
                                    <td>
                                        Posts<br><small>24 New</small></p>
                                    </td>
                                    <td>
                                        Mentions<br><small>3 New</small></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="span8">
                                        <img class="pull-left sectionContentTableImage" src="{{ URL::asset( 'img/64x64.png' ) }}">
                                        <div class="sectionContentTable">
                                            <h4>Section Title</h4>
                                            <span>Content related to the description of this section. You can say all sorts of things in this section to describe what all can be talked about here.</span>
                                            <small class="clearfix">Moderators: <a href="#">jlaswell</a>, <a href="#">Admin</a></small>
                                        </div>
                                    </td>
                                    <td>
                                        Topics<br><small>4 New</small>
                                    </td>
                                    <td>
                                        Posts<br><small>24 New</small></p>
                                    </td>
                                    <td>
                                        Mentions<br><small>3 New</small></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- /container -->
        <div class="container">
            <hr>
            <footer>
                <p>&copy; Company 2013</p>
            </footer>
        </div> 

        <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
        <script>window.jQuery || document.write('<script src="{{ URL::asset( 'js/vendor/jquery-1.9.1.min.js' ) }}"><\/script>')</script>

        <script src="{{ URL::asset( 'js/vendor/bootstrap.min.js' ) }}"></script>

        <script src="{{ URL::asset( 'js/main.js' ) }}"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
