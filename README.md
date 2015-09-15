
# Boblog - Passo a passo da criação

## Introdução
   
   A criação deste site partiu da necessidade pelo desenvolvimento de um  trabalho para o Curso de Tecnólogo de Sistemas para Internet - 2º Semestre, do  Instituto Federal de Educação, Ciência e Tecnologia
   
## Interação com o  usuário

   No nosso projeto de interação com o usuário,  decidimos por abranger todas as plataformas de acesso disponíveis, como  desktops e dispositivos portáteis, que estão cada vez mais conectados à  internet, além disso, estabelecemos algumas metas de usabilidade para o nosso  blog:
   
* Simplicidade
* Agradabilidade
* Navegabilidade
* Obedediência aos padres de design do mercado

Além dessas metas, nos focamos em como  e por quais métodos os usuários iriam acessar o site. Estes fatores são  cruciais para o projeto, pois podem alterar a percepção do usuário com relação  ao blog:
   
* Navegadores (browser)
* Dispositivos (computador, celulares, tablets, etc.)
* Acessibilidade (tamanho de fonte, contraste de cores, etc.)

Optamos por não incluir uma seção  ajuda  no blog  pelo fato da sua interface ter sido desenvolvida de forma clara e objetiva ao  usuário.

Nas pesquisas realizadas com os usuários, foi  unânime a  aprovação  deles quanto à usabilidade e navegação do site, alguns  até relatando que foi muito fácil identificar as seções do site.
    
## O processo de montagem

### Definição de estruturas, layouts e público alvo

Após escolher o conteúdo do blog, já  definido pelo projeto do trabalho, analisamos como ele seria disposto. Discutimos  sobre os critérios de navegabilidade e firmou-se que seria feito da seguinte  forma:
   
* Um logotipo no topo do site
* Um menu principal
* Um menu dos autores do site
* Conteúdo da pagina
* Rodapé
* Topo: No topo seria de predominância o logotipo do site, com âncora à página inicial do site.
* Menu principal: No menu principal os itens seriam:
**  Curriculum Vitae
** Letter of Presentation
** Abstract
** Tecnology
* Menu dos autores: Menu contendo os autores do site (esse menu foi descartado após a definição do layout).
* Conteúdo: Container onde fica as informações que o usuário quer ver.
* Rodapé: Informações acerca do site.
 
##   Definição de  layouts

Depois escolhemos os  esquemas que do nosso site, pensando sempre nos critérios de acesso  citados anteriormente. Vejamos a seguir os esquemas analisados:
###   Layout padrão: Monitores e Projetores

Este é o esquema padrão votado para ser adotado em nosso site para uso em monitores e projetores:
    
Esquema para monitores: o site seria composto por uma moldura com largura fixa e laterais vazias redimensionavéis. Contém banner com o logo do site, menu principal, menu dos autores, conteúdo variável e rodapé.
    
Observamos que este layout se adaptaria muito bem ao site, porém o menu de autores ficaria fora de contexto em algumas áreas do site (como por exemplo a seção abstract e o artigo de tecnologia). Além disso, o menu ocuparia grande espaço que poderia ser utilizado pelo texto de conteúdo.
    
  Então foi decidido pela remoção do menu, dando assim um espaço maior ao conteúdo principal. Com essas mudanças, o esquema ficou assim:
    
  Novo esquema para monitores e projetores: o conteúdo principal ficou mais amplo sem o menu de autores.
    
  Depois de ter o layout esquematizado faltava apenas um item para definir a posição: comentários do blog. E como é padrão de todos os blogs, os comentários ficam abaixo do texto publicado. Com isso nosso esquema estava pronto para início de montagem do esqueleto principal do site.
     
     Esquema final para monitores e projetores: os comentários estão dispostos abaixo do texto
   
### Layout para dispositivos portáteis

  Os dispositivos portáteis possui limitações técnicas para sites com volume grande de imagens e scripts. Por isso, resolvemos escolher um layout minimalista para uso nesses dispositivos:
    
    Esquema minimalista para dispositivos portáteis
     
### Layout para navegadores com suporte fraco ao CSS

   Para os navegadores  que não tem total suporte ao uso de CSS 2.1 resolvemos optar pelo uso do mesmo  layout usado para dispositivos móveis nesses browsers, com pequenas  modificações, para que o usuário tenha ao menos acesso ao conteúdo.
   
   A implantação de  hacks para renderizar o conteúdo em navegadores antigos é demorada, e a maioria  dos sites de hoje também já não oferecem mais suporte a esses navegadores.
   
### Layout de impressão

   Pensando nos recursos  de impressão, definimos que o esquema seria semelhante ao do layout padrão, mas  somente exibindo o título, o conteúdo e o rodapé, e ocultando o menu principal.
   
### Outros tipos de dispositivos e acessibildade

   Para outros  dispositivos apenas nos respaldamos pelo uso correto das normas W3C e de CSS. O  site é baseado nos padrões Web, sem uso de tabelas para layout nem de uso de  plugins adicionais, como Java ou Flash.
   
   O foco para criação  desse site é atender a todos os usuários que pretendem acessá-lo, sem  distinções.
## Design

### Logotipo

  Nosso objetivo ao  criar o banner foi dar uma aparência descontraída ao blog, mas sem exageros. O  puzzle usado nas letras transmite a ideia de construção, agregação e através  dele representamos a importância de cada conteúdo individual para o todo.
    
    As mascotes do site  foram escolhidas pelo seu significado: força.
    
### Distribuição de conteúdo

   Para o conteúdo foi definido que seria adotado o mesmo esquema para  todos os assuntos do site. Por exemplo, a seção de currículos tem uma página  onde lista todos os currículos publicados. Cada seção tem sua própria lista e  nela tem as páginas que podem ser visualizados da seção.
###   Definição de cores
   Escolhemos a cor azul porque ela transmite a sensação de tranquilidade e  combinamos a com branco, que é uma cor neutra e limpa, afim de não poluir o  layout do blog. Apostamos na simplicidade para podermos lançar mão de mais  detalhes posteriormente, destacando os pontos necessários.
   
   O primeiro modelo
    Primeiro modelo do site
    
    A partir deste  primeiro modelo partimos para a montagem do site, onde foi observado o layout  feito em projeto, escrevendo manualmente as marcações HTML, e o posicionamento  e cores do conteúdo em CSS.
   
   Há alguns pontos  menores que seriam apenas definidos durante a criação do site, como linhas,  bordas, fontes e detalhes de cores. Estes itens foram definidos no esquema   escreva-e-avalie . Por isso, esses itens eram definidos em tempo de  criação, e avaliados conforme feitos.
   
   O contato com o usuário
   
   Para obter a opinião  dos usuários, divulgamos o nosso trabalho em uma conta no serviçoHost.sk (mais tarde migrado  para http://www.000webhost.com/)e mandamos os  arquivos do site para serem hospedados. Após isso, pedimos a alguns contatos do  comunicador pessoal Windows Live Messenger e de redes sociais para que  opinassem sobre o nosso trabalho.
   
   A maioria relatou  coisas sem muita relevância como  site bom , mas sem dar opções de  melhorias.
   
   Outros relataram  pontos que causaram modificações mais substanciais ao website, como:
*  Layout quebrado e  scripts não funcionais:O navegador padrão durante a criação do  site foi o Google Chrome, e nem sempre se pode testar todas as funcionalidades  durante essa fase inicial do projeto em todos os navegadores e dispositivos.  Por isso que é importante o teste em todos os navegadores, pois a gama de  browsers é muito grande.
  
* Identificação do  ponto de navegação (Breadcrumb):Navegando por um determinado tempo no  site o usuário poderia se perder e não saber qual era a sua localização, pois  não havia uma forma clara de onde o usuário estava durante a navegação. Por  isso, implementamos o Breadcrumb (Navegação Estrutural - http://en.wikipedia.org/wiki/Breadcrumb_(navigation)), que mostra onde o  usuário está na hierarquia do site, permitindo também que ele volte uma ou duas  páginas atrás sem ter que utilizar o botão voltar do navegador:
     
Barra de identificação de navegação estrutural (Breadcrumb): o usuário consegue, por cognição, identificar em que local do site está navegando

    A alteração também foi feita na barra de títulos do navegador, que exibe a mesma estrutura.
* Cores e fontes:Devido ao fato de serem  itens definidos durante o tempo de criação, insistimos aos usuários opinarem  sobre as cores e fontes do site. Quando um determinado item de mudança era de  opinião para mais pessoas, a alteração era feita.
* Modificação das cores: o banner e o rodapé foram estendidos, dando a aparência de ampliação do site.
 A opinião para esta e várias mudanças partiu dos usuários

* Tradução:O site está em  inglês, mas alguns usuários reclamaram que só entendem português. Para resolver  este problema, inserimos o menu do Google Tradutor na barra de navegação do  site. Assim, o usuário pode compreender o conteúdo do site em sua língua  nativa.
     Google Tradutor incluído no site
*  Servidor:Alguns usuários observaram que o servidor host.sk tinha problemas em determinadas horas do dia. Por  isso, mudamos o serviço de hospedagem para o000webhost.com.
