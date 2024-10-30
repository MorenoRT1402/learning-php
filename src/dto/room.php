<?php

class Room {
    private $id;
    private $roomType;
    private $number;
    private $rate;
    private $discount;

    public function __construct($id, $roomType, $number, $rate, $discount) {
        $this->id = $id;
        $this->roomType = $roomType;
        $this->number = $number;
        $this->rate = $rate;
        $this->discount = $discount;
    }

    public static function construct($dbRoom) {
        $room = new self(
            $dbRoom["id"],
            $dbRoom["roomType"],
            $dbRoom["number"],
            $dbRoom["rate"],
            $dbRoom["discount"]
        );
        return $room;
    }  

    public static function fetchRoomsFromJSON() {
        include_once __DIR__ . '/../utils/json.php';
        $json_rooms = json_load_rooms();
        $rooms = [];
    
        foreach ($json_rooms as $roomData) {
            $rate = floatval(str_replace('$', '', $roomData['rate']));
    
            $rooms[] = new self(
                $roomData['id'],
                $roomData['roomType'],
                $roomData['number'],
                $rate,
                $roomData['discount']
            );
        }
    
        return $rooms;
    }    

    static function create_array($getted_rooms) {
        $rooms = [];
    
        foreach ($getted_rooms as $roomData) {
            $rooms[] = new self(
                $roomData['id'],
                $roomData['roomType'],
                $roomData['number'],
                $roomData['rate'],
                $roomData['discount']
            );
        }
    
        return $rooms;
    }

    public static function fetchRoomsFromDB() {
        include_once __DIR__ . '/../utils/mysql.php';
        return self::create_array(db_load_rooms());
    }

    public static function fetchRoomsByTypeFromDB(string $searchTerm) {
        include_once __DIR__ . '/../utils/mysql.php';
        return self::create_array(load_rooms_by_type($searchTerm));
    }

    public static function fetchRoomByIDFromDB($id){
        include_once __DIR__ . '/../utils/mysql.php';
        $getted_room = load_room($id);
        return Room::construct($getted_room);
    }

    public function get_id() { 
        return $this->id; 
    }

    public function get_roomType(){
        return $this->roomType;
    }

    public function get_number(){
        return $this->number;
    }

    public function get_rate(){
        return $this->rate;
    }

    public function get_discount(){
        return $this->discount;
    }

    public function __toString() {
        return "Room ID: {$this->id},\nRoom Type: {$this->roomType},\nNumber: {$this->number},\nRate: {$this->rate},\nDiscount: {$this->discount}%";
    }    
}
