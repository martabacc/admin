<?php
/**
 * Created by PhpStorm.
 * User: rona
 * Date: 28/11/2016
 * Time: 17:56
 */

namespace App\Repositories;

use App\Item;
use DB;
use Illuminate\Support\Facades\Auth;

class ItemRepository
{

    public function create($data){
        return Auth::user()->item()->create($data);
    }

    public function findAll(){
        return Item::all();
    }

    public function find($id){
        return Item::findOrFail($id);
    }

    public function getUserItem(){
        return Auth::user()->item()->get();
    }

    public function delete($id){
        $item = $this->find($id);
        $item->delete();
    }

    public function update($id, $data)
    {
        $item = $this->find($id);
        $item->update($data);
    }
}