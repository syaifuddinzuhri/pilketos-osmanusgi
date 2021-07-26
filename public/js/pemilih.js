$(function () {
    $("#table-pemilih").DataTable({
        responsive: true,
        autoWidth: false,
        processing: true,
        serverSide: true,
        ajax: {
            url: `${APP_URL}/admin/pemilih`
        }, columns: [
            { data: "DT_RowIndex", name: "DT_RowIndex", className: "text-center", width: "4%", },
            { data: "user.nisn", name: "user.nisn" },
            { data: "user.name", name: "user.name" },
            { data: "user.class", name: "user.class" },
            { data: "user.major", name: "user.major" },
            { data: "candidate", name: "candidate" },
            { data: "order", name: "order" },
            { data: "action", name: "action", orderable: false, searchable: false, }
        ]
    });

    $("#table-pemilih").on("click", ".btn-delete-pemilih", function () {
        var id = $(this).attr("data-id");
        $("#form-delete-pemilih").attr(
            "action",
            `${APP_URL}/admin/pemilih/${id}`
        );
    });

})
