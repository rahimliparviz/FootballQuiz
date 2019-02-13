<?php

namespace App\Http\Controllers;

use App\Question;
use App\User;
use Illuminate\Http\Request;

class DtableController extends Controller
{
   public function users(Request $request){


       $columns = array(
           0 => 'name',
           1 => 'email',
           2 => 'created_at',
           3 => 'action'
       );

       $totalData = User::count();
       $limit = $request->input('length');
       $start = $request->input('start');
       $order = $columns[$request->input('order.0.column')];
       $dir = $request->input('order.0.dir');

       if(empty($request->input('search.value'))){
           $posts = User::offset($start)
               ->limit($limit)
               ->orderBy($order,$dir)
               ->get();
           $totalFiltered = User::count();
       }else{
           $search = $request->input('search.value');
           $posts = User::where('name', 'like', "%{$search}%")
               ->orWhere('email','like',"%{$search}%")
               ->orWhere('created_at','like',"%{$search}%")
               ->offset($start)
               ->limit($limit)
               ->orderBy($order, $dir)
               ->get();
           $totalFiltered = User::where('name', 'like', "%{$search}%")
               ->orWhere('email','like',"%{$search}%")
               ->count();
       }
//       /cpanel/user/delete/

       $data = array();

       if($posts){
           foreach($posts as $r){
               $nestedData['name'] = $r->name;
               $nestedData['email'] = $r->email;
               $nestedData['created_at'] = date('d-m-Y H:i:s',strtotime($r->created_at));
               $nestedData['action'] = '
                	<a href="'.config('app.url').'/cpanel/user/delete/'.$r->id.'" class="btn btn-danger btn-xs">Delete</a>


			
				';
               $data[] = $nestedData;
           }
       }

       $json_data = array(
           "draw"			=> intval($request->input('draw')),
           "recordsTotal"	=> intval($totalData),
           "recordsFiltered" => intval($totalFiltered),
           "data"			=> $data
       );

       echo json_encode($json_data);


   }


    public function questions(Request $request){

        $columns = array(
            0 => 'img',
            1=>'question',
            2=>'level',
            3 => 'created_at',
            4 => 'action'
        );

        $totalData = Question::count();
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if(empty($request->input('search.value'))){
            $posts = Question::offset($start)
                ->limit($limit)
                ->orderBy($order,$dir)
                ->get();
            $totalFiltered = Question::count();
        }else{
            $search = $request->input('search.value');
            $posts = Question::where('level', 'like', "%{$search}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
            $totalFiltered = Question::where('level', 'like', "%{$search}%")
                ->count();
        }


        $data = array();

        if($posts){
            foreach($posts as $r){

                $q = Question::find($r->id)->tr();



                $img;
                if ($r->img != null){
                    $img = '<img width="200" height="150" class="img-thumbnail" src="'.substr(config('app.url').$r->img,5).'">';}
                else{
                    $img = '<img width="200" height="150" class="img-thumbnail" src=" http://www.mnra.gov.bz/wp-content/plugins/special-recent-posts/images/no-thumb.png">';
                }


                $nestedData['img'] = $img;
                $nestedData['question'] = $q;
                $nestedData['level'] = $r->level;
                $nestedData['created_at'] = date('d-m-Y',strtotime($r->created_at));
                $nestedData['action'] = '

					<a href=" /cpanel/questions/delete/'.$r->id.'" class="btn btn-danger btn-xs">Delete</a>
					
					<a href="/cpanel/questions/edit/'.$r->id.'" class="btn btn-warning btn-xs">Edit</a>
				';
                $data[] = $nestedData;
            }
        }

        $json_data = array(
            "draw"			=> intval($request->input('draw')),
            "recordsTotal"	=> intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data"			=> $data
        );

        echo json_encode($json_data);


    }




































}
