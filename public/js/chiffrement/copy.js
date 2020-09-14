
// COPY

function myFunction() {
    /* Get the text field */
    var copyText = document.getElementById("textDone");
  
    /* Select the text field */
    copyText.select();
    copyText.setSelectionRange(0, 99999); /*For mobile devices*/
  
    /* Copy the text inside the text field */
    document.execCommand("copy");
  
    /* Alert the copied text */
    alert("Well done padawan, your message is copied : " + copyText.value);
}