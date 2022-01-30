<?php
require_once 'interfaces/interface.php';

class GoogleAnalyticsSource implements GetData
{
    // Here goes Pseudologic, in real case logic depends of type of source
    private $data;
    public $sourceName = 'Google Analytics';

    public function get_data()
    {
        $this->data = ['GoogleAnalitics' => 1500];
        return json_encode($this->data);
    }
}
