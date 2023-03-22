const deleteCategory = document.querySelectorAll(".delete_category_btn");
const category = document.querySelector(".category");
const token = document.head.querySelector('meta[name="csrf-token"]');

deleteCategory.forEach((element) => {
    element.addEventListener("click", function () {
        const id = element.dataset.id;
        const target = element.parentElement;

        category.removeChild(target);

        const form = new FormData();
        form.append("id", id);

        axios.defaults.headers.common["X-CSRF-TOKEN"] = token.content;

        axios
            .delete("/deleteCategory", { params: { id: id } })
            .then((response) => {
                console.log(response.data);
            })
            .catch((error) => {
                console.log(error.response.data);
            });
    });
});
