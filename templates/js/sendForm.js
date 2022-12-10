let submitElement = document.getElementById('hiddenSubmit');
let docInput = document.getElementById('fileInput');
console.log(1);
docInput.addEventListener('change', () =>{
    submitElement.click();
})