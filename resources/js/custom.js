$("#document").on("change", function (e) {
  let files = document.getElementById("document").files;
  let list = "";

  if (files.length > 0) {
    for (var i = 0; i < files.length; i++) {
      list += files[i].name + ", ";
    }
  }

  $("#note").val(list);
});
