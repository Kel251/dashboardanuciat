@extends('dashboard.layouts.framet')
@section('content')
<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="{{ URL::action('DashboardController@index') }}">Inicio</a>
                </li>

                <li class="active">Información de Usuarios</li>
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

            <!--            <div class="page-header">
                            <h1>
                                Tables
                                <small>
                                    <i class="ace-icon fa fa-angle-double-right"></i>
                                    Static &amp; Dynamic Tables
                                </small>
                            </h1>
                        </div> /.page-header 
            
                        <div class="row">
                            <div class="col-xs-12">
                                 PAGE CONTENT BEGINS 
                                <div class="row">
                                    <div class="col-xs-12">
                                        <table id="simple-table" class="table  table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="center">
                                                        <label class="pos-rel">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </th>
                                                    <th class="detail-col">Details</th>
                                                    <th>Domain</th>
                                                    <th>Price</th>
                                                    <th class="hidden-480">Clicks</th>
            
                                                    <th>
                                                        <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                                        Update
                                                    </th>
                                                    <th class="hidden-480">Status</th>
            
                                                    <th></th>
                                                </tr>
                                            </thead>
            
                                            <tbody>
                                                <tr>
                                                    <td class="center">
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
                                                    </td>
            
                                                    <td>
                                                        <a href="#">ace.com</a>
                                                    </td>
                                                    <td>$45</td>
                                                    <td class="hidden-480">3,330</td>
                                                    <td>Feb 12</td>
            
                                                    <td class="hidden-480">
                                                        <span class="label label-sm label-warning">Expiring</span>
                                                    </td>
            
                                                    <td>
                                                        <div class="hidden-sm hidden-xs btn-group">
                                                            <button class="btn btn-xs btn-success">
                                                                <i class="ace-icon fa fa-check bigger-120"></i>
                                                            </button>
            
                                                            <button class="btn btn-xs btn-info">
                                                                <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                            </button>
            
                                                            <button class="btn btn-xs btn-danger">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </button>
            
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
            
                                                <tr class="detail-row">
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
                                                </tr>
            
                                                <tr>
                                                    <td class="center">
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
                                                    </td>
            
                                                    <td>
                                                        <a href="#">base.com</a>
                                                    </td>
                                                    <td>$35</td>
                                                    <td class="hidden-480">2,595</td>
                                                    <td>Feb 18</td>
            
                                                    <td class="hidden-480">
                                                        <span class="label label-sm label-success">Registered</span>
                                                    </td>
            
                                                    <td>
                                                        <div class="hidden-sm hidden-xs btn-group">
                                                            <button class="btn btn-xs btn-success">
                                                                <i class="ace-icon fa fa-check bigger-120"></i>
                                                            </button>
            
                                                            <button class="btn btn-xs btn-info">
                                                                <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                            </button>
            
                                                            <button class="btn btn-xs btn-danger">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </button>
            
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
            
                                                <tr class="detail-row">
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
                                                </tr>
            
                                                <tr>
                                                    <td class="center">
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
                                                    </td>
            
                                                    <td>
                                                        <a href="#">max.com</a>
                                                    </td>
                                                    <td>$60</td>
                                                    <td class="hidden-480">4,400</td>
                                                    <td>Mar 11</td>
            
                                                    <td class="hidden-480">
                                                        <span class="label label-sm label-warning">Expiring</span>
                                                    </td>
            
                                                    <td>
                                                        <div class="hidden-sm hidden-xs btn-group">
                                                            <button class="btn btn-xs btn-success">
                                                                <i class="ace-icon fa fa-check bigger-120"></i>
                                                            </button>
            
                                                            <button class="btn btn-xs btn-info">
                                                                <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                            </button>
            
                                                            <button class="btn btn-xs btn-danger">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </button>
            
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
            
                                                <tr class="detail-row">
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
                                                </tr>
            
                                                <tr>
                                                    <td class="center">
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
                                                    </td>
            
                                                    <td>
                                                        <a href="#">best.com</a>
                                                    </td>
                                                    <td>$75</td>
                                                    <td class="hidden-480">6,500</td>
                                                    <td>Apr 03</td>
            
                                                    <td class="hidden-480">
                                                        <span class="label label-sm label-inverse arrowed-in">Flagged</span>
                                                    </td>
            
                                                    <td>
                                                        <div class="hidden-sm hidden-xs btn-group">
                                                            <button class="btn btn-xs btn-success">
                                                                <i class="ace-icon fa fa-check bigger-120"></i>
                                                            </button>
            
                                                            <button class="btn btn-xs btn-info">
                                                                <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                            </button>
            
                                                            <button class="btn btn-xs btn-danger">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </button>
            
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
            
                                                <tr class="detail-row">
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
                                                </tr>
            
                                                <tr>
                                                    <td class="center">
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
                                                    </td>
            
                                                    <td>
                                                        <a href="#">pro.com</a>
                                                    </td>
                                                    <td>$55</td>
                                                    <td class="hidden-480">4,250</td>
                                                    <td>Jan 21</td>
            
                                                    <td class="hidden-480">
                                                        <span class="label label-sm label-success">Registered</span>
                                                    </td>
            
                                                    <td>
                                                        <div class="hidden-sm hidden-xs btn-group">
                                                            <button class="btn btn-xs btn-success">
                                                                <i class="ace-icon fa fa-check bigger-120"></i>
                                                            </button>
            
                                                            <button class="btn btn-xs btn-info">
                                                                <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                            </button>
            
                                                            <button class="btn btn-xs btn-danger">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </button>
            
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
            
                                                <tr class="detail-row">
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
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> /.span 
                                </div> /.row -->

            <!--                    <div class="hr hr-18 dotted hr-double"></div>
            
                                <h4 class="pink">
                                    <i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
                                    <a href="#modal-table" role="button" class="green" data-toggle="modal"> Table Inside a Modal Box </a>
                                </h4>-->

            <div class="hr hr-18 dotted hr-double"></div>

            <div class="row">
                <div class="col-xs-12">
                    <!--<h3 class="header smaller lighter blue">jQuery dataTables</h3>-->

                    <div class="clearfix">
                        <div class="pull-right tableTools-container">
                            <div class="dt-buttons btn-overlap btn-group" > <a href="{{ route('excelusers') }}" class="dt-button buttons-collection buttons-colvis btn btn-white btn-primary btn-bold">
                                    <img src="{{ asset('images/excel1.png') }}" height="20px" width="20px" style="float: right;">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="table-header">
                        Usuarios registrados en el sistema
                    </div>

                    <!-- div.table-responsive -->

                    <!-- div.dataTables_borderWrap -->
                    <div>
                        <form>
                            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
    <!--                                    <th class="center">
                                            <label class="pos-rel">
                                                <input type="checkbox" class="ace" />
                                                <span class="lbl"></span>
                                            </label>
                                        </th>-->
                                        <th>Foto</th>
                                        <th>Nombre Admin</th>
                                        <th>Price</th>
                                        <th class="hidden-480">Clicks</th>

                                        <th>
                                            <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                            Update
                                        </th>
                                        <th class="hidden-480">Status</th>

                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody><p id="demo"></p>
                                @if(isset($users))
                                @foreach($users as $val)
                                <tr>
    <!--                                <td class="center">
                                        <label class="pos-rel">
                                            <input type="checkbox" class="ace"/>
                                            <span class="lbl"></span>
                                        </label>
                                    </td>-->
                                    <td>
                                <center>
                                    @if($val->Foto_perfil != '') <img src="{{ asset('files/profile/'.$val->Foto_perfil) }}" height="42" width="42" />
                                    @else
                                    <img src="{{ asset('files/profile/sombra.png') }}" height="42" width="42" />
                                    @endif
                                </center>
                                </td>
                                <td>
                                    <a href="#">{{ $val->username }}</a>
                                </td>
                                <td>$45</td>
                                <td class="hidden-480">3,330</td>
                                <td>Feb 12ww</td>

                                @if ($val->banned === 0)
                                <td class="hidden-480">
                                    <span class="label label-sm label-success">Activo</span>
                                </td>
                                @else
                                <td class="hidden-480">
                                    <span class="label label-sm label-danger">Bann</span>
                                </td>
                                @endif

                                <td>
                                    <div class="hidden-sm hidden-xs action-buttons">
                                        <a class="blue" href="{{ URL::action('DashboardController@profile',['id'=>base64_encode($val->id)]) }}" title="Ver detalle">
                                            <i class="ace-icon fa fa-folder-o bigger-130"></i>
                                        </a>

                                        <a class="green" href="#modal-table" role="button" data-toggle="modal" title="Ver pagos" onclick="pagos({{ $val->id }})">
                                            <i class="ace-icon glyphicon glyphicon-usd bigger-130"></i>
                                        </a>

                                        <a class="red" href="{{ URL::action('DashboardController@pendientes',['id'=>base64_encode($val->id)]) }}" role="button" data-toggle="modal" title="Ver pendientes">
                                            <i class="ace-icon glyphicon glyphicon-time bigger-130"></i>
                                        </a>

                                        @if ($val->banned === 1)
                                        <a href="{{ URL::action('DashboardController@status',['id'=>base64_encode($val->id),'bann'=>base64_encode($val->banned)]) }}" class='btn btn-xs btn-success'>Activar</a>
                                        @else
                                        <a href="{{ URL::action('DashboardController@status',['id'=>base64_encode($val->id),'bann'=>base64_encode($val->banned)]) }}" class='btn btn-xs btn-danger'>Descativar</a>
                                        @endif
                                        <!--                                            @if ($val->banned === 0)
                                                                                    {!!link_to_route('edit', $title = 'Activar', $parameters = [$val->id], $attributes = ['style'=>'color:white; text-decoration:none;','class'=>'btn btn-xs btn-info']);!!}
                                                                                    @else
                                                                                    {!!link_to_route('edit', $title = 'Bann', $parameters = [$val->id], $attributes = ['style'=>'color:white; text-decoration:none;','class'=>'btn btn-xs btn-danger']);!!}
                                                                                    @endif-->
                                        <a class="blue" href="{{ URL::action('ExcelController@pagos',['id'=>$val->id]) }}" title="Ver detalle">
                                                <img src="{{ asset('images/excel1.png') }}" height="20px" width="20px" style="float: right;">
                                        </a>
                                    </div>

                                    <div class="hidden-md hidden-lg">
                                        <div class="inline pos-rel">
                                            <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                            </button>

                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                <li>
                                                    <a href="#" class="tooltip-info" data-rel="tooltip" title="View Detalle">
                                                        <span class="blue">
                                                            <i class="ace-icon fa  fa-folder-o bigger-120"></i>
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
                                                <li>

                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                                </tr>
                                @endforeach
                                @endif
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
<!--            <div>
                <h2>Register form</h2>
                <button type="button" id="getRequest">Get request</button>
            </div
            <div id="getRequestData">
                txt
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <h3>Municipios</h3>
                    <select class="form-control selectpicker" id="municipios">
                        <option value="0">-- Seleciona un municipio --</option>

                    </select>
                </div>
            </div>-->
            <script type="text/javascript">
                function checkbox() {
                var x = document.getElementsByClassName('status').checked;
                document.getElementById("demo").innerHTML = x[0];
                }
                function checkbox2() {

                var ids;
                ids = $('input[type=checkbox]:checked').map(function () {
                return $(this).attr('id');
                }).get();
                alert('IDS: ' + ids.join(', '));
                $.ajax({
                url:
                });
                }
            </script>

            <script type="text/javascript">

                $("#BtnEnviar").click(function (e) {
                e.preventDefault();
                var nombre = $('#txtNombre').val();
                $.ajax({
                type: "post",
                        url: "mi_ruta_post",
                        data: {
                        nombre: nombre
                        }, success: function (msg) {
                alert("Se ha realizado el POST con exito " + msg);
                }
                });
                });
            </script>
            <h4 class="pink">
                <i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
                <a href="#modal-table" role="button" class="green" data-toggle="modal"> Table Inside a Modal Box </a>
            </h4>

            <div id="modal-table" class="modal fade" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header no-padding">
                            <div class="table-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <span class="white">&times;</span>
                                </button>
                                Historial de pagos
                            </div>
                        </div>

                        <div class="modal-body no-padding">
                            <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tipo</th>
                                        <th>Monto</th>
                                        <th>
                                            <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                            Activación
                                        </th>
                                        <th>
                                            <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                            Expira
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                    </tr>
                                </thead>

                                <tbody id="pagos">

                                </tbody>
                            </table>
                        </div>

                        <div class="modal-footer no-margin-top">
                            <button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
                                <i class="ace-icon fa fa-times"></i>
                                Cerrar
                            </button>

                            <div id="total" ></div>
                            <!--                            <ul class="pagination pull-right no-margin">
                                                            <li class="prev disabled">
                                                                <a href="#">
                                                                    <i class="ace-icon fa fa-angle-double-left"></i>
                                                                </a>
                                                            </li>
                            
                                                            <li class="active">
                                                                <a href="#">1</a>
                                                            </li>
                            
                                                            <li>
                                                                <a href="#">2</a>
                                                            </li>
                            
                                                            <li>
                                                                <a href="#">3</a>
                                                            </li>
                            
                                                            <li class="next">
                                                                <a href="#">
                                                                    <i class="ace-icon fa fa-angle-double-right"></i>
                                                                </a>
                                                            </li>
                                                        </ul>-->
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>

            <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->
@endsection