const inputData = document.getElementById("data");
const hoje = new Date();
const fusoHorario = -3;
const hojeComFuso = new Date(hoje.getTime() + fusoHorario * 60 * 60 * 1000);
inputData.value = hojeComFuso.toISOString().split('T')[0];