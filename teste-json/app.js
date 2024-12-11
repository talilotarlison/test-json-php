
// https://pt.stackoverflow.com/questions/253753/pegar-texto-de-um-input-text
// https://horadecodar.com.br/como-pegar-valor-de-input-com-javascript/
// https://mastigado.wordpress.com/2012/07/18/pegar-valor-de-inputs-pelo-nome-da-tag-input-getelementsbyname/


let btn = document.getElementById("btn")
btn.addEventListener("click", () => {
    let nome = document.getElementById("nome")
    let idade = document.getElementById("idade")
    let email = document.getElementById("email")
    // a JavaScript object...:
    var dados = {
        "nome": nome.value,
        "idade": idade.value,
        "email": email.value
    };

    var myObj = { "name": "John", "age": 31, "city": "New York" };
    // ...converted into JSON:
    var myJSON = JSON.stringify(dados);

    // send JSON:
    // window.location = "salve.php?dados=" + encodeURIComponent(myJSON);
    // console.log("json", myJSON)


    // https://stackoverflow.com/questions/50075818/api-call-using-fetch-with-method-get

    fetch("http://localhost/teste-json/salve.php?dados=" + encodeURIComponent(myJSON), {
        method: 'GET',
        headers: {
            Accept: 'application/json',
            'Content-Type': 'application/json',
            'custom-security':'XXXX',
            'Purchase-Code':'XXXXXXX',
            'Content-Type':'application/json',
            'Cache-Control':'max-age=640000'
          }
    })
      .then((response) => response.json())
      .then((responseJson) => {
        console.log(responseJson);
      })
      .catch((error) => {
        console.error(error);
      });
      
    window.location = "salve.php"
})