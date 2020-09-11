// COPY

function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  alert("Well done padawan, your message is copied : " + copyText.value);
}



document.addEventListener("DOMContentLoaded", function() {

    //  RANDOM DECALAGE

    [].forEach.call(document.querySelectorAll("#avant-input-btn-group-decalage"), function(el) {
    el.addEventListener('click', function() {
        var randomDecalage = "";
        while(randomDecalage == "" || randomDecalage == 0 || randomDecalage == -0 || randomDecalage == 1 || randomDecalage == -1 || isNaN(randomDecalage)) {
            var chiffre = [0,1,2,3,4,5,6,7,8,9];
            var randomDecalageNegatif = Math.round(Math.random());
            var nombreChiffreComposantRandomDecalage = Math.round(Math.random()*3.3);
            var randomDecalageAr = new Array(nombreChiffreComposantRandomDecalage + randomDecalageNegatif);
            if(randomDecalageNegatif == 1) {
                randomDecalageAr[0] = "-";
            };
            for(var i=randomDecalageNegatif ; i<randomDecalageAr.length ; i++) {
                randomDecalageAr[i] = Math.round(Math.random()*9);
            };
            randomDecalage = parseFloat(randomDecalageAr.join(""));
        };
        document.querySelector("#input-decalage").setAttribute("value", randomDecalage);
    })
    })
});

//Fonction petit oeil password
        function Toggle() { 
            var temp = document.getElementById("password"); 
            if (temp.type === "password") { 
                temp.type = "text"; 
            } 
            else { 
                temp.type = "password"; 
            } 