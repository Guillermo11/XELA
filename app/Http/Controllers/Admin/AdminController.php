<?php

namespace App\Http\Controllers\Admin;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use Illuminate\Support\Facades\Storage;
use MercurySeries\Flashy\Flashy;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth');
     }
    public function index()
    {

     return view('Admin.Listar_Admin');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('Admin.Admin_User');  //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminRequest $request)
    {

  $user =new User;
        $user->name  =  $request["name"];
       	$user->surname=$request["surname"];
       	$user->telephone=$request["telephone"];
       	$user->address=$request["address"];
       	$user->email=$request["email"];
       	$user->password=bcrypt($request["password"]);
        if ($request->hasFile('Imagen')) {
          $user->Photo = $request->file('Imagen')->Store('public');
         }
         $user->save();

Flashy::success('Se ha registrado de forma Exitosa');
 return Redirect('Admin/create');
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
      $admin =User::find($id);
   		return view('Admin.actualizar_Admin',['admin'=>$admin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminRequest $request, $id)
    {
      $usuario =User::find($id);
      $usuario ->fill($request->except('Imagen'));
       if ($request->hasFile('Imagen')) {
         $usuario->Photo = $request->file('Imagen')->Store('public');
         }
     $usuario ->save();
     return redirect('Admin');  //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

     User::destroy($id);
    return redirect('Admin');
    }
}
