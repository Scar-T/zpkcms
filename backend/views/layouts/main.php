<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;
use mdm\admin\components\MenuHelper;
/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if IE 9]>         <html class="ie9 gt-ie8"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="gt-ie8 gt-ie9 not-ie"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
     <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta name="viewport" content="width=device-width, user-scalable=no">

    <!-- 后台框架样式 -->
    <link href="<?php echo Yii::$app->request->hostInfo;?>/public/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo Yii::$app->request->hostInfo;?>/public/css/pixel-admin.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo Yii::$app->request->hostInfo;?>/public/css/widgets.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo Yii::$app->request->hostInfo;?>/public/css/rtl.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo Yii::$app->request->hostInfo;?>/public/css/themes.min.css" rel="stylesheet" type="text/css">
    <?php $this->head() ?>
    <!--[if lt IE 9]>
        <script src="assets/javascripts/ie.min.js"></script>
    <![endif]-->
</head>


<!-- 1. $BODY ======================================================================================
    
    Body

    Classes:
    * 'theme-{THEME NAME}'
    * 'right-to-left'      - Sets text direction to right-to-left
    * 'main-menu-right'    - Places the main menu on the right side
    * 'no-main-menu'       - Hides the main menu
    * 'main-navbar-fixed'  - Fixes the main navigation
    * 'main-menu-fixed'    - Fixes the main menu
    * 'main-menu-animated' - Animate main menu
-->
<body class="theme-default main-menu-animated">
 <?php $this->beginBody() ?>
<script>var init = [];</script>

<div id="main-wrapper">


<!-- 2. $MAIN_NAVIGATION ===========================================================================

    Main navigation
-->
    <div id="main-navbar" class="navbar navbar-inverse" role="navigation">
        <!-- Main menu toggle -->
        <button type="button" id="main-menu-toggle"><i class="navbar-icon fa fa-bars icon"></i><span class="hide-menu-text">菜单</span></button>
        
        <div class="navbar-inner">
            <!-- Main navbar header -->
            <div class="navbar-header">

                <!-- Logo -->
                <a href="#" class="navbar-brand">
                    <div><img alt="后台系统" src="<?php echo Yii::$app->request->hostInfo;?>/public/images/logo.jpg"></div>
                    后台管理系统
                </a>

                <!-- Main navbar toggle -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse"><i class="navbar-icon fa fa-bars"></i></button>

            </div> <!-- / .navbar-header -->

            <div id="main-navbar-collapse" class="collapse navbar-collapse main-navbar-collapse">
                <div>
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="<?php echo Yii::$app->request->hostInfo;?>/admin.php">后端首页</a>
                        </li>
                       <!--  <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">First item</a></li>
                                <li><a href="#">Second item</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Third item</a></li>
                            </ul>
                        </li> -->
                    </ul> <!-- / .navbar-nav -->

                    <div class="right clearfix">
                        <ul class="nav navbar-nav pull-right right-navbar-nav">

                            <li>
                                <a href="<?php echo Yii::$app->request->hostInfo;?>">预览网站</a>
                            </li>  
                            <li class="nav-icon-btn nav-icon-btn-danger dropdown">
                                <a href="#notifications" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="label">5</span>
                                    <i class="nav-icon fa fa-bullhorn"></i>
                                    <span class="small-screen-text">Notifications</span>
                                </a>

                                <!-- NOTIFICATIONS -->
                                
                                <!-- Javascript -->
                                <script>
                                    init.push(function () {
                                        $('#main-navbar-notifications').slimScroll({ height: 250 });
                                    });
                                </script>
                                <!-- / Javascript -->

                                <div class="dropdown-menu widget-notifications no-padding" style="width: 300px">
                                    <div class="notifications-list" id="main-navbar-notifications">

                                        <div class="notification">
                                            <div class="notification-title text-danger">SYSTEM</div>
                                            <div class="notification-description"><strong>Error 500</strong>: Syntax error in index.php at line <strong>461</strong>.</div>
                                            <div class="notification-ago">12h ago</div>
                                            <div class="notification-icon fa fa-hdd-o bg-danger"></div>
                                        </div> <!-- / .notification -->

                                    </div> <!-- / .notifications-list -->
                                    <a href="#" class="notifications-link">MORE NOTIFICATIONS</a>
                                </div> <!-- / .dropdown-menu -->
                            </li>
                            <li class="nav-icon-btn nav-icon-btn-success dropdown">
                                <a href="#messages" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="label">10</span>
                                    <i class="nav-icon fa fa-envelope"></i>
                                    <span class="small-screen-text">Income messages</span>
                                </a>

                                <!-- MESSAGES -->
                                
                                <!-- Javascript -->
                                <script>
                                    init.push(function () {
                                        $('#main-navbar-messages').slimScroll({ height: 250 });
                                    });
                                </script>
                                <!-- / Javascript -->

                                <div class="dropdown-menu widget-messages-alt no-padding" style="width: 300px;">
                                    <div class="messages-list" id="main-navbar-messages">

                                        <div class="message">
                                            <img src="assets/demo/avatars/2.jpg" alt="" class="message-avatar">
                                            <a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                                            <div class="message-description">
                                                from <a href="#">Robert Jang</a>
                                                &nbsp;&nbsp;·&nbsp;&nbsp;
                                                2h ago
                                            </div>
                                        </div> <!-- / .message -->

                    
                                    </div> <!-- / .messages-list -->
                                    <a href="#" class="messages-link">MORE MESSAGES</a>
                                </div> <!-- / .dropdown-menu -->
                            </li>
<!-- /3. $END_NAVBAR_ICON_BUTTONS -->

                            <li>
                                <form class="navbar-form pull-left">
                                    <input type="text" class="form-control" placeholder="Search">
                                </form>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown">
                                    <img src="<?php echo isset(yii::$app->user->identity->avatarTm)?yii::$app->user->identity->avatarTm:"public/images/user.jpg" ;?>">
                                    <span><?php echo yii::$app->user->identity->username;?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo Url::toRoute(['user/myview']);?>">帐号管理</a></li>
                                    <li><a href="<?php echo Url::toRoute(['user/mymessage']);?>">消息管理</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo Url::toRoute('site/logout')?>"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;退出</a></li>
                                </ul>
                            </li>
                        </ul> <!-- / .navbar-nav -->
                    </div> <!-- / .right -->
                </div>
            </div> <!-- / #main-navbar-collapse -->
        </div> <!-- / .navbar-inner -->
    </div> <!-- / #main-navbar -->
<!-- /2. $END_MAIN_NAVIGATION -->


<!-- 4. $MAIN_MENU =================================================================================-->
    <div id="main-menu" role="navigation">
        <div id="main-menu-inner">
            <?php $menu=MenuHelper::getAssignedMenu(Yii::$app->user->id);?>
            <ul class="navigation">
                <?php foreach ($menu as $key => $value) :?>
                    <li <?php if(isset($value['items'])){echo "class='mm-dropdown'";}?>>
                        <a href="<?php echo isset($value['items'])? "javascript:void(0);":Url::toRoute($value['url'][0]) ;?>"><?php echo $value['data']; ?><span class="mm-text"><?php echo $value['label'];?></span></a>
                        <?php if (isset($value['items'])): ?>
                            <ul>
                                <?php foreach ($value['items'] as $key => $val) :?>
                                <li>
                                    <a tabindex="-1" href="<?php echo Url::toRoute($val['url'][0])?>"><span class="mm-text"><?php echo $val['label'];?></span></a>
                                </li>
                               <?php endforeach;?>
                            </ul>
                        <?php endif ?>
                    </li>
                <?php endforeach;?>
             
            </ul> <!-- / .navigation -->
            <div class="menu-content">
                <a href="pages-invoice.html" class="btn btn-primary btn-block btn-outline dark">Create Invoice</a>
            </div>
        </div> <!-- / #main-menu-inner -->
    </div> <!-- / #main-menu -->
<!-- /4. $MAIN_MENU -->


    <div id="content-wrapper">
     <?= $content ?>

    </div> <!-- / #content-wrapper -->
    <div id="main-menu-bg"></div>
</div> <!-- / #main-wrapper -->

<!-- Get jQuery from Google CDN -->
<!--[if !IE]> -->
    <script type="text/javascript"> window.jQuery || document.write('<script src="<?php echo Yii::$app->request->hostInfo;?>/public/js/jquery-1.8.3.min.js">'+"<"+"/script>"); </script>
<!-- <![endif]-->
<!--[if lte IE 9]>
    <script type="text/javascript"> window.jQuery || document.write('<script src="<?php echo Yii::$app->request->hostInfo;?>/public/js/jquery-1.8.3.min.js">'+"<"+"/script>"); </script>
<![endif]-->



<!-- Pixel Admin's javascripts -->
<script src="<?php echo Yii::$app->request->hostInfo;?>/public/js/bootstrap.min.js"></script>
<script src="<?php echo Yii::$app->request->hostInfo;?>/public/js/pixel-admin.min.js"></script>
 <script src="<?php echo Yii::$app->request->hostInfo;?>/public/js/uploadPreview.js"></script>

<script type="text/javascript">
    init.push(function () {
        //Javascript code here
    
    })
    window.PixelAdmin.start(init);
</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>