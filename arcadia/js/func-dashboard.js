$(document).ready(function () {
  //validation reviews

  $(".check").click(function () {
    let idCheck = $(this).attr("id_review");
    $.post("../functions/admin-functions/validate-reviews.php", {
      id_review: idCheck,
    });
  });

  //delete reviews

  $(".cross").click(function () {
    let idCross = $(this).attr("id_review");
    $.post("../functions/admin-functions/delete-reviews.php", {
      id_review: idCross,
    });
  });
});
