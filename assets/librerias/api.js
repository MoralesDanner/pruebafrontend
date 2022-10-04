const btnActualizar = document.getElementById('btnActualizar');

btnActualizar.addEventListener('click', () => {
	cargarMonedas();
});

const cargarMonedas = async() => {
let response = null;
new Promise(async (resolve, reject) => {
  try {
    response = await axios.get('https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest', {
      headers: {
        'X-CMC_PRO_API_KEY': 'c263d36d-f929-4bbc-8e3e-f2f3c4c9caa7',
      },
    });
  } catch(ex) {
    response = null;
    // error
    console.log(ex);
    reject(ex);
  }
  if (response) {
    // En caso de obtener datos
    const respuesta=response.data;
    console.log(respuesta);
    resolve(respuesta);
    const datos=await respuesta;
    let monedas='';
    datos.data.forEach(moneda => {
      //seleccion de datos
      monedas=monedas+ `<tr>
                          <td>${moneda.cmc_rank}</td>
                          <td>${moneda.symbol}&nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp;${moneda.name}</td>
                          <td>${moneda.quote.USD.price}</td>
                          <td>${moneda.quote.USD.market_cap}</td>
                          <td>${moneda.max_supply}</td>
                          <td>${moneda.circulating_supply}</td>
                          <td>${moneda.quote.USD.percent_change_24h}</td>
                          <td>${moneda.quote.USD.percent_change_30d}</td>
                        </tr>`
    });
    //envio de datos a documento a welcome_message.php
    document.getElementById('data').innerHTML = monedas
   
  }
}); 
}
cargarMonedas();