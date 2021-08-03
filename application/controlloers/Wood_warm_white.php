<?  if ( ! defined('BASEPATH') ) exit('No direct script access allowed');
 
	class Wood_warm_white extends CI_controller { 
	
		public function main(){
			$this->load->view("main");
		}
		
		public function login(){
			$this->load->view("login");
		}
		
		public function bedroom(){
			$this->load->view("bedroom");
		}

		public function diningroom(){
			$this->load->view("diningroom");
		}

		public function interior(){
			$this->load->view("interior");
		}
		
		public function qna(){
			$this->load->view("qna");
		}

		public function join(){
			$this->load->view("join");
		}

		public function welcome(){
			$this->load->view("welcome");
		}

		public function insert_member(){
			$this->load->model( "woodwarmwhite/model_tools" );
			$data = array(
				"id" => $_POST["id"],
				"name" => $_POST["name"],
				"pw" => $_POST["pw"],
			);
			if ( $this->model_tools->insert( "woodwarmwhite" , $data ) )
			
			echo "<script>location.href='".base_url( "wood_warm_white/welcome" )."';</script>";
		}
	}
?>