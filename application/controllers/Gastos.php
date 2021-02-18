<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gastos extends CI_Controller {

	public function index()
	{
		$this->load->view('listar_gastos');
	}

	public function novo()
	{
		$this->load->view('novo_gasto');
	}

	public function salvar()
	{
		$data = $this->input->post('data');
		$descricao = $this->input->post('descricao');
		$valor = $this->input->post('valor');
		echo "Os dados recebidos foram: $data, $descricao, $valor";
	}

}

