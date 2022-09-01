<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use App\MyClasses\MyService;

class HelloController extends Controller
{
  private $fname;

  function __construct(MyService $myservice)
  {
    $myservice = app('App\MyClasses\MyService');
  }

  public function index(MyService $myservice, int $id = -1)
  {
    $myservice->setId($id);
    $data = [
      'msg' => $myservice->say(),
      'data' => $myservice->alldata()
    ];
    return view('hello.index', $data);
  }

  public function other($msg)
  {
    // $data = Storage::append($this->fname) . PHP . $msg;
    Storage::disk('public')->prepend($this->fname, $msg);
    return redirect()->route('hello');
  }
}
