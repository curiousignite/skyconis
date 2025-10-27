const darkMode = getCookie("darkMode");
function getCookie(name) {
  const value = `; ${document.cookie}`;
  const parts = value.split(`; ${name}=`);
  if (parts.length === 2) return parts.pop().split(";").shift();
}
if (darkMode == "true") {
  document.querySelector(".switch__input").checked = true;
  DarkReader.setFetchMethod(window.fetch);
  DarkReader.enable();
} else {
  document.querySelector(".switch__input").checked = false;
  DarkReader.disable();
}
const checkbox = document.querySelector(".switch__input");
checkbox.addEventListener("change", function () {
  if (this.checked) {
    DarkReader.setFetchMethod(window.fetch);
    DarkReader.enable();
    document.cookie = "darkMode=true;";
  } else {
    DarkReader.disable();
    document.cookie = "darkMode=false";
  }
});
