<?php
require_once 'IGetAnalytics.php';

class DbAnalyticsSource implements GetData
{
    // Here goes Pseudologic, in real case logic depends of type of source
    private $data;
    public $sourceName = 'Database Analytics';

    public function get_data()
    {
        $this->data = ['dbAnalitics' => 2000];
        return json_encode($this->data);
    }
}
