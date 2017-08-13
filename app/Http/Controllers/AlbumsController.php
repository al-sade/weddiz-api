<?php

namespace App\Http\Controllers;

use App\Albums;

class AlbumsController extends Controller
{
    public function getAlbums(){
        $albums = Albums::all();
        return $this->createSuccessResponse($albums, 200);
    }

    public function getAlbumsBySupplier($supplier_id){
        $albums = Albums::find($supplier_id);
        if($supplier_id){
            return $this->createSuccessResponse($albums, 200);
        }
    }
}