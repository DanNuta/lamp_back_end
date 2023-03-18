const title = document.querySelector("#title");
const inputTitle = document.querySelector(".input_title");
const updateTitle = document.querySelector(".update_item_title");
const titleContainerDiv = document.querySelector(".title_item");

let titleUpdate = false;

titleContainerDiv.addEventListener("mouseenter", function () {
    titleUpdate = true;

    if (titleUpdate) {
        updateTitle.classList.add("update_item_title_active");
    }

    console.log(titleUpdate);
});

titleContainerDiv.addEventListener("mouseleave", function () {
    titleUpdate = false;

    if (!titleUpdate) {
        updateTitle.classList.remove("update_item_title_active");
        updateTitle.classList.add("update_item_title");
    }

    console.log(titleUpdate);
});

console.log(title);
