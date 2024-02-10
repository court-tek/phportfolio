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

        public function services()
        {
            $data = [
                'title' => 'Services page',
                'description' => 'App to share posts',
                'author' => 'John Girley',
            ];
 
            $this->view('pages/services', $data);
        }

        public function portfolio()
        {
            $data = [
                'title' => 'Portfolio page',
                'description' => 'App to share posts',
                'author' => 'John Girley',
            ];

            $this->view('pages/portfolio', $data);
        }
    }