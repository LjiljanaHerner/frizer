<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   public function index() 
   {
	   return view('welcome'); 
   }//
   public function about_us() 
   {
	   return view('contents.O_nama'); 
   }//
   public function contact() 
   {
	   return view('contents.kontakt'); 
   }//
   public function locations() 
   {
	   return view('contents.lokacije'); 
   }//
   public function galleries() 
   {
	   return view('contents.galerija'); 
   }//
   public function hairstyles() 
   {
	   return view('contents.hairstyles'); 
   }//
   public function haircut() 
   {
	   return view('contents.haircut'); 
   }//
   public function recommendations() 
   {
	   return view('contents.recommendations'); 
   }//
}
