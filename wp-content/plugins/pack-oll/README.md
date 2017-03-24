## IMÓVEIS EXPRESS - BASE

Esse é o plugin base para todos os projetos imóveis express. Ele é responsável de carregar as principais funções e scripts para funcionamento dos plugins.

---

### Requerimento:

* Wordpress 3.5+

---

## Conteúdo:

##### Plugins Jquery:

* Owl Carousel: http://owlgraphic.com/owlcarousel/
* Swipebox:  http://brutaldesign.github.io/swipebox/
* Isotope: http://isotope.metafizzy.co/

##### Framework html:

* Bootstrap: http://getbootstrap.com/

##### Ícones:

* Fontawesome: http://fortawesome.github.io/Font-Awesome/

##### Tratamento de Imagens:

* Timthumb: http://www.binarymoon.co.uk/projects/timthumb/

##### Animações:

* Animate CSS: http://daneden.github.io/animate.css/

##### Plugins Wordpress:

* Advanced Custom Field Pro: http://www.advancedcustomfields.com
* Gravity Forms: http://www.gravityforms.com/

---

## FUNÇÕES WORDPRES

Funções utilizadas no thema base e nos plugins:

---

### iex_paginacao();

Para paginações de página de posts.

---

### iex_crop();

Essa função utiliza o timthumb para crop das imagens.

Utilização:

iex_crop($url, $width, $height, $zoom, $align="c", $filter="0");

___

### iex_resumo();

Essa função faz um resumo do content do post. 

Utilização

iex_resumo(50);

Observe que o parâmetro definido é a quantidade de palavras a ser exibida.


___

### iex_page();

Essa função faz chama o conteúdo da página flexivel

___

### iex_page_menu();

Essa função cria um menu com as sessões criadas na página

___

### iex_nospace();

Essa utilizada para criar ids de divs. Ela remove acentos, coloca em lowercase e transforma espaços em "-".

