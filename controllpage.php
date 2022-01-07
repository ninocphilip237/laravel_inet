<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class controllpage extends Controller
{
  public function kalthotty(Request $north)
  {
	  $data['name']=$north->input('name');
	  $data['age']=$north->input('age');
	  $data['address']=$north->input('address');
	  $data['mobile']=$north->input('mobile');
	  $data['gender']=$north->input('gen');
	  $data['language']=$north->input('malayalam').",".$north->input('english').",".$north->input('hindi');
	  $data['email']=$north->input('email');
	  $data['password']=$north->input('password');
	  $data['photo']=$north->img->getClientOriginalName();
	  $north->file('img')->move('images',$data['photo']);
	  DB::table('regi')->insert($data);
  }
  public function kaloor()
  {
	  $chacko['array']=DB::table('regi')->get();
	  return view('display',$chacko);
  }
  public function vytila($pencil)
  {
	  $book['array']=DB::table('regi')->where('id',$pencil)->get();
	 return view('edit',$book);
  }
  public function kochi(Request $north,$edapally)
  {
	 $data['name']=$north->input('name');
	  $data['age']=$north->input('age');
	  $data['address']=$north->input('address');
	  $data['mobile']=$north->input('mobile');
	  $data['gender']=$north->input('gen');
	   $data['language']=$north->input('malayalam').",".$north->input('english').",".$north->input('hindi');
	  $data['email']=$north->input('email');
	  $data['password']=$north->input('password');
	  if($north->hasFile('img'))
	  {
	  $data['photo']=$north->img->getClientOriginalName();
	  $north->file('img')->move('images',$data['photo']);
	   
	  DB::table('regi')->where('id',$edapally)->update($data); 
	  }
	  else
	  {
		 DB::table('regi')->where('id',$edapally)->update($data);   
	  }
	  return redirect('display');
	  
  }
  public function tvm($id)
  {
	  DB::table('regi')->where('ID',$id)->delete();
	  return redirect ('display');
  }
  public function goa(Request $goa)
  
 {
	 return view('login');
 }
public function amal(Request $goa)
{
$email=$goa->input('email');
$password=$goa->input('password');
$kollam=DB::table('regi')->where('email',$email)->Where('password',$password)->pluck('id');
 if(isset($kollam[0]))
 {
	$goa->session()->put('pazham',$kollam[0]);
	return redirect('userhome');
 }
 else
 {
	 echo "invalid";
 }
}
public function anand(Request $goa)
{
	

	if($goa->session()->has('pazham'))
	{
		$gol=$goa->session()->get('pazham');
		$lol['array']=DB::table('regi')->where('id',$gol)->get();
		return view('userhome',$lol);
	}
	else
	{
		return view('login');
	}
}
public function logouts(Request $log)
{
	$gol=$log->session()->get('pazham');
	if($log->session()->has('pazham'))
	{
	
		$log->session()->flush();
		return view('login');	
		
	}
	

}
}


