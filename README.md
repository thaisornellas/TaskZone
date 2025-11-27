# 🧠 TaskZone  
Projeto colaborativo dos alunos de Programação — CRUD de tarefas feito em **PHP Laravel**, com uso de **Git e GitHub** para prática de versionamento e trabalho em equipe.  

---

## 🎯 Objetivo  
Criar um sistema simples de gerenciamento de tarefas, onde o usuário pode **criar, listar, editar e excluir tarefas**.  

O foco é aprender:  
- Organização de código em Laravel (Model, View, Controller)  
- Uso de rotas e CRUD  
- Boas práticas de Git (commit, branch, pull request)  
- Trabalho em equipe e versionamento colaborativo  

---

## 🧩 Estrutura inicial  
```bash
app/
├── Models/
│ └── Tarefa.php
├── Http/
│ └── Controllers/
│ └── TarefaController.php
resources/
└── views/
└── tarefas/
├── index.blade.php
├── create.blade.php
├── edit.blade.php
routes/
└── web.php
```

---

## 👩‍💻 Distribuição de tarefas  
| Aluno | Responsabilidade |
|--------|------------------|
| João Victor | HTML/CSS das telas **create** e **edit** |
| Vinicius | HTML/CSS e controller da **listagem (read)** |
| André Lucas | Controller do **create** e **Routes** |
| Kaio | Controller do **update** e **delete** |
| Todos | Testar o projeto e revisar código dos colegas |

---


---

##  Comandos Git — guia rápido

### 🔹 Primeira configuração
```bash
git clone https://github.com/thaisornellas/taskzone.git
cd taskzone
```
### 🔹 Criar uma nova branch com seu nome
```bash
git checkout -b aluno
```
### 🔹 Fazer mudanças e salvar
```bash
git add .
git commit -m "mensagem explicando o que fez"
```
### 🔹 Enviar pro GitHub
```bash
git push origin aluno
```
### 🔹 Atualizar seu projeto com mudanças do grupo
```bash
git pull origin main
```
### 🔹 Criar pull request

---

Depois de terminar uma parte, vá até o GitHub → clique em Compare & pull request → envie para revisão.

### 🧭 Dicas importantes
- Sempre atualize seu branch antes de começar (git pull origin main).
- Faça commits pequenos e claros (“adiciona form de criação”, “corrige CSS da listagem”).
- Não apague arquivos dos colegas.
- Teste o que fizer antes de dar push.

---

## 💬 Dúvidas e suporte

Se tiver qualquer dúvida durante o projeto (Git, Laravel, ou tarefas), entre em contato comigo:

💬 **WhatsApp:** (44) 99114-7496 (Thais)



