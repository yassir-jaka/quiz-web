<?php
    
        class View extends MyObject {
            protected $args;
            protected $templateNames;
        
            public function __construct($controller,$templateName) {
                
                $request = Request::getCurrentRequest();


                $this->templateNames = array();
                $this->templateNames['head'] = 'head';
                
                $this->templateNames['foot'] = 'foot';
                $this->templateNames['content'] = $templateName;
                
            }
            
            public function render() {
                $this->loadTemplate($this->templateNames['head']);
                $this->loadTemplate($this->templateNames['navBar']);
                $this->loadTemplate($this->templateNames['content']);
                $this->loadTemplate($this->templateNames['foot']);
            }

        
            public function loadTemplate($name,$args=NULL) {
                $templateFileName =__ROOT_DIR  . '/templates/'. $name . 'Template.php';
                if(is_readable($templateFileName)) {
                    if(isset($args))
                        foreach($args as $key => $value)
                    $$key = $value;
                 require_once($templateFileName);
                }
                else
                    throw new Exception('undefined template "' . $name .'"');
            }

            public function setArg($key, $val) {
                $this->args[$key] = $val;
            }

        }  
            
    ?>