@extends('dashboard.layouts.frames')
@section('content')
<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="{{ URL::action('DashboardController@index') }}">Inicio</a>
                </li>

                <li class="active">Suiscripción</li>
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
        @if ($message = Session::get('success'))
        <div class="custom-alerts alert alert-success fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
            {!! $message !!}
        </div>
        <?php Session::forget('success'); ?>
        @endif

        @if ($message = Session::get('error'))
        <div class="custom-alerts alert alert-danger fade in">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
            {!! $message !!}
        </div>
        <?php Session::forget('error'); ?>
        @endif
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
                    Mejora tu cuenta
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Obten más funciones
                    </small>
                </h1>
            </div><!-- /.page-header -->

            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <div class="row">
                        <div class="col-xs-8 col-sm-4 col-md-offset-4 pricing-box">
                            <div class="widget-box widget-color-dark">
                                <div class="widget-header">
                                    <h5 class="widget-title bigger lighter">Suscripción Básica</h5>
                                </div>

                                <div class="widget-body">
                                    <div class="widget-main">
                                        <ul class="list-unstyled spaced2">
                                            <li>
                                                <i class="ace-icon fa fa-check green"></i>
                                                10 plantillas prediseñadas
                                            </li>

                                            <li>
                                                <i class="ace-icon fa fa-check green"></i>
                                                200 anuncios por mes
                                            </li>

                                            <li>
                                                <i class="ace-icon fa fa-check green"></i>
                                                100 Direcciónes de Email disponibles a las cuales envíar su anuncio
                                            </li>

                                            <li>
                                                <i class="ace-icon fa fa-check green"></i>
                                                5 Plantillas de mail marketing 
                                            </li>

                                            <li>
                                                <i class="ace-icon fa fa-check green"></i>
                                                $10 Ad Credit
                                            </li>

                                            <li>
                                                <i class="ace-icon fa fa-times red"></i>
                                                Free Domain
                                            </li>
                                        </ul>

                                        <hr />
                                        <div class="price">
                                            $100
                                            <small>/mensual</small>
                                        </div>
                                    </div>

                                    <div>
                                        <form class="form-horizontal" method="POST" id="payment-form" role="form" action="{!! URL::route('paypal') !!}" >
                                            {{ csrf_field() }}

                                            <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">


                                                <div class="col-md-6">
                                                    <input id="amount" type="hidden" class="form-control" name="amount" value="1" autofocus>

                                                    <input id="iduser" type="hidden" class="form-control" name="iduser" value="{{ $iduser}}" autofocus>
                                                    <!--variable de session  $session }<a href=' route('test') }'>Prueba test</a>?= $hoy = date("Y-m-d H:i:s"); ?-->
                                                    @if ($errors->has('amount'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('amount') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-6 col-md-offset-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        Pagar con Paypal
                                                    </button>
                                                </div>
                                            </div>
                                        </form><hr />
                                        <center>
                                        <form action="{{ route('cardsuscribe') }}" method="POST" class="form-horizontal">
                                            {{ csrf_field() }}
                                            <script
                                                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                                data-key="{{config('services.stripe.key') }}"
                                                data-amount="1"
                                                data-name="Anunciate!"
                                                data-description="Paga tu subscripción en Anunciate!.."
                                                data-image="{{ asset('images/logo.ico') }}"
                                                data-locale="">
                                            </script>
                                        </form></center><br><hr />
                                        <center>
                                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                            <input type="hidden" name="cmd" value="_s-xclick">
                                            <input type="hidden" name="hosted_button_id" value="DPWX4W6UXM4S4">
                                            <input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                                            <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                                        </form>
</center>                               <hr />
<center><a href="http://localhost:8180/anunciatec2/Control_Dashuser" class="btn btn-md btn-danger">Cancelar</a></center><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--
                                                <div class="col-xs-6 col-sm-3 pricing-box">
                                                    <div class="widget-box widget-color-orange">
                                                        <div class="widget-header">
                                                            <h5 class="widget-title bigger lighter">Starter Package</h5>
                                                        </div>
                        
                                                        <div class="widget-body">
                                                            <div class="widget-main">
                                                                <ul class="list-unstyled spaced2">
                                                                    <li>
                                                                        <i class="ace-icon fa fa-check green"></i>
                                                                        50 GB Disk Space
                                                                    </li>
                        
                                                                    <li>
                                                                        <i class="ace-icon fa fa-check green"></i>
                                                                        1 TB Bandwidth
                                                                    </li>
                        
                                                                    <li>
                                                                        <i class="ace-icon fa fa-check green"></i>
                                                                        1000 Email Accounts
                                                                    </li>
                        
                                                                    <li>
                                                                        <i class="ace-icon fa fa-check green"></i>
                                                                        100 MySQL Databases
                                                                    </li>
                        
                                                                    <li>
                                                                        <i class="ace-icon fa fa-check green"></i>
                                                                        $25 Ad Credit
                                                                    </li>
                        
                                                                    <li>
                                                                        <i class="ace-icon fa fa-check green"></i>
                                                                        Free Domain
                                                                    </li>
                                                                </ul>
                        
                                                                <hr />
                                                                <div class="price">
                                                                    $10
                                                                    <small>/month</small>
                                                                </div>
                                                            </div>
                        
                                                            <div>
                                                                <a href="#" class="btn btn-block btn-warning">
                                                                    <i class="ace-icon fa fa-shopping-cart bigger-110"></i>
                                                                    <span>Buy</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                        
                                                <div class="col-xs-6 col-sm-3 pricing-box">
                                                    <div class="widget-box widget-color-blue">
                                                        <div class="widget-header">
                                                            <h5 class="widget-title bigger lighter">Business Package</h5>
                                                        </div>
                        
                                                        <div class="widget-body">
                                                            <div class="widget-main">
                                                                <ul class="list-unstyled spaced2">
                                                                    <li>
                                                                        <i class="ace-icon fa fa-check green"></i>
                                                                        200 GB Disk Space
                                                                    </li>
                        
                                                                    <li>
                                                                        <i class="ace-icon fa fa-check green"></i>
                                                                        Unlimited Bandwidth
                                                                    </li>
                        
                                                                    <li>
                                                                        <i class="ace-icon fa fa-check green"></i>
                                                                        1000 Email Accounts
                                                                    </li>
                        
                                                                    <li>
                                                                        <i class="ace-icon fa fa-check green"></i>
                                                                        200 MySQL Databases
                                                                    </li>
                        
                                                                    <li>
                                                                        <i class="ace-icon fa fa-check green"></i>
                                                                        $25 Ad Credit
                                                                    </li>
                        
                                                                    <li>
                                                                        <i class="ace-icon fa fa-check green"></i>
                                                                        Free Domain
                                                                    </li>
                                                                </ul>
                        
                                                                <hr />
                                                                <div class="price">
                                                                    $15
                                                                    <small>/month</small>
                                                                </div>
                                                            </div>
                        
                                                            <div>
                                                                <a href="#" class="btn btn-block btn-primary">
                                                                    <i class="ace-icon fa fa-shopping-cart bigger-110"></i>
                                                                    <span>Buy</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                        
                                                <div class="col-xs-6 col-sm-3 pricing-box">
                                                    <div class="widget-box widget-color-green">
                                                        <div class="widget-header">
                                                            <h5 class="widget-title bigger lighter">Ultimate Package</h5>
                                                        </div>
                        
                                                        <div class="widget-body">
                                                            <div class="widget-main">
                                                                <ul class="list-unstyled spaced2">
                                                                    <li>
                                                                        <i class="ace-icon fa fa-check green"></i>
                                                                        Unlimited Space
                                                                    </li>
                        
                                                                    <li>
                                                                        <i class="ace-icon fa fa-check green"></i>
                                                                        Unlimited Bandwidth
                                                                    </li>
                        
                                                                    <li>
                                                                        <i class="ace-icon fa fa-check green"></i>
                                                                        Unlimited Email Accounts
                                                                    </li>
                        
                                                                    <li>
                                                                        <i class="ace-icon fa fa-check green"></i>
                                                                        Unlimited MySQL Databases
                                                                    </li>
                        
                                                                    <li>
                                                                        <i class="ace-icon fa fa-check green"></i>
                                                                        $50 Ad Credit
                                                                    </li>
                        
                                                                    <li>
                                                                        <i class="ace-icon fa fa-check green"></i>
                                                                        2 Free Domains
                                                                    </li>
                                                                </ul>
                        
                                                                <hr />
                                                                <div class="price">
                                                                    $25
                                                                    <small>/month</small>
                                                                </div>
                                                            </div>
                        
                                                            <div>
                                                                <a href="#" class="btn btn-block btn-success">
                                                                    <i class="ace-icon fa fa-shopping-cart bigger-110"></i>
                                                                    <span>Buy</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>-->
                    </div>

                    <div class="space-24"></div>
                    <!--                    <h3 class="header smaller red">Small Style</h3>
                    
                                        <div class="row">
                                            <div class="col-xs-4 col-sm-3 pricing-span-header">
                                                <div class="widget-box transparent">
                                                    <div class="widget-header">
                                                        <h5 class="widget-title bigger lighter">Package Name</h5>
                                                    </div>
                    
                                                    <div class="widget-body">
                                                        <div class="widget-main no-padding">
                                                            <ul class="list-unstyled list-striped pricing-table-header">
                                                                <li>Disk Space </li>
                                                                <li>Bandwidth </li>
                                                                <li>Email Accounts </li>
                                                                <li>MySQL Databases </li>
                                                                <li>Ad Credit </li>
                                                                <li>Free Domain </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                    
                                            <div class="col-xs-8 col-sm-9 pricing-span-body">
                                                <div class="pricing-span">
                                                    <div class="widget-box pricing-box-small widget-color-red3">
                                                        <div class="widget-header">
                                                            <h5 class="widget-title bigger lighter">Basic</h5>
                                                        </div>
                    
                                                        <div class="widget-body">
                                                            <div class="widget-main no-padding">
                                                                <ul class="list-unstyled list-striped pricing-table">
                                                                    <li> 10 GB </li>
                                                                    <li> 200 GB </li>
                                                                    <li> 100 </li>
                                                                    <li> 10 </li>
                                                                    <li> $10 </li>
                    
                                                                    <li>
                                                                        <i class="ace-icon fa fa-times red"></i>
                                                                    </li>
                                                                </ul>
                    
                                                                <div class="price">
                                                                    <span class="label label-lg label-inverse arrowed-in arrowed-in-right">
                                                                        $5
                                                                        <small>/month</small>
                                                                    </span>
                                                                </div>
                                                            </div>
                    
                                                            <div>
                                                                <a href="#" class="btn btn-block btn-sm btn-danger">
                                                                    <span>Buy</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                    
                                                <div class="pricing-span">
                                                    <div class="widget-box pricing-box-small widget-color-orange">
                                                        <div class="widget-header">
                                                            <h5 class="widget-title bigger lighter">Starter</h5>
                                                        </div>
                    
                                                        <div class="widget-body">
                                                            <div class="widget-main no-padding">
                                                                <ul class="list-unstyled list-striped pricing-table">
                                                                    <li> 50 GB </li>
                                                                    <li> 1 TB </li>
                                                                    <li> 1000 </li>
                                                                    <li> 100 </li>
                                                                    <li> $25 </li>
                    
                                                                    <li>
                                                                        <i class="ace-icon fa fa-check green"></i>
                                                                        1
                                                                    </li>
                                                                </ul>
                    
                                                                <div class="price">
                                                                    <span class="label label-lg label-inverse arrowed-in arrowed-in-right">
                                                                        $10
                                                                        <small>/month</small>
                                                                    </span>
                                                                </div>
                                                            </div>
                    
                                                            <div>
                                                                <a href="#" class="btn btn-block btn-sm btn-warning">
                                                                    <span>Buy</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                    
                                                <div class="pricing-span">
                                                    <div class="widget-box pricing-box-small widget-color-blue">
                                                        <div class="widget-header">
                                                            <h5 class="widget-title bigger lighter">Business</h5>
                                                        </div>
                    
                                                        <div class="widget-body">
                                                            <div class="widget-main no-padding">
                                                                <ul class="list-unstyled list-striped pricing-table">
                                                                    <li> 200 GB </li>
                                                                    <li> Unlimited </li>
                                                                    <li> 1000 </li>
                                                                    <li> 200 </li>
                                                                    <li> $25 </li>
                    
                                                                    <li>
                                                                        <i class="ace-icon fa fa-check green"></i>
                                                                        1
                                                                    </li>
                                                                </ul>
                    
                                                                <div class="price">
                                                                    <span class="label label-lg label-inverse arrowed-in arrowed-in-right">
                                                                        $15
                                                                        <small>/month</small>
                                                                    </span>
                                                                </div>
                                                            </div>
                    
                                                            <div>
                                                                <a href="#" class="btn btn-block btn-sm btn-primary">
                                                                    <span>Buy</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                    
                                                <div class="pricing-span">
                                                    <div class="widget-box pricing-box-small widget-color-green">
                                                        <div class="widget-header">
                                                            <h5 class="widget-title bigger lighter">Unlimited</h5>
                                                        </div>
                    
                                                        <div class="widget-body">
                                                            <div class="widget-main no-padding">
                                                                <ul class="list-unstyled list-striped pricing-table">
                                                                    <li> Unlimited </li>
                                                                    <li> Unlimited </li>
                                                                    <li> Unlimited </li>
                                                                    <li> Unlimited </li>
                                                                    <li> $50 </li>
                    
                                                                    <li>
                                                                        <i class="ace-icon fa fa-check green"></i>
                                                                        2
                                                                    </li>
                                                                </ul>
                    
                                                                <div class="price">
                                                                    <span class="label label-lg label-inverse arrowed-in arrowed-in-right">
                                                                        $25
                                                                        <small>/month</small>
                                                                    </span>
                                                                </div>
                                                            </div>
                    
                                                            <div>
                                                                <a href="#" class="btn btn-block btn-sm btn-success">
                                                                    <span>Buy</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                    
                                                <div class="pricing-span">
                                                    <div class="widget-box pricing-box-small widget-color-grey">
                                                        <div class="widget-header">
                                                            <h5 class="widget-title bigger lighter">Extreme</h5>
                                                        </div>
                    
                                                        <div class="widget-body">
                                                            <div class="widget-main no-padding">
                                                                <ul class="list-unstyled list-striped pricing-table">
                                                                    <li> Unlimited </li>
                                                                    <li> Unlimited </li>
                                                                    <li> Unlimited </li>
                                                                    <li> Unlimited </li>
                                                                    <li> $100 </li>
                    
                                                                    <li>
                                                                        <i class="ace-icon fa fa-check green"></i>
                                                                        3
                                                                    </li>
                                                                </ul>
                    
                                                                <div class="price">
                                                                    <span class="label label-lg label-inverse arrowed-in arrowed-in-right">
                                                                        $30
                                                                        <small>/month</small>
                                                                    </span>
                                                                </div>
                                                            </div>
                    
                                                            <div>
                                                                <a href="#" class="btn btn-block btn-sm btn-grey">
                                                                    <span>Buy</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->
@endsection