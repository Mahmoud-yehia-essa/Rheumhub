<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Sources;
use App\Models\Policies;
use App\Models\AppVersion;
use App\Models\Assessment;
use Illuminate\Http\Request;

class HtmlController extends Controller
{
    //

    public function getHtml($type)
    {

        $html = "";
        if($type == "1")
        {

        $html = About::find(1);
        return $html;
            
        }
        else if($type == "2")
        {

        $html = Contact::find(1);
        return $html;
            
        }

        else if($type == "3")
        {

        $html = Policies::find(1);
        return $html;
            
        }
        else if($type == "4")
        {

        $html = Sources::find(1);
        return $html;
            
        }
        else if($type == "5")
        {
            $html = Assessment::find(1);
            return $html;
        }

        else
        {

            $html = AppVersion::find(1);
            return $html;
        }

    }
}
