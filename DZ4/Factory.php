<?php

/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 02.05.2017
 * Time: 15:07
 */

interface File{
    public function createFile($data);

}
class Txt implements File{
    public function createFile($data){
        $fp = fopen("course.txt", "w");
        $str = '';
        foreach($data as $key=>$value){
            $str.= $key.': '.$value."\n";
        }
        $str.= '------------------'."\n\r";
        // записываем в файл текст
        fwrite($fp, $str);

        // закрываем
        fclose($fp);
    }
}
class Xml implements File{
    public function createFile($data){
       // header('Content-type: text/xml');
        $fileXml = dirname(__FILE__).DIRECTORY_SEPARATOR.'course.xml';
        $xml = new XMLWriter(); //создаем новый экземпляр класса XMLWriter
        $xml->openURI($fileXml);
        $xml->startDocument('1.0', 'UTF-8'); //установка версии XML в первом теге документа
        $xml->startElement("course");
        $xml->writeElement("course_id", $data["id"]);
        $xml->writeElement("course_name", $data["name"]);
        $xml->writeElement("course_length", $data["length"]);
        $xml->writeElement("date_start", $data["date_start"]);
        $xml->writeElement("date_stop", $data["date_stop"]);
        $xml->endElement();
    }
}
class Pdf implements File{
    public function createFile($data){
        require('fpdf.php');
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(40,10,'id: '.$data["id"]);
        $pdf->Ln(10);
        $pdf->Cell(40,10,'name: '.$data["name"]);
        $pdf->Ln(10);
        $pdf->Cell(40,10,'length: '.$data["length"]);
        $pdf->Ln(10);
        $pdf->Cell(40,10,'date start: '.$data["date_start"]);
        $pdf->Ln(10);
        $pdf->Cell(40,10,'date stop: '.$data["date_stop"]);
        $pdf->Ln(10);
        $pdf->Output('F', 'course.pdf');

    }
}

class Factory{
    public function getData($type){
        switch ($type){
            case 'txt':
                return new Txt();
                break;
            case 'xml':
                return new Xml();
                break;
            case 'pdf':
                return new Pdf();
                break;
        }
    }
}

$course = [
    "id"=>1,
    "name" => "PHP",
    "length" => 50,
    "date_start"=>"20.04.2017",
    "date_stop" =>"10.06.2017"
];

$fabrika  = new Factory();
$obj = $fabrika->getData('txt');
$obj->createFile($course);

$obj = $fabrika->getData('xml');
$file_xml = $obj->createFile($course);
echo $file_xml;

$obj = $fabrika->getData('pdf');
$obj->createFile($course);