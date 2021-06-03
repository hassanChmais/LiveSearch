<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Team;
use DB;
class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function game_index(){
$teams=Team::orderBy('teams.id','ASC')->join('games','teams.game_id','games.id')->join('rounds','games.round_id','rounds.id')->get(['teams.*','games.game_name','rounds.name']);

/*$games=Game::join('rounds','games.round_id','rounds.id')->get(['games.*','rounds.name']);*/
$data= array();
foreach ($teams as $team) {
  $data[]=['Team_id'=>$team->id,'Team_Name'=>$team->team_name,'Grp_name'=>$team->game_name,'Round_Name'=>$team->name];
}
  
  return response()->json([

'data' =>$data,
'Date' =>date('Y-M-D'),
  ]) ;
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
