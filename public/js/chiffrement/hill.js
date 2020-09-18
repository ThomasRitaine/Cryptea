
/*  Javascript file that contains all the code of the page "hill"   */


//  Generate a random matrix compatible with Hill's algorithme

document.getElementById("btnGenerateKey").addEventListener("click", function() {
    var ADMoinsBC = 0;
    while(ADMoinsBC == 0 || ADMoinsBC % 2 == 0 || ADMoinsBC % 13 == 0) {
        var randomHillAAllowed = [1,3,5,7,9,11,15,17,19,21,23,25];      //randomHillA
        var randomHillA = randomHillAAllowed[Math.round(Math.random()*11)];
        var randomedHillB = document.getElementById("input-hill-b").value;       //randomHillB
        var randomHillB = "";
        while(randomHillB == "" || isNaN(randomHillB) || randomHillB == randomedHillB  || randomHillB > 20) {
            var nombreChiffreComposantrandomHillB = Math.round(Math.random()*1.75 +1);
            var randomHillBAr = new Array(nombreChiffreComposantrandomHillB);
            for(var i=0 ; i<randomHillBAr.length ; i++) {
                randomHillBAr[i] = Math.round(Math.random()*9);
            };
            randomHillB = parseFloat(randomHillBAr.join(""));
        };
        var randomedHillC = document.getElementById("input-hill-c").value;       //randomHillC
        var randomHillC = "";
        while(randomHillC == "" || isNaN(randomHillC) || randomHillC == randomedHillC  || randomHillC > 25) {
            var nombreChiffreComposantrandomHillC = Math.round(Math.random()*1.75 +1);
            var randomHillCAr = new Array(nombreChiffreComposantrandomHillC);
            for(var i=0 ; i<randomHillCAr.length ; i++) {
                randomHillCAr[i] = Math.round(Math.random()*9);
            };
            randomHillC = parseFloat(randomHillCAr.join(""));
        };
        var randomedHillD = document.getElementById("input-hill-d").value;       //randomHillD
        var randomHillD = "";
        while(randomHillD == "" || isNaN(randomHillD) || randomHillD == randomedHillD  || randomHillD > 20) {
            var nombreChiffreComposantrandomHillD = Math.round(Math.random()*1.75 +1);
            var randomHillDAr = new Array(nombreChiffreComposantrandomHillD);
            for(var i=0 ; i<randomHillDAr.length ; i++) {
                randomHillDAr[i] = Math.round(Math.random()*9);
            };
            randomHillD = parseFloat(randomHillDAr.join(""));
        };
        randomHillB = Number(randomHillB);
        randomHillC = Number(randomHillC);
        randomHillD = Number(randomHillD);
        ADMoinsBC = randomHillA*randomHillD - randomHillB*randomHillC;
        while(ADMoinsBC >= 26) {ADMoinsBC -= 26};
        while(ADMoinsBC < 0) {ADMoinsBC += 26};
    };
    document.getElementById("input-hill-a").value = randomHillA;
    document.getElementById("input-hill-b").value = randomHillB;
    document.getElementById("input-hill-c").value = randomHillC;
    document.getElementById("input-hill-d").value = randomHillD;
});





// Code of the Hill encryption

document.getElementById("btnStartEncryption").addEventListener("click", function() {

        // Récupération des inputs
    var hillA = document.getElementById("input-hill-a").value; 
    var hillB = document.getElementById("input-hill-b").value;
    var hillC = document.getElementById("input-hill-c").value;
    var hillD = document.getElementById("input-hill-d").value;

    var textToDo = document.getElementById("textInput").value;

    if(document.getElementById("action-chiffrer").checked) {
        var actionChiffrement = true;
    } else {
        var actionChiffrement = false;
    };

    if(document.getElementById("random-accent-majuscule").checked) {
        var randomAccentMajusculeCryptage = false;
    } else {
        var randomAccentMajusculeCryptage = true;
    }


        //  Verif that inputs are OK (not empty and with no forbidden caracters)
    var autorisationVerifHillMatrix = true;
    var textBaseFilled = true;
    
    if(textToDo === "") {
        textBaseFilled = false;
        // Message erreur : il doit y avoir un texte à chiffrer
    };
    
    if(hillA === "" || hillB === "" || hillC === "" || hillD === "") {
        autorisationVerifHillMatrix = false;
        // Message erreur : Toutes les cases de la matrice doivent être complétées
    } else {
        if(!Number.isInteger(Number(hillA)) || Number(hillA)<0 ) {
            autorisationVerifHillMatrix = false;
            // Message erreur : Les inputs de la matrices doivent être des entiers positifs
        }
        if(!Number.isInteger(Number(hillB)) || Number(hillB)<0 ) {
            autorisationVerifHillMatrix = false;
            // Message erreur : Les inputs de la matrices doivent être des entiers positifs
        }
        if(!Number.isInteger(Number(hillC)) || Number(hillC)<0 ) {
            autorisationVerifHillMatrix = false;
            // Message erreur : Les inputs de la matrices doivent être des entiers positifs
        }
        if(!Number.isInteger(Number(hillD)) || Number(hillD)<0 ) {
            autorisationVerifHillMatrix = false;
            // Message erreur : Les inputs de la matrices doivent être des entiers positifs
        }

        var ADMoinsBC = hillA*hillD - hillB*hillC;
        ADMoinsBC = Number(ADMoinsBC);
        if(ADMoinsBC == 0 || ADMoinsBC % 2 == 0 || ADMoinsBC % 13 == 0) {
            autorisationVerifHillMatrix = false;
            // Message erreur : La matrice doit être inversible
        };
    }






        //  All conditions are satisfied, let's gooooooo
    if(textBaseFilled && autorisationVerifHillMatrix) { // DEDANS, PROGRAMME DE CHIFFREMENT DE HILL

        //  PROGRAMME DE CRYPTAGE HILL
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
            textToDoArNmb[i] = alphabet.lastIndexOf(textToDoAr[i]);
            i++;
        };
        var occurrenceDeMoinsUn = 0;
        for(i = 0; i < textToDoArNmb.length; i++) {
            if(textToDoArNmb[i] == -1) {
                occurrenceDeMoinsUn++;
            };
        };
        var nombreLettreACrypter = textToDoAr.length - occurrenceDeMoinsUn;
        var ajouterLettreACrypterPourDuo = false;
        if(nombreLettreACrypter % 2 == 1) {
            if(actionChiffrement) {
                textToDoArNmb[textToDoAr.length] = 20;
            } else {
                textToDoArNmb[textToDoAr.length] = 20;
                i = textToDoAr.length-1;
                while(textToDoArNmb[i] == -1) {i--;};       //t1' = textToDoArNmb[i]
                var j = 0;
                var valeurT1Nmb = false;
                while(valeurT1Nmb !== textToDoArNmb[i]) {
                    valeurT1Nmb = hillA*j + hillB*textToDoArNmb[textToDoAr.length];
                    while(valeurT1Nmb >= 26) {valeurT1Nmb -= 26};
                    while(valeurT1Nmb < 0) {valeurT1Nmb += 26};
                    j++;
                };
                var indexDansAlphabetDeDecrypteDernierImpaire = j;
            };
            ajouterLettreACrypterPourDuo = true;
        };
        if(!actionChiffrement) {       //INVERSE LA MATRICE
            var hillAValeurAutorise = [1,3,5,7,9,11,15,17,19,21,23,25];
            while (ADMoinsBC<0) {ADMoinsBC += 26};
            i=0;
            while ((ADMoinsBC*hillAValeurAutorise[i]%26 !== 1) && (i<12)) {
                i++;
            };
            var k = hillAValeurAutorise[i];
            var newHillA = (k*hillD)%26;
            var newHillB = -k*hillB;
            while (newHillB < 0) {newHillB += 26;};
            var newHillC = -k*hillC;
            while (newHillC < 0) {newHillC += 26;};
            var newHillD = (k*hillA)%26;
            hillA = newHillA;
            hillB = newHillB;
            hillC = newHillC;
            hillD = newHillD;
        };
        var indexLettreACrypterDansTextToDoAr = [];
        var duoIndexLettreACrypterI = [];
        i = 0;
        var j = 0;
        while(i < textToDoAr.length) {
            while(textToDoArNmb[i] == -1) {i++;};
            j = i+1;
            while(textToDoArNmb[j] == -1) {j++;};
            duoIndexLettreACrypterI = [];
            duoIndexLettreACrypterI.push(i);
            duoIndexLettreACrypterI.push(j);
            indexLettreACrypterDansTextToDoAr.push(duoIndexLettreACrypterI);
            i = j+1;
        };
        var textDoneArNmb = [];
        var textDoneAr = [];
        var passageDansBoucleCryptageHill = 0;
        i = 0;
        while(i !== textToDoAr.length) {     //MEGA WHILE
            if(textToDoArNmb[i] !== -1) {
                if(passageDansBoucleCryptageHill % 2 == 0) {
                    textDoneArNmb[i] = hillA*textToDoArNmb[i] + hillB*textToDoArNmb[indexLettreACrypterDansTextToDoAr[passageDansBoucleCryptageHill / 2][1]];
                } else {
                    textDoneArNmb[i] = hillC*textToDoArNmb[indexLettreACrypterDansTextToDoAr[(passageDansBoucleCryptageHill-1)/2][0]] + hillD*textToDoArNmb[i];
                };
                while(textDoneArNmb[i] >= 26) {textDoneArNmb[i] -= 26};
                while(textDoneArNmb[i] < 0) {textDoneArNmb[i] += 26};
                textDoneAr[i] = alphabet[textDoneArNmb[i]];
                if(ajouterLettreACrypterPourDuo) {
                    textDoneAr[indexLettreACrypterDansTextToDoAr[indexLettreACrypterDansTextToDoAr.length-1][1]] = "";
                };
                passageDansBoucleCryptageHill++;
            } else {
                textDoneAr[i] = textToDoAr[i];
            };
            if(actionChiffrement  && randomAccentMajusculeCryptage && (textDoneAr[i] == "a" || textDoneAr[i] == "e" || textDoneAr[i] == "i" || textDoneAr[i] == "o" || textDoneAr[i] == "u" || textDoneAr[i] == "c")) {
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
            if(actionChiffrement  && randomAccentMajusculeCryptage && upperCaseLetter == 0) {
                textDoneAr[i] = textDoneAr[i].toUpperCase();
            };
            i++;
        };
        if(!isNaN(indexDansAlphabetDeDecrypteDernierImpaire)) {
            i = textToDoAr.length-1;
            while(textToDoArNmb[i] == -1) {i--;};
            textDoneAr[i] = alphabet[indexDansAlphabetDeDecrypteDernierImpaire-1];
        };
        var textDone = textDoneAr.join("");
        document.getElementById("textOutput").value = textDone;
        
    } else {alert("La vérif a dit que non");};  //  DEBUGG
});