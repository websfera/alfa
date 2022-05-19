<?php 

namespace App\Controllers;

use \App\Models\Note;
use \App\Models\Repository\NoteRepository;


class NoteController extends \App\Controller {

  public function createAction() {
    if ($_SESSION['isLogged'] !== true) {
      $this->redirect("sign/in");
      exit();
    }
    
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
    $noteRepo = $this->container->createNoteRepository();
    $notes = $noteRepo->findAll();

    $this->template->notes = $notes;
    
    $this->template->render();
  }

  public function save() {
    $data = $_POST;

    dd($data);
  }

}