function handleFiles(){
  let files= document.getElementById("upload-artwork");  
  console.log(files.files);
}
function handleClear() {
  document.getElementById("upload-artwork").value = "";
}
document.getElementById("clear-file").onclick = handleClear;
