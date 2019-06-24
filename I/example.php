<?php

interface ManagableInterface {
    public function beManaged();
}
interface WorkableInterface {
    public function work();
    public function sleep();       
    
}

interface SleepableInterface {
    public function sleep();       
    
}

class HumanWorker implements WorkableInterface, SleepableInterface, ManagableInterface {
    public function work(){
        return 'Human work';
    }

    public function sleep(){
        return 'Human sleep';
    }

    public function beManaged(){
        $this->work();
        $this->sleep(); 
    }
}

class AndroidWorker implements WorkableInterface, ManagableInterface {
    public function work(){
        return 'Android work';

    }

    public function beManaged(){
        $this->work();
    }
}

class Capitan {
    public function manage(ManagableInterface $worker){
        $worker->beManaged();
    }
}
