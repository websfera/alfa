<?php 

namespace App\Controllers;

use \App\Models\Note;

class NoteController extends \App\Controller {

  public function createAction() {
    $newNote = new Note("Martin");
    $newNote->setTitle("Moje první poznámka");

    dd($newNote->getTitle());

    $this->template->render();
  }

  public function readAction() {
      $this->template->render();
  }

}