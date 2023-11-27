@extends('layouts.backend.app')

@section('content')
@push('page-css')
<style>
    .inner_wrap{
        display:none;
    }
    .inner_wrap_two{
        display:none;
    }
</style>
@endpush
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
            <form class="form-search">
                <span class="input-icon">
                    <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                    <i class="ace-icon fa fa-search nav-search-icon"></i>
                </span>
            </form>
        </div><!-- /.nav-search -->
    </div>

    <div class="page-content">
        <div class="page-header">
            <h1>
                Dashboard
                <small>
                    <i class="ace-icon fa fa-angle-double-right"></i>
                    overview &amp; stats
                </small>
            </h1>
        </div><!-- /.page-header -->

        <div class="row">
            <div class="col-xs-12 float-right" style="text-align:right">
                <a href="#" role="button" class="btn btn-sm btn-info m-2" style="margin-bottom:10px" onclick="menuModalShow()">Add +</a>
            </div>
            <div class="col-xs-12">
                <div class="table-header">
                    Results for "Latest Sub-Menu Items"
                </div>
                <!-- Organization List -->
                <div>
                    <table id="menu-table" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>S. No.</th>
                                <th>Menu</th>
                                <th>Menu.BN</th>
                                <th>Title</th>
                                <th>Subtitle</th>
                                <th>Description</th>
                                <th>Image One</th>
                                <th>Image Two</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
            <!-- Organization Entry Modal -->
            <div class="col-lg-12">
                <div id="modal-menu" class="modal fade" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header no-padding">
                                <div class="table-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                        <span class="white">&times;</span>
                                    </button>
                                    <span><i class="ace-icon fa fa-pencil" style="font-size:17px;color:#ffffff !important"></i></span>&nbsp;&nbsp; Sub Menu Lebel Three Entry Form
                                </div>
                            </div>
                            <div class="modal-body no-padding"></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="modal-footer no-margin-top">
                                        <button class="btn btn-sm btn-danger pull-right" data-dismiss="modal">
                                            <i class="ace-icon fa fa-times"></i>
                                            Close
                                        </button>
                                        &nbsp; &nbsp; &nbsp;
                                        <button type="submit" class="btn btn-sm btn-info pull-right" id="organizationSubmit" aria-hidden="true" onclick="submitForm()" style="margin-right:6px">
                                            <i class="ace-icon fa fa-check bigger-110"></i>
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div>
            </div>
            <!-- Organization Update Modal -->
            <div id="modal-menu-update" class="modal fade" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header no-padding">
                            <div class="table-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <span class="white">&times;</span>
                                </button>
                                <span><i class="ace-icon fa fa-pencil" style="font-size:17px;color:#ffffff !important"></i></span>&nbsp;&nbsp; Sub Menu Lebel Three Update Form
                            </div>
                        </div>
                        <div class="modal-body no-padding"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="modal-footer no-margin-top">
                                    <button class="btn btn-sm btn-danger pull-right" data-dismiss="modal">
                                        <i class="ace-icon fa fa-times"></i>
                                        Close
                                    </button>
                                    &nbsp; &nbsp; &nbsp;
                                    <button type="submit" class="btn btn-sm btn-info pull-right" id="MenuUpdate" aria-hidden="true" onclick="MenuUpdate()" style="margin-right:6px">
                                        <i class="ace-icon fa fa-check bigger-110"></i>
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>
            <!-- Organization View Modal -->
            <div id="modal-view" class="modal fade" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header no-padding">
                            <div class="table-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <span class="white">&times;</span>
                                </button>
                                Organization View
                            </div>
                        </div>
                        <div class="modal-body no-padding">
                            
                        </div>
                        <div class="modal-footer">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="button" class="btn" id="cancelBtn" data-dismiss="modal" aria-hidden="true" >
                                    <i class="ace-icon fa fa-undo bigger-110"></i>
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>
        </div>
    </div><!-- /.page-content -->
</div>
  @endsection
  @push('page-js')
    <script type="text/javascript">

    $('#mainMenuInfo').validate({
        errorClass: 'danger',
        successClass: 'success',
        errorElement: "span",
        highlight: function (element, errorClass) {
            $(element).removeClass(errorClass);
            $(element).parent('.form-group').addClass('error');
        },
        unhighlight: function (element, errorClass) {
            $(element).removeClass(errorClass);
            $(element).parent('.form-group').removeClass('error');
        },
        errorPlacement: function (error, element) {
            if (element.attr('name') === 'member_status') {
                error.appendTo($('.radio-error'));
            } else if (element[0].tagName === "SELECT") {
                error.insertAfter(element);
            }
            else{
                error.insertAfter(element);
            }
        },

        rules: {
            name: {
                required: true,
            },
            name_bn: {
                required: true,
            },
            title: {
                required: true,
            },
        },
        messages: {
            name: {
                required: "this field is required.",
            },
            name_bn: {
                required: "this field is required.",
            },
            title: {
                required: "this field is required.",
            },
        },
    });

    function menuModalShow(obj) {
        // AJAX request
        $.ajax({
            type: "POST",
            url: "{{route('sub-menu-three.create')}}",
            data: {
                id: 1
            },
            success: function(response) {
                $('#modal-menu .modal-body').html(response);
                $('#modal-menu').modal('show');
            },
            error: function(error) {
                Swal.fire('', 'Error submitting form', 'error');
            }
        });
    }

    function submitForm() {
        // Get form data
        event.preventDefault();
        if($('#mainMenuInfo').valid()) {
        var formData = new FormData($('#mainMenuInfo')[0]);
        // AJAX request
        $.ajax({
            type: "POST",
            url: "{{route('sub-menu-three.store')}}",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#modal-menu').modal('hide');
                Swal.fire({
                    title: 'Great job',
                    text: "Data Successfully Submitted!",
                    type: 'success',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes'
                    }).then((result) => {
                    if(result){
                        // Do Stuff here for success
                        $('#menu-table').DataTable().ajax.reload(function(result) {});
                    }else{
                        // something other stuff
                    }

                })
            },
            error: function(error) {
                Swal.fire('', 'Error submitting form', 'error');
            }
        });
        }else{
            return false;
        }
    }
    function getOrganizeIdForView(obj) {
        let organizeId = $(obj).attr("data-id");
        // AJAX request
        $.ajax({
            type: "GET",
            url: "{{route('organization.show')}}",
            data: {
                id: organizeId
            },
            success: function(response) {
                $('#modal-view .modal-body').html(response);
                $('#modal-view').modal('show');
            },
            error: function(error) {
                Swal.fire('', 'Error submitting form', 'error');
            }
        });
    }

    function getMenuId(obj) {
        let menuId = obj;
        // AJAX request
        $.ajax({
            type: "GET",
            url: "{{route('sub-menu-three.edit')}}",
            data: {
                id: menuId
            },
            success: function(response) {
                $('#modal-menu-update .modal-body').html(response);
                $('#modal-menu-update').modal('show');

                if($('#menu_id').val() != null){
                    $('.inner_wrap').css('display','block');
                }

                if($('#sub_menu_one_id').val() != null){
                    $('.inner_wrap_two').css('display','block');
                }
            },
            error: function(error) {
                Swal.fire('', 'Error submitting form', 'error');
            }
        });
    }

    function MenuUpdate() {
        // Get form data
        event.preventDefault();

        if($('#mainMenuInfo').valid()) {
            var formData = new FormData($('#mainMenuInfo')[0]);
            // AJAX request
            $.ajax({
                type: "post",
                url: "{{route('sub-menu-three.update')}}",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    $('#modal-menu-update').modal('hide');
                    Swal.fire({
                        title: 'Great job',
                        text: "Data Successfully Updated!",
                        type: 'success',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes'
                        }).then((result) => {
                        if(result){
                            // Do Stuff here for success
                            $('#menu-table').DataTable().ajax.reload(function(result) {});
                        }else{
                            // something other stuff
                        }

                    })
                },
                error: function(error) {
                    Swal.fire('', 'Error submitting form', 'error');
                }
            });
        }else{
            return false;
        }
    }

    function subMenuOneFilter(obj){

        const menu_id = $(obj).val();

        $.ajax({
            url: "{{route('sub-menu-one.filter')}}",
            method: "GET",
            dataType: "json",
            data: {
                menu_id: menu_id,
            },
            success: function (data) {
                if(data.length > 0){
                    $('.inner_wrap').css('display','block');

                    const menuHtml = $('#sub_menu_one_id');
                    const fop = '<option value="">Select menu</option>';
                    menuHtml.html(fop);
                    var htmlOption = '';
                    $.each(data, function (index, item){
                        htmlOption += `
                            <option value="${item.id}">${item.name}</option>
                        `;
                    })
                    menuHtml.append(htmlOption);
                }
            },
            error: function () {
                outputDiv.html("Error fetching data.");
            },
        });
    }
    function subMenuTwoFilter(obj){

        const menu_id = $(obj).val();

        $.ajax({
            url: "{{route('sub-menu-two.filter')}}",
            method: "GET",
            dataType: "json",
            data: {
                menu_id: menu_id,
            },
            success: function (data) {
                if(data.length > 0){
                    $('.inner_wrap_two').css('display','block');

                    const menuHtml = $('#sub_menu_two_id');
                    const fop = '<option value="">Select menu</option>';
                    menuHtml.html(fop);
                    var htmlOption = '';
                    $.each(data, function (index, item){
                        htmlOption += `
                            <option value="${item.id}">${item.name}</option>
                        `;
                    })
                    menuHtml.append(htmlOption);
                }
            },
            error: function () {
                outputDiv.html("Error fetching data.");
            },
        });
    }

    $(function () {
        var table = $('#menu-table').DataTable({
            processing: true,
            serverSide: true,
            destroy: true,
            filter: true,
            ajax: {
                url: "{{ route('three.data.lists') }}",
                dataType: "json",
                type: "post",
                data: {
                    _token: "{{ csrf_token() }}"
                }
            },
            columns: [
                {
                   "data": 'DT_RowIndex',
                    orderable: true,
                    searchable: false
                },
                {
                    data: 'name',
                    name: 'name',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'name_bn',
                    name: 'name_bn',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'subtitle',
                    name: 'subtitle'
                },
                {
                    data: 'description',
                    name: 'description'
                },
                {
                    data: 'image_one',
                    name: 'image_one'
                },
                {
                    data: 'image_two',
                    name: 'image_two'
                },
                {
                    data: 'status',
                    name: 'status'
                },
                {
                    data: 'action_html',
                    name: 'action_html',
                    orderable: false,
                    searchable: false
                }
            ],
        });
    });
        
</script>
@endpush