var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
  output.innerHTML = this.value;
}
 
function mascara(telefone){
  if(telefone.value.length == 0)
  telefone.value = '(' + telefone.value; 
  if(telefone.value.length == 3)
  telefone.value = telefone.value + ') ';
  if(telefone.value.length == 10)	
  telefone.value = telefone.value + '-';	

} 