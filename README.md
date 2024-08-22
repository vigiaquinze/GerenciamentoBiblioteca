<p align="center"><h1 style="display: flex; justify-content: center; font-size: 50px; font-weight: 700; align-items: center; text-align: center">Sistema de Gerenciamento de Biblioteca LibriLoco</h1></p>

# Escopo

Desenvolver uma aplicação web completa para gerenciar uma biblioteca, permitindo que bibliotecários cadastrem e gerenciem livros, e que usuários cadastrados possam buscar, alugar e devolver livros. A aplicação deve incluir um sistema de cadastro e autenticação para bibliotecários e usuários, bem como funcionalidades de notificação para facilitar a comunicação entre todos os envolvidos.


# Funcionalidades

- ## Cadastro e autenticação
    ### Cadastro de Bibliotecários
    Permitir que novos bibliotecários se registrem com informações como nome, email, senha e cargo.
	#### Funcionalidades:
	- Formulário de registro
	- Validação de dados
	- Confirmação de registro por email
	- Interface para login e recuperação de senha

- ## Gestão de livros
    ### CRUD de Livros
	Bibliotecários podem criar, ler, atualizar e excluir livros do catálogo.
	#### Funcionalidades:
    - Formulários para adicionar e editar livros (campos: título, autor, gênero, ano de publicação, ISBN, número de cópias disponíveis).
    - Interface para visualizar detalhes dos livros.
    - Função para remover livros do catálogo.

    ### Busca e filtragem de Livros
	Usuários podem buscar livros por título, autor, gênero, e outros critérios.
	#### Funcionalidades:
    - Barra de busca por texto livre.
    - Filtros avançados por gênero, classificação, data de publicação, etc.
    - Resultados da busca exibidos em uma lista com informações resumidas.

- ## Aluguel de livros
    ### Solicitação de empréstimo
	Usuários podem solicitar o aluguel de livros disponíveis.
	#### Funcionalidades:
    - Interface para solicitar empréstimo com opções de data de início e fim.
    - Verificação da disponibilidade do livro antes da confirmação do empréstimo.

    ### Registro de devolução
	Bibliotecários podem registrar a devolução dos livros emprestados.
	#### Funcionalidades:
    - Interface para registrar a devolução.
    - Atualização do status do livro para "Disponível".


    ### Histórico de empréstimo
	Usuários e bibliotecários podem visualizar o histórico de empréstimos.
	#### Funcionalidades:
    - Listagem de livros emprestados, incluindo datas de empréstimo e devolução.

- ## Notificações e comunicação
    ### Notificações para bibliotecário
	Notificar bibliotecários quando um livro for alugado.
	#### Funcionalidades:
    - E-mail ou notificação dentro da aplicação com detalhes sobre o livro e o usuário.

    ### Notificações para usuários
	Notificar usuários sobre datas de devolução, livros novos e bem avaliados.
	#### Funcionalidades:
    - E-mails ou notificações na aplicação com lembretes de devolução, novos livros e recomendações baseadas em avaliações.

- ## Administração
    ### Gestão de Usuários e Bibliotecários
    Administradores podem gerenciar contas de usuários e bibliotecários.
    #### Funcionalidades:
    - Interface para adicionar, editar e excluir usuários e bibliotecários.
    - Gerenciamento de permissões e papéis.

    ### Relatórios e análises
    Administradores podem gerar relatórios sobre o uso do sistema, como número de livros emprestados, taxas de devolução, etc.
    #### Funcionalidades:
    - Ferramentas de geração de relatórios e visualização de estatísticas.


# Objetivos SMART do Projeto
- ## Gerenciamento do Catálogo de Livros
    - ### Específico:
    Permitir que administradores realizem operações CRUD (Criar, Ler, Atualizar, Deletar) no catálogo de livros.
    - ### Mensurável:
    O sistema deve permitir adicionar, editar e remover pelo menos 100 livros e exibir uma lista com informações detalhadas sobre cada um.
    - ### Atingível:
        Utilizando o Laravel Framework para desenvolver a interface e PostgreSQL para armazenar os dados dos livros.
    - ### Relevante:
        Facilita a manutenção e atualização do catálogo de livros disponível para empréstimo.
    - ### Temporal:
        Deve ser concluído na etapa de "Implementação do CRUD para Livros" do cronograma, com duração de 3 semanas.

- ## Interface de Empréstimo e Devolução
    - ### Específico:
        Implementar uma interface que permita aos usuários solicitar empréstimos e aos administradores registrar a devolução de livros.
    - ### Mensurável:
        O sistema deve permitir a gestão de até 500 transações de empréstimo e devolução por mês.
    - ### Atingível:
        Desenvolver as funcionalidades usando Laravel para a lógica de aplicação e PostgreSQL para o armazenamento dos dados.
    - ### Relevante:
        Melhora a eficiência na gestão dos livros emprestados e devolvidos, reduzindo erros e facilitando o controle.
    - ### Temporal:
        Deve ser concluído na etapa de "Implementação do Sistema de Empréstimo e Devolução" do cronograma, com duração de 3 semanas.
- ## Sistema de Registro e Login
    - ### Específico:
        Criar um sistema de autenticação para administradores e usuários, com níveis de acesso diferenciados.
    - ### Mensurável:
        Implementar um sistema que permita o registro e login de pelo menos 100 administradores e 500 usuários.
    - ### Atingível:
        Utilizar o Laravel Framework para o sistema de autenticação e PostgreSQL para armazenar credenciais e perfis de usuários.
    - ### Relevante:
        Garantir que apenas usuários autorizados possam acessar e manipular informações críticas do sistema.
    - ### Temporal:
        Deve ser concluído na etapa de "Implementação do CRUD para Usuários" do cronograma, com duração de 2 semanas.

# Cronograma detalhado
- ## Análise de Requisitos e Modelagem (2 semanas)
    - ### Específico:
        Levantar todos os requisitos do sistema e criar os diagramas necessários.
    - ### Mensurável:
        Produzir e validar todos os diagramas (Classe, Uso, Fluxo) e documentar requisitos.
    - ### Atingível:
        Baseado nas informações fornecidas e nas reuniões com stakeholders.
    - ### Relevante:
        A análise e modelagem adequadas são fundamentais para o sucesso do projeto.
    - ### Temporal:
        Concluído até o final da 2ª semana após o início do projeto.

- ## Implementação do CRUD para Livros (3 semanas)
    - ### Específico:
        Desenvolver funcionalidades para gerenciamento do catálogo de livros.
    - ### Mensurável:
        Implementar operações CRUD para pelo menos 100 livros e garantir que todas as funcionalidades estejam funcionando corretamente.
    - ### Atingível:
        Utilizar Laravel para desenvolvimento e PostgreSQL para o banco de dados.
    - ### Relevante:
        Fundamental para o gerenciamento do catálogo de livros.
    - ### Temporal:
        Concluído até o final da 5ª semana após o início do projeto.

- ## Implementação do CRUD para Usuários (2 semanas)
    - ### Específico:
        Desenvolver funcionalidades para gerenciamento de usuários.
    - ### Mensurável:
        Implementar operações CRUD para pelo menos 500 usuários.
    - ### Atingível:
        Usar Laravel para desenvolvimento e PostgreSQL para armazenamento.
    - ### Relevante:
        Essencial para a gestão de contas e acessos.
    - ### Temporal:
        Concluído até o final da 7ª semana após o início do projeto.

- ## Implementação do Sistema de Empréstimo e Devolução (3 semanas)
    - ### Específico: 
        Desenvolver funcionalidades para registro de empréstimos e devoluções de livros.
    - ### Mensurável:
        Implementar um sistema que suporte até 500 transações de empréstimo e devolução por mês.
    - ### Atingível:
        Utilizar Laravel para a lógica de aplicação e PostgreSQL para dados de transações.
    - ### Relevante:
        Crucial para o controle e gestão de livros emprestados.
    - ### Temporal:
        Concluído até o final da 10ª semana após o início do projeto.

- ## Documentação e Entrega (2 semanas)
    - ### Específico: 
        Criar toda a documentação técnica e de usuário e realizar a entrega final do projeto.
    - ### Mensurável: 
        Completar e revisar a documentação e realizar uma apresentação formal para a entrega.
    - ### Atingível: 
        Baseado na documentação gerada durante o desenvolvimento e na experiência da equipe.
    - ### Relevante: 
        Garantir que o sistema esteja bem documentado e compreendido pelos usuários finais.
    - ### Temporal: 
        Concluído até o final da 12ª semana após o início do projeto.

# Recursos
- ## Framework: Laravel
- ## Banco de Dados: PostgreSQL
- ## Outros: Ferramenta de versionamento de código (Git).

# Análise de Riscos
- ## Risco de Segurança de Dados dos Usuários
    - ### Mitigação: 
        Implementar autenticação segura, criptografia e práticas recomendadas de segurança de dados.
- ## Falhas na Implementação de Regras de Negócio
    - ### Mitigação: 
        Realizar testes rigorosos e validação das regras de negócio durante o desenvolvimento.
- ## Complexidade na Gestão de Estados de Empréstimos
    - ### Mitigação: 
        Planejar cuidadosamente a lógica de gestão de estados e realizar testes detalhados.

# Diagramas
- ## Diagrama de Classe
    ![Diagrama de classe](https://i.postimg.cc/MKTR4T7d/Diagrama-de-classes.png)
- ## Diagrama de Fluxo
    ![Diagrama de fluxo](https://i.postimg.cc/5NRvMVp1/Diagrama-de-fluxo.png)
- ## Diagrama de Uso
    ![Diagrama de uso](https://i.postimg.cc/s2XgfQ2N/Diagrama-de-uso.png)
