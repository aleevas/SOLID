<?php

interface WorkInterface {
    public function work();
    public function sleep();       
    
}

class HumanWorker implements WorkInterface {
    public function work(){
        return 'Human work';
    }

    public function sleep(){
        return 'Human sleep';
    }
}

class AndroidWorker implements WorkInterface {
    public function work(){
        return 'Android work';

    }

    public function sleep(){
        return null; // violents the ISP
    }
}

class Capitan {
    public function manage(WorkInterface $worker){
        $worker->work();
        $worker->sleep();
    }
}