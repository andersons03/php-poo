# Projeto da formação, Aprenda a programar em PHP com Orientação a Objetos

## Tópico abordados nas aulas:

### Curso: **Conheça a programação Orientada a Objetos**
- Conhecemos o conceito de **Programação Orientada a Objetos** e vimos que a ideia é organizar nossos códigos não mais em funções, mas sim em tipos que fazem sentido em nosso sistema através da definição de classes e instâncias de objetos;
- Criamos nossa primeira classe (`Filme`) e aplicamos o primeiro pilar da Orientação a Objetos, a **Abstração**, para definir somente os atributos que serão necessários em nossa implementação;
- Entendemos como objetos são armazenados e passados por parâmetro em códigos PHP através de referências.
- Aprendemos a criar métodos em nossas classes e vimos como eles funcionam por baixo dos panos para acessar as referências;
- Conhecemos a famosa variável `$this`, que contém a referência para o objeto que gerou a execução do método;
- Encapsulamos os dados do filme permitindo o acesso a eles somente através de métodos de acesso na classe `Filme`.
- Conhecemos o **método construtor** e vimos como garantir que todos os dados sempre sejam inicializados ao criar um objeto;
- Aprendemos a modificar o acesso às nossas propriedades para que elas sejam somente para leitura com o `readonly`;
- Conhecemos as `enums` do PHP para definir tipos finitos.
- Aprendemos um dos mais importantes pilares da Orientação a Objetos: a **Herança**;
- Vimos como podemos compartilhar código através da Herança, embora nem sempre essa seja a abordagem ideal;
- Aprendemos a chamar membros da classe base através da palavra `parent` do PHP.
- Conhecemos o quarto dos quatro pilares da Orientação a Objetos: o **Polimorfismo**;
- Praticamos o conceito de **sobrescrita de métodos** e utilizamos essa ideia para aplicar o polimorfismo na prática.

### Curso: **use Interfaces, Namespaces, Traits e Exceções**
- Conhecemos o conceito de métodos abstratos, que são métodos que devem existir, mas ainda não possuem implementação;
- Entendemos que toda classe que possui um método abstrato precisa ser também uma classe abstrata;
- Vimos que classes abstratas não podem ser instanciadas já que são considerados tipos “incompletos”;
- Aprendemos que todas as classes concretas que estendem classes abstratas precisam implementar os métodos que foram definidos como abstratos.
- Vimos que a possibilidade de herança múltipla poderia nos trazer um famoso problema conhecido como problema diamante;
- Aprendemos que o uso de interfaces nos permite ter uma classe implementando diversos tipos sem nenhum problema.
- Conhecemos o conceito de herança horizontal através de traits, o que nos permite reutilizar código sem aumentar a complexidade de nossa hierarquia de tipos;
- Aprendemos a organizar logicamente nossos tipos através do uso de namespaces, que são semelhantes a pastas lógicas;
- Criamos um autoloader permitindo que todos os nosso tipos possam ser utilizados sem a necessidade de diversos `requires` em nosso código.
- Entendemos que mesmo que nosso código não possua erro de sintaxe, ainda é possível que erros aconteçam durante a execução;
- Aprendemos a lidar com cenários alternativos (exceções) e erros através dos blocos `try` e `catch`;
- Vimos que é possível lidar com mais de um tipo de problema definindo múltiplos blocos `catch`.
- Aprendemos a utilizar a instrução `throw` para lançar exceções;
- Conhecemos a hierarquia de classes de exceções, conhecendo classes como `Exception`, `Error` e a interface `Throwable`;
- Aprendemos a criar nossa própria classe de exceção que precisa estender `Exception` direta ou indiretamente.