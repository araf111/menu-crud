<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\FileTrait;
use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class OrganizationController extends Controller
{
    use FileTrait;

    public function dataTableList(Request $request)
    {
        $organizations = Organization::all();

        return Datatables::of($organizations)
        ->addColumn('eng_name', function ($list) {
            return $eng_name = $list->eng_name;
        })
        ->addColumn('bng_name', function ($list) {
            return $bng_name = $list->bng_name;
        })
        ->addColumn('email', function ($list) {
            return $email = $list->email;
        })
        ->addColumn('mobile', function ($list) {
            return $mobile = $list->mobile;
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
        ->addColumn('footer_one', function ($list) {
            return $footer_one = $list->footer_one;
        })
        ->addColumn('footer_two', function ($list) {
            return $footer_two = $list->footer_two;
        })
        ->addColumn('action_html', function ($list) {

            $jsEditFunction = "getOrganizeIdForView($list->id)";
            $getOrganizeId = "getOrganizeId($list->id)";
            $actionBtn =
                '<td class="text-center">
                    <div class="hidden-sm hidden-xs action-buttons">
                        <a href="#" class="blue" data-id="' . $list->id . '" onclick="'. $jsEditFunction .'">
                            <i class="ace-icon fa fa-search-plus bigger-130"></i>
                        </a>
                        <a href="#" class="green" data-rel="tooltip" title="Edit" data-id="' . $list->id . '" onclick="'. $getOrganizeId .'">
                            <i class="ace-icon fa fa-pencil bigger-130"></i>
                        </a>
                        <a href="#" class="red destroy" data-route="' . route('organization.delete', $list->id) . '">
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
    public function store(Request $request){

        $rules = [
            "eng_name"      => "required",
            "bng_name"      => "required",
            "email"         => "required",
            "mobile"        => "required",
            "title"         => "required",
            "subtitle"      => "required",
            "description"   => "required",
            "footer_one"    => "required",
            "footer_two"    => "required",
            "image_one"     => "required",
            "image_two"     => "required"
        ];

        $messages = [
            'eng_name.required' => 'The field is required.',
            'bng_name.required' => 'The field is required.',
            'email.required' => 'The field is required.',
            'mobile.required' => 'The field is required.',
            'title.required' => 'The field is required.',
            'subtitle.required' => 'The field is required.',
            'footer_one.required' => 'The field is required.',
            'footer_two.required' => 'The field is required.',
            'image_one.required' => 'The field is required.',
            'image_two.required' => 'The field is required.'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        if ($request->image_one) {
            $image_one = $request->image_one;
            $path = $this->upload($image_one, 'images');
            $imgOne = $path;
        }

        if ($request->image_two) {
            $image_two = $request->image_two;
            $path = $this->upload($image_two, 'images');
            $imgTwo = $path;
        }

        $arr = [
            'eng_name' => $request->eng_name,
            'bng_name' => $request->bng_name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'footer_one' => $request->footer_one,
            'footer_two' => $request->footer_two,
            'status' => $request->status,
            'image_one' => $imgOne??'',
            'image_two' => $imgTwo??'',
        ];
        
        $mObj = Organization::create($arr);

        User::create(
            [
                'name' => $request->eng_name,
                'email' => $request->email,
                'organize_id' => $mObj->id,
                'password' => Hash::make('123456')
            ]
        );

        if ($mObj) {
            $data = ['status' => 1, 'message' => 'Data Successfully Submitted', 'type' => 'success'];
        } else {
            $data = ['status' => 0, 'message' => "Data don't Submitted", 'type' => 'error'];
        }
        echo json_encode($data);

    }

    public function show(Request $request){
        
        $organize = Organization::find($request->id);
        $returnHTML = view(
            'layouts.backend.organize-view-modal',
            [
                'organize' => $organize
            ]
        )->render();
        return response()->json($returnHTML);

    }

    public function edit(Request $request){

        $organize = Organization::find($request->id);
        $returnHTML = view(
            'layouts.backend.organize-update-form',
            [
                'organize' => $organize
            ]
        )->render();
        return response()->json($returnHTML);

    }
    public function update(Request $request){

        // dd($request->all());

        if ($request->image_one) {
            $image_one = $request->image_one;
            $path = $this->upload($image_one, 'images');
            $imgOne = $path;
        }

        if ($request->image_two) {
            $image_two = $request->image_two;
            $path = $this->upload($image_two, 'images');
            $imgTwo = $path;
        }

        $arr = [
            'eng_name' => $request->eng_name,
            'bng_name' => $request->bng_name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'footer_one' => $request->footer_one,
            'footer_two' => $request->footer_two,
            'status' => $request->status,
            'image_one' => $imgOne??'',
            'image_two' => $imgTwo??'',
        ];
        
        $mObj = Organization::where('id',$request->organize_id)->update($arr);

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
            $organize = Organization::find($id);

            $organize->delete();

            return response()->json(["status"=>"success"]);

        } catch (\Exception $e) {

            $errorMessage=$e->getMessage();
            $customMessage="Exception! Something went wrong please try again!";

            Session::flash('error', $customMessage, true);
            return response()->json(["status"=>"error"]);
        }
    }
}
