let formLogin = document.getElementById("form");
let btnLogin = document.getElementById("btnLogin");
let formModal = document.getElementById("formModal");
let btnModal = document.getElementById("btnM");

//validando os dados de login de um usuário
if (btnLogin) {
  btnLogin.addEventListener("click", valida);
}

//função para validar dados do usuário
async function valida(e) {
  e.preventDefault();

  const NOME = document.getElementById("nome").value;
  const SENHA = document.getElementById("senha").value;

  let formData = new FormData();
  formData.append("nome", NOME);
  formData.append("senha", SENHA);

  await fetch("validacao.php", {
    method: "POST",
    mode: "cors",
    body: formData,
  }).then((response) => {
    response.json().then(function (data) {
      if (data.msg == "Acesso permitido") {
        location.href =
          "http://localhost/Projetos/meu_portifolio/paginas/index.php";
      } else {
        alert("Acesso negado!");
      }
    });
  });
}

//cadastrando um novo usuário
if (btnModal) {
  btnModal.addEventListener("click", cadastra);
}

async function cadastra(e) {
  e.preventDefault();

  const NOME_MODAL = document.getElementById("nomeM").value;
  const SENHA_MODAL = document.getElementById("senhaM").value;

  let formData1 = new FormData();
  formData1.append("nomeM", NOME_MODAL);
  formData1.append("senhaM", SENHA_MODAL);

  await fetch("cadastro.php", {
    method: "POST",
    mode: "cors",
    body: formData1,
  }).then((response) => {
    response.json().then(function (data) {
      if (data.msg == "Usuário cadastrado com sucesso!") {
        location.href = "http://localhost/Projetos/meu_portifolio/paginas/index.php";
      } else {
        alert("Erro!!!");
      }
    });
  });
}

// botão de voltar
document.getElementById("voltar").addEventListener("click", (e) => {
  console.log("a");
  window.history.go(-1);
});
