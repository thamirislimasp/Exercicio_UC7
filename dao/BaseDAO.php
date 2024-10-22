<?php
/*
Implemente o contrato que deverá ser usado de base em todas as classes DAO.php 
*/
    interface BaseDAO {
        public function getById($id);
        public function getAll();
        public function create($disciplina);
        public function update($disciplina);
        public function delete($id);
    }

?>
