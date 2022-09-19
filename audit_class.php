<?php

class audit {
    
    private $domain;
    private $titles = array();
    private $descriptions = array();
    private $h1s = array();
    private $imgs = array();
    private $robots;
    private $sitemap;
    private $error = array();
    
    public function __construct($domain) {
        if (substr($domain, 0, 7) != 'http://') {
            $domain = 'http://' . $domain;
        }
        
        $dom = new DOMDocument;
        @$dom->loadHTMLFile($_GET['domain']);
        $this->domain = $domain;
        $this->titles = $dom->getElementsByTagName('title');
        $this->descriptions = $dom->getElementsByTagName('meta');
        $this->h1s = $dom->getElementsByTagName('h1');
        $this->imgs = $dom->getElementsByTagName('img');
        if ( count( explode('/', $domain) ) == 3 ) {
            $this->robots = @file_get_contents($domain . '/robots.txt');
            $this->sitemap = @file_get_contents($domain . '/sitemap.xml');
        } else {
            $this->robots = false;
            $this->sitemap = false;
        }
    }
    
    public function print_titles() {
        if ( count($this->titles) > 0 ) {
            echo '<h2>Title Tag(s):</h2>';
            foreach($this->titles as $title) {
                if ($title->nodeValue != '') {
                    echo $title->nodeValue, PHP_EOL;
                } else {
                    $this->error['titles'] = '<p>There was no page title.</p>';
                }
            }
        }
    }
    
    public function print_descriptions() {
        if ( count($this->descriptions) > 0 ) {
            echo '<h2>Meta Description(s):</h2>';
            foreach($this->descriptions as $description) {
                if ($description->getAttribute('name') == 'description') {
                    if ($description->getAttribute('content') != '') {
                        echo $description->getAttribute('content'), PHP_EOL;
                    } else {
                        $this->error['descriptions'] = '<p>There was no meta description.</p>';
                    }
                }
            }
        }
    }
    
    public function print_h1s() {
        if ( count($this->h1s) > 0 ) {
            echo '<h2>H1 Tag(s):</h2>';
            foreach($this->h1s as $h1) {
                if ($h1->nodeValue != '') {
                    echo $h1->nodeValue, PHP_EOL;
                } else {
                    $this->error['h1s'] = '<p>There were no h1 tags.</p>';
                }
            }
        }
    }
    
    public function print_alts() {
        if ( count($this->imgs) > 0 ) {
            echo '<h2>Image Alt(s):</h2>';
            foreach($this->imgs as $img) {
                if ($img->getAttribute('alt') != '') {
                    echo '<p>' . $img->getAttribute('src') . ': <strong>' . $img->getAttribute('alt') . "</strong></p>";
                } else {
                    echo '<p>' . $img->getAttribute('src') . " didn't have alt text.</p>";
                }
            }
        } else {
            echo '<p>There were no images</p>';
        }
    }
    
    public function print_robots() {
        if ($this->robots) {
            echo '<h2>Robots:</h2>';
            echo '<p>robots.txt was found.</p>';
            $robots_lines = explode(PHP_EOL, $this->robots);
            echo '<h3>Robots File:</h3>';
            foreach($robots_lines as $line) {
                echo '<p>' . $line . '</p>';
            }
        } else {
            $this->error['robots'] = '<p>There was no robots.txt file found for this website.';
        }
    }
    
    public function print_sitemap() {
        if ($this->sitemap) {
            echo '<h2>Sitemap:</h2>';
            $p = xml_parser_create();
            xml_parse_into_struct($p, $this->sitemap, $urls, $index);
            foreach ($urls as $key => $val) {
                echo '<ul>';
                if ($val['tag'] == 'LOC') {
                    echo '<li><a href="audit_tool.php?domain=' . $val['value'] . '">' . $val['value'] . '</a></li>';
                }
                echo '</ul>';
            }
        } else {
            $this->error['sitemap'] = '<p>There was no sitemap.xml file found for this website.';
        }
    }
    
    public function printAll() {
        $audit_methods = get_class_methods('audit');
        foreach($audit_methods as $method) {
            if ($method != '__construct' && $method != 'printAll') {
                $this->$method();
            }
        }
        foreach($this->error as $type => $error) {
            echo $error;
        }
    }
}

?>