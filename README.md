UC001

Caso de Uso: Se cadastrar no sistema

Ator(es): Usuário

Objetivo: Este caso de uso tem por objetivo o usuário se cadastrar no sistema.

Pré-condições: Sistema aberto

Pós-condições:

Fluxo Principal:

1.1 - O usuário seleciona a opção cadastrar.

1.2 – O sistema abre tela de cadastro.

1.3 – O usuário informar os dados Nome, User e Senha.

1.4 – O usuário seleciona a opção cadastrar(RN01).

1.5 - O usuário recebe uma mensagem de sucesso(MSG01).

1.6 – O sistema insere ele no banco de dados(IMG01).

1.7 – O sistema encerra o caso de uso.

Fluxo Alternativo:
Não há.


Fluxo de Exceções:

1.1 - Se o usuário não digitar algum dado o sistema exibe a tela de erro(IMG02)(MSG02).

1.2 - Se o usuário digitar algum dado errado o sistema exibirá a tela de erro(IMG02)(MSG02).

Regra de Negócio:

RN01 - O Nome deve ter no máximo 30 caracteres, o user tem que ter no máximo 15 caracteres e a Senha entre 8 e 12 caracteres sendo no mínimo uma letra e um número.

MSG01 - cadastrado com sucesso.

MSG02 - Preenche certo ai seu otario


UC002

Caso de Uso: Se logar no sistema

Ator(es): Usuário

Objetivo: Este caso de uso tem por objetivo o usuário logar no sistema.

Pré-condições: Sistema aberto

Pós-condições:

Fluxo Principal:

1.1 - O usuário preenche com os dados já cadastrados, User e Senha.

1.2 – O sistema valida os dados do usuário.

1.3 – O usuário recebe a mensagem de logado com sucesso.

1.4 - O sistema encerra o caso de uso.

Fluxo Alternativo:
Não há.

Fluxo de Exceções:

1.1 - Se o usuário digitar algum dado errado o sistema irá exibir a mensagem de erro(MSG02).

