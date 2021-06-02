# Cesar-php
 criptografia na cifra de César apenas com pequenas funções.

## Como utilizar
 Aqui veremos como utilizar essas funções(Com exemplos em código).

 ***OBS: para que todos os exemplos abaixo funcionem é necessário baixar o código e adicionar o código ao seu projeto***

 ```
 <?php
 
 // Isso é um exemplo de como deve ser usado

 require_once 'Cesar-php/src/index.php';

 # Função 1
 echo cesar_ascii('a', 3); 
 // o 3 pode ser qualquer número positivo
 // o 'a' pode ser qualquer string

 # Função 2

 echo cesar('a', 3); 
 // o 3 pode ser qualquer número positivo
 // o 'a' pode ser qualquer string
 ```

### Como decodificar o texto?
 Aqui você vai ver como decodificar o texto

 ```
 <?php
 
 // Isso é um exemplo de como deve ser usado

 require_once 'Cesar-php/src/index.php';

 # Função 1
 echo cesar_ascii('a', -3); 
 // o -3 pode ser qualquer número negativo

 # Função 2

 echo cesar('a', -3); 
 // o -3 pode ser qualquer número negativo
 ```

 Como você pode ver é muito simples! Para decodificar um valor basta que sua chave seja negativa.

 ### Como Baixar?
 Para baixar esta aplicação [Clique Aqui]() ***Não está funcionando***. Após você efetuar o download adicione a pasta ``Cesar-php`` na pasta principal do seu projeto. Depois disso entre no arquivo onde deseja usar essas funções e adicione as funções aos seu projeto assim: 
 ```
 <?php 
 
 require_once 'Cesar-php/src/index.php';
 ```

 Pronto! Já pode utlizar todas as funções disponíveis.

 