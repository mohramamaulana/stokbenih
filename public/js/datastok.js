new gridjs.Grid({
    columns: [
        {
            name: "ID",
            hidden: true, // Hide the column in the browser
        },
        "Kabupaten",
        "Nama Produsen/Penangkar",
        {
            name: "Jumlah (Kg)",
            formatter: (cell) => gridjs.html(`<span>${cell}</span>`),
        },
        {
            name: "Edit",
            formatter: (cell, row) =>
                gridjs.html(
                    `<button class="btn btn-sm btn-primary edit-button" data-id="${row.cells[0].data}"> Edit </button>`
                ),
        },
    ],
    search: true,
    pagination: {
        limit: 15,
    },
    server: {
        url: "/admin/getStok",
        then: (data) =>
            data.data.map((card) => [
                card.id,
                card.kabupaten,
                card.nama,
                card.jumlah,
            ]),
    },
}).render(document.getElementById("wrapper"));

// Add event listener for edit button clicks
document.getElementById("wrapper").addEventListener("click", function (event) {
    if (event.target.classList.contains("edit-button")) {
        const id = event.target.dataset.id;
        // Display the modal
        const modal = new bootstrap.Modal(document.getElementById("mdlStok"));
        modal.show();

        // Here you can implement your logic to populate modal fields using the id
        // For demonstration purpose, let's populate name input with the id
        document.getElementById("nameLarge").value = id;
    }
});

new gridjs.Grid({
    columns: ["No", "Kabupaten", "Nama Produsen/Penangkar", "Jumlah", "Action"],
    pagination: {
        limit: 15,
    },
    search: true,

    server: {
        url: "/admin/getStok",
        then: (data) =>
            data.data.map((card, index) => [
                index + 1,
                card.kabupaten,
                card.nama,
                card.jumlah,
            ]),
    },
}).render(document.getElementById("wrapper"));
