function handleShowPopup() {
  let popupForm = document.getElementById("popup-form");
  let popupDisplayStatus = popupForm.style.display
  if (!popupDisplayStatus) {
    popupForm.style.display = "flex"
    return
  }
}
function handleClosePopUp(evt) {
  let popup = document.getElementById("popup-form");
  if (evt.defaultPrevented) {
    return
  }
  console.log(evt.key)
  switch (evt.key) {
    case "Escape":
      popup.style.display = "";
      break;
  }
}
function handleClear() {
  document.getElementById("upload-artwork").value = "";
}
document.getElementById("clear-file").onclick = handleClear;
document.getElementById("upload-button").onclick = handleShowPopup
window.addEventListener('keydown', handleClosePopUp)
