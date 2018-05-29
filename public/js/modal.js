$('#editGameModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var title = button.data('gametitle'); // Extract info from data-* attributes
  var descr = button.data('gamedescription'); // Extract info from data-* attributes
  var gameId = button.data("gameid");
  var price = button.data("gameprice")
  //console.log(title + " " + descr);
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this);
  modal.find('#gameTitleUpdate').val(title);
  modal.find("#gamePriceUpdate").val(price)
  modal.find('.printGameTitle').html(title);
  modal.find('#gameDescriptionUpdate').html(descr);
  $("#gameIdUpdate").attr("action", "/api/games/" + gameId);

})
