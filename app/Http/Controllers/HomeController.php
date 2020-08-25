<?php

namespace App\Http\Controllers;

use App\Contacts;
use App\HomePage;
use App\Http\Controllers\Controller;
use App\Jobs\SendMailToSubscriberJob;
use App\Rule;
use App\Team;
use App\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model;

class HomeController extends Controller
{
 
    public function get(){
        return config('custom.var');
    }
}
