const inputs = document.querySelectorAll('[valor]')
const calcular = document.getElementById('calcular')
const resultado = document.getElementById('resultado')
const arrayInputs = Array.from(inputs)

const pegarValores = input => input.value
const paraNumero = valor => parseFloat(valor)
const somarValores = (acumulador, atual) => {
    atual = isNaN(atual) ? 0 : atual
    acumulador = isNaN(acumulador) ? 0 : acumulador + atual
    return acumulador
}

const apenasNumeros = valor => valor.replace(/\D/g, '')

inputs.forEach(input => {
    input.addEventListener('input', function(e) {
        e.target.value = apenasNumeros(e.target.value)
        const soma = arrayInputs.map(pegarValores).map(paraNumero).reduce(somarValores)
        resultado.value = soma
    })
})