<?php
/**
 * Created by PhpStorm.
 * User: rona
 * Date: 28/11/2016
 * Time: 17:56
 */

namespace App\Repositories;

use App\Review;
use App\User;
use DB;
use Illuminate\Support\Facades\Auth;

class ReviewRepository
{
    function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function create($data)
    {
        return Review::create($data);
    }

    public function find($id){
        return Review::findOrFail($id)->get();
    }

    public function all(){
        return Review::all();
    }
    public function delete($id){
        $review = $this->find($id);
        $review->delete();
    }

}