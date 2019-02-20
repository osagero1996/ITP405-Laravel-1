<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Configuration;

class SettingsController extends Controller
{
    public function index(){
      $config = Configuration::find(1)->value;
      return view('settings', [
        'config' => $config,
      ]);
    }
    
    public function change(){
      // $request->configCheckBox
      $config = Configuration::find(1);
      if(request('configCheckBox') == "config"){
        $config->value = "on";
        $config->save();
        return redirect('profile');
      }else{
        $config->value = "off";
        $config->save();
        return redirect('profile');
      }
      
      
      
    }
    
    
    
}
