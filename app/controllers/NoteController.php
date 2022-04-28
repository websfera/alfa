<?php 

namespace App\Controllers;

use \App\Models\Note;

class NoteController extends \App\Controller {

  public function createAction() {
    $newNote = new Note($this->container);
    $newNote->setTitle("Martinova poznamka 1");
    $newNote->setText("Lorem ipsum....");
    $newNote->setAuthor("Martin");
    //$newNote->save();

    dd($newNote);
    
    $this->template->render();
  }

  public function readAction() {
    $id = $_GET['id'];
    
    $newNote = new Note($this->container);
    $newNote->findById($id);

    $this->template->note = $newNote;   
    $this->template->render();
  }

  public function listAction() {
    $this->template->render();
  }

}