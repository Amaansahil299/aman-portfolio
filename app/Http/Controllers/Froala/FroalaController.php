<?php

namespace App\Http\Controllers\Froala;
use App\Http\Controllers\Common\Controller;
use Illuminate\Http\Request;

use App\Traits\StringOperationsTrait;

class FroalaController extends Controller
{
    use StringOperationsTrait;
    public function uploadImage(Request $request)
    {
        $request->validate([
            'file' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $thumbnail = $request->file('file')->store('public/froala/blogs');

        $thumbnail = $this->removeContentBeforeFirstSlash($thumbnail);

        return response()->json(['link' => asset("storage/$thumbnail")]);
    }
}
