<?php 
class Booking {
    public $id;
    public $Title;
    public $FName;
    public $LName;
    public $Email;
    public $National;
    public $Country;
    public $Phone;
    public $TRoom;
    public $Bed;
    public $NRoom;
    public $Meal;
    public $cin;
    public $cout;
    public $stat;
    public $nodays;

    public function __construct($id) {
        if($id){
            $this->id = $id;
            $data = $this->getData();
            return $data;
        }
    }

    public function getData(){
        $data = DB::getData("Select * from roombook where id = '$this->id' LIMIT 1");
        foreach ($data[0] as $key => $value) {
            $this->{$key} = $value;
        }
        return $data;
    }
}