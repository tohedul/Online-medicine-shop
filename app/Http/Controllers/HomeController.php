<?php

namespace App\Http\Controllers;
use App\User;
use App\Product;
use App\Cart;


use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class homeController extends Controller
{
  public function admin(Request $req)
  {

      return view('admin.home');
  }
  public function customer(Request $req)
  {
     return view('customer.home');
  }
  public function emplist(Request $req)
  {
    $emps=User::where('type', 'customer')->get();
    return view('admin.emplist')->with('emps', $emps);
  }
  public function delete(Request $req, $id)
  {
    User::destroy($req->id);
    $emps=User::where('type', 'customer')->get();
    return view('admin.emplist')->with('emps', $emps);
  }
  public function update($id)
  {
    // if(session('un') == null)
    // {
    //    return redirect()->route('login.index');
    // }
    $emp=User::find($id);
    return view('admin.update')->with('emp', $emp);

  }
  public function updated(Request $req, $id)
  {
    $emp=User::find($req->id);
    $emp->empName= $req->empName;
    $emp->contactNo= $req->contactNo;
    $emp->username= $req->username;
    $emp->password= $req->password;
    $emp->save();

    $emp=User::find($id);
    return view('admin.update')->with('emp', $emp);

  }

    public function search(Request $req)
    {
      $txt=$req->search;
      $searchresults=User::where('type', 'customer')
                          ->where('empName', 'like', '%'.$txt.'%')
                          ->paginate(5);
      return view('admin.search')->with('searchresults', $searchresults);
    }




  public function create(Request $req)
  {
     return view('admin.create');
  }
  public function created(Request $req)
  {
    $emp=new User;
    $emp->empName= $req->empName;
    $emp->contactNo= $req->contactNo;
    $emp->username= $req->username;
    $emp->password= $req->password;
    $emp->type= 'customer';
    $emp->save();

     return redirect()->route('home.admin');
  }

  public function product(Request $req)
  {

    $txt=$req->search;
      $searchresults=Product::where('name', 'like', '%'.$txt.'%')
                          ->orWhere('genre', 'like', '%'.$txt.'%')
                          ->orWhere('vendor', 'like', '%'.$txt.'%')
                          ->orWhere('form', 'like', '%'.$txt.'%')
                          ->paginate(5);

     return view('customer.product')->with('products', $searchresults);
  }
  
  public function productadd(Request $req)
    {
      $cart=new Cart;
      $cart->customerid= session('logged')->id;
      $cart->customername= session('logged')->empName;
      $cart->medicinename= $req->medicinename;
      $cart->quantity= $req->quantity;
      $cart->price= $req->price;
      $cart->save();
       return redirect()->route('home.customer');
    }



  public function productadmin(Request $req)
  {
    $products=Product::get();
     return view('admin.product')->with('products', $products);
  }
  public function newproduct(Request $req)
  {

     return view('admin.newproduct');
  }
  public function newproduct_store(Request $req)
  {
    $prd=new Product;
    $prd->name= $req->name;
    $prd->quantity= $req->quantity;
    $prd->price= $req->price;
    $prd->genre= $req->genre;
    $prd->form= $req->form;
    $prd->vendor= $req->vendor;
    $prd->save();

     return redirect()->route('home.admin');
  }



  //profile 

  public function upload(Request $request){

      return view('customer.upload');
    }

    public function storePhoto(Request $request){

      $file = $request->file('mypic');



      $photoName = date('H-m-s').".".$file->getClientOriginalExtension();
      
      $user = User::find(session('logged')->id);
      $user->photo = $photoName;
      $user->save();
      $file->move('upload/', $photoName);

      return redirect()->route('home.profile');
    }

    public function profile(Request $request){
       $user = User::find(session('logged')->id);

      return view('customer.profile')
          ->withUser($user);
      
    }
    public function profileupdate(Request $req){
        $emp=User::find(session('logged')->id);
        $emp->empName= $req->empName;
        $emp->contactNo= $req->contactNo;
        $emp->username= $req->username;
        $emp->password= $req->password;
        $emp->save();

      $user = User::find(session('logged')->id);
      return view('customer.profile')
          ->withUser($user);
      
    }


    //cart


    public function cart(Request $request)
    {
      $ci=session('logged')->id;
      $data=Cart::where('customerid', $ci)
                ->get();

      return view('customer.cart')->with('data', $data);
    }
    public function purchase(Request $request)
    {
      

      return redirect()->route('home.customer');
    }
    

}
