// Call the dataTables jQuery plugin
$(document).ready(function () {
  $("#dataTable").DataTable();
});

$(document).ready(function () {
  $("#dataRumahIbadah").DataTable();
});

$(document).ready(function () {
  $("#dataVerifikasi").DataTable();
});

$(document).ready(function () {
  var fileName = "List Penerima Hibah Rumah Ibadah Masjid";
  var titleText = "List Penerima Hibah Rumah Ibadah Masjid";
  var table = $("#exportDataMasjid").DataTable({
    buttons: [
      {
        extend: "copy",
        filename: fileName,
        title: titleText,
        exportOptions: {
          columns: [0, 1, 2, 3, 4],
        },
      },
      {
        extend: "csv",
        filename: fileName,
        title: titleText,
        exportOptions: {
          columns: [0, 1, 2, 3, 4],
        },
      },
      {
        extend: "excel",
        filename: fileName,
        title: titleText,
        exportOptions: {
          columns: [0, 1, 2, 3, 4],
        },
      },
      {
        extend: "print",
        filename: fileName,
        title: titleText,
        exportOptions: {
          columns: [0, 1, 2, 3, 4],
        },
      },
    ],
  });

  table.buttons().container().appendTo(".button-header");
});

$(document).ready(function () {
  var fileName = "List Seluruh Penerima Hibah Rumah Ibadah";
  var titleText = "List Seluruh Penerima Hibah Rumah Ibadah";
  var table = $("#exportData").DataTable({
    buttons: [
      {
        extend: "copy",
        filename: fileName,
        title: titleText,
      },
      {
        extend: "csv",
        filename: fileName,
        title: titleText,
      },
      {
        extend: "excel",
        filename: fileName,
        title: titleText,
      },
      {
        extend: "print",
        filename: fileName,
        title: titleText,
      },
    ],
  });

  table.buttons().container().appendTo(".button-header");
});

$(document).ready(function () {
  var fileName = "List Penerima Hibah Rumah Ibadah Musholla";
  var titleText = "List Penerima Hibah Rumah Ibadah Musholla";
  var table = $("#exportDataMusholla").DataTable({
    buttons: [
      {
        extend: "copy",
        filename: fileName,
        title: titleText,
        exportOptions: {
          columns: [0, 1, 2, 3, 4],
        },
      },
      {
        extend: "csv",
        filename: fileName,
        title: titleText,
        exportOptions: {
          columns: [0, 1, 2, 3, 4],
        },
      },
      {
        extend: "excel",
        filename: fileName,
        title: titleText,
        exportOptions: {
          columns: [0, 1, 2, 3, 4],
        },
      },
      {
        extend: "print",
        filename: fileName,
        title: titleText,
        exportOptions: {
          columns: [0, 1, 2, 3, 4],
        },
      },
    ],
  });

  table.buttons().container().appendTo(".button-header");
});

$(document).ready(function () {
  var fileName = "List Penerima Hibah Rumah Ibadah Gereja";
  var titleText = "List Penerima Hibah Rumah Ibadah Gereja";
  var table = $("#exportDataGereja").DataTable({
    buttons: [
      {
        extend: "copy",
        filename: fileName,
        title: titleText,
        exportOptions: {
          columns: [0, 1, 2, 3, 4],
        },
      },
      {
        extend: "csv",
        filename: fileName,
        title: titleText,
        exportOptions: {
          columns: [0, 1, 2, 3, 4],
        },
      },
      {
        extend: "excel",
        filename: fileName,
        title: titleText,
        exportOptions: {
          columns: [0, 1, 2, 3, 4],
        },
      },
      {
        extend: "print",
        filename: fileName,
        title: titleText,
        exportOptions: {
          columns: [0, 1, 2, 3, 4],
        },
      },
    ],
  });

  table.buttons().container().appendTo(".button-header");
});

$(document).ready(function () {
  var fileName = "List Penerima Hibah Pondok Pesantren";
  var titleText = "List Penerima Hibah Pondok Pesantren";
  var table = $("#exportDataPonpes").DataTable({
    buttons: [
      {
        extend: "copy",
        filename: fileName,
        title: titleText,
        exportOptions: {
          columns: [0, 1, 2, 3, 4],
        },
      },
      {
        extend: "csv",
        filename: fileName,
        title: titleText,
        exportOptions: {
          columns: [0, 1, 2, 3, 4],
        },
      },
      {
        extend: "excel",
        filename: fileName,
        title: titleText,
        exportOptions: {
          columns: [0, 1, 2, 3, 4],
        },
      },
      {
        extend: "print",
        filename: fileName,
        title: titleText,
        exportOptions: {
          columns: [0, 1, 2, 3, 4],
        },
      },
    ],
  });

  table.buttons().container().appendTo(".button-header");
});

$(document).ready(function () {
  var fileName = "List Penerima Hibah TPA dan TPQ";
  var titleText = "List Penerima Hibah TPA dan TPQ";
  var table = $("#exportDataTPATPQ").DataTable({
    buttons: [
      {
        extend: "copy",
        filename: fileName,
        title: titleText,
        exportOptions: {
          columns: [0, 1, 2, 3, 4],
        },
      },
      {
        extend: "csv",
        filename: fileName,
        title: titleText,
        exportOptions: {
          columns: [0, 1, 2, 3, 4],
        },
      },
      {
        extend: "excel",
        filename: fileName,
        title: titleText,
        exportOptions: {
          columns: [0, 1, 2, 3, 4],
        },
      },
      {
        extend: "print",
        filename: fileName,
        title: titleText,
        exportOptions: {
          columns: [0, 1, 2, 3, 4],
        },
      },
    ],
  });

  table.buttons().container().appendTo(".button-header");
});

$(document).ready(function () {
  var fileName = "List Penerima Hibah Rumah Ibadah Pura";
  var titleText = "List Penerima Hibah Rumah Ibadah Pura";
  var table = $("#exportDataPura").DataTable({
    buttons: [
      {
        extend: "copy",
        filename: fileName,
        title: titleText,
        exportOptions: {
          columns: [0, 1, 2, 3, 4],
        },
      },
      {
        extend: "csv",
        filename: fileName,
        title: titleText,
        exportOptions: {
          columns: [0, 1, 2, 3, 4],
        },
      },
      {
        extend: "excel",
        filename: fileName,
        title: titleText,
        exportOptions: {
          columns: [0, 1, 2, 3, 4],
        },
      },
      {
        extend: "print",
        filename: fileName,
        title: titleText,
        exportOptions: {
          columns: [0, 1, 2, 3, 4],
        },
      },
    ],
  });

  table.buttons().container().appendTo(".button-header");
});
