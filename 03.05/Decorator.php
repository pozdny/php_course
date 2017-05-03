<?php

/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 03.05.2017
 * Time: 20:07
 */
interface Imail{
    public function content();
}
class BaseMail implements Imail{
    public function content()
    {
        // TODO: Implement content() method.
        echo "Best regards";
    }
}
abstract class mailDecorator implements Imail{
    protected $baseContent;
    public function __construct(Imail $baseContent)
    {
        $this->baseContent = $baseContent;
    }
    abstract public  function content();
}
class discountMail extends mailDecorator{
    public function content(){
        echo 'Discount email FOR YOU!';
        $this->baseContent->content();
    }
}
class errorMail extends mailDecorator{
    public function content(){
        echo 'Your server is down!';
        $this->baseContent->content();
    }
}
$mail = new BaseMail();
$mail = new discountMail($mail);
$mail->content();
echo '<hr>';
$mail = new BaseMail();
$mail = new errorMail($mail);
$mail->content();