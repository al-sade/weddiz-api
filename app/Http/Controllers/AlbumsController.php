<?php

namespace App\Http\Controllers;

use App\Albums;
use Log;

class AlbumsController extends Controller
{
    public function getAlbums(){
        $albums = Albums::all();
        return $this->createSuccessResponse($albums, 200);
    }

    public function getAlbumsBySupplier($supplier_id){
        $albums = Albums::all()->where('supplier_id','=', $supplier_id);


        //get Albums Images
        $storagePath = env("LOCAL_UPLOADS_PATH");


        Log::info('Showing env: '. env("LOCAL_UPLOADS_PATH"));
        foreach ($albums as $key => $album)
        {
            $albumPath = $storagePath . "/albums/" . $supplier_id . "/" . $album["album_id"];
            $albumImages = glob($albumPath. "/*.*");
            $images = [];
            foreach ($albumImages as $image){
                $prefix = $storagePath;
                // remove uploads dir prefix from image path
                if (substr($image, 0, strlen($prefix)) == $prefix) {
                    $image = substr($image, strlen($prefix));
                    Log::info('Showing image path: '. $image);
                    array_push($images, $image);
                }
            }
            $album["images"] = $images;

        }

        if($supplier_id){
            return $this->createSuccessResponse($albums, 200);
        }
    }
}