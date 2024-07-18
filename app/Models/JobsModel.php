<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobsModel extends Model
{
    use HasFactory;
    protected $table = 'jobs';

    static public function getRecord(Request $request){
        // $return = self::select('jobs.*')
        //             ->orderBy('id', 'desc')
        //             ->paginate(5);

        //             return $return ;

        $query = self::select('jobs.*');

        // search box start
        if (!empty($request->get('id'))) {
            $query = $query->where('id', '=', $request->get('id'));
        }
        if (!empty($request->get('job_title'))) {
            $query = $query->where('job_title', 'like', '%' . $request->get('job_title') . '%');
        }
        if (!empty($request->get('min_salary'))) {
            $query = $query->where('min_salary', 'like', '%' . $request->get('min_salary') . '%');
        }
        if (!empty($request->get('max_salary'))) {
            $query = $query->where('max_salary', 'like', '%' . $request->get('max_salary') . '%');
        }
        // search box end

        $records = $query->orderBy('id' , 'desc')
                    ->paginate(10);
        return $records ;

    }   
}
