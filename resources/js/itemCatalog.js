const title = document.querySelector("#title");
const inputTitle = document.querySelector(".input_title_active");
const updateTitleBtn = document.querySelector(".update_item_title_btn");
const titleContainerDiv = document.querySelector(".title_item");
const addTitleInBdBtn = document.querySelector(".add_data_in_bd_btn_active");
const btnsUpdateTitle = document.querySelector(".update_title");
const idItem = document.querySelector("#hiddenId");
const cancelBtnUpdateTitle = document.querySelector(".cancel_btn");

const price = document.querySelector("#price");
const inputPrice = document.querySelector(".input_price_active");
const updatePriceBtn = document.querySelector(".update_item_price_btn");
const priceContainerDiv = document.querySelector(".price_item");
const addPriceInBdBtn = document.querySelector(
    ".add_data_in_bd_btn_active_price"
);
const btnsUpdatePrice = document.querySelector(".update_price");
const cancelBtnUpdatePrice = document.querySelector(".cancel_btn_price");

const csrfToken = document
    .querySelector('meta[name="csrf-token"]')
    .getAttribute("content");

let titleUpdate = false;
let inputState = false;

titleContainerDiv.addEventListener("mouseenter", function () {
    titleUpdate = true;

    if (titleUpdate && inputState === false) {
        updateTitleBtn.classList.remove("update_item_title_btn");
        updateTitleBtn.classList.add("update_item_title_btn_active");

        updateTitleBtn.addEventListener("click", function (e) {
            e.preventDefault();

            inputState = true;

            updateTitleBtn.classList.remove("update_item_title_btn_active");
            updateTitleBtn.classList.add("update_item_title_btn");

            btnsUpdateTitle.classList.remove("update_title");
            btnsUpdateTitle.classList.add("update_title_active");

            cancelBtnUpdateTitle.addEventListener("click", function () {
                inputState = false;
                titleUpdate = false;

                btnsUpdateTitle.classList.remove("update_title_active");
                btnsUpdateTitle.classList.add("update_title");

                updateTitleBtn.classList.remove("update_item_title_btn");
                updateTitleBtn.classList.add("update_item_title_btn_active");
            });

            addTitleInBdBtn.addEventListener("click", function () {
                const value = inputTitle.value;
                inputTitle.value = "";

                if (value === "") return;
                title.innerHTML = `${value}`;

                inputState = false;
                titleUpdate = false;

                btnsUpdateTitle.classList.remove("update_title_active");
                btnsUpdateTitle.classList.add("update_title");

                updateTitleBtn.classList.remove("update_item_title_btn");
                updateTitleBtn.classList.add("update_item_title_btn_active");

                const form = new FormData();
                form.append("id", idItem.value);
                form.append("title", value);

                const hppt = new XMLHttpRequest();

                hppt.open("POST", "/updateItem", true);
                hppt.setRequestHeader("X-CSRF-TOKEN", csrfToken);

                hppt.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        console.log(hppt.responseText);
                    }
                };

                hppt.send(form);
            });
        });
    }
});

titleContainerDiv.addEventListener("mouseleave", function () {
    if (titleUpdate && inputState === false) {
        titleUpdate = false;
        updateTitleBtn.classList.remove("update_item_title_btn_active");
        updateTitleBtn.classList.add("update_item_title_btn");
    }
});

let priceUpdate = false;
let priceInputState = false;

priceContainerDiv.addEventListener("mouseenter", function () {
    priceUpdate = true;

    if (priceUpdate && priceInputState === false) {
        updatePriceBtn.classList.remove("update_item_price_btn");
        updatePriceBtn.classList.add("update_item_price_btn_active");

        updatePriceBtn.addEventListener("click", function (e) {
            e.preventDefault();

            priceInputState = true;

            updatePriceBtn.classList.remove("update_item_price_btn_active");
            updatePriceBtn.classList.add("update_item_price_btn");

            btnsUpdatePrice.classList.remove("update_price");
            btnsUpdatePrice.classList.add("update_price_active");

            cancelBtnUpdatePrice.addEventListener("click", function () {
                priceInputState = false;
                priceUpdate = false;

                btnsUpdatePrice.classList.remove("update_price_active");
                btnsUpdatePrice.classList.add("update_price");

                updatePriceBtn.classList.remove("update_item_price_btn");
                updatePriceBtn.classList.add("update_item_price_btn_active");
            });

            addPriceInBdBtn.addEventListener("click", function () {
                const value = inputPrice.value;
                inputTitle.value = "";

                if (value === "") return;
                price.innerHTML = `${value}`;

                priceInputState = false;
                priceUpdate = false;

                btnsUpdatePrice.classList.remove("update_price_active");
                btnsUpdatePrice.classList.add("update_price");

                updatePriceBtn.classList.remove("update_item_price_btn");
                updatePriceBtn.classList.add("update_item_price_btn_active");

                const form = new FormData();
                form.append("id", idItem.value);
                form.append("price", value);

                const hppt = new XMLHttpRequest();

                hppt.open("POST", "/updateItemPrice", true);
                hppt.setRequestHeader("X-CSRF-TOKEN", csrfToken);

                hppt.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        console.log(hppt.responseText);
                    }
                };

                hppt.send(form);
            });
        });
    }
});

priceContainerDiv.addEventListener("mouseleave", function () {
    if (priceUpdate && priceInputState === false) {
        priceUpdate = false;
        updatePriceBtn.classList.remove("update_item_price_btn_active");
        updatePriceBtn.classList.add("update_item_price_btn");
    }
});
