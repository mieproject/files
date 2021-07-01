<?php


namespace MieProject\Files\Controllers;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use MieProject\Files\Models\Files;

class FileController extends Controller
{
    public function tmpFile(Files $file){
        

    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function getFiles(Request $request): JsonResponse
    {

        $files = Files::all();
        return response()->json([
            'files'=>$files,
        ]);
    }
    public function dash_index()
    {
        $files = Files::limit(40)->get();

        $breadcrumbs = [
            ['link' => config('uidashboard.url.prefix'), 'name' => "Home"],  ['name' => "Files"]];
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        return view('mie-files::admin.index',compact('files','breadcrumbs','pageConfigs'));
    }

    public function dash_create(){

        $breadcrumbs = [
            ['link' => config('uidashboard.url.prefix'), 'name' => "Home"],  ['name' => "Files"],['name' => "Upload File"]];
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        return view('mie-files::admin.create',compact('breadcrumbs','pageConfigs'));
    }
}
