<?php
    class Workflows extends Controller{
        public function __construct(){

        }
        public function index(){
                // Load Homepage
            //Set Data
            $data = [
                'title' => 'Welcome To TraversyMVC'
            ];

            // Load homepage/index view
            $this->view('workflows/index', $data);
            }
    }