function openFileBrowser() {
  document.getElementById("file-browser").click();
}
function submitFiles() {
  document.getElementById("submit-files").click();
}
let buttonFacadeBrowseFiles = document.getElementById("file-browser-facade");
let submitFacadeFiles = document.getElementById("submit-button");
buttonFacadeBrowseFiles.addEventListener('click', openFileBrowser);
submitFacadeFiles.addEventListener("click", submitFiles);
