<?php 
//include_once "../_php/conection.php";
$con=mysqli_connect("localhost","root","vertrigo");
mysqli_select_db($con,"calendario");
$avarat = " ";
if (isset($_POST["mtfa"])){
    $dia=$_POST['mdia'];
    $mater=$_POST['cmat'];
    $tarefa=$_POST['mtfa'];
    $maccabeus = $mater.": ".$tarefa;

    $conferir14="SELECT * FROM t_junho WHERE Day = $dia";
    //$conferir3="SELECT * FROM t_junho WHERE  Day=$dia and Tarefa3 = NULL";
    $conferir1="SELECT * FROM t_junho WHERE Day = $dia ";
    #Aqui verifica se o Tarefa2 é diferente de NULL, ou seja, está preenchido.
    
    $resp1=mysqli_query($con,$conferir1);
   // $resp23=mysqli_query($con,$conferir23);
    $resp14=mysqli_query($con,$conferir14);

    $lin1=mysqli_num_rows($resp1);
    //$lin23=mysqli_num_rows($resp23);
    $lin14=mysqli_num_rows($resp14);

        if ($lin14 == '0') { #Se não tiver nenhuma coluna, ou seja, o número for igual a 0, ela cria uma coluna nova.
            $sql="INSERT INTO t_junho (Day, Tarefa) VALUES ($dia,'$maccabeus')";  #aqui ele seta para criar uma nova coluna, com o dia e a tarefa apresentada
            $res=mysqli_query($con,$sql);  #aqui ele cria definitivamente
        }
        if ($lin14 == '1' ) {
            $up2="UPDATE t_junho SET Tarefa2='$maccabeus' WHERE Day=$dia";
            $rato2=mysqli_query($con,$up2);
        }
}

if(isset($_POST["apg"])){
    $apaga=$_POST['apg'];
    $conferir2="SELECT * FROM t_junho WHERE Day = $apaga";
    $resp2=mysqli_query($con,$conferir2);
    $lin2=mysqli_num_rows($resp2);
    echo $apaga;
        if ($lin2 > 0){
            $handel="DELETE FROM t_junho WHERE Day = $apaga";
            $queapg=mysqli_query($con,$handel);
            $avarat="Apagado com sucesso!";
            print "<script>alert('APAGADO COM SUCESSO!')</script>";
        } else {
            print "<script>alert('DADO NÃO ENCONTRADO!')</script>";
        }
    //$consultat="SELECT * FROM t_junho WHERE Day ='1'";
    //$cvc=$mysqli->query($consultat) or die($mysqli->error);
}
function listar_mensagem($lday){
    $con=mysqli_connect("localhost","root","vertrigo");
    mysqli_select_db($con,"calendario"); 
    $sql72 = "SELECT Tarefa, Tarefa2 FROM t_junho WHERE Day = $lday";
    $resultado23 = mysqli_query($con,$sql72);
    $row= mysqli_num_rows($resultado23);
	if($row > 0 ){
		while( $linha = mysqli_fetch_array($resultado23) ){
            $tf1=$linha['Tarefa'];
            $tf2=$linha['Tarefa2'];
            $mensagens = $tf2."<br> ".$tf1." ";
            return $mensagens;
		}
	}
	else{
		//echo 'erro';
	}
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Junho</title>
    <link href="../commands.php">
    <link rel="stylesheet" href="../_css/_estilo.css"/>   
    <link rel="stylesheet" href="../_css/_calendario.css">
    <script src="../_js/commands.js"></script>
</head>
<body>
<header id="masc">
    <a id="logus" href="https://www.heineken.com/br/agegateway?returnurl=%2f" target="_blank">Maccabeus</a>
<nav id="maccabeus">
    <a href="janeiro.php">Janeiro</a>
    <a href="fevereiro.php">Fevereiro</a>
    <a href="marco.php">Março</a>
    <a href="abril.php">Abril</a>
    <a href="maio.php">Maio</a>
    <a href="junho.php">Junho</a>
    <a href="julho.php">Julho</a>
    <a href="agosto.php">Agosto</a>
    <a href="setembro.php">Setembro</a>
    <a href="outubro.php">Outubro</a>
    <a href="novembro.php">Novembro</a>
    <a href="dezembro.php">Dezembro</a>
</nav>
</header>
<h1 id="titulomes">Junho</h1>
<p>oba</p><br>
<p>oba</p><br>
<p>oba</p><br>
<p>oba</p><br>
<div id="corpo">
<p id="titulomes">Junho</p>
<p class="yoda">Olá, seja bem vindo ao caléndario, aqui se encontra as tarefas do més de Junho.</p><br>
<?php
    $dia1 = listar_mensagem("1");$ju1d=isset($dia1)?$dia1:1;
    $dia2 = listar_mensagem("2");$ju2d=isset($dia2)?$dia2:2;
    $dia3 = listar_mensagem("3");$ju3d=isset($dia3)?$dia3:3;
    $dia4 = listar_mensagem("4");$ju4d=isset($dia4)?$dia4:4;
    $dia5 = listar_mensagem("5");$ju5d=isset($dia5)?$dia5:5;
    $dia6 = listar_mensagem("6");$ju6d=isset($dia6)?$dia6:6;
    $dia7 = listar_mensagem("7");$ju7d=isset($dia7)?$dia7:"7-Sem aula";//
    $dia8 = listar_mensagem("8");$ju8d=isset($dia8)?$dia8:8;
    $dia9 = listar_mensagem("9");$ju9d=isset($dia9)?$dia9:9;
    $dia10 = listar_mensagem("10");$ju10d=isset($dia10)?$dia10:10;
    $dia11 = listar_mensagem("11");$ju11d=isset($dia11)?$dia11:11;
    $dia12 = listar_mensagem("12");$ju12d=isset($dia12)?$dia12:12;
    $dia13 = listar_mensagem("13");$ju13d=isset($dia13)?$dia13:13;
    $dia14 = listar_mensagem("14");$ju14d=isset($dia14)?$dia14:"14-Sem aula";//
    $dia15 = listar_mensagem("15");$ju15d=isset($dia15)?$dia15:15;
    $dia16 = listar_mensagem("16");$ju16d=isset($dia16)?$dia16:16;
    $dia17 = listar_mensagem("17");$ju17d=isset($dia17)?$dia17:17;
    $dia18 = listar_mensagem("18");$ju18d=isset($dia18)?$dia18:18;
    $dia19 = listar_mensagem("19");$ju19d=isset($dia19)?$dia19:19;
    $dia20 = listar_mensagem("20");$ju20d=isset($dia20)?$dia20:20;
    $dia21 = listar_mensagem("21");$ju21d=isset($dia21)?$dia21:"21-Sem aula";//
    $dia22 = listar_mensagem("22");$ju22d=isset($dia22)?$dia22:22;
    $dia23 = listar_mensagem("23");$ju23d=isset($dia23)?$dia23:23;
    $dia24 = listar_mensagem("24");$ju24d=isset($dia24)?$dia24:24;
    $dia25 = listar_mensagem("25");$ju25d=isset($dia25)?$dia25:25;
    $dia26 = listar_mensagem("26");$ju26d=isset($dia26)?$dia26:26;
    $dia27 = listar_mensagem("27");$ju27d=isset($dia27)?$dia27:27;
    $dia28 = listar_mensagem("28");$ju28d=isset($dia28)?$dia28:"28-Sem aula";
    $dia29 = listar_mensagem("29");$ju29d=isset($dia29)?$dia29:29;
    $dia30 = listar_mensagem("30");$ju30d=isset($dia30)?$dia30:30;
    $dia31 = listar_mensagem("31");$ju31d=isset($dia31)?$dia31:31;
?>
<p class="yoda">Se tiver alguma tarefa que não está colocada no calédario, por favor, adicione!</p><br>
<br><br>
<p id="workk">Tarefa</p>
<div id="aobis">
<table id="tabela">
    <tr><td class="sd">Domingo</td><td class="sd">Segunda</td><td class="sd">Terça</td><td class="sd">Quarta</td><td class="sd">Quinta</td><td class="sd">Sexta</td><td class="sd">Sábado</td></tr>
    <tr><td id="1d" class="si"><?php echo"";?></td><td id="1d" class="se"><?php echo"$ju1d ";?></td><td id="2d" class="se"><?php echo"$ju2d ";?></td><td id="3d" class="se"><?php echo"$ju3d ";?></td><td id="4d" class="se"><?php echo"$ju4d ";?></td><td id="5d" class="se"><?php echo"$ju5d ";?></td><td id="6d" class="so"><?php echo"$ju6d ";?></td></tr>
    <tr><td id="7d" class="si"><?php echo"$ju7d ";?></td><td id="8d" class="se"><?php echo"$ju8d ";?></td><td id="9d" class="se"><?php echo"$ju9d ";?></td><td id="10d" class="se"><?php echo"$ju10d ";?></td><td id="11d" class="se"><?php echo"$ju11d ";?></td><td id="12d" class="se"><?php echo"$ju12d ";?></td><td id="13d" class="so"><?php echo"$ju13d ";?></td></tr>
    <tr><td id="14d" class="si"><?php echo"$ju14d ";?></td><td id="15d" class="se"><?php echo"$ju15d ";?></td><td id="16d" class="se"><?php echo"$ju16d ";?></td><td id="17d" class="se"><?php echo"$ju17d ";?></td><td id="18d" class="se"><?php echo"$ju18d ";?></td><td id="19d" class="se"><?php echo"$ju19d ";?></td><td id="20d" class="so"><?php echo"$ju20d ";?></td></tr>
    <tr><td id="21d" class="si"><?php echo"$ju21d ";?></td><td id="22d" class="se"><?php echo"$ju22d ";?></td><td id="23d" class="se"><?php echo"$ju23d ";?></td><td id="24d" class="se"><?php echo"$ju24d ";?></td><td id="25d" class="se"><?php echo"$ju25d ";?></td><td id="26d" class="se"><?php echo"$ju26d ";?></td><td id="27d" class="so"><?php echo"$ju27d ";?></td></tr>
    <tr><td id="28d" class="si"><?php echo"$ju28d ";?></td><td id="29d" class="se"><?php echo"$ju29d ";?></td><td id="30d" class="se"><?php echo"$ju30d ";?></td></tr>
</table>
</div>
<br>
<br>
<br><br>
<p class="baxx">Para adicionar alguma tarefa, basta ir ao campo aqui abaixo.</p>
<p class="baxx">se não souber usar, recomendo que não tente.</p>
<p class="baxx">Mas caso houver alguma dúvida, é auto-explicativo.</p>
<br>
<br>
<br>
<br>
<div id="forms">
<div id="forms">
<form id="fform" name="fcad" method="POST" action="">
 <fieldset id="mat">
    <legend id="anot">Anotações da Tarefa</legend>
     <label class="color" for="cmat" id="cmat">Matéria:</label><br>
     <select name="cmat" id="cmat">
         <option value="Mat" id="mat">Matématica</option>
         <option value="Port" id="port">Português</option>
         <option value="Geo" id="geo" >Geografia</option>
         <option value="Esp" id="esp" >Espanhol</option>
         <option value="Bio" id="bio" >Biologia</option>
         <option value="Fis" id="fis" >Física</option>
         <option value="Qui" id="qui" >Quimica</option>
         <option value="His" id="his" >História</option>
         <option value="Fil" id="fil" >Filosofia</option>
         <option value="Soc" id="soc" >Sociologia</option>
         <option value="Ing" id="ing" >Ingles</option>
         <option value="DDW" id="ddw" >DDW</option>
         <option value="LPI" id="lpi" >LPI</option>
         <option value="Carl" id="carl" >Carlao</option>
     </select>

     <label class="color" for="mtfa"><br><br>Tarefa:</label>
        <input type="text" name="mtfa" id="txt" placeholder="Digite a tarefa:">

        <label class="color" for="mdia" id="mdia"><br><br>Dia:</label>
        <select name="mdia" id="mdia">
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            <option value='4'>4</option>
            <option value='5'>5</option>
            <option value='6'>6</option>
            <option value='7'>7</option>
            <option value='8'>8</option>
            <option value='9'>9</option>
            <option value='10'>10</option>
            <option value='11'>11</option>
            <option value='12'>12</option>
            <option value='13'>13</option>
            <option value='14'>14</option>
            <option value='15'>15</option>
            <option value='16'>16</option>
            <option value='17'>17</option>
            <option value='18'>18</option>
            <option value='19'>19</option>
            <option value='20'>20</option>
            <option value='21'>21</option>
            <option value='22'>22</option>
            <option value='23'>23</option>
            <option value='24'>24</option>
            <option value='25'>25</option>
            <option value='26'>26</option>
            <option value='27'>27</option>
            <option value='28'>28</option>
            <option value='29'>29</option>
            <option value='30'>30</option>
            <option value='31'>31</option>
    </select>
    <br>
    <br>
    <button>Enviar</button>
</form>


    <form method="POST" action="">
     <fieldset id="mat">
        <legend>APAGAR</legend>
        <p style="color: red">AVISO!!!</p>
        <p style="color: aquamarine;"class="alert">Use isso apenas se ESCREVEU algo errado, caso tenha apagado errado, RECOLOQUE! Thanks</p>
        <label class="color" for="apg" id="apg">Dia:</label>
        <select name="apg" id="apg">
           <option value='' >NADA</option>
            <option value='1' >1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            <option value='4'>4</option>
            <option value='5'>5</option>
            <option value='6'>6</option>
            <option value='7'>7</option>
            <option value='8'>8</option>
            <option value='9'>9</option>
            <option value='10'>10</option>
            <option value='11'>11</option>
            <option value='12'>12</option>
            <option value='13'>13</option>
            <option value='14'>14</option>
            <option value='15'>15</option>
            <option value='16'>16</option>
            <option value='17'>17</option>
            <option value='18'>18</option>
            <option value='19'>19</option>
            <option value='20'>20</option>
            <option value='21'>21</option>
            <option value='22'>22</option>
            <option value='23'>23</option>
            <option value='24'>24</option>
            <option value='25'>25</option>
            <option value='26'>26</option>
            <option value='27'>27</option>
            <option value='28'>28</option>
            <option value='29'>29</option>
            <option value='30'>30</option>
            <option value='31'>31</option>
        </select>
        <br>
        <br>
        <button>APAGAR</button>
    </fieldset>
    <p id="senta"></p>
    <tr>
    <p style="color: blue;"><?php echo "$avarat"; ?> </p>
</form>
</div>
<p id="helps">Como usar?</p>
<p class="txhelp">Olá, no campo acima será escrito o conteúdo das tarefas, para, poteriormente, ser impresso no caléndario.</p><br>
<p class="txhelp">Primeiramente, coloque no campo: "Matéria", a matéria a qual pertence a tarefa que será colocada.</p>
<p class="txhelp">Logo em seguida, coloque no campo: "Tarefa", a tarefa de fato, como, págida, trabalho, etc.</p>
<p class="txhelp">Ja no campo "Dia", coloque o dia determinado para o recebimento da tarefa de fato.</p>
<p class="txhelp">Agora preste muita atenção! </p>
<p class="txhelp">Para não "bugar" o site, coloque no campo: "número", o número correspondente da tarefa no dia.</p>
<p class="txhelp">Por exemplo: se no dia teve 2 tarefas (Português, Matematica ), a primeira tarefa (Matématica) </p>
<p class="txhelp">com a caixa "Número:1" marcada, e a proxíma tarefa (Português) com a caixa "Número:2".</p><br>
<p class="txhelp">Tire bom proveito, ajuda aos coleguinhas</p>
</div>
<footer id="foot">
    <div id="mac">
    <p id="fot">By: Hakimoto &copy; </p>
    </div>
</footer>
</body>
</html>