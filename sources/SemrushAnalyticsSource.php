<?php
require_once 'IGetAnalytics.php';

class SemrushAnalyticsSource implements GetData
{
    // Here goes Pseudologic, in real case logic depends of type of source
    private $data;
    public $sourceName = 'Semrush Analytics';

    public function get_data()
    {
        // Made a mistake to simulate not getting data
        $this->data = 123;
        return json_encode($this->data);
    }
}
