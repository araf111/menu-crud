@extends('layouts.backend.app')

@section('content')
@push('page-css')
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
                <a href="#modal-menu" role="button" data-toggle="modal" class="btn btn-sm btn-info m-2" style="margin-bottom:10px">Add +</a>
            </div>
            <div class="col-xs-12">
                <div class="table-header">
                    Results for "Latest Menu Items"
                </div>
                <!-- Organization List -->
                <div>
                    <table id="menu-table" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>S. No.</th>
                                <th>Menu.Name</th>
                                <th>Menu.Name.BN</th>
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
            <div id="modal-menu" class="modal fade" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header no-padding">
                            <div class="table-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <span class="white">&times;</span>
                                </button>
                                <span><i class="ace-icon fa fa-pencil" style="font-size:17px;color:#ffffff !important"></i></span>&nbsp;&nbsp; Main Menu Entry Form
                            </div>
                        </div>
                        <div class="modal-body no-padding">
                            <form action="#" method="post" id="mainMenuInfo" class="common_class" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="name">English Name<span class="frequired">*</span></label>
                                        <span class="block input-icon input-icon-right">
                                            <input type="text" class="form-control form-control-sm required" id="name" name="name" autocomplete="off" placeholder="english name">
                                            <i class="ace-icon fa fa-user fci"></i>
                                        </span>
                                        @if($errors->has('name'))
                                            <span class="danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="name_bn">Bangla Name<span class="frequired">*</span></label>
                                        <span class="block input-icon input-icon-right">
                                            <input type="text" class="form-control form-control-sm required" id="name" name="name_bn" placeholder="bangla name" autocomplete="off">
                                            <i class="ace-icon fa fa-user fci"></i>
                                        </span>
                                        @if($errors->has('name_bn'))
                                            <span class="danger">{{ $errors->first('name_bn') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="title">Title<span class="frequired">*</span></label>
                                        <span class="block input-icon input-icon-right">
                                            <input type="title" class="form-control form-control-sm required" id="title" name="title" placeholder="title">
                                            <i class="ace-icon fa fa-edit fci"></i>
                                        </span>
                                        @if($errors->has('title'))
                                            <span class="danger">{{ $errors->first('title') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="subtitle">Sub-Title<span class="frequired">*</span></label>
                                        <span class="block input-icon input-icon-right">
                                            <input type="subtitle" class="form-control form-control-sm required" id="subtitle" name="subtitle" placeholder="subtitle">
                                            <i class="ace-icon fa fa-edit fci"></i>
                                        </span>
                                        @if($errors->has('subtitle'))
                                            <span class="danger">{{ $errors->first('subtitle') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-9">
                                        <label for="description">Descriptions<span class="frequired">*</span></label>
                                        <textarea class="form-control form-control-sm required" id="description" name="description"></textarea>
                                        @if($errors->has('description'))
                                            <span class="danger">{{ $errors->first('description') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="status">Status<span class="frequired">*</span></label>
                                        <select name="status" class="form-control form-control-sm " id="status">
                                            <option value="">Select Status</option>
                                            <option value="1">Active</option>
                                            <option value="0">InActive</option>
                                        </select>
                                        @if($errors->has('status'))
                                            <span class="danger">{{ $errors->first('status') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="image_one">Image One<span class="frequired">*</span></label>
                                        <input type="file" class="form-control form-control-sm required" id="image_one" name="image_one">
                                        @if($errors->has('image_one'))
                                            <span class="danger">{{ $errors->first('image_one') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="image_two">Image Two<span class="frequired">*</span></label>
                                        <input type="file" class="form-control form-control-sm required" id="image_two" name="image_two">
                                        @if($errors->has('image_two'))
                                            <span class="danger">{{ $errors->first('image_two') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
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
            <!-- Organization Update Modal -->
            <div id="modal-menu-update" class="modal fade" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header no-padding">
                            <div class="table-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <span class="white">&times;</span>
                                </button>
                                <span><i class="ace-icon fa fa-pencil" style="font-size:17px;color:#ffffff !important"></i></span>&nbsp;&nbsp; Menu Update Form
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
                // error.insertAfter(element.siblings('.select2-container'));
            } else if (element.attr('name') === 'member_image') {
                error.appendTo($('.imgPreview'));
            } else if (element.attr('name') === 'birth_date') {
                error.appendTo($('.birth_date_error'));
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
    $('#mainMenuUpdateInfo').validate({
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
                // error.insertAfter(element.siblings('.select2-container'));
            } else if (element.attr('name') === 'member_image') {
                error.appendTo($('.imgPreview'));
            } else if (element.attr('name') === 'birth_date') {
                error.appendTo($('.birth_date_error'));
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

    function submitForm() {
        // Get form data
        event.preventDefault();
        if($('#mainMenuInfo').valid()) {
        var formData = new FormData($('#mainMenuInfo')[0]);
        // AJAX request
        $.ajax({
            type: "POST",
            url: "{{route('menu.store')}}",
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
        // let menuId = $(obj).attr("data-id");
        let menuId = obj;
        // AJAX request
        $.ajax({
            type: "GET",
            url: "{{route('menu.edit')}}",
            data: {
                id: menuId
            },
            success: function(response) {
                $('#modal-menu-update .modal-body').html(response);
                $('#modal-menu-update').modal('show');
            },
            error: function(error) {
                Swal.fire('', 'Error submitting form', 'error');
            }
        });
    }

    function MenuUpdate() {
        // Get form data
        event.preventDefault();

        if($('#mainMenuUpdateInfo').valid()) {
            var formData = new FormData($('#mainMenuUpdateInfo')[0]);
            // AJAX request
            $.ajax({
                type: "post",
                url: "{{route('menu.update')}}",
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

    $(function () {
        var table = $('#menu-table').DataTable({
            processing: true,
            serverSide: true,
            destroy: true,
            filter: true,
            ajax: {
                url: "{{ route('menu.list') }}",
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