<?php 

namespace Jemer\Faker;


class Factory
{
    public static function Blog_Category() : string
    {
        $index = rand(0, count(Lists::$BlogCategories)-1);

        return Lists::$BlogCategories[$index];
    }
    public static function Blog_Categories($count) : array
    {
        $cache = [];
        
        for ($i=0; $i < $count; $i++) { 
            array_push($cache, self::Blog_Category());
        }

        return $cache;
    }

    public static function Name_Man()
    {
        $index = rand(0, count(Lists::$MensNames)-1);

        return Lists::$MensNames[$index];
    }
    public static function Names_Men($count) : array
    {
        $cache = [];
        
        for ($i=0; $i < $count; $i++) { 
            array_push($cache, self::Name_Man());
        }

        return $cache;
    }


    public static function Name_Woman()
    {
        $index = rand(0, count(Lists::$WomensNames)-1);

        return Lists::$WomensNames[$index];
    }
    public static function Names_Women($count) : array
    {
        $cache = [];
        
        for ($i=0; $i < $count; $i++) { 
            array_push($cache, self::Name_Woman());
        }

        return $cache;
    }


    public static function StreetName()
    {
        $index = rand(0, count(Lists::$StreetNames)-1);

        return Lists::$StreetNames[$index];
    }
    public static function StreetNames($count) : array
    {
        $cache = [];
        
        for ($i=0; $i < $count; $i++) { 
            array_push($cache, self::StreetName());
        }

        return $cache;
    }

    public static function Country()
    {
        $index = self::RandomeFromArray(Lists::$Countries);

        return Lists::$Countries[$index];
    }
    public static function Countries($count) : array
    {
        $cache = [];
        
        for ($i=0; $i < $count; $i++) { 
            array_push($cache, self::Country());
        }

        return $cache;
    }


    public static function State_FullName()
    {
        $index = self::RandomeFromArray(Lists::$US_States);

        return Lists::$US_States[$index];
    }
    public static function States_FullNames($count) : array
    {
        $cache = [];
        
        for ($i=0; $i < $count; $i++) { 
            array_push($cache, self::State_FullName());
        }

        return $cache;
    }


    public static function State_Abbreviated()
    {
        $index = self::RandomeFromArray(Lists::$US_States_Abbreviated);

        return Lists::$US_States_Abbreviated[$index];
    }
    public static function States_Abbreviated($count) : array
    {
        $cache = [];
        
        for ($i=0; $i < $count; $i++) { 
            array_push($cache, self::State_Abbreviated());
        }

        return $cache;
    }






    //-----------------------Helpers-----------------------//
    private static function RandomeFromArray($array)
    {
        return rand(0, count($array)-1);
    }
    private static function RandomNumber()
    {
        return rand(0, 9);
    }
    private static function RandomBetween($min, $max)
    {
        return rand($min, $max);
    }
    




}


?>