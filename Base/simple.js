let btn = document.querySelector('.val')
function afficher(e) {
    e.preventDefault();
    var fileI = document.getElementById("IProd").files[0];
    console.log(fileI.name);
    console.log("Ok");
    mimg = document.createElement('img');
    mimg.src = fileI.name;
    madiv = document.querySelector('.img_js');
    madiv.innerHTML = '';
    madiv.appendChild(mimg);
}
btn.addEventListener('submit', afficher)
