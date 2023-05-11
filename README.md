# Projeto Estágio 
O projeto em questão tem como objetivo criar um sistema para gerenciar o cadastro, listagem e edição de usuários, bem como o controle das parcelas correspondentes a esses usuários. O sistema será capaz de listar todas as parcelas de cada usuário, incluindo as parcelas que já foram pagas e as que estão em atraso, permitindo a edição dessas informações quando necessário. 


## 🚀 Começando
Baixe todos os arquivos presentes neste repositório para a sua máquina e siga os passos de instalação a seguir.


## 🔧 Instalação
Antes de começarmos, é necessário ter o aplicativo Visual Studio Code instalado em sua máquina para que possa realizar futuras modificações. Caso ainda não o tenha, faça o download e a instalação do Visual Studio Code em seu computador. Em seguida, baixe os seguintes aplicativos (siga as instruções para baixá-los):


### Instalando o XAMPP
Acesse o site oficial do XAMPP (https://www.apachefriends.org/pt_br/index.html) e faça o download da versão compatível com o seu sistema operacional.

Após o download, abra o arquivo de instalação e siga as instruções do instalador para instalar o XAMPP no seu computador.

Durante o processo de instalação, selecione os módulos do XAMPP que deseja instalar, como Apache, MySQL e PHP.

Ao finalizar a instalação, inicie o XAMPP e verifique se os módulos selecionados estão funcionando corretamente.

### Instalando o banco de dados HeidiSQL
Acesse o site oficial do HeidiSQL (https://www.heidisql.com/) e faça o download da versão compatível com o seu sistema operacional.

Após o download, abra o arquivo de instalação e siga as instruções do instalador para instalar o HeidiSQL no seu computador.

Ao finalizar a instalação, abra o HeidiSQL e clique em "Nova" para criar uma nova conexão.

Preencha as informações da conexão, como nome do host (geralmente "localhost"), nome de usuário e senha. Certifique-se de selecionar o banco de dados que deseja usar para o seu projeto.

Clique em "Testar" para verificar se a conexão foi estabelecida com sucesso. Se tudo estiver funcionando corretamente, salve a conexão.

Usando o arquivo com o XAMPP e o banco de dados HeidiSQL
Coloque o arquivo que deseja usar na pasta "htdocs" do XAMPP. Esta pasta geralmente está localizada em "C:\xampp\htdocs".

Abra o seu navegador e digite "localhost/nome-do-arquivo.php" na barra de endereço. O nome do arquivo deve ser substituído pelo nome do arquivo que você colocou na pasta "htdocs".

Se o arquivo estiver funcionando corretamente, você deverá ver o conteúdo dele no seu navegador.

Se o arquivo precisar acessar o banco de dados, certifique-se de que a conexão com o banco de dados esteja estabelecida corretamente no arquivo. Você pode usar o HeidiSQL para gerenciar o banco de dados e fazer consultas.

Pronto! Agora você pode usar o XAMPP e o banco de dados HeidiSQL para desenvolver seus projetos web.


## ⚙️ Configurando os arquivos 
Após baixar os arquivos e os aplicativos, siga estes passos:

- No painel de controle do Xampp, clique em MySQL Admin.
![image](https://github.com/Wellingtonlanu/ProjetoEstagio/assets/113382133/a2078674-a338-4d3b-9b08-0549c746b751)

- Depois de acessar o link, clique em IMPORTAR e, em seguida, importe o arquivo com o nome BD_projeto_mutua.
![image](https://github.com/Wellingtonlanu/ProjetoEstagio/assets/113382133/f0f4da2e-49be-4852-950e-7e6f351ea2dc)

- Feito isso, ao abrir o banco de dados, todos os dados já estarão presentes.


- Após baixar todos os arquivos presentes neste repositório, mova-os para dentro da pasta HTDOCS presente no XAMPP -> xampp/htdocs


- Para abrir os arquivos que estão neste repositório (editar o código) acesse o Visual Studio CODE, clique em Open New Folder e selecione a pasta localizada em xampp/htdocs/projeto_mutua


- Quando quiser vizualizar o site, basta acessar o painel de controle do XAMPP e clicar em START do Apache e MySQL, feito isso o projeto já vai estar operando.



## 🛠️ Construído com
* PHP
* HTML
* CSS
* JavaScript
