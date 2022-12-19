<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use App\MyClasses\MyServiceInterface;
use App\Facades\PowerMyService;
use Illuminate\Support\Facades\DB;
use App\Models\Person;
use App\Jobs\MyJob;

class HelloController extends Controller
{
 public function index(Person $person = null)
 {
  if($person != null)
  {
    MyJob::dispatch($person);
  }
  $msg = 'show people record';
  $result = Person::all();
  $data = [
    'input' => '',
    'msg' => $msg,
    'data' => $result,
  ];
  return view('hello.index', $data);
 }
}
