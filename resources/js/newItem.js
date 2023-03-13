// const form = document.querySelector("#form");
// const titleItem = form.querySelector("#title");
// const priceItem = form.querySelector("#price");
// const imgItem = form.querySelector("#img");

// const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');


// const errorImg = form.querySelector("#error_img");
// const errorTitle = form.querySelector("#error_title");
// const errorPrice = form.querySelector("#error_price");



// imgItem.addEventListener("change", function(){
//     const img = imgItem.files[0];

//     if(!img.type.includes("image")){
//         errorImg.innerHTML = "Trebuie sa introduci o poza";
//         return
//     }

//     errorImg.innerHTML = ""
// })

// form.addEventListener("submit", function(e){
//     e.preventDefault();

//     const title = titleItem.value;
//     const price = Number(priceItem.value);
//     const img = imgItem.files[0];

//     if(title === ""){
//         errorTitle.innerHTML = "Trebuie sa introduci un title pentru item";
//         return
//     }

//     if(price === 0){
//         errorPrice.innerHTML = "Trebuie sa introduci un pret pentru item";
//         return
//     }
//     if(!img){
//         errorImg.innerHTML = "Trebuie sa introduci obligatoriu o poza"
//         return
//     }

//     errorPrice.innerHTML = "";
//     errorTitle.innerHTML = "";
//     errorImg.innerHTML = "";

//     titleItem.value = "";
//     priceItem.value = "";
//     imgItem.value = ""


//     const formData = new FormData(form);
//     formData.append("title", title);
//     formData.append("price", price);
//     formData.append("img", img);


//     const xhttp  = new XMLHttpRequest();
//     xhttp.open("POST", '/addNewItem', true);
//     xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);

//     xhttp.onreadystatechange = function() {
//         if (xhttp.readyState === 4 && xhttp.status === 200) {
//             // răspunsul este primite cu succes
//             console.log(xhttp.responseText);
//         }
//     };
    

//     xhttp.send(formData);

//     console.log(formData)

    
// })

