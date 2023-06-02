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
}
