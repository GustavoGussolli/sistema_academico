<?php

require_once(__DIR__ . "/../service/PerfilService.php");

    class perfilController{

        private PerfilService $perfilService;

        public function __construct(){
            $this->perfilService = new PerfilService();
        }
        
        public function atualizar(array $foto){
            $erros = $this->perfilService->validar($foto);
            return $erros;
        }
    }