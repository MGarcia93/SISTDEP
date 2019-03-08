
//funcion para el submenu
$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
	if (!$(this).next().hasClass('show')) {
		$(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
	}
	var $subMenu = $(this).next(".dropdown-menu");
	$subMenu.toggleClass('show');


	$(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
		$('.dropdown-submenu .show').removeClass("show");
	});

	return false;
});


var c=1;


function findIndex(formId,inputName){
	// BUSCO EL INDEX DEL ELEMENTO CON EL NOMBRE PASADO ;
	var form = document.getElementById(formId);
	console.log(form.elements.length);
	for (var i = 0; i < form.elements.length; i++) {
		if (form.elements[i].name==inputName){
			return i;
		}
	}
}

function createLine(tableId,formId,inputName){
	var form = document.getElementById(formId);
	var table = document.getElementById(tableId);
	var cont = document.getElementById("contador");
	var contCell= table.rows[0].cells.length;
    var row = table.insertRow();
    var index=findIndex(formId,inputName);
    console.log(index);
    var n=0;
    var inputBase;
    while(n<contCell){

    	var cell = row.insertCell();
    	inputBase=form.elements[index+n];
    	// HAGO UN CLON DEL INPUT BUSCADO PARA TENER OTRO IGUAL CON NOMBRE DISTINTO
    	var input=inputBase.cloneNode(true);
    	input.name=input.name+c;
    	cell.appendChild(input);
    	n++;
    }
    cont.value=c;
    c+=1;

}
 

//funcion para la apertura de una ventana
function openWindows() {
     window.open('', 'popup', 'width = 600, height = 400');
}
