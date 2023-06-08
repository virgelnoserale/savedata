<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelSaveData;

class ControllerSavdData extends Controller
{
    function welcome (Request $req){
        $saveDataFromTable = new ModelSaveData;
        $saveDataFromTable->name=$req->name;
        $saveDataFromTable->address=$req->address;
        $saveDataFromTable->save();
        return redirect('savedata_link');

    }

    function showList() {
        $showdata=ModelSaveData::all();
        return view ('show',['showdata'=>$showdata]);
    } 

    function deleteList() {
        $showdata=ModelSaveData::all();
        return view ('deletepage',['showdata'=>$showdata]);
}

    function delete($id) {
        $showdata=ModelSaveData::find($id);
        $showdata->delete();
        return redirect('deletedata_link');
    }


    function updateList() {
        $showdata=ModelSaveData::all();
        return view ('updatepage',['showdata'=>$showdata]);
    }

}