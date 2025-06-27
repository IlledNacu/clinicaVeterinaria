<?php //Crearlo con Laravel y luego hacer esto
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller {
    public function index() {
        return view('admin.index');
    }
}