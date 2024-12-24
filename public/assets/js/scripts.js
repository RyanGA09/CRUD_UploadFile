// Add confirmation for delete action
document.addEventListener("DOMContentLoaded", function () {
  const deleteButtons = document.querySelectorAll(".delete-button");

  deleteButtons.forEach((button) => {
    button.addEventListener("click", function (event) {
      const confirmation = confirm(
        "Are you sure you want to delete this file?"
      );
      if (!confirmation) {
        event.preventDefault();
      }
    });
  });
});
