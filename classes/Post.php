<?php
    class Post {
        // ATTRIBUTI/PROPRIETA'
        public $title;
        public $body;
        private $author;
        public $date;
        public $url;

        // COSTRUTTORE
        function __construct($title, $body, $author = 'Anonymous') {
            $this->title = $title;
            $this->body = $body;
            $this->author = $author;
            $this->url = "articoli/" . str_replace(" ", "-", strtolower($this->title));
            // $this->date = time();
            $this->date = date("d-m-Y H:i:s");
        }
        // METODI
        public function getAuthor() {
            return $this->author;
        }

        public function getExcerpt($charsNumber = 200) {
            return substr($this->body, 0, $charsNumber) . "...";
        }
    }

    // $body = "
    // Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elit ut aliquam purus sit amet luctus venenatis. Volutpat ac tincidunt vitae semper quis lectus nulla at volutpat. Quis varius quam quisque id diam vel. Interdum velit laoreet id donec. Sapien et ligula ullamcorper malesuada proin libero nunc consequat. Nullam vehicula ipsum a arcu cursus vitae congue mauris rhoncus. Scelerisque viverra mauris in aliquam sem fringilla ut morbi. Blandit turpis cursus in hac habitasse platea. Velit scelerisque in dictum non. Vitae sapien pellentesque habitant morbi tristique senectus. Tempor id eu nisl nunc mi ipsum faucibus vitae aliquet. Purus gravida quis blandit turpis cursus in hac habitasse. At imperdiet dui accumsan sit amet. Amet tellus cras adipiscing enim eu turpis. Adipiscing elit duis tristique sollicitudin nibh sit amet commodo nulla. Elit sed vulputate mi sit amet mauris commodo quis. Curabitur gravida arcu ac tortor.
    // Odio pellentesque diam volutpat commodo sed. In arcu cursus euismod quis viverra. Urna duis convallis convallis tellus id interdum velit laoreet id. Et egestas quis ipsum suspendisse. Felis eget velit aliquet sagittis id consectetur. Id nibh tortor id aliquet lectus proin nibh. Suspendisse ultrices gravida dictum fusce ut placerat orci nulla. Nisl purus in mollis nunc sed id semper. Elit eget gravida cum sociis natoque. Nulla facilisi etiam dignissim diam quis enim lobortis.
    // Imperdiet massa tincidunt nunc pulvinar sapien et ligula. Sollicitudin nibh sit amet commodo nulla. Sit amet massa vitae tortor condimentum lacinia. Sed viverra tellus in hac habitasse platea dictumst vestibulum. Mauris sit amet massa vitae tortor condimentum. Mollis aliquam ut porttitor leo a diam. Sed velit dignissim sodales ut eu. Parturient montes nascetur ridiculus mus mauris vitae ultricies. Vitae proin sagittis nisl rhoncus mattis rhoncus. Quam quisque id diam vel quam elementum. Viverra mauris in aliquam sem fringilla ut morbi tincidunt. Gravida dictum fusce ut placerat orci. Laoreet non curabitur gravida arcu ac. Felis bibendum ut tristique et egestas. Cursus in hac habitasse platea dictumst quisque sagittis purus sit. Rhoncus mattis rhoncus urna neque viverra justo nec ultrices. Eu turpis egestas pretium aenean pharetra. Lobortis mattis aliquam faucibus purus in massa. Vulputate eu scelerisque felis imperdiet.
    // Tempus quam pellentesque nec nam. Non pulvinar neque laoreet suspendisse. Malesuada fames ac turpis egestas integer eget aliquet nibh. Netus et malesuada fames ac. Purus faucibus ornare suspendisse sed. Consequat semper viverra nam libero justo laoreet sit amet. Blandit aliquam etiam erat velit scelerisque in dictum non. Est ante in nibh mauris cursus. Tristique et egestas quis ipsum suspendisse ultrices. Nam aliquam sem et tortor consequat id porta nibh. Nunc non blandit massa enim nec dui nunc mattis enim. Eget duis at tellus at urna condimentum mattis pellentesque id. Lacus luctus accumsan tortor posuere ac ut consequat. Viverra vitae congue eu consequat. Morbi tincidunt augue interdum velit euismod in. Diam vulputate ut pharetra sit amet aliquam id. Est pellentesque elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus. Turpis massa tincidunt dui ut ornare lectus sit amet.
    // Nulla aliquet porttitor lacus luctus accumsan tortor posuere. Faucibus pulvinar elementum integer enim neque volutpat ac tincidunt. Est ullamcorper eget nulla facilisi etiam dignissim. Gravida neque convallis a cras semper auctor neque vitae. Proin sagittis nisl rhoncus mattis rhoncus urna. Volutpat lacus laoreet non curabitur gravida arcu ac tortor. Sit amet luctus venenatis lectus magna fringilla urna porttitor. Quam quisque id diam vel quam elementum pulvinar. Feugiat nisl pretium fusce id velit. Eu scelerisque felis imperdiet proin fermentum leo. Quis auctor elit sed vulputate mi sit amet mauris commodo. Facilisis leo vel fringilla est ullamcorper eget nulla. Fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec. Fringilla ut morbi tincidunt augue. Mauris sit amet massa vitae tortor. Lectus quam id leo in vitae turpis. Quisque sagittis purus sit amet volutpat consequat mauris.
    // Tempus quam pellentesque nec nam. Nisl nisi scelerisque eu ultrices. Ac tortor vitae purus faucibus ornare suspendisse sed nisi. Commodo quis imperdiet massa tincidunt nunc. Dolor morbi non arcu risus quis varius quam quisque. Vitae nunc sed velit dignissim. Felis eget velit aliquet sagittis id consectetur purus ut. Eu consequat ac felis donec. Quis blandit turpis cursus in hac habitasse platea dictumst. Nunc sed id semper risus.
    // Aliquam purus sit amet luctus venenatis. Quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis. Suspendisse interdum consectetur libero id faucibus nisl. Elementum integer enim neque volutpat. Eget felis eget nunc lobortis mattis aliquam faucibus purus in. Nisl rhoncus mattis rhoncus urna neque viverra. Integer malesuada nunc vel risus commodo. Feugiat nibh sed pulvinar proin gravida. At urna condimentum mattis pellentesque id nibh tortor id aliquet. Ipsum dolor sit amet consectetur adipiscing elit.
    // ";
    // // test

    // $post1 = new Post("Il mio primo post", $body, "Gianluca Pesce");
    // var_dump($post1);

    // sleep(4);

    // $text = "Diam vel quam elementum pulvinar etiam non quam. Venenatis cras sed felis eget velit aliquet sagittis id. Risus in hendrerit gravida rutrum quisque non tellus. Fermentum dui faucibus in ornare quam. Faucibus scelerisque eleifend donec pretium vulputate sapien nec sagittis aliquam. Augue neque gravida in fermentum. Nullam vehicula ipsum a arcu cursus vitae congue mauris. Erat imperdiet sed euismod nisi porta lorem. Elementum facilisis leo vel fringilla est ullamcorper eget nulla. Amet dictum sit amet justo donec enim diam vulputate. Vitae proin sagittis nisl rhoncus. Sagittis nisl rhoncus mattis rhoncus urna. Leo in vitae turpis massa.";

    // $post2 = new Post("Post anonimo", $text);    
    // var_dump($post2);
