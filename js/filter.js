// filter.js
$(document).ready(function () {
  // Tangani ketika checkbox diubah
  $('#categoryFilter input[type="checkbox"]').change(function () {
    applyFilter();
  });

  // Tangani ketika tombol APPLY diklik
  $("#applyFilter").click(function () {
    applyFilter();
  });

  // Tangani ketika tombol CLEAR diklik
  $("#clearFilter").click(function () {
    clearFilter();
  });

  function applyFilter() {
    // Dapatkan nilai checkbox yang dicentang
    var selectedCategories = $("#categoryFilter input:checked")
      .map(function () {
        return $(this).val();
      })
      .get();

    // Sembunyikan semua elemen
    $(".filterable-element").hide();

    // Tampilkan elemen yang sesuai dengan kategori yang dicentang
    selectedCategories.forEach(function (category) {
      $("." + category).show();
    });
  }

  function clearFilter() {
    // Bersihkan semua centang pada checkbox
    $('#categoryFilter input[type="checkbox"]').prop("checked", false);

    // Tampilkan kembali semua elemen
    $(".filterable-element").show();
  }
});
