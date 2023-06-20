let btn = document.getElementById("btn");

// função responsável pelo botão de voltar
document.getElementById("voltar").addEventListener("click", (e) => {
    console.log("a");
    window.history.go(-1)
})


//capturando os dados do formulário de cadastro
let form = document.getElementById("form")

if (form) {
    form.addEventListener("submit", cadastro)
}

// função para capturar e salvar os dados do formulário de cadastro
async function cadastro(e) {
    e.preventDefault();

    // capturando os valores dos campos de entrada
    let nome = document.getElementById("nome").value;
    let email = document.getElementById("email").value;
    let senha = document.getElementById("senha").value;
    let data_nascimento = document.getElementById("data_nascimento").value;

    // Criando um formData para enviar os dados
    let formData = new FormData();
    formData.append("nome", nome);
    formData.append("email", email);
    formData.append("senha", senha);
    formData.append("data_nascimento", data_nascimento);

    await fetch('salvar.php', {
        method: 'POST',
        mode: 'cors',
        body: formData
    }).then(response => {
        response.json()
            .then(function (data) {
                if (data.msg == "Dados inseridos com sucesso") {
                    alert("Usuário " + nome + " cadastrado com sucesso!")
                }
            })
    });

    document.forms[0].reset();

}


// realizando a edicação do cadastro sempre que houver um clique
let formEdit = document.getElementById("formEdit")
if (formEdit) {
    formEdit.addEventListener("submit", editaUser)
}

// função para capturar os dados do formulário de edição
async function editaUser(e) {
    e.preventDefault();


    let nome = document.getElementById("nome").value;
    let email = document.getElementById("email").value;
    let data_nascimento = document.getElementById("data_nascimento").value;

    // Criando um formData para enviar os dados
    let formData = new FormData();
    formData.append("nome", nome);
    formData.append("email", email);
    formData.append("data_nascimento", data_nascimento)
    //procedimento utilizado para pegar o número do ID enviado pela URL
    formData.append("id", window.location.search.split("&")[1].replace(/\D/g, ''));

    await fetch('editar.php', {
        method: 'POST',
        mode: 'cors',
        body: formData
    }).then(response => {
        response.json()
            .then(function (data) {
                if (data) {
                    if (data.msg == "Editado com sucesso") {
                        alert("Editado com sucesso");
                        location.href = "?page=listar";
                        console.log(data);
                    } else {
                        alert("Ocorreu um erro na edição");
                    }
                }
            })
    });

}




// deletando um usuário (da interface e do banco) sempre que houver um clique
let btn_del = document.getElementsByClassName("botao-deletar");

if (btn_del) {
    for (const element of btn_del) {
        element.addEventListener("click", deletar)
    }
}

// capturando o click no botão de excluir
function deletar(e) {

    let teste = e.target
    let id = teste.getAttribute("numlinha");
    if (confirm("Tem certeza que deseja exlcuir o cadastro " + id + "?")) {
        fetch('excluir.php', {
            method: 'POST',
            mode: 'cors',
            body: JSON.stringify({
                'id': id
            })
        }).then(response => {
            response.json()
                .then(function (data) {
                    if (data.msg == "deu certo") {
                        console.log(data);
                        console.log(id);
                        removeItem(id, "botao-deletar");
                    }
                })
        });
    }
}




function removeItem(NroDaLinhaDoItem, classe) {
    for (const element of document.getElementsByClassName(classe)) {
        if (element.getAttribute('numlinha') == NroDaLinhaDoItem) {
            console.log(element.closest("tr"));
            element.closest('tr').remove();
        }
    }
}