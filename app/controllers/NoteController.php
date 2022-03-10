<?php 

namespace App\Controllers;

use \App\Models\Note;

class NoteController extends \App\Controller {

  public function createAction() {
    
    $this->template->render();
  }

  public function readAction() {
    $newNote = new Note("Martin");
    $newNote->setTitle("Moje první poznámka");
    $newNote->setText("Lorem ipsum amet dollor.");

    $this->template->note = $newNote;   
    $this->template->render();
  }

}