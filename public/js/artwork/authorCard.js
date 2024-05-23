function moveAuthorCard(authorCard, moveDown) {
  if (moveDown) {
    authorCard.style.marginLeft = "0px";
    authorCard.style.marginRight = "0px";
    authorCard.style.width = "100%";
  }
  authorCard.style.marginLeft = "5px";
  authorCard.style.marginRight = "5px";
  authorCard.style.width = "18%";
}
function moveDown() {
  let authorCard = document.getElementById("author-card");
  let artworkCard = document.getElementById("artwork-card");
  let artworkSection = document.getElementById("artwork");
  if (window.innerWidth < 900) {
    artworkSection.style.flexDirection = "column";
    artworkCard.style.width = "100%"
    moveAuthorCard(authorCard, true);
  } else {
    artworkSection.style.flexDirection = "row";
    artworkCard.style.width = "80%";
    moveAuthorCard(authorCard, false);
  }
}
window.addEventListener("resize", moveDown)
