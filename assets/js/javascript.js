$(document).ready(function () {
    $('#showTable').DataTable({
        paging: true,
        ordering: true,
        info: true
    });
    console.log('page loaded');
});

document.getElementById("dag").addEventListener("click", () => {
    var gekozenDag = document.getElementById("dag").value;
    document.getElementById("lineup").style.paddingTop = "10px";

    if (gekozenDag == "13mei") {
        document.getElementById("lineup").innerHTML = `
        <div class="row">
        <div class="column4"><img src="assets/img/lineup/13Mei/yvessegers.jpg"> <p class="artiestNaam">Yves Segers | 18u</p></div> 
        <div class="column4"><img src="assets/img/lineup/13Mei/luckiluc.jpg"> <p class="artiestNaam">Feest Dj Lucki Luc | 18u40</p></div>
        <div class="column4"><img src="assets/img/lineup/13Mei/2fabiola.jpg"> <p  class="artiestNaam">2 Fabiola | 19u30</p></div>
        <div class="column4"><img src="assets/img/lineup/13Mei/samgooris.jpg"> <p  class="artiestNaam">Sam gooris | 20u25</p></div>
        </div>
        <br>
        <br>
        <div class="row">
        <div class="column4"><img src="assets/img/lineup/13Mei/ko.jpg"> <p  class="artiestNaam">Gebroeders Ko | 21u</p></div>
        <div class="column4"><img src="assets/img/lineup/13Mei/ronnieretro.jpg"> <p  class="artiestNaam">Ronny Retro | 21u30</p></div>
        <div class="column4"><img src="assets/img/lineup/13Mei/bartkaell.jpg"> <p  class="artiestNaam">Bart Kaël | 22u30</p></div>
        <div class="column4"><img src="assets/img/lineup/13Mei/bromeos.jpg"> <p  class="artiestNaam">De Bromeo's | 23u</p></div>
        </div><br>`;
    }
    if (gekozenDag == "14meiMS") {
        document.getElementById("lineup").innerHTML = `
        <div class="row">
        <div class="column4"><img src="assets/img/lineup/14MeiMainStage/cth.jpg"> <p class="artiestNaam">DJ C.T.H. | 19u</p></div> 
        <div class="column4"><img src="assets/img/lineup/14MeiMainStage/jrox.jpg"> <p class="artiestNaam">J-Rox | 20u</p></div>
        <div class="column4"><img src="assets/img/lineup/14MeiMainStage/ninetofive.jpg"> <p  class="artiestNaam">Nine 2 Five | 21u</p></div>
        <div class="column4"><img src="assets/img/lineup/14MeiMainStage/louis.jpg"> <p  class="artiestNaam">Jamie Lee VI & Louis XIV | 22u</p></div>
        </div>
        <br>
        <br>
        <div class="row">
        <div class="column4"><img src="assets/img/lineup/14MeiMainStage/regi.jpg"> <p  class="artiestNaam">Regi | 23u</p></div>
        <div class="column4"><img src="assets/img/lineup/14MeiMainStage/bromeos_sat.jpg"> <p  class="artiestNaam">De Bromeo's | 00u</p></div>
        <div class="column4"><img src="assets/img/lineup/14MeiMainStage/chucky.jpg"> <p  class="artiestNaam">Mark with a K & MC Chucky | 01u</p></div>
        <div class="column4"><img src="assets/img/lineup/14MeiMainStage/patb.jpg"> <p  class="artiestNaam">Pat B | 02u</p></div>
        </div><br>`;
    }
    if (gekozenDag == "14meiTS") {
        document.getElementById("lineup").innerHTML = `
        <p  class="artiestNaamZonderFoto">VIEF Family | 19u30</p>
        <p  class="artiestNaamZonderFoto">Lola Jones | 21u00</p>
        <p  class="artiestNaamZonderFoto">Lukas Firtzer | 22u15</p>
        <p  class="artiestNaamZonderFoto">Marco Bailey | 23u30</p>
        <p  class="artiestNaamZonderFoto">Keith Carnal | 00u45</p>`
    }
    if (gekozenDag == "14meiTA") {
        document.getElementById("lineup").innerHTML = `
        <p  class="artiestNaamZonderFoto">Alexander Böse | 20u</p>
        <p  class="artiestNaamZonderFoto">Sid B2B Kyllian | 20u45</p>
        <p  class="artiestNaamZonderFoto">Berre Peetermans | 21u45</p>
        <p  class="artiestNaamZonderFoto">Simon Van Nuland | 22u30</p>
        <p  class="artiestNaamZonderFoto">Thomas Petitjean | 23u15</p>
        <p  class="artiestNaamZonderFoto">Chloé Tock | 00u</p>
        <p  class="artiestNaamZonderFoto">Maxaro | 00u45</p>
        <p  class="artiestNaamZonderFoto">Simon T B2B J-Rox | 01u45</p>`
    }
    if (gekozenDag == "15mei") {
        document.getElementById("lineup").innerHTML = `
        <div class="row">
        <div class="column2"><img src="assets/img/lineup/15Mei/likeme.jpg"> <p  class="artiestNaam">#LikeMe | 15u30</p></div>
        <div class="column2"><img src="assets/img/lineup/15Mei/camille.jpg"> <p  class="artiestNaam">Camille | 17u</p></div>
        </div><br>`
    }
});

//Gebruik gemaakt van W3Schools
function showPassword() {
    var input = document.getElementById("password");
    if (input.type === "password") {
        input.type = "text";
    } else {
        input.type = "password";
    }
}

function isAdmin() {
    var isAdmin = document.getElementById("isAdmin");
    if (input.checked) {
        $_POST["isAdmin"] == 1;
    } else {
        $_POST['isAdmin'] == 0;
    }

}