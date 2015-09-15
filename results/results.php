<div id="results">
  <h2>Boblog - Passo a passo da cria&ccedil;&atilde;o</h2>
  <h3>Introdu&ccedil;&atilde;o</h3>
  <p>A criação deste site partiu da necessidade pelo desenvolvimento de um  trabalho para o Curso de Tecnólogo de Sistemas para Internet - 2º Semestre, do  Instituto Federal de Educação, Ciência e Tecnologia</p>
  <h3>Interação com o  usuário</h3>
  <p>No nosso projeto de interação com o usuário,  decidimos por abranger todas as plataformas de acesso disponíveis, como  desktops e dispositivos portáteis, que estão cada vez mais conectados à  internet, além disso, estabelecemos algumas metas de usabilidade para o nosso  blog:
  <ul>
    <li>Simplicidade</li>
    <li>Agradabilidade</li>
    <li>Navegabilidade</li>
    <li>Obedediência aos padr&otilde;es de design do mercado</li>
  </ul>
  </p>
  <p>Além dessas metas, nos focamos em como  e por quais métodos os usuários iriam acessar o site. Estes fatores são  cruciais para o projeto, pois podem alterar a percepção do usuário com relação  ao blog:
  <ul>
    <li>Navegadores (browser)</li>
    <li>Dispositivos (computador, celulares, tablets, etc.)</li>
    <li>Acessibilidade (tamanho de fonte, contraste de cores, etc.)</li>
  </ul>
  </p>
  <p>Optamos por não incluir uma seção &ldquo;ajuda&rdquo; no blog  pelo fato da sua interface ter sido desenvolvida de forma clara e objetiva ao  usuário. </p>
  <p> Nas pesquisas realizadas com os usuários, foi  unânime a &ldquo;aprovação&rdquo; deles quanto à usabilidade e navegação do site, alguns  até relatando que foi muito fácil identificar as seções do site.</p>
  <h3>O processo de  montagem</h3>
  <h4>Definição de estruturas, layouts e público alvo</h4>
  <p>Após escolher o conteúdo do blog, já  definido pelo projeto do trabalho, analisamos como ele seria disposto. Discutimos  sobre os critérios de navegabilidade e firmou-se que seria feito da seguinte  forma:
  <ul>
    <li>Um logotipo no topo do site</li>
    <li>Um menu principal</li>
    <li>Um menu dos autores do site</li>
    <li>Conteúdo da pagina</li>
    <li>Rodapé</li>
  </ul>
  </p>
  <p> <strong>Topo:</strong> No topo seria de predominância o logotipo do site, com âncora à <a href=".">página inicial do site.</a> </p>
  <p> <strong>Menu principal:</strong> No menu principal os itens seriam:
  <ul>
    <li><a href="?p=curriculum">Curriculum Vitae</a></li>
    <li><a href="?p=letter">Letter of Presentation</a></li>
    <li><a href="?p=abstract">Abstract</a></li>
    <li><a href="?p=tecnology">Tecnology</a></li>
  </ul>
  </p>
  <p> <strong>Menu dos autores:</strong> Menu contendo os autores do site (esse menu foi descartado após a definição do layout). </p>
  <p> <strong>Conteúdo:</strong> Container onde fica as informações que o usuário quer ver. </p>
  <p> <strong>Rodapé:</strong> Informações acerca do site. </p>
  <h3>Definição de  layouts</h3>
  <p>Depois escolhemos os  esquemas que do nosso site, pensando sempre nos critérios de acesso  citados anteriormente. Vejamos a seguir os esquemas analisados:</p>
  <h4>Layout padrão: Monitores e Projetores</h4>
  <p> Este é o esquema padrão votado para ser adotado em nosso site para uso em monitores e projetores: </p>
  <p class="picture"> <img src="results/esquema1-pc.png" alt="Esquema 1 para monitores"> <span>Esquema para monitores: o site seria composto por uma moldura com largura fixa e laterais vazias redimensionavéis. Contém banner com o logo do site, menu principal, menu dos autores, conteúdo variável e rodapé.</span> </p>
  <p> Observamos que este layout se adaptaria muito bem ao site, porém o menu de autores ficaria fora de contexto em algumas áreas do site (como por exemplo a seção <a href="?p=abstract&u=forrestgump">abstract</a> e o <a href="?p=tecnology&u=videogame">artigo de tecnologia</a>). Além disso, o menu ocuparia grande espaço que poderia ser utilizado pelo texto de conteúdo. </p>
  <p> Então foi decidido pela remoção do menu, dando assim um espaço maior ao conteúdo principal. Com essas mudanças, o esquema ficou assim: </p>
  <p class="picture"> <img src="results/esquema2-pc.png" alt="Esquema 2 para monitores e projetores"> <span>Novo esquema para monitores e projetores: o conteúdo principal ficou mais amplo sem o menu de autores.</span> </p>
  <p> Depois de ter o layout esquematizado faltava apenas um item para definir a posição: <strong>comentários do blog</strong>. E como é padrão de todos os blogs, os comentários ficam abaixo do texto publicado. Com isso nosso esquema estava pronto para início de montagem do esqueleto principal do site. </p>
  <p class="picture"> <img src="results/esquema3-pc.png" alt="Esquema 3 para monitores e projetores"> <span>Esquema final para monitores e projetores: os comentários estão dispostos abaixo do texto</span> </p>
  <h4>Layout para dispositivos portáteis</h4>
  <p> Os dispositivos portáteis possui limitações técnicas para sites com volume grande de imagens e scripts. Por isso, resolvemos escolher um layout minimalista para uso nesses dispositivos: </p>
  <p class="picture"> <img src="results/esquema1-mobile.png" alt="Esquema para dispositivos portáteis" /> <span>Esquema minimalista para dispositivos portáteis</span> </p>
  <h4>Layout para navegadores com suporte fraco ao CSS</h4>
  <p>Para os navegadores  que não tem total suporte ao uso de CSS 2.1 resolvemos optar pelo uso do mesmo  layout usado para dispositivos móveis nesses browsers, com pequenas  modificações, para que o usuário tenha ao menos acesso ao conteúdo.</p>
  <p>A implantação de  hacks para renderizar o conteúdo em navegadores antigos é demorada, e a maioria  dos sites de hoje também já não oferecem mais suporte a esses navegadores.</p>
  <h4>Layout de impressão</h4>
  <p>Pensando nos recursos  de impressão, definimos que o esquema seria semelhante ao do layout padrão, mas  somente exibindo o título, o conteúdo e o rodapé, e ocultando o menu principal.</p>
  <h4>Outros tipos de dispositivos e acessibildade</h4>
  <p>Para outros  dispositivos apenas nos respaldamos pelo uso correto das normas W3C e de CSS. O  site é baseado nos padrões Web, sem uso de tabelas para layout nem de uso de  plugins adicionais, como Java ou Flash.</p>
  <p>O foco para criação  desse site é atender a todos os usuários que pretendem acessá-lo, sem  distinções.</p>
  <h3>Design</h3>
  <h4>Logotipo</h4>
  <p> Nosso objetivo ao  criar o banner foi dar uma aparência descontraída ao blog, mas sem exageros. O  puzzle usado nas letras transmite a ideia de construção, agregação e através  dele representamos a importância de cada conteúdo individual para o todo.</p>
  <p> As mascotes do site  foram escolhidas pelo seu significado: força.</p>
  <h4>Distribuição de conteúdo</h4>
  <p>Para o conteúdo foi definido que seria adotado o mesmo esquema para  todos os assuntos do site. Por exemplo, a seção de currículos tem uma página  onde lista todos os currículos publicados. Cada seção tem sua própria lista e  nela tem as páginas que podem ser visualizados da seção.</p>
  <p class="picture"> <img src="results/curriculum.png" alt="" /> <span></span> </p>
  <h4>Definição de cores</h4>
  <p>Escolhemos a cor azul porque ela transmite a sensação de tranquilidade e  combinamos a com branco, que é uma cor neutra e limpa, afim de não poluir o  layout do blog. Apostamos na simplicidade para podermos lançar mão de mais  detalhes posteriormente, destacando os pontos necessários.</p>
  <h3>O primeiro modelo</h3>
  <p class="picture"> <img src="results/screen1.png" alt="" /> <span>Primeiro modelo do site</span> </p>
  <p> A partir deste  primeiro modelo partimos para a montagem do site, onde foi observado o layout  feito em projeto, escrevendo manualmente as marcações HTML, e o posicionamento  e cores do conteúdo em CSS.</p>
  <p>Há alguns pontos  menores que seriam apenas definidos durante a criação do site, como linhas,  bordas, fontes e detalhes de cores. Estes itens foram definidos no esquema  &quot;escreva-e-avalie&quot;. Por isso, esses itens eram definidos em tempo de  criação, e avaliados conforme feitos.</p>
  <h3>O contato com o usuário</h3>
  <p>Para obter a opinião  dos usuários, divulgamos o nosso trabalho em uma conta no serviço&nbsp;<a href="http://www.host.sk/" target="_blank">Host.sk</a> (mais tarde migrado  para <a href="http://www.000webhost.com/">http://www.000webhost.com/</a>)&nbsp;e mandamos os  arquivos do site para serem hospedados. Após isso, pedimos a alguns contatos do  comunicador pessoal Windows Live Messenger e de redes sociais para que  opinassem sobre o nosso trabalho.</p>
  <p>A maioria relatou  coisas sem muita relevância como &quot;site bom&quot;, mas sem dar opções de  melhorias.</p>
  <p>Outros relataram  pontos que causaram modificações mais substanciais ao website, como:</p>
  <p><strong>Layout quebrado e  scripts não funcionais:&nbsp;</strong>O navegador padrão durante a criação do  site foi o Google Chrome, e nem sempre se pode testar todas as funcionalidades  durante essa fase inicial do projeto em todos os navegadores e dispositivos.  Por isso que é importante o teste em todos os navegadores, pois a gama de  browsers é muito grande.</p>
  <p><strong>Identificação do  ponto de navegação (Breadcrumb):&nbsp;</strong>Navegando por um determinado tempo no  site o usuário poderia se perder e não saber qual era a sua localização, pois  não havia uma forma clara de onde o usuário estava durante a navegação. Por  isso, implementamos o &ldquo;Breadcrumb&rdquo; (Navegação Estrutural - <a href="http://en.wikipedia.org/wiki/Breadcrumb_(navigation)">http://en.wikipedia.org/wiki/Breadcrumb_(navigation)</a>), que mostra onde o  usuário está na hierarquia do site, permitindo também que ele volte uma ou duas  páginas atrás sem ter que utilizar o botão voltar do navegador:</p>
  <p class="picture"> <img src="results/navmenu.png" /> <span>Barra de identificação de navegação estrutural (Breadcrumb): o usuário consegue, por cognição, identificar em que local do site está navegando</span> </p>
  <p> A alteração também foi feita na barra de títulos do navegador, que exibe a mesma estrutura. </p>
  <p><strong>Cores e fontes:&nbsp;</strong>Devido ao fato de serem  itens definidos durante o tempo de criação, insistimos aos usuários opinarem  sobre as cores e fontes do site. Quando um determinado item de mudança era de  opinião para mais pessoas, a alteração era feita.</p>
  <p class="picture"> <img src="results/screen2.png" /> <span>Modificação das cores: o banner e o rodapé foram estendidos, dando a aparência de ampliação do site. <br />
    A opinião para esta e várias mudanças partiu dos usuários. </span> </p>
  <p><strong>Tradução:&nbsp;</strong>O site está em  inglês, mas alguns usuários reclamaram que só entendem português. Para resolver  este problema, inserimos o menu do Google Tradutor na barra de navegação do  site. Assim, o usuário pode compreender o conteúdo do site em sua língua  nativa.</p>
  <p class="picture"> <img src="results/screen3.png" /> <span>Google Tradutor incluído no site</span> </p>
  <p><strong>Servidor:&nbsp;</strong>Alguns usuários observaram que o servidor <a href="http://www.host.sk/">host.sk</a> tinha problemas em determinadas horas do dia. Por  isso, mudamos o serviço de hospedagem para o&nbsp;<a href="http://www.000webhost.com/">000webhost.com</a>.</p>
</div>
