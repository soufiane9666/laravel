<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class NavController extends Controller
{
        public function index()
        {
            return view('welcome');
        }
       
        public function page1()
        {
            return view('page1');
        }
        public function contact()
        {
            return view('contact');
        }
}
