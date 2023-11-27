<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Traits\FileTrait;
use App\Models\SubMenuOne;
use App\Models\SubMenuTwo;
use App\Models\SubMenuThree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;

class SubMenuThreeController extends Controller
{
    use FileTrait;

    public function index(){
        $menus = SubMenuThree::all();
        return view('layouts.backend.sub-menu-three',compact('menus'));
    }

    public function menuList(Request $request)
    {
        $menus = SubMenuThree::all();

        return Datatables::of($menus)
            ->addColumn('name', function ($list) {
                return $name = $list->name;
            })
            ->addColumn('name_bn', function ($list) {
                return $name_bn = $list->name_bn;
            })
            ->addColumn('name_bn', function ($list) {
                return $name_bn = $list->name_bn;
            })
            ->addColumn('title', function ($list) {
                return $title = $list->title;
            })
            ->addColumn('subtitle', function ($list) {
                return $subtitle = $list->subtitle;
            })
            ->addColumn('description', function ($list) {
                return $description = $list->description;
            })
            ->addColumn('image_one', function ($list) {
                if(!empty($list->image_one))
                    return $image_one = '<img src="' . asset('upload/' . $list->image_one) . '" alt="Image" width="35px" height="35px">';
                else
                    return $image_one = '--';
            })
            ->addColumn('image_two', function ($list) {
                if(!empty($list->image_two))
                    return $image_two = '<img src="' . asset('upload/' . $list->image_two) . '" alt="Image" width="35px" height="35px">';
                else
                    return $image_two = '--';
            })
            ->addColumn('status', function ($list) {
                return $status = $list->status == 1 ? 'Active' : 'InActive';
            })
            ->addColumn('action_html', function ($list) {
                
                // $jsEditFunction = "getOrganizeIdForView($list->id)";
                $getMenuId = "getMenuId($list->id)";
                $actionBtn =
                    '<td class="text-center">
                        <div class="hidden-sm hidden-xs action-buttons">
                            <a href="#" class="blue" data-id="' . $list->id . '">
                                <i class="ace-icon fa fa-search-plus bigger-130"></i>
                            </a>
                            <a href="#" class="green" data-rel="tooltip" title="Edit" data-id="' . $list->id . '" onclick="'. $getMenuId .'">
                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                            </a>
                            <a href="#" class="red destroy" data-route="' . route('sub-menu-two.delete', $list->id) . '">
                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                            </a>
                        </div>
                    </td>';
                return $actionBtn;
            })
        ->addIndexColumn()
        ->escapeColumns([])
        ->make(true);
    }

    public function create(Request $request){
        
        $menus = Menu::all();
        $submenuones = SubMenuOne::all();
        $submenutwos = SubMenuTwo::all();
        $returnHTML = view(
            'layouts.backend.sub-menu-three-create-form',
            [
                'menus' => $menus,
                'submenuones' => $submenuones,
                'submenutwos' => $submenutwos
            ]
        )->render();
        return response()->json($returnHTML);

    }

    public function store(Request $request){

        if ($request->image_one) {
            $image_one = $request->image_one;
            $path = $this->upload($image_one, 'manu-images');
            $imgOne = $path;
        }

        if ($request->image_two) {
            $image_two = $request->image_two;
            $path = $this->upload($image_two, 'manu-images');
            $imgTwo = $path;
        }

        $arr = [
            'menu_id' => $request->menu_id,
            'sub_menu_one_id' => $request->sub_menu_one_id??0,
            'sub_menu_two_id' => $request->sub_menu_two_id??0,
            'name' => $request->name,
            'name_bn' => $request->name_bn,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'status' => $request->status,
            'image_one' => $imgOne??'',
            'image_two' => $imgTwo??'',
        ];
        
        $mObj = SubMenuThree::create($arr);

        if ($mObj) {
            $data = ['status' => 1, 'message' => 'Data Successfully Updated', 'type' => 'success'];
        } else {
            $data = ['status' => 0, 'message' => 'Data Do not Updated', 'type' => 'error'];
        }
        echo json_encode($data);

    }

    // public function show(Request $request){
        
    //     $organize = Master::find($request->id);
    //     $returnHTML = view(
    //         'layouts.backend.organize-view-modal',
    //         [
    //             'organize' => $organize
    //         ]
    //     )->render();
    //     return response()->json($returnHTML);

    // }

    public function edit(Request $request){

        $menu = SubMenuThree::find($request->id);
        $mainmenus = Menu::all();
        $submenuones = SubMenuOne::all();
        $submenutwos = SubMenuTwo::all();
        $returnHTML = view(
            'layouts.backend.sub-menu-three-update-form',
            [
                'menu' => $menu,
                'mainmenus' => $mainmenus,
                'submenuones' => $submenuones,
                'submenutwos' => $submenutwos
            ]
        )->render();
        return response()->json($returnHTML);

    }

    public function update(Request $request){

        if ($request->image_one) {
            $image_one = $request->image_one;
            $path = $this->upload($image_one, 'manu-images');
            $imgOne = $path;
        }

        if ($request->image_two) {
            $image_two = $request->image_two;
            $path = $this->upload($image_two, 'manu-images');
            $imgTwo = $path;
        }

        $arr = [
            'menu_id' => $request->menu_id,
            'sub_menu_one_id' => $request->sub_menu_one_id??0,
            'sub_menu_two_id' => $request->sub_menu_two_id??0,
            'name' => $request->name,
            'name_bn' => $request->name_bn,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'status' => $request->status,
            'image_one' => $imgOne??'',
            'image_two' => $imgTwo??'',
        ];
        
        $mObj = SubMenuThree::where('id',$request->id)->update($arr);

        if ($mObj) {
            $data = ['status' => 1, 'message' => 'Data Successfully Updated', 'type' => 'success'];
        } else {
            $data = ['status' => 0, 'message' => 'Data Do not Updated', 'type' => 'error'];
        }
        echo json_encode($data);

    }

    public function destroy($id)
    {
        try {
            $menu = SubMenuThree::find($id);

            $menu->delete();

            return response()->json(["status"=>"success"]);

        } catch (\Exception $e) {

            $errorMessage=$e->getMessage();
            $customMessage="Exception! Something went wrong please try again!";

            Session::flash('error', $customMessage, true);
            return response()->json(["status"=>"error"]);
        }
    }

    public function menuFilter(Request $request){

        $menus = SubMenuTwo::where('sub_menu_one_id', $request->menu_id)->get();
        return response()->json($menus);
    }
}
