<?php

class HtmlElemnt {

public function create($type, array $option) {
foreach($option as $opt) {

}
}

}

$options = [
'background' =>'red',
'color' =>'white',
'width' => '100%',
];
$div = new HtmlElement('p', $options);