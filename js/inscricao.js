
function criarTabelaInscritos() {

  var presenca = Math.floor(Math.random() * 10);

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
      th.appendChild(document.createTextNode("telefone 1"));
      tr.appendChild(th);

      th = document.createElement('th');
      th.appendChild(document.createTextNode("telefone 2"));
      tr.appendChild(th);

      th = document.createElement('th');
      th.appendChild(document.createTextNode("data incrição"));
      tr.appendChild(th);

      th = document.createElement('th');
      th.appendChild(document.createTextNode("status"));
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
          td.appendChild(document.createTextNode("tel 1 -" + i));

        }
        if (j == 3) {
          td.appendChild(document.createTextNode("tel 2 -" + i));

        }
        if (j == 4) {
          td.appendChild(document.createTextNode(i+"/05/2019"));

        }
        if (j == 5) {
          td.appendChild(document.createTextNode("aguardando"));

        }
        tr.appendChild(td);

      }

    }
    tbdy.appendChild(tr);
  }

  tbl.appendChild(tbdy);
  body.appendChild(tbl);

}


