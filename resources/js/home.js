const deleteItem = document.querySelectorAll(".btn");
const parentElement = document.querySelector(".items");

deleteItem.forEach(element => {

    element.addEventListener("click", function(e){
        const id = element.dataset.id;
        console.log(id)
        const http = new XMLHttpRequest();
        http.open('GET', `/delete/${id}`, true);

        http.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
               // Typical action to be performed when the document is ready:
               console.log(http.responseText)
            }
        };
        http.send();

        const targetDelete = e.target.parentElement.parentElement;
       


       parentElement.removeChild(targetDelete);
    })

    
});

