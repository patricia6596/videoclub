<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Http\Controllers\CatalogController;

    class HomeController extends Controller {
        public function getHome() {
            /*return view('home');*/
            return redirect()->action([CatalogController::class, 'getIndex']);
        }
        public function login() {
            return view('auth.login');
        }
    }

?>