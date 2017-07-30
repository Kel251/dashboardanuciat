<!DOCTYPE html>
<html lang="en">
    <head>

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>User Profile Page - Ace Admin</title>

        <meta name="description" content="3 styles with inline editable feature" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->
        {!!Html::style('assets/css/bootstrap.min.css')!!}
        {!!Html::style('assets/font-awesome/4.5.0/css/font-awesome.min.css')!!}

        <!-- page specific plugin styles -->
        {!!Html::style('assets/css/jquery-ui.custom.min.css')!!}
        {!!Html::style('assets/css/jquery.gritter.min.css')!!}
        {!!Html::style('assets/css/select2.min.css')!!}
        {!!Html::style('assets/css/bootstrap-datepicker3.min.css')!!}
        {!!Html::style('assets/css/bootstrap-editable.min.css')!!}

        <!-- text fonts -->
        {!!Html::style('assets/css/fonts.googleapis.com.css')!!}

        <!-- ace styles -->
        {!!Html::style('assets/css/ace.min.css')!!}
        <link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

        <!--[if lte IE 9]>
                <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
        <![endif]-->
        {!!Html::style('assets/css/ace-skins.min.css')!!}
        {!!Html::style('assets/css/ace-rtl.min.css')!!}

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
        <![endif]-->

        <!-- inline styles related to this page -->

        <!-- ace settings handler -->
        {!!Html::script('assets/js/ace-extra.min.js')!!}

        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
        <style type="text/css">
            #googleMap {
                margin: 10px auto;
                width: 90%;
                height: 380px;
                border: 2px solid #666666;
                border-radius: 6px;
            }
        </style>

    </head>

    <body class="no-skin">
        @include('dashboard.layouts.header')

        <div class="main-container ace-save-state" id="main-container">
            <script type="text/javascript">
                try {
                    ace.settings.loadState('main-container')
                } catch (e) {
                }
            </script>

            @include('dashboard.layouts.sidebar')

            @yield('content')

            @include('dashboard.layouts.footer')

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->

        <!-- basic scripts -->

        <!--[if !IE]> -->
        {!!Html::script('assets/js/jquery-2.1.4.min.js')!!}

        <!-- <![endif]-->

        <!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
        <script type="text/javascript">
            if ('ontouchstart' in document.documentElement)
                document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
        </script>
        {!!Html::script('assets/js/bootstrap.min.js')!!}

        <!-- page specific plugin scripts -->

        <!--[if lte IE 8]>
          <script src="assets/js/excanvas.min.js"></script>
        <![endif]-->

        {!!Html::script('assets/js/jquery-ui.custom.min.js')!!}	
        {!!Html::script('assets/js/jquery.ui.touch-punch.min.js')!!}
        {!!Html::script('assets/js/jquery.gritter.min.js')!!}
        {!!Html::script('assets/js/bootbox.js')!!}
        {!!Html::script('assets/js/jquery.easypiechart.min.js')!!}
        {!!Html::script('assets/js/bootstrap-datepicker.min.js')!!}
        {!!Html::script('assets/js/jquery.hotkeys.index.min.js')!!}
        {!!Html::script('assets/js/bootstrap-wysiwyg.min.js')!!}
        {!!Html::script('assets/js/select2.min.js')!!}
        {!!Html::script('assets/js/spinbox.min.js')!!}
        {!!Html::script('assets/js/bootstrap-editable.min.js')!!}
        {!!Html::script('assets/js/ace-editable.min.js')!!}
        {!!Html::script('assets/js/jquery.maskedinput.min.js')!!}


        {!!Html::script('assets/js/jquery.dataTables.min.js')!!}
        {!!Html::script('assets/js/jquery.dataTables.bootstrap.min.js')!!}
        {!!Html::script('assets/js/dataTables.buttons.min.js')!!}
        {!!Html::script('assets/js/buttons.flash.min.js')!!}
        {!!Html::script('assets/js/buttons.html5.min.js')!!}
        {!!Html::script('assets/js/buttons.print.min.js')!!}
        {!!Html::script('assets/js/buttons.colVis.min.js')!!}
        {!!Html::script('assets/js/dataTables.select.min.js')!!}

        <!-- ace scripts -->
        {!!Html::script('assets/js/ace-elements.min.js')!!}
        {!!Html::script('assets/js/ace.min.js')!!}

        <!-- inline scripts related to this page -->
        <script type="text/javascript">
            jQuery(function ($) {

                //editables on first profile page
                $.fn.editable.defaults.mode = 'inline';
                $.fn.editableform.loading = "<div class='editableform-loading'><i class='ace-icon fa fa-spinner fa-spin fa-2x light-blue'></i></div>";
                $.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="ace-icon fa fa-check"></i></button>' +
                        '<button type="button" class="btn editable-cancel"><i class="ace-icon fa fa-times"></i></button>';

                //editables 

                //text editable
                $('#username')
                        .editable({
                            type: 'text',
                            name: 'username'
                        });



                //select2 editable
                var countries = [];
                $.each({"CA": "Canada", "IN": "India", "NL": "Netherlands", "TR": "Turkey", "US": "United States"}, function (k, v) {
                    countries.push({id: k, text: v});
                });

                var cities = [];
                cities["CA"] = [];
                $.each(["Toronto", "Ottawa", "Calgary", "Vancouver"], function (k, v) {
                    cities["CA"].push({id: v, text: v});
                });
                cities["IN"] = [];
                $.each(["Delhi", "Mumbai", "Bangalore"], function (k, v) {
                    cities["IN"].push({id: v, text: v});
                });
                cities["NL"] = [];
                $.each(["Amsterdam", "Rotterdam", "The Hague"], function (k, v) {
                    cities["NL"].push({id: v, text: v});
                });
                cities["TR"] = [];
                $.each(["Ankara", "Istanbul", "Izmir"], function (k, v) {
                    cities["TR"].push({id: v, text: v});
                });
                cities["US"] = [];
                $.each(["New York", "Miami", "Los Angeles", "Chicago", "Wysconsin"], function (k, v) {
                    cities["US"].push({id: v, text: v});
                });

                var currentValue = "NL";
                $('#country').editable({
                    type: 'select2',
                    value: 'NL',
                    //onblur:'ignore',
                    source: countries,
                    select2: {
                        'width': 140
                    },
                    success: function (response, newValue) {
                        if (currentValue == newValue)
                            return;
                        currentValue = newValue;

                        var new_source = (!newValue || newValue == "") ? [] : cities[newValue];

                        //the destroy method is causing errors in x-editable v1.4.6+
                        //it worked fine in v1.4.5
                        /**			
                         $('#city').editable('destroy').editable({
                         type: 'select2',
                         source: new_source
                         }).editable('setValue', null);
                         */

                        //so we remove it altogether and create a new element
                        var city = $('#city').removeAttr('id').get(0);
                        $(city).clone().attr('id', 'city').text('Select City').editable({
                            type: 'select2',
                            value: null,
                            //onblur:'ignore',
                            source: new_source,
                            select2: {
                                'width': 140
                            }
                        }).insertAfter(city);//insert it after previous instance
                        $(city).remove();//remove previous instance

                    }
                });

                $('#city').editable({
                    type: 'select2',
                    value: 'Amsterdam',
                    //onblur:'ignore',
                    source: cities[currentValue],
                    select2: {
                        'width': 140
                    }
                });



                //custom date editable
                $('#signup').editable({
                    type: 'adate',
                    date: {
                        //datepicker plugin options
                        format: 'yyyy/mm/dd',
                        viewformat: 'yyyy/mm/dd',
                        weekStart: 1

                                //,nativeUI: true//if true and browser support input[type=date], native browser control will be used
                                //,format: 'yyyy-mm-dd',
                                //viewformat: 'yyyy-mm-dd'
                    }
                })

                $('#age').editable({
                    type: 'spinner',
                    name: 'age',
                    spinner: {
                        min: 16,
                        max: 99,
                        step: 1,
                        on_sides: true
                                //,nativeUI: true//if true and browser support input[type=number], native browser control will be used
                    }
                });


                $('#login').editable({
                    type: 'slider',
                    name: 'login',
                    slider: {
                        min: 1,
                        max: 50,
                        width: 100
                                //,nativeUI: true//if true and browser support input[type=range], native browser control will be used
                    },
                    success: function (response, newValue) {
                        if (parseInt(newValue) == 1)
                            $(this).html(newValue + " hour ago");
                        else
                            $(this).html(newValue + " hours ago");
                    }
                });

                $('#about').editable({
                    mode: 'inline',
                    type: 'wysiwyg',
                    name: 'about',
                    wysiwyg: {
                        //css : {'max-width':'300px'}
                    },
                    success: function (response, newValue) {
                    }
                });



                // *** editable avatar *** //
                try {//ie8 throws some harmless exceptions, so let's catch'em

                    //first let's add a fake appendChild method for Image element for browsers that have a problem with this
                    //because editable plugin calls appendChild, and it causes errors on IE at unpredicted points
                    try {
                        document.createElement('IMG').appendChild(document.createElement('B'));
                    } catch (e) {
                        Image.prototype.appendChild = function (el) {}
                    }

                    var last_gritter
                    $('#avatar').editable({
                        type: 'image',
                        name: 'avatar',
                        value: null,
                        //onblur: 'ignore',  //don't reset or hide editable onblur?!
                        image: {
                            //specify ace file input plugin's options here
                            btn_choose: 'Change Avatar',
                            droppable: true,
                            maxSize: 110000, //~100Kb

                            //and a few extra ones here
                            name: 'avatar', //put the field name here as well, will be used inside the custom plugin
                            on_error: function (error_type) {//on_error function will be called when the selected file has a problem
                                if (last_gritter)
                                    $.gritter.remove(last_gritter);
                                if (error_type == 1) {//file format error
                                    last_gritter = $.gritter.add({
                                        title: 'File is not an image!',
                                        text: 'Please choose a jpg|gif|png image!',
                                        class_name: 'gritter-error gritter-center'
                                    });
                                } else if (error_type == 2) {//file size rror
                                    last_gritter = $.gritter.add({
                                        title: 'File too big!',
                                        text: 'Image size should not exceed 100Kb!',
                                        class_name: 'gritter-error gritter-center'
                                    });
                                } else {//other error
                                }
                            },
                            on_success: function () {
                                $.gritter.removeAll();
                            }
                        },
                        url: function (params) {
                            // ***UPDATE AVATAR HERE*** //
                            //for a working upload example you can replace the contents of this function with 
                            //examples/profile-avatar-update.js

                            var deferred = new $.Deferred

                            var value = $('#avatar').next().find('input[type=hidden]:eq(0)').val();
                            if (!value || value.length == 0) {
                                deferred.resolve();
                                return deferred.promise();
                            }


                            //dummy upload
                            setTimeout(function () {
                                if ("FileReader" in window) {
                                    //for browsers that have a thumbnail of selected image
                                    var thumb = $('#avatar').next().find('img').data('thumb');
                                    if (thumb)
                                        $('#avatar').get(0).src = thumb;
                                }

                                deferred.resolve({'status': 'OK'});

                                if (last_gritter)
                                    $.gritter.remove(last_gritter);
                                last_gritter = $.gritter.add({
                                    title: 'Avatar Updated!',
                                    text: 'Uploading to server can be easily implemented. A working example is included with the template.',
                                    class_name: 'gritter-info gritter-center'
                                });

                            }, parseInt(Math.random() * 800 + 800))

                            return deferred.promise();

                            // ***END OF UPDATE AVATAR HERE*** //
                        },
                        success: function (response, newValue) {
                        }
                    })
                } catch (e) {
                }

                /**
                 //let's display edit mode by default?
                 var blank_image = true;//somehow you determine if image is initially blank or not, or you just want to display file input at first
                 if(blank_image) {
                 $('#avatar').editable('show').on('hidden', function(e, reason) {
                 if(reason == 'onblur') {
                 $('#avatar').editable('show');
                 return;
                 }
                 $('#avatar').off('hidden');
                 })
                 }
                 */

                //another option is using modals
                $('#avatar2').on('click', function () {
                    var modal =
                            '<div class="modal fade">\
                                  <div class="modal-dialog">\
                                   <div class="modal-content">\
                                        <div class="modal-header">\
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>\
                                                <h4 class="blue">Change Avatar</h4>\
                                        </div>\
                                        \
                                        <form class="no-margin">\
                                         <div class="modal-body">\
                                                <div class="space-4"></div>\
                                                <div style="width:75%;margin-left:12%;"><input type="file" name="file-input" /></div>\
                                         </div>\
                                        \
                                         <div class="modal-footer center">\
                                                <button type="submit" class="btn btn-sm btn-success"><i class="ace-icon fa fa-check"></i> Submit</button>\
                                                <button type="button" class="btn btn-sm" data-dismiss="modal"><i class="ace-icon fa fa-times"></i> Cancel</button>\
                                         </div>\
                                        </form>\
                                  </div>\
                                 </div>\
                                </div>';


                    var modal = $(modal);
                    modal.modal("show").on("hidden", function () {
                        modal.remove();
                    });

                    var working = false;

                    var form = modal.find('form:eq(0)');
                    var file = form.find('input[type=file]').eq(0);
                    file.ace_file_input({
                        style: 'well',
                        btn_choose: 'Click to choose new avatar',
                        btn_change: null,
                        no_icon: 'ace-icon fa fa-picture-o',
                        thumbnail: 'small',
                        before_remove: function () {
                            //don't remove/reset files while being uploaded
                            return !working;
                        },
                        allowExt: ['jpg', 'jpeg', 'png', 'gif'],
                        allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
                    });

                    form.on('submit', function () {
                        if (!file.data('ace_input_files'))
                            return false;

                        file.ace_file_input('disable');
                        form.find('button').attr('disabled', 'disabled');
                        form.find('.modal-body').append("<div class='center'><i class='ace-icon fa fa-spinner fa-spin bigger-150 orange'></i></div>");

                        var deferred = new $.Deferred;
                        working = true;
                        deferred.done(function () {
                            form.find('button').removeAttr('disabled');
                            form.find('input[type=file]').ace_file_input('enable');
                            form.find('.modal-body > :last-child').remove();

                            modal.modal("hide");

                            var thumb = file.next().find('img').data('thumb');
                            if (thumb)
                                $('#avatar2').get(0).src = thumb;

                            working = false;
                        });


                        setTimeout(function () {
                            deferred.resolve();
                        }, parseInt(Math.random() * 800 + 800));

                        return false;
                    });

                });



                //////////////////////////////
                $('#profile-feed-1').ace_scroll({
                    height: '250px',
                    mouseWheelLock: true,
                    alwaysVisible: true
                });

                $('a[ data-original-title]').tooltip();

                $('.easy-pie-chart.percentage').each(function () {
                    var barColor = $(this).data('color') || '#555';
                    var trackColor = '#E2E2E2';
                    var size = parseInt($(this).data('size')) || 72;
                    $(this).easyPieChart({
                        barColor: barColor,
                        trackColor: trackColor,
                        scaleColor: false,
                        lineCap: 'butt',
                        lineWidth: parseInt(size / 10),
                        animate: false,
                        size: size
                    }).css('color', barColor);
                });

                ///////////////////////////////////////////

                //right & left position
                //show the user info on right or left depending on its position
                $('#user-profile-2 .memberdiv').on('mouseenter touchstart', function () {
                    var $this = $(this);
                    var $parent = $this.closest('.tab-pane');

                    var off1 = $parent.offset();
                    var w1 = $parent.width();

                    var off2 = $this.offset();
                    var w2 = $this.width();

                    var place = 'left';
                    if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2))
                        place = 'right';

                    $this.find('.popover').removeClass('right left').addClass(place);
                }).on('click', function (e) {
                    e.preventDefault();
                });


                ///////////////////////////////////////////
                $('#user-profile-3')
                        .find('input[type=file]').ace_file_input({
                    style: 'well',
                    btn_choose: 'Change avatar',
                    btn_change: null,
                    no_icon: 'ace-icon fa fa-picture-o',
                    thumbnail: 'large',
                    droppable: true,
                    allowExt: ['jpg', 'jpeg', 'png', 'gif'],
                    allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
                })
                        .end().find('button[type=reset]').on(ace.click_event, function () {
                    $('#user-profile-3 input[type=file]').ace_file_input('reset_input');
                })
                        .end().find('.date-picker').datepicker().next().on(ace.click_event, function () {
                    $(this).prev().focus();
                })
                $('.input-mask-phone').mask('(999) 999-9999');

                $('#user-profile-3').find('input[type=file]').ace_file_input('show_file_list', [{type: 'image', name: $('#avatar').attr('src')}]);


                ////////////////////
                //change profile
                $('[data-toggle="buttons"] .btn').on('click', function (e) {
                    var target = $(this).find('input[type=radio]');
                    var which = parseInt(target.val());
                    $('.user-profile').parent().addClass('hide');
                    $('#user-profile-' + which).parent().removeClass('hide');
                });



                /////////////////////////////////////
                $(document).one('ajaxloadstart.page', function (e) {
                    //in ajax mode, remove remaining elements before leaving page
                    try {
                        $('.editable').editable('destroy');
                    } catch (e) {
                    }
                    $('[class*=select2]').remove();
                });
            });
        </script>

        <!-- inline scripts related to this page -->
        <script type="text/javascript">
            jQuery(function ($) {
                //initiate dataTables plugin
                var myTable =
                        $('#dynamic-table')
                        //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                        .DataTable({
                            bAutoWidth: false,
                            "aoColumns": [
                                {"bSortable": false},
                                null, null, null, null, null,
                                {"bSortable": false}
                            ],
                            "aaSorting": [],
                            //"bProcessing": true,
                            //"bServerSide": true,
                            //"sAjaxSource": "http://127.0.0.1/table.php"	,

                            //,
                            //"sScrollY": "200px",
                            //"bPaginate": false,

                            //"sScrollX": "100%",
                            //"sScrollXInner": "120%",
                            //"bScrollCollapse": true,
                            //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
                            //you may want to wrap the table inside a "div.dataTables_borderWrap" element

                            //"iDisplayLength": 50


                            select: {
                                style: 'multi'
                            }
                        });



                $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';

                new $.fn.dataTable.Buttons(myTable, {
                    buttons: [
                        {
                            "extend": "colvis",
                            "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
                            "className": "btn btn-white btn-primary btn-bold",
                            columns: ':not(:first):not(:last)'
                        },
                        {
                            "extend": "copy",
                            "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
                            "className": "btn btn-white btn-primary btn-bold"
                        },
                        {
                            "extend": "csv",
                            "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
                            "className": "btn btn-white btn-primary btn-bold"
                        },
                        {
                            "extend": "excel",
                            "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
                            "className": "btn btn-white btn-primary btn-bold"
                        },
                        {
                            "extend": "pdf",
                            "text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
                            "className": "btn btn-white btn-primary btn-bold"
                        },
                        {
                            "extend": "print",
                            "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
                            "className": "btn btn-white btn-primary btn-bold",
                            autoPrint: false,
                            message: 'This print was produced using the Print button for DataTables'
                        }
                    ]
                });
                myTable.buttons().container().appendTo($('.tableTools-container'));

                //style the message box
                var defaultCopyAction = myTable.button(1).action();
                myTable.button(1).action(function (e, dt, button, config) {
                    defaultCopyAction(e, dt, button, config);
                    $('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
                });


                var defaultColvisAction = myTable.button(0).action();
                myTable.button(0).action(function (e, dt, button, config) {

                    defaultColvisAction(e, dt, button, config);


                    if ($('.dt-button-collection > .dropdown-menu').length == 0) {
                        $('.dt-button-collection')
                                .wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
                                .find('a').attr('href', '#').wrap("<li />")
                    }
                    $('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
                });

                ////

                setTimeout(function () {
                    $($('.tableTools-container')).find('a.dt-button').each(function () {
                        var div = $(this).find(' > div').first();
                        if (div.length == 1)
                            div.tooltip({container: 'body', title: div.parent().text()});
                        else
                            $(this).tooltip({container: 'body', title: $(this).text()});
                    });
                }, 500);





                myTable.on('select', function (e, dt, type, index) {
                    if (type === 'row') {
                        $(myTable.row(index).node()).find('input:checkbox').prop('checked', true);
                    }
                });
                myTable.on('deselect', function (e, dt, type, index) {
                    if (type === 'row') {
                        $(myTable.row(index).node()).find('input:checkbox').prop('checked', false);
                    }
                });




                /////////////////////////////////
                //table checkboxes
                $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);

                //select/deselect all rows according to table header checkbox
                $('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function () {
                    var th_checked = this.checked;//checkbox inside "TH" table header

                    $('#dynamic-table').find('tbody > tr').each(function () {
                        var row = this;
                        if (th_checked)
                            myTable.row(row).select();
                        else
                            myTable.row(row).deselect();
                    });
                });

                //select/deselect a row when the checkbox is checked/unchecked
                $('#dynamic-table').on('click', 'td input[type=checkbox]', function () {
                    var row = $(this).closest('tr').get(0);
                    if (this.checked)
                        myTable.row(row).deselect();
                    else
                        myTable.row(row).select();
                });



                $(document).on('click', '#dynamic-table .dropdown-toggle', function (e) {
                    e.stopImmediatePropagation();
                    e.stopPropagation();
                    e.preventDefault();
                });



                //And for the first simple table, which doesn't have TableTools or dataTables
                //select/deselect all rows according to table header checkbox
                var active_class = 'active';
                $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function () {
                    var th_checked = this.checked;//checkbox inside "TH" table header

                    $(this).closest('table').find('tbody > tr').each(function () {
                        var row = this;
                        if (th_checked)
                            $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                        else
                            $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
                    });
                });

                //select/deselect a row when the checkbox is checked/unchecked
                $('#simple-table').on('click', 'td input[type=checkbox]', function () {
                    var $row = $(this).closest('tr');
                    if ($row.is('.detail-row '))
                        return;
                    if (this.checked)
                        $row.addClass(active_class);
                    else
                        $row.removeClass(active_class);
                });



                /********************************/
                //add tooltip for small view action buttons in dropdown menu
                $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});

                //tooltip placement on right or left
                function tooltip_placement(context, source) {
                    var $source = $(source);
                    var $parent = $source.closest('table')
                    var off1 = $parent.offset();
                    var w1 = $parent.width();

                    var off2 = $source.offset();
                    //var w2 = $source.width();

                    if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2))
                        return 'right';
                    return 'left';
                }




                /***************/
                $('.show-details-btn').on('click', function (e) {
                    e.preventDefault();
                    $(this).closest('tr').next().toggleClass('open');
                    $(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
                });
                /***************/





                /**
                 //add horizontal scrollbars to a simple table
                 $('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
                 {
                 horizontal: true,
                 styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
                 size: 2000,
                 mouseWheelLock: true
                 }
                 ).css('padding-top', '12px');
                 */


            });
        </script>

        <script type="text/javascript">
            function anuncio(id) {
                var uri = "{{ route('anuncio') }}";
                var datosjquery = {
                    id_a: id,
                    _method: "post",
                    _token: "{{ csrf_token() }}"
                };
                $('#anuncio').empty();
                $.post(uri, datosjquery, function (datoslaravel, textStatus, xhr) {

                    $.each(datoslaravel, function (index, val) {
                        var iduser = val.id;
                        ubicacion(iduser);
                        $('#anuncio').append('<tr><td rowspan="4" width="370px"><img src="<?php echo asset('files') ?>/' + val.archivo + '" width="350px" height="280px"/></td><td><span class="ace-icon fa fa-circle blue" style="font-size:14px;/"></span> Titulo:<br/>' + val.Anuncio + '</td></tr><tr><td><span class="ace-icon fa fa-circle blue" style="font-size:14px;/"></span> Descripición:<br/>' + val.Descripcion + '</td></tr><tr><td><span class="ace-icon fa fa-circle blue" style="font-size:14px;/"></span> Fecha de publicación:<br/>' + val.Fecha + '</td></tr><tr><td><span class="ace-icon fa fa-circle blue" style="font-size:14px;/"></span> Categoría en la que se publico:<br/>' + val.Nom_cat + '<br/>' + val.Nom_subcat + '</td></tr><tr><td><span class="ace-icon fa fa-circle blue" style="font-size:14px;/"></span> Lugar donde se publico:<br/>' + val.Nom_est + '<br/>' + val.Nom_mun + '</td><td><span class="ace-icon fa fa-circle green" style="font-size:14px;/"></span> Precio establecido para el anuncio:<br/>$' + val.id + '</td><tr>');
                    });

                }, 'json');

                //alert(id);
            }
        </script>
<!--        <script type="text/javascript" >
        $(document).ready(function (){
            $("#ubicacion").click(function (){
               var lat = $("#lat").val();
                var long $("#long").val();
                alert(lat.long);
            });
        });
    </script>-->
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdecEtqO33RJcSOjUHclXCjq1zQPMrOXw&callback=initMap"
        type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                lat =  $("#lat").val();
                lng =  $("#long").val();
                var map;
                function initialize() {
                    var myLatlng = new google.maps.LatLng(lat, lng);
                    var mapOptions = {
                        zoom: 15,
                        center: myLatlng,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };
                    map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);
                    var marker = new google.maps.Marker({
                        position: myLatlng,
                        draggable: false,///Evita que el marcador se mueva
                        animation: google.maps.Animation.DROP,
                        web: "LocalizaciÃ³n geogrÃ¡fica!",
                        icon: "{{ asset('images/marker.png') }}"
                    });
                    google.maps.event.addListener(marker, 'dragend', function (event) {
                        var myLatLng = event.latLng;
                        lat = myLatLng.lat();
                        lng = myLatLng.lng();
                        document.getElementById('info').innerHTML = [
                            lat,
                            lng
                        ].join(', ');
                    });
                    marker.setMap(map);
                }
                google.maps.event.addDomListener(window, 'load', initialize);

            });
        </script>
        <script type="text/javascript">
            $(function () {
                $("img").on("error", function () {
                    $(this).unbind("error").attr("src", "{{ asset('images/error.jpg') }}");
                });
            });

        </script>

    </body>
</html>
