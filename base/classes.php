<?php
class Publication{
    public $id;
    public $title;
    public $date;
    public $short_content;
    public  $content;
    public $preview;
    public $author_name;
    public $type;
    
    function __construct($row) {
        $this->id = $row['id'];
        $this->title = $row['title'];
        $this->date = $row['date'];
        $this->short_content = $row['short_content'];
        $this->content = $row['content'];
        $this->preview = $row['preview'];
        $this->author_name = $row['author_name'];
        $this->type = $row['type'];
        
    }
}

class NewsPublication extends Publication{
    public function printItem() {        
        echo '<br> Это новость';
        echo 'Новость '.$this->title;
        echo 'Дата'.$this->date;
    }
}   

class ArticlPublication extends Publication{
    public function printItem() {
         echo '<br> Это статья';
        echo 'Статья '.$this->title;
        echo 'Автор'.$this->author_name;
       
    }
}

class PhotoReportPublication extends Publication{
    public function printItem() {
     
        echo '<br> Это фотоотчет '.$this->title;
        echo '<br><img src = "http://localhost/base/'.$this->preview.'">';
    }
}
