
function criarTabelaInscritos() {

  var body = document.getElementsByTagName('body')[0];
  var tbl = document.createElement('table');
  tbl.setAttribute("class", "tabelas");

  var tbdy = document.createElement('tbody');

  for (var i = 0; i < 21; i++) {

    var tr = document.createElement('tr');

    if (i == 0) {
      var th = document.createElement('th');
      th.appendChild(document.createTextNode("posição"));
      tr.appendChild(th);

      th = document.createElement('th');
      th.appendChild(document.createTextNode("nome"));
      tr.appendChild(th);

      th = document.createElement('th');
      th.appendChild(document.createTextNode("status"));
      tr.appendChild(th);

      th = document.createElement('th');
      th.appendChild(document.createTextNode("matricula"));
      tr.appendChild(th);


    } else {
      for (var j = 0; j < 6; j++) {

        var td = document.createElement('td');
        if (j == 0) {
          td.appendChild(document.createTextNode(i));
        }

        if (j == 1) {
          td.appendChild(document.createTextNode("pessoa" + i));
        }
        if (j == 2) {
          td.appendChild(document.createTextNode("aguardando"));

        }
        if (j == 3) {
          var btn = document.createElement('input');
          var tipo = document.createAttribute("type");
          tipo.value="button";
          var valor = document.createAttribute("value");
          valor.value="betão";
          btn.setAttributeNode(valor);
          btn.setAttributeNode(tipo);
          td.appendChild(btn);

        }
        tr.appendChild(td);

      }

    }
    tbdy.appendChild(tr);
  }

  tbl.appendChild(tbdy);
  body.appendChild(tbl);
}


function criarTabelaInscritos() {

  var body = document.getElementsByTagName('body')[0];
  var tbl = document.createElement('table');
  tbl.setAttribute("class", "tabelas");

  var tbdy = document.createElement('tbody');

  for (var i = 0; i < 11; i++) {

    var tr = document.createElement('tr');

    if (i == 0) {
      var th = document.createElement('th');
      th.appendChild(document.createTextNode("posição"));
      tr.appendChild(th);

      th = document.createElement('th');
      th.appendChild(document.createTextNode("nome"));
      tr.appendChild(th);

      th = document.createElement('th');
      th.appendChild(document.createTextNode("status"));
      tr.appendChild(th);

      th = document.createElement('th');
      th.appendChild(document.createTextNode("matricula"));
      tr.appendChild(th);


    } else {
      for (var j = 0; j < 6; j++) {

        var td = document.createElement('td');
        if (j == 0) {
          td.appendChild(document.createTextNode(i));
        }

        if (j == 1) {
          td.appendChild(document.createTextNode("pessoa" + i));
        }
        if (j == 2) {
          td.appendChild(document.createTextNode("aguardando"));

        }
        if (j == 3) {
          var btn = document.createElement('input');
          var tipo = document.createAttribute("type");
          tipo.value="button";
          var valor = document.createAttribute("value");
          valor.value="betão";
          btn.setAttributeNode(valor);
          btn.setAttributeNode(tipo);
          td.appendChild(btn);

        }
        tr.appendChild(td);

      }

    }
    tbdy.appendChild(tr);
  }

  tbl.appendChild(tbdy);
  body.appendChild(tbl);
}


