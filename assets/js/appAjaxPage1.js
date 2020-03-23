// pas de css

import axios from "axios";

envoyer.addEventListener ("click", (event) =>{
    event.preventDefault();
    axios ({
        url: "/exemple/axios/traitement",
        method: "POST",
        data: new FormData(leForm),
       // headers: "ContentType: multipart/form-data"
    })
    .then ((response)=>{
        contenu.innerHTML = response.data.nomMajuscules;
        console.log (response);
    })
    .catch ((error) => {
        console.log (error);
    })

})
