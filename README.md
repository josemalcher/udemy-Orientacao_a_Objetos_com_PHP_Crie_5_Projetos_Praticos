
# Orientação a Objetos com PHP - Crie 5 Projetos Práticos

https://www.udemy.com/course/php-orientado-a-objetos-do-0-a-pratica/

Aprenda PHP Orientado a Objetos na prática! E ainda construa 5 projetos práticos.

## <a name="indice">Índice</a>

1. [Introdução & Ambiente](#parte1)     
2. [Configuração de Ambiente](#parte2)     
3. [Conceitos Básicos de OO](#parte3)     
4. [Métodos Mágicos](#parte4)     
5. [Autoload & Namespaces](#parte5)     
6. [Mais OO no PHP](#parte6)     
7. [Exceptions](#parte7)     
8. [Projeto 1 - Site Institucional](#parte8)     
9. [Projeto 2 - Catálogo de Produtos](#parte9)     
10. [Projeto 3 - Mini-Gerenciador de Gastos Pessoais](#parte10)     
11. [Projeto 4 - Blog](#parte11)     
12. [Break Up - Relacionamento entre Objetos](#parte12)     
13. [Projeto Final - Primeira Etapa (Admin)](#parte13)     
14. [Projeto Final - Segunda Etapa (Front Loja)](#parte14)     
15. [Etapa Final - PagSeguro Checkout Transparente](#parte15)     
---


## <a name="parte1">1 - Introdução & Ambiente</a>

Repositório do Instrutor:
- [https://github.com/CodeExpertsLearning/orientacao-a-objetos-com-php-regravacao](https://github.com/CodeExpertsLearning/orientacao-a-objetos-com-php-regravacao)

[Voltar ao Índice](#indice)

---


## <a name="parte2">2 - Configuração de Ambiente</a>

- XAMPP + Condifg PHP in PATH

[Voltar ao Índice](#indice)

---


## <a name="parte3">3 - Conceitos Básicos de OO</a>

#### 3.7. Classes & Objeto

```php
<?php


class car
{
    public $color;
    public $years;
    public $model;

    public function run()
    {
        return $this->model . " Car is Running";
    }

    public function stop()
    {
        return $this->model . " Car is Stop";
    }
}

$car = new Car();
$car->model = "Car";
$car->color = "red";
$car->years = 2000;

$car2 = new Car();
$car2->model = "Car 2";
$car2->color = "blue";
$car2->years = 2020;

print $car->run();
print "\n";
print $car->stop();

print "\n";

print $car2->run();
print "\n";
print $car2->stop();
```

#### 3.8. Construtores & Destrutores

```php
class car
{
    public $color;
    public $years;
    public $model;

    /**
     * car constructor.
     * @param $color
     * @param $years
     * @param $model
     */
    public function __construct($color, $years, $model)
    {
        $this->color = $color;
        $this->years = $years;
        $this->model = $model;
    }
    public function run()
    {
        return $this->model . " Car is Running";
    }
    public function stop()
    {
        return $this->model . " Car is Stop";
    }
    public function __destruct()
    {
        print "\n REMOVENDO Objeto" . __CLASS__ ;
    }
}
$car = new Car("Red", "2000", "HONDA");
//$car->model = "Car";
//$car->color = "red";
//$car->years = 2000;

$car2 = new Car("BLUE0", "2020", "RENAULT");
//$car2->model = "Car 2";
//$car2->color = "blue";
//$car2->years = 2020;

print $car->run();
print "\n";
print $car->stop();

print "\n";

print $car2->run();
print "\n";
print $car2->stop();
/*
HONDA Car is Running
HONDA Car is Stop
RENAULT Car is Running
RENAULT Car is Stop
 REMOVENDO Objetocar
 REMOVENDO Objetocar
*/
```


#### 3.9. Herança

```php
<?php

class Animal
{
    public $name;

    public function sleep()
    {
        return $this->name . " are sleeping... \n";
    }
}

class Dog extends Animal
{
    public function sleep()
    {
        print parent::sleep();
        return "Dog SLEEEEEEEEPING \n";
    }
}

class Bird extends Animal
{

}

$dog1 = new Dog();
$dog1->name = "TED";
print $dog1->sleep();

$bird = new Bird();
$bird->name = "Balack Bird";
print $bird->sleep();
```

#### 3.10. Visibilidade

#### 3.11. Encapsulamento

#### 3.12. Getters & Setters

#### 3.13. Classes Abstratas

#### 3.14. Interfaces

#### 3.15. Polimorfismo

#### 3.16. Métodos & Atributos Estáticos

#### 3.17. Palavra Reservada Final (Classes e métodos)


[Voltar ao Índice](#indice)

---


## <a name="parte4">4 - Métodos Mágicos</a>

#### 4.18. Introdução
#### 4.19. __set & __get
#### 4.20. __call & __callStatic
#### 4.21. __toString
#### 4.22. Conclusões

[Voltar ao Índice](#indice)

---


## <a name="parte5">5 - Autoload & Namespaces</a>

#### 5.23. Autoload 101
#### 5.24. Conhecendo Namespaces
#### 5.25. Autoload PSR-4
#### 5.26. Autoload com Composer

[Voltar ao Índice](#indice)

---


## <a name="parte6">6 - Mais OO no PHP</a>

#### 6.27. Type Hiting
#### 6.28. Traits 101
#### 6.29. Traits Particularidades
#### 6.30. Classes Anônimas

[Voltar ao Índice](#indice)

---


## <a name="parte7">7 - Exceptions</a>

#### 7.31. Conhecendo Exceptions
#### 7.32. Lançando Exceptions
#### 7.33. Exceptions Customizadas
#### 7.34. Bloco Finally

[Voltar ao Índice](#indice)

---


## <a name="parte8">8 - Projeto 1 - Site Institucional</a>

### 8.35. Iniciando Projeto
### 8.36. Iniciando FrontController
### 8.37. Manipulando Controllers em nosso FrontController
### 8.38. Concluindo FrontController
### 8.39. Iniciando Classe View
### 8.40. Testando e Criando Primeira View
### 8.41. Comentários Aula
### 8.42. Incrementando Projeto Adicionando Bootstrap
### 8.43. Criando Página Sobre
### 8.44. Criando Página Contato
### 8.45. Concluindo Projeto


[Voltar ao Índice](#indice)

---


## <a name="parte9">9 - Projeto 2 - Catálogo de Produtos</a>

#### 9.46. Iniciando Projeto Catálogo
#### 9.47. Entity para Manipular Dados
#### 9.48. Recuperando Produtos
#### 9.49. Produtos na View
#### 9.50. Recuperando Produto Especifico
#### 9.51. Criando Single de Produto
#### 9.52. Melhorando - Classe de Conexão com Banco & Concluindo

[Voltar ao Índice](#indice)

---


## <a name="parte10">10 - Projeto 3 - Mini-Gerenciador de Gastos Pessoais</a>

#### 10.53. Apresentando Projeto
#### 10.54. Melhorando Entity (FindAll & Where)
#### 10.55. Testando Entity (Where) & criando método Find
#### 10.56. Criando Método Insert no Entity
#### 10.57. Criando Método Update no Entity
#### 10.58. Criando Método Delete no Entity
#### 10.59. Organizando Projeto
#### 10.60. Iniciando Cadastro de Gastos
#### 10.61. Processando Cadastro
#### 10.62. Gerando Banco de Dados - MyExpenses
#### 10.63. Lançando Exceptions no PDO
#### 10.64. Concluindo Cadastro de Gastos
#### 10.65. Listando Gastos - View
#### 10.66. Iniciando Tela de Edição
#### 10.67. Processando Edição & Remoção de Gastos
#### 10.68. Criando Classe Session
#### 10.69. Iniciando Authenticator
#### 10.70. Testando e Criando Tela de Login
#### 10.71. Controlando Acesso ao Painel
#### 10.72. Criando Mensagens Flash
#### 10.73. Recuperando Despesas do Usuário e Concluindo

[Voltar ao Índice](#indice)

---


## <a name="parte11">11 - Projeto 4 - Blog</a>

#### 11.74. Iniciando Projeto
#### 11.75. Considerações Sobre o Banco de Dados do Projeto
#### 11.76. Primeiras Modificações do Blog
#### 11.77. Iniciando CRUD de Postagens
#### 11.78. Inserindo Primeira Postagem
#### 11.79. Editando/Atualizando Posts
#### 11.80. Removendo Postagens
#### 11.81. Sanitizando Dados de Entrada
#### 11.82. Validando Dados de Entrada
#### 11.83. Melhorias no Controller de Posts
#### 11.84. CRUD de Usuários
#### 11.85. Hash de Senha em CRUD de Usuários
#### 11.86. CRUD de Categorias
#### 11.87. Associando Categorias com Posts
#### 11.88. Modificando Login (Check de Senha com Hash)
#### 11.89. Ajustes Projeto
#### 11.90. Criando Home & Single do Blog
#### 11.91. Melhorias Home & Single
#### 11.92. Listando Posts por Categoria
#### 11.93. Gerando Slug Automático & Concluindo

[Voltar ao Índice](#indice)

---


## <a name="parte12">12 - Break Up - Relacionamento entre Objetos</a>

#### 12.94. Introdução
#### 12.95. Associação
#### 12.96. Agregação
#### 12.97. Composição
#### 12.98. Conclusões

[Voltar ao Índice](#indice)

---


## <a name="parte13">13 - Projeto Final - Primeira Etapa (Admin)</a>

#### 13.99. Intro Projeto
#### 13.100. Melhorias na Estrutura do Projeto
#### 13.101. Continuando Melhorias & Correções
#### 13.102. Tela Inicial de Gerenciamento de Produtos
#### 13.103. Entidade Produto & Busca no BD
#### 13.104. Iniciando Criação de Produto
#### 13.105. Salvando Produto no BD
#### 13.106. Validações & Sanitização para Produtos
#### 13.107. Iniciando Edição de Produto
#### 13.108. Processando Edição de Produto
#### 13.109. Removendo Produtos
#### 13.110. Iniciando Upload de Imagens do Produto
#### 13.111. Modificações no Form para Upload de Imagens
#### 13.112. Realizando Upload de Fotos do Produto
#### 13.113. Associando Fotos ao Produto em questão
#### 13.114. Validando Imagens Enviadas
#### 13.115. Testando Validação & Upload em Edição de Produtos
#### 13.116. Testando Edição de Imagens em Produtos
#### 13.117. Recuperando Imagens de Produtos na Edição
#### 13.118. Query Utilizada na Busca de Produto & Imagens
#### 13.119. Organizando Array de Retorno de Produto & Suas Imagens
#### 13.120. Exibindo Produtos na Edição de Imagens
#### 13.121. Removendo Imagens do Produto Pt 1
#### 13.122. Concluindo Remoção das Imagens do Produto
#### 13.123. Iniciando Associação de Produtos & Categorias
#### 13.124. Query de Alteração em Categorias Table
#### 13.125. Testando Criação de Produtos com suas Categorias
#### 13.126. Melhorias na criação de Produtos com suas Categorias
#### 13.127. Editando Produto com Categorias
#### 13.128. Sincronizando Produtos & Categorias (Muitos para Muitos)
#### 13.129. Concluindo Edição de Produto com Categorias
#### 13.130. Melhorias na Criação e Edição de Produtos
#### 13.131. Melhorias na Condição de Upload de Imagens
#### 13.132. Blocos Try...Catch & Concluindo Etapa

[Voltar ao Índice](#indice)

---


## <a name="parte14">14 - Projeto Final - Segunda Etapa (Front Loja)</a>

#### 14.133. Introdução
#### 14.134. Criando Home
#### 14.135. Criando Single Produto
#### 14.136. Criando Carrinho de Compras
#### 14.137. Cancelando Carrinho & Removendo Itens
#### 14.138. Melhorias Layout
#### 14.139. Exibindo Thumb de Produto Home
#### 14.140. Exibindo Imagens Single Produto
#### 14.141. Correções Single & Contador de Itens Carrinho
#### 14.142. Iniciando Tela de Login/Registro
#### 14.143. Registro do Usuário pro Checkout
#### 14.144. Correções Login & Concluindo

[Voltar ao Índice](#indice)

---


## <a name="parte15">15 - Etapa Final - PagSeguro Checkout Transparente</a>

#### 15.145. Introdução
#### 15.146. Instalando SDK PagSeguro
#### 15.147. Configurando Projeto
#### 15.148. Recuperando Sessão PagSeguro
#### 15.149. Incluindo PagSeguro Lib Javascript
#### 15.150. Criando Tela de Pagamento
#### 15.151. Recuperando Bandeira do Cartão de Crédito
#### 15.152. Recuperando Opções de Parcelamento
#### 15.153. Exibindo Opções de Parcelamento
#### 15.154. Recuperando Token do Cartão
#### 15.155. Recuperando Sender Hash
#### 15.156. Iniciando Requisição de Pagamento
#### 15.157. Recebendo Dados Enviandos
#### 15.158. Iniciando Pagamento com Cartão de Crédito SDK
#### 15.159. Processando Pagamento com Cartão
#### 15.160. Enviando Items do Carrinho
#### 15.161. Enviando Total da Compra
#### 15.162. Melhorias Pagamento Cartão de Crédito
#### 15.163. Organizando Checkout
#### 15.164. Pontos para Pedidos do Usuário
#### 15.165. Criando Pedido do Usuário
#### 15.166. Organizando Sessão PagSeguro
#### 15.167. Tela de Obrigado Pt1
#### 15.168. Tela de Obrigado Pt2
#### 15.169. Melhorias Tela de Pagamento
#### 15.170. Referência do Usuário Logado
#### 15.171. Iniciando Notificações PagSeguro
#### 15.172. Testando Notificações PagSeguro
#### 15.173. Tela de Pedidos do Usuário pt1
#### 15.174. Tela de Pedidos do Usuário pt2
#### 15.175. Conclusões

[Voltar ao Índice](#indice)

---

