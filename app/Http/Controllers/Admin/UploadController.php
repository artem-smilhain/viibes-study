<?php
/**
 * Created by PhpStorm.
 * User: andrei
 * Date: 7/13/19
 * Time: 8:47 PM
 */

namespace App\Http\Controllers\Admin;


use App\Entity\Doctor\Diploma;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        //$data = $this->validate($request, [
        //    'upload' => 'required|image|mimes:png,jpg,jpeg,gif|dimensions:max_width:1000,max_height:1000',
        //]);
        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            if ($file->isValid()) {
                //$filename = $file->store('uploads', 'public'); //- вернёт новое сгенерированное имя файла.
                $filename = $file->getClientOriginalName();
                $path = $file->storeAs(
                    'public/uploads', $filename
                );
//                $output = ['uploaded' => true, 'url' => '/storage/' . $filename];
                $output = ['uploaded' => true, 'url' => '/storage/uploads/' . $filename, 'name' => $filename];
            } else {
                $output = ['uploaded' => false, 'error' => ['message' => 'could not upload this image'], 'success' => 1,
                    'status' => 200];
            }
            return response()->json($output);
        }
    }
    public function tmpUpload(Request $request)
    {
        $path = storage_path('app/public/tmp/uploads');
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        $file = $request->file('file');
        $name = uniqid() . '_' . trim($file->getClientOriginalName());
        $file->move($path, $name);
        return response()->json([
            'name'          => $name,
            'original_name' => $file->getClientOriginalName(),
        ]);
    }
    public function diplomaDelete(Request $request) {
        $filename =  $request->get('filename');
        $diploma = Diploma::where('image',$filename)->first();
        $diploma->delete();
    }
}
