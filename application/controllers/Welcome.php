<?php
defined('BASEPATH') or exit('No direct script access allowed');	//protection fichier
require_once(APPPATH . 'controllers/Mysession.php');
class Welcome extends Mysession
{	///Code Initeur ///class tjr MAJ

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	// localhost/index.php/welcome/index
	//raha tsy mitemy localhost/index.php/welcome dia index no tadiaviny sinon manao erreur

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('acceuil/acceuil');
		$this->load->view('templates/footer');
	}

	//se connecter 
	public function seconnecter()
	{
		$this->load->view('login/connexion');
	}
	//inscription
	public function inscription()
	{
		$this->load->view('login/inscription');
	}

	//Contact 
	public function aboutus()
	{
		$this->load->view('templates/header');
		$this->load->view('contact/aboutus');
		$this->load->view('templates/footer');
	}
	public function nouscontacter()
	{
		$this->load->view('templates/header');
		$this->load->view('contact/nouscontacter');
		$this->load->view('templates/footer');
	}
	public function servicesclient()
	{
		$this->load->view('templates/header');
		$this->load->view('contact/servicesclient');
		$this->load->view('templates/footer');
	}

	//parametre
	public function vosappareils()
	{
		$this->load->view('templates/header');
		$this->load->view('parametre/vosappareils');
		$this->load->view('templates/footer');
	}
	public function moncompte()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/footer');
	}
	//produits
	public function produits()
	{
		$this->load->view('templates/header');
		$this->load->view('produits/produits');
		$this->load->view('templates/footer');
	}
	public function voirproduit($idproduit = '')
	{
		//tokony mameno $data ny mombamomban ny produit (select * from produit where idproduit= )
		$this->load->view('templates/header');
		$this->load->view('produits/voirproduit');
		$this->load->view('templates/footer');
	}
	//ma maison
	public function mamaison()
	{
		$this->load->view('templates/header');
		$this->load->view('mamaison/mamaison');
		$this->load->view('templates/footer');
	}
	public function ajouterpiece($idpiece = '')
	{
		$this->load->view('templates/header');
		$this->load->view('templates/footer');
	}
}
