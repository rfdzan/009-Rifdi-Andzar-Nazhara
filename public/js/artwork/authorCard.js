function moveDown() {
  let authorCard = document.getElementById("author-card");
  let artworkCard = document.getElementById("artwork-card");
  let artworkSection = document.getElementById("artwork");
  if (window.innerWidth < 900) {
    artworkSection.style.flexDirection = "column";
    authorCard.style.width = "100%";
    artworkCard.style.width = "100%"
    authorCard.style.marginLeft = "0px";
    authorCard.style.marginRight = "0px";
  } else {
    artworkSection.style.flexDirection = "row";
    authorCard.style.width = "18%";
    artworkCard.style.width = "80%";
    authorCard.style.marginLeft = "5px";
    authorCard.style.marginRight = "5px";
  }
}
window.addEventListener("resize", moveDown)
