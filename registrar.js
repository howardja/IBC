
function opendatos(datosName) {
    var i;
    var x = document.getElementsByClassName("datos");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    document.getElementById(datosName).style.display = "block";  
}
function toogleRehabilitacion(x)
{
	if (x=="si") {
		document.getElementById("datosRehabilitacion").style.display = "block";  
	}
	else{
		document.getElementById("datosRehabilitacion").style.display = "none";
	}
}
var counter = 1;
var counterp = 1;
var limit = 3;

function addHabilidad(divName){
	var counter = 1;

     if (counter == limit)  {

          alert("maximo permitido " + counter + " ");

     }

     else {

          var newdiv = document.createElement('div');

          newdiv.innerHTML = "<input type='text' name='myInputs[]'>";

          document.getElementById(divName).appendChild(newdiv);

          counter++;

     }

}
function addPariente(tableName){
     if (counterp == limit)  {

          alert("maximo permitido " + counterp + " ");

     }

     else {

            var table = document.getElementById(tableName);
		    var row = table.insertRow(1);
		    var cell1 = row.insertCell(0);
		    var cell2 = row.insertCell(1);
		    var cell3 = row.insertCell(2);
		    var cell4 = row.insertCell(3);
		    var cell5 = row.insertCell(4);
		    var cell6 = row.insertCell(5);
		    var cell7 = row.insertCell(6);
		    var cell8 = row.insertCell(7);
		    var cell9 = row.insertCell(8);
		    cell1.innerHTML = "<input type='text' name='tipoParentesco'>";
		    cell2.innerHTML = "<input type='text' name='nombrePariente'>";
		    cell3.innerHTML = "<input type='text' name=''>";
		    cell4.innerHTML = "<input type='text' name=''>";
		    cell5.innerHTML = "<select><option value=''>ninguna</option><option value='pri'>primaria</option><option value='Femenino'>secundaria</option><option>tecnico</option><option>universitario</option><option>licenciatura</option></select>";
		    cell6.innerHTML = "<input type='text' name=''>";
		    cell7.innerHTML = "<input type='text' name=''>";
		    cell8.innerHTML = "<input type='date' name=''>";
		    cell9.innerHTML = "<input type='text' name=''>";

          counterp++;

     }

}
function actualizarDatosPersonales(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","actualizarAfiliado.php"+"?nombre1="+document.getElementById("nombre1").value+"&nombre2="+document.getElementById("nombre2").value+"&apellidoPaterno="+document.getElementById("apellidoPaterno").value+"&apellidoMaterno="+document.getElementById("apellidoMaterno").value+"&fechaRegistro="+document.getElementById("fechaRegistro").value+"&nacionalidad="+document.getElementById("nacionalidad").value+"&sigma="+document.getElementById("sigma").value+"&idiomaMaterno="+document.getElementById("idiomaMaterno").value+"&provinciaNacimiento="+document.getElementById("provinciaNacimiento").value+"&sexo="+document.getElementById("sexo").value+"&fechaNacimiento="+document.getElementById("fechaNacimiento").value+"&estadoCivil="+document.getElementById("estadoCivil").value+"&ci="+document.getElementById("ci").value,true);
        xmlhttp.send();
    }
}
function inssertarDatosPersonales(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","registrarAfiliado.php"+"?nombre1="+document.getElementById("nombre1").value+"&nombre2="+document.getElementById("nombre2").value+"&apellidoPaterno="+document.getElementById("apellidoPaterno").value+"&apellidoMaterno="+document.getElementById("apellidoMaterno").value+"&fechaRegistro="+document.getElementById("fechaRegistro").value+"&nacionalidad="+document.getElementById("nacionalidad").value+"&sigma="+document.getElementById("sigma").value+"&idiomaMaterno="+document.getElementById("idiomaMaterno").value+"&provinciaNacimiento="+document.getElementById("provinciaNacimiento").value+"&sexo="+document.getElementById("sexo").value+"&fechaNacimiento="+document.getElementById("fechaNacimiento").value+"&estadoCivil="+document.getElementById("estadoCivil").value+"&ci="+document.getElementById("ci").value,true);
        xmlhttp.send();
    }
}
function inssertarInformacionContacto(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","registrarInformacionContacto.php"+"?lugarResidencia="+document.getElementById("lugarResidencia").value+"&direccion="+document.getElementById("direccion").value+"&telefono="+document.getElementById("telefono").value+"&celular="+document.getElementById("celular").value+"&telefonoReferencia="+document.getElementById("telefonoReferencia").value+"&email="+document.getElementById("email").value+"&idAfiliado="+document.getElementById("idAfiliado").innerHTML,true);
        xmlhttp.send();
    }
}
function desplegarLugar() {
    
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("lugarNacimiento").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET","getLugar.php",true);
    xmlhttp.send();
}
function desplegarProvincia(departamentoId) {
    
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
	        	var select = document.getElementById("provinciaNacimiento");
				var length = select.options.length;
				for (i = 0; i < length; i++) {
				  select.options[i] = null;
				}
            document.getElementById("provinciaNacimiento").innerHTML = this.responseText;
            document.getElementById("provinciaNacimiento").style.display = "block";
        }
    };
    xmlhttp.open("GET","getProvincia.php?departamento="+departamentoId,true);
    xmlhttp.send();
}
function datosPersonales() {
    
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
                
            document.getElementById("datosPersonales").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET","datosPersonales.php?id="+document.getElementById("idAfiliado").innerHTML,true);
    xmlhttp.send();
}
