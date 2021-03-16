// objectivo: gerar um certo numeros definidos pelo "total"
// dentro de um limite definido com o "min" e "max"
const extrairNumeros = (min, max, total) => {
	const numeros = [];

	// enquando que o "numeros" nao tiver o tamanho pretendido pelo "total"
	while (numeros.length < total) {
		// gerara numero random dentro do intervalo pretendido
		// Math.floor() = Returns the greatest integer less than or equal to its numeric argument.
		// Math.random() = Returns a pseudorandom number between 0 and 1.
		const numAux = Math.floor(Math.random() * (max - min + 1)) + min;

		// se numero gerado ainda nao existir na lista
		if (numeros.indexOf(numAux) < 0)
			// adicionar numero gerado à lista
			numeros.push(numAux);
	}

	return numeros;
};

const ordenaChave = array => {
	// res : -1 a  < b -> o A passa para o proximo index
	// res :  1 a  > b -> o B passa para o index anterior
	// res :  0 a == b - ficam como está
	return array.sort((a, b) => a - b).join(' - ');
};

const addChaveToTable = chave => {
	const table = document.getElementById('table');
	let body = table.tBodies[0];

	// criar um novo elemento, que é a linha para a tabela
	const linha = document.createElement('tr');

	// escrver o html que vai para dentro dessa linha
	linha.innerHTML =
		'<td>' +
		chave.numeros.join(' - ') +
		'  **' +
		chave.estrelas.join(' - ') +
		'</td>' +
		'<td>' +
		ordenaChave(chave.numeros) +
		'</td>' +
		'<td>' +
		ordenaChave(chave.estrelas) +
		'</td>';

	// adicionar a linha ao body da tabela
	// nota: o body está criado no inicio desta função
	body.appendChild(linha);
};

const geraChave = () => {
	// estado inicial da chave vazia
	const chaveGerada = {
		numeros: [],
		estrelas: []
	};

	// gerar a numeros da chave
	chaveGerada.numeros = extrairNumeros(1, 50, 5);

	// gerar a estrelas da chave
	chaveGerada.estrelas = extrairNumeros(1, 12, 2);

	// chamar função para adicionar chave gerada à DOM
	addChaveToTable(chaveGerada);
};
