function validateForm() {
   // Validate Title
    var x = document.getElementsByName("name").value
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
}