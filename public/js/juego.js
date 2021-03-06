let imagenes = [];
let selecciones = [];
let contador = 0;

generarTablero();

function cargarIconos() {
    imagenes = [
        "<img src='/laboratorio4/tpi1/img/Hacha.jpg'></img>",
        "<img src='/laboratorio4/tpi1/img/Calabaza.jpg'></img>",
        "<img src='/laboratorio4/tpi1/img/Dokuroizo.jpg'></img>",
        "<img src='/laboratorio4/tpi1/img/Dragon.jpg'></img>",
        "<img src='/laboratorio4/tpi1/img/Kuriboh.jpg'></img>",
        "<img src='/laboratorio4/tpi1/img/Titiritero.jpg'></img>",
        "<img src='/laboratorio4/tpi1/img/Zemia.jpg'></img>",
        "<img src='/laboratorio4/tpi1/img/Beta.jpg'></img>",
        "<img src='/laboratorio4/tpi1/img/Alpha.jpg'></img>",
        "<img src='/laboratorio4/tpi1/img/Buey.jpg'></img>",
        "<img src='/laboratorio4/tpi1/img/DragonN.jpg'></img>",
        "<img src='/laboratorio4/tpi1/img/Craneo.jpg'></img>",
    ]
}

function generarTablero() {
    cargarIconos()
    selecciones = []
    let tablero = document.getElementById("tablero")
    let tarjetas = []
    contador = 0;
    for (let i = 0; i < 24; i++) {
        tarjetas.push(`
        <div class="area-tarjeta" id="Carta${i}" onclick="seleccionarTarjeta(${i})">
            <div class="tarjeta" id="tarjeta${i}">
                <div class="cara trasera" id="trasera${i}">
                    ${imagenes[0]}
                </div>
                <img src="/laboratorio4/tpi1/img/Carta.jpg" class="cara superior">
                   <!-- <i class="far fa-question-circle"></i> -->
                </img>
            </div>
        </div>        
        `)
        if (i % 2 == 1) {
            imagenes.splice(0, 1)
        }
    }
    tarjetas.sort(() => Math.random() - 0.5)
    tablero.innerHTML = tarjetas.join(" ")
}

function seleccionarTarjeta(i) {
    let tarjeta = document.getElementById("tarjeta" + i)
    if (tarjeta.style.transform != "rotateY(180deg)") {
        tarjeta.style.transform = "rotateY(180deg)"
        selecciones.push(i)
    }
    if (selecciones.length == 2) {
        deseleccionar(selecciones)
        selecciones = []
    }
}

function deseleccionar(selecciones) {
    setTimeout(() => {
        let trasera1 = document.getElementById("trasera" + selecciones[0])
        let trasera2 = document.getElementById("trasera" + selecciones[1])
        if (trasera1.innerHTML != trasera2.innerHTML) {
            let tarjeta1 = document.getElementById("tarjeta" + selecciones[0])
            let tarjeta2 = document.getElementById("tarjeta" + selecciones[1])
            tarjeta1.style.transform = "rotateY(0deg)"
            tarjeta2.style.transform = "rotateY(0deg)"
        }else{
            trasera1.style.display = "none"
            trasera2.style.display = "none"
            contador += 2;
            let Carta1 = document.getElementById("Carta" + selecciones[0])
            let Carta2 = document.getElementById("Carta" + selecciones[1])
            document.getElementById("Carta" + selecciones[0]).removeAttribute("onclick");
            document.getElementById("Carta" + selecciones[1]).removeAttribute("onclick");
            document.getElementById("Carta" + selecciones[0]).style.cursor = "default";
            document.getElementById("Carta" + selecciones[1]).style.cursor = "default";
            console.log(contador);
            if (contador == 24){
                clearInterval(counter);
                
              Swal.fire(
                '??Felicitaciones!',
                '??Has Ganado!',
                'success'
                      );
         }

        }
    }, 1000);
}

var count = 10000;

var counter = setInterval(timer, 10); //10 will  run it every 100th of a second

function removerOnClick(carta1, carta2){
    console.log("Remueve");
    document.getElementsByClassName('area-tarjeta').removeAttribute("onclick");
    document.getElementsByClassName('area-tarjeta').removeAttribute("onclick");
}

function timer()
{
    if (count <= 0)
    {
        clearInterval(counter);
        removerOnClick();
        return;
     }
     count--;
     document.getElementById("timer").innerHTML = parseFloat(count /100).toFixed(2); 
}
