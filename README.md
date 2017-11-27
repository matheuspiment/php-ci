# PHP-CI

[![Build Status](https://travis-ci.org/matheuspiment/php-ci.svg?branch=master)](https://travis-ci.org/matheuspiment/php-ci)
[![Coverage Status](https://coveralls.io/repos/github/matheuspiment/php-ci/badge.svg?branch=master)](https://coveralls.io/github/matheuspiment/php-ci?branch=master)

Exemplo de aplicação com utilização de integração contínua.

* Gerenciador de dependências: [Composer](https://getcomposer.org/)
* Plataforma de CI: [Travis CI](https://travis-ci.org/)
* Testes: [PHPUnit](https://phpunit.de/)
* Relatório de Testes: [Coveralls](https://coveralls.io/)
* Deploy: [Heroku](https://heroku.com)

## Instruções

### [Composer](https://getcomposer.org/)

Composer é uma ferramenta para gerenciamento de dependências para o PHP que vem ganhando espaço e se tornando cada vez mais indispensável. Com algumas poucas linhas de configurações você define todas as bibliotecas de terceiros ou mesmo suas que deseja/precisa utilizar em seu projeto, o composer encarrega-se de baixá-las e criar um autoloader deixando-as prontas para uso.

### [Travis CI](https://travis-ci.org/)

O Travis CI é uma plataforma de integração contínua hospedada grátis para todos os projetos de código aberto hospedados no Github. Com apenas um arquivo chamado `.travis.yml` contendo algumas informações sobre nosso projeto, podemos desencadear compilações automatizadas com todas as mudanças em nossa base de código no ramo mestre, outros ramos ou mesmo uma solicitação de puxar.

### [Coveralls](https://coveralls.io/)

Ajuda você a entregar o código com confiança, mostrando quais partes do seu código não são cobertas pelo seu conjunto de testes. Gratuito para reposições de código aberto. Pro contas de reposes privados.

Características:

* Estatísticas de cobertura do repositório
* Relatório de cobertura de arquivos individais
* Cobertura linha por linha
* Atualização da cobertura
* Integração com GitHub e CI

### [Heroku](https://heroku.com)

O Heroku se enquadra na categoria de serviços da computação em nuvem conhecida como Plataforma como Serviço (Platform as a Service, ou PaaS), no qual o fornecedor entrega para o cliente um ambiente pronto para receber a aplicação. Diferente do IaaS (Infraestrutura como Serviço), no qual cliente contrata máquinas (reais ou virtuais) e é responsável pela instalação de bibliotecas, montagem das estruturas do sistema de arquivos, entre outros recursos, o PaaS é uma solução de alto nível que abstrai este tipo de preocupação.  

Como o ambiente é entregue pelo fornecedor, ao cliente basta se concentrar em desenvolver e instalar a aplicação. Normalmente nos serviços PaaS a instalação ou atualização é feita através de commits em repositórios remotos vinculados à aplicação.
