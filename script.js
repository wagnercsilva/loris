	$(document).ready(function(){
    if(localStorage.getItem('nome')){            
        var nome = localStorage.getItem('nome');
		
		document.getElementById('login').value = nome;
		
		var msg = "Olá " + nome + " !";
		
		document.getElementById('ola').innerHTML = msg;
		
        localStorage.removeItem('nome');
    }
	
	$(".add-more").click(function(){ 
          var html = $(".copy-fields").html();
          $(".after-add-more").before(html);
      });
	  
      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });
	  
      });

	
	function exibe(){
		if( document.getElementById('optradio').checked ){	
			document.getElementById('acompanhante').removeAttribute("style");
		}else{
			document.getElementById('acompanhante').setAttribute("style", "display:none");
			document.getElementById('dadosAcom').setAttribute("style", "display:none");
			document.getElementById('divCrianca').setAttribute("style", "display:none");
			document.getElementsByName('radio2')[1].checked = true;
		}
	}
	
	function exibeAcomp(){
		if( document.getElementById('radio2').checked ){
			document.getElementById('dadosAcom').removeAttribute("style");
			document.getElementById('divCrianca').removeAttribute("style");
		}else{
			document.getElementById('dadosAcom').setAttribute("style", "display:none");
			document.getElementById('divCrianca').setAttribute("style", "display:none");
		}
	}
	
	function concatena(){
		var i = 0;
		var cont = document.getElementsByName('nomeCrianca[]').length;
		
		while(i < cont){
			document.getElementById('nmAcompanhante').value = document.getElementById('nmAcompanhante').value.concat(document.getElementsByName('nomeCrianca[]')[i].value + ", ");
			document.getElementById('idAcompanhante').value = document.getElementById('idAcompanhante').value.concat(document.getElementsByName('idade[]')[i].value + ", ");
			i++;
		}
		
		var j = 0;
		var cont2 = document.getElementsByName('addmore[]').length - 1;
		
		while(j < cont2){

			document.getElementById('nmAcompanhanteMaior').value = document.getElementById('nmAcompanhanteMaior').value.concat(document.getElementsByName('addmore[]')[j].value + ", ");
			j++;
		}
	}
		
	function validaNome(){
		if(document.getElementById('login').value == "" || document.getElementById('login').value == null){
				alert("Obrigatório informar nome");
			}else{
				document.getElementById("envia").submit(); 
			}
	}
	
var room = 1;
function education_fields() {
 
    room++;
    var objTo = document.getElementById('education_fields')
    var divtest = document.createElement("div");
	divtest.setAttribute("class", "form-group removeclass"+room);
	var rdiv = 'removeclass'+room;
    divtest.innerHTML = '<div class="form-group"><div id="education_fields"></div><div class="form-group"><div class="form-group"><input type="text" class="form-control" id="nomeCrianca" name="nomeCrianca[]" value="" placeholder="Informar nome"></div></div></div><div class="form-group"><div><div class="form-group"><div class="input-group"><select class="form-control" id="idade" name="idade[]"><option value="">Idade</option><option value="00">00</option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select><div class="input-group-btn"><button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></button></div></div></div></div><div class="clear"></div></div><br>';
    
    objTo.appendChild(divtest)
}
   function remove_education_fields(rid) {
	   $('.removeclass'+rid).remove();
   }