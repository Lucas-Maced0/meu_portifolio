let btn_numeros = document.querySelectorAll("[numeros]");
let btn_operadores = document.querySelectorAll("[operadores]");
let igual = document.querySelector("[igual]");
let numero_atual = document.getElementById("numero_atual");
let acumulado = document.getElementById("acumulado");
let clear = document.querySelector("[delete]");
let clearAll = document.getElementById("clearAll");

let tamanho_visor = 8

class Calculadora {
    constructor(acumulado_text_element, numero_atual_text_element) {
        this.acumulado_text_element = acumulado_text_element;
        this.numero_atual_text_element = numero_atual_text_element;
        this.clearAll()
    }

    adiciona_numero(numero) {
        if (this.numero_atual.length < tamanho_visor) {
            this.numero_atual += numero;
        }
    }

    operacao(operation) {
        if (this.numero_atual === "") {
            return;
        }

        if (this.acumulado !== "") {
            this.calcular(operation);
        }

        console.log("estou no método operação")
        this.operation = operation;

        this.acumulado = `${this.numero_atual}${this.operation}`;
        this.numero_atual = "";
    }



    calcular() {
        console.log("estou no método calcular")
        let resultado;

        // console.log(typeof this.numero_atual);
        // console.log(this.numero_atual);

        const NUMERO_ATUAL = parseFloat(this.numero_atual);
        const NUMERO_ANTERIOR = parseFloat(this.acumulado);


        if (isNaN(NUMERO_ANTERIOR) || isNaN(NUMERO_ATUAL)) { return }

        switch (this.operation) {
            case "+":
                resultado = NUMERO_ATUAL + NUMERO_ANTERIOR
                break;
            case "-":
                resultado = NUMERO_ANTERIOR - NUMERO_ATUAL
                break;
            case "/":
                resultado = NUMERO_ANTERIOR / NUMERO_ATUAL
                break;
            case "*":
                resultado = NUMERO_ANTERIOR * NUMERO_ATUAL
                break;
            default:
                return
        }
        this.numero_atual = resultado
        this.operation = ''
        this.acumulado = ''
    }

    delete() {
        this.numero_atual = this.numero_atual.toString().slice(0, -1);
    }

    clearAll() {
        this.numero_atual = ''
        this.acumulado = ''
        this.operation = ''
    }

    atualizar_visor() {
        this.acumulado_text_element.innerText = this.acumulado;
        this.numero_atual_text_element.innerText = this.numero_atual;
    }
}

const calculadora = new Calculadora(
    acumulado, numero_atual
)

for (const numero of btn_numeros) {
    numero.addEventListener("click", () => {
        calculadora.adiciona_numero(numero.innerHTML);
        calculadora.atualizar_visor();
    })
}

for (const operador of btn_operadores) {
    operador.addEventListener("click", () => {
        calculadora.operacao(operador.innerText)
        calculadora.atualizar_visor()
    })
}

igual.addEventListener("click", () => {
    calculadora.calcular();
    calculadora.atualizar_visor();
})

clearAll.addEventListener("click", () => {
    calculadora.clearAll();
    calculadora.atualizar_visor();
})

clear.addEventListener("click", () => {
    calculadora.delete();
    calculadora.atualizar_visor();
})