function handleShowPopup() {
  let popupForm = document.getElementById("popup-form");
  let popupDisplayStatus = popupForm.style.display;
  if (!popupDisplayStatus) {
    popupForm.style.display = "flex";
    return;
  }
}
function handleClosePopUp(evt) {
  let popup = document.getElementById("popup-form");
  if (evt.defaultPrevented) {
    return;
  }
  console.log(evt.key)
  switch (evt.key) {
    case "Escape":
      popup.style.display = "";
      break;
  }
  document.getElementById("file-browser").value = "";
}

document.getElementById("upload-button").onclick = handleShowPopup;

window.addEventListener('keydown', handleClosePopUp);

document.getElementById("close-upload-popup").onclick = function() {
  let popup = document.getElementById("popup-form");
  popup.style.display = "";
  document.getElementById("file-browser").value = "";
};
