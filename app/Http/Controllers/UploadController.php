<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class UploadController extends Controller
{
    // public function uploadMemberImage(Request $request)
    // {
    //     if ($request->file('image')->isValid()) {
    //         $filename = '/images/members/' . str_random() . '.' . $request->image->extension();
    //         $url = $request->image->storeAs('/public', $filename);

    //         return ['success' => true, 'url' => '/storage' . $filename];
    //     }
    //     else {
    //         return ['success' => false, 'message' => 'รูปภาพไม่ถูกต้อง'];
    //     }
    // }

    public function uploadBaseImage(Request $request)
    {
        $image = $request->input('image', null);
        $folder = $request->input('folder', '');

        if ($image) {
            if (strpos($image, 'data:image/jpeg') === 0) {
                $image = str_replace('data:image/jpeg;base64,', '', $image);
                $extention = '.jpg';
            }
            elseif (strpos($image, 'data:image/png') === 0) {
                $image = str_replace('data:image/png;base64,', '', $image);
                $extention = '.png';
            }
            elseif (strpos($image, 'data:image/gif') === 0) {
                $image = str_replace('data:image/gif;base64,', '', $image);
                $extention = '.gif';
            }
            else {
                return ['success' => false, 'message' => 'ไม่พบรูปภาพ'];
            }

            $image = str_replace(' ', '+', $image);
            $data = base64_decode($image);

            $filename = '/images' . $folder . '/' . str_random() . $extention;
            $url = Storage::put('/public' . $filename, $data);

            return ['success' => true, 'url' => '/storage' . $filename];
        }
        else {
            return ['success' => false, 'message' => 'ไม่พบรูปภาพ'];
        }
    }
}
