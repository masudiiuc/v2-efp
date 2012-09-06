<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/admin/style/style.css" />
    <link id='sfluid' class="sswitch" rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/admin/style/fluid.css" title="fluid" media="screen" />
    <link id='sfixed' class="sswitch" rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/admin/style/fixed.css" title="fluid" media="screen" />



    <title>Eco-Friendly Party&trade; | Administrative Panel</title>
    <script type="text/javascript" src="<?php echo base_url() ?>public/admin/js/jquery-1.6.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>public/admin/js/jquery-ui-1.8.14.custom.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url() ?>public/admin/js/excanvas.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>public/admin/js/jquery.flot.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>public/admin/js/jquery.flot.pie.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>public/admin/js/jquery.flot.stack.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url() ?>public/admin/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>public/admin/js/jquery.labelify.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>public/admin/js/iphone-style-checkboxes.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>public/admin/js/jquery.ui.selectmenu.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>public/admin/js/vanadium-min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>public/admin/js/jquery.cleditor.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>public/admin/js/superfish.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>public/admin/js/jquery.colorbox-min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>public/admin/js/jquery.tipsy.js"></script>

    <script type="text/javascript" src="<?php echo base_url() ?>public/admin/js/fullcalendar.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>public/admin/js/jquery.uploadify.v2.1.4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>public/admin/js/uploadify.js"></script>

    <script type="text/javascript" src="<?php echo base_url() ?>public/admin/js/gcal.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>public/admin/js/swfobject.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>public/admin/js/jquery.pnotify.min.html"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>public/admin/js/examples.js"></script>

    <script type="text/javascript" src="<?php echo base_url() ?>public/admin/js/sidemenu.js">// Strictly for sidebar </script>
    <script type="text/javascript" src="<?php echo base_url() ?>public/admin/js/styleswitch.js">//Chaning the Stylesheet</script>


    <script>
        $(function() {
            var availableTags = [
                "ActionScript",
                "AppleScript",
                "Asp",
                "BASIC",
                "C",
                "C++",
                "Clojure",
                "COBOL",
                "ColdFusion",
                "Erlang",
                "Fortran",
                "Groovy",
                "Haskell",
                "Java",
                "JavaScript",
                "Lisp",
                "Perl",
                "PHP",
                "Python",
                "Ruby",
                "Scala",
                "Scheme"
            ];
            $( "#tags" ).autocomplete({
                source: availableTags
            });
        });
    </script>


    <!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo base_url() ?>public/admin/js/html5.js"></script>
    <![endif]-->

    <!--[if IE 7]>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/admin/style/IE7.css" />
    <![endif]-->

</head>
<body>
<div id="wrap">
<div id="main">

<header>
    <div class="container_16 clearfix">
        <div class="clearfix">
            <a id="logo" href="home.html"></a>
            <input type="text" class="search" id="tags" title="Search..."/>
        </div>

        <nav>
            <div id="navcontainer" class="clearfix">
                <div id="user" class="clearfix">
                    <img src="<?php echo base_url(); ?>public/admin/images/avatar.png" alt="" />
                    <strong class="username">Welcome, <a href="#">Administrator</a></strong>
                    <ul class="piped">
                        <li><a href="#">My Account</a></li>
                        <li><a href="login.html">Logout</a></li>
                    </ul>
                </div>

                <div id="navclose"></div>

                <ul class="sf-menu">
                    <li class="active">
                        <a href="homec2d6.html?t=Dashboard">
                            <span class="icon"><img src="<?php echo base_url(); ?>public/admin/images/menu/dashboard.png" /></span>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="tablese8e1.html?t=tables">
                            <span class="icon"><img src="<?php echo base_url(); ?>public/admin/images/menu/tables.png" /></span>
                            <span class="title">Tables</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="forms7511.html?t=form+Elements">
                            <span class="icon"><img src="<?php echo base_url(); ?>public/admin/images/menu/form.png" /></span>
                            <span class="title">Form Elements</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><img src="<?php echo base_url(); ?>public/admin/images/menu/styles.png" /></span>
                            <span class="title">Styles</span>
                        </a>
                        <ul>
                            <li><a href="#" class="styleswitcher" rel="fluid">Fluid</a></li>
                            <li><a href="#" class="styleswitcher" rel="fixed">Fixed</a></li>
                            <li><a href="home0838.html?sidebar">Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="pagesff12.html?t=pages">
                            <span class="icon"><img src="<?php echo base_url(); ?>public/admin/images/menu/pages.png" /></span>
                            <span class="title">Sample Pages</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="galleryd722.html?t=gallery">
                            <span class="icon"><img src="<?php echo base_url(); ?>public/admin/images/menu/gallery.png" /></span>
                            <span class="title">Gallery</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="charts9733.html?t=charts">
                            <span class="icon"><img src="<?php echo base_url(); ?>public/admin/images/menu/charts.png" /></span>
                            <span class="title">Statistics</span>
                        </a>
                    </li>
                    <li class="sep">
                        <a href="#">
                            <span class="notification">321</span>
                            <span class="icon"><img src="<?php echo base_url(); ?>public/admin/images/menu/msg.png" /></span>
                            <span class="title">Messages</span>
                        </a>
                    </li>
                    <li>
                        <a href="login.html">
                            <span class="icon"><img src="<?php echo base_url(); ?>public/admin/images/menu/settings.png" /></span>
                            <span class="title">Settings</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="pagetitle" class="clearfix">
            <h1 class="left">
                Dashboard
            </h1>
            <a class="btn grey right medium"><span>View Site</span></a>
        </div>
    </div>
</header>
<div class="container_16 clearfix" id="actualbody">



<ul class="breadcrumbs first">
    <li><a href="#">Home</a></li>
    <li class="active"><a href="#">Dashboard</a></li>
</ul>

<div class="grid_16 widget first">
    <div class="widget_title clearfix">
        <h2>Visitor Stats</h2>
    </div>
    <div class="widget_body">
        <div class="widget_content">
            <div style="width:220px; float:left;">
                <table class="simple">
                    <tr>
                        <td>4,732</td>
                        <td>Visits</td>
                    </tr>
                    <tr>
                        <td>6,126</td>
                        <td>Pageviews</td>
                    </tr>
                    <tr>
                        <td>1,126</td>
                        <td>Unique Visitors</td>
                    </tr>
                    <tr>
                        <td>4,126</td>
                        <td>Unique Views</td>
                    </tr>
                    <tr>
                        <td>11.53</td>
                        <td>Pages/Visit</td>
                    </tr>
                    <tr>
                        <td>50.24%</td>
                        <td>Bounce Rate</td>
                    </tr>
                    <tr>
                        <td>0:13:12</td>
                        <td>Avg. Time on Site</td></td>
                    </tr>
                    <tr>
                        <td>82.98%</td>
                        <td>New Visits </td>
                    </tr>
                    <tr>
                        <td>13.52%</td>
                        <td>Direct Traffic</td>
                    </tr>
                    <tr>
                        <td>72.96%</td>
                        <td>Referring Sites</td>
                    </tr>
                </table>
            </div>
            <div style="width:690px; float:left;">
                <div id="stats" style="width:690px; height: 280px; text-align: center; margin-top: 5px"></div>
                <script type="text/javascript">
                    $(function () {
                        var data1 = [
                            {
                                label: "Pageviews",
                                data: [[1, 1513], [2, 1234], [3, 1643], [4, 1245], [5, 1263], [6, 1833], [7, 1944], [8, 1739], [9, 1545], [10, 2354], [11, 1254], [12, 1531],[13, 1413], [14, 1134], [15, 1133], [16, 1445], [17, 1663], [18, 1233], [19, 1244], [20, 1439], [21, 1635], [22, 2124], [23, 1554], [23, 1521]]
                            },
                            {
                                label: "Visits",
                                data: [[1, 1413], [2, 1134], [3, 1133], [4, 1445], [5, 1663], [6, 1233], [7, 1244], [8, 1439], [9, 1635], [10, 2124], [11, 1554], [12, 1521],[13, 1513], [14, 1234], [15, 1643], [16, 1245], [17, 1263], [18, 1833], [19, 1944], [20, 1739], [21, 1545], [22, 2354], [23, 1254], [24, 1531]]
                            }
                        ];

                        $.plot($("#stats"), data1, {
                            grid: {backgroundColor: { colors: ["#fff", "#fff"] } },
                            colors: ["#80b611", "#4390cc"]
                        });
                    });
                </script>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>

<div class="clear"></div>

<div class="grid_16 widget tabs first">
<div class="widget_title clearfix">
    <h2>Tables</h2>
    <ul>
        <li class="active"><a href="#table1">Data Table</a></li>
        <li><a href="#table2">Unlinked Table</a></li>
        <li><a href="#table3">Simple Table</a></li>
    </ul>
</div>
<div class="widget_body">

<div id="table1">
<table class='dataTable'>
<thead>
<tr>
    <th></th>
    <th class="align-left">Rendering engine</th>
    <th class="align-left">Browser</th>
    <th class="align-left">Platform(s)</th>
    <th>Engine version</th>
    <th>CSS grade</th>
</tr>
</thead>
<tbody>
<tr class="gradeX">
    <td><input type="checkbox" /></td>
    <td>Trident</td>
    <td>Internet
        Explorer 4.0</td>

    <td>Win 95+</td>
    <td class="center">4</td>
    <td class="center">X</td>
</tr>
<tr class="gradeC">
    <td><input type="checkbox" /></td>
    <td>Trident</td>
    <td>Internet Explorer 5.0</td>
    <td>Win 95+</td>
    <td class="center">5</td>
    <td class="center">C</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Trident</td>
    <td>Internet
        Explorer 5.5</td>

    <td>Win 95+</td>
    <td class="center">5.5</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Trident</td>
    <td>Internet
        Explorer 6</td>

    <td>Win 98+</td>
    <td class="center">6</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Trident</td>
    <td>Internet Explorer 7</td>

    <td>Win XP SP2+</td>
    <td class="center">7</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Trident</td>
    <td>AOL browser (AOL desktop)</td>

    <td>Win XP</td>
    <td class="center">6</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Gecko</td>
    <td>Firefox 1.0</td>

    <td>Win 98+ / OSX.2+</td>
    <td class="center">1.7</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Gecko</td>
    <td>Firefox 1.5</td>

    <td>Win 98+ / OSX.2+</td>
    <td class="center">1.8</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Gecko</td>
    <td>Firefox 2.0</td>

    <td>Win 98+ / OSX.2+</td>
    <td class="center">1.8</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Gecko</td>
    <td>Firefox 3.0</td>

    <td>Win 2k+ / OSX.3+</td>
    <td class="center">1.9</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Gecko</td>
    <td>Camino 1.0</td>

    <td>OSX.2+</td>
    <td class="center">1.8</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Gecko</td>
    <td>Camino 1.5</td>

    <td>OSX.3+</td>
    <td class="center">1.8</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Gecko</td>
    <td>Netscape 7.2</td>

    <td>Win 95+ / Mac OS 8.6-9.2</td>
    <td class="center">1.7</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Gecko</td>
    <td>Netscape Browser 8</td>

    <td>Win 98SE+</td>
    <td class="center">1.7</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Gecko</td>
    <td>Netscape Navigator 9</td>

    <td>Win 98+ / OSX.2+</td>
    <td class="center">1.8</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Gecko</td>
    <td>Mozilla 1.0</td>

    <td>Win 95+ / OSX.1+</td>
    <td class="center">1</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Gecko</td>
    <td>Mozilla 1.1</td>

    <td>Win 95+ / OSX.1+</td>
    <td class="center">1.1</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Gecko</td>
    <td>Mozilla 1.2</td>

    <td>Win 95+ / OSX.1+</td>
    <td class="center">1.2</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Gecko</td>
    <td>Mozilla 1.3</td>

    <td>Win 95+ / OSX.1+</td>
    <td class="center">1.3</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Gecko</td>
    <td>Mozilla 1.4</td>

    <td>Win 95+ / OSX.1+</td>
    <td class="center">1.4</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Gecko</td>
    <td>Mozilla 1.5</td>

    <td>Win 95+ / OSX.1+</td>
    <td class="center">1.5</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Gecko</td>
    <td>Mozilla 1.6</td>

    <td>Win 95+ / OSX.1+</td>
    <td class="center">1.6</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Gecko</td>
    <td>Mozilla 1.7</td>

    <td>Win 98+ / OSX.1+</td>
    <td class="center">1.7</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Gecko</td>
    <td>Mozilla 1.8</td>

    <td>Win 98+ / OSX.1+</td>
    <td class="center">1.8</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Gecko</td>
    <td>Seamonkey 1.1</td>

    <td>Win 98+ / OSX.2+</td>
    <td class="center">1.8</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Gecko</td>
    <td>Epiphany 2.20</td>

    <td>Gnome</td>
    <td class="center">1.8</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Webkit</td>
    <td>Safari 1.2</td>

    <td>OSX.3</td>
    <td class="center">125.5</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Webkit</td>
    <td>Safari 1.3</td>

    <td>OSX.3</td>
    <td class="center">312.8</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Webkit</td>
    <td>Safari 2.0</td>

    <td>OSX.4+</td>
    <td class="center">419.3</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Webkit</td>
    <td>Safari 3.0</td>

    <td>OSX.4+</td>
    <td class="center">522.1</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Webkit</td>
    <td>OmniWeb 5.5</td>

    <td>OSX.4+</td>
    <td class="center">420</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Webkit</td>
    <td>iPod Touch / iPhone</td>

    <td>iPod</td>
    <td class="center">420.1</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Webkit</td>
    <td>S60</td>

    <td>S60</td>
    <td class="center">413</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Presto</td>
    <td>Opera 7.0</td>

    <td>Win 95+ / OSX.1+</td>
    <td class="center">-</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Presto</td>
    <td>Opera 7.5</td>

    <td>Win 95+ / OSX.2+</td>
    <td class="center">-</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Presto</td>
    <td>Opera 8.0</td>

    <td>Win 95+ / OSX.2+</td>
    <td class="center">-</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Presto</td>
    <td>Opera 8.5</td>

    <td>Win 95+ / OSX.2+</td>
    <td class="center">-</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Presto</td>
    <td>Opera 9.0</td>

    <td>Win 95+ / OSX.3+</td>
    <td class="center">-</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Presto</td>
    <td>Opera 9.2</td>

    <td>Win 88+ / OSX.3+</td>
    <td class="center">-</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Presto</td>
    <td>Opera 9.5</td>

    <td>Win 88+ / OSX.3+</td>
    <td class="center">-</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Presto</td>
    <td>Opera for Wii</td>

    <td>Wii</td>
    <td class="center">-</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Presto</td>
    <td>Nokia N800</td>

    <td>N800</td>
    <td class="center">-</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Presto</td>
    <td>Nintendo DS browser</td>

    <td>Nintendo DS</td>
    <td class="center">8.5</td>
    <td class="center">C/A<sup>1</sup></td>
</tr>
<tr class="gradeC">
    <td><input type="checkbox" /></td>
    <td>KHTML</td>

    <td>Konqureror 3.1</td>
    <td>KDE 3.1</td>
    <td class="center">3.1</td>
    <td class="center">C</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>KHTML</td>

    <td>Konqureror 3.3</td>
    <td>KDE 3.3</td>
    <td class="center">3.3</td>
    <td class="center">A</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>KHTML</td>

    <td>Konqureror 3.5</td>
    <td>KDE 3.5</td>
    <td class="center">3.5</td>
    <td class="center">A</td>
</tr>
<tr class="gradeX">
    <td><input type="checkbox" /></td>
    <td>Tasman</td>

    <td>Internet Explorer 4.5</td>
    <td>Mac OS 8-9</td>
    <td class="center">-</td>
    <td class="center">X</td>
</tr>
<tr class="gradeC">
    <td><input type="checkbox" /></td>
    <td>Tasman</td>

    <td>Internet Explorer 5.1</td>
    <td>Mac OS 7.6-9</td>
    <td class="center">1</td>
    <td class="center">C</td>
</tr>
<tr class="gradeC">
    <td><input type="checkbox" /></td>
    <td>Tasman</td>

    <td>Internet Explorer 5.2</td>
    <td>Mac OS 8-X</td>
    <td class="center">1</td>
    <td class="center">C</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Misc</td>

    <td>NetFront 3.1</td>
    <td>Embedded devices</td>
    <td class="center">-</td>
    <td class="center">C</td>
</tr>
<tr class="gradeA">
    <td><input type="checkbox" /></td>
    <td>Misc</td>

    <td>NetFront 3.4</td>
    <td>Embedded devices</td>
    <td class="center">-</td>
    <td class="center">A</td>
</tr>
<tr class="gradeX">
    <td><input type="checkbox" /></td>
    <td>Misc</td>

    <td>Dillo 0.8</td>
    <td>Embedded devices</td>
    <td class="center">-</td>
    <td class="center">X</td>
</tr>
<tr class="gradeX">
    <td><input type="checkbox" /></td>
    <td>Misc</td>

    <td>Links</td>
    <td>Text only</td>
    <td class="center">-</td>
    <td class="center">X</td>
</tr>
<tr class="gradeX">
    <td><input type="checkbox" /></td>
    <td>Misc</td>

    <td>Lynx</td>
    <td>Text only</td>
    <td class="center">-</td>
    <td class="center">X</td>
</tr>
<tr class="gradeC">
    <td><input type="checkbox" /></td>
    <td>Misc</td>

    <td>IE Mobile</td>
    <td>Windows Mobile 6</td>
    <td class="center">-</td>
    <td class="center">C</td>
</tr>
<tr class="gradeC">
    <td><input type="checkbox" /></td>
    <td>Misc</td>
    <td>PSP browser</td>
    <td>PSP</td>
    <td class="center">-</td>
    <td class="center">C</td>
</tr>
<tr class="gradeU">
    <td><input type="checkbox" /></td>
    <td>Other browsers</td>
    <td>All others</td>
    <td>-</td>
    <td class="center">-</td>
    <td class="center">U</td>
</tr>
</tbody>
</table>
<div class="clear"></div>
</div>

<div id="table2">
    <div class="widget_options clearfix">
        <select class="small forcewidth">
            <option>Delete</option>
            <option>Edit</option>
        </select>
        <a href="#" class="btn orange small"><span>Apply to Selected</span></a>

        <input type="text" class="search" />
    </div>
    <table>
        <thead>
        <tr>
            <td><input type="checkbox" /></td>
            <td>Design Name</td>
            <td class="center">Author</td>
            <td class="center">Country</td>
            <td>Comment</td>
            <td class="center">Views</td>
            <td class="center">Action</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><input type="checkbox" /></td>
            <td>This is a design name V.2.1</td>
            <td><a href="#">random_user1</a></td>
            <td>USA</td>
            <td>Vivamus fringilla, felis in tincidunt semper, arcu velit mollis arcu, id dignissim tortor tortor a lectus.</td>
            <td>1,233</td>
            <td><ul class="hor-list piped"><li><a href="#">View</a></li><li><a href="#">Edit</a></li><li><a href="#">Delete</a></li></ul></td>
        </tr>
        <tr>
            <td><input type="checkbox" /></td>
            <td>This is a design name V.2.1</td>
            <td><a href="#">random_user1</a></td>
            <td>USA</td>
            <td>Vivamus fringilla, felis in tincidunt semper, arcu velit mollis arcu, id dignissim tortor tortor a lectus.</td>
            <td>1,233</td>
            <td><ul class="hor-list piped"><li><a href="#">View</a></li><li><a href="#">Edit</a></li><li><a href="#">Delete</a></li></ul></td>
        </tr>
        <tr>
            <td><input type="checkbox" /></td>
            <td>This is a design name V.2.1</td>
            <td><a href="#">random_user1</a></td>
            <td>USA</td>
            <td>Vivamus fringilla, felis in tincidunt semper, arcu velit mollis arcu, id dignissim tortor tortor a lectus.</td>
            <td>1,233</td>
            <td><ul class="hor-list piped"><li><a href="#">View</a></li><li><a href="#">Edit</a></li><li><a href="#">Delete</a></li></ul></td>
        </tr>
        <tr>
            <td><input type="checkbox" /></td>
            <td>This is a design name V.2.1</td>
            <td><a href="#">random_user1</a></td>
            <td>USA</td>
            <td>Vivamus fringilla, felis in tincidunt semper, arcu velit mollis arcu, id dignissim tortor tortor a lectus.</td>
            <td>1,233</td>
            <td><ul class="hor-list piped"><li><a href="#">View</a></li><li><a href="#">Edit</a></li><li><a href="#">Delete</a></li></ul></td>
        </tr>
        </tbody>
    </table>
</div>


<div id="table3">
    <table class="simple">
        <thead>
        <tr>
            <td>Name</td>
            <td class="center">Email</td>
            <td class="center">Country</td>
            <td class="center">Phone Number</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Mr. Lorem Ipsum</td>
            <td class="center">contact@lipsum.com</td>
            <td class="center">Italy</td>
            <td class="center">545-6323</td>
        </tr>
        <tr>
            <td>Miss Dolor Sit</td>
            <td class="center">doloris@lipsum.com</td>
            <td class="center">Italy</td>
            <td class="center">555-2123</td>
        </tr>
        <tr>
            <td>Lord Amet the Second</td>
            <td class="center">amet2@lipsum.com</td>
            <td class="center">United Kingdom</td>
            <td class="center">543-5235</td>
        </tr>
        <tr>
            <td>Mrs. Concur Ipsum</td>
            <td class="center">concur@lipsum.com</td>
            <td class="center">Netherlands</td>
            <td class="center">1242-41123</td>
        </tr>
        <tr>
            <td>Mr. Vitaly Ipsum</td>
            <td class="center">vitaly@lipsum.com</td>
            <td class="center">Australia</td>
            <td class="center">7242-41133</td>
        </tr>
        </tbody>
    </table>
</div>

</div>
</div>

<div class="clear"></div>


<div class="grid_16 widget first">
    <div class="widget_title clearfix">
        <h2>Features</h2>
    </div>
    <div class="widget_body">
        <div class="widget_content">
            <ul class="list-tick" style="width: 33%; display: inline-block;zoom: 1;*display:inline;">
                <li>Unlimited Colors!</li>
                <li>Based on 960 Grid System.</li>
                <li>Fluid and Fixed Layout</li>
                <li>Supports Google WebFonts</li>
            </ul>
            <ul class="list-tick" style="width: 33%; display: inline-block;zoom: 1;*display:inline;">
                <li>Client side form validation</li>
                <li>Full Size Calendars</li>
                <li>Dynamic Data Tables</li>
                <li>jQuery UI with hand made theme!</li>
            </ul>
            <div style="width: 33%; display: inline-block;zoom: 1;*display:inline;">
                <ul class="list-tick">
                    <li>HTML5 and CSS3</li>
                    <li>Degrades Gracefully to IE7</li>
                    <li>3500+ icons included</li>
                </ul>
                <ul class="list-cross">
                    <li>Puppies were hurt</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="grid_16 widget first">
    <div class="widget_title clearfix">
        <h2>Form Elements</h2>
    </div>
    <div class="widget_body">
        <div class="widget_content">
            <p>This is a list of sample messages that may appear upon s success, failure, warning, notice or configuration change. View <a href="#">all message icons.</a></p>

            <div class="msg success">
                <span>This is a success message on green background.</span>
                <a href="#" class="close">x</a>
            </div>
            <div class="msg failure">
                <span>This is a failure message on red background.</span>
                <a href="#" class="close">x</a>
            </div>
            <div class="msg warning">
                <span>This is a warning message on yellow background.</span>
                <a href="#" class="close">x</a>
            </div>
            <div class="msg notice">
                <span>This is a notice message on blue background.</span>
                <a href="#" class="close">x</a>
            </div>
            <div class="msg settings">
                <span>This is a settings message on grey background.</span>
                <a href="#" class="close">x</a>
            </div>

            <label class="block">Small input text area:</label>
            <input class="small" type="text" />

            <label class="block">Medium input text area:</label>
            <input class="medium" type="text" />

            <label class="block">Full width input text area:</label>
            <input class="large" type="text" />

            <div class="clear"></div>
            <br />

            <input type="text" class="datepicker" />
            <select>
                <option>Dollhouse</option>
                <option>Battlestar Galactica</option>
                <option>Doctor Who</option>
                <option>Firefly</option>
            </select>

            <!--
            <div class="upload">
               <input type="text" class="fakeupload" /> <!-- browse button is here as background
               <input type="file" name="upload" class="realupload" onchange="this.fakeupload.value = this.value;" />
            </div>
            -->

            <table class="simple">
                <tr>
                    <td width="50%" style="padding-left: 0;">
                        <label class="block">Full width input text area:</label>
                        <textarea style="height: 180px;width: 100%;"></textarea>
                        <span class="infobar">Quisque ac interdum felis. Curabitur et purus diam, quis dictum quam. </span>

                    </td>
                    <td width="48%" style="padding-left: 2%">

                        <a href="#" class="btn small orange"><span>Small Button</span></a>
                        <a href="#" class="btn grey"><span>Button</span></a>
                        <a href="#" class="btn medium green"><span>Medium Button</span></a>
                        <a href="#" class="btn large"><span>Large Button</span></a>
                        <br /> <br />

                        <input class="ioscheckbox" type="checkbox" />
                        <input class="ioscheckbox" type="checkbox" checked="checked" />

                        <br /><br />
                        <div class="slider"></div>
                        <br />
                        <div class="slider-range"></div>
                        <br />
                        <div class="progressbar"></div>

                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div class="clear"></div>

<div class="grid_8 widget first">
    <div class="widget_title clearfix">
        <h2>Gallery</h2>
    </div>
    <div class="widget_body">
        <div class="widget_content">
            <ul class="gallery">
                <li>
                    <a rel="example1" href="<?php echo base_url(); ?>public/admin/images/11.jpg" class="gallerythumb"><img src="<?php echo base_url(); ?>public/admin/images/11.jpg"/></a>
                    <ul class="img_options">
                        <li><a href="#" class="btn">Edit</a></li> <li><a href="#" class="btn">Delete</a></li>
                    </ul>
                </li>
                <li>
                    <a rel="example1" href="<?php echo base_url(); ?>public/admin/images/12.jpg" class="gallerythumb"><img src="<?php echo base_url(); ?>public/admin/images/12.jpg" /></a>
                    <ul class="img_options">
                        <li><a href="#" class="btn">Edit</a></li> <li><a href="#" class="btn">Delete</a></li>
                    </ul>
                </li>
                <li>
                    <a rel="example1" href="<?php echo base_url(); ?>public/admin/images/13.jpg" class="gallerythumb"><img src="<?php echo base_url(); ?>public/admin/images/13.jpg" /></a>
                    <ul class="img_options">
                        <li><a href="#" class="btn">Edit</a></li> <li><a href="#" class="btn">Delete</a></li>
                    </ul>
                </li>
                <li>
                    <a rel="example1" href="<?php echo base_url(); ?>public/admin/images/14.jpg" class="gallerythumb"><img src="<?php echo base_url(); ?>public/admin/images/14.jpg" /></a>
                    <ul class="img_options">
                        <li><a href="#" class="btn">Edit</a></li> <li><a href="#" class="btn">Delete</a></li>
                    </ul>
                </li>
                <li>
                    <a rel="example1" href="<?php echo base_url(); ?>public/admin/images/15.jpg" class="gallerythumb"><img src="<?php echo base_url(); ?>public/admin/images/15.jpg" /></a>
                    <ul class="img_options">
                        <li><a href="#" class="btn">Edit</a></li> <li><a href="#" class="btn">Delete</a></li>
                    </ul>
                </li>
                <li>
                    <a rel="example1" href="<?php echo base_url(); ?>public/admin/images/16.jpg" class="gallerythumb"><img src="<?php echo base_url(); ?>public/admin/images/16.jpg" /></a>
                    <ul class="img_options">
                        <li><a href="#" class="btn">Edit</a></li> <li><a href="#" class="btn">Delete</a></li>
                    </ul>
                </li>
                <li>
                    <a rel="example1" href="<?php echo base_url(); ?>public/admin/images/17.jpg" class="gallerythumb"><img src="<?php echo base_url(); ?>public/admin/images/17.jpg" /></a>
                    <ul class="img_options">
                        <li><a href="#" class="btn">Edit</a></li> <li><a href="#" class="btn">Delete</a></li>
                    </ul>
                </li>
                <li>
                    <a rel="example1" href="<?php echo base_url(); ?>public/admin/images/18.jpg" class="gallerythumb"><img src="<?php echo base_url(); ?>public/admin/images/18.jpg" /></a>
                    <ul class="img_options">
                        <li><a href="#" class="btn">Edit</a></li> <li><a href="#" class="btn">Delete</a></li>
                    </ul>
                </li>
                <li>
                    <a rel="example1" href="<?php echo base_url(); ?>public/admin/images/19.jpg" class="gallerythumb"><img src="<?php echo base_url(); ?>public/admin/images/19.jpg" /></a>
                    <ul class="img_options">
                        <li><a href="#" class="btn">Edit</a></li> <li><a href="#" class="btn">Delete</a></li>
                    </ul>
                </li>
                <li>
                    <a rel="example1" href="<?php echo base_url(); ?>public/admin/images/20.jpg" class="gallerythumb"><img src="<?php echo base_url(); ?>public/admin/images/20.jpg" /></a>
                    <ul class="img_options">
                        <li><a href="#" class="btn">Edit</a></li> <li><a href="#" class="btn">Delete</a></li>
                    </ul>
                </li>
                <li>
                    <a rel="example1" href="<?php echo base_url(); ?>public/admin/images/21.jpg" class="gallerythumb"><img src="<?php echo base_url(); ?>public/admin/images/21.jpg" /></a>
                    <ul class="img_options">
                        <li><a href="#" class="btn">Edit</a></li> <li><a href="#" class="btn">Delete</a></li>
                    </ul>
                </li>
                <li>
                    <a rel="example1" href="<?php echo base_url(); ?>public/admin/images/22.jpg" class="gallerythumb"><img src="<?php echo base_url(); ?>public/admin/images/22.jpg"  /></a>
                    <ul class="img_options">
                        <li><a href="#" class="btn">Edit</a></li> <li><a href="#" class="btn">Delete</a></li>
                    </ul>
                </li>
            </ul>
            <div class="clear"></div>
        </div>
    </div>
</div>

<div class="grid_8 widget first">
    <div class="widget_title clearfix">
        <h2>Full Size Calendar</h2>
    </div>
    <div class="widget_body">
        <div class="widget_content">
            <div id='calendar' class="centered"></div>
            <p class="center">Integrated with <a href="http://calendar.google.com/">Google Calendar</a></p>
        </div>
    </div>
    <script type='text/javascript'>
        $(document).ready(function() {

            $('#calendar').fullCalendar({

                // US Holidays
                events: 'http://www.google.com/calendar/feeds/usa__en%40holiday.calendar.google.com/public/basic',

                eventClick: function(event) {
                    // opens events in a popup window
                    window.open(event.url, 'gcalevent', 'width=700,height=600');
                    return false;
                },

                loading: function(bool) {
                    if (bool) {
                        $('#loading').show();
                    }else{
                        $('#loading').hide();
                    }
                }

            });

            $(".gallerythumb").bind("mouseenter",function(){
                //alert("hellow");
                $(".btn").hide();
                $(this).parent().find(".btn").show();
            });
            $(".gallery").bind("mouseleave",function(){
                $(this).parent().find(".btn").hide();
            });

        });
    </script>
</div>
<!--
<div id="dialog" title="Hello, Hello, Twisted Transistor">
	<p>Chameleon Circuit features unlimited color schemes. Try moving the color sliders on the top right corner of your screen and see how you would like YOUR theme to be!</p>
</div>
-->
</div> <!-- #actualbody -->
</div> <!-- #main -->
</div> <!-- #wrap -->
<footer>
    <div class="container_12">
        <div class="grid_12 clearfix">
            <p class="left">
                Powered by Chameleon Circuit
            </p>
            <p class="right">
                &copy <a href="http://themio.net/">Themio</a> 2011
            </p>
        </div>
    </div>
</footer>
</body>

</html>