function limpaUrl() { //função
    urlpg = window.location.pathname; //pega a url atual da página
    urllimpa = urlpg.split("?")[0] //tira tudo o que estiver depois de '?'

    newUrl = 'www.mkbits.com.br';
    console.log(this.title);
    window.history.replaceState(null, 'this.title', urllimpa); //subtitui a url atual pela url limpa
}

limpaUrl(); //chama a função