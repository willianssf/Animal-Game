function gerar(){

    var meuArray = [
        'Avestruz', 'Aguia', 'Burro', 'Borboleta', 'Cachorro', 'Cabra', 'Carneiro',
        'Camelo', 'Cobra', 'Coelho', 'Cavalo', 'Elefante', 'Galo', 'Gato', 'Jacare', 'Leao',
        'Macaco', 'Porco', 'Pavao', 'Peru'
    ];
    var Rand = meuArray[(Math.random() * meuArray.length) | 0];

    alert(Rand);

}

