function openFileBrowser() {
  document.getElementById("file-browser").click();
  let numFilesText = document.getElementById("num-of-files");
  let numOfFiles = document.getElementById("file-browser").files.length;
  console.log("files selected:" + numOfFiles);
}
function submitFiles() {
  document.getElementById("submit-files").click();
}
let buttonFacadeBrowseFiles = document.getElementById("file-browser-facade");
let submitFacadeFiles = document.getElementById("submit-button");
buttonFacadeBrowseFiles.addEventListener('click', openFileBrowser);
submitFacadeFiles.addEventListener("click", submitFiles);

