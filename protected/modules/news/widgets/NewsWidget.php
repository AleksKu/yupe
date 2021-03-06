<?php
class NewsWidget extends YWidget
{
    public $count = 5;

    public function run()
    {
        $news = News::model()->published()->findAll(array(
	        'limit' => $this->count,
	        'order' => 'date DESC'
	    ));

        $this->render('news', array('news' => $news));
    }
}