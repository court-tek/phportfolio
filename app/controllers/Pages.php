<?php
    class Pages extends Controller 
    {
        public function __construct()
        {
        }

        public function index()
        {
            $data =[
                // To add emojies control + cmd + space
                'title' => 'PHP 🐘 mvc',
            ];

            $this->view('pages/index', $data);
        }

        public function about()
        {
           $data = [
               'title' => 'About us',
               'description' => 'App to share posts',
               'author' => 'John Girley',
           ];

           $this->view('pages/about', $data);
        }

        public function show()
        {
            echo 'This is the show page';
        }

        public function edit()
        {
            echo 'This is the edit page';
        }
    }