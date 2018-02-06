<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        Post::create([
            'title' => 'Abertas inscrições para PROIFPE no Campus Abreu e Lima',
            'caption' => 'Interessados devem comparecer ao campus até dia 02 de fevereiro; são oferecidas 30vagas',
            'thumbnail' => '',
            'user_id' => 1,
            'text' => '',
        ]);
        */
        Post::create([
            'title' => 'CRE divulga calendário de matrícula 2018.1 para estudantes veteranos',
            'caption' => 'Os processos de renovação começam dia 14 de janeiro.',
            'thumbnail' => '095856201802015a730f101980f.png',
            'user_id' => 1,
            'text' => '<p><img alt="" src="/laravel-filemanager/photos/1/bba2ed3f-2672-4893-89e5-85f1bd5a69fd.png" style="float:left; height:138px; margin:5px 10px; width:230px" /></p>

            <p>&nbsp;</p>
            
            <p>A Coordena&ccedil;&atilde;o de Registro Escolar (CRE) divulgou nesta ter&ccedil;a-feira (02) o Calend&aacute;rio de Matr&iacute;cula, Trancamento e Reintegra&ccedil;&atilde;o dos estudantes veteranos para o ano de 2018. N&atilde;o percam os prazos!</p>
            
            <p>&nbsp;</p>
            
            <p>&nbsp;</p>
            
            <p>Seguem as datas de renova&ccedil;&atilde;o e eventos ligados &agrave; matr&iacute;cula do&nbsp;<em>Campus</em>&nbsp;Pesqueira.</p>
            
            <p>&nbsp;</p>
            
            <p>14 a 21/01/2018 - Renova&ccedil;&atilde;o de matr&iacute;cula, exclusivamente&nbsp;<em>on-line</em>,<em>&nbsp;</em>no Q-Acad&ecirc;mico,&nbsp;para os alunos veteranos dos cursos Integrados, Subsequentes e Superiores.</p>
            
            <p>15 a 19/01/2018- matr&iacute;cula v&iacute;nculo. Local: CRE. Hor&aacute;rio: manh&atilde;: 9h &agrave;s 12h. Tarde: 14h &agrave;s 17h.&nbsp;</p>
            
            <p>A matr&iacute;cula v&iacute;nculo &eacute; a matr&iacute;cula realizada de forma&nbsp;<strong>presencial</strong>,&nbsp;</p>
            
            <p>I - quando n&atilde;o forem oferecidos os componentes curriculares solicitados pelo estudante;</p>
            
            <p>II - quando o estudante tiver cursado todos os componentes curriculares e n&atilde;o tiver conclu&iacute;do o Est&aacute;gio Supervisionado ou o Trabalho de Conclus&atilde;o de Curso &ndash; TCC, desde que n&atilde;o</p>
            
            <p>ultrapasse o per&iacute;odo m&aacute;ximo de conclus&atilde;o do curso.</p>
            
            <p>&nbsp;</p>
            
            <p>15 a 19/01/2018 - Trancamento e reabertura de matr&iacute;cula.</p>
            
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Local:&nbsp; CRE - Bloco D - Sala 02.&nbsp;</p>
            
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Hor&aacute;rio: Manh&atilde;: 9h &agrave;s 12h.&nbsp;</p>
            
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Tarde: 14h &agrave;s 17h.</p>
            
            <p>&nbsp;</p>
            
            <p>22 a 31/01/2018 - Per&iacute;odo para solicitar reintegra&ccedil;&atilde;o.</p>
            
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Local:&nbsp; CRE - Bloco D - Sala 02.</p>
            
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Hor&aacute;rio: Manh&atilde;: 9h &agrave;s 12h.&nbsp;</p>
            
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Tarde: 14h &agrave;s 17h.</p>
            
            <p>&nbsp;</p>
            
            <p>22 a 31/01/2018 - Per&iacute;odo para solicitar matr&iacute;cula em disciplinas - cursos Subsequentes e Superiores.</p>
            
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Local:&nbsp; CRE - Bloco D - Sala 02.</p>
            
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Hor&aacute;rio: Manh&atilde;: 9h &agrave;s 12h.&nbsp;</p>
            
            <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Tarde: 14h &agrave;s 17h.</p>',
        ]);
        Post::create([
            'title' => 'Campus Pesqueira promove o IFérias do IFPE',
            'caption' => 'A programação é gratuita e aberta ao público interno e externo',
            'thumbnail' => null,
            'user_id' => 1,
            'text' => '<p>O Campus Pesqueira elaborou uma programa&ccedil;&atilde;o especial para o&nbsp; IF&eacute;rias do IFPE. &Eacute; aberto a toda comunidade e &eacute; tudo gratuito.</p>

            <p>Confira a programa&ccedil;&atilde;o completa <a href="http://www.ifpe.edu.br/campus/pesqueira/noticias/campus-pesqueira-promove-o-iferias-do-ifpe/programacao-de-ferias.pdf" target="_self">aqui.</a></p>',
        ]);
        Post::create([
            'title' => 'Oportunidade de emprego - Dezessete vagas de professor para atuarem no Pronatec',
            'caption' => 'As inscrições são gratuitas e devem ser feitas, exclusivamente, pelo site www.pronatec.ifpe.edu.br',
            'thumbnail' => '094740201802015a730c6c0d75f.png',
            'user_id' => 1,
            'text' => '<p><img alt="" src="/laravel-filemanager/photos/1/pronatec.png" style="border-style:solid; border-width:0px; float:left; height:138px; margin:5px 10px; width:230px" />O IFPE Campus Pesqueira est&aacute; ofertando dezessete vagas para professores atuarem no Programa Nacional de Acesso ao Ensino T&eacute;cnico e Emprego (Pronatec). As inscri&ccedil;&otilde;es come&ccedil;am nesta segunda-feira (15) e seguem at&eacute; o dia 19 de janeiro. O per&iacute;odo de contrato &eacute; de um ano e os aprovados atuar&atilde;o na cidade de Pesqueira no pr&oacute;prio Campus e no distrito ind&iacute;gena de Pesqueira, na Aldeia P&eacute; de Serra dos Nogueiras.</p>

            <p><strong>Confira =&gt;<a href="http://www.ifpe.edu.br/campus/pesqueira/noticias/oportunidade-de-emprego-dezessete-vagas-de-professor-para-atuarem-no-pronatec/edital-externo-docentes-pesqueira-agricultor_familiar_e_irrigacao__g7yerw9.pdf" target="_self"> Edital 01/2018</a></strong></p>
            
            <p>As inscri&ccedil;&otilde;es s&atilde;o gratuitas e devem ser feitas, exclusivamente, pelo site <a href="http://www.pronatec.ifpe.edu.br/" target="_blank">www.pronatec.ifpe.edu.br</a> . No ato de inscri&ccedil;&atilde;o, devem ser anexados os documentos comprobat&oacute;rios que est&atilde;o expostos no edital, entre eles, c&oacute;pia de RG, CPF, comprovante de vota&ccedil;&atilde;o das duas &uacute;ltimas elei&ccedil;&otilde;es, c&oacute;pias comprobat&oacute;rias das titula&ccedil;&otilde;es acad&ecirc;micas e experi&ecirc;ncias profissionais, dentre outros.</p>
            
            <p>Os selecionados trabalhar&atilde;o numa carga hor&aacute;ria m&aacute;xima de 16 horas semanais e a remunera&ccedil;&atilde;o ser&aacute; de R$ 50,00 (cinquenta reais) a hora. Vale destacar, que o candidato poder&aacute; se inscrever em at&eacute; quatro c&oacute;digos, ainda que em diferentes encargos</p>
            
            <p>As exig&ecirc;ncias m&iacute;nimas para concorrer &agrave;s vagas para lecionar no curso de agricultura familiar s&atilde;o as seguintes gradua&ccedil;&otilde;es: ci&ecirc;ncia da computa&ccedil;&atilde;o, sistemas de informa&ccedil;&atilde;o, engenharia da computa&ccedil;&atilde;o, an&aacute;lise e desenvolvimento ou t&eacute;cnico em inform&aacute;tica.</p>
            
            <p>J&aacute; para atuarem no curso de operador de sistemas de irriga&ccedil;&atilde;o s&atilde;o necess&aacute;rias ter as seguintes gradua&ccedil;&otilde;es: gest&atilde;o ambiental, ci&ecirc;ncias biol&oacute;gicas, licenciatura em biologia, geografia, tecn&oacute;logo em saneamento, tecn&oacute;logo em gest&atilde;o ambiental, t&eacute;cnico em meio ambiente, agronomia, ci&ecirc;ncias agr&aacute;rias, engenharia florestal, engenharia agr&iacute;cola, administra&ccedil;&atilde;o, t&eacute;cnico em administra&ccedil;&atilde;o, engenharia de alimentos, tecn&oacute;logo em alimentos ou tecn&oacute;lofo em irriga&ccedil;&atilde;o.</p>
            
            <p>Os resultados preliminares ser&atilde;o divulgados no dia 22/01.</p>
            
            <p>O edital est&aacute; dispon&iacute;vel <a href="http://www.ifpe.edu.br/campus/pesqueira/noticias/oportunidade-de-emprego-dezessete-vagas-de-professor-para-atuarem-no-pronatec/edital-externo-docentes-pesqueira-agricultor_familiar_e_irrigacao__g7yerw9.pdf" target="_self">aqui</a> ou no pronatec.ifpe.edu.br</p>',
        ]);
        Post::create([
            'title' => 'Professores do IFPE Campus Pesqueira participam de Encontro Pedagógico 2018.1',
            'caption' => 'O tema central do encontro deste ano será sobre “Olhar a prática: Um exercício de reflexão”.',
            'thumbnail' => '094519201802015a730bdf68ccf.jpeg',
            'user_id' => 1,
            'text' => '<p><img alt="" src="/laravel-filemanager/photos/1/encontro.jpeg" style="float:left; height:138px; margin:5px 10px; width:230px" />Acontece nesta pr&oacute;xima quinta-feira (1&ordm;), o Encontro Pedag&oacute;gico 2018.1, promovido pelo IFPE Campus Pesqueira. Um caf&eacute; da manh&atilde; e momento de integra&ccedil;&atilde;o entre os docentes abrir&atilde;o o evento. As aulas iniciam dia (2) para mais de 1.500 estudantes dos cursos t&eacute;cnicos integrados e subsequentes de eletrot&eacute;cnica e edifica&ccedil;&otilde;es, al&eacute;m dos cursos de f&iacute;sica, matem&aacute;tica, enfermagem e engenharia el&eacute;trica.</p>

            <p><strong>Programa&ccedil;&atilde;o completa =&gt; <a href="http://www.ifpe.edu.br/campus/pesqueira/noticias/professores-do-ifpe-campus-pesqueira-participam-de-encontro-pedagogico-2018-2.1/programacao-encontro-pedagogico-2018-1-campus-pesqueira.pdf" target="_self">Encontro Pedag&oacute;gico 2018.1</a></strong></p>
            
            <p>O tema central do encontro dos professores deste ano ser&aacute; sobre &ldquo;Olhar a pr&aacute;tica: Um exerc&iacute;cio de reflex&atilde;o&rdquo;. A abertura est&aacute; prevista para &agrave;s 9h, com a presen&ccedil;a do Diretor Geral Valdemir Mariano e da Diretora de Ensino, Kalina C&uacute;rie.</p>
            
            <p>&Agrave;s 10h 30 iniciar&aacute; discuss&otilde;es sobre a dimens&atilde;o do trabalho docente no Campus Pesqueira proferidas pelos seguintes docentes e t&eacute;cnicos administrativos: Manuel Henrique, Departamento de Inova&ccedil;&atilde;o, Pesquisa e P&oacute;s-Gradua&ccedil;&atilde;o; Poliana Mendon&ccedil;a, Deparamento de Administra&ccedil;&atilde;o; Anic&eacute;lia Ferreira, Departamento de Exten&ccedil;&atilde;o; Kelderlange Bezerra, Assessoria Pedag&oacute;gica; M&aacute;rio Monteiro, Pr&oacute;-Reitoria de Pesquisa, P&oacute;s-Gradua&ccedil;&atilde;o e Inova&ccedil;&atilde;o.</p>
            
            <p>Ainda no per&iacute;odo da manh&atilde;, est&atilde;o previstos encontros setoriais com as coordena&ccedil;&otilde;es dos cursos de edifica&ccedil;&otilde;es, eletrot&eacute;cnica, forma&ccedil;&atilde;o geral e PROEJA, f&iacute;sica, matem&aacute;tica, enfermagem e engenharia el&eacute;trica.</p>
            
            <p>&Agrave; tarde, haver&aacute; grupos de trabalhos por tipo de curso e ocorrer&aacute; tamb&eacute;m um painel de debates sobre experi&ecirc;ncias exitosas no &acirc;mbito da pr&aacute;tica docente nesses 25 anos do Campus Pesqueira.</p>
            
            <p>De acordo com Kalina C&uacute;rie, Diretora de Ensino, o momento ser&aacute; de enriquecimento exitosas vivenciadas ao longo desses anos no Campus Pesqueira. &ldquo;A proposta &eacute; fazer uma retrospectiva das pr&aacute;ticas, dos avan&ccedil;os e desafios vividos durante as suas trajet&oacute;rias na institui&ccedil;&atilde;o, para que assim possamos planejar a&ccedil;&otilde;es e pr&aacute;ticas para o ano de 2018 e para os pr&oacute;ximos anos. O relato seria enriquecido com a participa&ccedil;&atilde;o dos demais docentes presentes, numa din&acirc;mica que envolvesse os veteranos e os rec&eacute;m-chegados ao Campus.&rdquo;, declarou C&uacute;rie.</p>',
        ]);
        Post::create([
            'title' => 'SiSU | Matrícula será de 05 a 07 de fevereiro',
            'caption' => 'Matrículas para convocados no IFPE acontecem de 05 a 07 de fevereiro nos campi Barreiros, Pesqueira e Recife',
            'thumbnail' => '093345201802015a730929b6d8f.png',
            'user_id' => 1,
            'text' => '<p><img alt="" src="/laravel-filemanager/photos/1/sisu.png" style="float:left; height:138px; margin:5px 10px; width:230px" />Foi divulgado, nesta segunda-feira (29), o resultado da chamada regular do Sistema de Sele&ccedil;&atilde;o Unificada (SiSU) 2018. Neste ano, o IFPE ofereceu 384 vagas em cursos superiores presenciais com ingresso no segundo semestre em Barreiros, Pesqueira e Recife. As pessoas convocadas devem realizar a matr&iacute;cula no per&iacute;odo de 05 a 07 de fevereiro no campus de oferta do curso para o qual foram aprovadas.</p>

            <p>No Campus Barreiros, localizado na Fazenda Sap&eacute;, s/n, Zona Rural, Barreiros, na Zona da Mata Sul, o hor&aacute;rio de atendimento &eacute; das 14h &agrave;s 17h. No Agreste, no Camus Pesqueira, situado na BR 232, km 208, Prado, o hor&aacute;rio &eacute; das 9h &agrave;s 12h. J&aacute; no Campus Recife, na Avenida Professor Luiz Freire, 500, Curado, as matr&iacute;culas podem ser realizadas das 9h &agrave;s 12h e das 14h &agrave;s 17h.</p>
            
            <p>A rela&ccedil;&atilde;o completa de documentos exigidos para matr&iacute;cula est&aacute; especificada no Termo de Ades&atilde;o do IFPE.&nbsp; No caso de cotistas, quando necess&aacute;rio, &eacute; preciso, ainda, assinar as declara&ccedil;&otilde;es especificadas nos Anexos IV, V, VI e VII do edital SiSU/IFPE 2018.</p>
            
            <p><strong>&gt;&gt; Confira abaixo:</strong></p>
            
            <ul>
                <li><a href="http://sisu.mec.gov.br/" target="_blank"><strong>Resultado SiSU 2018 &ndash; Chamada Regular</strong></a></li>
                <li><strong><a href="http://www.ifpe.edu.br/ingresso/estude-no-ifpe/sisu/termo_adesao_1809_ifpe_edicao-2018-1.pdf" target="_blank">Termo de Ades&atilde;o IFPE</a></strong></li>
                <li><strong><a href="http://www.ifpe.edu.br/ingresso/estude-no-ifpe/sisu/edital-ndeg-004-de-18-01-2018_-sisu_chamda-regular_2018-3.pdf" target="_self">Edital n&ordm; 04/2018</a>&nbsp;(Atualizado em 30.01.2018)</strong></li>
            </ul>',
        ]);
    }
}
