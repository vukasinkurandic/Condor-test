<?php
require_once 'interfaces/interface.php';

class DbAnalyticsSource implements GetData
{
    // Here goes Pseudologic, in real case logic depends of type of sorce
    private $data;

    public function get_data()
    {
        $this->data = ['dbAnalitics' => 2000];
        return json_encode($this->data);
    }
}
