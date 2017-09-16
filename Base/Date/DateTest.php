<?php
class DateTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function time(){
        $now = new \DateTime('NOW');
        $now_date = $now->format('Y-m-d');
        echo $now_date;
        echo PHP_EOL;

        $past = new \DateTime('NOW');
        $past->modify(sprintf('-%d day', 6));
        $past_date = $past->format('Y-m-d');
        echo $past_date;

        $sql= "
        SELECT DISTINCT (split_part(product_id, '-', 1))
        FROM audit
        WHERE ((date(created_at) BETWEEN '{$past_date}' AND '{$now_date}') OR
               (date(updated_at) BETWEEN '{$past_date}' AND '{$now_date}')) AND product_id LIKE '%-%'
        ORDER BY (split_part(product_id, '-', 1)) DESC;";
        echo $sql;
    }
}


