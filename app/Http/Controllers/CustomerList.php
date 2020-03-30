<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerList extends Controller
{
    public function getDanhSach(){
    	$customer = Customer::all();
    	return view('admin.customer.danhsach');
    }
}
