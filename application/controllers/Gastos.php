<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gastos extends CI_Controller {

	public function index()
	{
		$this->load->view('template/cabecalho');
		$this->load->view('listar_gastos');
		$this->load->view('template/rodape');
	}

	public function novo()
	{
		$this->load->view('template/cabecalho');
		$this->load->view('novo_gasto');
		$this->load->view('template/rodape');
	}

	public function salvar()
	{
		$data = $this->input->post('data');
		$descricao = $this->input->post('descricao');
		$valor = $this->input->post('valor');

		$dados['titulo'] = "Confirmação de recebimento";
		$dados['mensagem'] = "Os dados foram recebidos com sucesso!";
		
		$this->load->view('template/cabecalho');
		$this->load->view("confirmacao", $dados);
		$this->load->view('template/rodape');
	}

}

