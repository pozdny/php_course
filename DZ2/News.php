<?php

/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 25.04.2017
 * Time: 22:31
 */
interface newsApi {
    public function getNews(News $data);
}

class News
{
    public $title = '';
    public $text = '';
    public $date = '';
    public function __construct($title, $text, $date)
    {
        $this->title = $title;
        $this->text = $text;
        $this->date = $date;
    }
}

class jsonApi implements newsApi
{
    public function getNews(News $data){
        $json_data = array (
            'title'=> $data->title,
            'name'=> $data->text,
            'date'=> $data->date,
        );
        return json_encode($json_data);
    }
}
class xmlApi implements newsApi
{
    public function getNews(News $data){
        $xml = new XMLWriter(); //создаем новый экземпляр класса XMLWriter
        $xml->openMemory(); //использование памяти для вывода строки
        $xml->startDocument(); //установка версии XML в первом теге документа
        $xml->startElement("news");
        $xml->writeElement("title_news", $data->title);
        $xml->writeElement("text", $data->text);
        $xml->writeElement("date", $data->date);
        $xml->endElement();
        echo $xml->outputMemory(); //завершение записи в XML
    }
}

$newsObj = new News('Новая новость', 'Текст новости', '21.04.2017'); // объект новости

$jsonNews = new jsonApi(); //объект jsonApi
$news = $jsonNews->getNews($newsObj); // получение новости в формате json
//var_dump(json_decode($news));

$xmlNews = new xmlApi(); //объект xmlApi
$xmlNews->getNews($newsObj); // получение новости в формате xml

