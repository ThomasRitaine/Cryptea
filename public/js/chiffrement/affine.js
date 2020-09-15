
/*  Javascript file that contains all the code of the page "affine"   */


//  Generate a random number for the input affine-a

document.getElementById("avant-input-btn-group-affine-a").addEventListener("click", function() {
    var previousRandomAffineA = document.getElementById("input-affine-a").value;
    var randomAffineA = previousRandomAffineA;
    var randomAffineAValeurAutorise = [3,5,7,9,11,15,17,19,21,23,25];
    while(randomAffineA == previousRandomAffineA) {
        randomAffineA = randomAffineAValeurAutorise[Math.round(Math.random()*10)]
    }
    document.getElementById("input-affine-a").setAttribute("value", randomAffineA);
});


//  Generate a random number for the input affine-b

document.getElementById("avant-input-btn-group-affine-b").addEventListener("click", function() {
    var previousRandomAffineB = document.getElementById("input-affine-b").value;
    var randomAffineB = previousRandomAffineB;
    while(randomAffineB == previousRandomAffineB  || randomAffineB > 20 || randomAffineB < -20) {
        var randomAffineBNegatif = Math.round(Math.random());
        var nombreChiffreComposantRandomAffineB = Math.round(Math.random()*1.5 +1);
        var randomAffineBAr = new Array(nombreChiffreComposantRandomAffineB + randomAffineBNegatif);
        if(randomAffineBNegatif == 1) {
            randomAffineBAr[0] = "-";
        };
        for(var i=randomAffineBNegatif ; i<randomAffineBAr.length ; i++) {
            randomAffineBAr[i] = Math.round(Math.random()*9);
        };
        randomAffineB = parseFloat(randomAffineBAr.join(""));
    };
    document.getElementById("input-affine-b").setAttribute("value", randomAffineB);
});




// Code of the affine encryption

document.getElementById("button-valider-cryptage-affine").addEventListener("click", function() {
        
        //  Verif that inputs ar OK (not empty and with no forbidden caracters)
    var autorisationVerifAffineA = true;
    var autorisationVerifAffineB = true;
    var textBaseFilled = true;
    
    if(document.getElementById("textInput").value === "") {
        textBaseFilled = false;
    };
    
    if(document.getElementById("input-affine-a").value === "") {
        autorisationVerifAffineA = false;
    };

    if(document.getElementById("input-affine-b").value === "") {
        autorisationVerifAffineB = false;
    };
    
        //  Make sure that input of integer is filled with integer
    if(autorisationVerifAffineA) {
        var verifAffineA = true;
        var affineAValeurAutorise = [1,3,5,7,9,11,15,17,19,21,23,25];
        if(affineAValeurAutorise.lastIndexOf(Number(document.getElementById("input-affine-a").value)) == -1) {
            verifAffineA = false;
        };
        if(!verifAffineA) { // MESSAGE D'ERREUR INPUT-CLEF
            //  Mettre message erreur
        };
    };


    if(autorisationVerifAffineB) {
        var verifAffineB = true;
        var chiffreEtMoins = [0,1,2,3,4,5,6,7,8,9,"-"];
        var affineB = document.getElementById("input-affine-b").value;
        var affineBAr = Array.from(affineB);
        var moinsEnTrop = false;
        var i=0;
        while(i < affineBAr.length) {
            var j=0;
            var affineBArCheckedi = false;
            while(j < chiffreEtMoins.length) {
                if(affineBAr[i] == chiffreEtMoins[j]) {
                    affineBArCheckedi = true;
                    if(j==10 && i!==0) {
                        moinsEnTrop = true;
                        i = affineBAr.length;
                        j = chiffreEtMoins.length;
                        affineBArCheckedi = false;
                    };
                };
                j++;
            };
            if(!affineBArCheckedi) {
                verifAffineB = false;
            };
            i++;
        };
        if(!verifAffineB) { // MESSAGES D'ERREURS INPUT AFFINE B
            if(moinsEnTrop) {
                // Il ne peut y avoir qu'un seul signe moins, et il doit être au début.
            } else {
                //Le b est un nombre entier, positif ou négatif. Seuls les chiffres et un signe moins sont autorisés.
            };
        };
    };


        //  All conditions are satisfied, let's gooooooo
    if(textBaseFilled && verifAffineA && verifAffineB) { // DEDANS, PROGRAMME DE CRYPTAGE AFFINE
        if(textBaseFilled && verifAffineA && verifAffineB) {
            var textToDo = document.getElementById("textInput").value;
            var affineA = document.getElementById("input-affine-a").value;
            affineA = Number(affineA);
            var affineB = document.getElementById("input-affine-b").value;
            affineB = Number(affineB);

            if(document.getElementById("action-crypter-cryptage-affine").checked) {
                var actionCryptage = true;
            } else {
                var actionCryptage = false;
            };
            
            if(document.getElementById("random-accent-majuscule-cryptage-affine").checked) {
                var randomAccentMajusculeCryptage = false;
            } else {
                var randomAccentMajusculeCryptage = true;
            }

            //  PROGRAMME DE CRYPTAGE AFFINE
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
            var textToDoAr = Array.from(textToDo);
            var textToDoArNmb = [];
            var i = 0;
            while (i !== textToDoAr.length) {       //TRANSFORMER TEXTTODO EN NOMBRE
                if(alphabet.lastIndexOf(textToDoAr[i]) !== -1) {
                    textToDoArNmb[i] = alphabet.lastIndexOf(textToDoAr[i]);
                } else {
                    textToDoArNmb[i] = -1;
                };
                i++;
            };
            var textDoneArNmb = [];
            var textDoneAr = [];
            var i = 0;
            while(i !== textToDoAr.length) {     //MEGA WHILE
                if(textToDoArNmb[i] !== -1){
                    
                    if(actionCryptage) {
                        textDoneArNmb[i] = textToDoArNmb[i] * affineA + affineB;
                        while(textDoneArNmb[i] >= 26) {textDoneArNmb[i] -= 26};
                        while(textDoneArNmb[i] < 0) {textDoneArNmb[i] += 26};
                        textDoneArNmb[i] = Number(textDoneArNmb[i]);
                        textDoneAr[i] = alphabet[textDoneArNmb[i]];
                    } else {
                        var j = -1;
                        var trouve = false;
                        while(!trouve) {
                            j++;
                            var search = j*affineA + affineB;
                            while(search >= 26) {search -= 26};
                            while(search < 0) {search += 26};
                            if(search == textToDoArNmb[i]) {
                                trouve = true;
                            };
                        };
                        textDoneArNmb[i] = j;
                        textDoneAr[i] = alphabet[textDoneArNmb[i]];
                    };
                    
                } else {
                    textDoneAr[i] = textToDoAr[i];
                };
                if(actionCryptage  && randomAccentMajusculeCryptage && (textDoneAr[i] == "a" || textDoneAr[i] == "e" || textDoneAr[i] == "i" || textDoneAr[i] == "o" || textDoneAr[i] == "u" || textDoneAr[i] == "c")) {
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
                if(actionCryptage  && randomAccentMajusculeCryptage && upperCaseLetter == 0) {
                    textDoneAr[i] = textDoneAr[i].toUpperCase();
                };
                i++;
            };
            var textDone = textDoneAr.join("");
            document.getElementById("textOutput").value = textDone;
        };
    };
});