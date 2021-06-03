<?php

namespace App\Http\Controllers;
use \App\Repositories\RoundRepository;
use Illuminate\Http\Request;
use App\Models\Round;
use Validator;
use paginate;
use Redirect;


class RoundController extends Controller
{
    //

private $roundRepository;
	public function __construct(RoundRepository $roundRepository){
    
    $this->roundRepository = $roundRepository;

	}
    public function view_rounds(){

//$rounds = $this->roundRepository->all('name');
$rounds=Round::orderBy('id','ASC')->paginate(10);
//return $rounds ;
return view('rounds.view_all_rounds',compact('rounds'));

    }



public function search_rounds(Request $r){

        $name = $r->input('name');

		$rounds = Round::orderBy('id','ASC')->where('name','LIKE','%'.$name.'%')->get();
		
		$output='    <table class="table table-striped" style="text-align: center">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col"> Category Name</th>
         <th scope="col" style="text-align:center"><i class="fas fa-edit"></i> </th>
         
 
      </tr>
  </thead>
  <tbody>';
    foreach($rounds as $r){
     	$output .= '
     <tr>
      <th >'.$r->name.'</th>
      <th > Test </th>

      <td  style="text-align:center">  <a href="" class="btn btn-primary ">Update And Details</a></td>
      <td  style="text-align:center">  <a href="" class="btn btn-danger ">Delete</a></td>
     
</tr>';

}

$output .='</tbody>
</table>';
		return $output ;
		
}
}