
        function abrirConteudo() {
            var urlAtual = document.location.href;
            if (urlAtual.includes("#")) {
                urlAtual = urlAtual.substr(0, urlAtual.indexOf('#')) + "#t3-content";
            } else {
                urlAtual = urlAtual + "#t3-content";
            }
            window.location.replace(urlAtual);
        }

        function abrirMenu() {

            var urlAtual = document.location.href;
            if (urlAtual.includes("#")) {
                urlAtual = urlAtual.substr(0, urlAtual.indexOf('#')) + "#menuanchor";
            } else {
                urlAtual = urlAtual + "#menuanchor";
            }

            window.location.replace(urlAtual);

        }


        function abrirRodape() {

            var urlAtual = document.location.href;
            if (urlAtual.includes("#")) {
                urlAtual = urlAtual.substr(0, urlAtual.indexOf('#')) + "#rodape";
            } else {
                urlAtual = urlAtual + "#rodape";
            }

            window.location.replace(urlAtual);

        }


        function contraste() {
            var body = document.getElementsByTagName('body');
            if (body[0].style.backgroundColor == "black") {
                window.location.reload(true);
            } else {

                for (var i = 0; i < body.length; i++) {
                    body[i].style.backgroundColor = "black";
                }

                var divs = document.getElementsByTagName('div');
                for (var i = 0; i < divs.length; i++) {
                    divs[i].style.backgroundColor = "black";
                    divs[i].style.color = "yellow";
                }
                var navs = document.getElementsByTagName('nav');
                for (var i = 0; i < navs.length; i++) {
                    navs[i].style.backgroundColor = "black";
                    navs[i].style.color = "yellow";
                }
                var header = document.getElementsByTagName('header');
                for (var i = 0; i < header.length; i++) {
                    header[i].style.backgroundColor = "black";
                    header[i].style.color = "yellow";
                }
                var footer = document.getElementsByTagName('footer');
                for (var i = 0; i < footer.length; i++) {
                    footer[i].style.backgroundColor = "black";
                    footer[i].style.color = "yellow";
                }

                var as = document.getElementsByTagName('a');
                for (var i = 0; i < as.length; i++) {
                    as[i].style.backgroundColor = "black";
                    as[i].style.color = "yellow";
                }
                var ps = document.getElementsByTagName('p');
                for (var i = 0; i < ps.length; i++) {
                    ps[i].style.backgroundColor = "black";
                    ps[i].style.color = "yellow";
                }
                var ps = document.getElementsByTagName('h1');
                for (var i = 0; i < ps.length; i++) {
                    ps[i].style.backgroundColor = "black";
                    ps[i].style.color = "yellow";
                }
                var is = document.getElementsByTagName('i');
                for (var i = 0; i < is.length; i++) {
                    is[i].style.color = "yellow";
                }
                var spans = document.getElementsByTagName('span');
                for (var i = 0; i < spans.length; i++) {
                    spans[i].style.backgroundColor = "black";
                    spans[i].style.color = "yellow";
                }
                var iframes = document.getElementsByTagName('iframe');
                for (var i = 0; i < iframes.length; i++) {
                    iframes[i].style.backgroundColor = "white";
                    iframes[i].style.color = "yellow";
                }
                var tables = document.getElementsByTagName('table');
                for (var i = 0; i < tables.length; i++) {
                    tables[i].style.backgroundColor = "black";
                    tables[i].style.color = "yellow";
                }
                var tbodys = document.getElementsByTagName('tbody');
                for (var i = 0; i < tbodys.length; i++) {
                    tbodys[i].style.backgroundColor = "black";
                    tbodys[i].style.color = "yellow";
                }
                var trs = document.getElementsByTagName('tr');
                for (var i = 0; i < trs.length; i++) {
                    trs[i].style.backgroundColor = "black";
                    trs[i].style.color = "yellow";
                }
                var tds = document.getElementsByTagName('td');
                for (var i = 0; i < tds.length; i++) {
                    tds[i].style.backgroundColor = "black";
                    tds[i].style.color = "yellow";
                }
                var button = document.getElementsByClassName('socialList_item');
                for (var i = 0; i < button.length; i++) {
                    button[i].style.backgroundColor = "black";
                    button[i].style.color = "yellow";
                }
                var button = document.getElementsByClassName('button');
                for (var i = 0; i < button.length; i++) {
                    button[i].style.backgroundColor = "black";
                    button[i].style.color = "yellow";
                }
            }
        }