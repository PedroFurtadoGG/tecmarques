## IMÓVEIS EXPRESS - INSTITUCIONAL

Esse plugin cria um tipo de post chamado institucional para gestão das páginas institucionais da empresa.
Ele também cria um menu de opções para que seja feito o cadastro de dados da empresa que será utilizada no site. Como, contatos, localização, logo e etc..

-----

### Requerimento:

* Wordpress 3.5+
* Advanced custom field 5

-----

### Funções para o thema

Com o plugin habilitado você tem as seguintes funções para chamar os dados cadastrados:

#### iex_logo();

Insere no thema a logo da empresa cadastrada. Passando um parâmetro na função você define qual a altura da logo, definindo assim sua largura proporcional. Exemplo:

iex_logo(80);

-

#### iex_name();

Insere no thema o nome da empresa cadastrado. Como parâmetro você pode definir qual será a tag que envolverá o texto. Exemplo:

iex_name(h1);

-

#### iex_slogan();

Insere no thema o slogan da empresa cadastrado. Como parâmetro você pode definir qual será a tag que envolverá o texto. Exemplo:

iex_slogan(h4);

-

#### iex_copyright();

Insere no thema o copyright cadastrado.

-

#### iex_endereco();

Insere no thema o endereço completo cadastrado. O endereço vem envolvido pela tag address.

-

#### iex_email();

Insere no thema o e-mail da empresa cadastrado. O e-mail já vem envolvido pela tag de link.

-

#### iex_tels();

Insere no thema uma lista com todos os telefones cadastrados.

-

#### iex_mapa();

Insere no thema o mapa de localização da empresa. Como parâmetro você pode passar qual a altura e qual o id do mapa. Exemplo:

iex_mapa(500,'mapa-localizacao');
