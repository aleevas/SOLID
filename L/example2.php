<?php

interface LessonRepositoryInterface {

    public function getAll();
    
}

class FileLessonRepository implements LessonRepositoryInterface {
    public function getAll(){
        // return through filesystem
        return []; 
    }
}

class DBLessonReposotory implements LessonRepositoryInterface {

    public function getAll(){
        return Lesson::all()->toArray();// fix violate of LSP
    }
}
