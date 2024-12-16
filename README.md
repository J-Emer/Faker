# Faker
 Generates fake data for you PHP projects. 

 # Useage


 Including Fake data into your project is easy. Assume we are creating a new User and Blog Post

 ```php

use Jemer\Faker\Factory;

$user = new User(
    [
        "firstName" => Factory::Name_Man(),
        "lastName" => Factory::LastName(),
        "age" => Factory::Age_Adult(),
        "address" => Factory::Us_Address(),
        "email" => Factory::Email(),
        "password" => Factory::Password()
    ]
);


$blogPost = new BlogPost([
    "title" => Factory::Title(),
    "author" => Factory::Name_Man(),
    "published" => Factory::Date(),
    "content" => Factory::Paragraphs(8)
]);

```

Method names that are singular return a ```string```
```php
echo Factory::Name_Man();
```
Outputs: 
```
Scott
```

Method names that are plural take in as an argument the number of elements you want in the return array. Then returns an ```array``` or strings
```php
var_dump(Factory::Names_Men(7));
```
Outputs: 
```
array(7) {
  [0]=>
  string(5) "Larry"
  [1]=>
  string(5) "Kevin"
  [2]=>
  string(5) "Larry"
  [3]=>
  string(5) "Kevin"
  [4]=>
  string(6) "George"
  [5]=>
  string(6) "Joshua"
  [6]=>
  string(5) "Jerry"
}
```



```Jemer\Faker``` also has the following methods

* Blog_Category
* Blog_Categories
* Name_Man
* Names_Men
* Name_Woman
* Names_Women
* LastName
* LastNames
* StreetName
* StreetNames
* Country
* Countries
* State_FullName
* State_FullNames
* State_Abbreviated
* States_Abbreviated
* CardinalDirection
* CardinalDirections
* Email
* Emails
* CityName
* CityNames
* Us_PhoneNumber
* Us_Address
* Paragraph
* Paragraphs
* Age_Adult
* Age_Child
* Password
* Passwords
* Title -> such as a Book, Blog Post, Article ...
* Titles -> Book, Blog Post, Articles...
* Month
* Months
* Date -> in "01 January 2024" format








