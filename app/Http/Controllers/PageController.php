<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
       }

       public function about() {
        return 'Nama : Rina Puji Hariyanti, NIM : 2041720044';
       }

       public function articles($id) {
        return 'Halaman Artikel dengan Id '.$id;
       }
}
