<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PartnerController extends Controller 
{
    public function index() : View
    {
        return view('partner.index', []);
    }

    public function show(Request $request) : View
    {
        $id = $request->id;
        
        // $asso = \DB::table('users')->whereRaw('id = '.$id)->get();
        // $this->rendu($asso->first());
        return view('partner.show', []);
    }

    public function contact() : View
    {
        return view('partner.contact');
    }

    public function create() : View
    {
        return view('partner.create');
    }

    public function store(Request $request) : RedirectResponse
    {
        // \DB::table('users')->insert(
        //     ['name' => $_POST['name'], 'email' => $_POST['email'], 'password' => $_POST['password']]
        // );
        
        return redirect()->route('partner.index')->withErrors(__("An error occured during this partner registration..."));
    }

    public function destroy(Request $request) : RedirectResponse
    {
        $id = $request->id;

        // $id = $_GET['id'];
        // $r = \DB::table('users')->whereRaw('id = '.$id)->delete($id);
        // if ($r) {
        //     $this->index();
        // } else {
        //     echo 'Erreur';
        // }

        return redirect()->route('partner.index')->withErrors(__("An error occured while deleting this partner..."));
    }
}