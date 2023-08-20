<?php
interface repositorioDoador {
	public function cadastrarEndereco($endereco);
	public function cadastrarResidencia($residencia);
	public function cadastrarResidenciaCasa($residenciacasa);
	public function cadastrarDoador($doador);
	}
?>