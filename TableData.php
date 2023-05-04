<?php

class TableData
{
    private $conn;
    private $table_name = 'homepage';

    public function __construct($host, $username, $password, $dbname)
    {
        $this->conn = new mysqli($host, $username, $password, $dbname);
    }

    public function getData($column_name)
    {
        $query = "SELECT * FROM " . $this->table_name;
        $result = $this->conn->query($query);
        $row = $result->fetch_assoc();

        return $row[$column_name];
    }

    public function updateData($title, $titleDescription, $newsDescription1, $newsDescription2, $newsDescription3, $aboutUsDescription, $heritageSite1, $heritageSite2, $heritageSite3, $heritageSiteDesc1, $heritageSiteDesc2, $heritageSiteDesc3, $position1, $position2, $position3, $positionDesc1, $positionDesc2, $positionDesc3)
    {
        $query = "UPDATE " . $this->table_name . " SET 
                    title = '" . $title . "', 
                    titleDescription = '" . $titleDescription . "', 
                    newsDescription1 = '" . $newsDescription1 . "', 
                    newsDescription2 = '" . $newsDescription2 . "', 
                    newsDescription3 = '" . $newsDescription3 . "', 
                    aboutUsDescription = '" . $aboutUsDescription . "', 
                    heritageSite1 = '" . $heritageSite1 . "', 
                    heritageSite2 = '" . $heritageSite2 . "', 
                    heritageSite3 = '" . $heritageSite3 . "', 
                    heritageSiteDesc1 = '" . $heritageSiteDesc1 . "', 
                    heritageSiteDesc2 = '" . $heritageSiteDesc2 . "', 
                    heritageSiteDesc3 = '" . $heritageSiteDesc3 . "', 
                    position1 = '" . $position1 . "', 
                    position2 = '" . $position2 . "', 
                    position3 = '" . $position3 . "', 
                    positionDesc1 = '" . $positionDesc1 . "', 
                    positionDesc2 = '" . $positionDesc2 . "', 
                    positionDesc3 = '" . $positionDesc3 . "' 
                WHERE id =0";

        return $this->conn->query($query);
    }
}

?>