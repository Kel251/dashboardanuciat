@extends('dashboard.layouts.frame')

<!-- PRINT MESSAGE OF CREATE SUCCESSFUL  
?php $message = Session::get('message') ?--->

@section('content')
<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
                </li>
                <li class="active">Dashboard</li>
            </ul><!-- /.breadcrumb -->

            <div class="nav-search" id="nav-search">
                {!!Form::open(['route'=>'dashboard','method'=>'GET','class'=>'form-horizontal'])!!}
                <!--  <    form class="form-search" action="{ route('search_name') }" method="GET"  >   -->
                <span class="input-icon">
                    <!--<input type="text" name="name" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />-->
                    {!!Form::text('name',null,['id'=>'nav-search-input','class'=>'form-control','placeholder'=>'Search ...', 'autocomplete'=>'off'])!!}
                    <i class="ace-icon fa fa-search nav-search-icon"></i>
                </span>
                <!--<button type="submit"> Buscar</button>-->
                {!!Form::submit('Buscar',['type'=>'button'])!!}
                <!--</form>-->
                {!!Form::close()!!}
            </div><!-- /.nav-search -->
        </div>
        
        <div>
        <h2>Register form</h2>
        <button type="button" id="getRequest">Get request</button>
    </div>
    

        <div class="page-content">
            <div class="ace-settings-container" id="ace-settings-container">
                <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                    <i class="ace-icon fa fa-cog bigger-130"></i>
                </div>

                <div id="fb-root"></div>
                <script>
                    
                    (function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id))
                            return;
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.9";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                
                <script type="text/javascript">
                    function initialfb(){
                       $("#u_0_1").hide();
                    };
                    </script>
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
                    Dashboard
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        overview &amp; stats
                    </small>
                </h1>
            </div><!-- /.page-header -->

            <div class="row" id="hide">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
<!--                    <div class="alert alert-block alert-success">
                        <button type="button" class="close" data-dismiss="alert">
                            <i class="ace-icon fa fa-times"></i>
                        </button>

                        <i class="ace-icon fa fa-check green"></i>

                        Welcome to
                        <strong class="green">
                            Ace
                            <small>(v1.4)</small>
                        </strong>,
                        лёгкий, многофункциональный и простой в использовании шаблон для админки на bootstrap 3.3.6. Загрузить исходники с <a href="https://github.com/bopoda/ace">github</a> (with minified ace js/css files).
                    </div>-->

                    <div class="row">
                        <div class="space-6"></div>

                        <div class="col-sm-7 infobox-container">
                            <div class="infobox infobox-green">
                                <div class="infobox-icon">
                                    <i class="ace-icon fa fa-comments"></i>
                                </div>

                                <div class="infobox-data">
                                    <span class="infobox-data-number">{{ $count2 }}</span>
                                    <div class="infobox-content">comentarios </div>
                                </div>

                                <div class="stat stat-success">{{ $percent[0] }}%</div>
                            </div>

                            <div class="infobox infobox-blue">
                                <div class="infobox-icon">
                                    <i class="ace-icon fa fa-twitter"></i>
                                </div>

                                <div class="infobox-data">
                                    <span class="infobox-data-number">11</span>
                                    <div class="infobox-content">new followers</div>
                                </div>

                                <div class="badge badge-success">
                                    +32%
                                    <i class="ace-icon fa fa-arrow-up"></i>
                                </div>
                            </div>

                            <div class="infobox infobox-pink">
                                <div class="infobox-icon">
                                    <i class="ace-icon fa fa-shopping-cart"></i>
                                </div>

                                <div class="infobox-data">
                                    <span class="infobox-data-number">{{ $count }}</span>
                                    <div class="infobox-content">Subscriptores</div>
                                </div>
                                <div class="stat stat-important">4%</div>
                            </div>

                            <div class="infobox infobox-red">
                                <div class="infobox-icon">
                                    <i class="ace-icon fa fa-flask"></i>
                                </div>

                                <div class="infobox-data">
                                    <span class="infobox-data-number">7</span>
                                    <div class="infobox-content">experiments</div>
                                </div>
                            </div>

                            <div class="infobox infobox-orange2">
                                <div class="infobox-chart">
                                    <span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span>
                                </div>

                                <div class="infobox-data">
                                    <span class="infobox-data-number">{{ $users }}</span>
                                    <div class="infobox-content">Usuarios</div>
                                </div>

                                <div class="badge badge-success">
                                    7.2%
                                    <i class="ace-icon fa fa-arrow-up"></i>
                                </div>
                            </div>

                            <div class="infobox infobox-blue2">
                                <div class="infobox-progress">
                                    <div class="easy-pie-chart percentage" data-percent="42" data-size="46">
                                        <span class="percent">{{ $count3 }}</span>%
                                    </div>
                                </div>

                                <div class="infobox-data">
                                    <span class="infobox-text">traffic used</span>

                                    <div class="infobox-content">
                                        <span class="bigger-110">~</span>
                                        58GB remaining
                                    </div>
                                </div>
                            </div>

                            <div class="space-6"></div>

                            <div class="infobox infobox-green infobox-small infobox-dark">
                                <div class="infobox-progress">
                                    <div class="easy-pie-chart percentage" data-percent="61" data-size="39">
                                        <span class="percent">61</span>%
                                    </div>
                                </div>

                                <div class="infobox-data">
                                    <div class="infobox-content">Task</div>
                                    <div class="infobox-content">Completion</div>
                                </div>
                            </div>

                            <div class="infobox infobox-blue infobox-small infobox-dark">
                                <div class="infobox-chart">
                                    <span class="sparkline" data-values="3,4,2,3,4,4,2,2"></span>
                                </div>

                                <div class="infobox-data">
                                    <div class="infobox-content">Earnings</div>
                                    <div class="infobox-content">$32,000</div>
                                </div>
                            </div>

                            <div class="infobox infobox-grey infobox-small infobox-dark">
                                <div class="infobox-icon">
                                    <i class="ace-icon fa fa-download"></i>
                                </div>

                                <div class="infobox-data">
                                    <div class="infobox-content">Downloads</div>
                                    <div class="infobox-content">1,205</div>
                                </div>
                            </div>
                        </div>

                        <div class="vspace-12-sm"></div>

                        <div class="col-sm-5">
                            <div class="widget-box">
                                <div class="widget-header widget-header-flat widget-header-small">
                                    <h5 class="widget-title">
                                        <i class="ace-icon fa fa-signal"></i>
                                        Traffic Sources
                                    </h5>

                                    <div class="widget-toolbar no-border">
                                        <div class="inline dropdown-hover">
                                            <button class="btn btn-minier btn-primary">
                                                This Week
                                                <i class="ace-icon fa fa-angle-down icon-on-right bigger-110"></i>
                                            </button>

                                            <ul class="dropdown-menu dropdown-menu-right dropdown-125 dropdown-lighter dropdown-close dropdown-caret">
                                                <li class="active">
                                                    <a href="#" class="blue">
                                                        <i class="ace-icon fa fa-caret-right bigger-110">&nbsp;</i>
                                                        This Week
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        <i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
                                                        Last Week
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        <i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
                                                        This Month
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        <i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
                                                        Last Month
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="widget-body">
                                    <div class="widget-main">
                                        <div id="piechart-placeholder"></div>

                                        <div class="hr hr8 hr-double"></div>

                                        <div class="clearfix">
                                            <div class="grid3">
                                                <span class="grey">
                                                    <i class="ace-icon fa fa-facebook-square fa-2x blue"></i>
                                                    &nbsp; likes
                                                </span>
                                                <h4 class="bigger pull-right"><div class="fb-like" data-href="https://www.facebook.com/Anunciate-1866920920296286/" data-layout="box_count" data-action="like" data-size="small"></div></h4>
                                            </div>

                                            <div class="grid3">
                                                <span class="grey">
                                                    <i class="ace-icon fa fa-twitter-square fa-2x purple"></i>
                                                    &nbsp; tweets
                                                </span>
                                                <h4 class="bigger pull-right">941</h4>
                                            </div>

                                            <div class="grid3">
                                                <span class="grey">
                                                    <i class="ace-icon fa fa-pinterest-square fa-2x red"></i>
                                                    &nbsp; pins
                                                </span>
                                                <h4 class="bigger pull-right">1,050</h4>
                                            </div>
                                        </div>
                                    </div><!-- /.widget-main -->
                                </div><!-- /.widget-body -->
                            </div><!-- /.widget-box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <div class="hr hr32 hr-dotted"></div>


                    <div class="hr hr-18 dotted hr-double"></div>
                    

                    <div class="row">
                        <div class="col-sm-5">
                            <div class="widget-box transparent">
                                <div class="widget-header widget-header-flat">
                                    <h4 class="widget-title lighter">
                                        <i class="ace-icon fa fa-star orange"></i>
                                        Anuncios Populares
                                    </h4>

                                    <div class="widget-toolbar">
                                        <a href="#" data-action="collapse">
                                            <i class="ace-icon fa fa-chevron-up"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="widget-body">
                                    <div class="widget-main no-padding">
                                        <table class="table table-bordered table-striped">
                                            <thead class="thin-border-bottom">
                                                <tr>
                                                    <th>
                                                        <i class="ace-icon fa fa-caret-right blue"></i>Titulo
                                                    </th>

                                                    <th>
                                                        <i class="ace-icon fa fa-caret-right blue"></i>Precio
                                                    </th>

                                                    <th class="hidden-480">
                                                        <i class="ace-icon fa fa-caret-right blue"></i>Status
                                                    </th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @if(isset($consulta))
                                                @foreach($consulta as $con)
                                                <tr>
                                                    <td>{{ $con->anuncio }}</td>

                                                    <td>
<!--                                                        <small>
                                                            <s class="red">$29.99</s>
                                                        </small>-->
                                                        <b class="green">${{ $con->precio }}</b>
                                                    </td>
                                                    @if($con->activo === 0)
                                                    <td class="hidden-480">
                                                        <span class="label label-info arrowed-right arrowed-in">Activo</span>
                                                    </td>
                                                    @else
                                                    <td class="hidden-480">
                                                        <span class="label label-danger arrowed">Bloqueado</span>
                                                    </td>
                                                    @endif
                                                </tr>
                                                @endforeach
                                                @endif
<!--                                                <tr>
                                                    <td>online.com</td>

                                                    <td>
                                                        <b class="blue">$16.45</b>
                                                    </td>

                                                    <td class="hidden-480">
                                                        <span class="label label-success arrowed-in arrowed-in-right">approved</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>newnet.com</td>

                                                    <td>
                                                        <b class="blue">$15.00</b>
                                                    </td>

                                                    <td class="hidden-480">
                                                        <span class="label label-danger arrowed">pending</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>web.com</td>

                                                    <td>
                                                        <small>
                                                            <s class="red">$24.99</s>
                                                        </small>
                                                        <b class="green">$19.95</b>
                                                    </td>

                                                    <td class="hidden-480">
                                                        <span class="label arrowed">
                                                            <s>out of stock</s>
                                                        </span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>domain.com</td>

                                                    <td>
                                                        <b class="blue">$12.00</b>
                                                    </td>

                                                    <td class="hidden-480">
                                                        <span class="label label-warning arrowed arrowed-right">SOLD</span>
                                                    </td>
                                                </tr>-->
                                            </tbody>
                                        </table>
                                    </div><!-- /.widget-main -->
                                </div><!-- /.widget-body -->
                            </div><!-- /.widget-box -->
                        </div><!-- /.col -->

                        <div class="col-sm-7">
                            <div class="widget-box transparent">
                                <div class="widget-header widget-header-flat">
                                    <h4 class="widget-title lighter">
                                        <i class="ace-icon fa fa-signal"></i>
                                        Sale Stats
                                    </h4>

                                    <div class="widget-toolbar">
                                        <a href="#" data-action="collapse">
                                            <i class="ace-icon fa fa-chevron-up"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="widget-body">
                                    <div class="widget-main padding-4">
                                        <div id="sales-charts"></div>
                                    </div><!-- /.widget-main -->
                                </div><!-- /.widget-body -->
                            </div><!-- /.widget-box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <div class="hr hr32 hr-dotted"></div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="widget-box transparent" id="recent-box">
                                <div class="widget-header">
                                    <h4 class="widget-title lighter smaller">
                                        <i class="ace-icon fa fa-rss orange"></i>RECENT
                                    </h4>

                                    <div class="widget-toolbar no-border">
                                        <ul class="nav nav-tabs" id="recent-tab">
                                            <li class="active">
                                                <a data-toggle="tab" href="#task-tab">Tareas</a>
                                            </li>

                                            <li>
                                                <a data-toggle="tab" href="#member-tab">Miembros recientes</a>
                                            </li>

                                            <li>
                                                <a data-toggle="tab" href="#comment-tab">Comentarios</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="widget-body">
                                    <div class="widget-main padding-4">
                                        <div class="tab-content padding-8">
                                            <div id="task-tab" class="tab-pane active">
                                                <h4 class="smaller lighter green">
                                                    <i class="ace-icon fa fa-list"></i>
                                                    Sortable Lists
                                                </h4>

                                                <ul id="tasks" class="item-list">
                                                    <li class="item-orange clearfix">
                                                        <label class="inline">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"> Answering customer questions</span>
                                                        </label>

                                                        <div class="pull-right easy-pie-chart percentage" data-size="30" data-color="#ECCB71" data-percent="42">
                                                            <span class="percent">42</span>%
                                                        </div>
                                                    </li>

                                                    <li class="item-red clearfix">
                                                        <label class="inline">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"> Fixing bugs</span>
                                                        </label>

                                                        <div class="pull-right action-buttons">
                                                            <a href="#" class="blue">
                                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                            </a>

                                                            <span class="vbar"></span>

                                                            <a href="#" class="red">
                                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                            </a>

                                                            <span class="vbar"></span>

                                                            <a href="#" class="green">
                                                                <i class="ace-icon fa fa-flag bigger-130"></i>
                                                            </a>
                                                        </div>
                                                    </li>

                                                    <li class="item-default clearfix">
                                                        <label class="inline">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"> Adding new features</span>
                                                        </label>

                                                        <div class="pull-right pos-rel dropdown-hover">
                                                            <button class="btn btn-minier bigger btn-primary">
                                                                <i class="ace-icon fa fa-cog icon-only bigger-120"></i>
                                                            </button>

                                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-caret dropdown-close dropdown-menu-right">
                                                                <li>
                                                                    <a href="#" class="tooltip-success" data-rel="tooltip" title="Mark&nbsp;as&nbsp;done">
                                                                        <span class="green">
                                                                            <i class="ace-icon fa fa-check bigger-110"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                        <span class="red">
                                                                            <i class="ace-icon fa fa-trash-o bigger-110"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>

                                                    <li class="item-blue clearfix">
                                                        <label class="inline">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"> Upgrading scripts used in template</span>
                                                        </label>
                                                    </li>

                                                    <li class="item-grey clearfix">
                                                        <label class="inline">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"> Adding new skins</span>
                                                        </label>
                                                    </li>

                                                    <li class="item-green clearfix">
                                                        <label class="inline">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"> Updating server software up</span>
                                                        </label>
                                                    </li>

                                                    <li class="item-pink clearfix">
                                                        <label class="inline">
                                                            <input type="checkbox" class="ace" />
                                                            <span class="lbl"> Cleaning up</span>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div id="member-tab" class="tab-pane">
                                                <div class="clearfix">
                                                    @if(isset($query))
                                                    @foreach($query as $quer)
                                                    <div class="itemdiv memberdiv">
                                                        <div class="user">
                                                            <img alt="Bob Doe's avatar" src="{{ asset('files/profile/'.$quer->Foto_perfil)}}" />
                                                        </div>

                                                        <div class="body">
                                                            <div class="name">
                                                                <a href="{{ URL::action('DashboardController@profile',['id'=>base64_encode($quer->id)]) }}">{{ $quer->username }}</a>
                                                            </div>
                                                            <?php
                                                            $hoy = date("Y-m-d");
                                                            $fecha = explode(" ", $quer->created);
                                                            $datetime12 = date_create($fecha[0]);
                                                            $datetime22 = date_create($hoy);
                                                            $interval = date_diff($datetime12, $datetime22);
                                                            ?>
                                                            <div class="time">
                                                                <i class="ace-icon fa fa-clock-o"></i>
                                                                <span class="green"><?= $interval->format('%R%a días') ?></span>
                                                            </div>
                                                            @if($quer->banned === 2)
                                                            <div>
                                                                <span class="label label-warning label-sm">Pendiente</span>

                                                                <div class="inline position-relative">
                                                                    <button class="btn btn-minier btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                        <i class="ace-icon fa fa-angle-down icon-only bigger-120"></i>
                                                                    </button>

                                                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                        <li>
                                                                            <a href="{{ URL::action('DashboardController@status',['id'=>base64_encode($quer->id), 'bann'=>base64_encode($quer->banned)]) }}" class="tooltip-success" data-rel="tooltip" title="Approve">
                                                                                <span class="green">
                                                                                    <i class="ace-icon fa fa-check bigger-110"></i>
                                                                                </span>
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
                                                                                <span class="orange">
                                                                                    <i class="ace-icon fa fa-times bigger-110"></i>
                                                                                </span>
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                <span class="red">
                                                                                    <i class="ace-icon fa fa-trash-o bigger-110"></i>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>

                                                            @elseif($quer->banned === 1)
                                                            <div>
                                                            <span class="label label-danger label-sm">Bloqueado</span>
                                                            </div>
                                                            @else
                                                            <div>
                                                            <span class="label label-success label-sm arrowed-in">Aprobado</span>
                                                            </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    @endif
                                                    <!--                                                    <div class="itemdiv memberdiv">
                                                                                                            <div class="user">
                                                                                                                <img alt="Joe Doe's avatar" src="assets/images/avatars/avatar2.png" />
                                                                                                            </div>
                                                    
                                                                                                            <div class="body">
                                                                                                                <div class="name">
                                                                                                                    <a href="#">Joe Doe</a>
                                                                                                                </div>
                                                    
                                                                                                                <div class="time">
                                                                                                                    <i class="ace-icon fa fa-clock-o"></i>
                                                                                                                    <span class="green">1 hour</span>
                                                                                                                </div>
                                                    
                                                                                                                <div>
                                                                                                                    <span class="label label-warning label-sm">pending</span>
                                                    
                                                                                                                    <div class="inline position-relative">
                                                                                                                        <button class="btn btn-minier btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                                                            <i class="ace-icon fa fa-angle-down icon-only bigger-120"></i>
                                                                                                                        </button>
                                                    
                                                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                                                            <li>
                                                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Approve">
                                                                                                                                    <span class="green">
                                                                                                                                        <i class="ace-icon fa fa-check bigger-110"></i>
                                                                                                                                    </span>
                                                                                                                                </a>
                                                                                                                            </li>
                                                    
                                                                                                                            <li>
                                                                                                                                <a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
                                                                                                                                    <span class="orange">
                                                                                                                                        <i class="ace-icon fa fa-times bigger-110"></i>
                                                                                                                                    </span>
                                                                                                                                </a>
                                                                                                                            </li>
                                                    
                                                                                                                            <li>
                                                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                                                    <span class="red">
                                                                                                                                        <i class="ace-icon fa fa-trash-o bigger-110"></i>
                                                                                                                                    </span>
                                                                                                                                </a>
                                                                                                                            </li>
                                                                                                                        </ul>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                    
                                                                                                        <div class="itemdiv memberdiv">
                                                                                                            <div class="user">
                                                                                                                <img alt="Jim Doe's avatar" src="assets/images/avatars/avatar.png" />
                                                                                                            </div>
                                                    
                                                                                                            <div class="body">
                                                                                                                <div class="name">
                                                                                                                    <a href="#">Jim Doe</a>
                                                                                                                </div>
                                                    
                                                                                                                <div class="time">
                                                                                                                    <i class="ace-icon fa fa-clock-o"></i>
                                                                                                                    <span class="green">2 hour</span>
                                                                                                                </div>
                                                    
                                                                                                                <div>
                                                                                                                    <span class="label label-warning label-sm">pending</span>
                                                    
                                                                                                                    <div class="inline position-relative">
                                                                                                                        <button class="btn btn-minier btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                                                                            <i class="ace-icon fa fa-angle-down icon-only bigger-120"></i>
                                                                                                                        </button>
                                                    
                                                                                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                                                            <li>
                                                                                                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Approve">
                                                                                                                                    <span class="green">
                                                                                                                                        <i class="ace-icon fa fa-check bigger-110"></i>
                                                                                                                                    </span>
                                                                                                                                </a>
                                                                                                                            </li>
                                                    
                                                                                                                            <li>
                                                                                                                                <a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
                                                                                                                                    <span class="orange">
                                                                                                                                        <i class="ace-icon fa fa-times bigger-110"></i>
                                                                                                                                    </span>
                                                                                                                                </a>
                                                                                                                            </li>
                                                    
                                                                                                                            <li>
                                                                                                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                                                                                    <span class="red">
                                                                                                                                        <i class="ace-icon fa fa-trash-o bigger-110"></i>
                                                                                                                                    </span>
                                                                                                                                </a>
                                                                                                                            </li>
                                                                                                                        </ul>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                    
                                                                                                        <div class="itemdiv memberdiv">
                                                                                                            <div class="user">
                                                                                                                <img alt="Alex Doe's avatar" src="assets/images/avatars/avatar5.png" />
                                                                                                            </div>
                                                    
                                                                                                            <div class="body">
                                                                                                                <div class="name">
                                                                                                                    <a href="#">Alex Doe</a>
                                                                                                                </div>
                                                    
                                                                                                                <div class="time">
                                                                                                                    <i class="ace-icon fa fa-clock-o"></i>
                                                                                                                    <span class="green">3 hour</span>
                                                                                                                </div>
                                                    
                                                                                                                <div>
                                                                                                                    <span class="label label-danger label-sm">blocked</span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                    
                                                                                                        <div class="itemdiv memberdiv">
                                                                                                            <div class="user">
                                                                                                                <img alt="Bob Doe's avatar" src="assets/images/avatars/avatar2.png" />
                                                                                                            </div>
                                                    
                                                                                                            <div class="body">
                                                                                                                <div class="name">
                                                                                                                    <a href="#">Bob Doe</a>
                                                                                                                </div>
                                                    
                                                                                                                <div class="time">
                                                                                                                    <i class="ace-icon fa fa-clock-o"></i>
                                                                                                                    <span class="green">6 hour</span>
                                                                                                                </div>
                                                    
                                                                                                                <div>
                                                                                                                    <span class="label label-success label-sm arrowed-in">approved</span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                    
                                                                                                        <div class="itemdiv memberdiv">
                                                                                                            <div class="user">
                                                                                                                <img alt="Susan's avatar" src="assets/images/avatars/avatar3.png" />
                                                                                                            </div>
                                                    
                                                                                                            <div class="body">
                                                                                                                <div class="name">
                                                                                                                    <a href="#">Susan</a>
                                                                                                                </div>
                                                    
                                                                                                                <div class="time">
                                                                                                                    <i class="ace-icon fa fa-clock-o"></i>
                                                                                                                    <span class="green">yesterday</span>
                                                                                                                </div>
                                                    
                                                                                                                <div>
                                                                                                                    <span class="label label-success label-sm arrowed-in">approved</span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                    
                                                                                                        <div class="itemdiv memberdiv">
                                                                                                            <div class="user">
                                                                                                                <img alt="Phil Doe's avatar" src="assets/images/avatars/avatar4.png" />
                                                                                                            </div>
                                                    
                                                                                                            <div class="body">
                                                                                                                <div class="name">
                                                                                                                    <a href="#">Phil Doe</a>
                                                                                                                </div>
                                                    
                                                                                                                <div class="time">
                                                                                                                    <i class="ace-icon fa fa-clock-o"></i>
                                                                                                                    <span class="green">2 days ago</span>
                                                                                                                </div>
                                                    
                                                                                                                <div>
                                                                                                                    <span class="label label-info label-sm arrowed-in arrowed-in-right">online</span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                    
                                                                                                        <div class="itemdiv memberdiv">
                                                                                                            <div class="user">
                                                                                                                <img alt="Alexa Doe's avatar" src="assets/images/avatars/avatar1.png" />
                                                                                                            </div>
                                                    
                                                                                                            <div class="body">
                                                                                                                <div class="name">
                                                                                                                    <a href="#">Alexa Doe</a>
                                                                                                                </div>
                                                    
                                                                                                                <div class="time">
                                                                                                                    <i class="ace-icon fa fa-clock-o"></i>
                                                                                                                    <span class="green">3 days ago</span>
                                                                                                                </div>
                                                    
                                                                                                                <div>
                                                                                                                    <span class="label label-success label-sm arrowed-in">approved</span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>-->
                                                </div>

                                                <div class="space-4"></div>

                                                <div class="center">
                                                    <i class="ace-icon fa fa-users fa-2x green middle"></i>

                                                    &nbsp;
                                                    <a href="{{ URL::action('DashboardController@info') }}" class="btn btn-sm btn-white btn-info">
                                                        See all members &nbsp;
                                                        <i class="ace-icon fa fa-arrow-right"></i>
                                                    </a>
                                                </div>

                                                <div class="hr hr-double hr8"></div>
                                            </div><!-- /.#member-tab -->

                                            <div id="comment-tab" class="tab-pane">
                                                <div class="comments">
                                                    <div class="fb-comments" data-href="http://localhost:8000/dashboard" data-numposts="5"></div>
                                                </div>

                                                <div class="hr hr8"></div>

                                                <div class="center">
                                                    <i class="ace-icon fa fa-comments-o fa-2x green middle"></i>

                                                    &nbsp;
                                                    <a href="#" class="btn btn-sm btn-white btn-info">
                                                        See all comments &nbsp;
                                                        <i class="ace-icon fa fa-arrow-right"></i>
                                                    </a>
                                                </div>

                                                <div class="hr hr-double hr8"></div>
                                            </div>
                                        </div>
                                    </div><!-- /.widget-main -->
                                </div><!-- /.widget-body -->
                            </div><!-- /.widget-box -->
                        </div><!-- /.col -->

                        <div class="col-sm-6">
                            <div class="widget-box">
                                <div class="widget-header">
                                    <h4 class="widget-title lighter smaller">
                                        <i class="ace-icon fa fa-comment blue"></i>
                                        Conversation
                                    </h4>
                                </div>

                                <div class="widget-body">
                                    <div class="widget-main no-padding">
                                        <div class="dialogs">
                                            <div class="itemdiv dialogdiv">
                                                <div class="user">
                                                    <img alt="Alexa's Avatar" src="assets/images/avatars/avatar1.png" />
                                                </div>

                                                <div class="body">
                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span class="green">4 sec</span>
                                                    </div>

                                                    <div class="name">
                                                        <a href="#">Alexa</a>
                                                    </div>
                                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis.</div>

                                                    <div class="tools">
                                                        <a href="#" class="btn btn-minier btn-info">
                                                            <i class="icon-only ace-icon fa fa-share"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemdiv dialogdiv">
                                                <div class="user">
                                                    <img alt="John's Avatar" src="assets/images/avatars/avatar.png" />
                                                </div>

                                                <div class="body">
                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span class="blue">38 sec</span>
                                                    </div>

                                                    <div class="name">
                                                        <a href="#">John</a>
                                                    </div>
                                                    <div class="text">Raw denim you probably haven&#39;t heard of them jean shorts Austin.</div>

                                                    <div class="tools">
                                                        <a href="#" class="btn btn-minier btn-info">
                                                            <i class="icon-only ace-icon fa fa-share"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemdiv dialogdiv">
                                                <div class="user">
                                                    <img alt="Bob's Avatar" src="assets/images/avatars/user.jpg" />
                                                </div>

                                                <div class="body">
                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span class="orange">2 min</span>
                                                    </div>

                                                    <div class="name">
                                                        <a href="#">Bob</a>
                                                        <span class="label label-info arrowed arrowed-in-right">admin</span>
                                                    </div>
                                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis.</div>

                                                    <div class="tools">
                                                        <a href="#" class="btn btn-minier btn-info">
                                                            <i class="icon-only ace-icon fa fa-share"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemdiv dialogdiv">
                                                <div class="user">
                                                    <img alt="Jim's Avatar" src="assets/images/avatars/avatar4.png" />
                                                </div>

                                                <div class="body">
                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span class="grey">3 min</span>
                                                    </div>

                                                    <div class="name">
                                                        <a href="#">Jim</a>
                                                    </div>
                                                    <div class="text">Raw denim you probably haven&#39;t heard of them jean shorts Austin.</div>

                                                    <div class="tools">
                                                        <a href="#" class="btn btn-minier btn-info">
                                                            <i class="icon-only ace-icon fa fa-share"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="itemdiv dialogdiv">
                                                <div class="user">
                                                    <img alt="Alexa's Avatar" src="assets/images/avatars/avatar1.png" />
                                                </div>

                                                <div class="body">
                                                    <div class="time">
                                                        <i class="ace-icon fa fa-clock-o"></i>
                                                        <span class="green">4 min</span>
                                                    </div>

                                                    <div class="name">
                                                        <a href="#">Alexa</a>
                                                    </div>
                                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>

                                                    <div class="tools">
                                                        <a href="#" class="btn btn-minier btn-info">
                                                            <i class="icon-only ace-icon fa fa-share"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <form>
                                            <div class="form-actions">
                                                <div class="input-group">
                                                    <input placeholder="Type your message here ..." type="text" class="form-control" name="message" />
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-sm btn-info no-radius" type="button">
                                                            <i class="ace-icon fa fa-share"></i>
                                                            Send
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </form>
                                    </div><!-- /.widget-main -->
                                </div><!-- /.widget-body -->
                            </div><!-- /.widget-box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    
                    <div class="page-header">
                        <!--  PRINT MESSAGE OF ADD CREATED SUCCESSFUL
                        @ if($ message == 'store')
                        <div class="alert alert-block alert-success">
                            <button type="button" class="close" data-dismiss="alert">
                                <i class="ace-icon fa fa-times"></i>
                            </button>
                            <i class="ace-icon fa fa-check green"></i>
                            <strong class="green">
                                Anuncio creado exitosamente.                        
                            </strong>                        
                        </div>
                        @ endif-->
                        @if(Session::has('message'))
                        <div class="alert alert-block alert-success">
                            <button type="button" class="close" data-dismiss="alert">
                                <i class="ace-icon fa fa-times"></i>
                            </button>
                            <i class="ace-icon fa fa-check green"></i>
                            <strong class="green">
                                {{Session::get('message')}}                        
                            </strong>                        
                        </div>
                        @endif

                        <h1>
                            Anuncios publicados
                            <small>
                                <i class="ace-icon fa fa-angle-double-right"></i>
                                overview &amp; stats
                            </small>
                        </h1>
                    </div><!-- /.page-header -->
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
                                        <th class="detail-col">Details</th>-->
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
                                        </td>-->

                                        <td style="width: 20%">
                                            <a href="#">{{$anun->Anuncio}}</a>
                                        </td>
                                        <td style="width: 20%">{{$anun->Descripcion}}</td>
                                        <td class="hidden-480">{{$anun->precio}}</td>
                                        <td style="width: 20%">{{$anun->Fecha}}</td>

                                        <td class="hidden-480">
                                <center><span class="label label-sm label-warning">Expiring</span></center>
                                        </td>

                                        <td>
                                            <div class="hidden-sm hidden-xs btn-group">
<!--                                                <button class="btn btn-xs btn-success">
                                                    <i class="ace-icon fa fa-check bigger-120"></i>
                                                </button>-->

                                                <!--<button class="btn btn-xs btn-info">-->
                                                    <!--<i class="ace-icon fa fa-pencil bigger-120"></i>-->
                                                {!!link_to_route('edit', $title = 'Editar', $parameters = [$anun->Id_anun], $attributes = ['style'=>'color:white; text-decoration:none;','class'=>'btn btn-xs btn-info']);!!}
                                                <!--</button>-->

                                                {!!Form::model($anun,['route'=>['destroy',$anun->Id_anun],'method'=>'DELETE'])!!}
                                                {!!Form::submit('Eliminar',['class'=>'btn btn-xs btn-danger','type'=>'button'])!!}
                                                {!!Form::close()!!}
                                                <!--                                                <button class="btn btn-xs btn-danger ">
                                                                                                    <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                </button>-->

<!--                                                <button class="btn btn-xs btn-warning">
                                                    <i class="ace-icon fa fa-flag bigger-120"></i>
                                                </button>-->
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
                                    </tr>-->
                                    @endforeach

                                </tbody>
                            </table>
                        </div><!-- /.span -->
                        {{ $anuncios->render() }}

                        @endif
                    </div><!-- /.row -->

                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->
@endsection