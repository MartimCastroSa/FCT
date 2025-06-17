# 🎲 FCT

> Developer Name: **Martim**

## Comandos Git úteis

- **Clonar repositório:**
  ```
  git clone <link-do-repositorio>
  ```
  Faz um clone do repositório remoto do GitHub para o teu computador.

- **Verificar estado do repositório:**
  ```
  git status
  ```
  Mostra o estado do repositório e os ficheiros modificados.
  - Vermelho: só está no computador.
  - Verde: foi modificado, mas já está no GitHub.

- **Ver diferenças num ficheiro:**
  ```
  git diff README.md
  ```
  Mostra o que foi removido e adicionado no ficheiro README.md.

- **Adicionar ficheiro para commit:**
  ```
  git add README.md
  ```
  Adiciona o ficheiro para ser enviado para o GitHub.

- **Criar commit:**
  ```
  git commit -m "Nome do commit"
  ```
  Cria um commit com as mudanças feitas e uma mensagem descritiva.

- **Configurar email do utilizador:**
  ```
  git config --global user.email "teu@email.com"
  ```
  Define o teu email para identificar quem fez as alterações.

- **Enviar commits para o GitHub:**
  ```
  git push
  ```
  Envia os commits para o repositório remoto no GitHub.

---

## Funcionalidades do sistema

- **Criação de uma conta:**
  - Validação do email, da força da password e se a mesma está comprometida:
    - `verifyRequestEmail`
    - `verifyPasswordStrength`
    - `verifyPwned`
- **Pedido de login:**
  - Validação das credenciais, utilizando o bcrypt;
- **Pedido de recuperação de password:**
  - Validação do email:
    - `verifyRequestEmail`
- **Pedido de alteração da password** (chave de recuperação enviada por email):
  - Validação da chave de recuperação, da força da password e se a mesma está comprometida:
    - `verifyTokenValidation`
    - `verifyPasswordStrength`
    - `verifyPwned`
- **Pedido de alteração da password:**
  - Validação do token de utilizador, da força da password e se a mesma está comprometida:
    - `verifyJWT utilizando o JWT`
    - `verifyPasswordStrength`
    - `verifyPwned`
- **Pedido de remoção da conta:**
  - Validação do token de utilizador:
    - `verifyJWT`