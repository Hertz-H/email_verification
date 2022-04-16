<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
class RoleController extends Controller
    { 
        function generateRoles(){

                Role::create([
                    'name' => 'super_admin',
                    'display_name' => 'ادارة النظام', // optional
                    
                ]);

                Role::create([
                    'name' => 'admin',
                    'display_name' => 'ادارة المحتوى', // optional
                  
                ]);

                Role::create([
                    'name' => 'client',
                    'display_name' => 'العملاء', // optional
                   
                ]);
            }
}
