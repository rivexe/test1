let submitElement = document.getElementById('hiddenSubmit');
let docInput = document.getElementById('fileInput');
docInput.addEventListener('change', () =>{
    submitElement.click();
})