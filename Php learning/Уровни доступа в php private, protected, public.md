
| public        | доступен везде                                       |
| ------------- | ---------------------------------------------------- |
| **private**   | **доступен только в объявленном классе**             |
| **protected** | **доступен в объявленном классе и дочерних классах** |
```php
class Plant  
{  
    public $title;//-уровень доступа между классами   
	private $color;  
    protected $season;  
  
    public function __construct($title, $color, $season)  
    {  
        $this->title = $title;  
        $this->color = $color;  
        $this->season = $season;  
    }  
}  
  
class Rosa extends Plant  
{  
    public function anotherSeason()  
    {  
        $this->season = 'winter'  
    }  
}  
  
$rosa = new Rosa('Rosa', 'Red', 'Sprint');  
echo $rosa->color; // ERROR
echo $rosa->title;
```