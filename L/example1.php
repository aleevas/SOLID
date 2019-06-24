<?php

class VideoPlayer {
    public function play($file){
        /// play video
    }
}

class AviVideoPlayer extends VideoPlayer {
    
    public function play($file){
        if (pathinfo($file, PATHINFO_EXTENSION) != 'avi') {
            throw new Exception(); // violets the LSP.
        }    
    }
}
