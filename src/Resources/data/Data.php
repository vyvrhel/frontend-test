<?php

class Data {

    private $data = array(

        'title' => 'Nadpis lorem',

        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi auctor nulla malesuada, posuere nulla vitae, feugiat felis. Nullam dui tortor, imperdiet eu mattis at, convallis id arcu. In aliquam leo bibendum orci laoreet feugiat at nec nunc. Praesent aliquam sodales lobortis. Sed tempor erat vel metus consectetur, at sagittis mauris lacinia. Quisque quis magna vel nulla venenatis consectetur quis sed tortor. Vestibulum sit amet ornare justo. Nam accumsan felis ac dolor fermentum consectetur. Sed accumsan ligula id purus placerat egestas. Duis efficitur rhoncus placerat. Donec nec aliquam risus, nec fringilla urna. Vivamus in luctus metus.',

        'categories' => array(
            array(
                'name' => 'Kategorie 1',
                'url' => 'category/nazev-kategorie-2',
                'active' => false,
            ),
            array(
                'name' => 'Kategorie 2',
                'url' => 'category/nazev-kategorie-2',
                'active' => true,
            ),
        ),

        'products' => array(
            array(
                'name' => 'Název produktu lorem ipsum dolor sit amet consectetur',
                'url' => 'product/nazev-produktu-lorem-ipsum',
                'description' => 'Popis produktu lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi auctor nulla malesuada, posuere nulla vitae, feugiat felis. Morbi auctor nulla malesuada, posuere nulla vitae, feugiat felis.',
                'price' => '5 640 Kč',
                'image' => 'images/examples/products/product-v.jpg',
            ),
            array(
                'name' => 'Název produktu lorem ipsum',
                'url' => 'product/nazev-produktu-lorem-ipsum-2',
                'description' => 'Popis produktu lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'price' => '15 640 Kč',
                'image' => 'images/examples/products/product-h.jpg',
            ),
        ),

        'copyright' => 'Copyright © 2018 %sIT STUDIO s.r.o.%s'
    );

    public function getData() {
        return $this->data;
    }
}

?>
