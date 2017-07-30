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
                    Contenido pendiente del usuario
<!--                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        3 styles with inline editable feature
                    </small>-->
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
                                        @if($user->Foto_perfil != '')
                                        <img class="editable img-responsive" alt="Alex's Avatar" id="avatar2" src="{{ asset('files/profile/'.$user->Foto_perfil) }}" />
                                        @else
                                        <img class="editable img-responsive" alt="Alex's Avatar" id="avatar2" src="{{ asset('files/profile/sombra.png') }}" />
                                        @endif
                                    </span>

                                    <div class="space-4"></div>

                                    <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                        <div class="inline position-relative">
                                            <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                                                <i class="ace-icon fa fa-circle light-green"></i>
                                                &nbsp;
                                                <span class="white">{{ $user->Nom_user.' '.$user->App_user  }}</span>
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
                                        <!--                                        <a href="#" class="btn btn-link">
                                                                                    <i class="ace-icon fa fa-plus-circle bigger-120 green"></i>
                                                                                    Add as a friend
                                                                                </a>-->

                                        <a href="#" class="btn btn-link">
                                            <i class="ace-icon fa fa-envelope bigger-120 pink"></i>
                                            Envíar un mensaje
                                        </a>

                                        <a href="{{ $user->Website }}" class="btn btn-link">
                                            <i class="ace-icon fa fa-globe bigger-125 blue"></i>
                                            {{ $user->Website }}
                                        </a>
                                        <a href="#" class="btn btn-link">
                                            <i class="ace-icon fa fa-globe bigger-125 blue"></i>
                                            {{ $user->email }}
                                        </a>
                                    </div>

                                    <div class="space-6"></div>

                                    <div class="profile-social-links align-center">
                                        <a href="{{ $user->Social }}" class="tooltip-info" title="" data-original-title="Visit my Facebook">
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
                                            <span class="editable" id="username">{{ $user->username }}</span>
                                        </div>
                                    </div>

                                    <div class="profile-info-row">
                                        <div class="profile-info-name"> Ubicación </div>

                                        <div class="profile-info-value">
                                            <i class="fa fa-map-marker light-orange bigger-110"></i>
                                            <span class="editable" id="country">{{ $estado->Nom_est }}</span>
                                            <span class="editable" id="city">{{ $mun->Nom_mun }}</span>
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
                                            <span class="editable" id="signup">{{ $user->created }}</span>
                                        </div>
                                    </div>

                                    <div class="profile-info-row">
                                        <div class="profile-info-name"> Ultima conexión </div>

                                        <div class="profile-info-value">
                                            <span class="editable" id="login">{{ $user->last_login }}</span>
                                        </div>
                                    </div>

                                    <div class="profile-info-row">
                                        <div class="profile-info-name"> Acerca </div>

                                        <div class="profile-info-value">
                                            <span class="editable" id="about">{{ $user->Acerca }}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="space-20"></div>

                            </div>

                            <!--                            <div class="row">
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
                            
                                                                                    <button class="btn btn-xs btn-info">
                                                                                        <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                                                    {!!link_to_route('edit', $title = 'Editar', $parameters = [$anun->Id_anun], $attributes = ['style'=>'color:white; text-decoration:none;','class'=>'btn btn-xs btn-info']);!!}
                                                                                    </button>
                            
                                                                                    {!!Form::model($anun,['route'=>['destroy',$anun->Id_anun],'method'=>'DELETE'])!!}
                                                                                    {!!Form::submit('Eliminar',['class'=>'btn btn-xs btn-danger','type'=>'button'])!!}
                                                                                    {!!Form::close()!!}
                                                                                                                                    <button class="btn btn-xs btn-danger ">
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
                                                                        @endforeach
                                                                    </tbody>
                                                                </table> $anuncios->render() }}
                                                            </div> /.span 
                                                            
                                                            @endif
                                                        </div> /.row -->

                            <div class="row">
                                <div class="col-xs-12">
                                    <h3 class="header smaller lighter blue">Anuncios publicados</h3>  

                                    <div class="clearfix">
                                        <div class="pull-right tableTools-container">
                                            <div class="dt-buttons btn-overlap btn-group" > <a href="{{ route('excelpendientes') }}" class="dt-button buttons-collection buttons-colvis btn btn-white btn-primary btn-bold">
                                            <img src="{{ asset('images/excel1.png') }}" height="20px" width="20px" style="float: right;">
                                                </a>
                                            </div>
                                        </div>
                                       
                                        <form class="form-search" action="{{ route('filtro') }}"  method="POST">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-8">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            Filtrar anuncios por:
                                                        </span>

                                                        <select type="text" class="form-control search-query" placeholder="Type your query" name="id_cat">
                                                            @foreach($categoria as $cat)
                                                            <option value="{{ $cat->Id_cat }}">{{ $cat->Nom_cat }}</option>
                                                            @endforeach
                                                        </select>
                                                        <input name="id_user" type="hidden" value="{{ $user->id }}">
                                                        <span class="input-group-btn">
                                                            <button type="submit" class="btn btn-purple btn-sm">
                                                                <span class="ace-icon fa fa-search icon-on-right bigger-110"></span>
                                                                Filtrar
                                                            </button>
                                                        </span>
                                                        <span class="input-group-btn">
                                                            <a href="{{ URL::action('DashboardController@pendientes', ['id' => base64_encode($user->id)]) }}" class="btn btn-info btn-sm">
                                                                <span class="ace-icon fa fa-search icon-on-right bigger-110"></span>
                                                                Ver todos
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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

                                                    <th>Cambiar estatus</th>
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
                                                        <a href="#my-modal" data-toggle="modal" onclick="anuncio( {{ $anun->Id_anun }} );">{{$anun->Anuncio}}</a>
                                                    </td>

                                                    <td style="width: 20%">
                                                        {{$anun->Descripcion }}</a>
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

                                                    <td>
                                                        <div class="hidden-sm hidden-xs action-buttons">
                                                            <a class="blue" href="#my-modal" data-toggle="modal" onclick="anuncio( {{ $anun->Id_anun }} );">
                                                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                            </a>

                                                            <a class="green" href="{{ URL::action('DashboardController@statusanuncio',['id_anun'=>$anun->Id_anun,'bann'=>$anun->activo,'idu'=>$anun->id]) }}">
                                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                            </a>

                                                            <a class="red" href="{{ URL::action('DashboardController@blockanun',['id_anun'=>$anun->Id_anun,'bann'=>$anun->activo,'idu'=>$anun->id]) }}">
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
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="my-modal" class="modal fade" tabindex="-1">
                        <div class="modal-dialog" style="width: 900px;">
                            <div class="modal-content" style="height: 550px; overflow:hidden; word-wrap: break-word;">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h3 class="smaller lighter blue no-margin">Infomación del anuncio</h3>
                                </div>

                                <div class="modal-body">
                                    <table class="table table-bordered table-responsive" style="font-size: 16px;">
                                        <tbody id="anuncio">
                                            <tr><td rowspan="3">Imagen 1</td><td><span >Titulo:</span><br>columna 2</td><td>Columna Anuncio 3</td></tr>
                                            <tr>
                                                <td colspan="2">Anuncio</td>
                                            </tr>
                                            <tr>
                                                <td>Descripción</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-sm btn-danger pull-right" data-dismiss="modal">
                                        <i class="ace-icon fa fa-times"></i>
                                        Close
                                    </button>
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