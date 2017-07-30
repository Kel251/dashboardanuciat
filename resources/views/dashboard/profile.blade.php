@extends('dashboard.layouts.framep')
@section('content')
<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="{{ URL::action('DashboardController@index') }}">Inicio</a>
                </li>

                <li>
                    <a href="{{ URL::action('DashboardController@info') }}">Usuarios del website</a>
                </li>
                <li class="active">Perfil de usuario</li>
            </ul><!-- /.breadcrumb -->

            <div class="nav-search" id="nav-search">
                <form class="form-search">
                    <span class="input-icon">
                        <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                        <i class="ace-icon fa fa-search nav-search-icon"></i>
                    </span>
                </form>
            </div><!-- /.nav-search -->
        </div>

        <div class="page-content">
            <div class="ace-settings-container" id="ace-settings-container">
                <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                    <i class="ace-icon fa fa-cog bigger-130"></i>
                </div>

                <div class="ace-settings-box clearfix" id="ace-settings-box">
                    <div class="pull-left width-50">
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

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
                            <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
                            <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
                            <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
                            <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
                            <label class="lbl" for="ace-settings-add-container">
                                Inside
                                <b>.container</b>
                            </label>
                        </div>
                    </div><!-- /.pull-left -->

                    <div class="pull-left width-50">
                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
                            <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
                            <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                        </div>

                        <div class="ace-settings-item">
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
                            <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
                        </div>
                    </div><!-- /.pull-left -->
                </div><!-- /.ace-settings-box -->
            </div><!-- /.ace-settings-container -->

            <div class="page-header">
                <h1>
                    Perfil de usuario
<!--                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        3 styles with inline editable feature
                    </small>-->
                </h1>
            </div><!-- /.page-header -->

            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <!--                    <div class="clearfix">
                                            <div class="pull-left alert alert-success no-margin alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    <i class="ace-icon fa fa-times"></i>
                                                </button>
                    
                                                <i class="ace-icon fa fa-umbrella bigger-120 blue"></i>
                                                Click on the image below or on profile fields to edit them ...
                                            </div>
                    
                                            <div class="pull-right">
                                                <span class="green middle bolder">Choose profile: &nbsp;</span>
                    
                                                <div class="btn-toolbar inline middle no-margin">
                                                    <div data-toggle="buttons" class="btn-group no-margin">
                                                        <label class="btn btn-sm btn-yellow active">
                                                            <span class="bigger-110">1</span>
                    
                                                            <input type="radio" value="1" />
                                                        </label>
                    
                                                        <label class="btn btn-sm btn-yellow">
                                                            <span class="bigger-110">2</span>
                    
                                                            <input type="radio" value="2" />
                                                        </label>
                    
                                                        <label class="btn btn-sm btn-yellow">
                                                            <span class="bigger-110">3</span>
                    
                                                            <input type="radio" value="3" />
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->

                    <div class="hr dotted"></div>

                    <!--                    <div>
                                            <div id="user-profile-1" class="user-profile row">
                                                <div class="col-xs-12 col-sm-3 center">
                                                    <div>
                                                        <span class="profile-picture">
                                                            <img id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="{{ asset('assets/images/avatars/profile-pic.jpg') }}" />
                                                        </span>
                    
                                                        <div class="space-4"></div>
                    
                                                        <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                            <div class="inline position-relative">
                                                                <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                                                                    <i class="ace-icon fa fa-circle light-green"></i>
                                                                    &nbsp;
                                                                    <span class="white">Alex M. Doe</span>
                                                                </a>
                    
                                                                <ul class="align-left dropdown-menu dropdown-caret dropdown-lighter">
                                                                    <li class="dropdown-header"> Change Status </li>
                    
                                                                    <li>
                                                                        <a href="#">
                                                                            <i class="ace-icon fa fa-circle green"></i>
                                                                            &nbsp;
                                                                            <span class="green">Available</span>
                                                                        </a>
                                                                    </li>
                    
                                                                    <li>
                                                                        <a href="#">
                                                                            <i class="ace-icon fa fa-circle red"></i>
                                                                            &nbsp;
                                                                            <span class="red">Busy</span>
                                                                        </a>
                                                                    </li>
                    
                                                                    <li>
                                                                        <a href="#">
                                                                            <i class="ace-icon fa fa-circle grey"></i>
                                                                            &nbsp;
                                                                            <span class="grey">Invisible</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                    
                                                    <div class="space-6"></div>
                    
                                                    <div class="profile-contact-info">
                                                        <div class="profile-contact-links align-left">
                                                            <a href="#" class="btn btn-link">
                                                                <i class="ace-icon fa fa-plus-circle bigger-120 green"></i>
                                                                Add as a friend
                                                            </a>
                    
                                                            <a href="#" class="btn btn-link">
                                                                <i class="ace-icon fa fa-envelope bigger-120 pink"></i>
                                                                Send a message
                                                            </a>
                    
                                                            <a href="#" class="btn btn-link">
                                                                <i class="ace-icon fa fa-globe bigger-125 blue"></i>
                                                                www.alexdoe.com
                                                            </a>
                                                        </div>
                    
                                                        <div class="space-6"></div>
                    
                                                        <div class="profile-social-links align-center">
                                                            <a href="#" class="tooltip-info" title="" data-original-title="Visit my Facebook">
                                                                <i class="middle ace-icon fa fa-facebook-square fa-2x blue"></i>
                                                            </a>
                    
                                                            <a href="#" class="tooltip-info" title="" data-original-title="Visit my Twitter">
                                                                <i class="middle ace-icon fa fa-twitter-square fa-2x light-blue"></i>
                                                            </a>
                    
                                                            <a href="#" class="tooltip-error" title="" data-original-title="Visit my Pinterest">
                                                                <i class="middle ace-icon fa fa-pinterest-square fa-2x red"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                    
                                                    <div class="hr hr12 dotted"></div>
                    
                                                    <div class="clearfix">
                                                        <div class="grid2">
                                                            <span class="bigger-175 blue">25</span>
                    
                                                            <br />
                                                            Followers
                                                        </div>
                    
                                                        <div class="grid2">
                                                            <span class="bigger-175 blue">12</span>
                    
                                                            <br />
                                                            Following
                                                        </div>
                                                    </div>
                    
                                                    <div class="hr hr16 dotted"></div>
                                                </div>
                    
                                                <div class="col-xs-12 col-sm-9">
                                                    <div class="center">
                                                        <span class="btn btn-app btn-sm btn-light no-hover">
                                                            <span class="line-height-1 bigger-170 blue"> 1,411 </span>
                    
                                                            <br />
                                                            <span class="line-height-1 smaller-90"> Views </span>
                                                        </span>
                    
                                                        <span class="btn btn-app btn-sm btn-yellow no-hover">
                                                            <span class="line-height-1 bigger-170"> 32 </span>
                    
                                                            <br />
                                                            <span class="line-height-1 smaller-90"> Followers </span>
                                                        </span>
                    
                                                        <span class="btn btn-app btn-sm btn-pink no-hover">
                                                            <span class="line-height-1 bigger-170"> 4 </span>
                    
                                                            <br />
                                                            <span class="line-height-1 smaller-90"> Projects </span>
                                                        </span>
                    
                                                        <span class="btn btn-app btn-sm btn-grey no-hover">
                                                            <span class="line-height-1 bigger-170"> 23 </span>
                    
                                                            <br />
                                                            <span class="line-height-1 smaller-90"> Reviews </span>
                                                        </span>
                    
                                                        <span class="btn btn-app btn-sm btn-success no-hover">
                                                            <span class="line-height-1 bigger-170"> 7 </span>
                    
                                                            <br />
                                                            <span class="line-height-1 smaller-90"> Albums </span>
                                                        </span>
                    
                                                        <span class="btn btn-app btn-sm btn-primary no-hover">
                                                            <span class="line-height-1 bigger-170"> 55 </span>
                    
                                                            <br />
                                                            <span class="line-height-1 smaller-90"> Contacts </span>
                                                        </span>
                                                    </div>
                    
                                                    <div class="space-12"></div>
                    
                                                    <div class="profile-user-info profile-user-info-striped">
                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Username </div>
                    
                                                            <div class="profile-info-value">
                                                                <span class="editable" id="username">alexdoe</span>
                                                            </div>
                                                        </div>
                    
                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Location </div>
                    
                                                            <div class="profile-info-value">
                                                                <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                                <span class="editable" id="country">Netherlands</span>
                                                                <span class="editable" id="city">Amsterdam</span>
                                                            </div>
                                                        </div>
                    
                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Age </div>
                    
                                                            <div class="profile-info-value">
                                                                <span class="editable" id="age">38</span>
                                                            </div>
                                                        </div>
                    
                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Joined </div>
                    
                                                            <div class="profile-info-value">
                                                                <span class="editable" id="signup">2010/06/20</span>
                                                            </div>
                                                        </div>
                    
                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> Last Online </div>
                    
                                                            <div class="profile-info-value">
                                                                <span class="editable" id="login">3 hours ago</span>
                                                            </div>
                                                        </div>
                    
                                                        <div class="profile-info-row">
                                                            <div class="profile-info-name"> About Me </div>
                    
                                                            <div class="profile-info-value">
                                                                <span class="editable" id="about">Editable as WYSIWYG</span>
                                                            </div>
                                                        </div>
                                                    </div>
                    
                                                    <div class="space-20"></div>
                    
                                                    <div class="widget-box transparent">
                                                        <div class="widget-header widget-header-small">
                                                            <h4 class="widget-title blue smaller">
                                                                <i class="ace-icon fa fa-rss orange"></i>
                                                                Recent Activities
                                                            </h4>
                    
                                                            <div class="widget-toolbar action-buttons">
                                                                <a href="#" data-action="reload">
                                                                    <i class="ace-icon fa fa-refresh blue"></i>
                                                                </a>
                                                                &nbsp;
                                                                <a href="#" class="pink">
                                                                    <i class="ace-icon fa fa-trash-o"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                    
                                                        <div class="widget-body">
                                                            <div class="widget-main padding-8">
                                                                <div id="profile-feed-1" class="profile-feed">
                                                                    <div class="profile-activity clearfix">
                                                                        <div>
                                                                            <img class="pull-left" alt="Alex Doe's avatar" src="{{ asset('assets/images/avatars/avatar5.png') }}" />
                                                                            <a class="user" href="#"> Alex Doe </a>
                                                                            changed his profile photo.
                                                                            <a href="#">Take a look</a>
                    
                                                                            <div class="time">
                                                                                <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                                                an hour ago
                                                                            </div>
                                                                        </div>
                    
                                                                        <div class="tools action-buttons">
                                                                            <a href="#" class="blue">
                                                                                <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                                            </a>
                    
                                                                            <a href="#" class="red">
                                                                                <i class="ace-icon fa fa-times bigger-125"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                    
                                                                    <div class="profile-activity clearfix">
                                                                        <div>
                                                                            <img class="pull-left" alt="Susan Smith's avatar" src="{{ asset('assets/images/avatars/avatar1.png') }}" />
                                                                            <a class="user" href="#"> Susan Smith </a>
                    
                                                                            is now friends with Alex Doe.
                                                                            <div class="time">
                                                                                <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                                                2 hours ago
                                                                            </div>
                                                                        </div>
                    
                                                                        <div class="tools action-buttons">
                                                                            <a href="#" class="blue">
                                                                                <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                                            </a>
                    
                                                                            <a href="#" class="red">
                                                                                <i class="ace-icon fa fa-times bigger-125"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                    
                                                                    <div class="profile-activity clearfix">
                                                                        <div>
                                                                            <i class="pull-left thumbicon fa fa-check btn-success no-hover"></i>
                                                                            <a class="user" href="#"> Alex Doe </a>
                                                                            joined
                                                                            <a href="#">Country Music</a>
                    
                                                                            group.
                                                                            <div class="time">
                                                                                <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                                                5 hours ago
                                                                            </div>
                                                                        </div>
                    
                                                                        <div class="tools action-buttons">
                                                                            <a href="#" class="blue">
                                                                                <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                                            </a>
                    
                                                                            <a href="#" class="red">
                                                                                <i class="ace-icon fa fa-times bigger-125"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                    
                                                                    <div class="profile-activity clearfix">
                                                                        <div>
                                                                            <i class="pull-left thumbicon fa fa-picture-o btn-info no-hover"></i>
                                                                            <a class="user" href="#"> Alex Doe </a>
                                                                            uploaded a new photo.
                                                                            <a href="#">Take a look</a>
                    
                                                                            <div class="time">
                                                                                <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                                                5 hours ago
                                                                            </div>
                                                                        </div>
                    
                                                                        <div class="tools action-buttons">
                                                                            <a href="#" class="blue">
                                                                                <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                                            </a>
                    
                                                                            <a href="#" class="red">
                                                                                <i class="ace-icon fa fa-times bigger-125"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                    
                                                                    <div class="profile-activity clearfix">
                                                                        <div>
                                                                            <img class="pull-left" alt="David Palms's avatar" src="assets/images/avatars/avatar4.png" />
                                                                            <a class="user" href="#"> David Palms </a>
                    
                                                                            left a comment on Alex's wall.
                                                                            <div class="time">
                                                                                <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                                                8 hours ago
                                                                            </div>
                                                                        </div>
                    
                                                                        <div class="tools action-buttons">
                                                                            <a href="#" class="blue">
                                                                                <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                                            </a>
                    
                                                                            <a href="#" class="red">
                                                                                <i class="ace-icon fa fa-times bigger-125"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                    
                                                                    <div class="profile-activity clearfix">
                                                                        <div>
                                                                            <i class="pull-left thumbicon fa fa-pencil-square-o btn-pink no-hover"></i>
                                                                            <a class="user" href="#"> Alex Doe </a>
                                                                            published a new blog post.
                                                                            <a href="#">Read now</a>
                    
                                                                            <div class="time">
                                                                                <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                                                11 hours ago
                                                                            </div>
                                                                        </div>
                    
                                                                        <div class="tools action-buttons">
                                                                            <a href="#" class="blue">
                                                                                <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                                            </a>
                    
                                                                            <a href="#" class="red">
                                                                                <i class="ace-icon fa fa-times bigger-125"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                    
                                                                    <div class="profile-activity clearfix">
                                                                        <div>
                                                                            <img class="pull-left" alt="Alex Doe's avatar" src="assets/images/avatars/avatar5.png" />
                                                                            <a class="user" href="#"> Alex Doe </a>
                    
                                                                            upgraded his skills.
                                                                            <div class="time">
                                                                                <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                                                12 hours ago
                                                                            </div>
                                                                        </div>
                    
                                                                        <div class="tools action-buttons">
                                                                            <a href="#" class="blue">
                                                                                <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                                            </a>
                    
                                                                            <a href="#" class="red">
                                                                                <i class="ace-icon fa fa-times bigger-125"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                    
                                                                    <div class="profile-activity clearfix">
                                                                        <div>
                                                                            <i class="pull-left thumbicon fa fa-key btn-info no-hover"></i>
                                                                            <a class="user" href="#"> Alex Doe </a>
                    
                                                                            logged in.
                                                                            <div class="time">
                                                                                <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                                                12 hours ago
                                                                            </div>
                                                                        </div>
                    
                                                                        <div class="tools action-buttons">
                                                                            <a href="#" class="blue">
                                                                                <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                                            </a>
                    
                                                                            <a href="#" class="red">
                                                                                <i class="ace-icon fa fa-times bigger-125"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                    
                                                                    <div class="profile-activity clearfix">
                                                                        <div>
                                                                            <i class="pull-left thumbicon fa fa-power-off btn-inverse no-hover"></i>
                                                                            <a class="user" href="#"> Alex Doe </a>
                    
                                                                            logged out.
                                                                            <div class="time">
                                                                                <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                                                16 hours ago
                                                                            </div>
                                                                        </div>
                    
                                                                        <div class="tools action-buttons">
                                                                            <a href="#" class="blue">
                                                                                <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                                            </a>
                    
                                                                            <a href="#" class="red">
                                                                                <i class="ace-icon fa fa-times bigger-125"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                    
                                                                    <div class="profile-activity clearfix">
                                                                        <div>
                                                                            <i class="pull-left thumbicon fa fa-key btn-info no-hover"></i>
                                                                            <a class="user" href="#"> Alex Doe </a>
                    
                                                                            logged in.
                                                                            <div class="time">
                                                                                <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                                                16 hours ago
                                                                            </div>
                                                                        </div>
                    
                                                                        <div class="tools action-buttons">
                                                                            <a href="#" class="blue">
                                                                                <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                                            </a>
                    
                                                                            <a href="#" class="red">
                                                                                <i class="ace-icon fa fa-times bigger-125"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                    
                                                    <div class="hr hr2 hr-double"></div>
                    
                                                    <div class="space-6"></div>
                    
                                                    <div class="center">
                                                        <button type="button" class="btn btn-sm btn-primary btn-white btn-round">
                                                            <i class="ace-icon fa fa-rss bigger-150 middle orange2"></i>
                                                            <span class="bigger-110">View more activities</span>
                    
                                                            <i class="icon-on-right ace-icon fa fa-arrow-right"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->

                    <div>
                        <div id="user-profile-2" class="user-profile">
                            <div class="tabbable">
                                <ul class="nav nav-tabs padding-18">
                                    <li class="active">
                                        <a data-toggle="tab" href="#home">
                                            <i class="green ace-icon fa fa-user bigger-120"></i>
                                            Perfil
                                        </a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" href="#feed">
                                            <i class="orange ace-icon fa fa-rss bigger-120"></i>
                                            Actividad dentro del sitio
                                        </a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" href="#friends">
                                            <i class="blue ace-icon fa fa-users bigger-120"></i>
                                            Seguidores
                                        </a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" href="#pictures">
                                            <i class="pink ace-icon fa fa-picture-o bigger-120"></i>
                                            Imagenes posteadas
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content no-border padding-24">
                                    <div id="home" class="tab-pane in active">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-3 center">
                                                <span class="profile-picture">
                                                    @if($user->Foto_perfil != '')
                                                    <img class="editable img-responsive" alt="Alex's Avatar" id="avatar2" src="{{ asset('files/profile/'.$user->Foto_perfil) }}" />
                                                    @else
                                                    <img class="editable img-responsive" alt="Alex's Avatar" id="avatar2" src="{{ asset('files/profile/sombra.png') }}" />
                                                    @endif
                                                </span>

                                                <div class="space space-4"></div>

                                                <a href="#" class="btn btn-sm btn-block btn-success">
                                                    <i class="ace-icon fa fa-plus-circle bigger-120"></i>
                                                    <span class="bigger-110">Marcar este usuario</span>
                                                </a>

                                                <a href="#" class="btn btn-sm btn-block btn-primary">
                                                    <i class="ace-icon fa fa-envelope-o bigger-110"></i>
                                                    <span class="bigger-110">Envíar un mensaje</span>
                                                </a>
                                            </div><!-- /.col -->

                                            <div class="col-xs-12 col-sm-9">
                                                <h4 class="blue">
                                                    <span class="middle">{{ $user->Nom_user.' '.$user->App_user  }}</span>
                                                    <span class="label label-purple arrowed-in-right">
                                                        <i class="ace-icon fa fa-circle smaller-80 align-middle"></i>
                                                        online
                                                    </span>
                                                </h4>

                                                <div class="profile-user-info">
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Username </div>

                                                        <div class="profile-info-value">
                                                            <span>{{ $user->username }}</span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Ubicación </div>

                                                        <div class="profile-info-value">
                                                            <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                            <span> @if(isset($estado)) {{ $estado->Nom_est }} @endif</span>
                                                            <span> @if(isset($mun)){{ $mun->Nom_mun }} @endif</span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Age </div>

                                                        <div class="profile-info-value">
                                                            <span>38</span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Registrado </div>

                                                        <div class="profile-info-value">
                                                            <span>{{ $user->created }}</span>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Ultima Conexión </div>

                                                        <div class="profile-info-value">
                                                            <span>{{ $user->last_login }}</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="hr hr-8 dotted"></div>

                                                <div class="profile-user-info">
                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name"> Website </div>

                                                        <div class="profile-info-value">
                                                            <a href="{{ $user->Website }}" target="_blank">{{ $user->Website }}</a>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name">
                                                            <i class="middle ace-icon fa fa-facebook-square bigger-150 blue"></i>
                                                        </div>

                                                        <div class="profile-info-value">
                                                            <a href="{{ $user->Social }}" target="_blank">Encuetrame en Facebook</a>
                                                        </div>
                                                    </div>

                                                    <div class="profile-info-row">
                                                        <div class="profile-info-name">
                                                            <i class="middle ace-icon fa fa-twitter-square bigger-150 light-blue"></i>
                                                        </div>

                                                        <div class="profile-info-value">
                                                            <a href="#">Follow me on Twitter</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.col -->
                                        </div><!-- /.row -->

                                        <div class="space-20"></div>

                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="widget-box transparent">
                                                    <div class="widget-header widget-header-small">
                                                        <h4 class="widget-title smaller">
                                                            <i class="ace-icon fa fa-check-square-o bigger-110"></i>
                                                            Acerca del usuario:
                                                        </h4>
                                                    </div>

                                                    <div class="widget-body">
                                                        <div class="widget-main">
                                                            <p>
                                                                {{ $user->Acerca }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                 
                                                <div id='googleMap'></div>
                                                <img src="{{ asset('C:/Users/lgeo_/Pictures/9h8lb9.jpg') }}">
                                                <input type="hidden" value="<?php foreach($ubicacion as $ub){ echo $ub->Lat; }?>" id="lat">
                                                <input type="hidden" value="<?php foreach($ubicacion as $ub){ echo $ub->Lng; }?>" id="long">
                        

                        
                                            </div>

                                            <div class="col-xs-12 col-sm-6">
                                                <div class="widget-box transparent">
                                                    <div class="widget-header widget-header-small header-color-blue2">
                                                        <h4 class="widget-title smaller">
                                                            <i class="ace-icon fa fa-lightbulb-o bigger-120"></i>
                                                            Actividad en el sitio
                                                        </h4>
                                                    </div>

                                                    <div class="widget-body">
                                                        <div class="widget-main padding-16">
                                                            <div class="clearfix">
                                                                <div class="grid3 center">
                                                                    <div class="easy-pie-chart percentage" data-percent="55" data-color="#CA5952">
                                                                        <span class="percent">45</span>%
                                                                    </div>

                                                                    <div class="space-2"></div>
                                                                    Anuncios Publicados
                                                                </div>

                                                                <div class="grid3 center">
                                                                    <div class="center easy-pie-chart percentage" data-percent="90" data-color="#59A84B">
                                                                        <span class="percent">90</span>%
                                                                    </div>

                                                                    <div class="space-2"></div>
                                                                    Interacción entre anuncios
                                                                </div>

                                                                <div class="grid3 center">
                                                                    <div class="center easy-pie-chart percentage" data-percent="80" data-color="#9585BF">
                                                                        <span class="percent">80</span>%
                                                                    </div>

                                                                    <div class="space-2"></div>
                                                                    Mensajes envíados
                                                                </div>
                                                            </div>

                                                            <div class="hr hr-16"></div>

<!--                                                            <div class="profile-skills">
                                                                <div class="progress">
                                                                    <div class="progress-bar" style="width:80%">
                                                                        <span class="pull-left">HTML5 & CSS3</span>
                                                                        <span class="pull-right">80%</span>
                                                                    </div>
                                                                </div>

                                                                <div class="progress">
                                                                    <div class="progress-bar progress-bar-success" style="width:72%">
                                                                        <span class="pull-left">Javascript & jQuery</span>

                                                                        <span class="pull-right">72%</span>
                                                                    </div>
                                                                </div>

                                                                <div class="progress">
                                                                    <div class="progress-bar progress-bar-purple" style="width:70%">
                                                                        <span class="pull-left">PHP & MySQL</span>

                                                                        <span class="pull-right">70%</span>
                                                                    </div>
                                                                </div>

                                                                <div class="progress">
                                                                    <div class="progress-bar progress-bar-warning" style="width:50%">
                                                                        <span class="pull-left">Wordpress</span>

                                                                        <span class="pull-right">50%</span>
                                                                    </div>
                                                                </div>

                                                                <div class="progress">
                                                                    <div class="progress-bar progress-bar-danger" style="width:38%">
                                                                        <span class="pull-left">Photoshop</span>

                                                                        <span class="pull-right">38%</span>
                                                                    </div>
                                                                </div>
                                                            </div>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div><!-- /#home -->

                                    <div id="feed" class="tab-pane">
                                       <!-- <div class="profile-feed row">
                                            <div class="col-sm-6">
                                                <div class="profile-activity clearfix">
                                                    <div>
                                                        <img class="pull-left" alt="Alex Doe's avatar" src="{{ asset('assets/images/avatars/avatar5.png') }}" />
                                                        <a class="user" href="#"> Alex Doe </a>
                                                        changed his profile photo.
                                                        <a href="#">Take a look</a>

                                                        <div class="time">
                                                            <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                            an hour ago
                                                        </div>
                                                    </div>

                                                    <div class="tools action-buttons">
                                                        <a href="#" class="blue">
                                                            <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                        </a>

                                                        <a href="#" class="red">
                                                            <i class="ace-icon fa fa-times bigger-125"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="profile-activity clearfix">
                                                    <div>
                                                        <img class="pull-left" alt="Susan Smith's avatar" src="{{ asset('assets/images/avatars/avatar1.png') }}" />
                                                        <a class="user" href="#"> Susan Smith </a>

                                                        is now friends with Alex Doe.
                                                        <div class="time">
                                                            <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                            2 hours ago
                                                        </div>
                                                    </div>

                                                    <div class="tools action-buttons">
                                                        <a href="#" class="blue">
                                                            <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                        </a>

                                                        <a href="#" class="red">
                                                            <i class="ace-icon fa fa-times bigger-125"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="profile-activity clearfix">
                                                    <div>
                                                        <i class="pull-left thumbicon fa fa-check btn-success no-hover"></i>
                                                        <a class="user" href="#"> Alex Doe </a>
                                                        joined
                                                        <a href="#">Country Music</a>

                                                        group.
                                                        <div class="time">
                                                            <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                            5 hours ago
                                                        </div>
                                                    </div>

                                                    <div class="tools action-buttons">
                                                        <a href="#" class="blue">
                                                            <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                        </a>

                                                        <a href="#" class="red">
                                                            <i class="ace-icon fa fa-times bigger-125"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="profile-activity clearfix">
                                                    <div>
                                                        <i class="pull-left thumbicon fa fa-picture-o btn-info no-hover"></i>
                                                        <a class="user" href="#"> Alex Doe </a>
                                                        uploaded a new photo.
                                                        <a href="#">Take a look</a>

                                                        <div class="time">
                                                            <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                            5 hours ago
                                                        </div>
                                                    </div>

                                                    <div class="tools action-buttons">
                                                        <a href="#" class="blue">
                                                            <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                        </a>

                                                        <a href="#" class="red">
                                                            <i class="ace-icon fa fa-times bigger-125"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="profile-activity clearfix">
                                                    <div>
                                                        <img class="pull-left" alt="David Palms's avatar" src="{{ asset('assets/images/avatars/avatar4.png') }}" />
                                                        <a class="user" href="#"> David Palms </a>

                                                        left a comment on Alex's wall.
                                                        <div class="time">
                                                            <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                            8 hours ago
                                                        </div>
                                                    </div>

                                                    <div class="tools action-buttons">
                                                        <a href="#" class="blue">
                                                            <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                        </a>

                                                        <a href="#" class="red">
                                                            <i class="ace-icon fa fa-times bigger-125"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div><!-- /.col --

                                            <div class="col-sm-6">
                                                <div class="profile-activity clearfix">
                                                    <div>
                                                        <i class="pull-left thumbicon fa fa-pencil-square-o btn-pink no-hover"></i>
                                                        <a class="user" href="#"> Alex Doe </a>
                                                        published a new blog post.
                                                        <a href="#">Read now</a>

                                                        <div class="time">
                                                            <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                            11 hours ago
                                                        </div>
                                                    </div>

                                                    <div class="tools action-buttons">
                                                        <a href="#" class="blue">
                                                            <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                        </a>

                                                        <a href="#" class="red">
                                                            <i class="ace-icon fa fa-times bigger-125"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="profile-activity clearfix">
                                                    <div>
                                                        <img class="pull-left" alt="Alex Doe's avatar" src="{{ asset('assets/images/avatars/avatar5.png') }}" />
                                                        <a class="user" href="#"> Alex Doe </a>

                                                        upgraded his skills.
                                                        <div class="time">
                                                            <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                            12 hours ago
                                                        </div>
                                                    </div>

                                                    <div class="tools action-buttons">
                                                        <a href="#" class="blue">
                                                            <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                        </a>

                                                        <a href="#" class="red">
                                                            <i class="ace-icon fa fa-times bigger-125"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="profile-activity clearfix">
                                                    <div>
                                                        <i class="pull-left thumbicon fa fa-key btn-info no-hover"></i>
                                                        <a class="user" href="#"> Alex Doe </a>

                                                        logged in.
                                                        <div class="time">
                                                            <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                            12 hours ago
                                                        </div>
                                                    </div>

                                                    <div class="tools action-buttons">
                                                        <a href="#" class="blue">
                                                            <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                        </a>

                                                        <a href="#" class="red">
                                                            <i class="ace-icon fa fa-times bigger-125"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="profile-activity clearfix">
                                                    <div>
                                                        <i class="pull-left thumbicon fa fa-power-off btn-inverse no-hover"></i>
                                                        <a class="user" href="#"> Alex Doe </a>

                                                        logged out.
                                                        <div class="time">
                                                            <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                            16 hours ago
                                                        </div>
                                                    </div>

                                                    <div class="tools action-buttons">
                                                        <a href="#" class="blue">
                                                            <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                        </a>

                                                        <a href="#" class="red">
                                                            <i class="ace-icon fa fa-times bigger-125"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="profile-activity clearfix">
                                                    <div>
                                                        <i class="pull-left thumbicon fa fa-key btn-info no-hover"></i>
                                                        <a class="user" href="#"> Alex Doe </a>

                                                        logged in.
                                                        <div class="time">
                                                            <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                            16 hours ago
                                                        </div>
                                                    </div>

                                                    <div class="tools action-buttons">
                                                        <a href="#" class="blue">
                                                            <i class="ace-icon fa fa-pencil bigger-125"></i>
                                                        </a>

                                                        <a href="#" class="red">
                                                            <i class="ace-icon fa fa-times bigger-125"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div><!-- /.col --
                                        </div><!-- /.row 

                                        <div class="space-12"></div>

                                        <div class="center">
                                            <button type="button" class="btn btn-sm btn-primary btn-white btn-round">
                                                <i class="ace-icon fa fa-rss bigger-150 middle orange2"></i>
                                                <span class="bigger-110">View more activities</span>

                                                <i class="icon-on-right ace-icon fa fa-arrow-right"></i>
                                            </button>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-12">
                                                <table id="simple-table" class="table  table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                    <!--                                        <th class="center">
                                                                <label class="pos-rel">
                                                                    <input type="checkbox" class="ace" />
                                                                    <span class="lbl"></span>
                                                                </label>
                                                            </th>
                                                            <th class="detail-col">Details</th>--
                                                            <th>Anuncio</th>
                                                            <th>Descripción</th>
                                                            <th class="hidden-480">Clicks</th>

                                                            <th>
                                                                <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                                                Publicado
                                                            </th>
                                                            <th class="hidden-480">Status</th>

                                                            <th></th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        @if(isset($anuncios))
                                                        @foreach($anuncios as $anun)
                                                        <tr>
                    <!--                                        <td class="center">
                                                                <label class="pos-rel">
                                                                    <input type="checkbox" class="ace" />
                                                                    <span class="lbl"></span>
                                                                </label>
                                                            </td>
                    
                                                            <td class="center">
                                                                <div class="action-buttons">
                                                                    <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
                                                                        <i class="ace-icon fa fa-angle-double-down"></i>
                                                                        <span class="sr-only">Details</span>
                                                                    </a>
                                                                </div>
                                                            </td>--

                                                            <td style="width: 20%">
                                                                <a href="#">{{$anun->Anuncio}}</a>
                                                            </td>
                                                            <td style="width: 20%">{{$anun->Descripcion}}</td>
                                                            <td class="hidden-480">{{$anun->precio}}</td>
                                                            <td style="width: 20%">{{$anun->Fecha}}</td>

                                                            <td class="hidden-480">
                                                                <span class="label label-sm label-warning">Expiring</span>
                                                            </td>

                                                            <td>
                                                                <div class="hidden-sm hidden-xs btn-group">
                                                                    <button class="btn btn-xs btn-success">
                                                                        <i class="ace-icon fa fa-check bigger-120"></i>
                                                                    </button>

                                                                    <!--<button class="btn btn-xs btn-info">-->
                                                                        <!--<i class="ace-icon fa fa-pencil bigger-120"></i>--
                                                                    {!!link_to_route('edit', $title = 'Editar', $parameters = [$anun->Id_anun], $attributes = ['style'=>'color:white; text-decoration:none;','class'=>'btn btn-xs btn-info']);!!}
                                                                    <!--</button>--

                                                                    {!!Form::model($anun,['route'=>['destroy',$anun->Id_anun],'method'=>'DELETE'])!!}
                                                                    {!!Form::submit('Eliminar',['class'=>'btn btn-xs btn-danger','type'=>'button'])!!}
                                                                    {!!Form::close()!!}
                                                                    <!--                                                <button class="btn btn-xs btn-danger ">
                                                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                                    </button>--

                                                                    <button class="btn btn-xs btn-warning">
                                                                        <i class="ace-icon fa fa-flag bigger-120"></i>
                                                                    </button>
                                                                </div>

                                                                <div class="hidden-md hidden-lg">
                                                                    <div class="inline pos-rel">
                                                                        <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                            <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                                                        </button>

                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                            <li>
                                                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                    <span class="blue">
                                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                    </span>
                                                                                </a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                    <span class="green">
                                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                    </span>
                                                                                </a>
                                                                            </li>

                                                                            <li>
                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                    <span class="red">
                                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
<!--                                    <tr class="detail-row">
                                        <td colspan="8">
                                            <div class="table-detail">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-2">
                                                        <div class="text-center">
                                                            <img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="assets/images/avatars/profile-pic.jpg" />
                                                            <br />
                                                            <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                                <div class="inline position-relative">
                                                                    <a class="user-title-label" href="#">
                                                                        <i class="ace-icon fa fa-circle light-green"></i>
                                                                        &nbsp;
                                                                        <span class="white">Alex M. Doe</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-7">
                                                        <div class="space visible-xs"></div>

                                                        <div class="profile-user-info profile-user-info-striped">
                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Username </div>

                                                                <div class="profile-info-value">
                                                                    <span>alexdoe</span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Location </div>

                                                                <div class="profile-info-value">
                                                                    <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                                    <span>Netherlands, Amsterdam</span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Age </div>

                                                                <div class="profile-info-value">
                                                                    <span>38</span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Joined </div>

                                                                <div class="profile-info-value">
                                                                    <span>2010/06/20</span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> Last Online </div>

                                                                <div class="profile-info-value">
                                                                    <span>3 hours ago</span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-info-row">
                                                                <div class="profile-info-name"> About Me </div>

                                                                <div class="profile-info-value">
                                                                    <span>Bio</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-3">
                                                        <div class="space visible-xs"></div>
                                                        <h4 class="header blue lighter less-margin">Send a message to Alex</h4>

                                                        <div class="space-6"></div>

                                                        <form>
                                                            <fieldset>
                                                                <textarea class="width-100" resize="none" placeholder="Type something…"></textarea>
                                                            </fieldset>

                                                            <div class="hr hr-dotted"></div>

                                                            <div class="clearfix">
                                                                <label class="pull-left">
                                                                    <input type="checkbox" class="ace" />
                                                                    <span class="lbl"> Email me a copy</span>
                                                                </label>

                                                                <button class="pull-right btn btn-sm btn-primary btn-white btn-round" type="button">
                                                                    Submit
                                                                    <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>--
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div><!-- /.span --
                                            { $anuncios->render( }}
                                            @endif
                                        </div><!-- /.row -->

                                        <div class="row">
                                            <div class="col-xs-12">
                                                <h3 class="header smaller lighter blue">Anuncios publicados</h3>

                                                <div class="clearfix">
                                                    <div class="pull-right tableTools-container"></div>
                                                </div>
                                                <div class="table-header">
                                                    Anuncios publicados
                                                </div>

                                                <!-- div.table-responsive -->

                                                <!-- div.dataTables_borderWrap -->
                                                <div>
                                                    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    <!--                                                                   
                                                                    <label class="pos-rel">
                                                                               <input type="checkbox" class="ace" />
                                                                                                                                        <span class="lbl"></span>
                                                                                                                                    </label>
                                                                    -->
                                                                    Titulo 
                                                                </th>
                                                                <th>Descripción</th>
                                                                <th>Costo</th>
                                                                <th class="hidden-480">Clicks</th>

                                                                <th>
                                                                    <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                                                    Fecha
                                                                </th>
                                                                <th class="hidden-480">Status</th>

                                                                <th></th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            @if(isset($anuncios))
                                                            @foreach($anuncios as $anun)
                                                            <tr>
                                                                <td style="width: 20%">
                                                                    <!--
                                                                    <label class="pos-rel">
                                                                        <input type="checkbox" class="ace" />
                                                                       <span class="lbl"></span>
                                                                    </label>
                                                                    -->
                                                                    <a href="#">{{$anun->Anuncio}}</a>
                                                                </td>

                                                                <td style="width: 20%">
                                                                    <a href="#">{{$anun->Descripcion }}</a>
                                                                </td>
                                                                <td style="width: 10%">${{$anun->precio}}</td>
                                                                <td class="hidden-480" style="width: 10%">{{$anun->Id_anun}}</td>
                                                                <td style="width: 20%">{{$anun->Fecha}}</td>

                                                                <td class="hidden-480">
                                                                    @if($anun->activo === 0)
                                                                    <span class="label label-sm label-success">{{$anun->activo}}- Activo</span>
                                                                    @elseif($anun->activo === 1)
                                                                    <span class="label label-sm label-warning">{{$anun->activo}}- Pendiente</span>
                                                                    @else
                                                                    <span class="label label-sm label-danger">{{$anun->activo}}- Bloqueado</span>
                                                                    @endif
                                                                </td>
                                                                <td></td>

<!--                                                                <td>
                                                                    <div class="hidden-sm hidden-xs action-buttons">
                                                                        <a class="blue" href="#" onclick="status({{$anun->Id_anun}})" >
                                                                            <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                                        </a>

                                                                        <a class="green" href="#">
                                                                            <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                                        </a>

                                                                        <a class="red" href="#">
                                                                            <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                        </a>
                                                                    </div>

                                                                    <div class="hidden-md hidden-lg">
                                                                        <div class="inline pos-rel">
                                                                            <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                            </button>

                                                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                <li>
                                                                                    <a onclick="status()" href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                                        <span class="blue">
                                                                                            <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>

                                                                                <li>
                                                                                    <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                                        <span class="green">
                                                                                            <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>

                                                                                <li>
                                                                                    <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                        <span class="red">
                                                                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </td>-->
                                                            </tr>
                                                            @endforeach
                                                            @endif
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /#feed -->

                                    <div id="friends" class="tab-pane">
                                        <div class="profile-users clearfix">
                                            @if(isset($followers))
                                            @foreach($followers as $fo)
                                            <?php $info = explode(" - ", $fo->info); ?>
                                            <div class="itemdiv memberdiv">
                                                <div class="inline pos-rel">
                                                    <div class="user">
                                                        <a href="#">
                                                            <img src="{{ asset('files/profile/'.$info[1]) }}" alt="Bob Doe's avatar" />
                                                        </a>
                                                    </div>

                                                    <div class="body">
                                                        <div class="name">
                                                            <a href="#">
                                                                <span class="user-status status-online"></span>
                                                                {{ $info[0] }}
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="popover">
                                                        <div class="arrow"></div>

                                                        <div class="popover-content">
                                                            <div class="bolder">Content Editor</div>

                                                            <div class="time">
                                                                <i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
                                                                <span class="green"> 20 mins ago </span>
                                                            </div>

                                                            <div class="hr dotted hr-8"></div>

                                                            <div class="tools action-buttons">
                                                                <a href="#">
                                                                    <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                                                </a>

                                                                <a href="#">
                                                                    <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                                                </a>

                                                                <a href="#">
                                                                    <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            @endif
                                        </div>

                                        <div class="hr hr10 hr-double"></div>

                                        <ul class="pager pull-right">
                                            <li class="previous disabled">
                                                <a href="#">&larr; Prev</a>
                                            </li>

                                            <li class="next">
                                                <a href="#">Next &rarr;</a>
                                            </li>
                                        </ul>
                                    </div><!-- /#friends -->

                                    <div id="pictures" class="tab-pane">
                                        <ul class="ace-thumbnails">
                                            @if(isset($imagenes))
                                            @foreach($imagenes as $img)
                                            <li>
                                                <a href="#" data-rel="colorbox">
                                                    <img width="150px" height="150px" src="{{ asset('files/'.$img->nom_img) }}" />
                                                    <div class="text">
                                                        <div class="inner">Sample Caption on Hover</div>
                                                    </div>
                                                </a>

                                                <div class="tools tools-bottom">
                                                    <a href="#">
                                                        <i class="ace-icon fa fa-link"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-paperclip"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-pencil"></i>
                                                    </a>

                                                    <a href="#">
                                                        <i class="ace-icon fa fa-times red"></i>
                                                    </a>
                                                </div>
                                            </li>
                                            @endforeach
                                            @endif
                                        </ul>
                                    </div><!-- /#pictures -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--                    <div class="hide">
                                            <div id="user-profile-3" class="user-profile row">
                                                <div class="col-sm-offset-1 col-sm-10">
                                                    <div class="well well-sm">
                                                         -
                                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                        &nbsp; 
                                                        <div class="inline middle blue bigger-110"> Your profile is 70% complete </div>
                    
                                                        &nbsp; &nbsp; &nbsp;
                                                        <div style="width:200px;" data-percent="70%" class="inline middle no-margin progress progress-striped active pos-rel">
                                                            <div class="progress-bar progress-bar-success" style="width:70%"></div>
                                                        </div>
                                                    </div> /.well 
                    
                                                    <div class="space"></div>
                    
                                                    <form class="form-horizontal">
                                                        <div class="tabbable">
                                                            <ul class="nav nav-tabs padding-16">
                                                                <li class="active">
                                                                    <a data-toggle="tab" href="#edit-basic">
                                                                        <i class="green ace-icon fa fa-pencil-square-o bigger-125"></i>
                                                                        Basic Info
                                                                    </a>
                                                                </li>
                    
                                                                <li>
                                                                    <a data-toggle="tab" href="#edit-settings">
                                                                        <i class="purple ace-icon fa fa-cog bigger-125"></i>
                                                                        Settings
                                                                    </a>
                                                                </li>
                    
                                                                <li>
                                                                    <a data-toggle="tab" href="#edit-password">
                                                                        <i class="blue ace-icon fa fa-key bigger-125"></i>
                                                                        Password
                                                                    </a>
                                                                </li>
                                                            </ul>
                    
                                                            <div class="tab-content profile-edit-tab-content">
                                                                <div id="edit-basic" class="tab-pane in active">
                                                                    <h4 class="header blue bolder smaller">General</h4>
                    
                                                                    <div class="row">
                                                                        <div class="col-xs-12 col-sm-4">
                                                                            <input type="file" />
                                                                        </div>
                    
                                                                        <div class="vspace-12-sm"></div>
                    
                                                                        <div class="col-xs-12 col-sm-8">
                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 control-label no-padding-right" for="form-field-username">Username</label>
                    
                                                                                <div class="col-sm-8">
                                                                                    <input class="col-xs-12 col-sm-10" type="text" id="form-field-username" placeholder="Username" value="alexdoe" />
                                                                                </div>
                                                                            </div>
                    
                                                                            <div class="space-4"></div>
                    
                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 control-label no-padding-right" for="form-field-first">Name</label>
                    
                                                                                <div class="col-sm-8">
                                                                                    <input class="input-small" type="text" id="form-field-first" placeholder="First Name" value="Alex" />
                                                                                    <input class="input-small" type="text" id="form-field-last" placeholder="Last Name" value="Doe" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                    
                                                                    <hr />
                                                                    <div class="form-group">
                                                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-date">Birth Date</label>
                    
                                                                        <div class="col-sm-9">
                                                                            <div class="input-medium">
                                                                                <div class="input-group">
                                                                                    <input class="input-medium date-picker" id="form-field-date" type="text" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" />
                                                                                    <span class="input-group-addon">
                                                                                        <i class="ace-icon fa fa-calendar"></i>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                    
                                                                    <div class="space-4"></div>
                    
                                                                    <div class="form-group">
                                                                        <label class="col-sm-3 control-label no-padding-right">Gender</label>
                    
                                                                        <div class="col-sm-9">
                                                                            <label class="inline">
                                                                                <input name="form-field-radio" type="radio" class="ace" />
                                                                                <span class="lbl middle"> Male</span>
                                                                            </label>
                    
                                                                            &nbsp; &nbsp; &nbsp;
                                                                            <label class="inline">
                                                                                <input name="form-field-radio" type="radio" class="ace" />
                                                                                <span class="lbl middle"> Female</span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                    
                                                                    <div class="space-4"></div>
                    
                                                                    <div class="form-group">
                                                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-comment">Comment</label>
                    
                                                                        <div class="col-sm-9">
                                                                            <textarea id="form-field-comment"></textarea>
                                                                        </div>
                                                                    </div>
                    
                                                                    <div class="space"></div>
                                                                    <h4 class="header blue bolder smaller">Contact</h4>
                    
                                                                    <div class="form-group">
                                                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-email">Email</label>
                    
                                                                        <div class="col-sm-9">
                                                                            <span class="input-icon input-icon-right">
                                                                                <input type="email" id="form-field-email" value="alexdoe@gmail.com" />
                                                                                <i class="ace-icon fa fa-envelope"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                    
                                                                    <div class="space-4"></div>
                    
                                                                    <div class="form-group">
                                                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-website">Website</label>
                    
                                                                        <div class="col-sm-9">
                                                                            <span class="input-icon input-icon-right">
                                                                                <input type="url" id="form-field-website" value="http://www.alexdoe.com/" />
                                                                                <i class="ace-icon fa fa-globe"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                    
                                                                    <div class="space-4"></div>
                    
                                                                    <div class="form-group">
                                                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-phone">Phone</label>
                    
                                                                        <div class="col-sm-9">
                                                                            <span class="input-icon input-icon-right">
                                                                                <input class="input-medium input-mask-phone" type="text" id="form-field-phone" />
                                                                                <i class="ace-icon fa fa-phone fa-flip-horizontal"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                    
                                                                    <div class="space"></div>
                                                                    <h4 class="header blue bolder smaller">Social</h4>
                    
                                                                    <div class="form-group">
                                                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-facebook">Facebook</label>
                    
                                                                        <div class="col-sm-9">
                                                                            <span class="input-icon">
                                                                                <input type="text" value="facebook_alexdoe" id="form-field-facebook" />
                                                                                <i class="ace-icon fa fa-facebook blue"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                    
                                                                    <div class="space-4"></div>
                    
                                                                    <div class="form-group">
                                                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-twitter">Twitter</label>
                    
                                                                        <div class="col-sm-9">
                                                                            <span class="input-icon">
                                                                                <input type="text" value="twitter_alexdoe" id="form-field-twitter" />
                                                                                <i class="ace-icon fa fa-twitter light-blue"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                    
                                                                    <div class="space-4"></div>
                    
                                                                    <div class="form-group">
                                                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-gplus">Google+</label>
                    
                                                                        <div class="col-sm-9">
                                                                            <span class="input-icon">
                                                                                <input type="text" value="google_alexdoe" id="form-field-gplus" />
                                                                                <i class="ace-icon fa fa-google-plus red"></i>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                    
                                                                <div id="edit-settings" class="tab-pane">
                                                                    <div class="space-10"></div>
                    
                                                                    <div>
                                                                        <label class="inline">
                                                                            <input type="checkbox" name="form-field-checkbox" class="ace" />
                                                                            <span class="lbl"> Make my profile public</span>
                                                                        </label>
                                                                    </div>
                    
                                                                    <div class="space-8"></div>
                    
                                                                    <div>
                                                                        <label class="inline">
                                                                            <input type="checkbox" name="form-field-checkbox" class="ace" />
                                                                            <span class="lbl"> Email me new updates</span>
                                                                        </label>
                                                                    </div>
                    
                                                                    <div class="space-8"></div>
                    
                                                                    <div>
                                                                        <label>
                                                                            <input type="checkbox" name="form-field-checkbox" class="ace" />
                                                                            <span class="lbl"> Keep a history of my conversations</span>
                                                                        </label>
                    
                                                                        <label>
                                                                            <span class="space-2 block"></span>
                    
                                                                            for
                                                                            <input type="text" class="input-mini" maxlength="3" />
                                                                            days
                                                                        </label>
                                                                    </div>
                                                                </div>
                    
                                                                <div id="edit-password" class="tab-pane">
                                                                    <div class="space-10"></div>
                    
                                                                    <div class="form-group">
                                                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-pass1">New Password</label>
                    
                                                                        <div class="col-sm-9">
                                                                            <input type="password" id="form-field-pass1" />
                                                                        </div>
                                                                    </div>
                    
                                                                    <div class="space-4"></div>
                    
                                                                    <div class="form-group">
                                                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-pass2">Confirm Password</label>
                    
                                                                        <div class="col-sm-9">
                                                                            <input type="password" id="form-field-pass2" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                    
                                                        <div class="clearfix form-actions">
                                                            <div class="col-md-offset-3 col-md-9">
                                                                <button class="btn btn-info" type="button">
                                                                    <i class="ace-icon fa fa-check bigger-110"></i>
                                                                    Save
                                                                </button>
                    
                                                                &nbsp; &nbsp;
                                                                <button class="btn" type="reset">
                                                                    <i class="ace-icon fa fa-undo bigger-110"></i>
                                                                    Reset
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div> /.span 
                                            </div> /.user-profile 
                                        </div>-->

                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->
@endsection