<?php
/*
Match Controller

Created February 2014
*/


namespace Controller {

require_once(dirname(__FILE__) . '/Controller.php');


	class Match extends Controller {

		public $page = 'match';
		public $match;
		public $title;


		public function __construct() {
			$this->theme = 'match.php';
			$this->title = 'Match - ' . Controller::siteName;
		}


		/**
		Call GET methode with parameters

		@param params
		*/
		public function GET($args) {
			if(!isset($args[1])) {
				throw new \exception('No match id given');
				return;
			}

			global $database;
			$this->match = $database->getMatchById($args[1]);

			$this->title = 'Match - ' . $this->match->getTeamA() . ' vs ' . $this->match->getTeamB() . ' - ' . Controller::siteName;
		}


	}

}

?>
