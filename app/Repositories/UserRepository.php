<?php
/**
 * Created by PhpStorm.
 * User: rona
 * Date: 28/11/2016
 * Time: 17:56
 */

namespace App\Repositories;

use App\Item;
use App\User;
use DB;
use Illuminate\Support\Facades\Auth;

class UserRepository
{
    private $user;

    function __construct()
    {
        if(Auth::user()){
            $this->user = Auth::user();
        }
    }

    /**
     * @return mixed
     */
    public function find($id)
    {
        return User::findOrFail($id);

    }

    public function findUserItem($id){
        return Item::findOrFail($id)->get();
    }

    public function delete($id){
        $item = $this->find($id);
        $item->delete();
    }

    public function addItem(Item $item){
        return Auth::user()->item()->save($item);
    }

    public function checkbox(){
        return User::all();
    }
}