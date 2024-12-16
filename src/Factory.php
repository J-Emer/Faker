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

    public static function Name_Man() : string
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


    public static function Name_Woman() : string
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


    public static function LastName() : string
    {
        $index = self::RandomeFromArray(Lists::$LastNames);

        return Lists::$LastNames[$index];
    }
    public static function LastNames($count) : array
    {
        $cache = [];
        
        for ($i=0; $i < $count; $i++) { 
            array_push($cache, self::LastName());
        }

        return $cache;
    }



    public static function StreetName() : string
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

    public static function Country() : string
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


    public static function State_FullName() : string
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


    public static function State_Abbreviated() : string
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


    public static function CardinalDirection() : string
    {
        $index = self::RandomeFromArray(Lists::$CardinalDirection);

        return Lists::$CardinalDirection[$index];
    }
    public static function CardinalDirections($count) : array
    {
        $cache = [];
        
        for ($i=0; $i < $count; $i++) { 
            array_push($cache, self::CardinalDirection());
        }

        return $cache;
    }

    public static function Email() : string
    {
        $index = self::RandomeFromArray(Lists::$Email);

        return Lists::$Email[$index];
    }
    public static function Emails($count) : array
    {
        $cache = [];
        
        for ($i=0; $i < $count; $i++) { 
            array_push($cache, self::Email());
        }

        return $cache;
    }


    public static function CityName() : string
    {
        $index = self::RandomeFromArray(Lists::$CityNames);

        return Lists::$CityNames[$index];
    }
    public static function CityNames($count) : array
    {
        $cache = [];
        
        for ($i=0; $i < $count; $i++) { 
            array_push($cache, self::CityName());
        }

        return $cache;
    }


    public static function Us_PhoneNumber() : string
    {
        return self::RandomBetween(0, 999) . "-" . self::RandomBetween(0, 999) . "-" . self::RandomBetween(0, 9999);
    }

    public static function Us_Address() : string
    {
        return self::RandomBetween(0, 999) ." ". self::StreetName() ." ". self::CityName() ." ". self::State_Abbreviated() .", ". self::RandomBetween(0, 99999);
    }

    public static function Paragraph() : string
    {
        return Lists::$Paragraph;
    }
    public static function Paragraphs($count) : string
    {
        $str = "";

        for ($i=0; $i < $count; $i++) { 
            $str .= self::Paragraph() . PHP_EOL . PHP_EOL;
        }

        return $str;
    }
    public static function Age_Adult() : string
    {
        return self::RandomBetween(18, 99);
    }
    public static function Age_Child() : string
    {
        return self::RandomBetween(1, 17);
    }

    public static function Password() : string
    {
        $index = self::RandomeFromArray(Lists::$Passwords);
        return Lists::$Passwords[$index];
    }
    public static function Passwords($count) : array
    {
        $cache = [];
        
        for ($i=0; $i < $count; $i++) { 
            array_push($cache, self::Password());
        }

        return $cache;
    }

    /**
     * Blog, Book, Article type title
     */
    public static function Title() : string
    {
        $index = self::RandomeFromArray(Lists::$Titles);
        return Lists::$Titles[$index];
    }

    /**
     * Blogs, Books, Articles type titles
     */
    public static function Titles($count) : array
    {
        $cache = [];
        
        for ($i=0; $i < $count; $i++) { 
            array_push($cache, self::Title());
        }

        return $cache;
    }

    public static function Month() : string
    {
        $index = self::RandomeFromArray(Lists::$Months);
        return Lists::$Months[$index];
    }
    public static function Months($count) : array
    {
        $cache = [];
        
        for ($i=0; $i < $count; $i++) { 
            array_push($cache, self::Month());
        }

        return $cache;
    }

    public static function Date() : string
    {
        return self::RandomBetween(1, 30) . " " . self::Month() . " " . self::RandomBetween(2000, 2024);
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