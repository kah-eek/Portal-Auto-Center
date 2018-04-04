var conteudo_moto;
var conteudo_servico;
var conteudo_carro;
var conteudo_produto;

window.onload = function(){
  conteudo_moto = document.getElementById("conteudo_moto");
  conteudo_servico = document.getElementById("conteudo_servico");
  conteudo_carro = document.getElementById("conteudo_carro");
  conteudo_produto = document.getElementById("conteudo_produto");

  var bt_moto = document.getElementById("bt_moto");
  bt_moto.onclick = mostrarConteudoMoto;

  var bt_servico = document.getElementById("bt_servico");
  bt_servico.onclick = mostrarConteudoServico;

  var bt_carro = document.getElementById("bt_carro");
  bt_carro.onclick = mostrarConteudoCarro;

  var bt_produto = document.getElementById("bt_produto");
  bt_produto.onclick = mostrarConteudoProduto;

  conteudo_moto.classList.add("escondido");
  conteudo_servico.classList.add("escondido");
  conteudo_carro.classList.add("escondido");
  conteudo_produto.classList.add("escondido");

}

function mostrarConteudoMoto(){
  conteudo_moto.classList.remove("escondido");
  conteudo_servico.classList.add("escondido");
  conteudo_carro.classList.add("escondido");
  conteudo_produto.classList.add("escondido");
}

function mostrarConteudoServico(){
  conteudo_moto.classList.add("escondido");
  conteudo_servico.classList.remove("escondido");
  conteudo_carro.classList.add("escondido");
  conteudo_produto.classList.add("escondido");
}

function mostrarConteudoCarro(){
  conteudo_moto.classList.add("escondido");
  conteudo_servico.classList.add("escondido");
  conteudo_carro.classList.remove("escondido");
  conteudo_produto.classList.add("escondido");
}

function mostrarConteudoProduto(){
  conteudo_moto.classList.add("escondido");
  conteudo_servico.classList.add("escondido");
  conteudo_carro.classList.add("escondido");
  conteudo_produto.classList.remove("escondido");
}
