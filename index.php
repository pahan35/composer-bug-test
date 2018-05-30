<?php
/**
 * Created by PhpStorm.
 * User: grodas.p35
 * Date: 5/30/2018
 * Time: 21:22
 */


use Convertio\Convertio;

require_once 'vendor/autoload.php';
require_once 'config.php';


function convertToPdf($sourceDocxPath, $targetPdfPath) {
    $result = [];
    //start selection
    $convertio = new Convertio(CONVERTIO_API_KEY);
    $result['error'] = false;
    $result['success'] = $convertio->start($sourceDocxPath, 'pdf')->wait()->download($targetPdfPath)->delete();
    //end selection
    return $result;
}
