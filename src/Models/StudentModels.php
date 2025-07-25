<?php

namespace Deleon\Gs\Models;

use Deleon\Gs\Core\Crud;
use Deleon\Gs\Core\Database;

class StudentModels extends Database Implements Crud{
    public int $id;
    public string $name;
    public string $course;
    public int $year_level;
    public string $section;

    public function __construct()
    {
        parent::__construct();
        $this->id=0;
        $this->name="";
        $this->course="";
        $this->year_level=0;
        $this->section="";

    }

    public function create(){
        //create data
        $query = $this->conn->prepare("INSERT INTO `student`(`id`, `name`, `course`, `year_level`, `section`)
         VALUES ('$this->id','$this->name','$this->course','$this->year_level','$this->section')");

        if($query->execute()){
            echo "Student inserted";
        }

    }

    public function read(){
        try {
            $sql = "SELECT * FROM student";
            $result = $this->conn->query($sql);
            return $result->fetch_all(MYSQLI_ASSOC);
        }catch (\Throwable $th) {
            //throw $th;
         echo $th->getMessage();
        }
    }

    public function update($id){
        $this->id=$id;
        $sql = "UPDATE 'student' SET Name = '$this->name', course = '$this->course',
        year_level = $this->year_level, section = '$this->section' WHERE ID = $this->id";

    if ($this->conn->query($sql)) {
        echo "Student update!";
    }else {
        echo "Update failed: ". $this->conn->error;

    }    

    }

    public function delete($id) {
        $this->id=$id;
        $sql = "DELETE FROM ' student' WHERE ID = $this->id";
        if ($this->conn->query($sql)) {
            echo "Student Delete successfully!";
        }else {
            echo "Delete Student failed!". $this->conn->error;

        }

    }

}




