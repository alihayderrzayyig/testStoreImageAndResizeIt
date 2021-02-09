<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
    public function store(Request $request){
        // خزن الصورة
        $img = $request->image->store('testimg', 'public');
        // تعديل الصورة
        $img2 = Image::make('storage/'.$img)->resize(300, 200);
        //حفظ الصورة الجديدة بنفس الاسم والمكان
        $img2->save();
        return redirect()->back();
    }
}
