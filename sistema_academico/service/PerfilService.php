<?php 

    class PerfilService{

        public function validar(array $foto){

            $erros = array();

            if($foto['size'] <= 0)
                array_push($erros, "Selecione uma imagem para a foto de perfil!");
            
            return $erros;
        }

    }