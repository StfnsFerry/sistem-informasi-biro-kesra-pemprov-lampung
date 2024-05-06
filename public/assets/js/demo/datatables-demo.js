// Call the dataTables jQuery plugin
$(document).ready(function () {
  $("#dataTable").DataTable();
});

$(document).ready(function () {
  $("#dataRumahIbadah").DataTable();
});

$(document).ready(function () {
  $("#dataTokohAgama").DataTable();
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

$(document).ready(function () {
  var fileName = "List Penerima Hibah Guru Ngaji";
  var titleText = "List Penerima Hibah Guru Ngaji";
  var table = $("#exportDataGuruNgaji").DataTable({
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
  var fileName = "List Seluruh Penerima Hibah Tokoh Agama";
  var titleText = "List Seluruh Penerima Hibah Tokoh Agama";
  var table = $("#exportDataTokohAgama").DataTable({
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
  var fileName = "List Penerima Hibah Marbot";
  var titleText = "List Penerima Hibah Marbot";
  var table = $("#exportDataMarbot").DataTable({
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
  var fileName = "List Penerima Hibah Imam Masjid";
  var titleText = "List Penerima Hibah Imam Masjid";
  var table = $("#exportDataImamMasjid").DataTable({
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
  var fileName = "List Seluruh Penerima Hibah Tahfidzul Qur'an";
  var titleText = "List Seluruh Penerima Hibah Tahfidzul Qur'an";
  var table = $("#exportDataTahfidzul").DataTable({
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
  var fileName = "List Penerima Hibah Lima Juz";
  var titleText = "List Penerima Hibah Lima Juz";
  var table = $("#exportDataLimaJuz").DataTable({
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
  var fileName = "List Penerima Hibah Sepuluh Juz";
  var titleText = "List Penerima Hibah Sepuluh Juz";
  var table = $("#exportDataSepuluhJuz").DataTable({
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
  var fileName = "List Penerima Hibah DuaPuluh Juz";
  var titleText = "List Penerima Hibah DuaPuluh Juz";
  var table = $("#exportDataDuaPuluhJuz").DataTable({
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
  var fileName = "List Penerima Hibah TigaPuluh Juz";
  var titleText = "List Penerima Hibah TigaPuluh Juz";
  var table = $("#exportDataTigaPuluhJuz").DataTable({
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
