@extends('dashboard.layouts.framep')
@section('content')
<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="{{ route('dashboard') }}">Inicio</a>
                </li>
                <li class="active">Perfil del Administrador</li>
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
                    Perfil del Administrador
                </h1>
            </div><!-- /.page-header -->

            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <div>
                        <div id="user-profile-1" class="user-profile row">
                            <div class="col-xs-12 col-sm-3 center">
                                <div>
                                    <span class="profile-picture">
                                        @if(Auth::user()->Foto_perfil)
                                        <img id="avatar" class="editable img-responsive" src="{{asset('files/profile/'. Auth::user()->Foto_perfil) }}" alt="{{ Auth::user()->username }} Foto" />
                                        @else
                                        <img id="avatar" class="editable img-responsive" src="{{asset('files/profile/sombra.png') }}" alt="{{ Auth::user()->username }} Foto" />
                                        @endif
                                    </span>

                                    <div class="space-4"></div>

                                    <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                        <div class="inline position-relative">
                                            <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                                                <i class="ace-icon fa fa-circle light-green"></i>
                                                &nbsp;
                                                <span class="white">{{ Auth::user()->username }}</span>
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
                                            {{ Auth::user()->Website }}
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
                                        <div class="profile-info-name"> Nombre </div>

                                        <div class="profile-info-value">
                                            <span class="editable" id="username">{{ Auth::user()->Nom_user }} {{ Auth::user()->App_user }}</span>
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
                                        <div class="profile-info-name"> Registrado </div>

                                        <div class="profile-info-value">
                                            <span class="editable" id="signup">{{ Auth::user()->created }}</span>
                                        </div>
                                    </div>

                                    <div class="profile-info-row">
                                        <div class="profile-info-name"> Ultima conexión </div>

                                        <div class="profile-info-value">
                                            <span class="editable" id="login">{{ Auth::user()->last_login }}</span>
                                        </div>
                                    </div>

                                    <div class="profile-info-row">
                                        <div class="profile-info-name"> Acerca de mi </div>

                                        <div class="profile-info-value">
                                            <span class="editable" id="about">{{ Auth::user()->Acerca }}</span>
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
                                                        <img class="pull-left" alt="Alex Doe's avatar" src="assets/images/avatars/avatar5.png" />
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
                                                        <img class="pull-left" alt="Susan Smith's avatar" src="assets/images/avatars/avatar1.png" />
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
                    </div>
                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->
@endsection