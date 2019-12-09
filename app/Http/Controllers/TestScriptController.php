<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\StringLibrary;
use App\Library\CSVExport;

class TestScriptController extends Controller
{
    //
    private $stringLib;
    private $csvExport;

    public function __construct()
    {
        $this->stringLib = new StringLibrary();
        $this->csvExport = new CSVExport();
    }

    public function index()
    {
        return view('test_page');
    }

    public function post(Request $req)
    {
        $style = $req->input('style') === NULL ? NULL : $req->input('style');

        if($style !== NULL)
        {
            switch($style)
            {
                case 'uppercase': return $this->stringLib->toUppercase($req->input('text'));
                    break;
                case 'random':  return $this->randomUpper($req->input('text'));
                    break;
                case 'tocsv' : return $this->toCSV($req->input('text'));
                    break;
                default:
                    return 'No Style checked';
            }
        } else {
            return $req->input('text');
        }
    }

    private function randomUpper($string)
    {
        for ($i=0, $c=strlen($string); $i<$c; $i++)
            $str[$i] = (rand(0, 100) > 70
                ? strtoupper($string[$i])
                : strtolower($string[$i]));

        return implode('',$str);
    }

    private function toCSV($string)
    {
        echo 'CSV Created!';
        echo '<br>';
        echo $this->csvExport->export($string,',','testFile');
    }
}
