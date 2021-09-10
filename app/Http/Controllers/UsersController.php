<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $allusers= DB::select(DB::raw('SELECT * FROM `users`'));
//        $allusers = User::all();
//        $allusers = User::get()->toArray();
//        $allusers = User::find(4)->toArray();
//        $allusers = User::where('id', 4)->first();
        $allusers = User::where('name', 'Rabbee')
                         ->get(['id','name'])->toArray();

        $fetchArray = [];
        $fetchArray['ClassName'] = 'Class_1';
//        $fetchArray['TeacherName'] = 'RR';
        $fetchArray['total'] = count($allusers);
        foreach ($allusers as $item){
            $fetchArray['student'][$item['id']] = $item['name'];

            if([$item['id']=>4]){
                $fetchArray['TeacherName'] = $item['name'] ;
            }
        }
        dd($fetchArray);
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
