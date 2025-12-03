---

#  **ROADMAP COMPLETO: PHP → POO → LARAVEL**

*Desenvolvido por Gabriel Morais*

---

##  **Índice**

1. [Introdução](#introdução)
2. [Fase 1 – Fundamentos de POO](#fase-1--fundamentos-de-poo)
3. [Fase 2 – POO aplicada ao PHP Moderno](#fase-2--poo-aplicada-ao-php-moderno)
4. [Fase 3 – Laravel Iniciante](#fase-3--laravel-iniciante)
5. [Fase 4 – Laravel Intermediário](#fase-4--laravel-intermediário)
6. [Fase 5 – Laravel Avançado](#fase-5--laravel-avançado)
7. [Fase 6 – Ecossistema Laravel](#fase-6--ecossistema-laravel)
8. [Projeto Completo – Sistema de Gestão de Serviços](#projeto-completo--sistema-de-gestão-de-serviços)
9. [Checklist Diário de Estudo](#checklist-diário-de-estudo)

---

# **Introdução**

Este roadmap tem como objetivo guiar um desenvolvedor do **zero em PHP** até o **nível Básico de Laravel**, construindo uma base sólida e aplicando tudo em um **projeto real e completo**.

---

#  **Fase 1 – Fundamentos de POO**

### Objetivo:

Aprender os pilares fundamentais da Programação Orientada a Objetos e entender como modelar problemas reais com classes.

---

### ✔️ Conceitos Essenciais

* ✔️Paradigma orientado a objetos
* ✔️Classes e Objetos
* ✔️Atributos e Métodos
* ✔️Construtores
* ✔️Encapsulamento (public, private, protected)
* ✔️Getters e Setters
* ✔️Métodos estáticos

---

### ✔️ Conceitos Avançados

* ✔️Herança
* ✔️Polimorfismo
* Interfaces
* Classes Abstratas
* Traits
* Namespaces

---

### ✔️ Boas Práticas

* Coesão e baixo acoplamento
* Princípios SOLID
* Organização de código

---

##  **Meta da fase:**

Criar um pequeno sistema 100% orientado a objetos.

---

#  **Fase 2 – POO aplicada ao PHP Moderno**

### Objetivo:

Dominar o básico PHP atual, entender tipagem, tratamento de erros, Composer e padrões modernos.

---

### ✔️ PHP Moderno

* Tipos nos parâmetros e retornos
* Typed properties
* Exceptions
* Namespaces
* Autoload (PSR-4)
* Composer e dependências
* Interfaces e Contracts
* Dependency Injection

---

###  **Arquitetura**

* MVC manual
* Repositórios (opcional)
* Helpers

---

###  **Mini-Projeto da fase:**

Criar um **CRUD sem framework** usando:

* PHP puro
* PDO
* POO
* Composer
* MVC manual

---

#  **Fase 3 – Laravel Iniciante**

### Objetivo:

Entender a dinâmica do framework e criar sistemas simples com rotas, controllers e models.

---

### ✔️ Fundamentos de Laravel

* Estrutura do projeto
* Rotas (web.php)
* Controllers
* Views com Blade
* Models
* Migrations
* Seeders e Factories
* Requests e validação
* Eloquent ORM
* Ambiente `.env`

---

### **Mini-Projetos:**

* CRUD básico com Eloquent
* Upload de arquivos
* Login com Laravel Breeze

---

#  **Fase 4 – Laravel Intermediário**

### Objetivo:

Desenvolver aplicações mais robustas, com relacionamentos e recursos internos do Laravel.

---

### ✔️ Tópicos Importantes

* Relacionamentos:

  * 1:1
  * 1:N
  * N:N
* SoftDeletes
* Query Builder avançado
* Eager Loading
* Middlewares
* Policies & Gates
* API Resources
* Eventos & Listeners
* Jobs e Queues
* Notificações

---

#  **Fase 5 – Laravel Avançado**

### Objetivo:

Atingir nível profissional, aprofundando arquitetura, testes e deploy.

---

### ✔️ Tópicos Avançados

* Arquitetura limpa (use cases, services, DTOs)
* Service Layer
* Repository Pattern
* Injeção de dependência avançada
* Testes (unitários e feature)
* Scheduler (tarefas agendadas)
* Filas com Redis
* APIs REST completas
* Segurança (rate limiting, tokens)

---

### Deploy

* Laravel Forge
* DigitalOcean
* Docker
* VPS básico

---

#  **Fase 6 – Ecossistema Laravel**

### ✔️ Ferramentas importantes

* Laravel Sail
* Vite / Mix
* Blade Components
* Livewire
* Filament (admin moderno)
* Laravel Pint
* Laravel Telescope
* Laravel Debugbar

---

# **Projeto Completo – Sistema de Gestão de Serviços**

Projeto final para consolidar **todo o roadmap**.

---

## Escopo do Projeto

### **1. Autenticação**

* Registro
* Login
* Recuperação de senha
* Perfis de usuário: Admin / Usuário

---

### **2. Módulo de Chamados (Tickets)**

* Criar chamados
* Comentários
* Anexos
* Status (Aberto → Em andamento → Resolvido)
* Atribuição de responsável

---

### **3. Módulo Financeiro**

* Receitas
* Despesas
* Saldo mensal
* Relatórios (tabelas e gráficos)

---

### **4. Dashboard**

* KPIs
* Chamados pendentes
* Gráficos de receita/ despesa
* Atividade recente

---

### **5. API**

Endpoints:

* Autenticação
* Tickets
* Financeiro
* Relatórios

---

### **6. Extras (opcionais)**

* Notificações
* Tema dark/light
* Painel administrativo com Filament
* Exportação para PDF/Excel

---

#  **Checklist Diário de Estudo (15 dias)**

*Perfeito para seguir como desafio pessoal.*

---

## **Dia 1 ✔️**

* Conceitos básicos de POO
* Criar 3 classes simples

## **Dia 2 ✔️**

* Encapsulamento + herança + polimorfismo
* Exercícios práticos

## **Dia 3**

* Composer + namespaces
* Autoload (PSR-4)

## **Dia 4**

* PHP moderno (tipagem, exceptions)

## **Dia 5**

* Mini-projeto: CRUD sem framework

## **Dia 6**

* Instalar Laravel
* Entender estrutura

## **Dia 7**

* Rotas, controllers e views

## **Dia 8**

* Models + Eloquent básico

## **Dia 9**

* CRUD completo no Laravel

## **Dia 10**

* Login com Breeze
* Middleware

## **Dia 11**

* Relacionamentos + filtros + paginação

## **Dia 12**

* API + Resources

## **Dia 13**

* Eventos, jobs, notificações

## **Dia 14**

* Testes (unit + feature)

## **Dia 15**

* Início do projeto final (modelagem + migrations)

---

---
