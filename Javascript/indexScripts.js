let tabela = document.getElementById("tabelaProd")
let produtos;
let totalregistros;
let qtd_pag;
let linhasPag;
let pagAtual;

let primBtn = document.getElementById("primeriaPag")
let ultBtn = document.getElementById("proximo")

// pegando a quantidade de linhas escolhida no filtro
let filtroLinha = document.getElementById("filtroLinha");
    linhasPag = filtroLinha.value
    buscaProd  (pagAtual, filtroLinha.value)
    filtroLinha.addEventListener("change", () => {
        buscaProd  (pagAtual, filtroLinha.value)
})

// Função pra buscar produtos na api
async function buscaProd(pagina, linhasPag) {
    linhasPag = filtroLinha.value

    // recebendo os dados da API
    const response = await fetch(`../bcr_api/produtos.php?numPag=${pagina}&linhasPag=${linhasPag}`, {
        method: 'GET',
        mode: 'cors',
    })
    const jsonResponse = await response.json();
    produtos = jsonResponse;

    // calculos da paginação
    totalregistros = produtos.metadados.totalregistros;
    qtd_pag = Math.ceil((totalregistros / linhasPag));
    pagAtual = parseInt(produtos.pagAtual)

    desenhaTabela(produtos); 
}

buscaProd(1);

// Função que cria a tabela com os produtos
function desenhaTabela(produtos) {

    let tbody = document.getElementById("tbody");
    let divPag = document.getElementById("paginacao");

    // variáveis para calcular a disposição das páginas na paginação
    let linhas = "";
    let paginacaoD = "";
    let max_links = 1;

    // criação do conteúdo das colunas usando os dados do client
    for (const element of produtos.dados) {
        let produto = element;

        let linha = `
            <tr>
                <td style="font-weight: bold;">${produto.seqintegracao}</td>
                <td>${produto.descricaosugerida == null ? "Sem Descrição" : produto.descricaosugerida}</td>
                <td style="font-weight: bold;">R$ ${parseInt(Math.random() * (100 - 10) + 10)}</td>
                <td style="font-weight: bold;"> ${parseInt(Math.random() * (1000 - 10) + 100)}</td>
            </tr>
        `;
        linhas += linha;
    }

    // criação dinâmica da paginação
    paginacaoD += `<nav aria-label="Page navigation" class="" id="paginacao">
                    <ul class="pagination justify-content-center">`
    paginacaoD += `<li class="page-item"><a class="page-link" onclick="buscaProd(1)" href="#">
                    <i class="fas fa-angle-left"></i>Primeira </a></li>`

    for (let pag_ant = pagAtual - max_links; pag_ant <= pagAtual - 1; pag_ant++) {
        if (pagAtual > 1) {
            paginacaoD += `<li class="page-item"><a class="page-link" onclick="buscaProd(` + pag_ant + `)"
            href="#">`+ pag_ant + `</a></li>`
        }
    }

    paginacaoD += `<li class="page-item active"><a class="page-link" href="#">` + pagAtual + `</a></li>`

    for (let prox_pag = pagAtual + 1; prox_pag <= pagAtual + max_links; prox_pag++) {
        if (pagAtual < qtd_pag) {
            paginacaoD += `<li class="page-item"><a class="page-link" href="#" onclick="buscaProd(` + prox_pag + `)">
            `+ prox_pag + `</a></li>`
        }
    }

    paginacaoD += `<li class="page-item"><a class="page-link" id="proximo"  href="#" onclick="buscaProd(` + qtd_pag + `)">
                    Última <i class="fas fa-angle-right"></i></a></li>`;
    paginacaoD += `</ul></nav>`;

    tbody.innerHTML = linhas;
    divPag.innerHTML = paginacaoD;
}
