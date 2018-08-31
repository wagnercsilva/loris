<?php
echo <<<HTML
<html lang="en">
<head>
  <title>1 Ano Loris</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body>
<script type="text/javascript" src="script.js"></script>

<div align="center" class="container">
  <h2 id="ola"></h2>
  
  <form method="POST" action="confirma.php">
  <p>Deseja confirmar sua presença ?</p>
    <label class="radio-inline">
      <input type="radio" name="optradio" id="optradio" onclick="exibe();" value="sim">Sim
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="nao" checked onclick="exibe();">Não
    </label>
	<input style="display:none" type="text" name="login" id="login">
	<input style="display:none" type="text" name="nmAcompanhante" id="nmAcompanhante">
	<input style="display:none" type="text" name="idAcompanhante" id="idAcompanhante">
	<input style="display:none" type="text" name="nmAcompanhanteMaior" id="nmAcompanhanteMaior">
	<br><br/>
	
	<div id="acompanhante" style="display:none">
		<p>Deseja adicionar acompanhante?</p>
		<label class="radio-inline">
		  <input type="radio" name="radio2" id="radio2" value="sim" onclick="exibeAcomp();" >Sim
		</label>
		<label class="radio-inline">
		  <input type="radio" name="radio2" value="nao" checked onclick="exibeAcomp();">Não
		</label>
	</div>
	<br>
	<div id="dadosAcom" class="panel panel-default" style="display:none">
    <div class="panel-heading">Acompanhante adulto</div>
    <div class="panel-body">
        
		
      	<div class="input-group control-group after-add-more">
			
			
			   <input type="text" name="addmore[]" class="form-control" placeholder="Informar Nome">
					  <div class="input-group-btn"> 
						<button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i></button>
					  </div>
			  </div>
		
 
        <div class="copy-fields hide">
          <div class="control-group input-group" style="margin-top:10px">
            <input type="text" name="addmore[]" class="form-control" placeholder="Informar Nome">
            <div class="input-group-btn"> 
              <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i></button>
            </div>
			<br>
			<br>
          </div>
		  
	</div>
  </div>
</div>

<div id ="divCrianca" style="display:none">
<div class="panel panel-default">
  <div class="panel-heading">Acompanhante criança</div>
  <div class="panel-body">
  <div id="education_fields">
  </div>
  <br>
  
  

    <input type="text" class="form-control" id="nomeCrianca" name="nomeCrianca[]" value="" placeholder="Informar nome">
  </div>



<div class="panel-body">

<div >
  <div class="form-group">
    <div class="input-group">
      <select class="form-control" id="idade" name="idade[]">
      
        <option value="">Idade</option>
		<option value="00">00</option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
		<option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
		<option value="09">09</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
      </select>
      <div class="input-group-btn">
        <button class="btn btn-success" type="button"  onclick="education_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
      </div>
    </div>
  </div>
</div>
<div class="clear"></div>
  
  </div>  
  </div>
 </div> 

	<label>
		<input type="submit" onclick="concatena();" value="continuar" id="continuar" name="continuar">
	</label>
  </form>
  <br>
  <br>
  <br>
  
</div>

</body>

</html>

HTML;
?>