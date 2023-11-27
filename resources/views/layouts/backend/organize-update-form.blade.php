<form action="#" method="post" id="organizationUpdateInfo" class="common_class" enctype="multipart/form-data">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="eng_name">English Name<span class="frequired">*</span></label>
            <input type="hidden" value="{{$organize->id}}" id="organize_id" name="organize_id">
            <span class="block input-icon input-icon-right">
                <input type="text" class="form-control form-control-sm required" value="{{$organize->eng_name}}" id="name" name="eng_name" autocomplete="off">
                <i class="ace-icon fa fa-user fci"></i>
            </span>
            @if($errors->has('eng_name'))
                <span class="danger">{{ $errors->first('eng_name') }}</span>
            @endif
        </div>
        <div class="form-group col-md-6">
            <label for="bng_name">Bangla Name<span class="frequired">*</span></label>
            <span class="block input-icon input-icon-right">
                <input type="text" class="form-control form-control-sm required" value="{{$organize->bng_name}}" id="name" name="bng_name" autocomplete="off">
                <i class="ace-icon fa fa-user fci"></i>
            </span>
            @if($errors->has('bng_name'))
                <span class="danger">{{ $errors->first('bng_name') }}</span>
            @endif
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail<span class="frequired">*</span></label>
            <span class="block input-icon input-icon-right">
                <input type="email" class="form-control form-control-sm required" value="{{$organize->email}}" id="email" name="email">
                <i class="ace-icon fa fa-envelope fci"></i>
            </span>
            @if($errors->has('email'))
                <span class="danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="form-group col-md-6">
            <label for="mobile">Mobile<span class="frequired">*</span></label>
            <span class="block input-icon input-icon-right">
                <input type="mobile" class="form-control form-control-sm required" value="{{$organize->mobile}}" id="mobile" name="mobile">
                <i class="ace-icon fa fa-mobile fci"></i>
            </span>
            @if($errors->has('mobile'))
                <span class="danger">{{ $errors->first('mobile') }}</span>
            @endif
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="title">Title<span class="frequired">*</span></label>
            <span class="block input-icon input-icon-right">
                <input type="title" class="form-control form-control-sm required" value="{{$organize->title}}"  id="title" name="title">
                <i class="ace-icon fa fa-edit fci"></i>
            </span>
            @if($errors->has('title'))
                <span class="danger">{{ $errors->first('title') }}</span>
            @endif
        </div>
        <div class="form-group col-md-6">
            <label for="subtitle">Sub-Title<span class="frequired">*</span></label>
            <span class="block input-icon input-icon-right">
                <input type="subtitle" class="form-control form-control-sm required" value="{{$organize->subtitle}}" id="subtitle" name="subtitle">
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
            <textarea class="form-control form-control-sm required" id="description" name="description">{{$organize->description}}</textarea>
            @if($errors->has('description'))
                <span class="danger">{{ $errors->first('description') }}</span>
            @endif
        </div>
        <div class="form-group col-md-3">
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
            <textarea class="form-control form-control-sm required" id="footer_one" name="footer_one">{{$organize->footer_one}}</textarea>
            @if($errors->has('footer_one'))
                <span class="danger">{{ $errors->first('footer_one') }}</span>
            @endif
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="footer_two">Footer Two<span class="frequired">*</span></label>
            <textarea class="form-control form-control-sm required" id="footer_two" name="footer_two">{{$organize->footer_two}}</textarea>
            @if($errors->has('footer_two'))
                <span class="danger">{{ $errors->first('footer_two') }}</span>
            @endif
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="image_one">Image One<span class="frequired"></span></label>
            <input type="file" class="form-control form-control-sm" value="{{$organize->image_one}}" id="image_one" name="image_one">
            @if($errors->has('image_one'))
                <span class="danger">{{ $errors->first('image_one') }}</span>
            @endif
        </div>
        <div class="form-group col-md-6">
            <label for="image_two">Image Two<span class="frequired"></span></label>
            <input type="file" class="form-control form-control-sm" value="{{$organize->image_two}}" id="image_two" name="image_two">
            @if($errors->has('image_two'))
                <span class="danger">{{ $errors->first('image_two') }}</span>
            @endif
        </div>
    </div>
</form>