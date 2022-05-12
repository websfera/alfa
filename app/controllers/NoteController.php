<?php 

namespace App\Controllers;

use \App\Models\Note;
use \App\Models\Repository\NoteRepository;


class NoteController extends \App\Controller {

  public function createAction() {
    $newNote = $this->container->createNote();
    $newNote->setTitle("Martinova poznamka 1");
    $newNote->setText("Lorem ipsum....");
    $newNote->setAuthor("Martin");
    //$newNote->save();

    dd($newNote);
    
    $this->template->render();
  }

  public function readAction() {
    $id = $_GET['id'];
    
    $newNote = $this->container->createNote();
    $newNote->findById($id);

    $this->template->note = $newNote;   
    $this->template->render();
  }

  public function listAction() {
    $noteRepo = new $this->container->createNoteRepository();
    $notes = $noteRepo->findAll();

    $this->template->notes = $notes;
    
    $this->template->render();
  }

}