<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title><?php echo ($meta_title); ?>|<?php echo C('WEB_SITE_TITLE');?></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="/yyxt/Public/css/bootstrap.css" />
    <link rel="stylesheet" href="/yyxt/Public/css/font-awesome.css" />
    <!-- page specific plugin styles -->
    
    <!-- text fonts -->
    <link rel="stylesheet" href="/yyxt/Public/css/ace-fonts.css" />
    <!-- ace styles -->
    <link rel="stylesheet" href="/yyxt/Public/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="/yyxt/Public/css/ace-part2.css" class="ace-main-stylesheet" />
    <![endif]-->
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="/yyxt/Public/css/ace-ie.css" />
    <![endif]-->
    <!-- inline styles related to this page -->
    <!-- ace settings handler -->
    <script src="/yyxt/Public/js/ace-extra.js"></script>
    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->
    <!--[if lte IE 8]>
    <script src="/yyxt/Public/js/html5shiv.js"></script>
    <script src="/yyxt/Public/js/respond.js"></script>
    <![endif]-->
    <!-- basic scripts -->
    <!--[if !IE]>-->
    <script src="/yyxt/Public/js/jquery.js"></script>
    <!-- <![endif]-->
    <!--[if IE]>
    <script  src="/yyxt/Public/js/jquery1x.js"></script>
    <![endif]-->
</head>

<body class="no-skin">
    <!-- #section:basics/navbar.layout -->
    <div id="navbar" class="navbar navbar-default">
        <script type="text/javascript">
        try {
            ace.settings.check('navbar', 'fixed')
        } catch (e) {}
        </script>
        <div class="navbar-container" id="navbar-container">
            <!-- #section:basics/sidebar.mobile.toggle -->
            <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                <span class="sr-only">Toggle sidebar</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- /section:basics/sidebar.mobile.toggle -->
            <div class="navbar-header pull-left">
                <!-- #section:basics/navbar.layout.brand -->
                <a href="#" class="navbar-brand">
                    <small> <i class="fa fa-leaf"></i>
                        预约挂号系统
                    </small>
                </a>
                <!-- /section:basics/navbar.layout.brand -->
                <!-- #section:basics/navbar.toggle -->
                <!-- /section:basics/navbar.toggle -->
            </div>
            <!-- #section:basics/navbar.dropdown -->
            <div class="navbar-buttons navbar-header pull-right" role="navigation">
    <ul class="nav ace-nav">
        <li class="green">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#"> <i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
                <span class="badge badge-success">5</span>
            </a>
            <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                <li class="dropdown-header"> <i class="ace-icon fa fa-envelope-o"></i>
                    5 Messages
                </li>
                <li class="dropdown-content">
                    <ul class="dropdown-menu dropdown-navbar">
                        <li>
                            <a href="#" class="clearfix">
                                <img src="/yyxt/Public/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
                                <span class="msg-body">
                                    <span class="msg-title">
                                        <span class="blue">Alex:</span>
                                        Ciao sociis natoque penatibus et auctor ...
                                    </span>
                                    <span class="msg-time">
                                        <i class="ace-icon fa fa-clock-o"></i>
                                        <span>a moment ago</span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="clearfix">
                                <img src="/yyxt/Public/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
                                <span class="msg-body">
                                    <span class="msg-title">
                                        <span class="blue">Susan:</span>
                                        Vestibulum id ligula porta felis euismod ...
                                    </span>
                                    <span class="msg-time">
                                        <i class="ace-icon fa fa-clock-o"></i>
                                        <span>20 minutes ago</span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="clearfix">
                                <img src="/yyxt/Public/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
                                <span class="msg-body">
                                    <span class="msg-title">
                                        <span class="blue">Bob:</span>
                                        Nullam quis risus eget urna mollis ornare ...
                                    </span>
                                    <span class="msg-time">
                                        <i class="ace-icon fa fa-clock-o"></i>
                                        <span>3:15 pm</span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="clearfix">
                                <img src="/yyxt/Public/avatars/avatar2.png" class="msg-photo" alt="Kate's Avatar" />
                                <span class="msg-body">
                                    <span class="msg-title">
                                        <span class="blue">Kate:</span>
                                        Ciao sociis natoque eget urna mollis ornare ...
                                    </span>
                                    <span class="msg-time">
                                        <i class="ace-icon fa fa-clock-o"></i>
                                        <span>1:33 pm</span>
                                    </span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="clearfix">
                                <img src="/yyxt/Public/avatars/avatar5.png" class="msg-photo" alt="Fred's Avatar" />
                                <span class="msg-body">
                                    <span class="msg-title">
                                        <span class="blue">Fred:</span>
                                        Vestibulum id penatibus et auctor ...
                                    </span>
                                    <span class="msg-time">
                                        <i class="ace-icon fa fa-clock-o"></i>
                                        <span>10:09 am</span>
                                    </span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown-footer">
                    <a href="inbox.html">
                        See all messages
                        <i class="ace-icon fa fa-arrow-right"></i>
                    </a>
                </li>
            </ul>
        </li>
        <!-- #section:basics/navbar.user_menu -->
        <li class="light-blue">
            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                <img class="nav-user-photo" src="/yyxt/Public/avatars/user.jpg" alt="Jason's Photo" />
                <span class="user-info">
                    <small>Welcome,</small>
                    Jason
                </span>
                <i class="ace-icon fa fa-caret-down"></i>
            </a>
            <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                <li>
                    <a href="#">
                        <i class="ace-icon fa fa-cog"></i>
                        Settings
                    </a>
                </li>
                <li>
                    <a href="profile.html">
                        <i class="ace-icon fa fa-user"></i>
                        Profile
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <i class="ace-icon fa fa-power-off"></i>
                        Logout
                    </a>
                </li>
            </ul>
        </li>
        <!-- /section:basics/navbar.user_menu --> </ul>
</div>
            <!-- /section:basics/navbar.dropdown -->
        </div>
        <!-- /.navbar-container -->
    </div>
    <!-- /section:basics/navbar.layout -->
    <div class="main-container" id="main-container">
        <script type="text/javascript">
        try {
            ace.settings.check('main-container', 'fixed')
        } catch (e) {}
        </script>
        <!-- #section:basics/sidebar -->
        <div id="sidebar" class="sidebar responsive">
    <script type="text/javascript">
    try {
        ace.settings.check('sidebar', 'fixed')
    } catch (e) {}
    </script>
    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <button class="btn btn-success"> <i class="ace-icon fa fa-signal"></i>
            </button>
            <button class="btn btn-info"> <i class="ace-icon fa fa-pencil"></i>
            </button>
            <!-- #section:basics/sidebar.layout.shortcuts -->
            <button class="btn btn-warning">
                <i class="ace-icon fa fa-users"></i>
            </button>
            <button class="btn btn-danger">
                <i class="ace-icon fa fa-cogs"></i>
            </button>
            <!-- /section:basics/sidebar.layout.shortcuts -->
        </div>
        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>
            <span class="btn btn-info"></span>
            <span class="btn btn-warning"></span>
            <span class="btn btn-danger"></span>
        </div>
    </div>
    <!-- /.sidebar-shortcuts -->
    <ul class="nav nav-list">
        <?php if(is_array($__MENU__)): $i = 0; $__LIST__ = $__MENU__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                <a href="<?php echo (U($vo["url"])); ?>" class="dropdown-toggle">
                    <i class="menu-icon fa <?php echo ($vo["icon"]); ?>"></i>
                    <span class="menu-text"><?php echo ($vo["title"]); echo ($vo["class"]); ?></span>
                    <?php if(!empty($vo["child"])): ?><b class="arrow fa fa-angle-down"></b><?php endif; ?>
                </a>
                <b class="arrow"></b>
                <?php if(!empty($vo["child"])): ?><ul class="submenu">
                        <?php if(is_array($vo["child"])): $i = 0; $__LIST__ = $vo["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li <?php if(($v["class"]) == "1"): ?>class="active"<?php endif; ?>>
                                <a href="<?php echo (U($v["url"])); ?>">
                                    <i class="menu-icon fa <?php echo ($v["icon"]); ?>"></i> <?php echo ($v["title"]); ?>
                                </a>
                                <b class="arrow"></b>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul><?php endif; ?>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        
    </ul>
    <!-- /.nav-list -->
    <!-- #section:basics/sidebar.layout.minimize -->
    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
    <!-- /section:basics/sidebar.layout.minimize -->
    <script type="text/javascript">
    try {
        ace.settings.check('sidebar', 'collapsed');
        $('.nav-list').find('li[class="active"]').eq(0).parent('ul').closest('li').addClass('open');
    } catch (e) {}
    </script>
</div>

        <!-- /section:basics/sidebar -->
        <div class="main-content">
            <div class="main-content-inner">
                <!-- #section:basics/content.breadcrumbs -->
                <div class="breadcrumbs" id="breadcrumbs">
                    <script type="text/javascript">
                    try {
                        ace.settings.check('breadcrumbs', 'fixed')
                    } catch (e) {}
                    </script>
                    
    <ul class="breadcrumb">
        <li> <i class="ace-icon fa fa-home home-icon"></i>
            <a href="/yyxt/">首页</a>
        </li>
        <li>
            <a href="javascript:;">系统设置</a>
        </li>
        <li class="active">配置管理</li>
    </ul>

                    <!-- /.breadcrumb -->
                    
                </div>
                <!-- /section:basics/content.breadcrumbs -->
                <div class="page-content">
                     <!-- #section:settings.box --> 
 <div class="ace-settings-container" id="ace-settings-container">
     <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn"> <i class="ace-icon fa fa-cog bigger-130"></i>
     </div>

     <div class="ace-settings-box clearfix" id="ace-settings-box">
         <div class="pull-left width-50">
             <!-- #section:settings.skins --> 
             <div class="ace-settings-item">
                 <div class="pull-left">
                     <select id="skin-colorpicker" class="hide">
                         <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                         <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                         <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                         <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                     </select>
                 </div>
                 <span>&nbsp; Choose Skin</span>
             </div>

             <!-- /section:settings.skins --> 

             <!-- #section:settings.navbar --> 
             <div class="ace-settings-item">
                 <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" /> 
                 <label class="lbl" for="ace-settings-navbar">Fixed Navbar</label>
             </div>

             <!-- /section:settings.navbar --> 

             <!-- #section:settings.sidebar --> 
             <div class="ace-settings-item">
                 <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" /> 
                 <label class="lbl" for="ace-settings-sidebar">Fixed Sidebar</label>
             </div>

             <!-- /section:settings.sidebar --> 

             <!-- #section:settings.breadcrumbs --> 
             <div class="ace-settings-item">
                 <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" /> 
                 <label class="lbl" for="ace-settings-breadcrumbs">Fixed Breadcrumbs</label>
             </div>

             <!-- /section:settings.breadcrumbs --> 

             <!-- #section:settings.rtl --> 
             <div class="ace-settings-item">
                 <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" /> 
                 <label class="lbl" for="ace-settings-rtl">Right To Left (rtl)</label>
             </div>

             <!-- /section:settings.rtl --> 

             <!-- #section:settings.container --> 
             <div class="ace-settings-item">
                 <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" /> 
                 <label class="lbl" for="ace-settings-add-container">
                     Inside <b>.container</b>
                 </label>
             </div>

             <!-- /section:settings.container --> </div>
         <!-- /.pull-left --> 

         <div class="pull-left width-50">
             <!-- #section:basics/sidebar.options --> 
             <div class="ace-settings-item">
                 <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" /> 
                 <label class="lbl" for="ace-settings-hover">Submenu on Hover</label>
             </div>

             <div class="ace-settings-item">
                 <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" /> 
                 <label class="lbl" for="ace-settings-compact">Compact Sidebar</label>
             </div>

             <div class="ace-settings-item">
                 <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" /> 
                 <label class="lbl" for="ace-settings-highlight">Alt. Active Item</label>
             </div>

             <!-- /section:basics/sidebar.options --> </div>
         <!-- /.pull-left --> </div>
     <!-- /.ace-settings-box --> </div>
 <!-- /.ace-settings-container --> 
                    <!-- /section:settings.box -->
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- PAGE CONTENT BEGINS -->
                            
    <div class="row">
        <div class="col-sm-6">
            <div class="dd" id="nestable">
                <ol class="dd-list">
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="dd-item" data-id="<?php echo ($vo["id"]); ?>">
                            <div class="dd-handle"><?php echo ($vo["name"]); ?>
                                <div class="pull-right action-buttons">
                                    <a class="blue" href="#">
                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                    </a>
                                    <a class="red" href="#">
                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                    </a>
                                </div>
                            </div>
                            <?php if(!empty($vo["child"])): ?><ol class="dd-list">
                                    <?php if(is_array($vo["child"])): $i = 0; $__LIST__ = $vo["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class="dd-item" data-id="<?php echo ($v["id"]); ?>">
                                            <div class="dd-handle">
                                                <?php echo ($v["name"]); ?>
                                                <div class="pull-right action-buttons">
                                                    <a class="blue" href="#">
                                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                    </a>
                                                    <a class="red" href="#">
                                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                </ol><?php endif; ?>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ol>
            </div>
        </div>
        <div class="vspace-16-sm"></div>
    </div>

                            <!-- PAGE CONTENT ENDS -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.page-content -->
            </div>
        </div>
        <!-- /.main-content -->
        <div class="footer">
	<div class="footer-inner">
		<!-- #section:basics/footer -->
		<div class="footer-content">
			<span class="bigger-120">
				<span class="blue bolder">预约挂号系统</span>
				cotyxpp@qq.com &copy; 2016＋
			</span>
			&nbsp; &nbsp;
			
		</div>
		<!-- /section:basics/footer -->
	</div>
</div>
<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
	<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>
    </div>
    <!-- /.main-container -->
    
    <script type="text/javascript">
    if ('ontouchstart' in document.documentElement) document.write("<script src='/yyxt/Public/js/jquery.mobile.custom.js'>" + "<" + "/script>");
    </script>
    <script src="/yyxt/Public/js/bootstrap.js"></script>
    <!-- page specific plugin scripts -->
    
    <script src="/yyxt/Public/js/jquery.nestable.js"></script>

    <!-- ace scripts -->
    <script src="/yyxt/Public/js/ace/elements.scroller.js"></script>
    <script src="/yyxt/Public/js/ace/elements.colorpicker.js"></script>
    <script src="/yyxt/Public/js/ace/elements.fileinput.js"></script>
    <script src="/yyxt/Public/js/ace/elements.typeahead.js"></script>
    <script src="/yyxt/Public/js/ace/elements.wysiwyg.js"></script>
    <script src="/yyxt/Public/js/ace/elements.spinner.js"></script>
    <script src="/yyxt/Public/js/ace/elements.treeview.js"></script>
    <script src="/yyxt/Public/js/ace/elements.wizard.js"></script>
    <script src="/yyxt/Public/js/ace/elements.aside.js"></script>
    <script src="/yyxt/Public/js/ace/ace.js"></script>
    <script src="/yyxt/Public/js/ace/ace.touch-drag.js"></script>
    <script src="/yyxt/Public/js/ace/ace.sidebar.js"></script>
    <script src="/yyxt/Public/js/ace/ace.sidebar-scroll-1.js"></script>
    <script src="/yyxt/Public/js/ace/ace.submenu-hover.js"></script>
    <script src="/yyxt/Public/js/ace/ace.widget-box.js"></script>
    <script src="/yyxt/Public/js/ace/ace.settings.js"></script>
    <script src="/yyxt/Public/js/ace/ace.settings-rtl.js"></script>
    <script src="/yyxt/Public/js/ace/ace.settings-skin.js"></script>
    <script src="/yyxt/Public/js/ace/ace.widget-on-reload.js"></script>
    <script src="/yyxt/Public/js/ace/ace.searchbox-autocomplete.js"></script>
    <!-- inline scripts related to this page -->
    
    <!-- inline scripts related to this page -->
    <script type="text/javascript">
    jQuery(function($) {

        $('.dd').nestable();

        $('.dd-handle a').on('mousedown', function(e) {
            e.stopPropagation();
        });

        $('[data-rel="tooltip"]').tooltip();

    });
    </script>

</body>

</html>