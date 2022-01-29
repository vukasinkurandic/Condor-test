<?php
require_once 'interfaces/interface.php';

class SemrushAnalyticsSource implements GetData
{
    // Here goes Pseudologic, in real case logic depends of type of sorce
    private $data;

    public function get_data()
    {
        $this->data = ['semrushAnalytics' => 2000];
        return json_encode($this->data);
    }
}
