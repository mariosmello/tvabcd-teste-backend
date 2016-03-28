# TvABCD - Teste - Backend
O objetivo do teste é conhecer as habilidades em:
- Programação
- Organização (código/arquivos)
- Controle de versão
- Análise/Entendimento de requisitos
- Capricho (atenção com urls, metatags, validações, modelagem, nomenclatura, ...)

## Importante
Tudo que for desenvolvido não será utilizado comercialmente e a única intenção é de avaliar o conhecimento atual do interessado.

### Qual é o teste ?
Imagine que a empresa foi contratada para participar de um projeto. Este projeto consiste na elaboração de um site.

O site será para um consultório médico e os principais objetivos são:
- Armazenar leeds de possíveis clientes
- Demonstrar de forma dinâmica o quadro de médicos
- Demostrar de forma dinâmica os principais clientes
- Fornecer recurso para quadro de médicos

A equipe de criação já fez o layout (fake, este foi comprado), a equipe de frontend fez a montagem (fake, a compra foi do template montado) e agora teremos a programação backend para fechar este projeto.

### O que deve ser feito ? - Requisitos
- [ ] Modelagem de banco de dados para formulário. Os campos do formulário são: Nome, E-mail, Telefone
- [ ] Modelagem de banco de dados para médicos. Os campos são: Nome, Especialidade, Celular, Descrição, Foto
- [ ] Modelagem de banco de dados para clientes. Os campos são: Nome, Logotipo, Site
- [ ] Persistir os dados do formulário (Make an appointment today) no banco de dados modelado. Os 3 campos são obrigatórios
- [ ] Após a persistência dos dados do formulário, enviar um e-mail para o administrador do sistema
- [ ] Após o envio do e-mail, direcionar usuário para tela de sucesso "appontment_success.html"
- [ ] Criar árae de acesso restrito para login com usuário/senha
- [ ] Criar CRUD para médicos
- [ ] Criar CRUD para clientes
- [ ] Criar consulta/exportação de leeds persistidos no formulário (Make an appointment today)
- [ ] Exibir a lista de doutores persistidos, temos uma área chamada "Meet the Wealth.life Specialists Doctors"
- [ ] Ao clicar em um médico, exibir as informações deste médico na página "doctor.html"
- [ ] Exibir a lista de clientes persistidos, temos uma área chamada "We trusted by thousand of client", ao clicar abrir o site do cliente
- [ ] Criar recurso REST para exibição de médicos com resposta em JSON
- [ ] Criar recurso REST para exibição de informações de um médico específico com resposta em JSON

### O que devo utilizar ?
- Laravel 5.2
- PHP - Orientação a Objetos
- MVC
- Outros padrões de projeto serão um diferencial
- Template Engine - Blade
- Banco de Dados MySQL
- Composer
- Sinta-se a vontade para utilização de microframeworks caso necessário

### Como participar ?
- Fazer um fork deste repositório
- Programar para atender os requisitos
- Fazer um pull request quando finalizar. É importante que conste no pull request as instruções para execultar a aplicação desenolvida (preferencialmente usando markdown).

# Boa sorte