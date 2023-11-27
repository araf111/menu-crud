
<form action="#" method="post" id="mainMenuInfo" class="common_class" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-12">
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
                        <input type="text" class="form-control form-control-sm required" id="name_bn" name="name_bn" autocomplete="off" placeholder="bangla name">
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
                    <label for="status">Status<span class="frequired"></span></label>
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
                    <label for="menu_id">Menu<span class="frequired">*</span></label>
                    <select name="menu_id" class="form-control form-control-sm required" id="menu_id" onchange="subMenuOneFilter(this)">
                        <option value="">Select menu</option>
                        @foreach($menus as $menu)
                        <option value="{{$menu->id}}">{{$menu->name}}</option>
                        @endforeach
                    </select>
                    @if($errors->has('menu_id'))
                        <span class="danger">{{ $errors->first('status') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-6 inner_wrap">
                    <label for="menu_id">Sub-Menu One<span class="frequired"></span></label>
                    <select name="sub_menu_one_id" class="form-control form-control-sm" id="sub_menu_one_id">
                        <option value="">Select menu</option>
                        @foreach($submenuones as $submenuone)
                        <option value="{{$submenuone->id}}">{{$submenuone->name}}</option>
                        @endforeach
                    </select>
                    @if($errors->has('menu_id'))
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
        </div>
    </div>
</form>

