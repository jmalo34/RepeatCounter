<?php
    class RepeatCounter
    {
        function countRepeats($phrase, $word)
        {
            $phrase = preg_replace("/[^0-9a-zA-Z\' ]/", " ", $phrase);
            $phrase = array_count_values(explode(' ', (strtolower($phrase))));

            foreach ($phrase as $key => $value)
            {
                if ($key == $word)
                {
                    return "$value";
                }
                else
                {
                    return "0";
                }
            }
        }
    }
 ?>
