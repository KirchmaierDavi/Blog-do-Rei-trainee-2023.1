<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class AdmController
{
    public function view()
    {
        $usuarios = App::get('database')->selectAll('users');
        $tables = [
            'users' => $usuarios,
        ];

        return view('admin/index', $tables);
    }

}
