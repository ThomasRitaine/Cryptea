
/*  Javascript file that contains all the code of the page "decalage"   */


//  Generate a random number for the input decalage

document.getElementById("avant-input-btn-group-decalage").addEventListener("click", function() {
    randomDecalage = Math.floor(Math.random() * 400) - 200;
    document.getElementById("input-decalage").setAttribute("value", randomDecalage);
});



// Code of the shift encryption

document.getElementById("button-valider-cryptage-decalage").addEventListener("click", function() {
        
        //  Verif that inputs ar OK (not empty and with no forbidden caracters)
    var autorisationVerifQueChiffreDecalage = true;
    var textBaseFilled = true;
    
    if(document.getElementById("texte-input-chiffrement-decalage").value === "") {
        var textBaseFilled = false;
    };
    
    if(document.getElementById("input-decalage").value === "") {
        var autorisationVerifQueChiffreDecalage = false;
    };
    
        //  Make sure that input of integer is filled with integer
    if(autorisationVerifQueChiffreDecalage) {
        var decalageAr = Array.from(document.getElementById("input-decalage").value);
        var chiffreEtMoins = [0,1,2,3,4,5,6,7,8,9,"-"];
        var verifQueChiffreDecalage = true;
        var moinsEnTrop = false;
        var i=0;
        while(i < decalageAr.length) {
            var j=0;
            var decalageArCheckedi = false;
            while(j < chiffreEtMoins.length) {
                if(decalageAr[i] == chiffreEtMoins[j]) {
                    decalageArCheckedi = true;
                    if(j==10 && i!==0) {
                        moinsEnTrop = true;
                        i = decalageAr.length;
                        j = chiffreEtMoins.length;
                        decalageArCheckedi = false;
                    };
                };
                j++;
            };
            if(!decalageArCheckedi) {
                verifQueChiffreDecalage = false;
            };
            i++;
        };
    };

        //  All conditions are satisfied, let's gooooooo
    if(textBaseFilled && verifQueChiffreDecalage) { // DEDANS, PROGRAMME DE CRYPTAGE DECALAGE
        var textToDo = document.getElementById("texte-input-chiffrement-decalage").value;
        var decalage = document.getElementById("input-decalage").value;
        decalage = Number(decalage);

        if(document.getElementById("action-crypter-cryptage-decalage").checked) {
            var actionCryptageDecalage = true;
        } else {
            var actionCryptageDecalage = false;
            decalage = -1 * decalage;
        };
        
        if(document.getElementById("random-accent-majuscule-cryptage-decalage").checked) {
            var randomAccentMajusculeCryptage = false;
        } else {
            var randomAccentMajusculeCryptage = true;
        }
        
        
        //  PROGRAMME DE CRYPTAGE DECALAGE
        textToDo = textToDo.toLowerCase();
        textToDo = textToDo.replace(/à/g, "a");
        textToDo = textToDo.replace(/â/g, "a");
        textToDo = textToDo.replace(/ä/g, "a");
        textToDo = textToDo.replace(/é/g, "e");
        textToDo = textToDo.replace(/è/g, "e");
        textToDo = textToDo.replace(/ê/g, "e");
        textToDo = textToDo.replace(/ë/g, "e");
        textToDo = textToDo.replace(/î/g, "i");
        textToDo = textToDo.replace(/ï/g, "i");
        textToDo = textToDo.replace(/ô/g, "o");
        textToDo = textToDo.replace(/ù/g, "u");
        textToDo = textToDo.replace(/û/g, "u");
        textToDo = textToDo.replace(/ü/g, "u");
        textToDo = textToDo.replace(/ç/g, "c");
        var alphabet = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
        var chiffre = ["0","1","2","3","4","5","6","7","8","9"];
        while(decalage >=26) {decalage -= 26};
        while(decalage < 0) {decalage += 26};
        var textToDoAr = Array.from(textToDo);
        var textToDoArNmb = [];
        var i = 0;
        while (i !== textToDoAr.length) {       //TRANSFORMER TEXTTODO EN NOMBRE
            if(alphabet.lastIndexOf(textToDoAr[i]) !== -1) {
                textToDoArNmb[i] = alphabet.lastIndexOf(textToDoAr[i]);
            };
            if(chiffre.lastIndexOf(textToDoAr[i]) !== -1) {
                textToDoArNmb[i] = chiffre.lastIndexOf(textToDoAr[i]);
            };
            if(alphabet.lastIndexOf(textToDoAr[i]) == -1 && chiffre.lastIndexOf(textToDoAr[i]) == -1) {
                textToDoArNmb[i] = -1;
            };
            i++;
        };
        var textDoneArNmb = [];
        var textDoneAr = [];
        var i = 0;
        while(i !== textToDoAr.length) {     //MEGA WHILE
            if(textToDoArNmb[i] !== -1){
                textDoneArNmb[i] = textToDoArNmb[i] + decalage;
                if(alphabet.lastIndexOf(textToDoAr[i]) !== -1) {
                    while(textDoneArNmb[i] >= 26) {textDoneArNmb[i] -= 26};
                    textDoneAr[i] = alphabet[textDoneArNmb[i]];
                } else {
                    if(actionCryptageDecalage == false) {textDoneArNmb[i] +=4;};
                    while(textDoneArNmb[i] >= 10) {textDoneArNmb[i] -= 10};
                    textDoneAr[i] = chiffre[textDoneArNmb[i]];
                };
            } else {
                textDoneAr[i] = textToDoAr[i];
            };
            if(actionCryptageDecalage && randomAccentMajusculeCryptage && (textDoneAr[i] == "a" || textDoneAr[i] == "e" || textDoneAr[i] == "i" || textDoneAr[i] == "o" || textDoneAr[i] == "u" || textDoneAr[i] == "c")) {
                var changeLetter = Math.round(Math.random()*3);
                if(changeLetter == 0) {
                    if(textDoneAr[i] == "a") {
                        var changeLetterA = ["à","â","ä"];
                        var whichLetterChange = Math.round(Math.random()*2);
                        textDoneAr[i] = changeLetterA[whichLetterChange];
                    };
                    if(textDoneAr[i] == "e") {
                        var changeLetterA = ["é","è","ê","ë"];
                        var whichLetterChange = Math.round(Math.random()*3);
                        textDoneAr[i] = changeLetterA[whichLetterChange];
                    };
                    if(textDoneAr[i] == "i") {
                        var changeLetterA = ["î","ï"];
                        var whichLetterChange = Math.round(Math.random());
                        textDoneAr[i] = changeLetterA[whichLetterChange];
                    };
                    if(textDoneAr[i] == "o") {
                        textDoneAr[i] = "ô";
                    };
                    if(textDoneAr[i] == "u") {
                        var changeLetterA = ["ù","û","ü"];
                        var whichLetterChange = Math.round(Math.random()*2);
                        textDoneAr[i] = changeLetterA[whichLetterChange];
                    };
                    if(textDoneAr[i] == "c") {
                        textDoneAr[i] = "ç";
                    };
                };
            };
            var upperCaseLetter = Math.round(Math.random()*2.75);
            if(actionCryptageDecalage && randomAccentMajusculeCryptage && upperCaseLetter == 0) {
                textDoneAr[i] = textDoneAr[i].toUpperCase();
            };
            i++;
        };
        var textDone = textDoneAr.join("");
        document.getElementById("textDone").value = textDone;
    };
});