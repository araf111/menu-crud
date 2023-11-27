<form action="#" method="post" id="mainMenuUpdateInfo" class="common_class" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="name">English Name<span class="frequired">*</span></label>
            <input type="hidden" id="menu_id" name="id" value="{{$menu->id}}">
            <span class="block input-icon input-icon-right">
                <input type="text" class="form-control form-control-sm required" id="name" name="name" autocomplete="off" value="{{$menu->name}}">
                <i class="ace-icon fa fa-user fci"></i>
            </span>
            @if($errors->has('name'))
                <span class="danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <div class="form-group col-md-6">
            <label for="name_bn">Bangla Name<span class="frequired">*</span></label>
            <span class="block input-icon input-icon-right">
                <input type="text" class="form-control form-control-sm required" id="name" name="name_bn" autocomplete="off" value="{{$menu->name_bn}}">
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
                <input type="title" class="form-control form-control-sm required" id="title" name="title" value="{{$menu->title}}">
                <i class="ace-icon fa fa-edit fci"></i>
            </span>
            @if($errors->has('title'))
                <span class="danger">{{ $errors->first('title') }}</span>
            @endif
        </div>
        <div class="form-group col-md-6">
            <label for="subtitle">Sub-Title<span class="frequired">*</span></label>
            <span class="block input-icon input-icon-right">
                <input type="subtitle" class="form-control form-control-sm required" id="subtitle" name="subtitle" value="{{$menu->subtitle}}">
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
            <textarea class="form-control form-control-sm required" id="description" name="description"> {{$menu->description}}</textarea>
            @if($errors->has('description'))
                <span class="danger">{{ $errors->first('description') }}</span>
            @endif
        </div>
        <div class="form-group col-md-3">
            <label for="status">Status<span class="frequired">*</span></label>
            <select name="status" class="form-control form-control-sm " id="status">
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
            <label for="image_one">Image One<span class="frequired"></span></label>
            <input type="file" class="form-control form-control-sm" id="image_one" name="image_one"  value="{{$menu->image_one}}">
            @if($errors->has('image_one'))
                <span class="danger">{{ $errors->first('image_one') }}</span>
            @endif
        </div>
        <div class="form-group col-md-6">
            <label for="image_two">Image Two<span class="frequired"></span></label>
            <input type="file" class="form-control form-control-sm" id="image_two" name="image_two"  value="{{$menu->image_two}}">
            @if($errors->has('image_two'))
                <span class="danger">{{ $errors->first('image_two') }}</span>
            @endif
        </div>
    </div>
</form>