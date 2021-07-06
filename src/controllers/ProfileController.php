<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\UserHandler;

class ProfileController extends Controller {

    private $loggedUser;

    public function __construct() {

      $this->loggedUser = UserHandler::checkLogin();
      
      if(UserHandler::checkLogin() === false ){
        $this->redirect('/login');
      }
    }

    public function index($atts = []) {

      $id = $this->loggedUser->id;

      if(!empty($atts['id'])) {
        $id = $atts['id'];
      }

      $user = UserHandler::getUser($id);
      if(!$user) {
        $this->redirect('/');
      }

      $this->render('profile', [
        'user' => $user,
        'loggedUser' => $this->loggedUser
      ]);
    }

}