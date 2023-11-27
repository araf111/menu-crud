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
                <a href="#modal-table" role="button" data-toggle="modal" class="btn btn-sm btn-info m-2" style="margin-bottom:10px">Add +</a>
            </div>
            <div class="col-xs-12">
                <div class="table-header">
                    Results for "Latest Organizations"
                </div>
                <!-- Organization List -->
                <div>
                    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>S. No.</th>
                                <th>Eng.Name</th>
                                <th>Bng.Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Title</th>
                                <th>Subtitle</th>
                                <th>Description</th>
                                <th>Footer One</th>
                                <th>Footer Two</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody></tbody>
                    </table>
                </div>
            </div>
            <!-- Organization Entry Modal -->
            <div id="modal-table" class="modal fade" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header no-padding">
                            <div class="table-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <span class="white">&times;</span>
                                </button>
                                <span><i class="ace-icon fa fa-pencil" style="font-size:17px;color:#ffffff !important"></i></span>&nbsp;&nbsp; Organization Entry Form
                            </div>
                        </div>
                        
                        <div class="modal-body no-padding">
                            <form action="#" method="post" id="organizationInfo" class="common_class" enctype="multipart/form-data">
                                @csrf
                                <div class="modal_inner_container" style="padding:8px;display:inline">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="eng_name">English Name<span class="frequired">*</span></label>
                                            <span class="block input-icon input-icon-right">
                                                <input type="text" class="form-control form-control-sm required" id="eng_name" name="eng_name" autocomplete="off" placeholder="english name">
                                                <i class="ace-icon fa fa-user fci"></i>
                                            </span>
                                            <span id="eng_name_error" class="error"></span>
                                            @if($errors->has('eng_name'))
                                                <span class="danger">{{ $errors->first('eng_name') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="bng_name">Bangla Name<span class="frequired">*</span></label>
                                            <span class="block input-icon input-icon-right">
                                                <input type="text" class="form-control form-control-sm required" id="bng_name" name="bng_name" autocomplete="off" placeholder="Bangla name">
                                                <i class="ace-icon fa fa-user fci"></i>
                                            </span>
                                            <span id="bng_name_error" class="error"></span>
                                            @if($errors->has('bng_name'))
                                                <span class="danger">{{ $errors->first('bng_name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    {{-- <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="eng_name">English Name<span class="frequired">*</span></label>
                                            <input type="text" class="form-control form-control-sm required" id="name" name="eng_name" autocomplete="off">
                                            @if($errors->has('eng_name'))
                                                <span class="danger">{{ $errors->first('eng_name') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="bng_name">Bangla Name<span class="frequired">*</span></label>
                                            <input type="text" class="form-control form-control-sm required" id="name" name="bng_name" autocomplete="off">
                                            @if($errors->has('bng_name'))
                                                <span class="danger">{{ $errors->first('bng_name') }}</span>
                                            @endif
                                        </div>
                                    </div> --}}
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="email">E-mail<span class="frequired">*</span></label>
                                            <span class="block input-icon input-icon-right">
                                                <input type="email" class="form-control form-control-sm required" id="email" name="email" placeholder="email">
                                                <i class="ace-icon fa fa-envelope fci"></i>
                                            </span>
                                            <span id="email_error" class="error"></span>
                                            @if($errors->has('email'))
                                                <span class="danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="mobile">Mobile<span class="frequired">*</span></label>
                                            <span class="block input-icon input-icon-right">
                                                <input type="mobile" class="form-control form-control-sm required" id="mobile" name="mobile" placeholder="mobile">
                                                <i class="ace-icon fa fa-mobile fci"></i>
                                            </span>
                                            <span id="mobile_error" class="error"></span>
                                            @if($errors->has('mobile'))
                                                <span class="danger">{{ $errors->first('mobile') }}</span>
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
                                            <span id="title_error" class="error"></span>
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
                                            <span id="subtitle_error" class="error"></span>
                                            @if($errors->has('subtitle'))
                                                <span class="danger">{{ $errors->first('subtitle') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="description">Descriptions<span class="frequired">*</span></label>
                                            <span class="block input-icon input-icon-right">
                                                <textarea class="form-control form-control-sm required" id="description" name="description"></textarea>
                                                {{-- <i class="ace-icon fa fa-user"></i> --}}
                                            </span>
                                            <span id="description_error" class="error"></span>
                                            @if($errors->has('description'))
                                                <span class="danger">{{ $errors->first('description') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="status">Status<span class="frequired">*</span></label>
                                            <select name="status" class="form-control form-control-sm " id="status">
                                                <option value="1" selected>Active</option>
                                                <option value="0">InActive</option>
                                            </select>
                                            @if($errors->has('status'))
                                                <span class="danger">{{ $errors->first('status') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="footer_one">Footer One<span class="frequired">*</span></label>
                                            <span class="block input-icon input-icon-right">
                                                <textarea class="form-control form-control-sm required" id="footer_one" name="footer_one"></textarea>
                                                {{-- <i class="ace-icon fa fa-user"></i> --}}
                                            </span>
                                            <span id="footer_one_error" class="error"></span>
                                            @if($errors->has('footer_one'))
                                                <span class="danger">{{ $errors->first('footer_one') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="footer_two">Footer Two<span class="frequired">*</span></label>
                                            <span class="block input-icon input-icon-right">
                                                <textarea class="form-control form-control-sm required" id="footer_two" name="footer_two"></textarea>
                                                {{-- <i class="ace-icon fa fa-user"></i> --}}
                                            </span>
                                            <span id="footer_two_error" class="error"></span>
                                            @if($errors->has('footer_two'))
                                                <span class="danger">{{ $errors->first('footer_two') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="image_one">Image One<span class="frequired">*</span></label>
                                            <span class="block input-icon input-icon-right">
                                                <input type="file" class="form-control form-control-sm required" id="image_one" name="image_one">
                                                {{-- <i class="ace-icon fa fa-user"></i> --}}
                                            </span>
                                            <span id="image_one_error" class="error"></span>
                                            @if($errors->has('image_one'))
                                                <span class="danger">{{ $errors->first('image_one') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="image_two">Image Two<span class="frequired">*</span></label>
                                            <span class="block input-icon input-icon-right">
                                                <input type="file" class="form-control form-control-sm required" id="image_two" name="image_two">
                                                {{-- <i class="ace-icon fa fa-user"></i> --}}
                                            </span>
                                            <span id="image_two_error" class="error"></span>
                                            @if($errors->has('image_two'))
                                                <span class="danger">{{ $errors->first('image_two') }}</span>
                                            @endif
                                        </div>
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
            <div id="modal-update" class="modal fade" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header no-padding">
                            <div class="table-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <span class="white">&times;</span>
                                </button>
                                <span><i class="ace-icon fa fa-pencil" style="font-size:17px;color:#ffffff !important"></i></span>&nbsp;&nbsp;Organization Update Form
                            </div>
                        </div>
                        <div class="modal-body no-padding">
                            
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="modal-footer no-margin-top">
                                    <button class="btn btn-sm btn-danger pull-right" data-dismiss="modal">
                                        <i class="ace-icon fa fa-times"></i>
                                        Close
                                    </button>
                                    &nbsp; &nbsp; &nbsp;
                                    <button type="submit" class="btn btn-sm btn-info pull-right" id="organizationUpdate" aria-hidden="true" onclick="organizationUpdate()" style="margin-right:6px">
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
    function serverValidationErrorHide(){
        $('#eng_name').on('input', function () {
            $('#eng_name_error').text('');
        });
        $('#bng_name').on('input', function () {
            $('#bng_name_error').text('');
        });
        $('#email').on('input', function () {
            $('#email_error').text('');
        });
        $('#mobile').on('input', function () {
            $('#mobile_error').text('');
        });
        $('#title').on('input', function () {
            $('#title_error').text('');
        });
        $('#subtitle').on('input', function () {
            $('#subtitle_error').text('');
        });
        $('#description').on('input', function () {
            $('#description_error').text('');
        });
        $('#footer_one').on('input', function () {
            $('#footer_one_error').text('');
        });
        $('#footer_two').on('input', function () {
            $('#footer_two_error').text('');
        });
        $('#image_one').on('input', function () {
            $('#image_one_error').text('');
        });
        $('#image_two').on('input', function () {
            $('#image_two_error').text('');
        });
    }
    // Mobile number valiation
    $.validator.addMethod("mobileNumber", function(value, element) {
    return this.optional(element) || /^\d{11}$/.test(value);
    }, "Please enter a valid 11-digit mobile number.");

    $('#organizationInfo').validate({
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
            mobile: {
                required: true,
                mobileNumber: true,
            },
            email: {
                required: true,
            },
        },
        messages: {
            mobile: {
                required: "Enter your mobile number.",
                mobileNumber: "Enter a valid 11-digit number.",
            },
            email: {
                required: "Enter your email.",
            },
        },
    });

    function submitForm() {
        // Get form data
        event.preventDefault();
        serverValidationErrorHide();
        if($('#organizationInfo').valid()) {
            var formData = new FormData($('#organizationInfo')[0]);
            // AJAX request
            $.ajax({
                type: "POST",
                url: "{{route('organization.store')}}",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    $('#modal-table').modal('hide');
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
                            $('#dynamic-table').DataTable().ajax.reload(function(result) {});
                        }else{
                        }

                    })
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        // console.log(xhr.status);
                        var errors = xhr.responseJSON.errors;
                        $.each(errors, function (key, value) {
                            $('#' + key + '_error').text(value[0]);
                        });
                    }else{
                        Swal.fire('', 'Error submitting form', 'error');
                    }
                }
            });
        }
        else{
            return false;
        }
    }
    function getOrganizeIdForView(obj) {
        // let organizeId = $(obj).attr("data-id");
        let organizeId = obj;
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
    function getOrganizeId(obj) {
        // let organizeId = $(obj).attr("data-id");
        let organizeId = obj;
        // AJAX request
        $.ajax({
            type: "GET",
            url: "{{route('organization.edit')}}",
            data: {
                id: organizeId
            },
            success: function(response) {
                $('#modal-update .modal-body').html(response);
                $('#modal-update').modal('show');
                // Swal.fire('', 'Data Successfully Submitted', 'success');
                // location.reload();
            },
            error: function(error) {
                Swal.fire('', 'Error submitting form', 'error');
            }
        });
    }

    function organizationUpdate() {
        // Get form data
        event.preventDefault();

        if($('#organizationUpdateInfo').valid()) {
            var formData = new FormData($('#organizationUpdateInfo')[0]);
            // AJAX request
            $.ajax({
                type: "post",
                url: "{{route('organization.update')}}",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    $('#modal-update').modal('hide');
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
                            $('#dynamic-table').DataTable().ajax.reload(function(result) {});
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
        var table = $('#dynamic-table').DataTable({
            processing: true,
            serverSide: true,
            destroy: true,
            filter: true,
            ajax: {
                url: "{{ route('organization.list') }}",
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
                    data: 'eng_name',
                    name: 'eng_name',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'bng_name',
                    name: 'bng_name',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'mobile',
                    name: 'mobile'
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
                    data: 'footer_one',
                    name: 'footer_one'
                },
                {
                    data: 'footer_two',
                    name: 'footer_two'
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