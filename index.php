<?php
require_once "controllers/AccueilController.php";
require_once "controllers/FilmController.php";
require_once "controllers/ActeurController.php";
require_once "controllers/RealisateurController.php";
require_once "controllers/GenreController.php";
require_once "controllers/LogController.php";

$ctrlFilm = new FilmController;
$ctrlActeur = new ActeurController;
$ctrlAccueil = new AccueilController;
$ctrlRealisateur = new RealisateurController;
$ctrlGenre = new GenreController;
$ctrlLog = new LogController;

if (isset($_GET['action'])) {

  switch ($_GET['action']) {

    case "listFilms":
      $ctrlFilm->listFilms();
      break;
    case "listPics":
      $ctrlFilm->listPics();
      break;
    case "listGenres":
      $ctrlGenre->listGenres();
      break;
    case "listActeurs":
      $ctrlActeur->listActeurs();
      break;
    case "listRealisateurs":
      $ctrlRealisateur->listRealisateurs();
      break;
    case "detailRealisateur":
      $id = ($_GET["id"]);
      $ctrlRealisateur->findOneById($id);
      break;
    case "detailFilm":
      $id = ($_GET["id"]);
      $ctrlFilm->findOneById($id);
      break;
    case "detailActeur":
      $id = ($_GET["id"]);
      $ctrlActeur->findOneById($id);
      break;
    case "listfilmsGenres":
      $id = ($_GET["id"]);
      $ctrlGenre->findAllById($id);
      break;
    case "listActeurfilms":
      $id = ($_GET["id"]);
      $ctrlActeur->findAllbyId($id);
      break;
    case "listRealisateurfilms":
      $id = ($_GET["id"]);
      $ctrlRealisateur->findAllbyId($id);
      break;
    case "login":
      $ctrlLog->login();
      break;
    case "signup":
      $ctrlLog->signup();
      break;
    case "add-user":
      $ctrlLog->checkSignup($_POST);
      break;
    case "log":
      $ctrlLog->checkLogin($_POST);
      break;
    case "checkout":
      $ctrlLog->checkout();
      break;
    case "ajoutReal":
      $ctrlRealisateur->ajoutReal();
      break;
    case "checkAjoutReal":
      $ctrlRealisateur->checkAjoutReal($_POST);
      break;
    case "ajoutGenre":
      $ctrlGenre->ajoutGenre();
      break;
    case "checkAjoutGenre":
      $ctrlGenre->checkAjoutGenre($_POST);
      break;
    case "ajoutActeur":
      $ctrlActeur->ajoutActeur();
      break;
    case "checkAjoutActeur":
      $ctrlActeur->checkAjoutActeur($_POST);
      break;
    case "deleteGenre":
      $id = ($_GET["id"]);
      $ctrlGenre->deleteGenreById($id);
      break;
    case "deleteReal":
      $id = ($_GET["id"]);
      $ctrlRealisateur->deleteRealById($id);
      break;
    case "editReal":
      $id = ($_GET["id"]);
      $ctrlRealisateur->editRealById($id);
      break;
    case "checkEditReal":
      $ctrlRealisateur->checkEditReal($_POST);
      break;
    case "deleteActeur":
      $id = ($_GET["id"]);
      $ctrlActeur->deleteActeurById($id);
      break;
    case "editActeur":
      $id = ($_GET["id"]);
      $ctrlActeur->editActeurById($id);
      break;
    case "checkEditActeur":
      $ctrlActeur->checkEditActeur($_POST);
      break;
    case "editGenre":
      $id = ($_GET["id"]);
      $ctrlGenre->editGenreById($id);
      break;
    case "checkEditGenre":
      $ctrlGenre->checkEditGenre($_POST);
      break;
    case "castingActeur":
      $id = ($_GET["id"]);
      $ctrlActeur->ajoutCasting($id);
      break;
    case "checkCastingActeur":
      $ctrlActeur->checkCasting($_POST);
    case "ajoutFilm":
      $ctrlFilm->ajouterFilm();
      break;
  }
} else {
  $ctrlAccueil->pageAccueil();
}
