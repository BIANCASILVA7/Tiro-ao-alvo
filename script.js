$(document).ready(function() {
    let alvo = $("#alvo");
    let cenario = $("#cenario");
    let p1 = $("#acertos");
    let p2 = $("#erros");
    let p3 = $("#total");
    let acertos = 0;
    let erros = 0;
    let total = 0;
    let acertou = false;

    setTimeout(function () {
    $("#modal").modal("show");
    $("#acertos2").val(acertos);
    $("#erros2").val(erros);
    },8*1000);

    let timer = setInterval(function() {
        mudarPosicao();
    }, 1300);

    function mudarPosicao() {
        let leftRandom = Math.floor(Math.random() * 99);
        let topRandom = Math.floor(Math.random() * 99);

        alvo.css({
            left: leftRandom + '%',
            top: topRandom + '%'
        });
    }

    function verSeAcertou() {
        if (acertou) {
            acertos++;
            total = acertos + erros;
            p1.html("<b>" + acertos + "</b>");
            p3.html("<b>" + total + "</b>");

            acertou = false;
        } else {
            erros++;
            total = acertos + erros;
            p2.html("<b>" + erros + "</b>");
            p3.html("<b>" + total + "</b>");
        }
    }

    alvo.on('click', function() {
        acertou = true;
        let audio = $('audio')[0];
        audio.currentTime = 0.4;
        audio.play();
    });

    cenario.on('click', function() {
        verSeAcertou();
    });
});