<?php 

    class Template {
        //Path
        protected $template;
        //Variable passed in
        protected $vars = [];

        public function __construct($template) {
            $this->template = $template;
        }

        public function __get($key) {
            return $this->vars[$key];
        }

        public function __set($key, $value) {
           $this->vars[$key] = $value; 
        }

        public function __toString() {
            extract($this->vars);   // Extract the object from $template->name to $name;
            chdir(dirname($this->template));
            ob_start();

            include basename($this->template);
            return ob_get_clean();        
        }
    }
?>