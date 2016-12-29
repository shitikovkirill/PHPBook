<?php

/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 29.12.16
 * Time: 14:45
 */
class MetacharactersTest extends PHPUnit_Framework_TestCase
{
    public function metacharacters()
    {
        /*
        . Match any character
        ˆ Match the start of the string
        $ Match the end of the string
        \s Match any whitespace character
        \d Match any digit
        \w Match any “word” character
         */

    }

    public function quantifiers()
    {
        /*
        * The character can appear zero or more times
        + The character can appear one or more times
        ? The character can appear zero or one times
        {n,m} The character can appear at least n times, and no more than m .
        Either parameter can be omitted to indicated a minimum limit
        with no maximum, or a maximum limit without a minimum, but
        not both.
         */

    }

    /**
     * @test
     */
    public function subExpressions()
    {
        $data = preg_match('/a(bc.)e/', 'abcre');
        $this->assertEquals(1, $data);

        $data = preg_match('/a(bc.)+e/', 'abcrbcfbcwe');
        $this->assertEquals(1, $data);
    }

    /**
     * @test
     */
    public function matchingAndExtractingStrings()
    {
        $name = "Davey Shafik";
        // Simple match
        $regex = "/[a-zA-Z\\s]/";
        $data = preg_match($regex, $name);
        $this->assertEquals(1, $data, 'Valid Name');

        $regex = '/^(\w+)\s(\w+)/';
        $matches = array();
        preg_match($regex, $name, $matches);

        $this->assertArraySubset(['Davey Shafik', 'Davey', 'Shafik'], $matches);
    }

    /**
     * @test
     */
    public function performingMultipleMatches()
    {
        $string = "a1bb b2cc c2dd";
        $regex = "#([abc])\\d#";
        $matches = array();
        preg_match_all($regex, $string, $matches);

        $this->assertArraySubset([['a1', 'b2', 'c2'], ['a', 'b', 'c']], $matches);
    }

    /**
     * @test
     */
    public function usingPCREtoReplaceStrings()
    {
        $body = "[b]Make Me Bold![/b]";
        $regex = "@\\[b\\](.*?)\\[/b\\]@i";
        $replacement = '<b>$1</b>';
        $body = preg_replace($regex, $replacement, $body);

        $this -> assertEquals('<b>Make Me Bold!</b>', $body);

        $regex = [];

        $subjects['body'] = "[b]Make Me Bold![/b]";
        $subjects['subject'] = "[i]Make Me Italics![/i]";
        $regex[] = "@\\[b\\](.*?)\\[/b\\]@i";
        $regex[] = "@\\[i\\](.*?)\\[/i\\]@i";
        $replacements[] = "<b>$1</b>";
        $replacements[] = "<i>$1</i>";
        $results = preg_replace($regex, $replacements, $subjects);

        $this->assertArraySubset(
            ['body' => '<b>Make Me Bold!</b>', 'subject' => '<i>Make Me Italics!</i>',],
            $results
        );
    }
}
