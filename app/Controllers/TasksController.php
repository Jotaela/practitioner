<?php
class TasksController {
    // GESTIONARA TOTES LES URL QUE comencen per /tasks

    //CRUD -> CREATE RETRIVE/LLISTAR UPDATE DELETE

    // /tasks -> mostrarà la llista comleta de tasques

    // /task/{id}

    // /task/create TEMPORAL HTTP

    // /task/delete/{id}

    // /task/update/{id}

    public function list(){
        //TODO LIST TASK
        // tots els temes comuns
        $tasks = Task::all();
        return view('tasks', $tasks);
    }

    public function show($id){
        //TODO LIST ONE TASK
        $task = Task::find($id);
        return view('tasks', $task);
    }

    public function update(){


    }

    public function delete(){

    }
}