<?php
class user{
    public $name;
    protected $id;
    private $securityId;

    public function __construct($persons_name){
        $this->name = $persons_name;
    }

    function setInfo($new_name, $newId, $newSecurityId){
        $this->name = $new_name;
        $this->id = $newId;
        $this->securityId = $newSecurityId;
    }

    private function getId() {
        return $this->id;
    }

    public function getInfo()
    {
        return $this->name . $this->getId();
    }

}

class elevated_user extends user{
    protected $permissions;
    public function __construct($persons_name)
    {
        parent::__construct($persons_name);
        $this->permissions = 'Elevated';
    }

    public function showPermissions(){
        return $this->permissions;
    }
}

abstract class userDescription{
    public $name;
    public $descriptor;

    public function describe(){
        return $this->name . ' is ' . $this->descriptor;
    }

    abstract public function elevationLevel();

}

class adminDescription extends userDescription{
    public function describe(){
        return parent::describe();
    }

    public function elevationLevel(){
        return 'Admin';
    }
}

class moderatorDescription extends userDescription{
    public function describe(){
        return parent::describe();
    }

    public function elevationLevel(){
        return 'Moderator';
    }
}

class elevated_userDescription extends userDescription{
    public function describe(){
        return parent::describe();
    }

    public function elevationLevel(){
        return 'Elevated User';
    }
}

?>