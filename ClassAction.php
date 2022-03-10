<?php

class Action
{
	public function doSomething($param1,$param2,$param3,$param4,$param5,$param6)
	{
        $return['calc_factor'] = ($param1 + $param3 + $param4 + $param5) * $param6;

        $return['vlr_type'] = "";

        for($c=0; $c < count($param2); $c++ )
        {
            for($d=0; $d<count($param2[$c]); $d++)
            {
                if($param2[$c]['vlr'] == 0.00)
                {
                    $return['vlr_type'] = "FREE";
                }
                elseif($param2[$c]['vlr'] >= 0.01 and $param2[$c]['vlr'] <= 10)
                {
                    $return['vlr_type'] = "CHEAP";
                }
                elseif($param2[$c]['vlr'] > 10 and $param2[$c]['vlr'] <= 20)
                {
                    $return['vlr_type'] = "GOOD_VALUE";
                }
                elseif($param2[$c]['vlr'] > 20)
                {
                    $return['vlr_type'] = "EXPENSIVE";
                }
            }
        }

        return $return;
	}
}