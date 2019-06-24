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
        return Lesson::all();// violates LSP, cuz retunts object, but array expected
    }
}
