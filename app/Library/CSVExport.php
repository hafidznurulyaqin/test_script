<?php

namespace App\Library;


class CSVExport {


    public function export($text, $delimiter=",",$fileName)
    {
        $fileName = $fileName.'.csv';

        $array = str_split($text);

        $f = fopen('php://output', 'w');

        fputcsv($f, $array, $delimiter);
        fpassthru($f);

        fclose($f);

        ob_flush();
    }

}
