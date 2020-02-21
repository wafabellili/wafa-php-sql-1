var c = document.getElementById("myTbody").childElementCount;
if (c == 0) {
    document.getElementById("aucunEtudiant").classList.remove("d-none");
    document.getElementById("students").classList.add("d-none");
}